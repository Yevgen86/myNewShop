<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Shop</title>
	<style>
		body {
			background-color: #000;
			text-align: center;
			padding: 100px 150px;
			color: lightgreen;
		}
		ul {
			list-style-type: none; 
			font-size: 20px;
		}
		h1 {
			padding: 20px;
			margin: 10px;
			text-transform: uppercase;
		}
		li {
			padding: 20px;
			margin: 10px;
			border: 2px solid #fff;
		}
		li:hover {
			box-shadow: 0 0 10px lightgreen;
			color: #fff;
			font-weight: 800;
		}
	</style>
</head>
<body>

	<h1>Welcome to the Shop!</h1>

	<ul>
		<?php 
		$json = file_get_contents('http://product-service');
		$obj = json_decode($json);

		$products = $obj->products;
		foreach ($products as $product) {
		 	echo "<li>$product</li>";
		 } 
		 ?>
	</ul>
</body>
</html>