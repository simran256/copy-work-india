<?php  
include 'conn.php';

if (isset($_POST['search']) && $_POST['search'] != '') {
    $url = $_POST['search'];
    $prod = mysqli_query($conn, "SELECT * FROM cat_prod WHERE ct_pd_name LIKE '%$url%'"); 
} else {
    $prod = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id != '0'");   
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Copy Works India</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

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
	<section class="news-section-two">
		<div class="auto-container">
		    <div class="row">
		        <div class="col-md-4">
		            
		            <div class="news-block-two">
				<?php
				// Initialize a variable to track if items are found
				$items_found = false;

				// Fetch only one product
				if ($prod1 = mysqli_fetch_assoc($prod)) {
					$image = explode(",", $prod1['cat_pd_image']);
					$idn = $prod1['id'];
					$chek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id1='$idn'"));
					if ($chek > 0) {
						$link = $site . "projects-detail/" . $prod1['ct_pd_url'];
					} else {
						$link = $site . "projects-detail/" . $prod1['ct_pd_url'];  
					}

					// Display the product
					$items_found = true;
				?>
				<!-- News Block Two -->
				<div class="news-block-two">
					<div class="inner-box wow fadeInLeft">
						<div class="image">
							<a href="<?=$link?>"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$image[0]?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="<?=$link?>"><?=$prod1['ct_pd_name']?></a></h4>
							<a class="plus-icon flaticon-plus" href="<?=$link?>"></a>
						</div>
					</div>
				</div>
				<?php 
				}

				// If no items are found, display a message
				if (!$items_found) {
				?>
					<p>No items found.</p>
				<?php 
				} 
				?>
			</div>
		        </div>
		    </div>
			
		</div>
	</section>
	<!-- End Team Section Two -->

	</div>
</div>
<!-- End Project Page Section -->

<?php
include "footer.php";
?>
