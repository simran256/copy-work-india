
<?php include('conn.php');


$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='home'";
$headerResult = mysqli_query($conn, $headerQuery);

if ($headerResult && mysqli_num_rows($headerResult) > 0) {
    // Fetch data as an associative array
    $header1 = mysqli_fetch_assoc($headerResult);
}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<title><?php echo $header1['page_title'];?></title>
    <meta name="author" content="<?php echo $theme['company_name'];?>">
    <meta name="description" content="<?php echo $header1['message'];?>">
    <link rel="canonical" href="<?php echo $header1['page_keyword'];?>" >
<!-- Stylesheets -->
<link href="<?=$site?>css/bootstrap.css" rel="stylesheet">
<link href="<?=$site?>css/style.css" rel="stylesheet">
<link href="<?=$site?>css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/fav-icon.jpg" type="image/x-icon">
<link rel="icon" href="images/fav-icon.jpg" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
<!--<div class="cursor"></div>-->

<!-- PageWrapper -->
<div class="page-wrapper">

<!-- scrollToTop start -->
 <!--   <div class="progress-wrap active-progress">-->
	<!--	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">-->
	<!--	<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>-->
	<!--	</svg>-->
	<!--</div>-->
<!-- scrollToTop end -->

<?php include 'header.php'; ?>
	
	<!-- Main Slider Two -->
    <section class="main-slider-two">
		<div class="main-slider-carousel owl-theme owl-carousel">
		
			<!-- Slide 01 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-1.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 01 -->
			
			<!-- Slide 02 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-2.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 02 -->
			
			<!-- Slide 03 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-3.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 03 -->
			
			<!-- Slide 03 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-4.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 03 -->
			<!-- Slide 03 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-5.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 03 -->
			<!-- Slide 03 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-6.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 03 -->
			<!-- Slide 03 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(images/main-slider/image-7.jpg)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Welcome To <span>Copy Works India</span></div>
							<h1>We’re Best Providing <br><span> Photocopier Machines</span> <br><span class="sli">for Sale and Rental</span>   </h1>
							<div class="text"> </div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
										<a href="about.php" class="theme-btn btn-style-three clearfix">
											<span class="btn-wrap">
												<span class="text-one">Explore More</span>
												<span class="text-two">Explore More</span>
											</span>
											<span class="plus flaticon-plus"></span>
										</a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											Call Us Now
											<strong>+91-9810040104</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 03 -->
		</div>
		
		<!-- Social Box -->
		<ul class="social-box">
			<li><a href="#" class="fa fa-facebook"> <span>Facebook</span></a></li>
			<li><a href="#" class="fa fa-twitter"> <span>Twitter</span></a></li>
			<li><a href="#" class="fa fa-instagram"> <span>Instagram</span></a></li>
		</ul>
		<!-- End Social Box -->
		<div class="pattern-layer" style="background-image:url(images/main-slider/shape-layer.png)"></div>
    </section>
    <!-- End Main Slider Section -->
	
	<!-- About Section Two -->
	<section class="about-section-two" style="background-image:url(images/background/pattern-14.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="year-box">
							<h2><span class="odometer" data-count="24"></span>+</h2>
							Years
						</div>
						<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/resource/about-1.jpg" alt="" />
						</div>
						<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/resource/about-2.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Company About</div>
							<h2>Welcome To <br> Copy Works India</h2>
							<div class="text">Established in the year 1999 we “Copy Works India.” are engaged as the  trader of Branded Printer, Photocopier Machine, Rental Service etc. The products are highly acknowledged. They are known to make use of the best quality components, coupled with the latest technology.<br>

We have an advanced infrastructural base that is equipped with all the essential amenities. Thus, we aim to understand the diverse needs of our clients and offer suitable range of products. Being a client-centric firm, our main is to accomplish the customers’ needs very competently.<br>

