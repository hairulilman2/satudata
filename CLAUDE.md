# Panduan Kerja AI untuk Project Satu Data Sulteng

## 1. Prinsip Utama

### 1.1. Baca Dulu, Jangan Tebak
Sebelum menambah/mengubah fitur, **buka dulu file-file terkait** (controller/komponen, model/schema, route, config) untuk memahami pola yang sudah dipakai di project ini.

### 1.2. Ikuti Pola yang Sudah Ada
Ikuti pola yang sudah ada, **bukan pola favorit AI sendiri**. Kalau project pakai gaya A untuk sesuatu, lanjutkan gaya A — jangan diam-diam ganti ke gaya B walau "lebih best practice" — kecuali diminta refactor.

### 1.3. Konsisten dengan Stack yang Sudah Dipilih
Jangan menambah framework/library baru (state management, ORM, UI kit, dsb.) tanpa diminta eksplisit, walau menurut AI itu "lebih bagus".

### 1.4. Perubahan Minimal
Perubahan minimal untuk tujuan yang diminta. Jangan menulis ulang file secara total atau "merapikan" kode di luar scope permintaan, kecuali diminta refactor.

### 1.5. Asumsi yang Wajar
Jika ambiguous, pilih pendekatan paling konsisten dengan kode yang sudah ada, lalu sebutkan singkat asumsi yang diambil. Jangan berhenti hanya untuk bertanya kalau sebenarnya bisa jalan dengan asumsi wajar — tapi tanya kalau memang berisiko salah arah.

## 2. Yang Wajib Dicek di Awal Setiap Project Baru

1. **Bahasa & framework utama** — cek `package.json` / `composer.json` / `requirements.txt`
2. **Struktur folder yang sudah ada** — jangan bikin folder baru di luar pola tanpa alasan
3. **Konvensi penamaan file & variabel** — camelCase/snake_case, singular/plural, dsb
4. **File config lint/format** — `.eslintrc`, `.prettierrc`, `pint.json`, dsb — ikuti aturan di sana
5. **Cara menjalankan test** — kalau ada folder `tests/`, jalankan/ikuti pola test tersebut kalau menambah fitur penting

## 3. Larangan Tanpa Izin Eksplisit

❌ **Jangan mengubah skema database** yang sudah pernah dijalankan/dipakai — buat migration/perubahan baru, jangan edit yang lama

❌ **Jangan mengganti stack inti** — frontend framework, database, auth system, dsb

❌ **Jangan menghapus kode/file** yang terlihat "tidak dipakai" tanpa konfirmasi — bisa jadi masih dipakai di tempat lain

❌ **Jangan commit, tampilkan, atau hardcode secret/API key/credential** — selalu lewat file `.env` yang sudah ada

❌ **Jangan menambah dependency baru** (composer/npm/pip/dsb) kecuali benar-benar diperlukan untuk task yang diminta

❌ **Jangan mengubah logika bisnis inti** (perhitungan, aturan validasi penting, alur pembayaran/otorisasi, dsb) tanpa menjelaskan dulu apa yang akan diubah dan kenapa
4. Alur Kerja saat Mengerjakan Task
Pahami dulu file-file yang relevan dengan task (bukan langsung nulis kode).
Kerjakan perubahan sekecil mungkin yang menyelesaikan task, mengikuti pola project.
Kalau menyentuh area yang punya sisi lain (mis. ada role admin vs user, ada versi mobile vs web), pertimbangkan dampak ke kedua sisi.
Untuk perubahan besar (migration baru, perubahan relasi data, perubahan alur inti), jelaskan secara singkat sebelum/sesudah dieksekusi.
Kalau ada test, tambahkan/jalankan test yang relevan untuk fitur yang ditambah, mengikuti pola test yang sudah ada.
5. Gaya Output & Komunikasi
Berikan file/kode yang langsung siap pakai, bukan penjelasan panjang, kecuali diminta menjelaskan.
Komentar/dokumentasi baru dalam kode: ikuti bahasa yang sudah dipakai di project tersebut (kalau campuran, ikuti mayoritas).
Kalau menemukan bug atau potensi masalah di luar scope task yang diminta, sebutkan singkat tapi jangan langsung memperbaikinya tanpa diminta.
6. Referensi Fungsi Folder & File Umum

Gunakan tabel ini untuk tahu di mana harus meletakkan/mencari kode, dan jangan taruh logika di tempat yang salah (mis. logika bisnis di route, atau query database di view).

A. Laravel (PHP)
Folder/File	Fungsi
routes/web.php	Daftar URL/endpoint aplikasi (mana URL memanggil controller/fungsi mana). Jangan taruh logika bisnis di sini, cukup pemetaan route → controller.
routes/api.php	Sama seperti web.php tapi khusus endpoint API (biasanya balikin JSON, tanpa session/cookie).
app/Http/Controllers/	Tempat logika yang menangani request: ambil input, panggil Model, tentukan view/response apa yang dikembalikan.
app/Http/Middleware/	Kode yang jalan sebelum/sesudah request sampai ke controller (contoh: cek login, cek role admin).
app/Models/	Representasi tabel database (Eloquent). Tempat relasi antar tabel (hasMany, belongsTo, dst) dan logika terkait data itu sendiri.
database/migrations/	"Riwayat" perubahan struktur tabel database (buat tabel, tambah kolom, dst), dijalankan berurutan.
database/seeders/	Skrip untuk mengisi data awal/dummy ke database.
database/factories/	Skrip untuk generate data palsu (biasanya dipakai testing/seeding).
resources/views/	File tampilan (Blade template) — HTML yang dikirim ke browser.
config/	File konfigurasi aplikasi (database, mail, provider AI, dsb), biasanya ambil nilai dari .env.
public/	Folder yang diakses langsung dari internet (entry point index.php, asset hasil build, gambar upload publik).
storage/	File yang disimpan aplikasi (log, cache, upload privat) — biasanya tidak diakses langsung dari luar.
tests/Feature & tests/Unit	Kode test: Feature test = uji alur/endpoint, Unit test = uji fungsi/class kecil secara terisolasi.
.env	Variabel rahasia/konfigurasi per environment (API key, kredensial database) — jangan pernah ditampilkan/di-commit.
B. Next.js / React (JS/TS)
Folder/File	Fungsi
app/ atau pages/	Routing berbasis file — setiap file/folder di sini otomatis jadi URL.
app/api/ atau pages/api/	Endpoint backend (serverless function) yang berjalan di server, bukan di browser.
components/	Komponen UI yang bisa dipakai ulang di banyak halaman.
lib/ atau utils/	Fungsi bantu (helper), koneksi ke database/Supabase, fungsi yang dipakai berulang tapi bukan komponen UI.
hooks/	Custom React hooks (logika stateful yang dipakai ulang antar komponen).
types/	Definisi TypeScript (interface/type) yang dipakai di banyak tempat.
public/	Asset statis yang diakses langsung (gambar, favicon, dll).
styles/	File CSS/Tailwind config global.
.env.local	Variabel rahasia untuk environment lokal — jangan pernah ditampilkan/di-commit.

Catatan: kalau struktur project yang sedang dikerjakan berbeda dari referensi di atas, ikuti struktur yang sudah ada di project tersebut — tabel ini hanya patokan umum saat AI perlu tahu "harusnya taruh kode ini di mana" pada project baru yang masih kosong/standar.