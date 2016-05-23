<?php	
	
	//Data Masuk;
	$post = array($_POST[nama],$_POST[nim],$_POST[kelas],$angkatan = $_POST[angkatan]);
	
	$tambah = new db;
	$codeTambah = "INSERT INTO peserta_mentoring VALUES('','$post[1]','$post[0]','$post[2]','$post[3]')";
	$cek=$tambah->BuatQuery($codeTambah);
		
	if($cek){
		include("loading.php");
	}
?>
