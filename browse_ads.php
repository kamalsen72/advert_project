<?php
	include('db/connect.php');
	$sql1 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 1";
	$result_01 = mysqli_query($con,$sql1);
	while($data = mysqli_fetch_array($result_01))
		{
			$count_01 = $data['count_id'];
		}
	$sql2 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 2";
	$result_02 = mysqli_query($con,$sql2);
	while($data = mysqli_fetch_array($result_02))
		{
			$count_02 = $data['count_id'];
		}
	$sql3 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 3";
	$result_03 = mysqli_query($con,$sql3);
	while($data = mysqli_fetch_array($result_03))
		{
			$count_03 = $data['count_id'];
		}
	$sql4 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 4";
	$result_04 = mysqli_query($con,$sql4);
	while($data = mysqli_fetch_array($result_04))
		{
			$count_04 = $data['count_id'];
		}
	$sql5 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 5";
	$result_05 = mysqli_query($con,$sql5);
	while($data = mysqli_fetch_array($result_05))
		{
			$count_05 = $data['count_id'];
		}
	$sql6 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 6";
	$result_06 = mysqli_query($con,$sql6);
	while($data = mysqli_fetch_array($result_06))
		{
			$count_06 = $data['count_id'];
		}
	$sql7 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 7";
	$result_07 = mysqli_query($con,$sql7);
	while($data = mysqli_fetch_array($result_07))
		{
			$count_07 = $data['count_id'];
		}
	$sql8 = "SELECT COUNT(id) AS count_id FROM adds WHERE category = 8";
	$result_08 = mysqli_query($con,$sql8);
	while($data = mysqli_fetch_array($result_08))
		{
			$count_08 = $data['count_id'];
		}
?>
<html lang="en">
	<head>
		<!-- basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- mobile metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<!-- site metas -->
		<title>Browse Ads</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">	
		<!-- bootstrap css -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Responsive-->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- fevicon -->
		<link rel="icon" href="images/fevicon.png" type="image/gif" />
		<!-- Scrollbar Custom CSS -->
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
		<!-- Tweaks for older IEs-->
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<!-- owl stylesheets --> 
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	</head>
	<body>
		<!-- header section start -->
		<div class="header_section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-3">
						<div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
					</div>
					<div class="col-sm-6">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
							<a class="nav-item nav-link" href="index.html">Home</a>
							<a class="nav-item nav-link" href="browse_ads.php">Browse ads</a>
							<a class="nav-item nav-link" href="about.html">About</a>
							<a class="nav-item nav-link" href="clients.html">Clients</a>
							<a class="nav-item nav-link" href="contact.html">Contact</a>
							</div>
						</div>
						</nav>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="search_main">
						<button class="submit_bt"><a href="submitadd.php"><span class="doctor"><img src="images/doctor-icon.png"></span>Submit ads</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header section end -->
		<!-- section PROMOTED start -->
		<div class=" layout_padding promoted_sectipon">
			<div class="container">
				<h1 class="promoted_text">Classified <span style="border-bottom: 5px solid #4bc714;">ADS</span></h1>
				<div class="images_main">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="images"><img src="images/img-1.png" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							
							<button class="mobile_bt"><a href="#">Mobiles (<?php echo $count_01;?>)</a></button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="images"><img src="images/img-2.png" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Cycles (<?php echo $count_02;?>)</a></button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="images"><img src="images/img-3.png" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Cars (<?php echo $count_03;?>)</a></button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="images"><img src="images/img-4.png" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Laptops (<?php echo $count_04;?>)</a></button>
						</div>
					</div>
				</div>
				<div class="images_main">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div><img src="images/img-6.jpg" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Real Estate (<?php echo $count_05;?>)</a></button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div><img src="images/img-7.png" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Fashion (<?php echo $count_06;?>)</a></button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div><img src="images/img-8.jpg" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Pets (<?php echo $count_07;?>)</a></button>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div><img src="images/img-9.png" style="width: 100%;"></div>
							<!--	<button class="promoted_bt">PROMOTED</button> -->
							<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
							<div class="numbar_text">30<span class="like-icon">01</span></div>
							<button class="mobile_bt"><a href="#">Sport (<?php echo $count_08;?>)</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section PROMOTED end -->
		<!-- footer section start -->
		<div class="layout_padding footer_section">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div><img src="images/footer-logo.png"></div>
						<p class="dolor_text">We FreeAdd, ready to give your advert a highest possible bublic attension in no time.  </p>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h1 class="quick_text">Quick links</h1>
						<div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Join Us</span></div>
						<div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Maintenance</span></div>
						<div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Language Packs</span></div>
						<div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">LearnPress</span></div>
						<div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Release Status</span></div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h1 class="subscribe_text">Subcribe email</h1>
						<p class="ipsum_text">Subscribe to our email newsletter for useful posts our promotional adds, sent out every week.</p>
						<input type="text" class="email_text" placeholder="Your Email" name="Name">
						<button class="submit_text">Submit</button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h1 class="quick_text">Contact Us</h1>
						<div class="map_flag"><img src="images/map-flag.png"><span class="padding-left">Old Kottawa Rd. Maharagma</span></div>
						<div class="dolor_text"><img src="images/email-icon.png"><span class="padding-left">freeaddz@gmail.com</span></div>
						<div class="dolor_text"><img src="images/phone-icon.png"><span class="padding-left">0776618795</span></div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer section end -->
		<!-- copyright section start -->
		<div class="copyright">
			<p class="copyright_text">2023 All Rights Reserved. Design By <a href="https://html.design">FreeAdd.lk co-operation</p>
		</div>
		<!-- copyright section end -->








		<!-- Javascript files-->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery-3.0.0.min.js"></script>
		<script src="js/plugin.js"></script>
		<!-- sidebar -->
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/custom.js"></script>
		<!-- javascript --> 
		<script src="js/owl.carousel.js"></script>
		<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
		<script>
			$(document).ready(function(){
			$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
			});
			
			$(".zoom").hover(function(){
			
			$(this).addClass('transition');
			}, function(){
			
			$(this).removeClass('transition');
			});
			});
			
		</script> 
	</body>
</html>
