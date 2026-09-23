# Gharafaiha Resto - Website Modern Promosi Gulai Ikan Patin (Khas Riau)

Website modern promosi makanan khas daerah Indonesia yang dikembangkan untuk Ujian Praktik On The Spot Coding menggunakan **CodeIgniter 4**, **MySQL**, **Tailwind CSS (CDN)**, dan **FontAwesome**.

---

## 📌 Identitas Siswa & Penetapan Tugas
- **Nama Siswa**: Aysel Gharafaiha Saputra
- **Nama Restoran**: **Gharafaiha Resto**
- **Daerah Khas**: **Riau**
- **Nama Makanan Utama**: **Gulai Ikan Patin**
- **Skema Warna (Palette)**:
  - Primary / Accent: `#C4B5FD` (Soft Violet)
  - Secondary / Deep Accent: `#6D28D9` (Deep Violet)
- **Modul / Fitur Khusus**: **Filter** (Kategori Menu) & **Sorting** (Harga, Rating, Nama)

---

## 🚀 Fitur Utama Website
1. **Homepage / Landing Page Modern**:
   - Hero banner dengan branding khas Gharafaiha Resto & Riau.
   - Katalog menu makanan khas daerah Riau (9 variasi hidangan).
   - Filter Kategori & Sorting (Urutkan berdasarkan harga termurah/termahal, rating tertinggi, nama A-Z).
   - Fitur Keranjang Belanja (Cart) LocalStorage & Pemesanan langsung via **WhatsApp Checkout**.
   - Penjelasan sejarah & warisan kuliner Gulai Ikan Patin Riau.
2. **Halaman Detail Makanan (`/food/(:num)`)**:
   - Informasi lengkap hidangan, asal daerah, rating, level pedas, deskripsi keistimewaan.
   - Tombol pesan langsung dan rekomendasi menu terkait.
3. **Portal Admin Login (`/login`)**:
   - Sistem otentikasi admin aman dengan session guard.
   - **Kredensial Admin**: `admin@gharafaiha.com` / `admin123`.
4. **Dashboard Admin CRUD (`/admin/foods`)**:
   - Kelola daftar menu makanan (Tambah, Lihat Detail, Edit, Hapus).
   - Penanganan upload gambar makanan & validasi input.

---

## 📜 Riwayat Commit Git (Total 4 Commit)
1. `Setup database & migration Gulai Ikan Patin`
2. `CRUD dasar + tampilan Tailwind Gulai Ikan Patin`
3. `Halaman detail + fitur tambahan + gambar AI Gulai Ikan Patin`
4. `Finalisasi Gulai Ikan Patin`

---

## 🛠️ Cara Menjalankan Project
1. Import / jalankan migrasi & seeder ke database MySQL `ulanganuts`:
   ```bash
   php spark migrate
   php spark db:seed UserSeeder
   php spark db:seed FoodSeeder
   ```
2. Jalankan server lokal:
   ```bash
   php spark serve
   ```
3. Buka di browser: `http://localhost:8080` atau `http://localhost/UlanganUTS/public/`
