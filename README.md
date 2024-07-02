<h1 align="center">Selamat datang aplikasi catatan keuangan! 👋</h1>

## Fitur apa saja yang tersedia di aplikasi catatan keuangan?

-   Autentikasi Admin
-   CRUD
-   Dan lain-lain

## Release Date

**Release date : 28 Apr 2024**

> aplikasi catatan keuangan merupakan project open source yang dibuat oleh Tedi Hanafiah. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/tedihanafee/APLIKASI-CATATAN-KEUANGAN.git
cd APLIKASI-CATATAN-KEUANGAN
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

-   Copyright © 2024 Tedi Hanafiah.
-   **Aplikasi pencatat Keuangan is open-sourced software licensed under the MIT license.**
