<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "rumahmakan_awak");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_jenis'		=>	$_POST["hidden_jenis"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_jenis'		=>	$_POST["hidden_jenis"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="pesanan.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pemesanan | Rumah Makan Awak</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

	    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	    <link rel="stylesheet" href="css/animate.css">
	    
	    <link rel="stylesheet" href="css/owl.carousel.min.css">
	    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	    <link rel="stylesheet" href="css/magnific-popup.css">

	    <link rel="stylesheet" href="css/aos.css">

	    <link rel="stylesheet" href="css/ionicons.min.css">

	    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
	    <link rel="stylesheet" href="css/jquery.timepicker.css">

	    
	    <link rel="stylesheet" href="css/flaticon.css">
	    <link rel="stylesheet" href="css/icomoon.css">
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body style="background-image: url(images/food.png)">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <a class="navbar-brand" href="index.html"><span class="mr-1"><img src="images/logo.png" width="40px"></span>Rumah Makan<br><small>Awak</small></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="beranda.php" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu Awak</a></li>
            <li class="nav-item"><a href="layanan.php" class="nav-link">Layanan Awak</a></li>
            <li class="nav-item"><a href="promo.php" class="nav-link">Promo Awak</a></li>
            <li class="nav-item"><a href="Tentang.php" class="nav-link">Tentang Awak</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Kontak Awak</a></li>
            <li class="nav-item"><a href="#"><?php echo $_SESSION['username'] . " "?></a></li>
            <li class="nav-item"><a href="logout.php">&nbspLogout</a></li>
          </ul>
        </div>
      </div>
    </nav>

		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center" style="font-size: 20pt; color: black;">Pesanan Makanan Sanak Dirumah Makan Awak</h3><br />
			<br /><br />
	<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="pesanan.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" width="200px" style="height: 100px"><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-success"><?php echo $row["jenis"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" placeholder="jumlah">

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_jenis" value="<?php echo $row["jenis"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Pesan" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3 style="color: black;">Menu Yang Dipesan</h3>
			<div class="table-responsive">
				<table class="table table-bordered" style="background-color: #fff;">
					<tr>
						<th width="40%">Nama</th>
						<th width="10%">Jenis</th>
						<th width="10%">Jumlah</th>
						<th width="20%">Harga</th>
						<th width="15%">Total</th>
						<th width="5%">Keterangan</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_jenis"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="pesanan.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Hapus</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							if ($total > 50000) {
								$promo = 5/100 * $total;
								$totalbayar = $total - $promo;
							}
							elseif ($total > 100000) {
								$promo = 10/100 * $total;
								$totalbayar = $total - $promo;
							}
							elseif ($total > 150000) {
								$promo = 15/100 * $total;
								$totalbayar = $total - $promo;
							}
							else{
								$promo = 0;
								$totalbayar = $total - $promo;
							}
						}
					
					?>
					<tr>
						<td colspan="4" align="right">Total</td>
						<td align="left">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="4" align="right">Promo</td>
						<td align="left">$ <?php echo number_format($promo, 2); ?></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="4" align="right">Total Bayar</td>
						<td align="left">$ <?php echo number_format($totalbayar, 2); ?></td>
						<td></td>
					</tr>

					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>