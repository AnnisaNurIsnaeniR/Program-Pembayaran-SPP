<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: ../index.php');
}
?>
<?php
include "sidebar.php";?>
<!DOCTYPE html>
<html>
    <head>
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
                                <h2>Haii. Selamat datang di SPP online</h2>
                                 <div class="toolbar">
                                            </div>
                                    </header>
                                    <div class="agileits-box-body clearfix">
                                        <div id="hero-area"></div>
                                    </div>
                                </div>
                            </div>
                </body>
                </html>
                