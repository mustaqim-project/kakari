<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{


    public function __construct()
    {
        $this->middleware(['permission:donasi index,admin'])->only('index');
        $this->middleware(['permission:donasi create,admin'])->only(['create', 'store']);
        $this->middleware(['permission:donasi update,admin'])->only(['edit', 'update']);
        $this->middleware(['permission:donasi delete,admin'])->only(['destroy']);
    }


    public function index()
    {
        $donasis = Donasi::all();
        return view('admin.donasi.index', compact('donasis'));

    }

    public function create()
    {
        return view('admin.donasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bank' => 'required|string|max:255',
            'nomor_rekening' => 'required|string|max:255',
            'atas_nama' => 'required|string|max:255',
        ]);

        Donasi::create($request->all());

        return redirect()->route('donasi.index')->with('success', 'Data donasi berhasil ditambahkan.');
    }

    public function show(Donasi $donasi)
    {
        return view('donasi.show', compact('donasi'));
    }

    public function edit(Donasi $donasi)
    {
        return view('donasi.edit', compact('donasi'));
    }

    public function update(Request $request, Donasi $donasi)
    {
        $request->validate([
            'bank' => 'required|string|max:255',
            'nomor_rekening' => 'required|string|max:255',
            'atas_nama' => 'required|string|max:255',
        ]);

        $donasi->update($request->all());

        return redirect()->route('donasi.index')->with('success', 'Data donasi berhasil diperbarui.');
    }

    public function destroy(Donasi $donasi)
    {
        $donasi->delete();

        return redirect()->route('donasi.index')->with('success', 'Data donasi berhasil dihapus.');
    }
}

