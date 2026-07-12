# Aplikasi Laporan Keluhan Masyarakat
Laporan App merupakan aplikasi berbasis web yang dibangun menggunakan Framework Laravel 5.4 untuk membantu proses pengelolaan data laporan secara lebih efektif dan terstruktur. Sistem menyediakan fitur pengelolaan data, status laporan pengguna, serta penyimpanan data ke database MySQL.

## Author
| Field | Keterangan |
|:------------|:-----|
| Nama | Iqbal Safri Jalla |
| NIM | 2505101060L |
| Kelas | TIF / 6A |
| Mata Kuliah | Pemrograman Web Fullstack |
 
## Deskripsi

Aplikasi berbasis Laravel 5.4 digunakan untuk membantu masyarakat melaporkan keluhan seperti :

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

## Fungsi dan Fitur Aplikasi

### Fitur utama aplikasi meliputi :
- Dashboard
- CRUD Data
- Validasi Input
- Penyimpanan Database
- Manajemen Data Laporan
- Responsive Interface

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

### Rest API Endpoint

| Method | Endpoint | Deskripsi |
|------------|:-----|:-----|
| GET | /api/reports | Mengambil/menampilkan daftar data laporan |
| POST | /api/reports | Membuat atau mengirim data laporan baru |
| GET | /api/reports/{id} | Mengambil/menampilkan data laporan tertentu |
| PUT | /api/reports/{id} | Mengubah/memperbarui data laporan tertentu |
| DELETE | /api/reports/{id} | Menghapus data laporan tertentu |

Link : https://iqblsfrs-team.postman.co/workspace/My-Workspace~a96304bd-91a6-476c-89ed-6f6d08e033ee/collection/14063230-79b568f6-30b0-4701-becb-3bdc7c8c464b?action=share&creator=14063230

## Database

- Database tersedia pada folder : laporan-app/laporan_app.sql

- Migration tersedia pada folder : database/migrations

## Screenshot
- Halaman tambah laporan masyarakat
  <img width="1919" height="947" alt="Halaman Tambah Laporan Masyarakat" src="https://github.com/user-attachments/assets/2d51c91c-8793-410f-bf04-19fa4719da58" />

- Halaman kelola laporan admin
  <img width="1913" height="942" alt="Halaman Kelola Laporan Admin" src="https://github.com/user-attachments/assets/b7f53dc2-007c-4cf1-af7f-6dc0b65ab3b3" />

- Halaman ubah status
  <img width="1919" height="941" alt="Halaman Ubah Status" src="https://github.com/user-attachments/assets/59d60559-f38d-4483-9645-14fee02ff3ee" />

## Kelebihan Aplikasi

- Menggunakan Framework Laravel (MVC)
- Kode program lebih terstruktur
- Mudah dikembangkan
- Mendukung Migration Database
- Interface sederhana dan mudah digunakan
- Bisa di Integrasikan ke aplikasi desa yang sudah berjalan

## Kekurangan Aplikasi

Beberapa kekurangan yang masih dapat dikembangkan:

- Belum terdapat notifikasi real-time.
- Belum tersedia export PDF/Excel.
- Validasi input masih sederhana.
- Belum terdapat fitur Role Permission yang lengkap.
- Belum tersedia Unit Testing secara menyeluruh.
- Optimasi performa database masih dapat ditingkatkan.

## Cara Instalasi

1. Clone repository

```bash
git clone https://github.com/username/laporan-app.git
```

2. Masuk ke folder project

```bash
cd laporan-app
```

3. Install dependency

```bash
composer install
```

4. Copy file environment

```bash
cp .env.example .env
```

5. Generate key

```bash
php artisan key:generate
```

6. Migrasi database

```bash
php artisan migrate
```

7. Jalankan server

```bash
php artisan serve
```

## Struktur Repository

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

```
