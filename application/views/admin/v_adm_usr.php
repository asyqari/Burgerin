<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN - BURGERIN</title>
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
</head>

<body>
    <header>
        <div class="logo">CRUD USER</div>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('C_auth/admin_home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('C_auth/crud_usr'); ?>">CRUD User</a></li>
                <li><a href="<?php echo base_url('C_auth/crud_menu'); ?>">CRUD Menu</a></li>
                <li><a href="<?php echo base_url('C_auth/logout_admin'); ?>">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>User</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal"><i
                                    class="material-icons" data-toggle="tooltip" title="Tambah User">&#xE147;</i>
                                <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $nomor = 1; ?>
                            <?php foreach ($data as $dtm) : ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $dtm->nama_user; ?></td>
                            <td><?= $dtm->email_user; ?></td>
                            <td><?= md5($dtm->password_user); ?></td>
                            <td>
                                <a href="#editEmployeeModal<?= $dtm->id_user; ?>" class="edit" data-toggle="modal"><i
                                        class="material-icons" data-toggle="tooltip" title="Edit User">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal<?= $dtm->id_user; ?>" class="delete"
                                    data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                        title="Hapus User">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
                <!-- <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="<?= base_url('C_auth/insert_user_action') ?>">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email_user" class="form-control" placeholder="Masukan Email"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <textarea name="password_user" class="form-control" placeholder="Masukan Password"
                                required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <?php foreach ($data as $dtm) : ?>
    <div id="editEmployeeModal<?= $dtm->id_user; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="<?= base_url('C_auth/edit_user_action') ?>">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="hidden" name="id_user" value="<?= $dtm->id_user; ?>">
                            <input type="text" name="nama_user" class="form-control" value="<?= $dtm->nama_user; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email_user" class="form-control" value="<?= $dtm->email_user; ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password_user" class="form-control"
                                value="<?= $dtm->password_user; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" name="cancel" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" name="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- Delete Modal HTML -->
    <?php foreach ($data as $dtm) : ?>
    <div id="deleteEmployeeModal<?= $dtm->id_user; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan dihapus?</p>
                    <p class="text-warning"><small>Setelah diklik, anda tidak dapat mengembalikan datanya
                            kembali!</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" name="cancel" data-dismiss="modal" value="Cancel">
                    <a href="<?= base_url('C_auth/delete_user_action/').$dtm->id_user; ?>"><input type="submit"
                            name="submit" class="btn btn-danger" value="Delete"></a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</body>

</html>