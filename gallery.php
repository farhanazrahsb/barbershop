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
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<link rel="stylesheet" href="css/lightbox.css">
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
												<li><a href="product.php"><span>Product</span></a></li>
												<li><a href="gallery.php" class="active"><span>Gallery</span></a></li> 
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
				<li>Gallery</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					     <div class="title-agileits">
                            <h2 class="w3l-agile">Our Gallery</h2> 
			             </div>
				    <div class="gallery-grids">
				    <?php
				    include ('koneksi/koneksi.php');

				      $halaman = 12;
					  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					  $result = mysql_query("SELECT * FROM gallery");
					  $total = mysql_num_rows($result);
					  $pages = ceil($total/$halaman);            
					  $query = mysql_query("select * from gallery order by id_gambar desc LIMIT $mulai, $halaman")or die(mysql_error);
					  $no =$mulai+1;

				    while ($var=mysql_fetch_array($query)) {
				    ?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="admin/gambar/<?php echo $var['gambar'];?>" data-lightbox="example-set" data-title="<?php echo $var ['keterangan']; ?>">
									<img src="admin/gambar/<?php echo $var['gambar'];?>" alt="" />
									<figcaption>
										<p>Hair Salon</p>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<?php
				    }
				    ?>
					<div class="clearfix"> </div>
					<div class="container">
					<div class="span11" align="center">
						<ul class="pagination">
							<?php for ($i=1; $i<=$pages ; $i++){ ?>
				  			<b><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> |</a></b>
				 
				  			<?php } ?>
						</ul>
								  	  
					</div>
					</div>
			</div>

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
