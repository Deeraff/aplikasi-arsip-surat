<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriSurat;

class KategoriSuratSeeder extends Seeder
{
    public function run(): void
    {
        KategoriSurat::create([
            'nama_kategori' => 'Pengumuman',
            'keterangan'    => 'Surat berisi pengumuman resmi dari instansi.'
        ]);

        KategoriSurat::create([
            'nama_kategori' => 'Undangan',
            'keterangan'    => 'Surat undangan untuk kegiatan atau rapat.'
        ]);

        KategoriSurat::create([
            'nama_kategori' => 'Pemberitahuan',
            'keterangan'    => 'Surat untuk menyampaikan informasi tertentu.'
        ]);
    }
}
