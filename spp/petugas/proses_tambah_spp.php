<?php
if($_POST){
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];
    if(empty($angkatan)){
        echo "<script>alert('angkatan kelas tidak boleh kosong');location.href='tambah_spp.php';</script>";
    } elseif(empty($tahun)){
        echo "<script>alert('tahun tidak boleh kosong');location.href='tambah_spp.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into spp (angkatan, tahun, nominal) value ('".$angkatan."','".$tahun."','".$nominal."')");
        if($insert){
            echo "<script>alert('Sukses melakukkan pembayaran');location.href='tampil_spp.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan pembayaran kelas');location.href='tambah_spp.php';</script>";
        }
    }
}
?>
