<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama_siswa=$_POST['nama_siswa'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama_siswa)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update siswa set nis='".$nis."', nama_siswa='".$nama_siswa."',id_kelas='".$id_kelas."', alamat='".$alamat."', no_telp='".$no_telp."', username='".$username."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nis='".$nis."', nama_siswa='".$nama_siswa."',id_kelas='".$id_kelas."', alamat='".$alamat."', no_telp='".$no_telp."', username='".$username."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        }
        
    } 
}
?>