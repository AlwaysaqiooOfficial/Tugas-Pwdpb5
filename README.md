# Kumpulan Contoh Kode - Buku Ajar "Web Programming: Desain Halaman Web dengan CSS"

Ini adalah **semua** contoh kode program dari buku ajar karya Miftah Farid
Adiwisastra & Agung Baitul Hikmah, diekstrak apa adanya per bab agar bisa
langsung dijalankan dan di-push ke GitHub.

## Struktur Folder

```
contoh_kode_lengkap/
├── bab2_html/            7 contoh  - Tag dasar, form, tabel, gambar, link, list
├── bab3_php/              51 contoh - Sintak, variabel, konstanta, tipe data,
│                                      operator, seleksi kondisi, perulangan, array
├── bab4_javascript/      18 contoh - Penempatan script, variabel, fungsi,
│                                      seleksi kondisi, perulangan, array
├── bab5_css/              14 contoh - Inline/internal/external style, selector,
│                                      margin, padding, border, teks, font, list, tabel
└── bab6_desain_web/       Proyek utuh - Website PHP+CSS (Beranda, Profil,
                                          Mahasiswa, Kontak, Login)
```

## Bab 1 (Konsep Dasar Web)

Bab 1 tidak memiliki contoh kode program — isinya murni konsep (pengertian
website, struktur navigasi, instalasi XAMPP), sehingga tidak ada folder
untuk bab ini.

## Cara Menjalankan

### File .html (Bab 2, 4, 5)
Buka langsung di browser (double click file-nya), tidak perlu server.
Untuk contoh Bab 5 nomor 03 (external style sheets), buka
`bab5_css/03_external_style_sheets/contoh1.html`.

### File .php (Bab 3, Bab 6)
Butuh server PHP (misalnya XAMPP):
1. Copy folder yang berisi file `.php` ke `htdocs` XAMPP.
2. Jalankan Apache.
3. Akses lewat browser: `http://localhost/nama_folder/nama_file.php`

Untuk `bab3_php`, setiap file berdiri sendiri — akses satu per satu, misal:
`http://localhost/contoh_kode_lengkap/bab3_php/29_operator_aritmatika.php`

### Bab 6 (Proyek Website Utuh)
Lihat `bab6_desain_web/README.md` untuk instruksi lengkap dan cara push
ke GitHub.

## Catatan Perbaikan dari Buku Asli

Naskah PDF menggunakan smart quotes (”, ‘, ’) yang tidak valid sebagai
kode — semua sudah dinormalkan ke tanda kutip lurus (`"`, `'`) agar
kodenya benar-benar bisa dijalankan. Dua file ditandai `_ERROR` /
`_SALAH` karena buku memang menunjukkan itu sebagai contoh kode yang
akan menghasilkan error (bagian dari materi pembelajaran), bukan bug.

## Push ke GitHub

```bash
cd contoh_kode_lengkap
git init
git add .
git commit -m "Semua contoh kode buku ajar Web Programming - Desain Halaman Web dengan CSS"
git branch -M main
git remote add origin https://github.com/USERNAME/NAMA-REPO.git
git push -u origin main
```
