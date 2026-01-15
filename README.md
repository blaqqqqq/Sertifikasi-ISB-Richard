# System Perpustakaan Sederhana (PHP Native + MySQL)

Aplikasi Perpustakaan Sederhana berbasis **PHP Native** dengan database **MySQL** untuk mensimulasikan proses **peminjaman dan pengembalian buku**.  
Sistem ini menerapkan **2 peran (role)**, yaitu **admin** dan **peminjam**, dengan hak akses yang berbeda.

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

### 🔹 Admin
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
<img width="339" height="305" alt="image" src="https://github.com/user-attachments/assets/4a432beb-29aa-4911-a60a-254246fb2bae" />

---

## 🗄 Database Structure

Aplikasi ini menggunakan database **MySQL** dengan nama `perpustakaan`.

### 📌 Tabel `akun`
Digunakan untuk autentikasi dan pengaturan role pengguna.

| Kolom | Keterangan |
|-----|-----------|
| id_akun | Primary key |
| username | Username login |
| password | Password |
| role | petugas / peminjam |

---

### 📌 Tabel `anggota`
Menyimpan data anggota perpustakaan.

| Kolom | Keterangan |
|-----|-----------|
| id_anggota | Primary key |
| nama | Nama anggota |
| alamat | Alamat |
| no_telp | Nomor telepon |

---

### 📌 Tabel `buku`
Menyimpan katalog buku.

| Kolom | Keterangan |
|-----|-----------|
| id_buku | Primary key |
| judul | Judul buku |
| pengarang | Pengarang |
| status | tersedia / dipinjam |

---

### 📌 Tabel `peminjaman`
Mencatat transaksi peminjaman buku.

| Kolom | Keterangan |
|-----|-----------|
| id_peminjaman | Primary key |
| id_anggota | Relasi ke anggota |
| id_buku | Relasi ke buku |
| tanggal_peminjaman | Tanggal pinjam |
| tanggal_pengembalikan | Tanggal kembali (7 hari) |

---

### 🔗 Relasi Database
- `peminjaman.id_anggota` → `anggota.id_anggota`
- `peminjaman.id_buku` → `buku.id_buku`

---
### ER_Diagram 
<img width="502" height="565" alt="Screenshot 2026-01-15 153004" src="https://github.com/user-attachments/assets/9733f5a6-bf9c-49e9-beb3-48e51ec7d9de" />

---
### Fitur Web
<img width="1909" height="891" alt="Screenshot 2026-01-15 145941" src="https://github.com/user-attachments/assets/3793786c-481f-4899-b7c3-86491f4c99e9" />
- Halaman login merupakan tampilan awal aplikasi.
Pengguna diminta memasukkan username dan password untuk mengakses sistem

<img width="1915" height="773" alt="Screenshot 2026-01-15 145953" src="https://github.com/user-attachments/assets/252ade9f-22ff-4265-9c1f-fa14492108b6" />
- Halaman menu peminjam menampilkan fitur yang terbatas sesuai hak akses.
Peminjam hanya dapat melakukan aktivitas yang berkaitan langsung dengan peminjaman buku.

<img width="1917" height="794" alt="Screenshot 2026-01-15 150006" src="https://github.com/user-attachments/assets/800b9993-3396-4c85-bc49-d4d59736f552" />
- Halaman katalog buku menampilkan daftar seluruh buku yang tersedia di perpustakaan.

<img width="1914" height="821" alt="Screenshot 2026-01-15 150014" src="https://github.com/user-attachments/assets/0d6a4d6f-38d4-4bf5-a496-a2b39c34de24" />
- Halaman peminjaman digunakan untuk mencatat transaksi peminjaman buku.

<img width="1918" height="786" alt="Screenshot 2026-01-15 150021" src="https://github.com/user-attachments/assets/53f2b80e-f132-4f78-b1d8-99becbb6429b" />
- Halaman pengembalian menampilkan daftar buku yang sedang dipinjam.

<img width="1912" height="606" alt="Screenshot 2026-01-15 151618" src="https://github.com/user-attachments/assets/1d19ca37-b9f6-4ae0-97b0-8f47064582c2" />
- Halaman ini digunakan oleh petugas untuk menambahkan buku baru ke dalam sistem.

<img width="1914" height="629" alt="Screenshot 2026-01-15 151631" src="https://github.com/user-attachments/assets/cff7035e-dc9a-4ee2-9a07-9049913e9272" />
- Halaman ini digunakan oleh petugas untuk menambahkan buku baru ke dalam sistem.

---
### Test Scenario Web

<img width="709" height="692" alt="Screenshot 2026-01-15 152621" src="https://github.com/user-attachments/assets/aca8be83-6cc5-40d7-8493-bd2a1d8052a7" />
<img width="705" height="681" alt="Screenshot 2026-01-15 152612" src="https://github.com/user-attachments/assets/a8bacd79-f063-4040-8319-1d7a41c17fda" />

