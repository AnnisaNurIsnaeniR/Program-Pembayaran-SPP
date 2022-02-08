<?php
if($_POST){
    $id_spp=$_POST['id_spp'];
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];
    
    if(empty($angkatan)){
        echo "<script>alert('angkatan tidak boleh kosong');location.href='ubah_spp.php';</script>";

    } elseif(empty($tahun)){
        echo "<script>alert('tahun tidak boleh kosong');location.href='ubah_spp.php';</script>";
    } elseif(empty($nominal)){
        echo "<script>alert('nominal tidak boleh kosong');location.href='ubah_spp.php';</script>";
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update spp set angkatan='".$angkatan."',tahun='".$tahun."',nominal='".$nominal."' where id_spp = '".$id_spp."'") or die(mysqli_error($conn));
        if ($update) {
            if($update){
                echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
            } else {
                echo "<script>alert('Gagal update spp');location.href='ubah_spp.php?id_spp=".$id_spp."';</script>";
            }
        }
        
    } 
}
?>