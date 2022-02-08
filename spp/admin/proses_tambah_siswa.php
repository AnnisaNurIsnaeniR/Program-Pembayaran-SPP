<?php
if($_POST){
    $nis=$_POST['nis'];
    $nama_siswa=$_POST['nama_siswa'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    if(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nis, nama_siswa, id_kelas, alamat, no_telp, username, password) value ('".$nis."','".$nama_siswa."','".$id_kelas."','".$alamat."','".$no_telp."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>