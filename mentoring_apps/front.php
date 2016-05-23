<?php 
	include("conn/db.php");
	if(!isset($_SESSION)){
		session_start();
	}
		
 ?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IMM Adam Malik Data Center">
    <meta name="author" content="IMM Adam Malik">

    <title>Adam Malik Data Center</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bs3_dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		if(empty($_SESSION[username]) && empty($_SESSION[passw])){
			echo "<meta http-equiv='refresh' content='0;url=../login.php' />";
		}
		else{	
	?>
  
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-certificate"></i> Mentoring <?php echo date('Y'); ?> | Kelas E</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Halaman Awal <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="?ur=tampil">Overview</a></li>
					<li class="divider"></li>
					<li><a href="?ur=absensi">Absensi Peserta</a></li>
					<li><a href="?ur=nilai">Nilai peserta</a></li>
					<li class="divider"></li>
					<li><a href="?ur=tambah">Tambah Data</a></li>
					<li><a href="?ur=cetak">Cetak Sertifikat</a></li>
				</ul>
			</li>
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION[username]; ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="glyphicon glyphicon-pencil pull-right"></i> Edit Profile</a></li>
					<li><a href="#"><i class="glyphicon glyphicon-cog pull-right"></i> Pengaturan</a></li>
					<li class="divider"></li>
					<li><a href="../logout.php"><i class="glyphicon glyphicon-off pull-right"></i> Logout</a></li>
				</ul>
			</li>
            <li><a href="#">Bantuan</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Cari nama / nim...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="?ur=tampil"><i class="pull-right glyphicon glyphicon-th"></i> Overview</a></li>
			<li><a href="?ur=absensi"><i class="pull-right glyphicon glyphicon-calendar"></i> Absensi Peserta</a></li>
			<li><a href="?ur=nilai"><i class="pull-right glyphicon glyphicon-stats"></i> Nilai peserta</a></li>
            <li><a href="?ur=tambah"><i class="pull-right glyphicon glyphicon-plus-sign"></i> <strong>Tambah Peserta</strong></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#"><strong>Cari</strong></a></li>
            <li><a href="#">Angkatan 2013</a></li>
            <li><a href="#">Angkatan 2014</a></li>
            <li><a href="#">Angkatan 2012</a></li>
            <li><a href="#">List Angkatan ></a></li>
          </ul>
		  
		  <!-- Pagination -->
		  <ul class="pagination pagination-sm">
		  	<li class="active"><a href="#">1</a></li>
			<?php for($li=2; $li<=9; $li++){ ?>
		  	<li><a href="#"><?php echo $li; ?></a></li>
			<?php }; ?>
		  </ul>		  
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<?php
				$url = $_GET[ur];
				if(!empty($url)){
					include("data/".$url.".php");
				}else{
					echo("NOT FOUND");
				}
			?>
		</div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../../bs3_dist/js/jquery.js"></script>
	<script src="../../bs3_dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("a").tooltip({placement:"top"});
		$(".popRight").popover();
	</script>	
	
  <?php } // TUTUP ELSE paling atas ?>	
  </body>

</html>
