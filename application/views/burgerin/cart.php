</script>
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
        <h2>Shopping Cart</h2>
        <div class="table-responsive-sm">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10%">

                        </th>
                        <th width="10%">Dish</th>
                        <th width="10%">Price</th>
                        <th width="10%">Quantity</th>
                        <th width="10%">SubTotal</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php $cartItems = $this->cart->contents(); ?>
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
                                <td><?php echo 'Rp' . ($item['price'] * $item['qty']); ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'cart/removeItem/' . $item['rowid']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="6">
                                <p>No Items In Your Cart!!</p>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="<?= site_url('C_auth/restaurant_menu_login_user'); ?>" class="btn btn-sm btn-warning"><i class="fas fa-angle-left"></i> Continue Ordering</a></td>
                        <td colspan="3"></td>
                        <?php if ($this->cart->total_items() > 0) { ?>
                            <td class="text-left">Grand Total: <b><?php echo 'Rp' . $this->cart->total(); ?></b></td>
                            <td><a href="<?php echo site_url('Belanja/checkout'); ?>" class="btn btn-sm btn-success btn-block">Checkout <i class="fas fa-angle-right"></i></a></td>
                        <?php } ?>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>