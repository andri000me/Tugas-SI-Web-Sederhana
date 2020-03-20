<!-- merupakan view untuk tampilan data mesin -->
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
        <a href="<?php echo base_url() ?>admin/mesin/tambah/" class="btn btn-md btn-success">Tambah Mesin</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Mesin</th>
                    <th>Jumlah Mesin Baik</th>
                    <th>Jumlah Mesin Rusak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($katalog_mesin as $m){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $m->nm_mesin ?></td>
                    <td><?php echo $m->jm_baik ?></td>
                    <td><?php echo $m->jm_rusak ?></td>
                    <td>
                    <!-- link ini tertuju pada method/fungsi edit hapus di controller -->
                        <a href="<?php echo base_url() ?>admin/mesin/edit/<?php echo $m->id_mesin ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>admin/mesin/hapus/<?php echo $m->id_mesin ?>" class="btn btn-sm btn-danger">Hapus</a>
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