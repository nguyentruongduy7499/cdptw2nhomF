<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img class="slide" src="images/h3-slider1-background-img.jpg" alt="slide1" width="100%"></div>
			<div class="swiper-slide"><img class="slide" src="images/h3-slider2-background-img.jpg" alt="slide1" width="100%"></div>
			<div class="swiper-slide"><img class="slide" src="images/h3-slider3-background-img.jpg" alt="slide1" width="100%"></div>
		</div>
		<!-- Add Arrows -->
		<div class="swiper-button-next" >
			
		</div>
		<div class="swiper-button-prev"></div>
	</div>
	<header>
		<img class="logo" src="images/logo-dark.png" alt="logo">
		<nav id="menu">
			<ul class="nav__links">
				<li><a  class="home" href="#">Home</a></li>
				<li><a href="#">Projects</a>
				<ul class="sub-menu">
						<li><a href="#">WordPress</a></li>
						<li><a href="#">SEO</a></li>
						<li><a href="#">Hosting</a>
						</li>
					</ul></li>
				<li><a href="#">About</a>
				<ul class="sub-menu">
						<li><a href="#">WordPress</a></li>
						<li><a href="#">SEO</a></li>
						<li><a href="#">Hosting</a>
						</li>
					</ul></li>
				<li><a href="#">Projects</a>
				<ul class="sub-menu">
						<li><a href="#">WordPress</a></li>
						<li><a href="#">SEO</a></li>
						<li><a href="#">Hosting</a>
						</li>
					</ul></li>
				<li><a href="#">Tin tức</a>
					<ul class="sub-menu">
						<li><a href="#">WordPress</a></li>
						<li><a href="#">SEO</a></li>
						<li><a href="#">Hosting</a>
						</li>
					</ul>
				</li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">About</a></li>
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
				</li>
				<button class="openBtn" id="mo" ><i class="fa fa-search" aria-hidden="true"></i></button>
				<li><a href="#" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

				<li>
					<a href="#"><img src="images/sidearea-opener.png" width="50%" id="dai">
						<div id="myNav" class="overlay-v1">
							<a href="javascript:void(0)" class="closebtn" id="opener">&times;</a>
							<div class="overlay-content-v1">
								<h1 class="welcome"> Welcome  </h1>
								<h4 class="lorem">.Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h4>
								<h4 class="ae">aenean commodo</h4>
								<div class="hinhanh">
									<img class="hinh" src="images/1.jpg" alt="">
									<img class="hinh" src="images/2.jpg" alt="">
									<img class="hinh" src="images/3.jpg" alt="">
									<img class="hinh" src="images/4.jpg" alt="">
									<img class="hinh" src="images/5.jpg" alt="">
									<img class="hinh" src="images/6.jpg" alt="">
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

			</div>
		</div>
	</div>

</div>
</li>


</ul>
</nav>
</header>

</div>