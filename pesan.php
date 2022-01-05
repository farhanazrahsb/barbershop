<!DOCTYPE html>
<html lang="en">
<head>
<title>Barbershop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hair Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <!--/banner-section-->
	  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<h1><a  href="index.php"><span>B</span><i class="fa fa-scissors" aria-hidden="true"></i>arbershop  <p class="s-log">For Men Only</p></a>
												 
												</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
											<ul class="nav navbar-nav linkEffects linkHoverEffect_12">
												<li><a href="index.php"><span>Home</span></a></li> 
												<li><a href="about.php"><span>About</span></a></li> 
												<li><a href="product.php" class="active"><span>Product</span></a></li>
												<li><a href="gallery.php"><span>Gallery</span></a></li> 
												<li><a href="contact.php"><span>Contact</span></a></li>
												<li><a href="login.php"><span><i class="fa fa-unlock-alt fa-lg" title="Login"></i></span></a></li>  
											</ul>
									</div>
									<div class="clearfix"> </div>	
								</nav>
									<div class="w3ls_search">
													<div class="cd-main-header">

													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Search...">
														</form>
													</div>
												</div>
					
							</div> 

			<div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p>Jl. Margonda Raya<span> Depok</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">

						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>+62 813 8844 4744</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">

						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p><a href="mailto:iqballrahman01@gmail.com">iqballrahman01@gmail.com</a>
						 
						  </div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
		<!--//header-w3l-->
			
		</div>
 </div>
  <!--//banner-section-->
 <!--//main-header-->
	        
<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a> <i>//</i></li>
				
				<li>Order</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				  <div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="title-agileits">
                            <h2 class="w3l-agile">Order Here</h2> 
			             </div>
			             <p>Note = Tanda * wajib diisi dan tanggal order wajib diisi.</p><br>

									<div class="w3_mail_grids">
										<form method="post" enctype="multipart/form-data">
											<div class="col-md-6 w3_agile_mail_grid">
											<input type="text" name="nama" class="form-control" placeholder="Nama*"><br>
											<input type="text" name="email" class="form-control" placeholder="Email*"><br>
											<input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone*"><br>
											<select class="form-control" name="id_produk">
												<option selected="selected">-- Pilih Produk --*</option>
												<?php
							                    include "koneksi/koneksi.php";

							                    $query=mysql_query("select * from produk ");
							                    while($row=mysql_fetch_array($query)){
							                    ?>
							                    <option value="<?php echo $row['id_produk']; ?> - <?php echo $row['harga']; ?>"><?php echo $row['id_produk']; ?> - <?php echo $row['nama']; ?> - Rp <?php echo $row['harga']; ?> / satuan</option>
							                    <?php   
							                    }
							                    ?>
											</select><br>
											<input type="number" name="jumlah" class="form-control" placeholder="Jumlah Produk*"><br>
											<input type="date" name="date" class="form-control" placeholder="Tanggal*"><br>
											<input type="text" name="catatan" class="form-control" placeholder="Catatan"><br>
											<select class="form-control" name="no_rek_admin">
												<option selected="selected">-- Pilih Nomor Rekening Admin --*</option>
												<?php
							                    include "koneksi/koneksi.php";

							                    $query=mysql_query("select * from admin ");
							                    while($row=mysql_fetch_array($query)){
							                    ?>
							                    <option value="<?php echo $row['no_rek_admin']; ?>"><?php echo $row['nama']; ?> - <?php echo $row['nama_bank']; ?> - <?php echo $row['no_rek_admin']; ?></option>
							                    <?php   
							                    }
							                    ?>
											</select>																						
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
												<input type="text" name="nama_rek" class="form-control" placeholder="Nama Rekening*"><br>
												<input type="text" name="no_rek" class="form-control" placeholder="Nomor Rekening*"><br>
												<input type="file" name="gambar" class="form-control" placeholder="Bukti Transfer"><br>
												<textarea name="alamat" class="form-control" placeholder="Alamat*"></textarea>
												<input type="submit" name="save" value="Submit">
											</div>
											<div class="clearfix"> </div>
										</form>
										<?php
										include 'koneksi/koneksi.php';

			                            if (isset($_POST['save']))
			                            {
			                            $nama= $_FILES['gambar']['name'];
			                            $lokasi= $_FILES['gambar']['tmp_name'];
			                            move_uploaded_file($lokasi, "gambar/".$nama);
			                            $query = mysql_query("INSERT INTO buyer (nama,email,no_hp,id_produk,jumlah,date,catatan,no_rek_admin,nama_rek,no_rek,gambar,alamat) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[no_hp]', '$_POST[id_produk]', '$_POST[jumlah]', '$_POST[date]', '$_POST[catatan]', '$_POST[no_rek_admin]', '$_POST[nama_rek]', '$_POST[no_rek]', '$nama', '$_POST[alamat]')");

			                            if ($query){
			                            echo "<script>alert('Berhasil Menginput')</script>";
			                            echo "<meta http-equiv='refresh' content='1 url=pesan.php'>";
			                            }else{
			                            echo "<script>alert('Gagal Menginput')</script>";
			                            echo "<meta http-equiv='refresh' content='1 url=pesan.php'>";
			                            }
			                            }
			                            ?>
							</div>
				  </div>
			<!--//content-inner-section-->
			
<div class="w3agile_footer_copy">
<p style="color: black;">© <?php echo date("Y"); ?> Barbershop. All rights reserved</p>
</div>

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->

			<!-- pop-up-box -->  
	<script src="js/main.js"></script>
			<!-- pop-up-box -->  
	<script src="js/lightbox-plus-jquery.min.js"> </script>

	<!--//pop-up-box -->
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>