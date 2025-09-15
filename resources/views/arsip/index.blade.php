@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Arsip Surat</h2>
    <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br>
    Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>

    <form method="GET" action="{{ route('arsip.index') }}" class="mb-3 d-flex">
        <input type="text" name="search" value="{{ $search }}" class="form-control me-2" placeholder="Cari surat...">
        <button type="submit" class="btn btn-dark">Cari!</button>
    </form>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Nomor Surat</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Waktu Pengarsipan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($arsip as $surat)
            <tr>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->kategori->nama_kategori ?? '-' }}</td>
                <td>{{ $surat->judul }}</td>
                <td>{{ $surat->created_at->format('d-m-Y H:i') }}</td>
                <td class="d-flex gap-1">
                    <form action="{{ route('arsip.destroy', $surat->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>                    
                    <a href="{{ route('arsip.download', $surat->id) }}" class="btn btn-warning btn-sm">Unduh</a>
                    <a href="{{ route('arsip.show', $surat->id) }}" class="btn btn-primary btn-sm">Lihat >></a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data arsip surat</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('arsip.create') }}" class="btn btn-dark">Arsipkan Surat..</a>
</div>
@endsection
