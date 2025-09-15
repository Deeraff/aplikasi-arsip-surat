<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArsipSurat;
use App\Models\KategoriSurat;
use Illuminate\Support\Facades\Storage;

class ArsipSuratController extends Controller
{
    public function create()
    {
        $kategori = KategoriSurat::all();
        return view('arsip.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'kategori_id' => 'required',
            'judul'       => 'required',
            'file'        => 'required|mimes:pdf|max:2048',
        ]);
    
        $file = $request->file('file');
    
        // Nama file sesuai nomor surat (spasi/dll diganti dengan underscore)
        $filename = str_replace(['/', ' '], '_', $request->nomor_surat) . '_' . time() . '.' . $file->getClientOriginalExtension();
    
        // Simpan ke storage/app/public/arsip
        $file->storeAs('arsip', $filename, 'public');
    
        // Simpan ke database
        \App\Models\ArsipSurat::create([
            'nomor_surat' => $request->nomor_surat,
            'kategori_id' => $request->kategori_id,
            'judul'       => $request->judul,
            'file'        => $filename,
        ]);
    
        return redirect()->route('arsip.index')->with('success', 'Arsip surat berhasil ditambahkan!');
    }    

    public function index(Request $request)
    {
        $search = $request->search;
        $arsip = ArsipSurat::with('kategori')
            ->when($search, function ($query, $search) {
                $query->where('nomor_surat', 'like', "%{$search}%")
                      ->orWhere('judul', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('arsip.index', compact('arsip','search'));
    }

    public function show($id)
    {
        $arsip = ArsipSurat::with('kategori')->findOrFail($id);
        return view('arsip.show', compact('arsip'));
    }    

    public function download($id)
    {
        $arsip = ArsipSurat::findOrFail($id);
    
        $filePath = storage_path('app/public/arsip/' . $arsip->file);
    
        if (!file_exists($filePath)) {
            abort(404, 'File tidak ditemukan: ' . $filePath);
        }
    
        return response()->download($filePath, $arsip->judul . '.pdf');
    }   

    public function destroy($id)
    {
        $surat = ArsipSurat::findOrFail($id);
        $surat->delete();

        return redirect()->route('arsip.index')->with('success', 'Surat berhasil dihapus!');
    }
}
