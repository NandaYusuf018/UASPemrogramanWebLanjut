# Sistem Penyewaan Alat

Sistem manajemen penyewaan alat yang dibangun menggunakan framework Laravel. Aplikasi ini memungkinkan pengguna untuk mengelola data customer, alat, penyewaan, detail sewa, dan pembayaran.

## Fitur Utama

-   **Manajemen Customer**: CRUD untuk data pelanggan
-   **Manajemen Alat**: CRUD untuk data alat yang dapat disewa
-   **Manajemen Penyewaan**: Sistem penyewaan alat dengan detail transaksi
-   **Manajemen Detail Sewa**: Detail item yang disewa dalam setiap transaksi
-   **Manajemen Pembayaran**: Sistem pembayaran untuk penyewaan
-   **Autentikasi**: Sistem login dan registrasi pengguna
-   **Dashboard**: Halaman dashboard untuk overview sistem

## Teknologi yang Digunakan

-   **Framework**: Laravel 10
-   **Database**: MySQL
-   **Frontend**: Blade Templates dengan Tailwind CSS
-   **Authentication**: Laravel Breeze
-   **Development Tools**: Vite, Laravel Mix

## Struktur Database

Aplikasi ini menggunakan beberapa tabel utama:

-   `users` - Data pengguna sistem
-   `customers` - Data pelanggan
-   `alats` - Data alat yang dapat disewa
-   `penyewaans` - Data transaksi penyewaan
-   `detail_sewas` - Detail item yang disewa
-   `pembayarans` - Data pembayaran

## Instalasi

### Prerequisites

-   PHP >= 8.1
-   Composer
-   MySQL
-   Node.js & NPM

### Langkah Instalasi

1. **Clone repository**

    ```bash
    git clone [url-repository]
    cd uas-pwl
    ```

2. **Install dependencies PHP**

    ```bash
    composer install
    ```

3. **Install dependencies Node.js**

    ```bash
    npm install
    ```

4. **Setup environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Konfigurasi database di file .env**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
    ```

6. **Jalankan migration**

    ```bash
    php artisan migrate
    ```

7. **Jalankan seeder (opsional)**

    ```bash
    php artisan db:seed
    ```

8. **Compile assets**

    ```bash
    npm run dev
    ```

9. **Jalankan server development**
    ```bash
    php artisan serve
    ```

## Penggunaan

1. Buka browser dan akses `http://localhost:8000`
2. Register akun baru atau login dengan akun yang sudah ada
3. Akses menu-menu yang tersedia untuk mengelola data

## Struktur Project

```
app/
├── Http/Controllers/     # Controller untuk setiap modul
├── Models/              # Model Eloquent
├── View/               # View components
resources/
├── views/              # Blade templates
│   ├── alats/         # View untuk manajemen alat
│   ├── customers/     # View untuk manajemen customer
│   ├── penyewaans/    # View untuk manajemen penyewaan
│   ├── detailsewas/   # View untuk detail sewa
│   └── pembayarans/   # View untuk manajemen pembayaran
database/
├── migrations/         # File migration database
└── seeders/           # Database seeder
```

## Kontribusi

1. Fork project ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## Lisensi

Project ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## Kontak

Untuk pertanyaan atau dukungan, silakan hubungi tim development.
