<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            width: 220px;
            background-color: #f8f9fa;
            border-right: 1px solid #ddd;
            padding: 20px;
        }

        .sidebar h5 {
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            padding: 8px 12px;
            margin-bottom: 6px;
            color: #333;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #0d6efd;
            color: white;
        }

        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h5>Menu</h5>
        <a href="{{ route('arsip.index') }}" class="{{ request()->routeIs('arsip.index') ? 'active' : '' }}">
            <i class="fa-solid fa-folder"></i> Arsip
        </a>
        <a href="{{ route('kategori.index') }}" class="{{ request()->routeIs('kategori.index') ? 'active' : '' }}">
            <i class="fa-solid fa-layer-group"></i> Kategori Surat
        </a>
        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">
            <i class="fa-solid fa-circle-info"></i> About
        </a>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ session('success') }}",
                    position: 'center',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.delete-form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Apakah kamu yakin?',
                        text: "Data arsip akan dihapus permanen!",
                        icon: 'warning',
                        position: 'center', // tampil di tengah
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
