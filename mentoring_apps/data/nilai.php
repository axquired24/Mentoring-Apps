<h2 class="sub-header">Arsip Nilai <small>Peserta Kelas E 2013>></small> <a title="Simpan data hari ini" href="#" class="btn btn-primary">Simpan</a></h2>
<div class="table-responsive">
<table class="table table-bordered table-striped">
  <thead>
	<tr>
	  <th>#</th>
	  <th>NIM</th>
	  <th>Nama</th>
	  <?php for($i=1; $i<=4; $i++){ ?>
	  <th>Tugas <?php echo $i; ?></th>
	  <?php }; ?>
	  <th>Akhir</th>
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
		  <?php for($i=1; $i<=4; $i++){ ?>
		  <td>
			<input type="text" name="absensi" value="78" size=2 /> 
		  </td>
		  <?php }; ?>
		  <td>
			<span class="btn btn-xs btn-success"> Baik</span> 
		  </td>		  
		</tr>
	<?php 
		$num +=1;
		} 
	?>
  </tbody>
</table>
</div>
<a title="Simpan data hari ini" href="#" class="btn btn-primary">Simpan</a>
