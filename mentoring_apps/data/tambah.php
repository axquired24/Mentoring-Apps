<h2 class="sub-header">Tambah Peserta</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=tambah__">
  <?php
	$label = array("nim","nama","kelas","angkatan");
	$jLabel = count($label);
	for($nLabel=0; $nLabel<$jLabel; $nLabel++){
  ?>
  <div class="form-group">
    <label for="<?php echo $label[$nLabel]; ?>" class="col-sm-2 control-label"><?php echo $label[$nLabel]; ?> :</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" name="<?php echo $label[$nLabel]; ?>" id="<?php echo $label[$nLabel]; ?>" placeholder="<?php echo $label[$nLabel]; ?>...">
    </div>
  </div>
  <?php
	} // END For {label}
  ?>  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Kirim</button>
	  <a href="?ur=tampil" class="btn btn-default">Batal</a>
    </div>
  </div>

</form>