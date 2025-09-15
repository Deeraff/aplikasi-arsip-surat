@extends('layouts.app')

@section('content')
<div class="container">
    <h2>About</h2>
    <div class="row mt-4">
        <div class="col-md-3 text-center">
            <img src="{{ asset('images/frd.jpg') }}" alt="Foto Profil" class="img-fluid rounded">
        </div>
        <div class="col-md-9">
            <p><strong>Aplikasi ini dibuat oleh:</strong></p>
            <table class="table table-borderless">
                <tr>
                    <td>Nama</td>
                    <td>: Farid Restu Febriansyah</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>: D3-Manajemen Informatika PSDKU Kediri</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: 2331730077</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: 13-09-2025</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
