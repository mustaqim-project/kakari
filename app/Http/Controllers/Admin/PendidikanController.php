<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class PendidikanController extends Controller
{

    use FileUploadTrait;

    public function __construct()
    {
        $this->middleware(['permission:pendidikan index,admin'])->only('index');
        $this->middleware(['permission:pendidikan create,admin'])->only(['create', 'store']);
        $this->middleware(['permission:pendidikan update,admin'])->only(['edit', 'update']);
        $this->middleware(['permission:pendidikan delete,admin'])->only(['destroy']);
    }




    // public function index()
    // {
    //     $pendidikans = Pendidikan::where('is_active', true)
    //         ->latest()
    //         ->paginate(6); // 6 items per page to match the 2 rows of 3 cards

    //     return view('pendidikan.index', compact('pendidikans'));
    // }

    public function index()
    {
        $pendidikans = Pendidikan::latest()->paginate(10);
        return view('admin.pendidikan.index', compact('pendidikans'));
    }

    public function create()
    {
        return view('admin.pendidikan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'              => 'required|string|max:255',
            'tipe_program'       => 'required|in:formal,nonformal,online',
            'deskripsi'          => 'required|string',
            'konten'             => 'nullable|string',
            'gambar'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi'             => 'required|string',
            'tanggal_mulai'      => 'required|date',
            'tanggal_berakhir'   => 'nullable|date|after_or_equal:tanggal_mulai',
            'status_pendaftaran' => 'nullable|string',
            'link_pendaftaran'   => 'nullable|url',
            'akreditasi'         => 'nullable|string',
            'badge'              => 'nullable|string',
            'kuota'              => 'nullable|string',
            'jadwal'             => 'nullable|string',
            'is_active'          => 'nullable|boolean',
        ]);

        $imagePath = $this->handleFileUpload($request, 'image');

        $pendidikan = new Pendidikan([
            'judul'              => $validated['judul'],
            'tipe_program'       => $validated['tipe_program'],
            'deskripsi'          => $validated['deskripsi'],
            'konten'             => $validated['konten'] ?? null,
            'gambar'             => $imagePath,
            'lokasi'             => $validated['lokasi'],
            'tanggal_mulai'      => $validated['tanggal_mulai'],
            'tanggal_berakhir'   => $validated['tanggal_berakhir'] ?? null,
            'status_pendaftaran' => $validated['status_pendaftaran'] ?? null,
            'link_pendaftaran'   => $validated['link_pendaftaran'] ?? null,
            'akreditasi'         => $validated['akreditasi'] ?? null,
            'badge'              => $validated['badge'] ?? null,
            'kuota'              => $validated['kuota'] ?? null,
            'jadwal'             => $validated['jadwal'] ?? null,
            'is_active'          => $request->has('is_active') && $request->is_active ? 1 : 0,
        ]);

        $pendidikan->save();

        toast('Program pendidikan berhasil ditambahkan', 'success')->width('330');

        return redirect()->route('admin.pendidikan.index');
    }


    public function edit(Pendidikan $pendidikan)
    {
        return view('admin.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, Pendidikan $pendidikan)
    {
        $validated = $request->validate([
            'judul'              => 'required|string|max:255',
            'tipe_program'       => 'required|in:formal,nonformal,online',
            'deskripsi'          => 'required|string',
            'konten'             => 'nullable|string',
            'gambar'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi'             => 'required|string',
            'tanggal_mulai'      => 'required|date',
            'tanggal_berakhir'   => 'nullable|date|after_or_equal:tanggal_mulai',
            'status_pendaftaran' => 'nullable|string',
            'link_pendaftaran'   => 'nullable|url',
            'akreditasi'         => 'nullable|string',
            'badge'              => 'nullable|string',
            'kuota'              => 'nullable|string',
            'jadwal'             => 'nullable|string',
            'is_active'          => 'nullable|boolean',
        ]);

        // Tangani upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($pendidikan->gambar && file_exists(public_path($pendidikan->gambar))) {
                unlink(public_path($pendidikan->gambar));
            }

            // Simpan gambar baru
            $validated['gambar'] = $this->handleFileUpload($request, 'gambar');
        }

        // Tangani status aktif
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        $pendidikan->update($validated);

        return redirect()->route('admin.pendidikan.index')
            ->with('success', 'Program pendidikan berhasil diperbarui');
    }



    public function destroy(Pendidikan $pendidikan)
    {
        if ($pendidikan->gambar && file_exists(public_path($pendidikan->gambar))) {
            unlink(public_path($pendidikan->gambar));
        }

        $pendidikan->delete();

        return redirect()->route('admin.pendidikan.index')
            ->with('success', 'Program pendidikan berhasil dihapus');
    }



    // For filtering programs in the frontend
    public function filter(Request $request)
    {
        $query = Pendidikan::query()->where('is_active', true);

        if ($request->has('tipe_program') && $request->tipe_program != 'all') {
            $query->where('tipe_program', $request->tipe_program);
        }

        if ($request->has('lokasi') && $request->lokasi != 'all') {
            $query->where('lokasi', $request->lokasi);
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%$search%")
                    ->orWhere('deskripsi', 'like', "%$search%");
            });
        }

        $pendidikans = $query->paginate(6);

        return view('pendidikan.index', compact('pendidikans'));
    }
}
