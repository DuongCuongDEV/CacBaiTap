<?php 
	session_start();
	require_once('data.php');
	// Bước 1: Lấy code sản phẩm người dùng chọn theo phương thức GET
	$code = $_GET['code'];

	// Kiểm tra xem SESSION['cart'][$code] đã tồn tại chưa
	if(isset($_SESSION['cart'][$code])){
		// Đã tồn tại => Tăng số lượng lên 1
		$_SESSION['cart'][$code]['quantity']++;
	}else{
		// Chưa tồn tại thì làm như bước 2
		// Bước 2: Lấy thông tin về sản phẩm dựa vào mã sản phẩm
		$product = $products[$code];

		// Bước 2.1: Đưa số lượng về 1
		$product['quantity'] = 1;

		// Bước 3: Thêm sản phẩm vào giỏ hàng
		$_SESSION['cart'][$code] = $product;
	}
	
	header('Location: cart.php');
 ?>