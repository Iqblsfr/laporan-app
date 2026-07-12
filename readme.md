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

## Review Singkat Update Project

### Reviewed by:
**Nama** : Muhammad Hafidz Rifai
**NIM** : 2305101077
**Kelas** : TIF - 6A

### Hasil Review:
Aplikasi Laporan Keluhan Masyarakat berbasis Laravel 5.4.36 ini telah diperiksa dan dievaluasi. Berikut adalah poin-poin penting dari review update project:
1. **Struktur Database**: Database telah dikonfigurasi melalui file migration `2026_05_17_141033_create_reports_table.php` dan skema SQL awal disediakan di file `laporan_app.sql` dengan tabel `reports` yang memiliki kolom: `id`, `title`, `description`, `location`, `status` (pending, process, done), serta `timestamps`.
2. **Fungsionalitas Web (CRUD)**:
   - File `ReportController.php` mengatur seluruh logika bisnis web untuk menampilkan daftar keluhan, membuat keluhan baru, mengedit keluhan (termasuk memperbarui status), dan menghapus keluhan.
   - Halaman user interface (UI) diimplementasikan dengan rapi menggunakan engine Blade pada file `index.blade.php`, `create.blade.php`, dan `edit.blade.php`.
3. **Fungsionalitas API**:
   - Controller `ReportApiController.php` menyediakan endpoint RESTful API lengkap untuk mengelola keluhan dalam format JSON.
   - Endpoint terdaftar pada file `api.php` dan mencakup aksi GET, POST, PUT, dan DELETE.
4. **Model**: Model `Report.php` mendefinisikan properti `$fillable` dengan benar guna mengizinkan pengisian data keluhan secara massal (mass assignment).

Secara keseluruhan, pembaruan dan implementasi fitur CRUD serta API pada proyek ini sudah berjalan dengan baik dan sesuai dengan standar struktur framework Laravel.
