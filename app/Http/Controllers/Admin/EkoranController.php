<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekoran;
use App\Traits\FileUploadTrait;
use File;

class EkoranController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
        $this->middleware(['permission:ekoran index,admin'])->only('index');
        $this->middleware(['permission:ekoran create,admin'])->only(['create', 'store']);
        $this->middleware(['permission:ekoran update,admin'])->only(['edit', 'update']);
        $this->middleware(['permission:ekoran delete,admin'])->only(['destroy']);
    }


    public function index()
    {
        $ekorans = Ekoran::latest()->paginate(10);
        return view('admin.ekoran.index', compact('ekorans'));
    }

    public function create()
    {
        return view('admin.ekoran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
            'tanggal_terbit' => 'required|date',
        ]);

        $imagePath = $this->handleFileUpload($request, 'image');

        Ekoran::create([
            'judul' => $request->judul,
            'image' => $imagePath,
            'deskripsi' => $request->deskripsi,
            'tanggal_terbit' => $request->tanggal_terbit,
        ]);

        return redirect()->route('admin.ekoran.index')->with('success', 'E-Koran berhasil ditambahkan.');
    }

    public function edit(Ekoran $ekoran)
    {
        return view('admin.ekoran.edit', compact('ekoran'));
    }

    public function update(Request $request, Ekoran $ekoran)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
            'tanggal_terbit' => 'required|date',
        ]);

        // Update the other fields
        $ekoran->judul = $request->judul;
        $ekoran->deskripsi = $request->deskripsi;
        $ekoran->tanggal_terbit = $request->tanggal_terbit;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('upload/' . $ekoran->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            // Upload the new image
            $imagePath = $this->handleFileUpload($request, 'image');
            $ekoran->image = $imagePath;
        }

        $ekoran->save();

        return redirect()->route('admin.ekoran.index')->with('success', 'E-Koran berhasil diperbarui.');
    }

    public function destroy(Ekoran $ekoran)
    {
        // Delete the image file before deleting the record
        $imagePath = public_path('upload/' . $ekoran->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $ekoran->delete();

        return redirect()->route('admin.ekoran.index')->with('success', 'E-Koran berhasil dihapus.');
    }
}
