<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order | Tropical Fruit Shop</title>
	<link rel="stylesheet" type="text/css" href="css/order.css">
</head>
<body>

	<nav>
		<div class="logo">
			<h1><a href="index.html">Tropical Fruit Shop</a></h1>
		</div>
			 <ul>
				<li ><a href="index.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
				<li class="active"><a href="order.php">ORDER</a></li>
				<li ><a>CREATE BY</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			 </ul>

			 <div class="menu-toogle">
				 <input type="checkbox"/>
				 <span></span>
				 <span></span>
				 <span></span>
			 </div>
	</nav>


	<div class="popup-box">
		<div class="popup-content">
			<div class="popup-header">
				<h3>TIM KAMI</h3>
				<span class="popup-close-icon">&times;</span>
			</div>	
			<div class="popup-body">
				<p>1. Michelle Wahyuni Gretha Wowor (20021106060)</p>
				<p>2. Lidia Sendi Nelwan (20021106076)</p>
				<p>3. Kanaya Elfira Tumade (20021106165)</p>
				<p>Link Presentasi :</p>
				<a href="https://drive.google.com/file/d/1XT5kv6gW62XcGOq3BjnVZY59h4lnSAYi/view?usp=sharing"><strong>Klik Disini</strong></a> 
			</div>
			<div class="popup-footer">
				<button class="btn popup-close-btn">Close</button>
			</div>
		</div>
	</div>

	<!-- label -->
	<section class="label">
		<div class="bagian">
			<p>Home / Order</p>
		</div>
	</section>
	
	<!--message-->
	<section class="form">
		<div class="bagian">
		<!--form-->
		<div class="form-container">
			<h3>Order Now!</h3>
			<form action="" class="form">
				<input type="text" placeholder="Name" required>
				<input type="email" name="" id="" placeholder="Email" required>
				<input type="jenis buah" placeholder="Fruit Type" required>
				<input type="number" placeholder="Quantity" min="1" required>
				<textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
				<input type="submit" value="Send" class="send-button" onclick="sendbtn()">
			</form>
		</div>		
		</div>	
	</section>

	<script src="js/order.js"></script>
</body>
</html>