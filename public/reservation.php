<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="public/css/zerogrid.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/slide.css">
	<link rel="stylesheet" href="public/css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="public/js/html5.js"></script>
		<script src="public/js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>ContacUst@Gmail.com</p></li>
				<li class="phone"><p>08 88888 88888</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="images/logo.png"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center">Truely the best restaurant in town - The New York Times</h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="index.html">Home</a></li>
			<li class="colour-2"><a href="menu.html">Menu</a></li>
			<li class="colour-3"><a href="location.html">Location</a></li>
			<li class="colour-4"><a href="archive.html">Blog</a></li>
			<li class="colour-5"><a href="reservation.html">Reservation</a></li>
			<li class="colour-6"><a href="staff.html">Our Staff</a></li>
			<li class="colour-7"><a href="news.html">News</a></li>
			<li class="colour-8"><a href="gallery.html">Gallery</a></li>
		</ul>
    </nav>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="reservation.html">Reservation</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<!--Warning-->
					<center><?php echo $text;?></center>
					<!---->
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Complete the Submission Form</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br/>
							<h3>Or Just Make a Call</h3>
							<p>+6221 888 888 90 <br>
								+6221 888 88891</p>
							<p>info@yourdomain.com</p>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<div id="contact_form">
									<form name="contact" id="contact" method="post" action="reservation.php">
										<label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</label>
										<label class="row">
											<div class="col-2-4">
												<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="date"  name="date" id="date" placeholder="Date"/>
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="time"  name="time" id="time" placeholder="Time"/>
												</div>
											</div>
										</label>
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</label>
										<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Customer Testimonials</h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5>Nick Roach</h5>
						<p>Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac, placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean lectus nisl, ellentesque in fermentum sit amet.</p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Open Daily</h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2015 - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="public/js/classie.js"></script>
	<script src="public/js/demo.js"></script>

</div>
</body></html>