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
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/logo-burger.png" type="">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="<?= base_url('assets/'); ?>css/adm_usr.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>js/adm_usr.js"></script>
</head>

<body>
    <header>
        <div class="logo">Home</div>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('C_auth/owner_home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('C_auth/owner_penjualan'); ?>">Data Penjualan</a></li>
                <li><a href="<?php echo base_url('C_auth/index'); ?>">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="header">
                <h2>Halaman Owner</h2>
                <p>Selamat Datang di Halaman Owner!</p>
            </div>
        </div>
    </div>

</body>

</html>