# Catatan Pembelajaran

## Migration

Command [migration](https://laravel.com/docs/8.x/migrations#creating-tables) berfungsi untuk membuat skema tabel yang akan digunakan pada aplikasi.

**Referensi migration**:
- [Buat tabel dengan migration](https://laravel.com/docs/8.x/migrations#creating-tables)
- [Tipe column yang tersedia](https://laravel.com/docs/8.x/migrations#available-column-types)
- [Rancang Database-mu dengan Migration Pada Laravel](https://medium.com/easyread/rancang-database-mu-dengan-migration-pada-laravel-28d419d0089e)

## Model & Controller

Ternyata ada cara yang lebih efisien lagi untuk men-generate file-file yang dibutuhkan.
File dimaksud adalah migration, controller, model dll.

Berdasarkan [referensi ini](https://laravel.com/docs/8.x/eloquent#generating-model-classes), kita dapat membuat file-file tersebut dalam 1 baris code saja.

```php
# Membuat model dan class FlightController...
php artisan make:model Flight --controller
php artisan make:model Flight -c

# Membuat model dan migration, factory, seeder, dan controller...
php artisan make:model Flight -mfsc

# Shortcut untuk membuat model, migration, factory, seeder, dan controller...
php artisan make:model Flight --all

#Membuat model dan Controller + method default
php artisan make:model Flight -cr
```

Praktis sekali kan?
Untuk sekarang, proses ini menjadi prioritas utama.
Buat model, diikuti dengan migration dan controller.

Sekarang saya menjalankan kode berikut
```php
php artisan make:model Barang -cr
```

**Referensi model & controller:**
- [Cara membuat model](https://laravel.com/docs/8.x/eloquent#generating-model-classes)
- [Resource Controllers](https://laravel.com/docs/8.x/controllers#resource-controllers)
