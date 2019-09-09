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
            <div class="box-header">
              <h3 class="box-title">Data Peserta</h3><br><br>
              <a type="button" href="input.php"><b>+ Tambah Data Baru<b></a><br>
              <a type="button" href="index2.php"><b>Tampilkan Semua<b></a><br>
              <a type="button" href="bayar.php"><b>Urutkan yang sudah bayar<b></a>
              <?php 
            if(isset($_GET['pesan'])){
              $pesan = $_GET['pesan'];
              if($pesan == "input"){
                echo "Data berhasil di input.";
              }else if($pesan == "update"){
                echo "Data berhasil di update.";
              }else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
              }
            }
            ?>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pembayaran</th>
                    <th>Pembayaran melalui</th>
                    <th>No. HP</th>	
                    <th>Asal</th>		
                    <th>Prodi</th>
                    <th id="ayam1">Aksi</th>
                    <th>Trkh Diedit Oleh</th>		
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  include "../koneksi.php";
                  $query_mysql = mysql_query("SELECT * FROM data")or die(mysql_error());
                  $nomor = 1;
                  while($data = mysql_fetch_array($query_mysql)){
                  ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['pembayaran']; ?></td>
                    <td><?php echo $data['pmelalui']; ?></td>
                    <td><?php echo $data['hp']; ?></td>
                    <td><?php echo $data['asal']; ?></td>
                    <td><?php echo $data['prodi']; ?></td>
                    <td id="ayam2">
                      <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                      <a class="hapus" onClick="javascript:return confirm('Apakah anda ingin menghapus data ini?');" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
                    </td>
                    <td><?php echo $data['editoleh']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
              </table>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
