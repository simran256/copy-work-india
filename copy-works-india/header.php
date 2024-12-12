<!-- Main Header / Header Style Two -->
<header class="main-header header-style-two">
    	
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="<?=$site?>index.php"><img style="width: 180px;" src="<?=$site?>images/logo--1.png" alt="" title=""></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-customer-support-1"></span></div>
                            <ul>
                                <li>Mail <br> <a href="mailto:copyworksindia@gmail.com">copyworksindia@gmail.com</a></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-phone"></span></div>
                            <ul>
                                <li>Phone Number <br> <a href="tel:9810040104">+91-9810040104</a></li>
                            </ul>
                        </div>
						  <div class="upper-column info-box">
                            <img src="<?=$site?>images/right-logo.jpeg">
                        </div>
					 
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Header Upper -->
		
		<!-- Header Upper -->
        <div class="header-lower">
        	<div class="auto-container">
				<div class="inner-container clearfix">
            	
					<div class="nav-outer">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->    	
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="<?=$site?>index.php">Home</a></li>
									<li><a href="<?=$site?>about.php">About</a></li>
									<li class="dropdown">
                                    <a href="#">Products</a>
                                    <ul>
                                    <?php
                                    // Query to get the main categories
                                    $categories_query = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id = '0' AND status = '1' AND id NOT IN (373)");
                                
                                    while ($category = mysqli_fetch_assoc($categories_query)) {
                                        $category_id = $category['id'];
                                        ?>
                                        <li class="dropdown">
                                            <a href=""><?php echo $category['ct_pd_name']; ?></a> <ul>
                                                <?php
                                                $subcategories_query = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id = '$category_id' AND status = '1'");
                                
                                                while ($subcategory = mysqli_fetch_assoc($subcategories_query)) {
                                                    ?>
                                                    <li><a href="<?php echo $site?>projects-detail/<?php echo $subcategory['ct_pd_url']; ?>"><?php echo $subcategory['ct_pd_name']; ?></a></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                                </li>
									<li><a href="<?=$site?>gallery.php">Gallery</a></li>
									<li><a href="<?=$site?>contact.php#enquiry">Contact us</a></li>
										<li><a href="<?=$site?>images/Certifricate-of-Appreciation.pdf"><img src="<?=$site?>images/tt.png"></a></li>
								</ul>
							</div>
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
						    <div class="footer-style-two top-search">
							<div class="email-box-two search-field">
											<form method="post" action="<?=$site?>search.php">
												<div class="form-group">
													<input type="text" name="search" value="" placeholder="Search here.." required="">
													<button type="submit"><span class="icon flaticon-search"></span></button>
												</div>
											</form>
										</div>
										</div>
							<!-- Btn Box -->
							<!--<div class="btn-box">-->
							<!--	<a href="<?=$site?>contact.php" class="theme-btn btn-style-two clearfix">-->
							<!--		<span class="btn-wrap">-->
							<!--			<span class="text-one">Get A Quote</span>-->
							<!--			<span class="text-two">Get A Quote</span>-->
							<!--		</span>-->
							<!--		<span class="plus flaticon-plus"></span>-->
							<!--	</a>-->
							<!--</div>-->
							
						</div>
					</div>
					
				</div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img style="width:150px;" src="<?=$site?>images/logo--1.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
						
                    </nav><!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-close"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img style="width:150px;"  src="<?=$site?>images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->