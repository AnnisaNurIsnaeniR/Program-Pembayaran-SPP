<!DOCTYPE html>
<html lang="en">
  <?php
  include "sidebar.php";
  ?>
  <head>
    <title>SPP</title>
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
  <section id="main-content">
  <div class="panel-body">
	<div class="col-md-12 w3ls-graph">
		<div class="agileinfo-grap">
	        <div class="agileits-box">
				<header class="agileits-box-header clearfix">

      <?php 
      include "koneksi.php";
      $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
      $dt_petugas=mysqli_fetch_array($qry_get_petugas);
      ?>
      <h3>Ubah Data Petugas</h3>
      <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id_petugas" value= "<?=$dt_petugas['id_petugas']?>">
        Nama Petugas:
        <input type="text" name="nama_petugas" value=   "<?=$dt_petugas['nama_petugas']?>" class="form-control">
        Username :
        <input type="text" name="username" value=   "<?=$dt_petugas['username']?>" class="form-control">
        Level : 
        <?php 
        $arr_level=array('Petugas'=>'Petugas','Admin'=>'Admin','Siswa'=>'Siswa');
        ?>
        <select name="level" class="form-control">
          <option></option>
          <?php foreach ($arr_level as $key_level => $val_level):
          if($key_level==$dt_petugas['level']){
            $selek="selected";
          } else {
            $selek="";
          }
          ?>
          <option value="<?=$key_level?>" <?=$selek?>><?=$val_level?></option>
          <?php endforeach ?>
        </select>
        <br>
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
      </form>
    </div>
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
  </html>