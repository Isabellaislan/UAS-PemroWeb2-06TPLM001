# UAS-PemroWeb2-06TPLM001
UAS - 06TPLM001 - KELOMPOK 3 - 181011402271 - ISABELLA. Repository Jawaban UAS Mata Kuliah Pemrograman Web 2 Kelas 06TPLM001


Repository Jawaban UAS Mata Kuliah Pemrograman Web 2 Kelas 06TPLM001

Disusun Oleh:

181011400490 GALIH HARYANTO
181011402253 HAIRUL RIDWAN
181011401922 INDRIYANI OCTAVIA
181011402271 ISABELLA

Link Website Aplikasi Data Penerimaan Bantuan Sosial Covid19 : https://webuaskelompok3.000webhostapp.com/index.php


Username : kelompok3
Password : admin
Aplikasi Data Penerimaan Bantuan Covid19 adalah aplikasi untuk mendata Penerimaan Bntuan covid19 berbasis web yang dibuat dan dikembangkan menggunakan bahasa pemrograman PHP, HTML, CSS, Java Script, template binary admin dengan framework Bootstrap, dan menyimpan data pada Database MySQL. Aplikasi ini bertujuan untuk memenuhi tugas akhir UAS Pemrograman Web 2 oleh Bapak Dosen Sonasa Rinusantoro S.Kom., M.A.
Pada Aplikasi Web ini diterapkan operasi CRUD (Create, Read, Update, dan Delete) menggunakan PHP sederhana dan disimpan kedalam database MySQL.
Adapun fungsi php dari tiap fitur pada aplikasi Data Relawan Covid19 adalah sebagai berikut:
1. config.php
config.php adalah file yang digunakan untuk aplikasi web dapat terhubung dengan database MySQL sehingga dapat melakukan operasi data dasar yakni CRUD. Di dalam file ini terdapat fungsi mysqli_connect() yang digunakan untuk membuka koneksi ke server MySQL dan memilih database yang akan digunakan Adapun beberapa komponen yang terdapat pada file ini di antaranya adalah nama host, nama database, username database, serta password database.

2. waktu.php
waktu.php adalah file yang digunakan untuk menampilkan tanggal dan waktu saat ini sesuai dengan format yang di definisikan. Di dalam PHP format tanggal dan waktu defaultnya adalah bahasa inggris maka pada file ini akan dilakukan pengubahan ke bahasa indonesia dan mengatur zona waktu menjadi Asia/Jakarta.

3. login.php
login.php adalah halaman website yang tampil terlebih dahulu saat kita mengakses link. Halaman ini menampilkan 2 buah kolom kosong, yaitu kolom "username" dan kolom "password". Fungsinya untuk membatasi hak akses para pengunjung website.  Jika user sudah melakukan login maka data user pada database akan diarahkan ke halaman index melalui session_start().

4. Index.php
Index.php adalah halaman website yang tampil setelah kita berhasil login. Pada halaman ini menampilkan menu home dan data penerimaan bantuan sosial. File ini akan otomatis berisikan home.php yang menjadi default. Saat tab penerimaan bantuan sosial diklik maka index.php akan berisikan halaman penerimaan.php

5. Home.php
Home.php adalah file untuk menampilkan jumlah data penerimaan bantuan sosial covid19, serta informasi berupa jumlah data kelompok, dan tabel data anggota dari kelompok 3 berupa nama dan nim mahasiswa.

6. penerimaan.php
penerimaan.php adalah file untuk menampilkan data penerimaan bantuan sosial covid19, pada halaman ini user dapat melakukan tambah data dengan mengklik  tombol Tambah Data yang akan  menuju halaman tambah.php, pencetakan laporan data penerimaan bantuan covid19 dengan cara mengklik Tombol Cetak Data maka akan keluar Hasil dalam format PDF yang akan diarahkan ke cetak.php. Pada halaman yang sama dilengkapi fitur ubah dan fitur hapus data terhadap data penerimaan bantuan sosial covid19. Jika user mengklik tombol ubah maka user akan menuju halaman edit.php dan jika user mengklik tombol hapus maka akan muncul confirm dialog mengenai data yang akan dihapus dan jika user mengklik tombol Ok maka data yang terpilih akan terhapus dari database.

7. tambah.php
tambah.php adalah file yang digunakan untuk menambahkan data kedalam database yang didalamnya terdapat form input yang terdiri dari beberapa textfield dan satu select box alokasi yang mengambil data dari database tb_alokasi. Setelah berhasil menyimpan data maka user akan diarahkan kembali ke halaman penerimaan.php.
8. edit.php
edit.php adalah file yang digunakan untuk mengubah data penerimaan bantuan sosial covid19 yang sudah diinput. pada halaman ini terdapat form ubah data dimana textfield dan select boxnya terdapat data yang sudah ada di dalam database kemudian user dapat melakukan perubahan pada data tersebut. Setelah berhasil melakukan perubahan, user akan diarahkan kembali ke halaman penerimaan.php.

9. cetak.php
cetak.php adalah file yang digunakan untuk mencetak semua data penerimaan bantuan sosial covid19 menjadi sebuah dokumen dalam format PDF. Terdapat sintax window.print(); yang digunakan untuk mencetak sebuah halaman website.

10. hapus.php
hapus.php adalah file yang digunakan untuk menghapus data penerimaan bantuan sosial covid19 yang dipilih oleh user. Setelah berhasil melakukan penghapusan, user akan diarahkan kembali ke halaman penerimaan.php.

11. logout.php
logout.php adalah file yang digunakan untuk proses keluar dari sistem. Logout ini bertujuan untuk menjaga keamanan sebuah akun agar tidak digunakan oleh orang lain. Setelah berhasil melakukan logout, user akan diarahkan kembali ke halaman login.php.
Terima Kasih.
