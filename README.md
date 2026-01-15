# Aplikasi Perpustakaan Sederhana (PHP Native + MySQL)

Aplikasi Perpustakaan Sederhana berbasis **PHP Native** dengan database **MySQL** untuk mensimulasikan proses **peminjaman dan pengembalian buku**.  
Sistem ini menerapkan **2 peran (role)**, yaitu **petugas** dan **peminjam**, dengan hak akses yang berbeda.

---

## 🎯 Deskripsi Singkat

Aplikasi ini dibuat untuk:
- Mengelola data buku dan anggota perpustakaan
- Mencatat transaksi peminjaman dan pengembalian
- Menerapkan konsep **OOP**, **Session**, dan **Relational Database**
- Memenuhi kebutuhan **Uji Kompetensi / Sertifikasi / Mata Kuliah Pemrograman Web**

---

## Teknologi yang Digunakan

- **Backend**: PHP Native (Procedural + OOP)
- **Database**: MySQL / MariaDB
- **Frontend**: HTML (simple & clean)
- **Server Lokal**: XAMPP
- **Editor**: Visual Studio Code
- **Authentication**: Login custom (session-based)

---

## Role & Hak Akses

### 🔹 Petugas
Petugas memiliki akses penuh terhadap sistem:
1. Login & Logout
2. Kelola data buku (Tambah & Lihat katalog)
3. Kelola data anggota
4. Mencatat peminjaman buku
5. Melakukan pengembalian buku
6. Melihat seluruh transaksi peminjaman

---

### 🔹 Peminjam
Peminjam memiliki akses terbatas:
1. Login & Logout
2. Melakukan peminjaman buku
3. Melakukan pengembalian buku
4. Melihat daftar buku yang sedang dipinjam

> Catatan:  
> Peminjam **tidak dapat menambah buku atau anggota**.

---

## Fitur Utama

### 📘 Manajemen Buku
- Tambah buku baru
- Status buku otomatis:
  - `tersedia`
  - `dipinjam`
- Buku tidak dapat dipinjam lebih dari satu kali

---

### Manajemen Anggota
- Pendaftaran anggota baru
- Data anggota disimpan menggunakan **Class (OOP)**

---

### Peminjaman Buku
- Validasi buku sebelum dipinjam
- Otomatis mencatat:
  - Tanggal peminjaman
  - Tanggal harus kembali (7 hari dari tanggal pinjam)

---

### Pengembalian Buku
- Menampilkan daftar buku yang sedang dipinjam
- Tombol pengembalian
- Status buku otomatis kembali menjadi `tersedia`

---

## Konsep Pemrograman yang Diterapkan

- Object Oriented Programming (Class `Anggota`)
- Encapsulation (`private`, `public`)
- Session Management
- Relational Database & Foreign Key
- CRUD (Create, Read, Update, Delete)
- Validasi data (PHP & HTML)
- Modular file structure

---

## 🗂 Struktur Folder

