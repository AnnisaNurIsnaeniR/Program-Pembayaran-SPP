<?php
 include "sidebar.php";
 ?>
<!DOCTYPE html>
<head>
<title>spp</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.
css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
</head>
<body>
<section id="main-content">
<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									  <h3>Tampil Kelas<h3>
        <table class="table table-striped text-white" style="background-color: #F5EEDC;">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">ANGKATAN</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn,"select * from kelas");
                $no=0;
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    $no++;?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$data_kelas['nama_kelas']?></td>
                    <td><?=$data_kelas['jurusan']?></td>
                    <td><?=$data_kelas['angkatan']?></td>
                    <td><a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>"
                    class="btn btn-success">Ubah</a> | 
                    <a href="hapus.php?id_kelas=<?=$data_kelas['id_kelas']?>"
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

   