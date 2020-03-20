

<!-- views v_input diguanakan sebagai from input, untuk memasukkan data uset yang baru. -->

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	
	 <div class="container" style="margin-top: 40px; margin-bottom:100px;  margin-right:200px;">
	 	<center>
		<h3>Tambah data baru</h3>
	</center>

        <div class="col-md-12">
	<!-- action pada from ini diarahkan kefungsi tambah_aksi yang ada pada controller mesin.php, dan pengirimana nilai atau datanya menggunakan method post (data tidak ditampilkan diurl) -->
	<form action="<?php echo base_url(). 'admin/mesin/tambah_aksi'; ?>" method="post">
			 <div class="form-group">
                <label for="text">Nama Mesin</label>

                <input type="text" name="nm_mesin" class="form-control" placeholder="Masukkan Nama Mesin">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Mesin Baik</label>
                <input type="text" name="jm_baik" class="form-control" placeholder="Masukkan Jumlah Mesin">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Mesin Rusak</label>
                <input type="text" name="jm_rusak" class="form-control" placeholder="Masukkan Jumlah Mesin">
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
	</form>	
	  </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>