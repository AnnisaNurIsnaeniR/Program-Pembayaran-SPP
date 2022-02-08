<!DOCTYPE html>
<html lang="en">
    <?php
    include "koneksi.php";
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
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
                <h1 class="h3 mb-2 text-gray-800">Tabel Data Transaksi</h1>
            </div>
            <?php
            $sql = 'SELECT * FROM siswa inner join kelas on kelas.id_kelas = siswa.id_kelas ;';
            $result = mysqli_query($conn, $sql);
            ?>
            <br>
                <div class="table-responsive">
                <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td>No. </td>
                                <td>Nama Petugas</td>
                                <td>Nama Siswa</td>
                                <td>Tanggal Membayar</td>
                                <td>SPP Bulan</td>
                                <td>SPP Tahun</td>
                                <td>Nominal Dibayarkan</td>
                                <td>Jumlah Bayar</td>
                                <td>Status</td>
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
                                <td><?= $no ?></td>
                                <td><?= $r['nama_petugas']; ?></td>
                                <td><?= $r['nama_siswa']; ?></td>
                                <td><?= $r['tgl_bayar']; ?></td>
                                <td><?= $r['bulan_spp']; ?></td>
                                <td><?= $r['tahun_spp'];?></td>
                                <td><?= " Rp. " . $r['nominal']; ?></td>
                                <td><?= $r['jumlah_bayar'];?></td>
                                <td><?= $r['status'];?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
                <a href="cetak.php" class="btn btn-warning">Cetak 🖨 </a>
            </div>
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
</body>
</html>
