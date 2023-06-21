<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Ordering CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <script src="<?php echo base_url() . 'assets/js/jquery-3.6.0.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styleCart.css'); ?>">
    <style>

    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h2 class="mt-3">Order Preview</h2>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Dish</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>SubTotal</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if ($this->cart->total_items() > 0) {
                                foreach ($cartItems as $item) { ?>
                                    <tr>
                                        <td>
                                            <?php $image = $item['image']; ?>
                                            <img class="" width="70" src="../assets/images/<?= $image ?>">
                                        </td>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><?php echo 'Rp' . $item['price']; ?></td>
                                        <td><?php echo $item['qty'] . 'Pcs'; ?>
                                        </td>
                                        <td><?php echo 'Rp' . $item['price'] * $item['qty']; ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="5">
                                        <p>No Items In Your Cart!!</p>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"></td>
                                <?php if ($this->cart->total_items() > 0) { ?>
                                    <td class="text-left">Total: <b><?php echo 'Rp' . $this->cart->total(); ?></b></td>
                                <?php } ?>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <form action="<?php echo base_url('Checkout/insert') ?>" method="POST" class="form-container  shadow-container" style="width:80%">
                    <h3 class="mt-3">Shipping Details</h3>
                    <hr>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" type="text" style="height:70px;" class="form-control"></textarea>
                    </div>
                    <p class="lead mb-0">Cash On Delivery</p>
                    <div class="container p-2 mb-3" style="background: #e5e5e5;">
                        Pay with Cash on Delivery
                    </div>
                    <div>
                        <a href="<?= base_url('Belanja/tampil') ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i>
                            Back to cart</a>
                        <button type="submit" name="placeOrder" class="btn btn-success">Place Order <i class="fas fa-angle-right"></i></button>
                    </div>
                    </from>
            </div>
        </div>
    </div>
</body>

</html>