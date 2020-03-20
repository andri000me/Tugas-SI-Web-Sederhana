

<!-- views v_edit digunakan sebagai from edit data -->


<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	
		<!-- from ini aksinya di arahkan pada fungsi update yang terdapat pada pada controller user.php dan pengirimanan datannya menggunakan metode post (data tidak disimpan diurl)-->
	<div class="container" style="margin-top: 80px; margin-bottom:100px;">
	 	<center>
		<h3>Edit data</h3>
	</center>
	<br>
        <div class="col-md-12">
	<!-- action pada from ini diarahkan kefungsi tambah_aksi yang ada pada controller user.php, dan pengirimana nilai atau datanya menggunakan method post (data tidak ditampilkan diurl) -->
  <?php foreach($admin as $a){ ?>
	<form action="<?php echo base_url().'admin/master_admin/user/update';?>" method="post">
			 <div class="form-group">
                <label for="text">Nama</label>
                 <input type="hidden" name="id" value="<?php echo $a->id ?>" class="form-control" placeholder="Masukkan Nama">
                <input type="text" name="nama" value="<?php echo $a->nama ?>" class="form-control" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label for="text">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $a->alamat ?>" class="form-control" placeholder="Masukkan Alamat">
              </div>

              <div class="form-group">
                <label for="text">Telepon</label>
                <input type="text" name="tlp"  value="<?php echo $a->tlp ?>" class="form-control" placeholder="Masukkan Telepon">
              </div>

              <div class="form-group">
                <label for="text">Username</label>
                <input type="text" name="username" value="<?php echo $a->username ?>" class="form-control" placeholder="Masukkan Username">
              </div>

              <div class="form-group">
                <label for="text">Password</label>
                <input type="password" name="password"  value="<?php echo $a->password ?>" class="form-control" placeholder="Masukkan Password">
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