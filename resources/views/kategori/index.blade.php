@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 mb-4>Data Kategori Surat</h2>
        <p>Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.<br>
            Klik "Tambah" pada kolom aksi untuk menambahkan kategori.</p>

        {{-- Form Pencarian --}}
        <form method="GET" action="{{ route('kategori.index') }}" class="mb-3 d-flex">
            <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control me-2"
                placeholder="Cari kategori...">
            <button type="submit" class="btn btn-dark">Cari!</button>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kategori as $item)
                    <tr>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST"
                                style="display:inline-block;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada kategori</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('kategori.create') }}" class="btn btn-dark">+ Tambah Kategori</a>
    </div>
@endsection
