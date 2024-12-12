
<?php  include ('conn.php');

$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='about'";
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
<link href="<?$site?>css/bootstrap.css" rel="stylesheet">
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


<?php include 'header.php'; ?>

<section class="page-title" style="background-image: url(<?=$site?>images/background/9.jpg)">
        <div class="auto-container">
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>About Us</li>
			</ul>
			<h2>About Us</h2>
        </div>
    </section>
    
    	<section class="about-section-two" style="background-image:url(images/background/pattern-14.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<!--<div class="image-column col-lg-6 col-md-12 col-sm-12">-->
				<!--	<div class="inner-column">-->
				<!--		<div class="year-box">-->
				<!--			<h2><span class="odometer" data-count="23"></span>+</h2>-->
				<!--			Years-->
				<!--		</div>-->
				<!--		<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">-->
				<!--			<img src="images/resource/about-1.jpg" alt="" />-->
				<!--		</div>-->
				<!--		<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">-->
				<!--			<img src="images/resource/about-2.jpg" alt="" />-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Company About</div>
							<h2>Welcome To  Copy Works India</h2>
							<div class="text">Established in the year 1999 we “Copy Works India.” are engaged as the  trader of Branded Printer, Photocopier Machine, Rental Service etc. The products are highly acknowledged. They are known to make use of the best quality components, coupled with the latest technology.<br>

We have an advanced infrastructural base that is equipped with all the essential amenities. Thus, we aim to understand the diverse needs of our clients and offer suitable range of products. Being a client-centric firm, our main is to accomplish the customers’ needs very competently.<br>

Under the guidance of our mentor “Mr. Parveen Dwivedi. ” we have become the best option of our clients. Our mentor has years of understanding of this arena.</div>
	<div class="text">Copy Works India is the leading printer and photocopy machines rental service provider in India. We have been providing our services to corporates, companies, enterprises and businesses since 1999. The company was established in 1 Jan, 1999 and had been providing service ever since.</div> 

	<div class="text">We deal in sales and rental services of photocopier machines, printers, CCTV Camera’s, job work and computer peripherals which will make your working environment user-friendly and cost-effective. We are the premium printer/copier rental service providers who are based in Gurugram. We have over 24 
years of experience, when it comes to leasing/buying/renting. Our main focus is on cost saving and fulfilling the demands of the corporates and retail sector. </div>

	<div class="text">Copy Works India is a leading company that provides copier machine rental, printers on rent, MFP on 
lease, printing job work, CCTV installation, anti-virus, consumables, computer peripherals and scanners. 
Our well-trained engineering team provides the best service to our clients 24*7. We are dedicated to 
serving our customer’s printing requirement at minimal cost with no capital investment. The service 
offers a variety of devices, which are carefully maintained. These can be availed for a cheap and 
reasonable rate. Plus, all rental rates are flexible, based on your requirement & need, hence Copy Works 
India (CWI) is inviting everyone, to avail & experience our world class services.</div>
<div class="why-con">
<h4 class="mt-4">WHY CHOOSE COPY WORKS INDIA</h4>
</div>
<ul class="aboout-list">
     <li><i>> 50+ Valuable client base</i></li>
    <li><i>> Easy Documentation & Processing</i></li>
      <li><i>> Reliable customer service support </i></li> 
      <li><i>> Market leadership for 23+ years </i></li> 
      <li><i>> Complete print rental solution </i></li>
      <li><i>> Free delivery & Installation </i></li>
      <li><i>> Free maintenance & service</i></li>
</ul>
						</div>
						
					
					</div>
				</div>
				 <div class="col-lg-6 col-md-6 col-sm-12">
					    <div class="why-con mt-1">
					        <h4>OUR MISSION </h4>
					        <ul>
					            <li>We aim to be a one point solution for all your MPS (Managed Printing Services) requirements.</li>
					            <li>Our mission is to bring more efficiency in the printer MPS business by delivering more rental 
products within the minimum time .</li>
					             <li>Our ambition is to build a team of professionals with an immensely positive attitude. We are on 
a mission to build a team in which each member respects the other .</li> 
					             <li>We are committed to building an environment where every member of the team shares the 
accountability of the duties assigned to him .</li>
					             <li>We aim to push the standards of customized rental Managed Printing Services market through 
