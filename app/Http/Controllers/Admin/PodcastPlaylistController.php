<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PodcastPlaylist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PodcastPlaylistController extends Controller
{
    public function index()
    {
        $playlists = PodcastPlaylist::withCount('podcasts')->latest()->paginate(10);
        return view('admin.podcast-playlist.index', compact('playlists'));
    }

    public function create()
    {
        return view('admin.podcast-playlist.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'is_active' => 'boolean'
        ]);

        $data = $request->except('cover_image');
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('upload/podcast');

            // Buat folder jika belum ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0775, true);
            }

            $image->move($destinationPath, $filename);
            $data['cover_image'] = 'upload/podcast/' . $filename;
        }

        PodcastPlaylist::create($data);

        return redirect()->route('admin.podcast-playlist.index')
            ->with('success', 'Playlist created successfully.');
    }

    public function edit(PodcastPlaylist $podcastPlaylist)
    {
        return view('admin.podcast-playlist.edit', compact('podcastPlaylist'));
    }

    public function update(Request $request, PodcastPlaylist $podcastPlaylist)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'is_active' => 'boolean'
        ]);

        $data = $request->except('cover_image');
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('cover_image')) {
            if ($podcastPlaylist->cover_image && file_exists(public_path($podcastPlaylist->cover_image))) {
                unlink(public_path($podcastPlaylist->cover_image));
            }

            $image = $request->file('cover_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('upload/podcast');

            // Buat folder jika belum ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0775, true);
            }

            $image->move($destinationPath, $filename);
            $data['cover_image'] = 'upload/podcast/' . $filename;
        }

        $podcastPlaylist->update($data);

        return redirect()->route('admin.podcast-playlist.index')
            ->with('success', 'Playlist updated successfully.');
    }

    public function destroy(PodcastPlaylist $podcastPlaylist)
    {
        if ($podcastPlaylist->cover_image && file_exists(public_path($podcastPlaylist->cover_image))) {
            unlink(public_path($podcastPlaylist->cover_image));
        }

        $podcastPlaylist->delete();

        return redirect()->route('admin.podcast-playlist.index')
            ->with('success', 'Playlist deleted successfully.');
    }
}
