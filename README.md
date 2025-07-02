## 📦 Fitur Utama

- Manajemen Kode Barang (CRUD)
- Manajemen Kode Ruang (CRUD)
- Manajemen User dengan Role: `humas` & `layanan`
- Dashboard rekap kondisi barang
- Sidebar dinamis sesuai role
- Login dan autentikasi bawaan Laravel
- Responsive dengan AdminLTE 3
- Grafik visual kondisi barang menggunakan Chart.js

---

## 🛠️ Teknologi

- Laravel 10.x
- AdminLTE 3 (via CDN)
- Bootstrap 4.6
- Font Awesome 6
- Chart.js (CDN)
- MySQL

---

## 🚀 Instalasi Lokal

### 1. Clone Project

```bash
git clone https://github.com/ZadaXD/Kelompok2.git
cd Kelompok2
```

### 2. Install Dependency

```bash
composer install
npm install && npm run dev
```

### 3. Copy File .env

```bash
cp .env.example .env
```

Edit `.env` dan sesuaikan dengan konfigurasi database lokal Anda.

### 4. Generate Key dan Migrate Database

```bash
php artisan key:generate
php artisan migrate --seed
```

Seeder akan otomatis menambahkan akun login default.

---

## 🔑 Akun Login Default

| Role    | Email                                             | Password |
| ------- | ------------------------------------------------- | -------- |
| Humas   | [humas@gmail.com](mailto:humas@example.com)       | password |
| Layanan | [layanan@gmail.com](mailto:layanan@example.com)   | password |

---

## 🖼️ Struktur Folder Tampilan

```bash
resources/views/
├── layouts/
│   └── app.blade.php          # layout utama dengan sidebar + navbar
├── dashboard.blade.php
├── kode_barang/
│   └── index/create/edit.blade.php
├── kode_ruang/
│   └── index/create/edit.blade.php
├── users/
│   └── index/create/edit.blade.php
├── auth/
│   └── login.blade.php        # form login custom AdminLTE
```

---

## 📂 Routing Utama

* `/login` → halaman login
* `/dashboard` → dashboard rekap aset
* `/kode-barang` → manajemen kode barang
* `/kode-ruang` → manajemen kode ruang
* `/users` → manajemen user (khusus role humas)

---

## 🧰 Artisan Commands (opsional)

```bash
php artisan migrate:fresh --seed
php artisan serve
```

---

## 📄 Lisensi

Proyek ini dikembangkan untuk keperluan akademik internal. Silakan gunakan dan kembangkan dengan menyertakan atribusi ke AMIK Taruna Probolinggo.

```

---
---
````
## 📝 Catatan

- Ganti `https://github.com/ZadaXD/Kelompok2.git` dengan URL repositorimu sendiri.
- File `.env.example` harus ada untuk mempermudah setup user lain.
- Jika kamu butuh script `seeder`, saya bisa bantu buatkan juga untuk user `humas` dan `layanan`.

---

