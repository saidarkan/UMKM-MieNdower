![alt text](Image/coverSRS.jpg?raw=true)

## BAB I Pendahuluan


## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website Profile Mie NDower”.Website UMKM Mie Ndower dirancang untuk memudahkan pengelola UMKM Mie  Ndower dalam memperkenalkan produk, memberikan informasi terkait varian menu, harga, promosi, serta kemudahan pemesanan kepada pelanggan. Website ini bertujuan menjadi sarana yang efektif dalam mendukung pemasaran dan pelayanan pelanggan secara online, sehingga dapat meningkatkan visibilitas dan penjualan produk Mie Ndower.

## 1.2 Lingkup
Website UMKM Mie Ndower merupakan website yang kami bangun untuk mempermudah pengelola UMKM Mie Ndower dalam memberikan informasi kepada pelanggan seputar produk unggulan, varian menu, harga, promosi. Website ini juga dirancang untuk mendukung pemasaran dan meningkatkan interaksi dengan pelanggan, sehingga dapat memperluas jangkauan dan meningkatkan penjualan.

## 1.3 Akronim, singkatan, definisi
| Istilah | Definisi |
| ------ | ------ |
|   Use Case     |    situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda    |
|    Login    | Digunakan untuk mengakses aplikasi       |
|    SRS    | Software Requirement Specification       |
|    Software Requirement Specification    | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna      |
|    ERD    | Entity Relationship Diagram.       |
|    Entity Relationship Diagram    | representasi visual dari hubungan antara entitas dalam sebuah sistem.       |

## 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah :

-https://mieayammahmud.com/


## 1.5 Overview
Bab selanjutnya yaitu menjelaskan sistem yang diterapkan pada website. Menjelaskan gambaran umum dari website, sistem interface website dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari website yang akan diterapkan pada website yang dibuat.


## BAB II GAMBARAN UMUM
UMKM adalah tulang punggung perekonomian masyarakat, dan di tengah pesatnya perkembangan teknologi di era globalisasi ini, sektor UMKM terus beradaptasi untuk bertahan dan berkembang. Salah satu inovasi penting adalah pemanfaatan teknologi, khususnya di bidang software engineering, yang dapat membantu meningkatkan efisiensi dan daya saing UMKM dalam kehidupan sehari-hari.

Dalam studi kasus ini, kami menganalisis kebutuhan UMKM Mie Ndower yang telah berdiri sejak September 2023 di Pekanbaru. UMKM ini terinspirasi dari kecintaan pemiliknya terhadap mie, dan hadir dengan cita rasa khas yang unik dan menggugah selera. Tantangan utama yang kami temui adalah bagaimana memberikan informasi lengkap dan akses mudah kepada pelanggan terkait produk, promo, lokasi, dan berbagai hal tentang Mie Ndower.

Maka dari itu, kami merancang sebuah sistem informasi berbasis web, sebuah platform modern yang dirancang untuk membantu UMKM Mie Ndower dalam memberikan pengalaman terbaik kepada pelanggannya. Sistem ini dilengkapi dengan berbagai fitur yang dapat membantu pengunjung dan admin dalam mengelola serta mendapatkan informasi seputar Mie Ndower, pengunjung fungsi utama yaitu:

- View Menu
- View Promo
- View Artikel
- View FAQ
- View About
- View Locations
- View Contact
- Input Reviews

Berikut ini fungsi admin yaitu:
- Login
- Input, Edit, Delete Menu
- Input, Edit, Delete Promo
- Input, Edit, Delete Artikel
- Input, Edit, Delete FAQ
- Input, Edit, Delete About
- Input, Edit, Delete Locations
- Input, Edit, Delete Reviews
  
## 2.1 Perspektif produk
Web Profile Mie Ndower adalah sebuah sistem informasi yang diaplikasikan pada website. Terdapat 2 jenis aktor yaitu admin dan pengunjung. Pengolahan data dilakukan oleh admin pada website, sedangkan pengunjung hanya dapat melihat informasi yang telah disediakan pada website.

