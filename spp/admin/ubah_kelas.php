<?php
include "sidebar.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>spp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
  <section id="main-content">
  <div class="panel-body">
	<div class="col-md-12 w3ls-graph">
		<div class="agileinfo-grap">
	        <div class="agileits-box">
				<header class="agileits-box-header clearfix">
    <?php 
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($conn,"select * from kelas");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Data Siswa</h3>
    <form action="proses_ubah_kelas.php" method="post">
      <input type="hidden" name="id_kelas" value="<?=$dt_siswa['id_kelas']?>">
       Nama Kelas:
        <input type="text" name="nama_kelas" value=   "<?=$dt_siswa['nama_kelas']?>" class="form-control">
       Jurusan :
        <input type="text" name="jurusan" value=   "<?=$dt_siswa['jurusan']?>" class="form-control">
        Angkatan :
        <input type="text" name="angkatan" value=   "<?=$dt_siswa['angkatan']?>" class="form-control">
    <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>
    <div class="toolbar">
											
											
										</div>
								</header>
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>
    
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>