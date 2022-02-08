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
				<h3>Tambah SPP</h3>
            <form action="proses_tambah_spp.php" method="post">
               Angkatan:
                <input type="text" name="angkatan" value="" class="form-control">
                Tahun:
                <input type="text" name="tahun" value="" class="form-control">
               Nominal:
                <input type="text" name="nominal" value="" class="form-control">
                <input type="submit" name="simpan" value="Tambah" class="btn btn-outline-danger">
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
<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
</body>
</html>

    