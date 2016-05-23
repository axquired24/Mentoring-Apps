<h2 class="sub-header">Data Peserta <small>or</small> <a href="?ur=tambah" class="btn btn-primary">Tambah Data</a></h2>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
	<tr>
	  <th>#</th>
	  <th>NIM</th>
	  <th>Nama</th>
	  <th>Angkatan</th>
	  <th>More</th>
	</tr>
  </thead>
  <tbody>
	<?php
		$dataPeserta = new db;
		$num=1;
		$dataPeserta->BuatQuery("SELECT * FROM peserta_mentoring");
		while($tampil=$dataPeserta->BuatArray()){				
	?>			  
	<tr>
		  <td><?php echo $num;?></td>
		  <td><?php echo $tampil[nim]; ?></td>
		  <td><?php echo $tampil[nama]; ?></td>
		  <td><?php echo $tampil[angkatan]; ?></td>
		  <td>
			<a href="?ur=detail&detailID=<?php echo $tampil[idPeserta]; ?>" class="more" title="Detail peserta"><span class="glyphicon glyphicon-user"></span></a>
			<a href="#" class="more" title="Cetak Sertifikat"><span class="glyphicon glyphicon-print"></span></a>
			<a href="#" class="more" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>
			<a href="?ur=hapus&delID=<?php echo $tampil[idPeserta]; ?>" class="more" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
		  </td>
		</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>
