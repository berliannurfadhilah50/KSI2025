<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $sql = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
    if(mysqli_query($koneksi, $sql)){
        echo 'Data berhasil ditambahkan';
    } else {
        echo 'Gagal menambahkan data: ' . mysqli_error($koneksi);
    }
}
?>
<form method='post'>
    <input type='text' name='nama' placeholder='Masukkan nama'>
    <button type='submit' name='submit'>Tambah</button>
</form>
