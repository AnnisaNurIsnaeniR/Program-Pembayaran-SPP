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
    $qry_get_spp=mysqli_query($conn,"SELECT * FROM spp where id_spp = '".$_GET['id_spp']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_spp);
    ?>
    <h3>Ubah SPP</h3>
    <form action="proses_ubah_spp.php" method="post">
      <input type="hidden" name="id_spp" value="<?=$dt_siswa['id_spp']?>">
       Angkatan:
        <input type="text" name="angkatan" value=   "<?=$dt_siswa['angkatan']?>" class="form-control">
       Tahun :
        <input type="text" name="tahun" value=   "<?=$dt_siswa['tahun']?>" class="form-control">
        Nominal :
        <input type="text" name="nominal" value=   "<?=$dt_siswa['nominal']?>" class="form-control">
    <input type="submit" name="simpan" value="Ubah SPP" class="btn btn-primary">
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