**2.1.1 Antarmuka Sistem**
![alt text](revisi/revisi1.jpg?raw=true)

Sistem Informasi Parenting memiliki 2 pengunjung yaitu admin dan pengunjung. Admin mempunyai fungsi mengelola data informasi dan Pengunjung bisa melihat informasi serta memberikan komentar.

**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
|  |  |
|--|--|
| ![alt text](Admin/Login.png?raw=true) halaman login admin diminta untuk mengisi username dan password.| ![alt text](Admin/Dashboard.png?raw=true) Setelah login admin akan masuk ke tampilan Dashboard admin.
|  |  |
| ![alt text](Admin/Menu.png?raw=true) Pada halaman admin akan terdapat halaman unutk mengelola data menu, namun tidak hanya data menu tapi admin juga dapat mengelola data artikel, data kontak, data about, data hompegae, data faq, dan data promo  dengan tamnpilan yang sama di halaman yang berbeda.| ![alt text](Admin/Tambah.png?raw=true) Pada halaman mengelola data menu, admin juga dapat menambahkan data menu, begitu juga dengan pengelolaan data di tabel lainnya.
|  |  |
| ![alt text](Admin/Menu.png?raw=true) Pada halaman mengelola data menu juga terdapat aksi untuk mengedit data menu.|![alt text](Admin/Menu.png?raw=true) Pada halaman mengelola data kegiatan, selain menambahkan dan mengedit, admin juga dapat menghapus data menu yang mana ketika button hapus di klik akan muncul pop up untuk memastikan admin benar-benar ingin menghapus atau tidak.


**Halaman User**
|  |  |
|--|--|
| ![alt text](Customer/Web.png) Pada halaman pengunjung terdapat beranda yang berisi tampilan scrolling yang berisi seluruh konten seperti tampilan home, about, faq,promo,menu, artikel ,locations dan contact.|![alt text](Customer/Menu.png?raw=true) Pada halaman pengunjung terdapat halaman menu yang berisi nama_menu, gambar, deskripsi, rating dan harga.
|  |  |
| ![alt text](Customer/ReviewMenu.png?raw=true) Pada halaman pengunjung terdapat halaman lanjutan menu, jika pengunjung telah mengklik satu menu yang akan dilihat, maka pada halaman ini akan tampil review berupa rating dan komentar dari menu tersebut.|![alt text](Customer/Promo.png?raw=true) Pada halaman pengunjung terdapat halaman promo yang berisi gambar,deskripsi, dan judul  promo.
|  |  |
| ![alt text](Customer/DetailPromo.png?raw=true) Pada halaman pengunjung terdapat halaman lanjutan Promo jika pengunjung telah mengklik satu promo yang akan dilihat, maka pada halaman ini akan tampil detail dari promo tersebut.|![alt text](Customer/Artikel.png?raw=true) Pada halaman pengunjung terdapat halaman artikel yang berisi gambar,judul,deskripsi dari artikel.
|  |  |
| ![alt text](Customer/DetailArtikel.png?raw=true) Pada halaman pengunjung terdapat halaman lanjutan Artikel jika pengunjung telah mengklik satu artikel yang akan dilihat, maka pada halaman ini akan tampil detail dari artikel dan rekomendasi artikel lain .


**2.1.3 Antarmuka perangkat keras**
![alt text](Gambar/Data.png?raw=true)
Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Parenting antara lain :

PC / Laptop Untuk menjalankan Aplikasi ini.

**2.1.4 Antarmuka perangkat lunak**

tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Informasi Parenting antara lain :

- PC

- wifi/Jaringan

**2.1.6 Batasan Memori**

tidak ada

**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
|   Login  | Digunakan untuk mengakses aplikasi    |
|    Input Data    |    Digunakan untuk memasukkan data-data    |
| Kembali |  Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data|
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Simpan      |     Digunakan untuk menyimpan data   |

**2.1.1 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
![alt text](Gambar/Fungsional.png?raw=true)

**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Gambar/AdminLogin.png?raw=true)

Deskripsi Singkat 
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login. 

Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.

