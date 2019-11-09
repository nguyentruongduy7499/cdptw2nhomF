<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
	
	<div class="swiper-container so1">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img class="slide" src="image/h3-slider1-background-img.jpg" alt="slide1" width="100%">
				<div class="content" style="float: left;">
						<ul id="sl1">			
							<div class="ct1">Amazing offer only in December</div> 
							<h2 style="font-size: 47px">BRAND NEW PRODUCT</h2>
							<hr  width="22%" align="left" class="hr"/>
							<a href="#"><img src="image/appstore.png"></a>
							<a href="#"><img src="image/ggplay.png"></a>
						</ul>
					</div>
			</div>
			<div class="swiper-slide"><img class="slide" src="image/h3-slider2-background-img.jpg" alt="slide1" width="100%">
			<div class="content1">
						<ul id="sl1">			
							
							<h2>BEST APP YOUR SELFIES</h2>
							<hr  width="18%" align="right" class="hr"/>
							<div class="ct1">
							<p>Alierewnum phaedrum torquatos nec eu, dasvis detraxit ertssa periculiser reex,nihil dexpetendis in mei Meis.</p>
						</div> 
						</ul>
					</div></div>
			<div class="swiper-slide"><img class="slide" src="image/h3-slider3-background-img.jpg" alt="slide1" width="100%">
			<div class="content2">
						<ul id="sl1">			
							
							<h2></h2>
							<hr  width="8%" align="left" class="hr"/>
							<div class="ct1">Amazing offer only in December</div> 
						</ul>
					</div></div>
		</div>
		<!-- Add Arrows -->
		<div class="swiper-button-next" ><span class="number-next" value="1">2</span></div>
		<div class="swiper-button-prev"><span class="number-prev" value="2">3</span></div>
		<div class="swiper-counter"></div>
	</div>
</div>