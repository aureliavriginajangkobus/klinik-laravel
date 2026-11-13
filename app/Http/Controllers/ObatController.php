<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    
    private function aturan(): array
    {
        return [
            'nama_obat' => 'required|string|max:100',
            'kategori'  => 'required|string|max:50',
            'sediaan'   => 'required|in:Tablet,Sirup,Kapsul',
            'pabrikan'  => 'required|string|max:100',
            'harga'     => 'required|integer|min:0',
            'stok'      => 'required|integer|min:0',
        ];
    }

    a
    public function index()
    {
        $daftarObat = Obat::latest()->get();
        return view('obat.index', compact('daftarObat'));
    }

    
    public function create()
    {
        return view('obat.create');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate($this->aturan());
        Obat::create($data);

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil ditambahkan.');
    }

    
    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    
    public function update(Request $request, Obat $obat)
    {
        $data = $request->validate($this->aturan());
        $obat->update($data);

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil diubah.');
    }

   
    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil dihapus.');
    }
}
