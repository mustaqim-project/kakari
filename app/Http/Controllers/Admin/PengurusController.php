<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class PengurusController extends Controller
{


    use FileUploadTrait;

    public function __construct()
    {
        $this->middleware(['permission:pengurus index,admin'])->only('index');
        $this->middleware(['permission:pengurus create,admin'])->only(['create', 'store']);
        $this->middleware(['permission:pengurus update,admin'])->only(['edit', 'update']);
        $this->middleware(['permission:pengurus delete,admin'])->only(['destroy']);
    }
    // Menampilkan daftar pengurus
    public function index()
    {
        $penguruses = Pengurus::all();
        return view('admin.pengurus.index', compact('penguruses'));
    }

    // Menampilkan form untuk membuat pengurus baru
    public function create()
    {
        return view('admin.pengurus.create');
    }

    // Menyimpan pengurus baru
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $pengurus = new Pengurus;
        $pengurus->name = $request->name;
        $pengurus->jabatan = $request->jabatan;
        $pengurus->deskripsi = $request->deskripsi;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pengurus_images', 'public');
            $pengurus->image = $imagePath;
        }

        $pengurus->save();

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit pengurus
    public function edit($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('admin.pengurus.edit', compact('pengurus'));
    }

    // Mengupdate data pengurus
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $pengurus = Pengurus::findOrFail($id);
        $pengurus->name = $request->name;
        $pengurus->jabatan = $request->jabatan;
        $pengurus->deskripsi = $request->deskripsi;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($pengurus->image && file_exists(storage_path('app/public/' . $pengurus->image))) {
                unlink(storage_path('app/public/' . $pengurus->image));
            }
            $imagePath = $request->file('image')->store('pengurus_images', 'public');
            $pengurus->image = $imagePath;
        }

        $pengurus->save();

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil diperbarui');
    }

    // Menghapus pengurus
    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);

        if ($pengurus->image && file_exists(storage_path('app/public/' . $pengurus->image))) {
            unlink(storage_path('app/public/' . $pengurus->image));
        }

        $pengurus->delete();

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil dihapus');
    }
}
