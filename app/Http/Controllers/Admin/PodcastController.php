<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Models\PodcastPlaylist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::with('playlist')->latest()->paginate(10);
        return view('admin.podcast.index', compact('podcasts'));
    }

    public function create()
    {
        $playlists = PodcastPlaylist::active()->get();
        return view('admin.podcast.create', compact('playlists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'playlist_id' => 'nullable|exists:podcast_playlists,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'audio_file' => 'required|file|mimes:mp3,wav,aac,ogg|max:51200', // 50MB max
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'nullable|integer',
            'publish_date' => 'nullable|date',
            'is_featured' => 'boolean',
            'is_active' => 'boolean'
        ]);

        // Ambil semua data kecuali file
        $data = $request->except(['audio_file', 'cover_image']);

        // Buat slug dari title
        $data['slug'] = Str::slug($request->title);

        // Set tanggal publish jika tidak diberikan
        $data['publish_date'] = $data['publish_date'] ?? now();

        // Simpan file audio jika ada
        if ($request->hasFile('audio_file')) {
            $audioFile = $request->file('audio_file');
            $data['audio_file'] = $audioFile->store('podcasts/audio', 'public');

            // Jika durasi belum diisi, ambil dari file audio
            if (empty($data['duration'])) {
                $data['duration'] = $this->getAudioDuration($audioFile);
            }
        }

        // Simpan cover image jika ada
        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('podcasts/images', 'public');
        }

        // Simpan data ke database
        Podcast::create($data);

        return redirect()->route('admin.podcast.index')
            ->with('success', 'Podcast created successfully.');
    }


    public function edit(Podcast $podcast)
    {
        $playlists = PodcastPlaylist::active()->get();
        return view('admin.podcast.edit', compact('podcast', 'playlists'));
    }

    public function update(Request $request, Podcast $podcast)
    {
        $request->validate([
            'playlist_id' => 'nullable|exists:podcast_playlists,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'audio_file' => 'nullable|file|mimes:mp3,wav,aac,ogg|max:51200',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'nullable|integer',
            'publish_date' => 'nullable|date',
            'is_featured' => 'boolean',
            'is_active' => 'boolean'
        ]);

        $data = $request->except(['audio_file', 'cover_image']);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('audio_file')) {
            // Delete old audio file if exists
            if ($podcast->audio_file) {
                \Storage::disk('public')->delete($podcast->audio_file);
            }

            $data['audio_file'] = $request->file('audio_file')->store('podcasts/audio', 'public');

            // Update duration if audio file changed
            $data['duration'] = $this->getAudioDuration($request->file('audio_file'));
        }

        if ($request->hasFile('cover_image')) {
            // Delete old image if exists
            if ($podcast->cover_image) {
                \Storage::disk('public')->delete($podcast->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('podcasts/images', 'public');
        }

        $podcast->update($data);

        return redirect()->route('admin.podcast.index')
            ->with('success', 'Podcast updated successfully.');
    }

    public function destroy(Podcast $podcast)
    {
        if ($podcast->audio_file) {
            \Storage::disk('public')->delete($podcast->audio_file);
        }
        if ($podcast->cover_image) {
            \Storage::disk('public')->delete($podcast->cover_image);
        }

        $podcast->delete();

        return redirect()->route('admin.podcast.index')
            ->with('success', 'Podcast deleted successfully.');
    }

    protected function getAudioDuration($audioFile)
    {
        try {
            $getID3 = new \getID3();
            $fileInfo = $getID3->analyze($audioFile->getPathname());
            return (int) ceil($fileInfo['playtime_seconds']);
        } catch (\Exception $e) {
            return null;
        }
    }
}
