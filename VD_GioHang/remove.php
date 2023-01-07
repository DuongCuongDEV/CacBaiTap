<?php 
	session_start();
	// Bước 1: Lấy được code cần xóa
	$code = $_GET['code'];

	if($_SESSION['cart'][$code]['quantity']>1){
		$_SESSION['cart'][$code]['quantity']--;
	}else{
		// Bước 2: Xóa
		unset($_SESSION['cart'][$code]); 
	}
	header("Location: cart.php");
 ?>