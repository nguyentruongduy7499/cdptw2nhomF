<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
	<div class="container">
		<div class="row">
			<div class="khung">
				<!-- Slider main container -->
				<div class="swiper-container so3">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="vo">
								<div class="iner">
									<div class="hinhanh">
										<span class="new">New</span>
										<img src="images/3-1.jpg" alt="">
									</div>
									<div class="text">
										<div class="out-text" >
											<div class="in-text">
												<div class="holder" id="mo">
													<a href="#" class="openbtn"><span >quick look</span></a>
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
											<a href="#">Add to cart<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
										<img src="images/3-2.jpg" alt="">
									</div>
									<div class="text">
										<div class="out-text">
											<div class="in-text">
												<div class="holder" id="mo1">
													<a href="#" ><span >quick look</span></a>
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
											<a href="#">Add to cart<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
										<img src="images/3-3.jpg" alt="">
									</div>
									<div class="text">
										<div class="out-text">
											<div class="in-text">
												<div class="holder" id="mo2">
													<a href="#" ><span >quick look</span></a>
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
											<a href="#">Add to cart<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
										<img src="images/3-4.jpg" alt="">
									</div>
									<div class="text">
										<div class="out-text">
											<div class="in-text">
												<div class="holder" id="mo3">
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
											<a href="#">read more<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
										<img src="images/3-5.jpg" alt="">
									</div>
									<div class="text">
										<div class="out-text">
											<div class="in-text">
												<div class="holder" id="mo4">
													<a href="#" ><span >quick look</span></a>
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
											<a href="#">Add to cart<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
										<img src="images/3-6.jpg" alt="">
									</div>
									<div class="text">
										<div class="out-text">
											<div class="in-text">
												<div class="holder" id="mo5">
													<a href="#" ><span >quick look</span></a>
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
											<a href="#">Add to cart<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
									<p class="category"><a href="#">Electronics</a></p>
								</div>
							</div>
						</div>

					</div>

					<!-- If we need navigation buttons -->
					<div class="nut">
					<div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
					<div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					</div>
				</div>

				<div class="thongtin" id="tintuc">
					
					<div class="lopcontent">
						<div class="chuaanh">
							<a href="#"><img src="images/3-1-1.jpg" alt=""></a>
							<span class="new1">New</span>
						</div>
						<div class="chuatintuc">
							<span class="closebtn" id="close">x</span>
							<div class="noidung">
								<div class="row">
									<h2>Tablet</h2>
									<div class="price1">
										<p class="giatien1">
											<span class="giamgia1"></span>
											$360
										</p>
										<div class="rating">
											<span class="star1"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star2"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star3"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star4"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star5"><i class="fa fa-star-o" aria-hidden="true"></i></span>
										</div>
										<div class="comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eius cupiditate cum officiis, eum esse aperiam voluptatum. Molestias earum perferendis quibusdam similique magnam facere nostrum laboriosam ab rem? Ducimus, beatae?</p>
										</div>
										<form class="cart" method="post">

											<div class="cangui">
												<span class="Quantity">Quantity</span>
												<span class="left"><a href="#" ><i class="fa fa-angle-left" aria-hidden="true"></i></a></span>
												<input type="text" name="qulity" pattern="[0-9]*" inputmode="numeric" value="1" class="d">
												<span class="right"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
											</div>
											<button type="submit" class="add">Add to cart</button>
										</form>
										<div class="add-wish">
											<a href="#" class="heart"><i class="fa fa-heart" aria-hidden="true"></i></a>
											<a href="#" class="Wishlist">Browse Wishlist</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="thongtin" id="tintuc1">
					
					<div class="lopcontent">
						<div class="chuaanh">
							<a href="#"><img src="images/3-2-1.jpg" alt=""></a>
							
						</div>
						<div class="chuatintuc">
							<span class="closebtn" id="close1">x</span>
							<div class="noidung">
								<div class="row">
									<h2>Silver Phone</h2>
									<div class="price1">
										<p class="giatien1">
											<span class="giamgia1"></span>
											$240
										</p>
										<div class="rating">
											
										</div>
										<div class="comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eius cupiditate cum officiis, eum esse aperiam voluptatum. Molestias earum perferendis quibusdam similique magnam facere nostrum laboriosam ab rem? Ducimus, beatae?</p>
										</div>
										<form class="cart" method="post">

											<div class="cangui">
												<span class="Quantity">Quantity</span>
												<span class="left"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></span>
												<input type="text" name="qulity" pattern="[0-9]*" inputmode="numeric" value="1" class="d">
												<span class="right"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
											</div>
											<button type="submit" class="add">Add to cart</button>
										</form>
										<div class="add-wish">
											<a href="#" class="heart"><i class="fa fa-heart" aria-hidden="true"></i></a>
											<a href="#" class="Wishlist">Browse Wishlist</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="thongtin" id="tintuc2">					
					<div class="lopcontent">
						<div class="chuaanh">
							<a href="#"><img src="images/3-3-1.jpg" alt=""></a>
							<span class="sale1">Sale</span>
						</div>
						<div class="chuatintuc">
							<span class="closebtn" id="close2">x</span>
							<div class="noidung">
								<div class="row">
									<h2>New Model</h2>
									<div class="price1">
										<p class="giatien1">
											<span class="giamgia1">$360</span>
											$280
										</p>
										<div class="rating">
											<span class="star1"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star2"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star3"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star4"><i class="fa fa-star-o" aria-hidden="true"></i></span>
											<span class="star5"><i class="fa fa-star-o" aria-hidden="true"></i></span>
										</div>
										<div class="comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eius cupiditate cum officiis, eum esse aperiam voluptatum. Molestias earum perferendis quibusdam similique magnam facere nostrum laboriosam ab rem? Ducimus, beatae?</p>
										</div>
										<form class="cart" method="post">

											<div class="cangui">
												<span class="Quantity">Quantity</span>
												<span class="left"><a href="#" ><i class="fa fa-angle-left" aria-hidden="true"></i></a></span>
												<input type="text" name="qulity" pattern="[0-9]*" inputmode="numeric" value="1" class="d">
												<span class="right"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
											</div>
											<button type="submit" class="add">Add to cart</button>
										</form>
										<div class="add-wish">
											<a href="#" class="heart"><i class="fa fa-heart" aria-hidden="true"></i></a>
											<a href="#" class="Wishlist">Add to Wishlist</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="thongtin" id="tintuc3">					
					<div class="lopcontent">
						<div class="chuaanh">
							<a href="#"><img src="images/3-4-1.jpg" alt=""></a>
							<span class="sale1">sale</span>
						</div>
						<div class="chuatintuc">
							<span class="closebtn" id="close3">x</span>
							<div class="noidung">
								<div class="row">
									<h2>white watch</h2>
									<div class="price1">
										<p class="giatien1">
											<span class="giamgia1"></span>
											$120
										</p>
										<div class="rating">
											<span class="star1"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star2"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star3"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star4"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star5"><i class="fa fa-star-o" aria-hidden="true"></i></span>
										</div>
										<div class="comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultricies aliquam.</p>
										</div>
										<h4>Out of stock</h4>
										<div class="add-wish">
											<a href="#" class="heart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											<a href="#" class="Wishlist">Add to Wishlist</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="thongtin" id="tintuc4">					
					<div class="lopcontent">
						<div class="chuaanh">
							<a href="#"><img src="images/3-5-1.jpg" alt=""></a>
							
						</div>
						<div class="chuatintuc">
							<span class="closebtn" id="close4">x</span>
							<div class="noidung">
								<div class="row">
									<h2>new generation</h2>
									<div class="price1">
										<p class="giatien1">
											<span class="giamgia1"></span>
											$1,350
										</p>
										<div class="rating">
											
										</div>
										<div class="comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eius cupiditate cum officiis, eum esse aperiam voluptatum. Molestias earum perferendis quibusdam similique magnam facere nostrum laboriosam ab rem? Ducimus, beatae?</p>
										</div>
										<form class="cart" method="post">

											<div class="cangui">
												<span class="Quantity">Quantity</span>
												<span class="left"><a href="#" ><i class="fa fa-angle-left" aria-hidden="true"></i></a></span>
												<input type="text" name="qulity" pattern="[0-9]*" inputmode="numeric" value="1" class="d">
												<span class="right"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
											</div>
											<button type="submit" class="add">Add to cart</button>
										</form>
										<div class="add-wish">
											<a href="#" class="heart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											<a href="#" class="Wishlist">Add to Wishlist</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="thongtin" id="tintuc5">					
					<div class="lopcontent">
						<div class="chuaanh">
							<a href="#"><img src="images/3-6-1.jpg" alt=""></a>
							<span class="sale1">Sale</span>
						</div>
						<div class="chuatintuc">
							<span class="closebtn" id="close5">x</span>
							<div class="noidung">
								<div class="row">
									<h2>lap top</h2>
									<div class="price1">
										<p class="giatien1">
											<span class="giamgia1">$850</span>
											$650
										</p>
										<div class="rating">
											<span class="star1"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star2"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star3"><i class="fa fa-star" aria-hidden="true"></i></span>
											<span class="star4"><i class="fa fa-star-o" aria-hidden="true"></i></span>
											<span class="star5"><i class="fa fa-star-o" aria-hidden="true"></i></span>
										</div>
										<div class="comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eius cupiditate cum officiis, eum esse aperiam voluptatum. Molestias earum perferendis quibusdam similique magnam facere nostrum laboriosam ab rem? Ducimus, beatae?</p>
										</div>
										<form class="cart" method="post">

											<div class="cangui">
												<span class="Quantity">Quantity</span>
												<span class="left"><a href="#" ><i class="fa fa-angle-left" aria-hidden="true"></i></a></span>
												<input type="text" name="qulity" pattern="[0-9]*" inputmode="numeric" value="1" class="d">
												<span class="right"><a href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
											</div>
											<button type="submit" class="add">Add to cart</button>
										</form>
										<div class="add-wish">
											<a href="#" class="heart"><i class="fa fa-heart" aria-hidden="true"></i></a>
											<a href="#" class="Wishlist">Add to Wishlist</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


	</div>
</div>