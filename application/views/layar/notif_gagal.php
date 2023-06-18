<!DOCTYPE html>
<html>

<head>
    <title>Notifikasi</title>
    <!-- Tambahkan link ke CSS Bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"> -->
    <!-- Tambahkan link ke JavaScript Bootstrap -->
    <!-- <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> -->
</head>

<body>
    <script>
    // Tampilkan pop-up notifikasi gagal menggunakan JavaScript
    $(document).ready(function() {
        $('#failedNotification').modal('show');
    });
    </script>

    <!-- Modal notifikasi gagal -->
    <div id="failedNotification" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="failedNotificationLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="failedNotificationLabel">Notifikasi Gagal</h4>
                </div>
                <div class="modal-body">
                    <p><?php echo $message; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>