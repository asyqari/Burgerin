<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OWNER - BURGERIN</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/logo-burger.png" type="">
    <link href="<?= base_url('assets/'); ?>css/adm_usr.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>js/adm_usr.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body>
    <header>
        <div class="logo">Data Penjualan</div>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('C_auth/owner_home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('C_auth/owner_penjualan'); ?>">Data Penjualan</a></li>
                <li><a href="<?php echo base_url('C_auth/logout_owner'); ?>">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Penjualan</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jumlah Penjualan</th>
                            <th>Total Penjualan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $nomor = 1; ?>
                            <?php foreach ($t_riwayat as $dtm) : ?>
                                <td><?= $nomor ?></td>
                                <td><?= $dtm->tgl_transaksi; ?></td>
                                <td><?= $dtm->total_riwayat; ?></td>

                                <td><?= "Rp." . $dtm->total_harga; ?></td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php endforeach; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





</body>

</html>