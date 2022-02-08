<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: ../index.php');
}
?>
<?php
    include "koneksi.php";

?>
<!DOCTYPE html>
<html>
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
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
                    <h4>History Pembayaran</h4>
                
                <?php 
                if (isset($_SESSION ['nisn']) && $_SESSION ['nisn']!='') {
                  $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn='".$_SESSION ['nisn']."'");
                  $data = mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                
                ?>

                <h2>DATA SISWA</h2>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">NISN</th>
                      <th scope="col">NAMA SISWA</th>
                      <th scope="col">ID KELAS</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama_siswa']; ?></td>
                    <td><?php echo $data['id_kelas']; ?></td>
                  </tbody>
                </table>

                <h2>DATA SPP SISWA</h2>
              <table class="table table-striped">
                <thead> 
                  <tr>
               
               <th scope="col"> NISN</th>
                <th scope="col">Tanggal Bayar</th>
                <th scope="col">Bulan Bayar</th>
                <th scope="col">Tahun Bayar</th>             
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>

                  </tr>
                </thead>

                <tbody>
                  <?php 
    
              
                  $query = mysqli_query($conn,"SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_spp ASC");
                  
                  

                  while ($data=mysqli_fetch_array($query)) {
                    
                
                    echo "<tr>
                 
                          <td>  $data[nisn]</td>
                          <td>  $data[tgl_bayar]</td>
                          <td>  $data[bulan_spp]</td>
                          <td>  $data[tahun_spp]</td>                        
                          <td>  $data[jumlah_bayar]</td>
                          <td>  $data[status]</td>


                        </tr>";
                        
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
    <?php 
    }
    
      
  
    ?>      
        
        </div>
  </body>
</html>