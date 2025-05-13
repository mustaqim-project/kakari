<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Streaming;

class StreamingController extends Controller
{
    public function index()
    {
        $streaming = Streaming::latest('id')->first();  // Ambil data dengan ID terakhir
        return view('admin.streaming.index', compact('streaming'));
    }


    public function update(Request $request, Streaming $streaming)
    {
        $request->validate([
            'code_frame' => 'nullable|string',
            'judul' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $streaming->update($request->only('code_frame', 'judul', 'deskripsi'));

        return redirect()->route('admin.streaming.index')->with('success', 'Streaming updated successfully.');
    }


}
