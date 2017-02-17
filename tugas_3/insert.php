<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$query = mysql_query("INSERT INTO mahasiswa (no,nama,nim,alamat) VALUES ('','$nama','$nim','$alamat')");
if ($query) {
echo ("<script> alert('data berhasil di tambah'); window.location = 'index.php'</script>");
}
?>