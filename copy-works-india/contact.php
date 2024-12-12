
<?php  include 'conn.php';

$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='contact'";
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    // Sanitize input
    $name = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contact_form (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        // Send email to the user
        $userEmail="copyworksindia@gmail.com";
        $to = $userEmail;
        $subject = "Thank you for contacting us";
        $message = "Name:$name<br> Email:$email<br> Mobile:$phone<br>Subject:$subject<br>Message:$message ";
        $headers = "From: no-reply@copyworksindia.com";

        if (mail($to, $subject, $message, $headers)) {
            // Success message with SweetAlert
            echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Message Sent!",
                        text: "Your message has been successfully sent!",
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location = "contact.php";
                    });
                  </script>';
        } else {
            // Failure in email
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Email Failed!",
                        text: "There was an issue sending your email.",
                        confirmButtonText: "OK"
                    });
                  </script>';
        }
    } else {
        // Error handling
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "There was an error saving your data.",
                    confirmButtonText: "OK"
                });
              </script>';
    }

    $conn->close();
}
?>


<?php include 'header.php'; ?>
 <section class="page-title" style="background-image: url(images/background/9.jpg)">
        <div class="auto-container">
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>
			</ul>
			<h2>Contact Us</h2>
        </div>
    </section>
    
    <!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title-three centered">
				<h2>Office Near You.</h2>
			</div>
			
			<div class="row clearfix">
			
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-message"></span>
							<strong>Email Address</strong>
							Sent mail asap anytime
						</div>
						copyworksindia@gmail.com
					</div>
				</div>
				
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-call"></span>
							<strong>Phone Number</strong>
							call us asap anytime
						</div>
						+91-9810040104
					</div>
				</div>
				
				<!-- Location Block -->
				<div class="location-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<span class="icon flaticon-home"></span>
							<strong>Office Address</strong>
							Sent mail asap anytime
						</div>
					Shop No.107, SCO Huda Market, Gurgaon, Sector32, Gurgaon, Haryana, 122002
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Location Section -->
	
	<!-- Map Column -->
	<section class="map-section">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Map Outer -->
				<div class="map-outer">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4353.192403191645!2d77.0446906!3d28.445374699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d191b935f6aeb%3A0xee300791d564d105!2sCopy%20Works%20India!5e1!3m2!1sen!2sin!4v1726737102795!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Column -->
	<scetion >
	<!-- Contact Form Section -->
    <div  class="contact-form-section" id="enquiry">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title alternate centered">
				<div class="title">Submit Question</div>
				<h2>Needs Help? Let’s Get in Touch</h2>
			</div>
			<div class="inner-container">
				
				<!-- Contact Form -->
				<div class="contact-form">
					
					<!-- Contact Form -->
					<form method="post" action="" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Name" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Your Email" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Your Phone" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="subject" placeholder="Your Subject" required>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="Message"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<button type="submit" name="sunmitForm" class="theme-btn btn-style-eight clearfix">
									<span class="btn-wrap">
										<span class="text-one">Send Message</span>
										<span class="text-two">Send Message</span>
									</span>
								</button>
							</div>
							
						</div>
					</form>
						
				</div>
				<!--End Contact Form -->
				
			</div>
		</div>
	</div>
	<!-- End Contact Form Section -->
	
    </section>
    
    
    <?php
    include"footer.php"
    ?>