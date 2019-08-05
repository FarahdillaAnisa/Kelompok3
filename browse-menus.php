<?php include_once('config.php');?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Data Menu</title>

	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	
	<div class="bg-light border-bottom shadow-sm sticky-top">
		<div class="container">
			<header class="blog-header py-1">

				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="beranda.php"><span class="mr-1"><img src="images/logo.png" width="40px"></span>Rumah Makan Awak</a>


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">

						<ul class="navbar-nav mr-auto">
							<li>&nbsp&nbsp&nbsp</li>

							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-17" class="active nav-item"><a title="Data User" href="browse-users.php" class="nav-link">Data User</a></li>

							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a title="Data Menu" href="browse-menus.php" class="nav-link active">Data Menu</a></li>

							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a href="#" class="nav-link">admin</a></li>

							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a href="logoutadm.php" class="nav-link">Logout</a></li>
						</ul>

					</div>

				</nav>

			</header>
		</div> <!--/.container-->
	</div>
	<br>
	<?php
	$condition	=	'';
	if(isset($_REQUEST['name']) and $_REQUEST['name']!=""){
		$condition	.=	' AND name LIKE "%'.$_REQUEST['name'].'%" ';
	}
	if(isset($_REQUEST['image']) and $_REQUEST['image']!=""){
		$condition	.=	' AND image LIKE "%'.$_REQUEST['image'].'%" ';
	}
	if(isset($_REQUEST['price']) and $_REQUEST['price']!=""){
		$condition	.=	' AND price LIKE "%'.$_REQUEST['price'].'%" ';
	}
	if(isset($_REQUEST['jenis']) and $_REQUEST['jenis']!=""){
		$condition	.=	' AND jenis LIKE "%'.$_REQUEST['jenis'].'%" ';
	}
	$userData	=	$db->getAllRecords('tbl_product','*',$condition,'ORDER BY id DESC');
	?>
   	<div class="container">
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Tampilan Data Menu</strong> <a href="add-menus.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Tambah User</a></div>
			<div class="card-body">
				<?php
				if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rds"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Data Berhasil di hapus!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Data Berhasil Di Perbaharui!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){
					echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> Anda tidak merubah data apapun</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
					echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Ada Kesalahan! <strong>Coba Lagi!</strong></div>';
				}
				?>
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Cari Data</h5>
					<form method="get" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Nama Menu</label>
									<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_REQUEST['name'])?$_REQUEST['name']:''?>" placeholder="Masukkan Nama Menu">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Harga</label>
									<input type="text" name="price" id="price" class="form-control" value="<?php echo isset($_REQUEST['price'])?$_REQUEST['price']:''?>" placeholder="Masukan harga">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Jenis Menu</label>
									<input type="text" name="jenis" id="jenis" class="form-control" value="<?php echo isset($_REQUEST['jenis'])?$_REQUEST['jenis']:''?>" placeholder="Masukkan Jenis Menu">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>&nbsp;</label>
									<div><button type="submit" name="submit" value="Cari" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Cari Data</button></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>No</th>
						<th>Nama Menu</th>
						<th>Harga</th>
						<th>Jenis</th>
						<th>Gambar</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$s	=	'';
					foreach($userData as $val){
						$s++;
					?>
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['name'];?></td>
						<td><?php echo $val['price'];?></td>
						<td><?php echo $val['jenis'];?></td>
						<td><?php echo $val['image'];?></td>
						<td align="center">
							<a href="edit-menus.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit Menu</a> | 
							<a href="delete-menus.php?delId=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Apakah Anda Yakin menghapus data menu ini');"><i class="fa fa-fw fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>