Under the guidance of our mentor “Mr. Parveen Dwivedi. ” we have become the best option of our clients. Our mentor has years of understanding of this arena.</div>
						</div>
						<div class="row clearfix">
							
						 
						 
							
						</div>
						
						<!-- Button Box -->
						<div class="button-box">
							<a href="about.php" class="theme-btn btn-style-four clearfix">
								<span class="btn-wrap">
									<span class="text-one">More About</span>
									<span class="text-two">More About</span>
								</span>
								<span class="plus flaticon-plus"></span>
							</a>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Two -->
	
	<!-- CTA Section -->
	<section class="cta-section-one">
		<div class="auto-container">
			<div class="inner-container" style="background-image:url(images/background/pattern-15.png)">
				<div class="row clearfix">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<h2>GETS AN QUATATION OF PHOTOCOPIER <br> MACHINE FOR SALE AND RENTAL</h2>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="play-box">
							<a href="#" class="lightbox-video play-button">
								<span class="fa fa-phone" style="font-size: 30px; margin-left: -3px; margin-top: 3px;"><i class="ripple"></i></span>
							</a>
							Call us Now
							<strong>+91-9810040104</strong>
						</div>
						
						<!-- Button Box -->
						<div class="button-box">
							<a href="contact.php" class="theme-btn btn-style-four clearfix">
								<span class="btn-wrap">
									<span class="text-one">Contact Now</span>
									<span class="text-two">Contact Now</span>
								</span>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->
	
	<!-- Services Section Three -->
	<section class="service-section-three" style="background-image:url(images/background/5.jpg)">
		<div class="auto-container">
			
			<!-- Sec Title Two -->
			<div class="sec-title-two light centered">
				<div class="title">What We Do</div>
				<h2>We Provide Best Services</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block Three -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="color-layer">
							<span class="color-one"></span>
							<span class="color-two"></span>
							<span class="color-three"></span>
							<span class="color-four"></span>
						</div>
						<div class="icon-box">
							<span class="icon flaticon-maintenance"></span>
						</div>
						<h5><a href="#">Shop</a></h5>
						<div class="text"> </div>
						<a class="plus-icon flaticon-plus" href="#"></a>
					</div>
				</div>
				
				<!-- Service Block Three -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="color-layer">
							<span class="color-one"></span>
							<span class="color-two"></span>
							<span class="color-three"></span>
							<span class="color-four"></span>
						</div>
						<div class="icon-box">
							<span class="icon flaticon-lightning"></span>
						</div>
						<h5><a href="#">Managed Print Services</a></h5>
						<div class="text">  </div>
						<a class="plus-icon flaticon-plus" href="#"></a>
					</div>
				</div>
				
				<!-- Service Block Three -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="color-layer">
							<span class="color-one"></span>
							<span class="color-two"></span>
							<span class="color-three"></span>
							<span class="color-four"></span>
						</div>
						<div class="icon-box">
							<span class="icon flaticon-bionic-eye"></span>
						</div>
						<h5><a href="#">Printer Rental Services</a></h5>
						<div class="text"> </div>
						<a class="plus-icon flaticon-plus" href="#"></a>
					</div>
				</div>
				
				<!-- Service Block Three -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="color-layer">
							<span class="color-one"></span>
							<span class="color-two"></span>
							<span class="color-three"></span>
							<span class="color-four"></span>
						</div>
						<div class="icon-box">
							<span class="icon flaticon-maintenance"></span>
						</div>
						<h5><a href="#">Photocopier Rental</a></h5>
						<div class="text"> </div>
						<a class="plus-icon flaticon-plus" href="#"></a>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section Three -->
	
	<!-- News Section Two -->
	<section class="news-section-two">
		<div class="auto-container">
			<div class="sec-title-two">
				<div class="title">Our Products</div>
				<h2>Latest Products</h2>
			</div>
			<div class="three-item-carousel-two owl-carousel owl-theme">
			
			 <?php
                        $query = "SELECT * FROM cat_prod WHERE status='1' ORDER BY id DESC";
                        $result = mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $image = explode(",", $row['cat_pd_image']);
                            ?>
				<!-- News Block Two -->
				<div class="news-block-two">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="<?=$site?>projects-detail/<?=$row['ct_pd_url']?>"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$image['0']?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<!--<div class="post-date">10 May, 2024</div>-->
							<h4><a href="<?=$site?>projects-detail/<?=$row['ct_pd_url']?>"><?=$row['ct_pd_name']?></a></h4>
							<a class="plus-icon flaticon-plus" href="<?=$site?>projects-detail/<?=$row['ct_pd_url']?>"></a>
						</div>
					</div>
				</div>
				
				<?php } ?>
				
				
				
			</div>
		</div>
	</section>
	<!-- End News Section Two -->
	
	<!-- Team Section Two -->
	<section class="team-section-two">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-18.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-19.png)"></div>
		<div class="auto-container">
			<div class="sec-title-two centered">
				<div class="title">Our Gallery</div>
			
				<div class="text"> </div>
			</div>
			<div class="row clearfix">
			<?php
                        $query = "SELECT * FROM gallery WHERE status='1' ORDER BY id DESC limit 8";
                        $result = mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            $image = explode(",", $row['image']);
                            ?>
				<!-- Team Block Two -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="<?=$site?>admin/uploads/gallery/<?=$image['0']?>" alt="" />
						</div>
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- End Team Section Two -->
	
	<!-- Project Section Two -->
	<section class="project-section-two">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Why Choose us?</div>
							<h2>Copy Works India</h2>
						</div>
						<h3>We create packages for different businesses</h3>
						<div class="text"> </div>
						<div class="button-box">
							<a href="#" class="theme-btn btn-style-three clearfix">
								<span class="btn-wrap">
									<span class="text-one">More About</span>
									<span class="text-two">More About</span>
								</span>
								<span class="plus flaticon-plus"></span>
							</a>
						</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="single-item-carousel owl-carousel owl-theme">
							<div class="slide">
								<div class="image">
									<img src="images/gallery/2.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Project Section Two -->
	
 
	<!-- End Faq Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section" style="background-image:url(images/background/6.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Customer feedback</div>
							<h2>Our Happy Customers <br> Say About </h2>
						</div>
						<div class="row clearfix">
						
							<!-- Counter Column -->
							<div class="counter-block col-lg-3 col-md-3 col-sm-12">
								<div class="inner-block">
									<div class="icon-box">
										<span class="icon flaticon-edit"></span>
									</div>
									<h3><span class="odometer" data-count="525"></span>+</h3>
									<div class="counter-text">Completed Project</div>
								</div>
							</div>
							
							<!-- Counter Column -->
							<div class="counter-block col-lg-3 col-md-3 col-sm-12">
								<div class="inner-block">
									<div class="icon-box">
										<span class="icon flaticon-group"></span>
									</div>
									<h3><span class="odometer" data-count="18"></span>+</h3>
									<div class="counter-text">Expert Team</div>
								</div>
							</div>
							
							<!-- Counter Column -->
							<div class="counter-block col-lg-3 col-md-3 col-sm-12">
								<div class="inner-block">
									<div class="icon-box">
										<span class="icon flaticon-megaphone-1"></span>
									</div>
									<h3><span class="odometer" data-count="50"></span>+</h3>
									<div class="counter-text">Running Project</div>
								</div>
							</div>
							
							<!-- Counter Column -->
							<div class="counter-block col-lg-3 col-md-3 col-sm-12">
								<div class="inner-block">
									<div class="icon-box">
										<span class="icon flaticon-medal"></span>
									</div>
									<h3><span class="odometer" data-count="10"></span>+</h3>
									<div class="counter-text">Wining Awards</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	
	
	<!-- Info Section -->
	<section class="info-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="clearfix">
				
					<!-- Info Block -->
					<div class="info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon flaticon-headphones-1"></div>
								<strong>24/7 Clients Support</strong>
								<div class="text">Commodo viverra maecenas accumsan lacus vel facilisis.</div>
							</div>
						</div>
					</div>
					
					<!-- Info Block -->
					<div class="info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon flaticon-bulb"></div>
								<strong>Creative Ideas</strong>
								<div class="text">Commodo viverra maecenas accumsan lacus vel facilisis.</div>
							</div>
						</div>
					</div>
					
					<!-- Info Block -->
					<div class="info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon flaticon-security"></div>
								<strong>Super Safety</strong>
								<div class="text">Commodo viverra maecenas accumsan lacus vel facilisis.</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Info Section -->

<?php include 'footer.php'; ?>

</body>
</html>