Xref: Bagian 3.2.1, Login Admin

**2.2.2 Admin Management Menu**

Use Case: Input data Menu

Diagram:

![alt text](Gambar/AdminMenu.png?raw=true)

Deskripsi Singkat
Admin mengelola menu yang terdiri dari Judul Menu, Deskripsi Menu, Gambar Menu, dan Harga Menu.

Deskripsi Langkah- langkah:
1. Admin bertugas mengelola menu di sistem.
2. Admin mengakses fitur Management Menu untuk melakukan pengelolaan data terkait menu.
3. Admin dapat menambahkan atau memperbarui Judul Menu, Deskripsi Menu, Gambar Menu, dan Harga Menu


Xref: Bagian 3.2.2, Input data Menu

**2.2.3 Admin Management Promo**

Use Case: Input data Promo

Diagram:
![alt text](Gambar/AdminPromo.png?raw=true)

Deskripsi Singkat
Admin mengelola promo yang terdiri dari Judul Promo, Deskripsi Promo, Tanggal Promo, dan Tanggal berakhir promo.

Deskripsi Langkah- langkah:
1. Admin bertugas mengelola promo di sistem.
2. Admin mengakses fitur Management Promo untuk melakukan pengelolaan data terkait Promo.
3. Admin dapat menambahkan atau memperbarui Judul Promo, Deskripsi Promo, Tanggal Promo, dan Tanggal berakhir promo


Xref: Bagian 3.2.3, Input data Promo

**2.2.4 Admin FAQ**

Use Case: Input data FAQ

Diagram:![alt text](Gambar/AdminFAQ.png?raw=true)


Deskripsi Singkat
Admin mengelola FAQ yang terdiri dari Pertanyaan dan Jawaban.
Deskripsi Langkah- langkah:
1. Admin bertugas mengelola FAQ di sistem.
2. Admin mengakses fitur FAQ untuk melakukan pengelolaan data terkait FAQ.
3. Admin dapat menambahkan atau memperbarui Pertanyaan dan Jawaban


Xref: Bagian 3.2.4,Input data FAQ

**2.2.5 Admin Management Artikel**

Use Case: Input data Artikel

Diagram:![alt text](Gambar/AdminArtikel.png?raw=true)


Deskripsi Singkat
Admin mengelola promo yang terdiri dari Judul, Kategori, Tanggal Artikel, Isi Artikel, Status, dan Gambar.
Deskripsi Langkah- langkah:
1. Admin bertugas mengelola Artikel di sistem.
2. Admin mengakses fitur Management Artikel untuk melakukan pengelolaan data terkait Artikel.
3. Admin dapat menambahkan atau memperbarui Judul, Kategori, Tanggal Artikel, Isi Artikel, Status, dan Gambar.


Xref: Bagian 3.2.5,Input data Artikel

**2.2.6 Admin Management Homepage**

Use Case: Input data Homepage

Diagram:![alt text](Gambar/AdminHomepage.png?raw=true)


Deskripsi Singkat
Admin dapat menambahkan atau memperbarui Judul, terdiri dari Judul 1, Judul 2, dan Pembuka dan juga Admin dapat menambahkan atau memperbarui Deskripsi Judul, Sub-Judul, dan Deskripsi Sub-Judul
Deskripsi Langkah- langkah:
1. Admin bertugas mengelola Homepage di sistem.
2. Admin mengakses fitur Management Homepage untuk melakukan pengelolaan data terkait Homepage.
3. Admin dapat menambahkan atau memperbarui Judul, terdiri dari Judul 1, Judul 2, dan Pembuka 
4. Admin dapat menambahkan atau memperbarui Deskripsi Judul, Sub-Judul, dan Deskripsi Sub-Judul


Xref: Bagian 3.2.6,Input data Homepage

**2.2.7 Admin Management About**

Use Case: Input data About

Diagram:
![alt text](Gambar/AdminAbout.png?raw=true)


