<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <?php
		// include header.php
        require_once('./partials/head.php');
         ?>
    </head>
    <body>
	
		<!-- Preloader -->
 <!-- include the preloder  -->

 <?php

require_once './partials/preloader.php';

 ?>

 <!-- end Preloader  -->
  
		<!-- Header Area -->
		<header class="header" >
			 <!-- header start  -->
              <?php
              require_once './partials/header.php';
              ?>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Error Page -->
		<section class="error-page section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<!-- Error Inner -->
						<div class="error-inner">
							<h1>404<span>Oop's  sorry we can't find that page!</span></h1>
							<p>Aenean eget sollicitudin lorem, et pretium felis. Nullam euismod diam libero, sed dapibus leo laoreet ut. Suspendisse potenti. Phasellus urna lacus</p>
							<form class="search-form">
								<input placeholder="Search from Here" type="text">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Error Page -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
            <!-- //include 'footer.php'; -->
            <?php
            
            require_once './partials/footer.php';
            
            ?>
		</footer>
		<!--/ End Footer Area -->
		
        <!-- inclued the script code -->
        <?php
        
        require_once './partials/script.php';
        
        ?>
</html>