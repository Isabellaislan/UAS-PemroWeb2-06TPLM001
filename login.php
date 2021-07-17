<?php
ob_start();
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include "config.php";

if ($_SESSION['user']) {
    header("location:index.php");
} else {

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Aplikasi Penerimaan Bantuan Sosial Covid19</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-image:url('assets/img/bg.png')">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Aplikasi Penerimaan Bantuan Sosial Covid19</h2>
              <br /> <br>
            </div>
        </div>
         <div class="row ">
   
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Halaman Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="user"  />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="pass" />
                                        </div>
                                     
                                     <button class="btn btn-primary" name="login">Login</button>
                                    <hr />
                                    </form>
                                    <?php
                                    if (isset($_POST['login'])) 
                                    {
                                      $username = $_POST['user'];
                                      $pass = $_POST['pass'];

                                        $sql = $koneksi->query("SELECT * FROM tb_user WHERE username='$username' AND password='$pass'");
        $ketemu = $sql->num_rows;

        $data = $sql->fetch_assoc();

                                        if ($ketemu>=1) 
                                        {
                                          session_start();
                                          $_SESSION['user'] = $data['id'];
                                          echo "<div class='alert alert-info'>Login Berhasil<?div>";
                                          header("location:index.php");
                                        }
                                        else
                                        {
                                              ?>
            <script type="text/javascript">
                alert("Login Gagal! \nUsername dan Password SALAH!");
            </script>
<?php
                                        }
                                    } 
                                    ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
<?php
}
?>