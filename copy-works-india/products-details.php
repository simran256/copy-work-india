
<?php include'conn.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$url = mysqli_real_escape_string($conn, $_GET['alias']);
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    
}



    
     
        ?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<title><?php echo $header1['ct_pd_title'];?></title>		
    <meta name="author" content="<?php echo $header1['ct_pd_sl'];?>">
    <meta name="description" content="<?php echo $header1['ct_pd_mt_ds'];?>">
    <link rel="canonical" href="<?php echo $header1['ct_pd_ky'];?>" >
    <meta name="author" content="Copy Works India">
    <meta name="robots" content="index, follow" />
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
<div class="cursor"></div>

<!-- PageWrapper -->
<div class="page-wrapper">

<!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
<!-- scrollToTop end -->

<?php include 'header.php'; ?>
 <section class="page-title" style="background-image: url(<?=$site?>images/background/9.jpg)">
        <div class="auto-container">
			<ul class="bread-crumb clearfix">
				<li><a href="#">Home</a></li>
				<li>Product Details</li>
			</ul>
			<h2><?php echo $header1['ct_pd_name']; ?></h2>
        </div>
    </section>
    
    	<!-- About Section Two -->
	<section class="about-section-two" style="background-image:url(<?=$site?>images/background/pattern-14.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
					 
						<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                           <?php
                            $images = explode(",", $header1['cat_pd_image']);
                            if (!empty($images[0])) { // Check if there is at least one image
                            ?>
                                <li><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?php echo $images[0]; ?>" alt="Product Image"/></li>
                            <?php
                            }
                            ?>
                            </div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
						
							<h2><?php echo $header1['ct_pd_name']; ?></h2>
								<div class="title">Product Details</div>
							<div class="text"><?php echo $header1['small_description']; ?></div>
							<div class="text mt-2"><?php echo $header1['long_description']; ?></div>

						</div>
						<div class="row clearfix">
							
							<!-- Feature Block Two -->
						 
							
							<!-- Feature Block Two -->
						 
							
						</div>
						
						<!-- Button Box -->
						<div class="button-box">
							<a href="contact.php" class="theme-btn btn-style-four clearfix">
								<span class="btn-wrap">
									<span class="text-one">Yes I'm Interested</span>
									<span class="text-two">Yes I'm Interested</span>
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
	



<?php include"footer.php" ?>