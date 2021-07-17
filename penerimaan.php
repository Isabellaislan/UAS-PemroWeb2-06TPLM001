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
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Penerimaan Bantuan Sosial Covid19
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
										<tr>
											<th>No</th>
											<th>Alokasi</th>
                                            <th>Jumlah Transaksi</th>
                                            <th>Jumlah Dana</th>
											<th>Aksi</th>
										</tr>
									</thead>
                                    <tbody>
										
<?php
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM tb_penerimaan");

                                while ($data = $sql->fetch_assoc()) {

                                ?>
										<tr>
											<td><?php echo $no++; ?></td>
                                            <td><?php echo $data["alokasi"]; ?></td>
                                            <td><?php echo $data["jumlah_transaksi"]; ?></td>
											<td><?php echo 'Rp.' . '&nbsp;' . number_format($data["jumlah_dana"], 0, ",", ".") . ' ,-'; ?></td>
											<td>
												<a href="index.php?halaman=edit&id=<?php echo $data['id_penerimaan']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Ubah</a>
												<a href="index.php?halaman=hapus&id=<?php echo $data['id_penerimaan']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Hapus</a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <a href="index.php?halaman=tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>

            <a href="cetak.php" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Cetak Data</a>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


