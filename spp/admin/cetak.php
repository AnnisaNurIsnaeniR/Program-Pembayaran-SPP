<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CETAK SPP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header/css/style.css">
  </head>
  <body>
    <div id="content" class="p-4 p-md-5 pt-5">
      <center>
        <h2>DATA LAPORAN SPP</h2>
        <h4>SMK TELKOM MALANG</h4>
      </center>
      <?php 
      include 'koneksi.php';
      ?>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th>ID TRANSAKSI</th>
            <th>PETUGAS</th>
            <th>SISWA</th>
            <th>TANGGAL</th>
            <th>BULAN</th>
            <th>TAHUN</th>
            <th>NOMINAL BAYAR</th>
            <th>JUMLAH BAYAR</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody> 
          <?php
          $sql = mysqli_query($conn, "SELECT * FROM pembayaran
          JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas 
          JOIN siswa ON pembayaran.nisn = siswa.nisn
          JOIN spp ON spp.id_spp
          ORDER BY tgl_bayar ") or die(mysqli_error($conn));
          $no = 1;
          while($r = mysqli_fetch_array($sql)){ ?>   
          <tr>
            <td><?php echo $no++; ?></td>
			      <td><?php echo $r['nama_petugas']; ?></td>
			      <td><?php echo $r['nama_siswa']; ?></td>
			      <td><?php echo $r['tgl_bayar']; ?></td>
            <td><?php echo $r['bulan_spp']; ?></td>
			      <td><?php echo $r['tahun_spp']; ?></td>
            <td><?= " Rp. " . $r['nominal']; ?></td>
            <td><?php echo $r['jumlah_bayar']; ?></td>
            <td><?php echo $r['status']; ?></td>
		      </tr>
          <?php 
          }
          ?>
          </table>
          <script>
          window.print();
          </script>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>
        </html>