Deskripsi Singkat
Admin dapat menambahkan atau memperbarui Judul, Deskripsi, dan Gambar
Deskripsi Langkah- langkah:
1. Admin bertugas mengelola About di sistem.
2. Admin mengakses fitur Management About untuk melakukan pengelolaan data terkait About.
3. Admin dapat menambahkan atau memperbarui Judul, Deskripsi, dan Gambar


Xref: Bagian 3.2.7,Input data About

**2.2.8 Admin Management Contact**

Use Case: Input data Contact

Diagram:
![alt text](Gambar/AdminContact.png?raw=true)


Deskripsi Singkat
Admin dapat menambahkan atau memperbarui Nama Medsos, Link Medsos, Ikon Medsos
Deskripsi Langkah- langkah:
1. Admin bertugas mengelola Contact di sistem.
2. Admin mengakses fitur Management Contact untuk melakukan pengelolaan data terkait Contact.
3. Admin dapat menambahkan atau memperbarui Nama Medsos, Link Medsos, Ikon Medsos 


Xref: Bagian 3.2.8,Input data Contact


**2.2.9 Admin Management Location**

Use Case: Input data Location

Diagram:
![alt text](Gambar/AdminLocation.png?raw=true)

Deskripsi Singkat 
Admin mengelola Location yang terdiri dari Nama Lokasi dan Link Lokasi.
Deskripsi Langkah-Langkah
1. Admin bertugas mengelola Location di sistem.
2. Admin mengakses fitur Management Location untuk melakukan pengelolaan data terkait Location.
3. Admin dapat menambahkan atau memperbarui Nama Lokasi dan Link Lokasi.

Xref: Bagian 3.2.9, Input data Location

**2.2.10 Admin Management Reviews**

Use Case: Input data Reviews

Diagram:
![alt text](Gambar/AdminLocation.png?raw=true)

Deskripsi Singkat 
Admin mengelola Reviews yang terdiri dari Rating, Comment, Jawaban, Nama.
Deskripsi Langkah-Langkah
1. Admin bertugas mengelola Reviews di sistem.
2. Admin mengakses fitur Management Location untuk melakukan pengelolaan data terkait Reviews.
3. Admin dapat menambahkan atau memperbarui Jawaban.

Xref: Bagian 3.2.9, Input data Reviews

**2.2.11 Customer Mengunjungi Website**

Use Case: Customer melihat website

Diagram:
![alt text](Gambar/Customer.png?raw=true)

Deskripsi Singkat 
Customer hanya dapat melihat website dan hanya bisa menambahkan review
Deskripsi Langkah-Langkah
1. Customer mengunjungi website 
2. Customer hanya dapat melihat website tidak dapat mengelola website
3. Customer dapat melihat About, Menu, Promo, FAQ, Artikel, Locations, Contact.
4. Customer dapat menambahkan review menu dan tersimpan pada data 


Xref: Bagian 3.2.11, Login pengunjung

## 2.3 Spesifikasi kebutuhan non-fungsional
- tabel kebutuhan non-fungsional

| no | deskripsi |
| ------ | ------ |
|     1   |   Semua interface dan fungsi menggunakan Bahasa Indonesia     |
|     2   |   Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, Customer )     |

## 2.4 Karakteristik Pengguna
Karakteristik pengguna dari website ini adalah pengguna hanya dapat melihat dan hanya dapat menginputkan review pada sistem website dan dihubungkan dengan hak akses atau level autentikasi.

## 2.5 Batasan-batasan
tidak ada

## 2.6 Asumsi-asumsi
tidak ada

## 2.7 Kebutuhan Penyeimbang
tidak ada

## BAB III Requirement Specification


## 3.1 Persyaratan Antarmuka Eksternal
tidak ada

## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi         | Login                                  |
| ------------------- | -------------------------------------- |
| Xref                | Bagian 2.2.1 Login               |
| Trigger             | Admin Membuka Website Profile Mie Ndower |
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|        |         2. Sistem melakukan validasi login. |
|        | 3. Bila sukses, sistem akan mengarahkan ke dashboard admin.  |
|        | 4. Bila gagal, sistem akan menampilkan peringatan. |
|     Alternative       |                   Tidak Ada                   |
| Post Condition     |                  admin dapat login dan mengakses dashboard webiste profile mie ndower                   |
|         Exception Push          |                  Username dan password salah                   |

