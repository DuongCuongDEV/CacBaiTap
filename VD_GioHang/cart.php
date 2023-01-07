<?php 
    session_start();
    $products_cart = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    	<h3 class="text-center">--- PRODUCTS IN CART ---</h3>
        <a href="index.php" class="btn btn-success">Back to Home</a>
        <table class="table">
        	<thead>
                <th> Code </th>
                <th> Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Amount </th>
                <th> Image </th>
            </thead>
        <?php 
            $sum = 0;
            foreach($products_cart as $code => $product){ 
                $sum += $product['price'] * $product['quantity'];
                
            ?>
            <tr>
                <td><?= $code ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= number_format($product['price']) ?></td>
                <td>
                    <a href="add2cart.php?code=<?= $code ?>" class="btn btn-success">+</a>
                    <?= $product['quantity'] ?>
                    <a href="remove.php?code=<?= $code ?>" class="btn btn-warning">-</a> 
                </td>
                <td><?= number_format($product['price']*$product['quantity']) ?></td>
                <td>
                    <img src="images/<?= $product['image'] ?>" width="100px" height="100px">
                </td>
            </tr>
        <?php } ?>
        <thead>
                <th colspan="4"> Sum </th>
                <th> <?= number_format($sum)?> </th>
                <th> </th>
                <th></th>
            </thead>
        </table>
    </div>
</body>
</html>