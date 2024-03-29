
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>UKM Carpool | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
<meta name="keywords" content="Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<!-- //end-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : false,
						pagination : true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
</head>




<!--header start here-->
<div class="banner">
 <div class="header">
   <div class="container">
     <div class="header-main">
	   <div class="logo wow bounceInLeft" data-wow-delay="0.3s">
	     <a href="index.html"><img src="images/logo1.png"  alt=""></a>
	   </div>
	   <div class="top-navg">
			   <span class="menu"> <img src="images/icon.png" alt=""/></span>
			 <nav class="cl-effect-13">
				<ul class="res">
					<li><a class="active" href="{{ url('/home') }}">Home</a></li>
					<li><a href="{{ url('/offer') }}">Offer Ride</a></li>
					<li><a href="hotel.html">Hotel</a></li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<!-- script-for-menu -->
				 <script>
				   $( "span.menu" ).click(function() {
					 $( "ul.res" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
	   </div>
	    <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <div class="banner-main">
	    <div class="slider-bann wow bounceInRight" data-wow-delay="0.3s">
	    <ul class="rslides" id="slider2">
	      <li>
	      	<h3>Welcome To Our Travel</h3>
	      	<h4>The Best Way To Be Lost</h4>
	      	  <div class="ban-btn">
	      	   <a href="single.html" class="hvr-bounce-out">Load More</a>
	      	  </div>
	      </li>
	      <li>
	      	<h3>Find Beautiful Place</h3>
	      	<h4>The Best Way To Be Lost</h4>
	      	  <div class="ban-btn">
	      	  <a href="single.html" class="hvr-bounce-out">Load More</a>
	      	  </div>
	      	</li>
	      <li>
	      	<h3>To travel is to live</h3>
	      	<h4>The Best Way To Be Lost</h4>
	      	  <div class="ban-btn">
	      	   <a href="single.html" class="hvr-bounce-out">Load More</a>
	      	  </div>
	      </li>
	    </ul>
    </div>
  </div>
</div>
<!--header end here-->
<!---728x90--->
<!--what we do strat here-->
<div class="what-we-do">
 <div class="container">
    <div class="what-we-do-main  wow bounceInLeft" data-wow-delay="0.3s">
    	 <h2>What We Do</h2>
    	 <span class="lft-bar-we"> </span>
	     <span class="rit-bar-we"> </span>
    	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text </p>
    	 <a href="about.html" class="hvr-bounce-out">Read More</a>
    	<div class="clearfix"> </div>
    </div>
 </div>
</div>
<!--what we do end here-->
<!--peoples strat here-->
<div class="people">
	<div class="container">
		<div class="people-main">
			  <div class="people-top wow bounceInRight" data-wow-delay="0.3s">
			  	<h1>Touristers</h1>
			  	<span class="lft-bar-team"> </span>
			  	<span class="rit-bar-team"> </span>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			  </div>
			  <div class="people-bottom">
			  	 <div id="owl-demo" class="owl-carousel text-center">
			  	 	  <div class="item g1">
							<img class="lazyOwl img-responsive" data-src="images/w.jpg" alt="name" >
							<div class="people-caption">
								<h3>Duis nec congue</h3>
								<span>Neque porro quisquam est qui dolorem </span>
								<ul class="people-icons">
									<li><a href="#"> <span class="fb"></span> </a></li>
									<li><a href="#"> <span class="tw"></span> </a></li>
									<li><a href="#"> <span class="google"></span> </a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl img-responsive" data-src="images/w1.jpg" alt="name">
							<div class="people-caption">
								<h3>Duis nec congue</h3>
								<span>Neque porro quisquam est qui dolorem </span>
								<ul class="people-icons">
									<li><a href="#"> <span class="fb"></span> </a></li>
									<li><a href="#"> <span class="tw"></span> </a></li>
									<li><a href="#"> <span class="google"></span> </a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl img-responsive" data-src="images/w2.jpg" alt="name">
							<div class="people-caption">
								<h3>Duis nec congue</h3>
								<span>Neque porro quisquam est qui dolorem </span>
								<ul class="people-icons">
									<li><a href="#"> <span class="fb"></span> </a></li>
									<li><a href="#"> <span class="tw"></span> </a></li>
									<li><a href="#"> <span class="google"></span> </a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl img-responsive" data-src="images/w3.jpg" alt="name">
							<div class="people-caption">
								<h3>Duis nec congue</h3>
								<span>Neque porro quisquam est qui dolorem </span>
								<ul class="people-icons">
									<li><a href="#"> <span class="fb"></span> </a></li>
									<li><a href="#"> <span class="tw"></span> </a></li>
									<li><a href="#"> <span class="google"></span> </a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl img-responsive" data-src="images/w4.jpg" alt="name">
							<div class="people-caption">
								<h3>Duis nec congue</h3>
								<span>Neque porro quisquam est qui dolorem </span>
								<ul class="people-icons">
									<li><a href="#"> <span class="fb"></span> </a></li>
									<li><a href="#"> <span class="tw"></span> </a></li>
									<li><a href="#"> <span class="google"></span> </a></li>
								</ul>
							</div>
						</div>

					</div>
			  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--peoples end here-->
<!--disk bar strat here-->
<div class="disk">
  <div class="container">
  	<div class="disk-main">
  		   <div class="col-md-8 disk-left wow bounceInLeft" data-wow-delay="0.3s">
  		   	  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
  		   </div>
  		   <div class="col-md-4 disk-right wow bounceInRight" data-wow-delay="0.3s">
  		   	<a href="about.html" class="hvr-bounce-out">Read More</a>
  		   </div>
  		<div class="clearfix"> </div>
  	</div>
  </div>
</div>
<!--disk bar end here-->
<!---728x90--->
<!--features strat here-->
<div class="features">
  <div class="container">
  	<div class="features-main">
  		<div class="features-top">
  			<h3>Features</h3>
  			<span class="lft-bar-fea"> </span>
			<span class="rit-bar-fea"> </span>
  		</div>
  		<div class="features-bottom">
	  		 <div class="col-md-6 features-left wow bounceInLeft" data-wow-delay="0.3s">
	  		   	 <div class="feature-grids">
		  		   	  <div class="fea-img">
		  		   	  	<img src="images/fe1.png" alt="">
		  		   	  </div>
		  		   	  <div class="fea-text">
		  		   	  	<h4>Nemo enim</h4>
		  		   	  	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
		  		   	  </div>
		  		   	<div class="clearfix"> </div>
	  		   	  </div>
	  		   	  <div class="feature-grids">
		  		   	  <div class="fea-img">
		  		   	  	<img src="images/fe2.png" alt="">
		  		   	  </div>
		  		   	  <div class="fea-text">
		  		   	  	<h4>Lorem ipsum</h4>
		  		   	  	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
		  		   	  </div>
		  		   	<div class="clearfix"> </div>
	  		   	  </div>
	  		   </div>
	  		   <div class="col-md-6 features-right wow bounceInRight" data-wow-delay="0.3s">
	  		   	 <div class="feature-grids">
		  		   	  <div class="fea-img">
		  		   	  	<img src="images/fe3.png" alt="">
		  		   	  </div>
		  		   	  <div class="fea-text">
		  		   	  	<h4>Neque porro</h4>
		  		   	  	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
		  		   	  </div>
		  		   	<div class="clearfix"> </div>
	  		   	  </div>
	  		   	  <div class="feature-grids">
		  		   	  <div class="fea-img">
		  		   	  	<img src="images/fe4.png" alt="">
		  		   	  </div>
		  		   	  <div class="fea-text">
		  		   	  	<h4>Duis aute</h4>
		  		   	  	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
		  		   	  </div>
		  		   	<div class="clearfix"> </div>
	  		   	  </div>
	  		   </div>
	  		<div class="clearfix"> </div>
  		</div>
  	</div>
  </div>
</div>
<!--features end here-->
<!--visit places strat here-->
<div class="visit">
   <div class="container">
   	<div class="visit-main wow bounceInRight" data-wow-delay="0.3s">
   		  <div class="visit-top">
   		  	 <h3>Visit Place</h3>
			 <span class="lft-bar-visit"> </span>
			<span class="rit-bar-visit"> </span>
   		  </div>
   		  <div class="visit-bottom">
   		  	 <div class="col-md-4 visit-grid">
   		  	 	<div class="item-1 item-type-spin">
								<a class="item-hover swipebox" href="single.html"  data-title="Vigor">
										<div class="item-info">
										<div class="headline">
											Visit Place
											<div class="line"></div>
											<div class="date">February 29, 2016</div>
										</div>
									</div>
									<div class="mask"></div>
								</a>
							<div class="item-img">
							<img src="images/v1.jpg" class="img-responsive" alt="" />
							</div>
				</div>
   		  	 	<h4><a href="single.html">Temporibus autem</a></h4>
   		  	 	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</p>
   		  	    <div class="visit-blog">
				   <div class="visit-btn">
				      <a href="single.html">Read More</a>
				   </div>
				   <div class="visit-likes">
				    <a href="#"><span class="#">2k</span></a>
				   </div>
				  <div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="col-md-4 visit-grid">
   		  	 	<div class="item-1 item-type-spin">
								<a class="item-hover swipebox" href="single.html"  data-title="Vigor">
										<div class="item-info">
										<div class="headline">
											Visit Place
											<div class="line"></div>
											<div class="date">February 29, 2016</div>
										</div>
									</div>
									<div class="mask"></div>
								</a>
							<div class="item-img">
							<img src="images/v2.jpg" class="img-responsive" alt="" />
							</div>
				</div>
   		  	 	<h4><a href="single.html">Pleasure praising</a></h4>
   		  	 	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</p>
   		  	    <div class="visit-blog">
				   <div class="visit-btn">
				      <a href="single.html">Read More</a>
				   </div>
				   <div class="visit-likes">
				    <a href="#"><span class="#">2k</span></a>
				   </div>
				  <div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="col-md-4 visit-grid">
   		  	 	<div class="item-1  item-type-spin">
								<a class="item-hover swipebox" href="single.html"  data-title="Vigor">
										<div class="item-info">
										<div class="headline">
											Visit Place
											<div class="line"></div>
											<div class="date">February 29, 2016</div>
										</div>
									</div>
									<div class="mask"></div>
								</a>
							<div class="item-img">
							<img src="images/v3.jpg" class="img-responsive" alt="" />
							</div>
				</div>
   		  	 	<h4><a href="single.html">Temporibus autem</a></h4>
   		  	 	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.</p>
   		  	    <div class="visit-blog">
				   <div class="visit-btn">
				      <a href="single.html">Read More</a>
				   </div>
				   <div class="visit-likes">
				    <a href="#"><span class="#">2k</span></a>
				   </div>
				  <div class="clearfix"> </div>
				</div>
			 </div>
			<div class="clearfix"></div>
   		  </div>
   		<div class="clearfix"> </div>
   	</div>
   </div>
</div>
<!--visit places end here-->
<!---728x90--->
<!--footer start here-->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.182370726!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1431577187804"> </iframe>
  <div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grids  wow bounceIn" data-wow-delay="0.4s">
				<h4>Get in Touch</h4>
				<ul class="get-touch">
					<li><span class="share"> </span><a href="#">Tempor incididunt ut labore et dolore </a></li>
					<li><span class="email"> </span><a href="mailto:info@example.com">example@gmail.com</a> </li>
					<li><span class="phone"> </span>+613 1544 5578 </li>
				</ul>
			</div>
			<div class="col-md-4 ftr-grids  wow bounceIn" data-wow-delay="0.4s">
				<h4>Follow Us</h4>
				<ul class="mid-grid">
					<li><a href="#"><span class="tw"> </span></a></li>
					<li><a href="#"><span class="gmail"> </span></a> </li>
					<li><a href="#"><span class="inst"> </span></a> </li>
					<li><a href="#"><span class="pri"> </span></a> </li>
				</ul>
			</div>
			<div class="col-md-4 ftr-grids  wow bounceIn" data-wow-delay="0.4s">
				<h4>Popular Posts</h4>
				<div class="ftr-last">
				  <div class="ftr-month">
				     <h6>January</h6>
				  </div>
				  <div class="ftr-like">
				     <h6>3 likes</h6>
				  </div>
				  <div class="clearfix"> </div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</p>
				<div class="ftr-last">
				  <div class="ftr-month">
				     <h6>February</h6>
				  </div>
				  <div class="ftr-like">
				     <h6>5 likes</h6>
				  </div>
				  <div class="clearfix"> </div>
				</div>
				<p>Lorem ipsum dolor sit consectetur adipiscing eiusmod tempor</p>
				<div class="ftr-last">
				  <div class="ftr-month">
				     <h6>March</h6>
				  </div>
				  <div class="ftr-like">
				     <h6>2 likes</h6>
				  </div>
				  <div class="clearfix"> </div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</p>
				<div class="ftr-last">
				  <div class="ftr-month">
				     <h6>April</h6>
				  </div>
				  <div class="ftr-like">
				     <h6>7 likes</h6>
				  </div>
				  <div class="clearfix"> </div>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</p>
			</div>
		   <div class="clearfix"> </div>
		</div>
	</div>
  </div>
</div>
<!--footer end here-->
 <div class="copy-right wow bounceInLeft" data-wow-delay="0.3s">
	  <p> &copy; 2016 Tour. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
   </div>
</body>
</html>
