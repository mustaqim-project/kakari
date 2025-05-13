<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class AboutController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
        $this->middleware(['permission:about index,admin'])->only(['index']);
        $this->middleware(['permission:about update,admin'])->only(['update']);
    }

    public function index()
    {
        $languages = Language::where('status', 1)->get();

        return view('admin.about-page.index', compact('languages'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi untuk image
            'content' => ['required'] // Validasi untuk content
        ]);

        // Ambil data About yang sudah ada berdasarkan bahasa yang dipilih
        $about = About::where('language', $request->language)->first();

        // Cek apakah file image di-upload dan simpan path-nya
        if ($request->hasFile('image')) {
            $imagePath = $this->uploadFile($request->file('image'), 'about_images'); // Pastikan Anda sudah mendefinisikan method uploadFile pada trait
        } else {
            $imagePath = $about ? $about->image : null;
        }

        // Perbarui atau buat About baru
        About::updateOrCreate(
            ['language' => $request->language],
            [
                'content' => $request->content,
                'image' => $imagePath ?? $about->image
            ]
        );

        toast(__('admin.Updated Successfully!'), 'success');

        return redirect()->back();
    }
}
