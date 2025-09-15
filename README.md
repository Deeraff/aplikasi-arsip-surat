# 📂 Aplikasi Arsip Surat

## 🎯 Tujuan Aplikasi
1. **Mengarsipkan dan mengelola surat**
   - Mengunggah file surat dalam format PDF.  
   - Menyimpan data surat seperti nomor surat, judul, kategori, dan waktu pengarsipan.  
   - Menambahkan dan mengelola kategori surat.  

2. **Mencari dan melihat arsip surat**
   - Mencari surat berdasarkan judul.  
   - Melihat detail surat, termasuk file PDF-nya.  

3. **Mengelola data surat**
   - Mengunduh file surat yang sudah diunggah.  
   - Menghapus data surat dari sistem.  

4. **Informasi tentang pembuat aplikasi**
   - Halaman **About** berisi nama, NIM, foto, dan tanggal pembuatan aplikasi.  

---

## ✨ Fitur Aplikasi
- Menampilkan data tabel arsip surat.  
![SS 1](ss/1.png)
- Mencari surat berdasarkan judulnya.
![SS 1](ss/2.png)  
- Menghapus salah satu data surat.
![SS 1](ss/3.png)  
- Mengunduh file PDF yang sudah diupload.
![SS 1](ss/4.png)  
- Melihat detail salah satu data surat.
![SS 1](ss/5.png)  
- Halaman untuk menambahkan data arsip surat.
![SS 1](ss/6.png)  
- Menampilkan halaman data kategori surat.
![SS 1](ss/7.png)  
- Mencari kategori berdasarkan nama kategori.
![SS 1](ss/8.png)  
- Halaman untuk update/mengubah data kategori.
![SS 1](ss/9.png)  
- Menghapus salah satu data kategori.
![SS 1](ss/10.png)  
- Halaman untuk menambahkan data kategori.
![SS 1](ss/11.png)  
- Halaman untuk menampilkan data pembuat project ini.  
![SS 1](ss/12.png)

---

## 🚀 Cara Menjalankan Aplikasi

### 1. Persiapan Awal
- Install **XAMPP / Laragon / WAMP** (Pastikan Apache dan MySQL aktif).  
- Pindahkan folder proyek ke direktori server lokal, misalnya:  
C:\xampp\htdocs\nama_aplikasi

### 2. Konfigurasi Database
- Buka **phpMyAdmin** melalui browser: [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)  
- Buat database baru dengan nama yang sesuai.  
- Import file `lsp-polinema.sql` yang ada di folder **SQL**.  

### 3. Instalasi & Konfigurasi
Buka terminal / Git Bash, lalu masuk ke folder proyek:
```bash
cd nama_aplikasi
Untuk menjalankannya menggunakan **php artisan serve**
