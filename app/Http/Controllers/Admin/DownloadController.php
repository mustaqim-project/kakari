<?php

// app/Http/Controllers/Admin/DownloadController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use App\Models\CatDownload;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:download index,admin'])->only('index');
        $this->middleware(['permission:download create,admin'])->only(['create', 'store']);
        $this->middleware(['permission:download update,admin'])->only(['edit', 'update']);
        $this->middleware(['permission:download delete,admin'])->only(['destroy']);
    }

    public function index()
    {
        $downloads = Download::with('catDownload')->get();
        return view('admin.download.index', compact('downloads'));
    }

    public function create()
    {
        $categories = CatDownload::all();
        return view('admin.download.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_download_id' => 'required|exists:cat_downloads,id',
            'download_file' => 'required|file',
            'name' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        // Pastikan folder upload tersedia
        $uploadPath = public_path('upload/download');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Simpan file ke folder publik
        $file = $request->file('download_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($uploadPath, $fileName);

        // Simpan path relatif ke DB
        $filePath = 'upload/download/' . $fileName;

        Download::create([
            'cat_download_id' => $request->cat_download_id,
            'download_file' => $filePath,
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.download.index')->with('success', 'File berhasil diunggah.');
    }


    public function update(Request $request, $id)
    {
        $download = Download::findOrFail($id);

        $request->validate([
            'cat_download_id' => 'required|exists:cat_downloads,id',
            'download_file' => 'nullable|file',
            'name' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $data = [
            'cat_download_id' => $request->cat_download_id,
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ];

        // Jika file baru diunggah, ganti file lama
        if ($request->hasFile('download_file')) {
            $uploadPath = public_path('upload/download');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Hapus file lama jika ada
            if (file_exists(public_path($download->download_file))) {
                unlink(public_path($download->download_file));
            }

            $file = $request->file('download_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $fileName);
            $data['download_file'] = 'upload/download/' . $fileName;
        }

        $download->update($data);

        return redirect()->route('admin.download.index')->with('success', 'File berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $download = Download::findOrFail($id);

        // Hapus file dari public folder
        if (file_exists(public_path($download->download_file))) {
            unlink(public_path($download->download_file));
        }

        $download->delete();

        return redirect()->route('admin.download.index')->with('success', 'File berhasil dihapus.');
    }
}
