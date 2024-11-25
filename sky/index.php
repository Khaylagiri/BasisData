<?php
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	if ($kontak) {
		$a = mysqli_fetch_object($kontak);
	}
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
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">produk</a></h1>
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

	<!--category-->
	<div class="selection">
		<div class="container">
			<h3>kategori</h3>
			<div class="box">
				<?php
					$produk = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($produk) > 0) {
						while($k = mysqli_fetch_array($produk)) {
				?>
				<a href="produk.php?kat=<?php echo $k['category_id']?>">
					<div class="col-5">
						<img src="img/icon-kategori.png" width="5px">
						<p><?php echo $k['category_name'] ?></p>
					</div>
				</a>
				<?php 
						}
					} else {
				?>
				<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>produk terbaru</h3>
			<div class="box">
				<?php
					$produk = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY product_id DESC");
					if(mysqli_num_rows($produk) > 0) {
						while($p = mysqli_fetch_array($produk)) {
				?>
				<div class="col-4">
					<img src="produk/<?php echo $p['product_image'] ?>" alt="product">
					<p class="nama"><?php echo $p['product_name'] ?></p>
					<p class="harga">Rp. <?php echo number_format($p['product_price'], 0, ',', '.') ?></p>
				</div>
				<?php 
						}
					} else {
				?>
				<p>Produk tidak ada</p>
				<?php } ?>
			</div>
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
