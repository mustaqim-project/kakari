<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatDownload;
use Illuminate\Http\Request;

class CatDownloadController extends Controller
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
        $categories = CatDownload::all();
        return view('admin.download_cat.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.download_cat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        CatDownload::create($request->only('name'));
        return redirect()->route('admin.download_cat.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(CatDownload $download_cat)
    {
        return view('admin.download_cat.edit', compact('download_cat'));
    }

    public function update(Request $request, CatDownload $download_cat)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $download_cat->update($request->only('name'));
        return redirect()->route('admin.download_cat.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(CatDownload $download_cat)
    {
        $download_cat->delete();
        return redirect()->route('admin.download_cat.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
