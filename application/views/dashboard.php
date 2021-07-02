<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="<?= base_url('assets/logo.png'); ?>" width="100px" height="95px">
        <header style="padding-left: 400px; padding-right: 400px">
            <h1><center> BALAIKOTA AMONGTANI</center></h1>
            <h6><center> JL. Panglima Sudirman No. 507 Kota Batu </center></h6>
            <h6><center>Website : www.batukota.go.id E-Mail : admin@batukota.go.id </center></h6>
        </header>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/auth/logout'); ?>"><b> Logout </b></a>
                </li>
            </ul>
        </div>
    </nav>

    <!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <header style="padding-left: 400px; padding-right: 400px; padding-top: 30px">
            <h1><center> Daftar Peminjam Graha Pancasila</center></h1>
    </header>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>index.php/dashboard/tambah/" class="btn btn-md btn-success">Tambah Daftar Peminjam</a>
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>index.php/LaporanFpdf" class="btn btn-md btn-danger">Cetak</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kegiatan</th>
                    <th>Tanggal Acara</th>
                    <th>Waktu</th>
                    <th>Penanggung Jawab</th>
                    <th>Options</th> 
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($dashboard as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->Kegiatan ?></td>
                    <td><?php echo $hasil->Tanggal_Acara ?></td>
                    <td><?php echo $hasil->Waktu ?></td>
                    <td><?php echo $hasil->Penanggung_Jawab ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>index.php/dashboard/edit/<?php echo $hasil->id_kegiatan ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/dashboard/hapus/<?php echo $hasil->id_kegiatan ?>" class="btn btn-sm btn-danger">Hapus</a>
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
    
    