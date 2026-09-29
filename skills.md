Buat frontend lengkap untuk sistem **LMS ASTRA (ASTRA REPORT)** menggunakan **Laravel 13 + Blade + Tailwind CSS**.

Fokus hanya pada **frontend/UI**. Jangan membuat atau mengubah migration, model, controller, route, database, API, authentication backend, atau logic backend. Gunakan dummy/static data untuk menampilkan seluruh tampilan. Gunakan Vanilla JavaScript jika diperlukan untuk interaksi frontend seperti modal, dropdown, filter, dan perubahan state.

Sistem memiliki dua role:

1. Supervisor
2. Dealer

Buat desain yang modern, clean, profesional, responsive, dan cocok untuk aplikasi internal perusahaan. Gunakan layout dashboard dengan sidebar, navbar, breadcrumb, card, table, badge, button, modal, form, alert, dan pagination. Gunakan komponen Blade reusable agar desain antarhalaman konsisten.

STRUKTUR FILE:

resources/views/
├── layouts/
│   ├── supervisor.blade.php
│   └── dealer.blade.php
│
├── components/
│   ├── sidebar.blade.php
│   ├── navbar.blade.php
│   ├── page-header.blade.php
│   ├── button.blade.php
│   ├── badge.blade.php
│   ├── modal.blade.php
│   ├── input.blade.php
│   ├── select.blade.php
│   ├── textarea.blade.php
│   ├── table.blade.php
│   └── pagination.blade.php
│
├── supervisor/
│   ├── dealers/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── show.blade.php
│   │
│   ├── departments/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── show.blade.php
│   │
│   ├── areas/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── show.blade.php
│   │
│   └── tasks/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
│       └── show.blade.php
│
└── dealer/
└── tasks/
├── index.blade.php
└── show.blade.php

==================================================

1. MANAJEMEN DEALER — SUPERVISOR
   ==================================================

Buat frontend halaman Manajemen Dealer untuk Supervisor.

index.blade.php:
Buat halaman daftar Dealer dengan:

* Sidebar Supervisor
* Navbar
* Breadcrumb
* Page title "Manajemen Dealer"
* Deskripsi singkat
* Tombol "+ Tambah Dealer"
* Search input
* Tabel Dealer
* Pagination

Kolom tabel:

* No
* Kode Dealer
* Nama Dealer
* Aksi

Aksi:

* Detail
* Edit
* Hapus

Gunakan dummy data beberapa Dealer.

Buat modal konfirmasi sebelum menghapus Dealer.

create.blade.php:
Buat halaman "Tambah Dealer".

Form:

* Kode Dealer
* Nama Dealer

Tambahkan:

* Tombol Simpan
* Tombol Batal

Tampilkan contoh validasi error secara visual.

edit.blade.php:
Buat halaman "Edit Dealer" menggunakan dummy data yang sudah terisi.

Field:

* Kode Dealer
* Nama Dealer

Tombol:

* Simpan Perubahan
* Batal

show.blade.php:
Buat halaman detail Dealer.

Tampilkan:

* Kode Dealer
* Nama Dealer
* Tanggal dibuat
* Tanggal diperbarui

Tambahkan tombol:

* Edit
* Kembali

==================================================
2. MANAJEMEN DEPARTMENT — SUPERVISOR
====================================

Buat frontend halaman Manajemen Department.

index.blade.php:
Tampilkan:

* Sidebar
* Navbar
* Breadcrumb
* Judul "Manajemen Department"
* Deskripsi
* Tombol "+ Tambah Department"
* Search
* Tabel Department
* Pagination

Kolom:

* No
* Kode Department
* Nama Department
* Aksi

Aksi:

* Detail
* Edit
* Hapus

Gunakan dummy data.

Buat modal konfirmasi hapus.

create.blade.php:
Form:

* Kode Department
* Nama Department
* Simpan
* Batal

edit.blade.php:
Form edit Department dengan dummy data.

show.blade.php:
Tampilkan:

* Kode Department
* Nama Department
* Tanggal dibuat
* Tanggal diperbarui

Gunakan desain yang konsisten dengan halaman Dealer.

==================================================
3. MANAJEMEN AREA — SUPERVISOR
==============================

Buat frontend halaman Manajemen Area.

index.blade.php:
Tampilkan:

* Sidebar
* Navbar
* Breadcrumb
* Judul "Manajemen Area"
* Deskripsi
* Tombol "+ Tambah Area"
* Search
* Tabel
* Pagination

Kolom:

* No
* Kode Area
* Nama Area
* Aksi

Aksi:

* Detail
* Edit
* Hapus

create.blade.php:
Form:

* Kode Area
* Nama Area
* Simpan
* Batal

edit.blade.php:
Form edit Area menggunakan dummy data.

show.blade.php:
Tampilkan:

* Kode Area
* Nama Area
* Tanggal dibuat
* Tanggal diperbarui

Tambahkan modal konfirmasi hapus.

Gunakan desain yang konsisten dengan halaman Dealer dan Department.

==================================================
4. MANAJEMEN TUGAS — SUPERVISOR
===============================

Buat frontend Manajemen Tugas untuk Supervisor.

index.blade.php:

Header:

* Breadcrumb
* Judul "Manajemen Tugas"
* Deskripsi
* Tombol "+ Buat Tugas"

Tambahkan:

