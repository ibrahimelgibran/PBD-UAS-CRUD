<?php
// Panggil file "database.php" untuk koneksi ke database
require_once "../../config/database.php";

// Tentukan nama tabel dan kolom kunci utama
$tabel = "tbl_kelas";
$kunci_utama = "id_kelas";

// Set kolom kunci utama sebagai auto-increment
$alter_query = "ALTER TABLE $tabel MODIFY COLUMN $kunci_utama INT AUTO_INCREMENT";
mysqli_query($mysqli, $alter_query);

// Mengecek data hasil submit dari form
if (isset($_POST['simpan'])) {
    // Ambil data hasil submit dari form
    $nama_kelas = mysqli_real_escape_string($mysqli, trim($_POST['nama_kelas']));
    $deskripsi  = mysqli_real_escape_string($mysqli, trim($_POST['deskripsi']));

    // SQL statement untuk insert data ke tabel "tbl_kelas"
    $insert = mysqli_query($mysqli, "INSERT INTO $tabel(nama_kelas, deskripsi) VALUES('$nama_kelas', '$deskripsi')")
                                     or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));

    // Cek query
    // Jika proses insert berhasil
    if ($insert) {
        // Alihkan ke halaman data kelas dan tampilkan pesan berhasil simpan data
        header('location: ../../main.php?module=kelas&pesan=1');
    }
}
?>
