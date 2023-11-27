<p align="center"><img src="https://laravel.com/img/logotype.min.svg" width="400"></p>

# Aplikasi Laundry Sederhana

Aplikasi ini merupakan aplikasi laundry sederhana yang dibuat dengan framework Laravel 7 (sudah diupgrade ke Laravel 9). Aplikasi ini adalah project untuk belajar laravel

Daftar/Register admin dengan url `/register-admin`.

Login admin:  
Email    : admin@laundryxyz.com  
Password : admin123

## Instalasi

1. update composer :
```
composer update
```

2. Run dan buat file  .env.example menjadi .env
```
cp .env.example .env
```
3. Konfigurasi .env sesuai kebutuhan

4. Buat app key:
```
php artisan key:generate
```
5. Jalankan migrasi dan seed:
```
php artisan migrate
```
6. Jalankan migrate
```
php artisan migrate:fresh --seed
```
7. Run aplikasi laundry:
```
php artisan serve
```

## Informasi Tambahan

Aplikasi ini juga menerapkan queue database untuk menghapus foto profil ketika diganti, kalian bisa mengganti environment variable `QUEUE_CONNECTION` menjadi database.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

Referensi:
