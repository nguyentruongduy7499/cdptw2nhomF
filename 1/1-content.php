<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
	<header class="scroll">
		<div class="container con">
			<div class="row bao">
				<div class="col-md-12 cot">
					<nav class="navbar navbar-default nav" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div id="logo">
									<h1>
										<a class="navbar-brand" href="#">
											<img src="../1/image/logo-dark.png" alt="" class="logo1">
										</a>
									</h1>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="item">
										<a class="home" href="#">Home</a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>
									<li class="item">
										<a  href="#">Page</a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>
									<li class="item">
										<a  href="#">Shop</a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>									
									<li class="item">
										<a  href="#">Blog</a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>
									<li class="item">
										<a  href="#">Lookbook</a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>
									<li class="item">
										<a  href="#">Elements</a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>
									<li class="item">
										<a  href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
										<ul class="sub-menu">
											<li class="sub-item"><a href="#">Wedding Planer</a></li>
										</ul>
									</li>
									<li>
								<div id="myOverlay" class="overlay">
									<span class="closebtn" id="dong"  title="Close Overlay" style="color: black;">×</span>
									<div class="overlay-content">
										<form action="/action_page.php">
											<input type="text" placeholder="Search for ..." name="search">
											<button type="submit" id="cc"><i class="fa fa-search" aria-hidden="true"></i></button>
										</form>
									</div>
								</div>
								<a class="openBtn" id="mo" ><i class="fa fa-search" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><img src="image/sidearea-opener.png" width="50%" id="dai">
									<div id="myNav" class="overlay-v1">
										<a href="javascript:void(0)" class="closebtn" id="opener">&times;</a>
										<div class="overlay-content-v1">
											<h1 class="welcome"> Welcome  </h1>
											<h4 class="lorem">.Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h4>
											<h4 class="ae">aenean commodo</h4>
											<div class="hinhanh">
												<ul>
													<span class="trans">	
														<img class="hinh" src="image/1.jpg" alt="">
														<div class="middle">
															<div class="instagram">
																<i class=" fa fa-instagram"></i>
															</div>   
														</div>
													</span>
													<span class="trans">    
														<img class="hinh" src="image/2.jpg" alt="">
														<div class="middle">
															<div class="instagram">
																<i class="fa fa-instagram"></i>
															</div>   
														</div>
													</span>
													<span class="trans">    
														<img class="hinh" src="image/3.jpg" alt="">
														<div class="middle">
															<div class="instagram">
																<i class="fa fa-instagram"></i>
															</div>   
														</div>
													</span>
													<div class="top">
														<span class="trans">    
															<img class="hinh" src="image/4.jpg" alt="">
															<div class="middle">
																<div class="instagram">
																	<i class="fa fa-instagram"></i>
																</div>   
															</div>
														</span>
														<span class="trans">    
															<img class="hinh" src="image/5.jpg" alt="">
															<div class="middle">
																<div class="instagram">
																	<i class="fa fa-instagram"></i>
																</div>   
															</div>
														</span>
														<span class="trans">    
															<img class="hinh" src="image/6.jpg" alt="">
															<div class="middle">
																<div class="instagram">
																	<i class="fa fa-instagram"></i>
																</div>   
															</div>
														</span>
													</div>

												</ul>
											</div>
											<div class="titlefollow">
												<p> follow our awesomeness</p>
												<div class="icon">
													<i class="fa fa-twitter" aria-hidden="true"></i>
													<i class="fa fa-instagram" aria-hidden="true"></i>
													<i class="fa fa-facebook" aria-hidden="true"></i>
												</div>
											</div>
										</div>
									</div>
								</a>
							</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
				<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img class="slide" src="image/h3-slider1-background-img.jpg" alt="slide1" width="100%"></div>
					<div class="swiper-slide"><img class="slide" src="image/h3-slider2-background-img.jpg" alt="slide1" width="100%"></div>
					<div class="swiper-slide"><img class="slide" src="image/h3-slider3-background-img.jpg" alt="slide1" width="100%"></div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next" ></div>
				<div class="swiper-button-prev"></div>
				 <div class="swiper-counter"></div>
			</div>
</div>