* Search
* Filter Department
* Filter Area
* Filter Status
* Table
* Pagination

Kolom tabel:

* No
* Nama Laporan
* Department
* Area
* Deadline
* Dibuat Oleh
* Status
* Aksi

Status:

* Belum Dikumpulkan
* Sedang Berlangsung
* Selesai
* Terlambat

Aksi:

* Detail
* Edit
* Hapus

Jika tugas sudah memiliki pengumpulan, tampilkan tombol Edit dan Hapus dalam kondisi disabled.

create.blade.php:

Buat halaman "Buat Tugas".

Form:

* Nama Laporan
* Department
* Area
* Batas Waktu

Department menggunakan select option.

Area menggunakan select option.

Deadline menggunakan date input dengan tanggal hari ini sebagai dummy default.

Tambahkan informasi:
"Setelah terdapat pengumpulan dari Dealer, tugas tidak dapat diedit atau dihapus."

Tombol:

* Buat Tugas
* Batal

edit.blade.php:

Buat halaman Edit Tugas dengan dummy data.

Jika tugas sudah memiliki pengumpulan:

* Field disabled
* Tombol simpan disabled
* Tampilkan alert:
  "Tugas tidak dapat diedit karena sudah memiliki pengumpulan."

show.blade.php:

Buat halaman detail tugas.

Tampilkan card:

* Nama Laporan
* Department
* Area
* Deadline
* Dibuat Oleh
* Tanggal Dibuat
* Status

Buat section "Status Pengumpulan".

Tampilkan statistik:

* Total Dealer
* Sudah Mengumpulkan
* Belum Mengumpulkan
* Perlu Revisi
* Disetujui
* Ditolak

Buat tabel Dealer:

* Dealer
* Status
* Tanggal Pengumpulan
* Aksi

==================================================
5. PENGUMPULAN TUGAS — DEALER
=============================

Buat frontend Pengumpulan Tugas untuk role Dealer.

index.blade.php:

Buat halaman "Tugas Saya".

Tampilkan:

* Sidebar Dealer
* Navbar
* Breadcrumb
* Page title "Tugas Saya"
* Deskripsi

Buat tabel/card daftar tugas.

Informasi:

* Nama Laporan
* Department
* Area
* Deadline
* Status
* Aksi

Status:

* Belum Dikumpulkan
* Menunggu Pemeriksaan
* REVISI
* DISETUJUI
* DITOLAK
* Terlambat

Gunakan badge yang berbeda untuk setiap status.

Tambahkan:

* Search
* Filter Status

show.blade.php:

Buat halaman detail dan pengumpulan tugas.

Bagian "Informasi Tugas":

Tampilkan:

* Nama Laporan
* Department
* Area
* Deadline
* Status
* Supervisor

Buat card deadline yang menonjol.

Jika status "Belum Dikumpulkan":

Tampilkan form:

* Link Google Drive — Input Text
* Catatan — Textarea, optional
* Tombol "Submit Pengumpulan"

Jika status "REVISI":

Tampilkan alert:
"Pengumpulan perlu diperbaiki berdasarkan pemeriksaan Supervisor."

Tampilkan:

* Catatan Supervisor
* Link pengumpulan sebelumnya

Kemudian tampilkan form:

* Link Google Drive baru
* Catatan
* Tombol "Kirim Ulang"

Jika status "DISETUJUI":

Tampilkan success state:
"Pengumpulan telah disetujui."

Jangan tampilkan form pengumpulan.

Jika status "DITOLAK":

Tampilkan rejection state:
"Pengumpulan ditolak."

Jangan tampilkan form pengumpulan.

Jika deadline sudah lewat:

Tampilkan alert:
"Deadline pengumpulan telah berakhir."

Disable form dan tombol submit.

Tambahkan section "Riwayat Pengumpulan".

Buat tabel:

* Tanggal
* Aktivitas
* Link Google Drive
* Catatan
* Status

Aktivitas:

* Kumpul
* Pengumpulan Ulang
* Supervisor Minta Revisi
* Supervisor Menyetujui Pengumpulan
* Supervisor Menolak Hasil Pekerjaan

==================================================
DESAIN DAN KOMPONEN
===================

Buat kedua layout berikut:

supervisor.blade.php:

* Sidebar Supervisor
* Navbar
* Main content
* Responsive sidebar
* User profile
* Navigation menu

dealer.blade.php:

* Sidebar Dealer
* Navbar
* Main content
* Responsive sidebar
* User profile
* Navigation menu

Gunakan reusable components:

* sidebar
* navbar
* page header
* button
* badge
* modal
* input
* select
* textarea
* table
* pagination

Gunakan Tailwind CSS secara konsisten.

Desain harus:

* Modern
* Minimalis
* Profesional
* Responsive
* Clean
* Tidak terlalu banyak warna
* Memiliki hierarchy visual yang jelas
* Cocok untuk sistem internal perusahaan Astra
* Desktop dan mobile friendly

Gunakan dummy data yang realistis agar setiap halaman dapat langsung dilihat hasilnya.

Pastikan tidak ada halaman yang terlihat kosong.

Semua halaman harus menggunakan layout dan komponen yang sama sehingga tampilan LMS ASTRA terasa sebagai satu sistem yang konsisten.

Sekali lagi, JANGAN membuat backend. Fokus hanya pada Blade, Tailwind CSS, dan JavaScript untuk interaksi UI.
