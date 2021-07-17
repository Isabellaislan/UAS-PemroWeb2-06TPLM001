<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php";
if ($_SESSION['user']) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Penerimaan Bantuan Sosial Covid19</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">Kelompok 3</div>
            </div>
                  <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"> <?php
                $tgl=date('l, d-m-Y');
                echo $tgl;
                date_default_timezone_set('Asia/Jakarta');
                $jam=date("H:i:s");
                echo "| Pukul : <b>". $jam." "."</b>";
                $a = date ("H");
                if (($a>=6) && ($a<=11)){
                echo "<b>, Selamat Pagi !!</b>";
                }
                else if(($a>11) && ($a<15))
                {
                echo ", Selamat Siang !!";}
                else if (($a>=15) && ($a<=18)){
                echo ", Selamat Sore !!";}
                else { echo ", <b> Selamat Malam </b>";}
                ?> 
                 
                 &nbsp;</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/logo.png" class="user-image img-responsive" height="250" width="200" />
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-home fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=penerimaan"><i class="fa fa-user fa-3x"></i>Penerimaan Bantuan Sosial</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out fa-3x"></i> Logout</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman'])) 
                {
                    if ($_GET['halaman']=="penerimaan")
                    {
                        include 'penerimaan.php';
                    } elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }  elseif ($_GET['halaman']=="tambah")
                    {
                        include 'tambah.php';
                    }  elseif ($_GET['halaman']=="edit")
                    {
                        include 'edit.php';
                    }  elseif ($_GET['halaman']=="hapus")
                    {
                        include 'hapus.php';
                    }  
              
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
<?php
} else {
    header("location:login.php");
}
?>