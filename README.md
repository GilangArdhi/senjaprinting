# 🖨️ SenjaPrinting – Sistem Manajemen Percetakan Berbasis Laravel

**SenjaPrinting** adalah aplikasi web berbasis Laravel yang bertujuan untuk mempermudah manajemen operasional dalam usaha percetakan. Aplikasi ini mendukung pengelolaan produk, pemesanan, dan pelaporan keuangan.

## 🔧 Fitur Utama

- ✅ Manajemen Produk: CRUD produk percetakan
- ✅ Pemesanan: Sistem order pelanggan
- ✅ Laporan Keuangan: Pantau pendapatan & pengeluaran
- ✅ Autentikasi Pengguna: Login & registrasi
- ✅ Dashboard Admin: Kontrol penuh untuk admin

## 🛠️ Teknologi yang Digunakan

- **Framework**: Laravel
- **Bahasa**: PHP
- **Database**: MySQL
- **Frontend**: Blade, HTML, CSS, JavaScript
- **Version Control**: Git

## 📂 Struktur Proyek (Singkat)

- `app/`: Model, controller, middleware, dll.
- `resources/views/`: Tampilan UI (Blade)
- `routes/web.php`: Routing aplikasi
- `database/migrations/`: Struktur DB

## ⚙️ Cara Menjalankan Proyek

1. Clone repository:
    ```bash
    git clone https://github.com/GilangArdhi/senjaprinting.git
    ```

2. Masuk ke folder proyek:
    ```bash
    cd senjaprinting
    ```

3. Install dependensi:
    ```bash
    composer install
    npm install && npm run dev
    ```

4. Copy file environment dan atur:
    ```bash
    cp .env.example .env
    ```

5. Generate aplikasi key:
    ```bash
    php artisan key:generate
    ```

6. Jalankan migrasi database:
    ```bash
    php artisan migrate
    ```

7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## 📸 Tangkapan Layar

> *(Tambahkan gambar jika ada, contoh: dashboard, form pemesanan, laporan)*  
> Contoh:  
>## Dashboard
> ![Dashboard](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/screenshoot%20dashboard.png)
>## Home Page
> ![HomePage](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/Homepage_1.png)
> ![HomePage](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/Homepage_2.png)
> ![HomePage](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/Homepage_3.png)
> ![HomePage](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/Homepage_4.png)
> ## Daftar Produk
> ![daftarproduk](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/list%20product.png)
> ## Deskripsi Produk
> ![deskripsiproduk](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/deskripsi%20prouct.png)
> ## Login
> ![Login](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/login.png)
> ## Daftar
> ![Daftar](https://github.com/GilangArdhi/senjaprinting/blob/main/public/screenshoot/daftar.png)

## 👤 Peran Saya

Saya bertanggung jawab sebagai:
- Pengembang utama sistem
- Perancang struktur database
- Implementasi fitur CRUD dan pemesanan
- Integrasi frontend dengan backend
- Pengujian dan debugging

---

## 📬 Kontak

Jika ingin mengetahui lebih lanjut, silakan hubungi saya melalui GitHub atau email.
email : gilangarsaputra25@gmail.com
