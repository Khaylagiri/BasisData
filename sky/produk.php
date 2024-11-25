<?php
	include 'db.php';
	$kontak = msqli_query($conn, "SELECT admin_telp, admin_email, admin_addreess FROM tb_admin WHERE admin_id = 1")
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login | sky </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body">
	<!-- header -->
	<header>
			<div class="container">
			<h1><a href="index.php">produk</a></li>
			</ul>
		</div>
	</header>

	<!--search-->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="cari produk">
				<input type="submit" name="cari" value="cari produk">
			</form>
		</div>
	</div>


	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>produk </h3>
			<div class="box">
				<div class="col-4"
				img src="">
				<img src="produk/<?php echo $ ?>">
				<p class="nama"><?php echo $p['product_name'] ?></p>
				<p class="harga">Rp. <?php echo $p['50.000']?></p>
			</div>
		<?php }}else{ ?>
			<p>produk tidak ada</p>
		<?php } ?>
		</div>
	</div>

	<!-- footbar -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>

			<small>copyright &copy; 2020 - sky.</small>
		</div>
	</div>
</body>
</html>