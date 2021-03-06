<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="<?php echo base_url()?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
  <!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">	
			<div class="header-top-in">			
				<div class="logo">
					<a href="home.php"><img src="<?php echo base_url()?>images/logo.png" alt=" " ></a>
				</div>
				<div class="header-in">
					<ul class="icon1 sub-icon1">
							<li  ><a href="wishlist.html">WISH LIST (0)</a> </li>
							<li  ><a href="account.html">  MY ACCOUNT</a></li>
							<li ><a href="#" > SHOPPING CART</a></li>
							<li > <a href="checkout.html" >CHECKOUT</a> </li>	
							<li><div class="cart">
									<a href="#" class="cart-in"> </a>
									<span> 0</span>
								</div>
								<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="<?php echo base_url()?>images/14.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="<?php echo base_url()?>images/15.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">$250.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="checkout.html">Check out</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
							</li>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>



           <?php

		   $this->load->view('nav');
		   ?>





		<div class="header-bottom-in">
		<div class="container">
		<div class="header-bottom-on">
			<p class="wel"><a href="#">Welcome visitor you can login or create an account.</a></p>
			<div class="header-can">
				<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>					
						<li><a href="#"><i class="skype"> </i></a></li>
					</ul>	
					<div class="down-top">		
						  <select class="in-drop">
							  <option value="Dollars" class="in-of">Dollars</option>
							  <option value="Euro" class="in-of">Euro</option>
							  <option value="Yen" class="in-of">Yen</option>
							</select>
					 </div>
					<div class="search">
						<form>
							<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
	
		<div class="container">
			<div class="products">
					<h2 class=" products-in">PRODUCTS</h2>
					<div class=" top-products">
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>	
								<div class="top-content">
									<h5><a href="<?php echo site_url('SingleController')?>">Popular belief</a></h5>
									<div class="white">
										<a href="<?php echo site_url('SingleController')?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img  src="<?php echo base_url()?>images/pic1.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5><a href="single.php" >Simply random</a></h5>
									<div class="white">
										<a href="<?php echo site_url('SingleController')?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>6</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic2.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5> <a href="single.php">Classical Latin</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>1</span><span>5</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic3.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5><a href="single.php">Standard chunk</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>4</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class=" top-products">
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic4.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5><a href="single.php">Simply random</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>5</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic5.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5><a href="single.php">Popular belief</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>5</span><span>5</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md ">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic6.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5> <a href="single.php">Classical Latin</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>3</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md ">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic7.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5><a href="single.php">Standard chunk</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>6</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="top-products">
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in" ><img src="<?php echo base_url()?>images/pic8.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>
								<div class="top-content">
									<h5> <a href="single.php">Classical Latin</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic9.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>	
								<div class="top-content">
									<h5><a href="single.php">Standard chunk</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>1</span><span>5</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic10.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>	
								<div class="top-content">
								<h5><a href="single.php">Simply random</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>4</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="<?php echo site_url('SingleController')?>" class="compare-in"><img src="<?php echo base_url()?>images/pic11.jpg" alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Wishlist</span>
								</div>
								</a>	
								<div class="top-content">
									<h5><a href="single.php">Popular belief</a></h5>
									<div class="white">
										<a href="single.php" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>9</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
			</div>
		</div>
		<!---->
		<div class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="col-md-4 footer-in">
						<h4><i> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="cross"> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="down"> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Site Map</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>My Account</h6>
						<ul>
							<li><a href="account.html">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Extras</h6>
						<ul>
							<li><a href="#">Brands</a></li>
							<li><a href="#">Gift Vouchers</a></li>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
</body>
</html>