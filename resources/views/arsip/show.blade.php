@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Arsip Surat</h2>
    <p>Berikut ini adalah detail dari arsip surat yang dipilih:</p>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>Nomor Surat:</strong> {{ $arsip->nomor_surat }}</p>
            <p><strong>Kategori:</strong> {{ $arsip->kategori->nama_kategori }}</p>
            <p><strong>Judul:</strong> {{ $arsip->judul }}</p>
            <p><strong>Waktu Pengarsipan:</strong> {{ $arsip->created_at->format('d-m-Y H:i') }}</p>
            <p><strong>File Surat:</strong></p>
            <iframe src="{{ asset('storage/arsip/' . $arsip->file) }}" width="100%" height="600px"></iframe>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('arsip.index') }}" class="btn btn-secondary"><< Kembali</a>
        <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-warning">Unduh</a>
    </div>
</div>
@endsection