**3.2.2 Admin Input Menu**
| Nama Fungsi | Input Informasi Website |
| ------ | ------ |
| Xref       | Bagian 2.2.2, Input data menu      |
| Triger       | Membuka website profile mie ndower       |
| Precondition | Menginput data menu |
| Basic Path | 1. Sistem akan menampilkan tampilan input menu. |
|            | 2. Admin dapat melihat,menambahkan, dan mengupload menu. |
|            | 3. Sistem akan menyimpan ke database. |
|            | 4. Jika sudah disimpan sistem akan menampilkan peringatan. |
| Alternative | Tidak ada |     
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti location, about, dan contact .        |
| Exception Push | Tidak ada koneksi |


**3.2.3 Admin Input Promo**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.3 Admin Input Promo                     |
| Trigger            | admin dapat menginputkan data Promo |
| Precondition       | Admin menginputkan Data Promo ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan promo. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload promo.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti location, about, dan contact .        |
| Exception Push     | Tidak Ada        |

**3.2.4 Input data FAQ**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang FAQ                     |
| Trigger            | admin dapat menginputkan data tentang FAQ |
| Precondition       | Admin menginputkan data tentang FAQ ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang FAQ. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang FAQ.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti location, about, dan contact .        |
| Exception Push     | Tidak Ada        |

**3.2.5 Input data Artikel**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang Artikel                     |
| Trigger            | admin dapat menginputkan data tentang Artikel |
| Precondition       | Admin menginputkan data tentang Artikel ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang Artikel. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang Artikel.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti location, about, dan contact .        |
| Exception Push     | Tidak Ada        |

**3.2.6 Input data Homepage**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang Homepage                     |
| Trigger            | admin dapat menginputkan data tentang Homepage |
| Precondition       | Admin menginputkan data tentang Homepage ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang Homepage. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang Homepage.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Tidak Ada .        |
| Exception Push     | Tidak Ada        |

**3.2.7 Input data About**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang About                     |
| Trigger            | admin dapat menginputkan data tentang About |
| Precondition       | Admin menginputkan data tentang Homepage ke About |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang About. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang About.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Tidak Ada .        |
| Exception Push     | Tidak Ada        |

**3.2.8 Input data Contact**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang Contact                     |
| Trigger            | admin dapat menginputkan data tentang Contact |
| Precondition       | Admin menginputkan data tentang Homepage ke Contact |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang Contact. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang Contact.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Tidak Ada .        |
| Exception Push     | Tidak Ada        |

**3.2.9 Input data Location**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang Location                     |
| Trigger            | admin dapat menginputkan data tentang Location |
| Precondition       | Admin menginputkan data tentang Homepage ke Location |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang Location. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang Location.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Tidak Ada .        |
| Exception Push     | Tidak Ada        |

**3.2.10 Input data Reviews**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang Reviews                     |
| Trigger            | admin dapat menginputkan data tentang Reviews |
| Precondition       | Admin menginputkan data tentang Homepage ke Reviews |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang Reviews. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang Reviews.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Tidak Ada .        |
| Exception Push     | Tidak Ada        |

**3.2.11 Mengunjungi website**

| Nama Fungsi        |    pengunjung  Mengunjungi website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Pengunjung Mengunjungi website             |
| Trigger            |pengunjung Dapat mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi menu yang telah tersedia |
| Precondition       |pengunjung Mengunjungi website |
| Basic Path         | 1. Sistem akan menampilkan halaman-halaman konten. |
|                    |  2.pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia    |
|                    | 3.pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.    |
| Alternative        |   Halaman Konten    |
| Post Condition     |   pengunjung mengunjungi website dan melihat informasi yang ada pada website     |
| Exception Push     |    Jika ada kesalahan server atau gangguan teknis, sistem akan menampilkan pesan kesalahan kepada pengguna. Pengguna dapat mencoba kembali atau menghubungi dukungan teknis.    |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Gambar/NonFungsional.png?raw=true)
**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem informasi parenting terdapat struktur Database yang dijelaskan menggunakan ERD.

