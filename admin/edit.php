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
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
              <!-- User image -->
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
    <section class="content-header">
    <h1>
        Data Peserta
        <small>Workshop Android Pemula 2019</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Data Peserta</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <?php 
            include "../koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysql_query("SELECT * FROM data WHERE id='$id'")or die(mysql_error());
            $nomor = 1;
            while($data = mysql_fetch_array($query_mysql)){
            ?>
            <form action="update.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">                  
                  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="pembayaran">Pembayaran</label>             
                  <input type="number" class="form-control" name="pembayaran" value="<?php echo $data['pembayaran'] ?>">
                </div>
                <div class="form-group">
                  <label for="pmelalui">Pembayaran Melalui & Ket</label>             
                  <input type="text" class="form-control" name="pmelalui" value="<?php echo $data['pmelalui'] ?>">
                </div>
                <div class="form-group">
                  <label for="hp">No. HP</label>             
                  <input type="number" class="form-control" name="hp" value="<?php echo $data['hp'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="asal">Asal</label>             
                  <input type="text" class="form-control" name="asal" value="<?php echo $data['asal'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="prodi">Prodi</label>             
                  <input type="text" class="form-control" name="prodi" value="<?php echo $data['prodi'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="editoleh">Edit Oleh</label>             
                  <input type="text" class="form-control" name="editoleh" value="<?php echo $_SESSION['username'] ?>" readonly autofocus>
                </div>
              </div>
              <div class="box-footer">
                <button onClick="javascript:return confirm('Apakah anda ingin mengedit data ini?');" type="submit" class="btn btn-primary">Simpan</button>
                <a href="index2.php" class="btn btn-danger">Batal</a>                
              </div>
          </form>
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
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>
