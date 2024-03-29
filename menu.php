<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu Awak - Rumah Makan Awak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       <a class="navbar-brand" href="beranda.php"><span class="mr-1"><img src="images/logo.png" width="40px"></span>Rumah Makan<br><small>Awak</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu Awak
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item"><a href="beranda.php" class="nav-link">Beranda</a></li>
                <li class="nav-item active"><a href="menu.php" class="nav-link">Menu Awak</a></li>
                <li class="nav-item"><a href="layanan.php" class="nav-link">Layanan Awak</a></li>
                <li class="nav-item"><a href="promo.php" class="nav-link">Promo Awak</a></li>
                <li class="nav-item"><a href="Tentang.php" class="nav-link">Tentang Awak</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Kontak Awak</a></li>
                <li class="nav-item"><a href="#"><?php session_start(); echo $_SESSION['username'] . " "?></a></li>
                <li class="nav-item"><a href="logout.php">&nbspLogout</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/slider1.jpg);">

      <div class="slider-item" style="background-image: url(images/slider1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Menu Awak</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="beranda.php">Beranda Awak</a></span> <span>Menu Awak</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Awak Nak Makan Apa?</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p>Nak cari makanan nusantara ni tak payah, makanan nya pun beragam, sedap pastinya, murah dan suailah dengan kantong awak tu. Selain itu awak dapat info tentang sejarah makanan yang awak nak pesan tu.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/DekkeNaNiura.jpg);"></a>
    					<div class="text p-4">
    						<h3>Dekke Na Niura</h3>
    						<p>Masakan berbahan utama ikan mas ini awalnya di masak saat acara adat karena na niura ini dulu makanan bagi para raja-raja suku batak</p>
    						<p class="price"><span>Rp. 30.000</span></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pempek.jpg);"></a>
    					<div class="text p-4">
    						<h3>Pempek</h3>
    						<p>makanan khas palembang ini pasti maknyus wak apalagi dengan rasa kuah yang pedas cocok buat peminat rasa pedas</p>
    						<p class="price"><span>Rp. 20.000</span></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/sateayamm.jpg);"></a>
    					<div class="text p-4">
    						<h3>Sate Ayam Khas Madura</h3>
    						<p>Menu satu ini salah satu yang paling banyak diminati karena rasa khas pada kuah kacang nya</p>
    						<p class="price"><span>Rp. 15.000</span></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/satekambing.jpg);"></a>
    					<div class="text p-4">
    						<h3>Sate Kambing</h3>
    						<p>Daging kambing yang disajikan juga empuk dan maknyus bila disantap</p>
    						<p class="price"><span>Rp. 20.000</span></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/sotolamongan.jpeg);"></a>
    					<div class="text p-4">
    						<h3>Soto Lamongan</h3>
    						<p>Soto khas lamongan ini makin sedap disantap apabila dibarengi dengan nasi wak, rasa kuah nya yang khas bikin nagih</p>
    						<p class="price"><span>Rp. 20.000</span></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/karedok.jpg);"></a>
    					<div class="text p-4">
    						<h3>Karedok Sunda</h3>
    						<p>Karedok khas warga sunda ini dilengkapi dengan lalapan bagi awak yang suka lalap, pesan langsung wak</p>
    						<p class="price"><span>Rp. 15.000</span></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Nak Minum Apa Wak?</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Berbagai minuman khas nusantara yang khas pastinya bikin tenggorokan adem wak</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/cendol.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Cendol</span></h3>
	        				<span class="price">Rp. 7.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Minuman semua kalangan ni wak</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/esblewah.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Blewah</span></h3>
	        				<span class="price">Rp. 10.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Minuman khas nusantara ini bikin nagih</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/escampur.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Campur</span></h3>
	        				<span class="price">Rp. 7.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Minuman yang cocok untuk pelepas dahaga</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/escincauhitam.png);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Cincau Hitam</span></h3>
	        				<span class="price">Rp. 8.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>es cincau hitam yang rasanya maknyus wak</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/esjeruknipis.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Jeruk Nipis</span></h3>
	        				<span class="price">Rp. 7.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Minuman ini cocok untuk melengkapi makanan pedas wak</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/esmelonkelapamuda.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Melon Kelapa Muda</span></h3>
	        				<span class="price">Rp. 13.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Minuman ini cocok buat awak yang penat selepas beraktivitas</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/esselandangmayang.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Selendang Mayang</span></h3>
	        				<span class="price">Rp. 10.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Kapan lagi meminum minuman khas nusantara ini wak</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/kolak.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Es Kolak</span></h3>
	        				<span class="price">Rp. 10.000</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Es kolak pisang yang banyak peminatnya ada disini wak</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
        <a class="nav-link active" style="font-size: 16pt" id="v-pills-1-tab" href="pesanan.php" role="tab" aria-controls="v-pills-1" aria-selected="true">PESAN SEKARANG</a>
    	</div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/restoran.jpeg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
                  <h2 class="mb-4">Nak Ngemil Apa Wak?</h2>
                  <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Kue Nusantara</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Kue Tradisional</a>

		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/putupiring.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Putu Piring</a></h3>
		              					<p>Kue khas nusantara dengan gula merah yang sedap wak</p>
		              					<p class="price"><span>Rp. 10.000</span></p>
		              					<p></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/lapislegit.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lapis Legit</a></h3>
		              					<p>Lapis legit terenak termurah hanya di sini</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              					<p></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/kuetepungberas.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Talam Bulan</a></h3>
		              					<p>Kue talam bulan yang lembut dengan aroma khas</p>
		              					<p class="price"><span>Rp. 10.000</span></p>
		              					<p></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dadargulungubiungu.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Dadar Gulung Ubi Ungu</a></h3>
		              					<p>Dadar gulung yang unik ini terbuat dari ubi ungu</p>
		              					<p class="price"><span>Rp. 10.000</span></p>
		              					<p></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/bolukojo.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Bolu Kojo</a></h3>
		              					<p>Bolu khas nusantara dengan tekstur lembut bikin nagih</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              					<p></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/apem.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kue Apem</a></h3>
		              					<p>Kue tradisional ini sangat sedap disantap wak</p>
		              					<p class="price"><span>Rp. 14.000</span></p>
		              					<p></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Rumah Makan Awak</h2>
              <p>Menyediakan makanan, minuman dan kue khas nusantara yang dijamin sedap dan murah</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Nak Tanya Apa?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Sudirman Pekanbaru</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62821-9492-5541</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">rumahmakanawak@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | powered by <i class="icon-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>