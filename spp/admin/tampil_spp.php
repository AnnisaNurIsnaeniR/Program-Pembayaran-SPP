<?php
include "sidebar.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
    <section id="main-content">
    <div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
								<h3>Tampil SPP<h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>ANGKATAN</th><th>TAHUN</th><th>NOMINAL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_spp=mysqli_query($conn,"SELECT * FROM `spp` ORDER BY `spp`.`id_spp` ASC");
                $no=0;
                while($data_spp=mysqli_fetch_array($qry_spp)){
                    $no++;?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$data_spp['angkatan']?></td>
                    <td><?=$data_spp['tahun']?></td>
                    <td><?=$data_spp['nominal']?></td>
                    <td><a href="ubah_spp.php?id_spp=<?=$data_spp['id_spp']?>"
                    class="btn btn-success">Ubah</a> | 
                    <a href="hapus_data_spp.php?id_spp=<?=$data_spp['id_spp']?>"
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
    
            <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
            </body>
            </html>
            