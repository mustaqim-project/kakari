<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\HomeSectionSetting;
use App\Models\News;
use App\Models\RecivedMail;
use App\Models\SocialLink;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\CatDownload;
use App\Models\Download;
use App\Models\Donasi;
use App\Models\Ekoran;
use App\Models\Pendidikan;
use App\Models\Penguurus;
use App\Models\Playlist;
use App\Models\Video;
use App\Models\PodcastPlaylist;
use App\Models\Podcast;
use App\Models\Streaming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $breakingNews = News::where(['is_breaking_news' => 1,])
            ->activeEntries()->withLocalize()->orderBy('id', 'DESC')->take(10)->get();
        $heroSlider = News::with(['category', 'auther'])
            ->where('show_at_slider', 1)
            ->activeEntries()
            ->withLocalize()
            ->orderBy('id', 'DESC')->take(7)
            ->get();

        $recentNews = News::with(['category', 'auther'])->activeEntries()->withLocalize()
            ->orderBy('id', 'DESC')->take(6)->get();
        $popularNews = News::with(['category'])->where('show_at_popular', 1)
            ->activeEntries()->withLocalize()
            ->orderBy('updated_at', 'DESC')->take(4)->get();

        $HomeSectionSetting = HomeSectionSetting::where('language', getLangauge())->first();

        if ($HomeSectionSetting) {
            $categorySectionOne = News::where('category_id', $HomeSectionSetting->category_section_one)
                ->activeEntries()->withLocalize()
                ->orderBy('id', 'DESC')
                ->take(8)
                ->get();

            $categorySectionTwo = News::where('category_id', $HomeSectionSetting->category_section_two)
                ->activeEntries()->withLocalize()
                ->orderBy('id', 'DESC')
                ->take(8)
                ->get();

            $categorySectionThree = News::where('category_id', $HomeSectionSetting->category_section_three)
                ->activeEntries()->withLocalize()
                ->orderBy('id', 'DESC')
                ->take(6)
                ->get();

            $categorySectionFour = News::where('category_id', $HomeSectionSetting->category_section_four)
                ->activeEntries()->withLocalize()
                ->orderBy('id', 'DESC')
                ->take(4)
                ->get();
        } else {
            $categorySectionOne = collect();
            $categorySectionTwo = collect();
            $categorySectionThree = collect();
            $categorySectionFour = collect();
        }


        $mostViewedPosts = News::activeEntries()->withLocalize()
            ->orderBy('views', 'DESC')
            ->take(3)
            ->get();

        // Mengambil data dari model baru
        $featuredPlaylists = Playlist::with('videos')
            ->where('is_featured', 1)
            ->where('is_active', 1)
            ->take(3)
            ->get();

        $featuredPodcasts = PodcastPlaylist::with('podcasts')
            ->where('is_featured', 1)
            ->where('is_active', 1)
            ->take(3)
            ->get();


        $latestStreaming = Streaming::whereNotNull('code_frame')->latest()->first();

        $downloadCategories = CatDownload::with('downloads')
            ->take(5)
            ->get();

        $latestDonasi = Donasi::orderBy('id', 'DESC')
            ->take(3)
            ->get();

        $latestEkoran = Ekoran::orderBy('tanggal_terbit', 'DESC')
            ->take(5)
            ->get();

        $activePendidikan = Pendidikan::where('is_active', 1)
            ->orderBy('tanggal_mulai', 'ASC')
            ->get();


         $mostCommonTags = Cache::remember('most_common_tags', 10, function () {
            return $this->mostCommonTags();
        });

        $ad = Ad::first();

        return view('frontend.home', compact(
            'breakingNews',
            'heroSlider',
            'recentNews',
            'popularNews',
            'categorySectionOne',
            'categorySectionTwo',
            'categorySectionThree',
            'categorySectionFour',
            'mostViewedPosts',
            'mostCommonTags',
            'featuredPlaylists',
            'featuredPodcasts',
            'latestStreaming',
            'downloadCategories',
            'latestDonasi',
            'latestEkoran',
            'activePendidikan',
            'ad'
        ));
    }

    public function ShowNews(string $slug)
    {
        // Cache the news based on slug - 10 minutes
        $news = Cache::remember('news_' . $slug, 10, function () use ($slug) {
            return News::with(['auther', 'tags', 'comments'])
                ->where('slug', $slug)
                ->activeEntries()
                ->withLocalize()
                ->first();
        });

        $this->countView($news);

        // Cache recent news - 10 minutes
        $recentNews = Cache::remember('recent_news_' . $news->slug, 10, function () use ($news) {
            return News::with(['category', 'auther'])
                ->where('slug', '!=', $news->slug)
                ->activeEntries()
                ->withLocalize()
                ->orderBy('id', 'DESC')
                ->take(4)
                ->get();
        });

        // Cache common tags - 10 minutes
        $mostCommonTags = Cache::remember('most_common_tags', 10, function () {
            return $this->mostCommonTags();
        });

        // Cache next post - 10 minutes
        $nextPost = Cache::remember('next_post_' . $news->id, 10, function () use ($news) {
            return News::where('id', '>', $news->id)
                ->activeEntries()
                ->withLocalize()
                ->orderBy('id', 'asc')
                ->first();
        });

        // Cache previous post - 10 minutes
        $previousPost = Cache::remember('previous_post_' . $news->id, 10, function () use ($news) {
            return News::where('id', '<', $news->id)
                ->activeEntries()
                ->withLocalize()
                ->orderBy('id', 'desc')
                ->first();
        });

        // Cache related posts by category - 10 minutes
        $relatedPosts = Cache::remember('related_posts_' . $news->category_id . '_slug_' . $news->slug, 10, function () use ($news) {
            return News::where('slug', '!=', $news->slug)
                ->where('category_id', $news->category_id)
                ->activeEntries()
                ->withLocalize()
                ->take(5)
                ->get();
        });



        // Cache advertisement - 10 minutes
        $ad = Cache::remember('ad', 10, function () {
            return Ad::first();
        });

        // Cache related news by tag - 10 minutes
        $relatedNewsByTag = Cache::remember('related_news_by_tag_' . $news->id, 10, function () use ($news) {
            return News::whereHas('tags', function ($query) use ($news) {
                $query->whereIn('name', $news->tags->pluck('name'));
            })
                ->where('id', '!=', $news->id)
                ->activeEntries()
                ->withLocalize()
                ->take(5)
                ->get();
        });

        // Insert internal links if related news by tag exists
        if ($relatedNewsByTag->isNotEmpty()) {
            $news = $this->insertInternalLinks($news, $relatedNewsByTag);
        }

        return view('frontend.news-details', compact(
            'news',
            'recentNews',
            'mostCommonTags',
            'nextPost',
            'previousPost',
            'relatedPosts',
            'ad'
        ));
    }

    // Metode untuk menampilkan daftar playlist dan video
    public function playlists()
    {
        $playlists = Playlist::where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->paginate(9);

        $featuredPlaylists = Playlist::where('is_featured', 1)
            ->where('is_active', 1)
            ->take(3)
            ->get();

        return view('frontend.playlists', compact('playlists', 'featuredPlaylists'));
    }

    // Metode untuk menampilkan detail playlist dan video-videonya
    public function showPlaylist(string $slug)
    {
        $playlist = Playlist::where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        $videos = Video::where('playlist_id', $playlist->id)
            ->orderBy('id', 'DESC')
            ->get();

        $otherPlaylists = Playlist::where('id', '!=', $playlist->id)
            ->where('is_active', 1)
            ->take(4)
            ->get();

        return view('frontend.playlist-detail', compact('playlist', 'videos', 'otherPlaylists'));
    }

    // Metode untuk menampilkan daftar podcast playlists
    public function podcastPlaylists()
    {
        $podcastPlaylists = PodcastPlaylist::where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->paginate(9);

        $featuredPodcasts = PodcastPlaylist::where('is_featured', 1)
            ->where('is_active', 1)
            ->take(3)
            ->get();

        return view('frontend.podcast-playlists', compact('podcastPlaylists', 'featuredPodcasts'));
    }

    // Metode untuk menampilkan detail podcast playlist dan podcast-podcastnya
    public function showPodcastPlaylist(string $slug)
    {
        $podcastPlaylist = PodcastPlaylist::where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        $podcasts = Podcast::where('playlist_id', $podcastPlaylist->id)
            ->where('is_active', 1)
            ->orderBy('publish_date', 'DESC')
            ->get();

        $otherPodcastPlaylists = PodcastPlaylist::where('id', '!=', $podcastPlaylist->id)
            ->where('is_active', 1)
            ->take(4)
            ->get();

        return view('frontend.podcast-playlist-detail', compact('podcastPlaylist', 'podcasts', 'otherPodcastPlaylists'));
    }

    // Metode untuk menampilkan detail podcast
    public function showPodcast(string $playlistSlug, string $podcastSlug)
    {
        $podcast = Podcast::whereHas('playlist', function ($query) use ($playlistSlug) {
            $query->where('slug', $playlistSlug);
        })
            ->where('slug', $podcastSlug)
            ->where('is_active', 1)
            ->firstOrFail();

        $relatedPodcasts = Podcast::where('id', '!=', $podcast->id)
            ->where('playlist_id', $podcast->playlist_id)
            ->where('is_active', 1)
            ->take(4)
            ->get();

        return view('frontend.podcast-detail', compact('podcast', 'relatedPodcasts'));
    }

    // Metode untuk menampilkan halaman streaming
    public function streaming()
    {
        $latestStreaming = Streaming::orderBy('id', 'DESC')->first();
        $previousStreams = Streaming::where('id', '!=', $latestStreaming->id ?? 0)
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get();

        return view('frontend.streaming', compact('latestStreaming', 'previousStreams'));
    }

    // Metode untuk menampilkan kategori download
    public function downloads()
    {
        $downloadCategories = CatDownload::with('downloads')->get();
        return view('frontend.downloads', compact('downloadCategories'));
    }

    // Metode untuk menampilkan download berdasarkan kategori
    public function downloadsByCategory($id)
    {
        $category = CatDownload::findOrFail($id);
        $downloads = Download::where('cat_download_id', $id)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('frontend.downloads-by-category', compact('category', 'downloads'));
    }

    // Metode untuk menampilkan e-koran
    public function ekoran()
    {
        $ekoran = Ekoran::orderBy('tanggal_terbit', 'DESC')
            ->paginate(12);

        return view('frontend.ekoran', compact('ekoran'));
    }

    // Metode untuk menampilkan detail e-koran
    public function showEkoran($id)
    {
        $ekoran = Ekoran::findOrFail($id);
        $recentEkoran = Ekoran::where('id', '!=', $id)
            ->orderBy('tanggal_terbit', 'DESC')
            ->take(4)
            ->get();

        return view('frontend.ekoran-detail', compact('ekoran', 'recentEkoran'));
    }

    // Metode untuk menampilkan daftar pendidikan
    public function pendidikan()
    {
        $pendidikan = Pendidikan::where('is_active', 1)
            ->orderBy('tanggal_mulai', 'ASC')
            ->paginate(9);

        $pendidikanAktif = Pendidikan::where('status_pendaftaran', 'buka')
            ->where('is_active', 1)
            ->orderBy('tanggal_mulai', 'ASC')
            ->take(3)
            ->get();

        return view('frontend.pendidikan', compact('pendidikan', 'pendidikanAktif'));
    }

    // Metode untuk menampilkan detail pendidikan
    public function showPendidikan($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $relatedPendidikan = Pendidikan::where('id', '!=', $id)
            ->where('tipe_program', $pendidikan->tipe_program)
            ->where('is_active', 1)
            ->take(3)
            ->get();

        return view('frontend.pendidikan-detail', compact('pendidikan', 'relatedPendidikan'));
    }

    // Metode untuk menampilkan halaman donasi
    public function donasi()
    {
        $donasi = Donasi::orderBy('id', 'DESC')->get();
        return view('frontend.donasi', compact('donasi'));
    }

    public function news(Request $request)
    {
        $news = News::query();

        $news->when($request->has('tag'), function ($query) use ($request) {
            $query->whereHas('tags', function ($query) use ($request) {
                $query->where('name', $request->tag);
            });
        });

        // Ambil data kategori jika ada di request
        $category = null;
        if ($request->has('category') && !empty($request->category)) {
            $category = Category::where('slug', $request->category)->first();
            $news->whereHas('category', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });
        }

        $news->when($request->has('search'), function ($query) use ($request) {
            $query->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('content', 'like', '%' . $request->search . '%');
            })->orWhereHas('category', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            });
        });

        $news = $news->activeEntries()->withLocalize()->paginate(20);

        $recentNews = News::with(['category', 'auther'])
            ->activeEntries()->withLocalize()->orderBy('id', 'DESC')->take(4)->get();

        $mostCommonTags = $this->mostCommonTags();

        $categories = Category::where(['status' => 1, 'language' => getLangauge()])->get();

        $ad = Ad::first();

        // Pastikan $category dikirim ke view
        return view('frontend.news', compact('news', 'recentNews', 'mostCommonTags', 'categories', 'ad', 'category'));
    }


    public function countView($news)
    {
        if (session()->has('viewed_posts')) {
            $postIds = session('viewed_posts');

            if (!in_array($news->id, $postIds)) {
                $postIds[] = $news->id;
                $news->increment('views');
            }
            session(['viewed_posts' => $postIds]);
        } else {
            session(['viewed_posts' => [$news->id]]);

            $news->increment('views');
        }
    }

    public function mostCommonTags()
    {
        return Tag::select('name', \DB::raw('COUNT(*) as count'))
            ->where('language', getLangauge())
            ->groupBy('name')
            ->orderByDesc('count')
            ->take(15)
            ->get();
    }

    public function handleComment(Request $request)
    {
        $request->validate([
            'comment' => ['required', 'string', 'max:1000']
        ]);

        $comment = new Comment();
        $comment->news_id = $request->news_id;
        $comment->user_id = Auth::user()->id;
        $comment->parent_id = $request->parent_id;
        $comment->comment = $request->comment;
        $comment->save();
        toast(__('frontend.Comment added successfully!'), 'success');
        return redirect()->back();
    }

    public function handleReplay(Request $request)
    {
        $request->validate([
            'replay' => ['required', 'string', 'max:1000']
        ]);

        $comment = new Comment();
        $comment->news_id = $request->news_id;
        $comment->user_id = Auth::user()->id;
        $comment->parent_id = $request->parent_id;
        $comment->comment = $request->replay;
        $comment->save();
        toast(__('frontend.Comment added successfully!'), 'success');

        return redirect()->back();
    }

    public function commentDestory(Request $request)
    {
        $comment = Comment::findOrFail($request->id);
        if (Auth::user()->id === $comment->user_id) {
            $comment->delete();
            return response(['status' => 'success', 'message' => __('frontend.Deleted Successfully!')]);
        }

        return response(['status' => 'error', 'message' => __('frontend.Someting went wrong!')]);
    }

    public function SubscribeNewsLetter(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:subscribers,email']
        ], [
            'email.unique' => __('frontend.Email is already subscribed!')
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        return response(['status' => 'success', 'message' => __('frontend.Subscribed successfully!')]);
    }

    public function about()
    {
        $about = About::where('language', getLangauge())->first();
        return view('frontend.about', compact('about'));
    }

    public function contact()
    {
        $contact = Contact::where('language', getLangauge())->first();
        $socials = SocialLink::where('status', 1)->get();
        return view('frontend.contact', compact('contact', 'socials'));
    }

    public function handleContactFrom(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'max:255'],
            'message' => ['required', 'max:500']
        ]);

        try {
            $toMail = Contact::where('language', 'en')->first();

            /** Send Mail */
            Mail::to($toMail->email)->send(new ContactMail($request->subject, $request->message, $request->email));

            /** store the mail */

            $mail = new RecivedMail();
            $mail->email = $request->email;
            $mail->subject = $request->subject;
            $mail->message = $request->message;
            $mail->save();
        } catch (\Exception $e) {
            toast(__($e->getMessage()));
        }

        toast(__('frontend.Message sent successfully!'), 'success');

        return redirect()->back();
    }
}
