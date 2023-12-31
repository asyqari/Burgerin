<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/logo-burger.png" type="">

    <title>Login - Burgerin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/login_register2.min.css" rel="stylesheet">

    <style>
    .bg-primary {
        background-image: url("../assets/images/bg-lr.png");
        background-size: cover;
    }
    </style>
</head>

<body class="bg-primary">
    <title> Login - Burgerin</title>

    <body>

        <div class="container bodih">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-7">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login User</h1>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                        <form class="user" method="POST"
                                            action="<?= base_url('C_auth/login_user_action');?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    id="email_user" name="email_user" placeholder="Email....."
                                                    value="<?= set_value('email_user');?>">
                                                <?= form_error('email_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password_user" name="password_user" placeholder="Password.....">
                                                <?= form_error('password_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <button type="submit" name="login" class="btn btn-user btn-block"
                                                style="background-color : #FFBE33">
                                                Login
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('C_auth/register'); ?>">Create an
                                                Account!</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('C_auth/login_admin'); ?>">Login
                                                Admin</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('C_auth/login_owner'); ?>">Login
                                                Owner</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('C_auth/index'); ?>">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>