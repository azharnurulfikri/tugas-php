# Tugas 1: Form Cek Kelulusan & Logic PHP

## 📝 Deskripsi Tugas
Tugas ini bertujuan untuk mengimplementasikan dasar-dasar PHP dalam memproses data dari form HTML. Program akan menerima input berupa Nama, Email, dan Nilai, lalu menentukan status kelulusan berdasarkan *threshold* nilai yang ditentukan menggunakan logika **Ternary Operator**.

## 🛠️ Fitur & Logic
* **Form Handling:** Menggunakan `method="POST"` untuk mengirim data secara aman ke server.
* **Conditional Logic:** Menggunakan operator ternary `$hasil = ($nilai > 70) ? "LULUS!" : "REMEDIAL!";` untuk efisiensi baris kode.
* **Data Persistence:** Menampilkan kembali data yang diinput oleh user (Nama dan Email) pada bagian hasil.
* **Security:** Menggunakan fungsi `htmlspecialchars()` untuk mencegah celah keamanan XSS (Cross-Site Scripting).
* **Modern UI:** Tampilan output menggunakan **Google Fonts (Poppins)** dan CSS Inline dengan desain Card yang responsif dan interaktif.

## 📸 Preview Output
> *Hasil output akan menampilkan kartu informasi berwarna hijau jika LULUS dan merah jika REMEDIAL.*

## 📋 Detail Kode
| Komponen | Deskripsi |
| :--- | :--- |
| **Input Type** | Text (Nama), Email (Email), Number (Nilai) |
| **Validation** | Atribut `required` pada HTML5 untuk mencegah input kosong |
| **Styling** | Inline CSS dengan Box Shadow dan Border Radius |
| **Typography** | Integrasi Google Fonts API |

## 🚀 Cara Menjalankan
1. Aktifkan **XAMPP/Laragon**.
2. Simpan file `tugas1.php` di dalam folder `htdocs/pertemuan-01/`.
3. Buka browser dan akses `http://localhost/pertemuan-01/tugas1.php`.

---
*Tugas ini dikerjakan sebagai bagian dari modul Fundamental PHP.*
