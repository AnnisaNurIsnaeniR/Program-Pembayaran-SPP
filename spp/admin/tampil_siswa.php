<?php
 include "sidebar.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
</head>
<body>
<section id="main-content">
<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
		<h3>Tampil Siswa<h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>NAMA SISWA</th>
                    <th>ALAMAT</th>
                    <th>USERNAME</th><th>KELAS</th><th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas = siswa.id_kelas");
                $no=0;
                while($data_siswa=mysqli_fetch_array($qry_siswa)){
                    $no++;?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$data_siswa['nama_siswa']?></td>
                    <td><?=$data_siswa['alamat']?></td>
                    <td><?=$data_siswa['username']?></td>
                    <td><?=$data_siswa['nama_kelas']?></td>
                    <td><a href="ubah_siswa.php?nisn=<?=$data_siswa['id_kelas']?>"
                    class="btn btn-success">Ubah</a> | 
                    <a href="hapus_data_siswa.php?nisn=<?=$data_siswa['id_kelas']?>"
                    onclick="return confirm('Apakah Anda yakin menghapus data ini?')" 
                    class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
										<div class="toolbar">
											
											
										</div>
								</header>
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>
    
</section>
<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
</body>
</html>