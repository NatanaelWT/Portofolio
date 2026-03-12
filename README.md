# Portfolio Pribadi - Natanael Wijaya Tiono

Aplikasi web portfolio pribadi berbasis **PHP native** (`single page`) dengan dukungan **Bahasa Indonesia** dan **English**.

Repository ini menampilkan profil, pengalaman, proyek, organisasi, serta form kontak yang menyimpan pesan ke file JSON lokal.

## Fitur Utama

- Tampilan portfolio responsif (desktop dan mobile)
- Dukungan 2 bahasa: Indonesia (`?lang=id`) dan English (`?lang=en`)
- Navigasi section: About, Skills, Experience, Projects, Education/Organization, Contact
- Form kontak dengan validasi server-side:
  - Nama wajib, maksimal 100 karakter
  - Email wajib, format valid
  - Pesan wajib, maksimal 2000 karakter
- Penyimpanan pesan ke `data/messages.json`
- Data konten profil terpusat di `index.php` agar mudah diubah

## Tech Stack

- PHP
- HTML
- CSS
- JavaScript (vanilla)
- JSON (penyimpanan sederhana)

## Struktur Folder

```text
portofolio/
|- index.php
|- assets/
|  `- profile.jpg
`- data/
   `- messages.json
```

## Cara Menjalankan (XAMPP)

1. Letakkan folder project di:
   `C:/xampp/htdocs/portofolio` (atau sesuaikan dengan lokasi `htdocs` Anda).
2. Jalankan **Apache** dari XAMPP Control Panel.
3. Buka browser:
   - `http://localhost/portofolio/`
4. Ganti bahasa:
   - Indonesia: `http://localhost/portofolio/?lang=id`
   - English: `http://localhost/portofolio/?lang=en`

## Penyimpanan Data Pesan

Pesan dari form kontak disimpan di:

- `data/messages.json`

Format data:

```json
[
  {
    "id": "msg_xxx",
    "name": "Nama Pengirim",
    "email": "email@contoh.com",
    "message": "Isi pesan",
    "created_at": "2026-03-12T10:00:00+07:00"
  }
]
```

## Kustomisasi Cepat

Untuk menyesuaikan portfolio:

- Ubah biodata, pengalaman, proyek, organisasi, dan teks UI langsung di variabel array pada `index.php`
- Ganti foto profil di `assets/profile.jpg`
- Sesuaikan warna/tema di blok CSS dalam `index.php`

## Catatan

- Aplikasi ini menggunakan penyimpanan file JSON (bukan database), cocok untuk portfolio sederhana.
- Disarankan tidak mengunggah data pesan pribadi ke repository publik.

## Lisensi

Belum ditentukan. Anda bisa menambahkan file `LICENSE` sesuai kebutuhan (misalnya MIT).
