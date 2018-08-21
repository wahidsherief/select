<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SELECT</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/blog-home.css" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	</head>
	<body>
	    <!-- Navigation -->
	    <nav class="navbar navbar-fixed-top d-md-none d-lg-none d-xl-none">
	      <div class="container">
	        <!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->
	        <button class="navbar-toggler" type="button" id='nav-click' aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <!-- <span class="navbar-toggler-icon"></span> -->
	          <i class="fa fa-bars"></i>
	        </button>
	        <!-- menu -->
	        <div id="menu" class="in dropdown-menu menu" aria-labelledby="navbarDropdown">
	            <a class="dropdown-item" href="#">Privacy Policy</a>
	            <div class="dropdown-divider menu-divider"></div>
	            <a class="dropdown-item" href="#">Product Hunt Page</a>
	            <div class="dropdown-divider menu-divider"></div>
	            <a class="dropdown-item" href="#">FB Page</a>
	            <div class="dropdown-divider menu-divider"></div>
	            <a class="dropdown-item" href="#">F&Q</a>
	            <div class="dropdown-divider menu-divider"></div>
	            <a class="dropdown-item" href="#">Terms of Service</a>
	            <div class="dropdown-divider menu-divider"></div>
	            <a class="dropdown-item" href="#">SELECT Principles</a>
	            <div class="dropdown-divider menu-divider"></div>
	            <a class="dropdown-item" href="#">Press Kit</a>
	            <div class="dropdown-divider menu-divider"></div>
	        </div>
	    </nav>

	    <!-- Page Content -->
	    <div class="container">
	  		<div class="row">
	            <!-- Left Content Column -->
            	
				<!-- dont show in mobile; Show in laptop -->
    			<div class="d-none d-lg-block desktop-view col-lg-8 col-md-12 col-sm-12 col-xs-12 align-self-center">
	                <div class="logo-container d-flex justify-content-center">
	                    <img class='logo-img' src="img/logo.png" alt="">
	                </div>
	                
                    <div class="d-flex justify-content-center">
                        <h4>SELECT</h4>
                    </div>

                    <div class="d-flex justify-content-center">
                        <h5>where you don't see things like these 👉</h5> 
                    </div>

                    <div class="cta-btn d-flex justify-content-center">
                        <button type="button" class="btn btn-dark btn-lg">Get SELECT</button>
                    </div>

					<footer class="lg-screen-footer">
						<p class="fg-white ng-binding">
							SELECT 2018|
							<a href="/terms">Terms of Service</a>|
							<a href="/privacy">Privacy Policy</a>| 
							<a href="/principles">SELECT Principles</a>|
							<a href="/faq">FAQ</a>|
							<a href="mailto:support@select.id" class="ng-binding">Contact us</a>|
							<a href="http://cdn3.selectdc.net/select-website/Select-Press-Kit.v1.zip">Press Kit</a>
						</p>
					</footer>
				</div>
					
                <!-- dont show in laptop; show in mobile -->
                <div class="d-lg-none d-xl-none col-lg-8 col-md-12 col-sm-12 col-xs-12 align-self-center">
                	<div class="logo-container d-flex justify-content-center">
	                    <img class='logo-img' src="img/logo.png" alt="">
	                </div>

                    <div class="cta-btn d-flex justify-content-center">
                        <button type="button" class="btn btn-dark btn-lg">Get SELECT</button>
                    </div>
                    <div class="mobile-content">
                        <div class="d-flex justify-content-center">
                            <h4>SELECT</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h5>where you don't see things like these 👇</h5> 
                        </div>
                    </div>
                </div>

	            <!-- Right Content Column -->
	            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center">
	            	<div class="row">
		                <div class="panel-bottom-shadow"></div>
		            	<div class="panel-container">
			                <div class="panel-wrap">
							<?php
								$files = glob("img/cards/*.*");
								$j=1;
								for ($i=0; $i<count($files); $i++)
								{
									$image = $files[$i];
									$supported_file = array(
										'gif',
										'jpg',
										'jpeg',
										'png'
									);

									$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
									if (in_array($ext, $supported_file)) {
							?>
			                	<div class="panel" id='slider_<?php echo $j++; ?>'>
				                    <div class="panel-body">
				                    	<div>
				                            <div class="post-image">
				                            <?php 
												echo "<img src=".$image." style='width: 100%;' />";
												} else {
												continue;
												}
											?>
				                            </div>
				                            <!-- <div class="status-container col-12">
				                                <a href="#" title="Like this"><i class="fa fa-comment-o"></i></a>
				                                <a href="#" title="Like this"><i class="fa fa-refresh"></i></a>
				                                <a href="#" title="Like this"><i class="fa fa-heart-o"></i></a>
				                                <a href="#" title="Like this"><i class="fa fa-upload"></i></a>
				                                <a href="#" title="Like this"><i class="fa fa-signal"></i></a>
				                            </div> -->
				                      </div>
				                    </div>
				                </div>
				            <?php } ?>
				            </div>
		    			</div>
	    			</div>
	        	</div>

			    <!-- Page Footer -->
				<footer class="d-lg-none d-xl-none sm-screen-footer"">
					<p class="fg-white ng-binding">
						SELECT 2018|
						<a href="/terms">Terms of Service</a>|
						<a href="/privacy">Privacy Policy</a>| 
						<a href="/principles">SELECT Principles</a>|
						<a href="/faq">FAQ</a>|
						<a href="mailto:support@select.id" class="ng-binding">Contact us</a>|
						<a href="http://cdn3.selectdc.net/select-website/Select-Press-Kit.v1.zip">Press Kit</a>
					</p>
				</footer>
	        </div>
	    </div>

	    <!-- Bootstrap core JavaScript -->
	    <script src="vendor/jquery/jquery.min.js"></script>
	    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	    <!--  JavaScript -->
	    <script type="text/javascript">
	        $(document).ready(function () {

	        	// click menu button to show the menulist
	            $('#nav-click').on('click', function (e) {
	                $('#menu').fadeToggle().attr("menuvisible", 1);
	                $("body > :not(:has(#menu))").toggleClass('do-fade');
	                e.stopPropagation(); 
	            });

	            // click anywhere to disappear the menu
	            $('html').click(function(e) {
	            	var attr = $('#menu').attr('menuvisible');
					if (typeof attr !== typeof undefined && attr !== false) {
		                $('#menu').fadeOut(); 
		                $("body > :not(:has(#menu))").toggleClass('do-fade');
		                $('#menu').removeAttr('menuvisible');
	            	}
	            });

				var flag = true; 
				var elems;

				// call function on page load
				window.addEventListener("load", functionCall); 

				// select elements and pass as parameter into animateItems function
				function functionCall() {
					var elems = document.querySelectorAll(".panel"); 
					animateItems(elems); 
				} 

				// slideup elements one by one from bottom to top
				// when all elements finish, append the first one to the bottom
				function animateItems(elems) {
					Array.from(elems).forEach((item,index) => { 
					if(flag){ 
						console.log("here"); 
						$('#slider_'+index).clone().appendTo(".panel-wrap"); 
					} 
					setTimeout(function() { 
						index+=1; 
						$('#slider_'+index).show().delay(2000).slideUp(); 
						if (index == elems.length) { 
							flag = false; 
							setTimeout(function() { 
								for(j=1;j<= elems.length;j++){ $('#slider_'+j).show()} 
								animateItems('.panel'); 
							},2500); 
						} 
					}, index*4000); 
					}) 
				}
		    });
	    </script>
  	</body>
</html>
