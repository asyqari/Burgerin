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
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/logo-burger.png" type="">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="<?= base_url('assets/'); ?>css/adm_usr.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>js/adm_usr.js"></script>
</head>

<body>
    <header>
        <div class="logo">CRUD MENU</div>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('C_auth/admin_home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('C_auth/crud_usr'); ?>">CRUD User</a></li>
                <li><a href="<?php echo base_url('C_auth/crud_menu'); ?>">CRUD Menu</a></li>
                <li><a href="<?php echo base_url('C_auth/index'); ?>">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Menu</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal"><i
                                    class="material-icons" data-toggle="tooltip" title="Tambah Menu">&#xE147;</i>
                                <span>Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Menu</th>
                            <th>Harga Menu</th>
                            <th>Deskripsi Menu</th>
                            <th>Foto Menu</th>
                            <th>Kategori Menu</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $nomor = 1; ?>
                            <?php foreach ($data as $dtm) : ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $dtm->nama_menu; ?></td>
                            <td><?= $dtm->harga_menu; ?></td>
                            <td><?= $dtm->deskripsi_menu; ?></td>
                            <td><img src="<?= base_url('assets/images/'.$dtm->foto_menu) ?>" width="70px" height="50px">
                            </td>
                            <td><?= $dtm->id_kategori_menu; ?></td>
                            <td>
                                <a href="#editEmployeeModal<?= $dtm->id_menu; ?>" class="edit" data-toggle="modal"><i
                                        class="material-icons" data-toggle="tooltip" title="Edit Menu">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal<?= $dtm->id_menu; ?>" class="delete"
                                    data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                        title="Hapus Menu">&#xE872;</i></a>
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
                <form method="POST" action="<?= base_url('C_auth/insert_menu_action') ?>">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" name="nama_menu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Harga Menu</label>
                            <input type="text" name="harga_menu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Menu</label>
                            <textarea class="form-control" name="deskripsi_menu" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto Menu</label>
                            <input class="form-control" type="file" name="foto_menu" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori Menu</label>
                            <input type="text" name="kategori_menu" class="form-control" required>
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
    <div id="editEmployeeModal<?= $dtm->id_menu; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="<?= base_url('C_auth/insert_menu_action') ?>">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="hidden" name="id_menu" value="<?= $dtm->id_menu; ?>">
                            <input type="text" name="nama_menu" class="form-control" value="<?= $dtm->nama_menu; ?>">
                        </div>
                        <div class="form-group">
                            <label>Harga Menu</label>
                            <input type="text" name="harga_menu" class="form-control" value="<?= $dtm->harga_menu; ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Menu</label>
                            <input type="text" name="harga_menu" class="form-control"
                                value="<?= $dtm->deskripsi_menu; ?>">
                        </div>
                        <div class="form-group">
                            <label>Foto Menu</label>
                            <input class="form-control" type="file" name="foto_menu" value="<img src="
                                <?= base_url('assets/images/'.$dtm->foto_menu) ?>" width="70px" height="50px">">
                        </div>
                        <div class="form-group">
                            <label>Kategori Menu</label>
                            <input type="text" name="kategori_menu" class="form-control"
                                value="<?= $dtm->kategori_menu; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- Delete Modal HTML -->
    <?php foreach ($data as $dtm) : ?>
    <div id="deleteEmployeeModal<?= $dtm->id_menu; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan dihapus?</p>
                    <p class="text-warning"><small>Setelah diklik, anda tidak dapat mengembalikan datanya
                            kembali!</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" name="cancel" data-dismiss="modal" value="Cancel">
                    <a href="<?= base_url('C_auth/delete_menu_action/').$dtm->id_menu; ?>"><input type="submit"
                            name="submit" class="btn btn-danger" value="Delete"></a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</body>

</html>