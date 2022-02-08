<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<?php
include 'koneksi.php';
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
            <form action="proses_tambah_transaksi.php" method="POST">
                <h3>Transaksi</h3>
                <div class="mb-3">
                    <span> <h5>Nama Petugas/Admin : </h5> </span>
                    <select class="form-select form-select-sm" name="nama_petugas" aria-label=".form-select-sm example">
                        <option selected>--Pilih Petugas--</option> 
                        <?php
                        include "koneksi.php";  
                        // Kita akan ambil Nama Petugas yang ada pada tabel Petugas
                        $data_petugas = mysqli_query($conn, "SELECT * FROM petugas");
                        while($r = mysqli_fetch_assoc($data_petugas)){ ?>
                        <option value="<?= $r['id_petugas']; ?>"><?= $r['nama_petugas']; ?></option>
                        <?php
                        } 
                        ?>
                    </select>
                </td>
            </select>
        </div>
        <br>
        <div class="mb-3">
            <span> NAMA SISWA : </span>
            <select type="text" name="nama_siswa" class="form-control">
                <?php
                // Sekarang kita ambil NISN Siswa 
                $data_siswa = mysqli_query($conn, "SELECT * FROM siswa");
                while($r = mysqli_fetch_assoc($data_siswa)){ ?>
                <option value="<?= $r['nisn']; ?>"><?= $r['nama_siswa']; ?></option>
                <?php
                }
                ?>         
            </select>
        </td>
    </div>
    <br> 
    <div class="mb-3">
        <span> Tanggal Membayar :  </span>
        <input type="date" name="tgl_bayar"  placeholder="Tanggal / Bulan / Tahun." class="form-control">      
    </div>
    <br>
    <div class="mb-3">
        <span> SPP Bulan :   </span>
        <select type="text" name="bulan_spp" class="form-control">
            <option selected>--Pilih Bulan--</option>
            <option>JANUARI</option>  
            <option>FEBRUARI</option> 
            <option>MARET</option> 
            <option>APRIL</option> 
            <option>MEI</option> 
            <option>JUNI</option>
            <option>JULI</option>
            <option>AGUSTUS</option>
            <option>SEPTEMBER</option>
            <option>OKTOBER</option>
            <option>NOVEMBER</option>
            <option>DESEMBER</option>
        </select>  
    </div>
    <br>
    <div class="mb-3">
        <span> SPP Tahun :   </span>
        <input type="number" name="tahun_spp" class="form-control" placeholder="Ketik Tahun ">   
    </div>
    <br>
    <div class="mb-3">
        <span> Angkatan / Nominal yang harus dibayar : </span>
        <select class="form-select form-select-sm" name="spp" aria-label=".form-select-sm example"> 
            <?php
            $data_spp = mysqli_query($conn, "SELECT * FROM spp");
            while($r = mysqli_fetch_assoc($data_spp)){ ?>
            <option value="<?= $r['id_spp']; ?>">
            <?=  $r['angkatan'] ." | ".$r['nominal']; ?></option>
            <?php 
            } 
            ?>        
        </select> 
    </div>
    <br>
    <div class="mb-3">
        <span> JUMLAH BAYAR : </span>
        <td><input type="number" name="jumlah_bayar" placeholder="1000000" class="form-control" >
    </div>
    <br>
    <button type="submit" style="margin-left: 30px;" class="btn btn-primary" name="simpan">Create </button>
</form>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body> 
</html>

 