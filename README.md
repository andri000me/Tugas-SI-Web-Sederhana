# Tugas-SI-Web-Sederhana
E41181245 Nurlaita Afia Tri Wahyuni

# CRUD
CRUD adalah singkatan dari Create, Read, Update dan Delete. CRUD maksudnya membuat input data ke database, menampilkan data dari database, mengedit mengupdate data serta menghapus data.
CRUD sangat penting untuk pengelolaan data pada database. Hal ini juga sangat diperlukan dalam pengolahan website yang melibatkan database.

# Cara Menampilkan Data Dari Database Dengan CodeIgniter
1. Konfigurasi database terlebih dahulu
2. Sesuaikan pengaturan database pada file config database.php di application/config/database.php dengan mengisi username(root) dan nama database
3. Buatlah sebuah controller baru dengan nama mesin.php(panggil atau buka model m_mesin, karena untuk operasi databasenya akan kita buat pada model m_mesin. kemudian function index menampilkan data dengan function tampil_data yg dibuat dalam m_mesin untuk mengambil data dari database kemudian mempersingnya ke data_mesin) dapat kalian lihat pada codenya
4. buatlah sebuah model dengan nama m_mesin
5. kemudian buat sebuah view dengan nama data_mesin

# Input Data ke Database
1. Setting base_url codeigniter dengan nama project pada application/config/config.php ($config['base_url'] = ....)
2. Tambahkan method function tambah() yang berisi perintah untuk menampilkan v_input. v_input sebagai form inputan, dimana data yang di input di sini akan masuk ke database (pada controller mesin.php)
3. Buatlah sebuah view dengan nama v_input.php
4. Buatlah sebuah function iput_data pada m_mesin.php

# Hapus Data
1. Pada view data_mesin telah berisi link edit dan hapus dan terdapat function hyperlink yang menuju pada method/function hapus di controller mesin.php 
2. Pada controller tambahkan sebuah method hapus. pada parameter function hapus() saya memberikan variabel $id_mesin yg berguna untuk menangkap data id yang di kirim melalu url link hapus tadi
3. Buatlah function hapus pada model m_mesin.php

# Update Data
1. Buatlah sebuah method edit pada controller mesin
2. Kemudian buat juga method/function edit_data pada model m_mesin
3. Buatlah sebuah view dengan nama v_edit dimana view ini kita jadikan sebagai form yang menampilkan data yang akan di edit
4. Buatlah aksi untuk update pada controller mesin yaitu method update
5. Tangkap data dari form edit
6. Kemudian masukkan data yang akan di update ke dalam variabel data
7. Yang terakhir buatlah sebuah function lagi pada model denan nama update_data
