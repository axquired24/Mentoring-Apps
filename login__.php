<div style="display:block">
<?php
	// Login Proses | Login__.php
		include "mentoring_apps/conn/db.php";
		if(isset($_POST[usern])){
			$post = array($_POST[usern],$_POST[passw]);
			
			// Buat query, cari jumlah row yang terpilih, buat array dari row yang terpilih
			$login = new db;
			$login->BuatQuery("SELECT * FROM user WHERE username='$post[0]' && passw='$post[1]'");
			$jml=$login->MencariJumlah();
			$array=$login->BuatArray();
			
			//Menentukan True or False
			if($jml){
				session_start();
				$_SESSION[username] = $post[0];
				$_SESSION[passw] = $post[1];
				
				echo "<meta http-equiv='refresh' content='0;url=mentoring_apps?ur=tampil' />";
			}
			else
			{
				$gagal = 1;
				echo "Gagal Login";
			}
		}
	
	?>
</div>