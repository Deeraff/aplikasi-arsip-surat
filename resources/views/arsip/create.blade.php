@extends('layouts.app')

@section('content')
    <h2>Arsip Surat >> Unggah</h2>
    <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
       <b>Catatan:</b> Gunakan file berformat PDF
    </p>

    <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="nomor_surat" class="form-label">Nomor Surat</label>
            <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategori as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">File Surat (PDF)</label>
            <input type="file" name="file" id="file" class="form-control" accept="application/pdf" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('arsip.index') }}" class="btn btn-secondary">&lt;&lt; Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
