<?php
include "koneksi.php";
if($_POST){
    $nama_petugas = $_POST['nama_petugas'];
    $nama_siswa = $_POST['nama_siswa'];
    $tgl_bayar = $_POST['tgl_bayar']; 
    $bulan_spp = $_POST['bulan_spp']; 
    $tahun_spp = $_POST['tahun_spp']; 
    $jumlah_bayar = $_POST['jumlah_bayar']; 
    $cek0 = mysqli_query($conn,"select * from pembayaran where nisn='$nama_siswa' and bulan_spp='$bulan_spp' and tahun_spp='$tahun_spp'");
    if(mysqli_num_rows($cek0)>0){
        echo "<script>alert('Maaf siswa tersebut sudah lunas');location.href='tambah_transaksi.php'</script>";
    }else{
    $cek = mysqli_query($conn,"INSERT INTO pembayaran VALUES ('','$nama_petugas', '$nama_siswa', '$tgl_bayar', '$bulan_spp', '$tahun_spp', '$jumlah_bayar', 'LUNAS')");
    if($cek){
        echo "<script>alert('Sukses menambahkan Transaksi');location.href='daftar_transaksi.php'</script>";
    }else{
        echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php'</script>";
    }
}
} else {
    echo 'a';
}

?>