
<?php  include ('conn.php');


$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='gallery'";
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



<!-- Project Page Section -->
    <div class="project-page-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
    	<div class="auto-container">
         
			
	 	<!-- Team Section Two -->
	<section class="team-section-two">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-18.png)"></div>
		<div class="pattern-layer-two" style="background-image:url(images/background/pattern-19.png)"></div>
		<div class="auto-container">
			<div class="sec-title-two centered">
				<div class="title">Our Gallery</div>
			 
			 
			</div>
			<div class="row clearfix">
			
			
			<?php $query = "SELECT * FROM gallery WHERE status='1' ORDER BY id DESC";
            $result = mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_assoc($result)) {
                $image = explode(",", $row['image']);
            ?>
				<!-- Team Block Two -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="<?=$site?>admin/uploads/gallery/<?php echo $image[0]; ?>" alt="" />
						</div>
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- End Team Section Two -->
	
		</div>
	</div>
	<!-- End Project Page Section -->
	



<?php
include"footer.php"
?>