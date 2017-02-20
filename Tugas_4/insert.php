<?php
include_once 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$query = mysql_query("INSERT INTO `mahasiswa` (`no`, `nama`, `nis`, `alamat`) VALUES ('', '$nama', '$nim', '$alamat')");
if ($query) {
  ?>
  <script type="text/javascript">
  alert('Data berhasil disimpan');
  window.location.href='home.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Terjadi error saat simpan data');
  </script>
  <?php
 }
if(isset($_POST['btn-batal']))
{
 header("Location: home.php");
}
?>