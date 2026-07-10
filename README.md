# Aplikasi Laporan Keluhan Masyarakat
Aplikasi berbasis web dengan framework Laravel 5.4.36. Digunakan untuk membuat laporan keluhan masyarakat.

## Developer

Nama : Iqbal Safri Jalla,
NIM  : 2505101060L,
Kelas: TIF/6A
 
## Deskripsi

Aplikasi berbasis Laravel 5.4 yang digunakan untuk
membantu masyarakat melaporkan keluhan seperti:

- Jalan rusak
- Lampu jalan mati
- Jembatan sempit
- Saluran tersumbat

## Teknologi

- PHP 5.6.39
- Laravel 5.4.36
- Composer 2.2.28
- MySQL
- Bootstrap

## Fitur

### Masyarakat
http://127.0.0.1:8000/reports/create

- Input laporan
- Kirim laporan

### Admin
http://127.0.0.1:8000/reports/

- Halaman Admin
- Kelola laporan
- Ubah status
- Hapus laporan

### API
Link : https://iqblsfrs-team.postman.co/workspace/My-Workspace~a96304bd-91a6-476c-89ed-6f6d08e033ee/collection/14063230-79b568f6-30b0-4701-becb-3bdc7c8c464b?action=share&creator=14063230

- GET laporan
- POST laporan
- GET laporan
- PUT laporan
- DELETE laporan

## Database

Database tersedia pada folder:

laporan-app/laporan_app.sql

Migration tersedia pada folder:

database/migrations

## Screenshot
- Halaman tambah laporan masyarakat
  <img width="1919" height="947" alt="Halaman Tambah Laporan Masyarakat" src="https://github.com/user-attachments/assets/2d51c91c-8793-410f-bf04-19fa4719da58" />

- Halaman kelola laporan admin
  <img width="1913" height="942" alt="Halaman Kelola Laporan Admin" src="https://github.com/user-attachments/assets/b7f53dc2-007c-4cf1-af7f-6dc0b65ab3b3" />

- Halaman ubah status
  <img width="1919" height="941" alt="Halaman Ubah Status" src="https://github.com/user-attachments/assets/59d60559-f38d-4483-9645-14fee02ff3ee" />


## Struktur Folder Project

```text
laporan-app/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ReportController.php
│   │   │   ├── Controller.php
│   │   │   ├── Api/
│   │   │   │   └── ReportApiController.php
│   │   │   └── Auth/
│   │   │       ├── LoginController.php
│   │   │       ├── RegisterController.php
│   │   │       ├── ForgotPasswordController.php
│   │   │       └── ResetPasswordController.php
│   │   │
│   │   └── Kernel.php
│   │ 
│   ├── Report.php
│   └── User.php
│
├── bootstrap/
├── config/
│
├── database/
│   ├── migrations/
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   └── 2026_05_17_141033_create_reports_table.php
│   │
│   ├── factories/
│   └── seeds/
│
├── public/
│   ├── css/
│   └── js/
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── reports/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   └── edit.blade.php
│       │
│       └── welcome.blade.php
│
├── routes/
│   ├── web.php
│   └── api.php
│
├── storage/
├── tests/
│
├── laporan_app.sql
├── composer.json
├── package.json
├── artisan
├── README.md
└── .env.example

---

# REVIEW BY :
* **NAMA** : MUHAMMAD HAFIZ FALAH
* **NIM**  : 2305101120

## Review Singkat Update Project

### 1. Ringkasan Update & Struktur Proyek
* **Pembaruan Dokumentasi (`README.md`)**: Sangat informatif. Dokumentasi menyertakan detail fitur masyarakat, admin, endpoint API (dengan tautan Postman), tangkapan layar antarmuka aplikasi, serta struktur folder proyek yang jelas.
* **Arsitektur & Stack**: Proyek berbasis **Laravel 5.4.36** dan **PHP 5.6.39**. Menggunakan basis data MySQL, CSS Bootstrap, dan memisahkan pengontrol web (`ReportController`) dengan API (`ReportApiController`).

### 2. Poin Positif (Kelebihan Proyek)
* **Pemisahan Logic (Web vs API)**: Memiliki `ReportApiController` terpisah yang mengembalikan respons JSON, memudahkan integrasi dengan platform mobile atau frontend eksternal.
* **Validasi Input Dasar**: Metode `store` pada `ReportController` telah mengimplementasikan validasi wajib (`required`) untuk bidang `title`, `description`, dan `location`.
* **Kemudahan Pengaturan**: File SQL dump (`laporan_app.sql`) disertakan langsung dalam repositori untuk mempermudah inisialisasi basis data bagi pengembang lain.

### 3. Saran Peningkatan & Catatan Teknis (Feedback)

#### A. Keamanan Mass Assignment & Validasi API
* Di `ReportApiController` pada metode `store` dan `update`, serta `ReportController` pada metode `update`, proses update menggunakan `request->all()`. Karena bidang `status` termasuk dalam `$fillable` pada model `Report`, pengguna umum/API client dapat mengubah status laporan secara ilegal (misalnya langsung mengubah ke `done` tanpa otorisasi).
* **Saran**: Gunakan `$request->only(['title', 'description', 'location'])` untuk penginputan dari masyarakat, dan batasi perubahan status hanya melalui rute khusus admin/petugas. Selain itu, tambahkan validasi input pada rute API.

#### B. Error Handling & Robustness (findOrFail)
* Metode pencarian record di controller (misal `Report::find($id)`) akan mengembalikan `null` jika ID tidak ditemukan. Hal ini akan menyebabkan error fatal `Trying to get property of non-object` saat Blade mencoba memuat data di halaman Edit.
* **Saran**: Ubah `Report::find($id)` menjadi `Report::findOrFail($id)` agar Laravel secara otomatis menampilkan halaman 404 (Not Found) jika data tidak tersedia.

#### C. Autentikasi Rute API & Web
* Saat ini rute API di `routes/api.php` tidak dilindungi oleh middleware autentikasi apapun. Hal ini memungkinkan siapa saja untuk melakukan POST, PUT, dan DELETE laporan tanpa login.
* **Saran**: Jika aplikasi ini dikembangkan lebih lanjut, pertimbangkan untuk menerapkan middleware autentikasi (seperti Laravel Sanctum untuk Laravel versi modern, atau API Token internal untuk Laravel 5.4) guna mengamankan endpoint administratif.

#### D. Pembaruan Versi PHP & Laravel (Legacy Version)
* Stack yang digunakan (**Laravel 5.4** dan **PHP 5.6**) sudah tidak lagi didukung (End-of-Life). Hal ini berisiko dari segi keamanan dan performa.
* **Saran**: Jika memungkinkan, lakukan upgrade berkala ke PHP 8.x dan versi Laravel terbaru untuk memanfaatkan fitur keamanan terbaru dan performa yang lebih optimal.

