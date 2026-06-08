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
