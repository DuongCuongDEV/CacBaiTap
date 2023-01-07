<?php 
    require_once('data.php');
    session_start();
    //session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giỏ hàng nâng cao VNCERT/CC</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    	<h3 class="text-center">--- PRODUCTS ---</h3>
        <a href="cart.php" class="btn btn-success">View Cart >>></a>
        <table class="table">
        	<thead>
                <th> Code </th>
                <th> Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Image </th>
                <th>#</th>
            </thead>
        <?php foreach($products as $code => $product){ ?>
            <tr>
                <td><?= $code ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= number_format($product['price']) ?></td>
                <td><?= $product['quantity'] ?></td>
                <td><img src="images/<?= $product['image'] ?>" width="100px" height="100px"></td>
                <td>
                    <a href="add2cart.php?code=<?= $code ?>" class="btn btn-primary">Add to Cart</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>