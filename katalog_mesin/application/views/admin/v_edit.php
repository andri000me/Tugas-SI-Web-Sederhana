

<!-- views v_edit digunakan sebagai from edit data -->


<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	
		<!-- from ini aksinya di arahkan pada fungsi update yang terdapat pada pada controller mesin.php dan pengirimanan datannya menggunakan metode post (data tidak disimpan diurl)-->
	<div class="container" style="margin-top: 80px; margin-bottom:100px;">
	 	<center>
		<h3>Edit data</h3>
	</center>
	<br>
        <div class="col-md-12">
	<!-- action pada from ini diarahkan kefungsi tambah_aksi yang ada pada controller mesin.php, dan pengirimana nilai atau datanya menggunakan method post (data tidak ditampilkan diurl) -->
  <?php foreach($katalog_mesin as $m){ ?>
	<form action="<?php echo base_url().'admin/mesin/update';?>" method="post">
			 <div class="form-group">
                <label for="text">Nama Mesin</label>
                 <input type="hidden" name="id_mesin" value="<?php echo $m->id_mesin ?>" class="form-control" placeholder="Masukkan Nama Mesin">
                <input type="text" name="nm_mesin" value="<?php echo $m->nm_mesin ?>" class="form-control" placeholder="Masukkan Nama Mesin">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Mesin Baik</label>
                <input type="text" name="jm_baik" value="<?php echo $m->jm_baik ?>" class="form-control" placeholder="Masukkan Jumlah Mesin">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Mesin Rusak</label>
                <input type="text" name="jm_rusak"  value="<?php echo $m->jm_rusak ?>" class="form-control" placeholder="Masukkan Jumlah Mesin">
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
	</form>	
  <?php } ?>
	  </div>
    </div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>