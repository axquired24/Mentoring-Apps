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
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"> <i class="glyphicon glyphicon-briefcase"></i> Data Center</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#awal" data-toggle="tab">Halaman Awal</a></li>
                <li><a href="#fitur" data-toggle="tab">Fitur</a></li>
                <li><a href="#kontak" data-toggle="tab">Kontak</a></li>
              </ul>
            </div>
          </div>
		  

          <div class="inner cover">		  		  		  
			  <div class="tab-content">
				<div class="tab-pane fade in active" id="awal">
					<h1 class="cover-heading"> <i class="glyphicon glyphicon-send"></i><br />IMM Adam Malik.</h1>
					<p class="lead">Data center IMM Adam malik. DIkembangkan untuk menunjang pengarsipan data serta meningkatkan kemudahan akses data di IMM Adam Malik.</p>
					<p class="lead">              
					  <a title="Klik untuk masuk" href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target=".loginDIV-sm">Masuk</a>
					</p>					
				</div>
				<div class="tab-pane fade" id="fitur">
					<h1 class="cover-heading"><i class="glyphicon glyphicon-tasks"></i><br />Fitur dalam aplikasi ini.</h1>
					<p class="lead">Aplikasi ini dibuat khusus untuk keperluan data center IMM komisariat adam malik. Untuk saat ini, baru dilengkapi dengan fitur manajemen mentoring FKI UMS.</p>
					<p class="lead">              
					  <a title="Klik untuk masuk fitur ini" href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target=".loginDIV-sm">Mentoring manajemen</a>
					</p>
				</div>
				<div class="tab-pane fade" id="kontak">
					<h1 class="cover-heading"><i class="glyphicon glyphicon-earphone"></i><br />Kontak kami.</h1>
					<p class="lead">
						<address>
						  <strong>IMM Komisariat Adam Malik</strong><br>
						  Lt.3 (<em>Sayap Kiri</em>) Gedung J (Fakultas Komunikasi dan Informatika)<br>
						  Universitas Muhammadiyah Surakarta<br>
						  <i class="glyphicon glyphicon-retweet"></i> <a href="http://twitter.comIMMADAMMALIKFKI" title="Follow ya ^^"> @IMMADAMMALIKFKI</a>
						</address>						
					</p>
					<p class="lead">              
					  <a title="Direct Messages to AxQuired24" href="http://twitter.com/axquired24" class="btn btn-sm btn-default">Direct Messages</a>
					</p>				
				</div>
			  </div>		  		  
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Version 1.0 <br />&copy; 2014 <a href="#" data-toggle="tooltip" title="IMM Komisariat Adam Malik | FKI UMS">IMM Adam Malik</a>. Apps & Design by <a class="text-muted" data-toggle="tooltip" title="Saran dan kritik , inbox ya ^^" href="http://facebook.com/axquiredsaint24">AxQuired24</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

	<!-- Isi Modal -->
	<!-- Login -->
	<div class="modal fade loginDIV-sm" tab-index="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="True">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<form method="post" class="form-signin" role="form" action="login__.php">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" aria-hidden="True">&times</button>
						<h4 id="myModalLabel" class="modal-title">Login Required</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input name="usern" type="text" class="form-control" placeholder="Nama pengguna" required autofocus>
						</div>
						<input name="passw" type="password" class="form-control" placeholder="Kata sandi" required>						
					</div>
					<div class="modal-footer">
						<input name="submit" type="submit" class="btn btn-primary" value="Login">
					</div>
				</form> <!-- Form Signin -->
			</div> <!-- Modal content -->
		</div> <!-- Modal-dialog -->
	</div> <!-- modal fade -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../bs3_dist/js/jquery.js"></script>
	<script src="../bs3_dist/js/bootstrap.min.js"></script>
    <script src="../bs3_dist/js/docs.min.js"></script>
	<script type="text/javascript">
		$("a").tooltip({placement:"top"});
		$("a.tipBottom").tooltip({placement:"bottom"});		
		//$(".modal").modal({"keyboard":"false"});
	</script>
	<?php
		$gagal =0;
		include("login__.php");
		if($gagal == 1){				
				echo("				
					<script type='text/javascript'>
						alert('Username/password Salah. Coba lagi.');
						$('.modal').modal('show');
					</script>										
				");
		}else{
		}
		


	?>	
  </body>

</html>