our professionalism .</li>
					              <li>We are on a mission to deliver the best printers, photocopiers & Managed Printing Services 
which connect you with the latest technology. </li>
					        </ul>
					    </div>
					    
					    
					</div>
			      <div class="col-lg-6 col-md-6 col-sm-12">
					    <div class="why-con mt-1">
					        <h4>OUR VISION </h4>
					        <ul>
					            <li>Our goal is to set a benchmark of excellence so that we exceed your expectations of Managed 
Print Services.</li>
					            <li>We envision ourselves to be a trusted partner in the journey of your growth.</li>
					             <li>Our ambition is to spend each and every second of our day to be the most bankable rental 
printer, rental photocopier providers .</li> 
					             <li>We are committed to establishing ourselves as the organization with extraordinary skills to help 
your business reach new heights.</li>
					             <li>We aspire to pave our path on our core values of mutual respect and co-operation .</li>
					              <li>We are determined to gain the trust of millions of clients all over the nation. </li>
					        </ul>
					    </div>
					    
					    
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
					    <div class="why-con mt-1">
					        <h4>COMPANY OWNER, ADDRESS, HISTORY AND CONTACT INFORMATION  </h4><br>
					        <h5>Praveen Dwivedi</h5>
					        <h6><i>Owner</i> </h6>
					        <h5>COPY WORKS INDIA</h5>
					       <table class="table mt-3">

  <tbody>
    <tr>
      <td>Date Established: </td>
      <td>1st Jan 1999</td>
    </tr>
   
   <tr>
      <td>Line of Business:  </td>
      <td>Printer & Copier Sale & Services </td>
    </tr>
    <tr>
      <td>Type of Business:</td>
      <td>Sole Proprietorship </td>
    </tr>
    <tr>
      <td>GSTIN: </td>
      <td>06AGUPD4151D1ZM </td>
    </tr>
    <tr>
      <td>Website : </td>
      <td><a href="https://copyworksindia.com/">www.copyworksindia.com</a></td>
    </tr>
    <tr>
      <td>Telephone:  </td>
      <td>0124-4033845</td>
    </tr>
   
    <tr>
      <td>Mobile:  </td>
      <td>+91-9810040104 </td>
    </tr>
     <tr>
      <td>Facebook:  </td>
      <td><a href="https://www.facebook.com/copyworksindia" target="_blank">www.facebook.com/copyworksindia</a></td>
    </tr>
    
  </tbody>
</table>
					    </div>
					    
					    
					</div>
					<div class="content-column col-lg-12 col-md-12 col-sm-12">
				         <div class="why-con mt-1">
					        <h4>Our Clients  </h4>
					        </div>
					    </div>
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c1.png">   
					            
					        </div>
					    </div>
					     <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c2.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c3.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c4.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c5.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c6.png">   
					            
					        </div>
					    </div>
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c7.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c8.png">   
					            
					        </div>
					    </div>
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c9.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c10.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c11.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c12.png">   
					            
					        </div>
					    </div>
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c13.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c14.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c15.png">   
					            
					        </div>
					    </div> <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c16.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c17.png">   
					            
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c18.png">   
					            
					        </div>
					    </div>
					     <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c19.png">   
					            
					        </div>
					    </div>
					     <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/c20.png">   
					            
					        </div>
					    </div>
					    
					      <div class="content-column col-lg-12 col-md-12 col-sm-12 ">
				         <div class="why-con mt-5">
					        <h4>RENTAL SERVICES  </h4>
					        </div>
					        <h5>EQUIPMENTS & SERVICES, WE CAN PROVIDE</h5>
					    </div>
					    <div class="col-md-3 col-3">
					        <div class="logo_img">
					         <img src="images/s1.png"> 
					         <h4>PRINTERS</h4>
					        </div>
					    </div>
					     <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s2.png">  
					         <h4>SCANNERS</h4>
					        </div>
					    </div> 
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s3.png">   
					         <h4>CONSUMABLE</h4>
					        </div>
					    </div>
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s4.png"> 
					         <h4>BARCODE PRINTERS </h4>
					        </div>
					    </div> 
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s5.png"> 
					         <h4>UC FOR VIDEO CONFERINCING </h4>
					        </div>
					    </div>
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s6.png"> 
					         <h4>JOB WORK </h4>
					        </div>
					    </div> 
					     <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s7.png"> 
					         <h4>ANTI VIRUS </h4>
					        </div>
					    </div> 
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s8.png">   
					         <h4>DOCUMENT MANAGEMENT SYSTEM </h4>
					        </div>
					    </div>  
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s9.png">  
					         <h4>MANAGED PRINT SERVICES </h4>
					        </div>
					    </div> 
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s10.png">   
					         <h4>Computer</h4>
					        </div>
					    </div> 
					    <div class="col-md-3 ">
					        <div class="logo_img">
					         <img src="images/s11.png"> 
					         <h4>PRINTING Machine </h4>
					        </div>
					    </div> 
					    <div class="content-column col-lg-12 col-md-12 col-sm-12 ">
				         <div class="why-con mt-5">
					        <h4>Our Brands  </h4>
					        </div>
					    </div>
					     <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/b1.png"> 
					        
					        </div>
					    </div> 
					    <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/b2.png"> 
					        
					        </div>
					    </div> <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/b3.png"> 
					        
					        </div>
					    </div> <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/b4.png"> 
					        
					        </div>
					    </div> <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/b5.png"> 
					        
					        </div>
					    </div> <div class="col-md-2 col-6">
					        <div class="logo_img">
					         <img src="images/b6.png"> 
					        
					        </div>
					    </div> 
					    
					
					    <div class="content-column col-lg-12 col-md-12 col-sm-12">
					    <div class="why-con mt-5">
					        <h4>MANAGED PRINT SERVICES@ COPY WORKS INDIA  </h4>
					        <p>Managed Print Services are services offered by print providers to deal with your printing devices, 
