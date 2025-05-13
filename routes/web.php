<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitemapController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('language', LanguageController::class)->name('language');

/** News Routes */
Route::get('news-deatils/{slug}', [HomeController::class, 'ShowNews'])->name('news-details');
Route::get('news', [HomeController::class, 'news'])->name('news');

/** News Comment Routes */
Route::post('news-comment', [HomeController::class, 'handleComment'])->name('news-comment');
Route::post('news-comment-replay', [HomeController::class, 'handleReplay'])->name('news-comment-replay');
Route::delete('news-comment-destroy', [HomeController::class, 'commentDestory'])->name('news-comment-destroy');

/** Newsletter Routes */
Route::post('subscribe-newsletter', [HomeController::class, 'SubscribeNewsLetter'])->name('subscribe-newsletter');

/** About Page Route */
Route::get('about', [HomeController::class, 'about'])->name('about');

/** Kebijakan Page Route */
Route::get('kebijakan', [HomeController::class, 'kebijakan'])->name('kebijakan');

/** Contact Page Routes */
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'handleContactFrom'])->name('contact.submit');

/** Playlist & Video Routes */
Route::get('playlists', [HomeController::class, 'playlists'])->name('playlists');
Route::get('playlist/{slug}', [HomeController::class, 'showPlaylist'])->name('playlist.show');

/** Podcast Routes */
Route::get('podcasts', [HomeController::class, 'podcastPlaylists'])->name('podcasts');
Route::get('podcast/{slug}', [HomeController::class, 'showPodcastPlaylist'])->name('podcast.playlist.show');
Route::get('podcast/{playlistSlug}/{podcastSlug}', [HomeController::class, 'showPodcast'])->name('podcast.show');

/** Streaming Routes */
Route::get('streaming', [HomeController::class, 'streaming'])->name('streaming');

/** Download Routes */
Route::get('downloads', [HomeController::class, 'downloads'])->name('downloads');
Route::get('downloads/category/{id}', [HomeController::class, 'downloadsByCategory'])->name('downloads.category');

/** E-Koran Routes */
Route::get('e-koran', [HomeController::class, 'ekoran'])->name('ekoran');
Route::get('e-koran/{id}', [HomeController::class, 'showEkoran'])->name('ekoran.show');

/** Pendidikan Routes */
Route::get('pendidikan', [HomeController::class, 'pendidikan'])->name('pendidikan');
Route::get('pendidikan/{id}', [HomeController::class, 'showPendidikan'])->name('pendidikan.show');

/** Donasi Routes */
Route::get('donasi', [HomeController::class, 'donasi'])->name('donasi');

// Sitemap Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/sitemap/sitemap-category-{language}.xml', [SitemapController::class, 'categories']);
Route::get('/sitemap/sitemap-tag.xml', [SitemapController::class, 'tags']);
Route::get('/sitemap/sitemap-news-{language}.xml', [SitemapController::class, 'newsIndex']);
Route::get('/sitemap/sitemap-news-en-{category}', [SitemapController::class, 'newsByCategoryEn']);
Route::get('/sitemap/sitemap-news-id-{category}', [SitemapController::class, 'newsByCategoryId']);


// Route Kajian
Route::get('kajian', [HomeController::class, 'kajian'])->name('kajian');

// Route Multimedia
Route::get('multimedia', [HomeController::class, 'multimedia'])->name('multimedia');

// Route Tokoh & Jaringan
Route::get('tokoh', [HomeController::class, 'tokoh'])->name('tokoh');

// Route Zakat & Wakaf
Route::get('zakat', [HomeController::class, 'zakat'])->name('zakat');

// Route Live Streaming
Route::get('live', [HomeController::class, 'live'])->name('live');

// Route News
// Route::get('news', [HomeController::class, 'newsIndex'])->name('news.index');
Route::get('news/{slug}', [HomeController::class, 'showNews'])->name('news.show');

// Route Search
Route::get('search', [HomeController::class, 'search'])->name('search');

// Route Category
Route::get('category/{slug}', [HomeController::class, 'categoryShow'])->name('category.show');

// Route Newsletter Subscriber
Route::post('subscribe-newsletter', [HomeController::class, 'SubscribeNewsLetter'])->name('subscribe-newsletter');
