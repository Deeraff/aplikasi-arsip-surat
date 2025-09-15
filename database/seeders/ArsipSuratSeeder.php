<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ArsipSurat;
use App\Models\KategoriSurat;

class ArsipSuratSeeder extends Seeder
{
    public function run(): void
    {
        $kategoriPengumuman  = KategoriSurat::where('nama_kategori', 'Pengumuman')->first();
        $kategoriUndangan    = KategoriSurat::where('nama_kategori', 'Undangan')->first();
        $kategoriPemberitahuan = KategoriSurat::where('nama_kategori', 'Pemberitahuan')->first();

        ArsipSurat::create([
            'nomor_surat' => '001/PKM/2025',
            'kategori_id' => $kategoriPengumuman->id ?? 1,
            'judul'       => 'Pengumuman Kegiatan PKM',
            'file'        => 'arsip/pengumuman_pkm.pdf',
        ]);

        ArsipSurat::create([
            'nomor_surat' => '002/RPT/2025',
            'kategori_id' => $kategoriUndangan->id ?? 1,
            'judul'       => 'Undangan Rapat Koordinasi',
            'file'        => 'arsip/undangan_rapat.pdf',
        ]);

        ArsipSurat::create([
            'nomor_surat' => '003/INF/2025',
            'kategori_id' => $kategoriPemberitahuan->id ?? 1,
            'judul'       => 'Pemberitahuan Libur Nasional',
            'file'        => 'arsip/pemberitahuan_libur.pdf',
        ]);
    }
}