**Tabel Admin**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id_Admin|int|Auto-increment dari Id_Admin|
|username|varchar|Berisi username admin untuk mengakses sistem|
|Password|varchar|Berisi password admin untuk mengakses sistem|

**Tabel Artikel**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_Artikel|int|Auto-increment dari Id_artikel|
|gambar|varchar|Berisi gambar didalam artikel sistem|
|deskripsi|text|Berisi deskripsi artikel sistem|
|judul|varchar|Berisi judul pada artikel sistem|
|kategori|varchar|Berisi kategori pada artikel sistem|
|status|varchar|Berisi status pada artikel sistem|
|tanggal|varchar|Berisi tanggal pada artikel sistem|

**Tabel About**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_about|int|Auto-increment dari id_about|
|gambar|varchar|Berisi gambar didalam about sistem|
|deskripsi|text|Berisi deskripsi about sistem|
|judul|varchar|Berisi judul pada about sistem|

**Tabel Contact**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_contact|int|Auto-increment dari id_contact|
|nama|varchar|Berisi nama pada contact sistem|
|icon|text|Berisi icon contact sistem|
|link|text|Berisi link contact sistem|

**Tabel Lokasi**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_lokasi|int|Auto-increment dari id_lokasi|
|nama|varchar|Berisi nama pada lokasi sistem|
|link|text|Berisi link lokasi sistem|

**Tabel Homepage**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_homepage|int|Auto-increment dari id_homepage|
|pembuka|varchar|Berisi pembuka pada Homepage sistem|
|judul1|varchar|Berisi judul1 pada Homepage sistem|
|judul2|varchar|Berisi judul2 pada Homepage sistem|
|deskripsi_judul|text|Berisi deskripsi_judul Homepage sistem|
|subjudul|text|Berisi subjudul Homepage sistem|
|deskripsi_subjudul|text|Berisi deskripsi_subjudul Homepage sistem|

**Tabel Promo**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_promo|int|Auto-increment dari id_promo|
|judul|varchar|Berisi judul pada Promo sistem|
|deskripsi|text|Berisi deskripsi Promo sistem|
|tanggal|varchar|Berisi tanggal pada Promo sistem|
|jenis|text|Berisi jenis Promo sistem|
|tanggal_berakhir|text|Berisi tanggal_berakhir Promo sistem|

**Tabel FAQ**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_FAQ|int|Auto-increment dari id_FAQ|
|pertanyaan|varchar|Berisi pertanyaan pada FAQ sistem|
|jawaban|varchar|Berisi jawaban pada FAQ sistem|

**Tabel Menu**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_menu|int|Auto-increment dari id_menu|
|nama|varchar|Berisi nama pada Menu sistem|
|jenis|varchar|Berisi jenis pada Menu sistem|
|deskripsi|varchar|Berisi deskripsi pada Menu sistem|
|harga|varchar|Berisi harga pada Menu sistem|
|gambar|varchar|Berisi gambar pada Menu sistem|

**Tabel Reviews**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_reviews|int|Auto-increment dari id_reviews|
|rating|int|Berisi rating pada dari menu sistem|
|comment|varchar|Berisi comment pada Menu sistem|
|nama|varchar|Berisi nama pada Menu sistem|
|jawaban|varchar|Berisi jawaban pada Menu sistem|


## Pembagian tugas
BAB 1 ->Rakha

BAB 2 
2.1
  
  2.1.1 -> Nindy
  
  2.1.2 -> Nindy
  
  2.1.3 -> Ariyan
  
  2.1.4 -> Ariyan
 
  2.1.5 -> Ariyan
  
  2.1.6 -> Raditya
  
  2.1.7 -> Raditya
  
  2.1.8 -> Raditya

2.2 semua poin-poin (nindy)

BAB 3 

3.1 nindy

3.2 nindy

3.3 Nindy

