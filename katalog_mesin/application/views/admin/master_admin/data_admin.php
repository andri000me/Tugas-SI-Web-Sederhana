<!-- merupakan view untuk tampilan data admin -->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>admin/master_admin/user/tambah/" class="btn btn-md btn-success">Tambah Admin</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($admin as $a){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->nama ?></td>
                    <td><?php echo $a->alamat ?></td>
                    <td><?php echo $a->tlp ?></td>
                    <td><?php echo $a->username ?></td>
                    <td><?php echo $a->password ?></td>
                    <td>

                    <!-- link ini tertuju pada method/fungsi edit hapus di controller -->
                        <a href="<?php echo base_url() ?>admin/master_admin/user/edit/<?php echo $a->id?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>admin/master_admin/user/hapus/<?php echo $a->id ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>