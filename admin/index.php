<?php 
              session_start();
              if($_SESSION['status']!="login"){
                  header("location:../index.html");
              }
            ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DIGISTLAB 2019</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>L</b>AB</span>
      <span class="logo-lg"><b>DIGISTLAB</b>2019</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">PROFILE</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <p>
                  Profile
                  <small>DIGISTLAB 2019</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../umbrella.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="logout.php"><i class="fa fa-circle btn-danger"></i> Sign Out</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
        <a href="index2.php">
            <i class="fa fa-th"></i> <span>Data Pendaftar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">data</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
          <div class="box">
            <div style="margin-left:15px;" class="box-header">
              <h3 class="box-title">Timer Coundown Acara</h3><br><br>
              <?php 
                  include "../koneksi.php";
                  $query_mysql = mysql_query("SELECT * FROM waktu")or die(mysql_error());
                  while($data = mysql_fetch_array($query_mysql)){
                  ?>
                  <script>
                        var countDownDate1 = new Date("<?php echo $data['waktupre'];?>").getTime();

                        var x1 = setInterval(function() {

                        var now1 = new Date().getTime();
                            
                        var distance1 = countDownDate1 - now1;
                        
                        var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
                        var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

                        document.getElementById("timer1").innerHTML = days1 + " Hari " + hours1 + " Jam <br>"
                        + minutes1 + " Menit " + seconds1 + " detik ";
                            
                        if (distance1 < 0) {
                            clearInterval(x1);
                            document.getElementById("timer1").style.display = "none";
                        }
                        }, 1000);
                    </script>
                    <script>
                        var countDownDate2 = new Date("<?php echo $data['wakture'];?>").getTime();

                        var x2 = setInterval(function() {

                        var now2 = new Date().getTime();
                            
                        var distance2 = countDownDate2 - now2;
                        
                        var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
                        var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

                        document.getElementById("timer2").innerHTML = days2 + " Hari " + hours2 + " Jam <br>"
                        + minutes2 + " Menit " + seconds2 + " detik ";
                            
                        if (distance2 < 0) {
                            clearInterval(x2);
                            document.getElementById("timer2").style.display = "none";
                        }
                        }, 1000);
                    </script>
                    <script>
                        var countDownDate3 = new Date("<?php echo $data['waktuevent'];?>").getTime();

                        var x3 = setInterval(function() {

                        var now3 = new Date().getTime();
                            
                        var distance3 = countDownDate3 - now3;
                        
                        var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
                        var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);

                        document.getElementById("timer3").innerHTML = days3 + " Hari " + hours3 + " Jam <br>"
                        + minutes3 + " Menit " + seconds3 + " detik ";
                            
                        if (distance3 < 0) {
                            clearInterval(x3);
                            document.getElementById("timer3").style.display = "none";
                        }
                        }, 1000);
                    </script>
                    <script>
                        var countDownDate4 = new Date("<?php echo $data['waktuselesai'];?>").getTime();

                        var x4 = setInterval(function() {

                        var now4 = new Date().getTime();
                            
                        var distance4 = countDownDate4 - now4;
                        
                        var days4 = Math.floor(distance4 / (1000 * 60 * 60 * 24));
                        var hours4 = Math.floor((distance4 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes4 = Math.floor((distance4 % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds4 = Math.floor((distance4 % (1000 * 60)) / 1000);

                        document.getElementById("timer4").innerHTML = days4 + " Hari " + hours4 + " Jam <br>"
                        + minutes4 + " Menit " + seconds4 + " detik ";
                            
                        if (distance4 < 0) {
                            clearInterval(x4);
                            document.getElementById("timer4").style.display = "none";
                        }
                        }, 1000);
                    </script>
                    <h1 style="color:red;">Pre-register</h1>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><p style="font-size:30px;" id="timer1"></p></div>
                    <h1 style="color:red;">Register</h1>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><p style="font-size:30px;" id="timer2"></p></div>
                    <h1 style="color:red;">Event dimulai</h1>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><p style="font-size:30px;" id="timer3"></p></div>
                    <h1 style="color:red;">Event Berakhir</h1>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><p style="font-size:30px;" id="timer4"></p></div>
                  <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>