including scanners, faxes and copiers. They empower associations to improve their proficiency, 
profitability and data security, normally by checking use; supplanting consumables and meeting the 
association’s printing needs. </p>
<p>The highlights of Managed Print Services differ by service providers; however, they can offer a 
significant number of the accompanying advantages to associations whether huge and small. You can 
peruse increasingly around a few key advantages of Managed Print Services beneath: </p>
					        <ul>
					            <li> Save Time And Improve Productivity </li>
					            <li>Helps To Reduce Expenses </li>
					             <li>Less Capital Consumption And Improve Income</li> 
					             <li> Reduce Your Environmental Footprint </li>
					             <li>Better Return On Investment</li>
					              <li>Improve Your Data Security  </li>
					        </ul>
					    </div>
					    
					    
					</div>
					 <div class="content-column col-lg-12 col-md-12 col-sm-12">
					    <div class="why-con mt-1 mb-3">
					        <h4>HOW DOES IT WORK </h4>
					        <p><b>1. Assessment:</b>Our first step of MPS is to review and analyze organization current print environment. This involves creating a list of printers at all locations, monthly usage 
                                on these printers and printing cost. This understanding is crucial in providing you a customized solution.</p>

					       <p><b>2. Optimization: </b>We will look for ways to consolidate your printers, replacing many large, old laser 
printers, single function printers with smaller number of newer, faster devices and 
multi-function printers with all the necessary functions built in. This cuts down the 
size of your printer fleet and make in more efficient without any compromise on 
productivity.</p>
                                <p><b>3. Proactive Solutions:</b>Mostly printer problems are addressed once they have arisen and created havoc. 
Using MPS empowers you to be proactive and avoid problems instead of working 
on them later.</p>
                                <p><b>4. Real Time Monitoring:</b>We utilize software to keep an eye on each of your printer. When there is an 
performance issue our team is notified automatically and we can Rectify the issue 
instantly. This also helps in monitoring the toner status so that we can replenish 
the ink before you get out of it.</p>
                                <p><b>5. Cost Savings: </b>Other than managing the printer fleet, managed print solution also reduce the 
overall TCO (Total cost of ownership). Our team aims to reduce the amount of 
prints and number of machines you used.</p>
<p>This also includes educating users on making use of high quality draft modes, 
duplex printing and other measures that can cut down on the amount of ink 
used. With our solutions, corporate have saved lakhs of rupees over years. </p>
					    </div>
					    
					    
					</div>
					    
			</div>
		
		</div>
	</section>
	<!-- End About Section Two -->
	



<?php include"footer.php" ?>