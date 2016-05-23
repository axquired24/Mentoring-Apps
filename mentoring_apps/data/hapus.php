<?php	
	
	//Data Masuk;
	$delID = $_GET[delID];
	
	$del = new db;
	$codeDel = "DELETE FROM peserta_mentoring WHERE idPeserta='$delID'";
	$cek=$del->BuatQuery($codeDel);
		
	if($cek){
		echo "<script>alert('Data Terhapus.')</script>";
		include("loading.php");
	}
?>
