<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <?php
		// include header.php
        require_once('./partials/head.php');
         ?>
    </head>
    <body>
	
		<!-- all contnt into the home pages  -->

        <?php  
        
        require_once './partials/home.php';
        
        ?>
		
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
    </body>
</html>