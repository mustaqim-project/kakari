<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Playlist;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with('playlist')->latest()->paginate(10);
        return view('admin.video.index', compact('videos'));
    }

    public function create()
    {
        $playlists = Playlist::active()->get();
        return view('admin.video.create', compact('playlists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'playlist_id' => 'nullable|exists:playlists,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code_frame' => 'required|string'
        ]);

        $data = $request->all();
        Video::create($data);

        return redirect()->route('admin.video.index')
            ->with('success', 'Video created successfully.');
    }

    public function edit(Video $video)
    {
        $playlists = Playlist::active()->get();
        return view('admin.video.edit', compact('video', 'playlists'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'playlist_id' => 'nullable|exists:playlists,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code_frame' => 'required|string'
        ]);

        $data = $request->all();
        $video->update($data);

        return redirect()->route('admin.video.index')
            ->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('admin.video.index')
            ->with('success', 'Video deleted successfully.');
    }
}
