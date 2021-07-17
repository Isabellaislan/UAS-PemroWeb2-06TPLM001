<?php  

$ambil = $koneksi->query("SELECT * FROM tb_penerimaan");
while ($pecah=$ambil->fetch_assoc()) {
    $jml_penerimaan = $ambil->num_rows;
}

$ambil1 = $koneksi->query("SELECT * FROM tb_kelompok");
while($pecah1 = $ambil1->fetch_assoc()){
    $jml_kelompok = $ambil1->num_rows;
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anduriang Grosir</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="admin/bs-binary-admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="admin/bs-binary-admin/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="admin/bs-binary-admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="admin/bs-binary-admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="admin/bs-binary-admin/assets/css/bootstrap.css">
</head>
<body>
    <marquee><b>Selamat Datang Di Halaman Penerimaan Bantuan Sosial Covid19</b></marquee>
    <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Selamat Datang Admin , Semoga Harimu Menyenangkan </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $jml_penerimaan; ?></p>
                    <p class="text-muted">Data Penerimaan Bantuan Sosial</p>
                </div>
             </div>
             </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $jml_kelompok; ?></p>
                    <p class="text-muted">Data Kelompok</p>
                </div>
             </div>
             </div>
             </div>

             <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Nama Kelompok
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM tb_kelompok ORDER BY nama ASC");

                                while ($data = $sql->fetch_assoc()) {

                                ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data ["nim"]; ?></td>
                                             <td><?php echo $data ["nama"]; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
         </div>
	
</body>
