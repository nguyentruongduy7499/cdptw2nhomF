<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
	<div class="container">
		<div class="row">
			<div class="khung">
			<!-- Slider main container -->
			<div class="swiper-container">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="vo">
							<div class="iner">
								<div class="hinhanh">
									<span class="new">New</span>
									<img src="image/1.jpg" alt="">
								</div>
								<div class="text">
									<div class="out-text">
										<div class="in-text">
											<div class="holder">
												<a href="#" ><span>quick look</span></a>
											</div>
											<div class="wishlist">
												<a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</div>
							<div class="title">
								<h5 class="title1"><a href="#">Tablet</a></h5>
								<div class="price-lon">
									<div class="price">
										<span class="giamgia"></span>
										<span class="giatien">$360</span>
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
								</div>
								<p class="category"><a href="#">Electronics</a></p>
							</div>
							
						</div>
						
					</div>

					<div class="swiper-slide">
						<div class="vo">
							<div class="iner">
								<div class="hinhanh">
									
									<img src="image/2.jpg" alt="">
								</div>
								<div class="text">
									<div class="out-text">
										<div class="in-text">
											<div class="holder">
												<a href="#" ><span>quick look</span></a>
											</div>
											<div class="wishlist">
												<a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</div>
							<div class="title">
								<h5 class="title1"><a href="#">Silver Phone</a></h5>
								<div class="price-lon">
									<div class="price">
										<span class="giamgia"></span>
										<span class="giatien">$240</span>
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
								</div>
								<p class="category"><a href="#">Electronics</a></p>
							</div>
							
						</div>
						
					</div>

					<div class="swiper-slide">
						<div class="vo">
							<div class="iner">
								<div class="hinhanh">
									<span class="sale">SALE</span>
									<img src="image/3.jpg" alt="">
								</div>
								<div class="text">
									<div class="out-text">
										<div class="in-text">
											<div class="holder">
												<a href="#" ><span>quick look</span></a>
											</div>
											<div class="wishlist">
												<a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</div>
							<div class="title">
								<h5 class="title1"><a href="#">New Model</a></h5>
								<div class="price-lon">
									<div class="price">
										<span class="giamgia">$360</span>
										<span class="giatien">$280</span>
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
								</div>
								<p class="category"><a href="#">Electronics</a></p>
							</div>
							
						</div>
						
					</div>

					<div class="swiper-slide">
						<div class="vo">
							<div class="iner">
								<div class="hinhanh">
									<span class="sale">OUT OF STOCK</span>
									<img src="image/4.jpg" alt="">
								</div>
								<div class="text">
									<div class="out-text">
										<div class="in-text">
											<div class="holder">
												<a href="#" ><span>quick look</span></a>
											</div>
											<div class="wishlist">
												<a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</div>
							<div class="title">
								<h5 class="title1"><a href="#">White Watch</a></h5>
								<div class="price-lon">
									<div class="price">
										<span class="giamgia"></span>
										<span class="giatien">$120</span>
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
								</div>
								<p class="category"><a href="#">Electronics</a></p>
							</div>
							
						</div>
						
					</div>

					<div class="swiper-slide">
						<div class="vo">
							<div class="iner">
								<div class="hinhanh">
									<img src="image/5.jpg" alt="">
								</div>
								<div class="text">
									<div class="out-text">
										<div class="in-text">
											<div class="holder">
												<a href="#" ><span>quick look</span></a>
											</div>
											<div class="wishlist">
												<a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</div>
							<div class="title">
								<h5 class="title1"><a href="#">New Generation</a></h5>
								<div class="price-lon">
									<div class="price">
										<span class="giamgia"></span>
										<span class="giatien">$1,350</span>
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
								</div>
								<p class="category"><a href="#">Electronics</a></p>
							</div>
							
						</div>
						
					</div>

					<div class="swiper-slide">
						<div class="vo">
							<div class="iner">
								<div class="hinhanh">
									<span class="sale">SALE</span>
									<img src="image/6.jpg" alt="">
								</div>
								<div class="text">
									<div class="out-text">
										<div class="in-text">
											<div class="holder">
												<a href="#" ><span>quick look</span></a>
											</div>
											<div class="wishlist">
												<a href="#"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>

							</div>
							<div class="title">
								<h5 class="title1"><a href="#">Lap Top</a></h5>
								<div class="price-lon">
									<div class="price">
										<span class="giamgia">$850</span>
										<span class="giatien">$650</span>
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
								</div>
								<p class="category"><a href="#">Electronics</a></p>
							</div>
							
						</div>
						
					</div>

				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
				<div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
			</div>
			</div>
		</div>
	</div>
</div>