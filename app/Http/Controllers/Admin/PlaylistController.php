<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::withCount('videos')->latest()->paginate(10);
        return view('admin.playlist.index', compact('playlists'));
    }

    public function create()
    {
        return view('admin.playlist.create');
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

        // Set default values if not provided
        $data['is_featured'] = $request->has('is_featured') ? $request->is_featured : false;
        $data['is_active'] = $request->has('is_active') ? $request->is_active : true;

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('playlists/images', 'public');
        }

        Playlist::create($data);

        return redirect()->route('admin.playlist.index')
            ->with('success', 'Playlist created successfully.');
    }

    public function edit(Playlist $playlist)
    {
        return view('admin.playlist.edit', compact('playlist'));
    }

    public function update(Request $request, Playlist $playlist)
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

        // Set default values if not provided
        $data['is_featured'] = $request->has('is_featured') ? $request->is_featured : false;
        $data['is_active'] = $request->has('is_active') ? $request->is_active : true;

        if ($request->hasFile('cover_image')) {
            // Delete old image if exists
            if ($playlist->cover_image) {
                \Storage::disk('public')->delete($playlist->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('playlists/images', 'public');
        }

        $playlist->update($data);

        return redirect()->route('admin.playlist.index')
            ->with('success', 'Playlist updated successfully.');
    }

    public function destroy(Playlist $playlist)
    {
        if ($playlist->cover_image) {
            \Storage::disk('public')->delete($playlist->cover_image);
        }

        $playlist->delete();

        return redirect()->route('admin.playlist.index')
            ->with('success', 'Playlist deleted successfully.');
    }
}
