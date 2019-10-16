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
		<nav>
			<ul class="nav__links">
				<li><a  class="home" href="#">Home</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">About</a></li>
				<li>
					<div id="myOverlay" class="overlay">
						<span class="closebtn" id="dong"  title="Close Overlay">×</span>
						<div class="overlay-content">
							<form action="/action_page.php">
								<input type="text" placeholder="Search.." name="search">
								<button type="submit" id="cc"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>

					</div>

				</li>
				<button class="openBtn" id="mo" ><i class="fa fa-search" aria-hidden="true"></i></button>
				<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

				<li>
					<a href="#"><img src="images/sidearea-opener.png" width="50%" id="dai">
						<div id="myNav" class="overlay-v1">
							<a href="javascript:void(0)" class="closebtn" id="opener">&times;</a>
							<div class="overlay-content-v1">
								<h1> Welcome to this page </h1>
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