<?php
$this->load->view('application/restaurant/include/header');
$this->load->view('application/restaurant/include/navbar');
?>

<main>
	<div class="page_header element_to_stick">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
					<h1>145 restaurants in Convent Street 2983</h1>
					<a href="#0">Change address</a>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-5">
					<div class="search_bar_list">
						<input type="text" class="form-control" placeholder="Dishes, restaurants or cuisines">
						<button type="submit"><i class="icon_search"></i></button>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
	</div>
	<!-- /page_header -->

	<div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div>
	<!-- /Map -->

	<div class="container margin_30_20">
		<div class="row">
			<aside class="col-lg-3" id="sidebar_fixed">
				<a class="btn_map d-flex align-items-center justify-content-center" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><span class="btn_map_txt" data-text-swap="Hide Map" data-text-original="View on Map">View on Map</span></a>
				<div class="type_delivery">
					<ul class="clearfix">
						<li>
							<label class="container_radio">Delivery
								<input type="radio" name="type_d" checked="checked">
								<span class="checkmark"></span>
							</label>
						</li>
						<li>
							<label class="container_radio">Take away
								<input type="radio" name="type_d">
								<span class="checkmark"></span>
							</label>
						</li>
					</ul>
				</div>
				<!-- /type_delivery -->

				<a class="btn_map mobile btn_filters" data-toggle="collapse" href="#collapseMap"><i class="icon_pin_alt"></i></a>
				<a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>

				<div class="filter_col">
					<div class="inner_bt clearfix">Filters<a href="#" class="open_filters"><i class="icon_close"></i></a></div>
					<div class="filter_type">
						<h4><a href="#filter_1" data-toggle="collapse" class="opened">Sort</a></h4>
						<div class="collapse show" id="filter_1">
							<ul>
								<li>
									<label class="container_radio">Top Rated
										<input type="radio" name="filter_sort" checked="">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Reccomended
										<input type="radio" name="filter_sort">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Price: low to high
										<input type="radio" name="filter_sort">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Up to 15% off
										<input type="radio" name="filter_sort">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">All Offers
										<input type="radio" name="filter_sort">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Distance
										<input type="radio" name="filter_sort">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- /filter_type -->
					<div class="filter_type">
						<h4><a href="#filter_2" data-toggle="collapse" class="closed">Categories</a></h4>
						<div class="collapse" id="filter_2">
							<ul>
								<li>
									<label class="container_check">Pizza - Italian <small>12</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Japanese - Sushi <small>24</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Burghers <small>23</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Vegetarian <small>11</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Bakery <small>18</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Chinese <small>12</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Mexican <small>15</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- /filter_type -->
					<div class="filter_type">
						<h4><a href="#filter_3" data-toggle="collapse" class="closed">Distance</a></h4>
						<div class="collapse" id="filter_3">
							<div class="distance"> Radius around selected destination <span></span> km</div>
							<div class="add_bottom_25"><input type="range" min="10" max="50" step="5" value="20" data-orientation="horizontal"></div>
						</div>
					</div>
					<!-- /filter_type -->
					<div class="filter_type last">
						<h4><a href="#filter_4" data-toggle="collapse" class="closed">Rating</a></h4>
						<div class="collapse" id="filter_4">
							<ul>
								<li>
									<label class="container_check">Superb 9+ <small>06</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Very Good 8+ <small>12</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Good 7+ <small>17</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Pleasant 6+ <small>43</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- /filter_type -->
					<p><a href="#0" class="btn_1 outline full-width">Filter</a></p>
				</div>
			</aside>

			<div class="col-lg-9">
				<div class="row">
					<div class="col-12">
						<h2 class="title_small">Top Categories</h2>
						<div class="owl-carousel owl-theme categories_carousel_in listing">
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_1.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Pizza</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_2.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Sushi</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_3.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Dessert</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_4.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Hamburgher</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_5.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Ice Cream</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_6.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Kebab</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_7.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Italian</h3>
									</a>
								</figure>
							</div>
							<div class="item">
								<figure>
									<img src="img/cat_listing_placeholder.png" data-src="img/cat_listing_8.jpg" alt="" class="owl-lazy"></a>
									<a href="#0">
										<h3>Chinese</h3>
									</a>
								</figure>
							</div>
						</div>
						<!-- /carousel -->
					</div>
				</div>
				<!-- /row -->

				<div class="promo">
					<h3>Free Delivery for your first 14 days!</h3>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					<i class="icon-food_icon_delivery"></i>
				</div>
				<!-- /promo -->

				<div class="row">
					<div class="col-12">
						<h2 class="title_small">Top Rated</h2>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<span class="ribbon off">15% off</span>
								<img src="img/lazy-placeholder.png" data-src="img/location_1.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Pizza</small>
									<div class="item_title">
										<h3>Da Alfredo</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Burghers</small>
									<div class="item_title">
										<h3>Best Burghers</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>9.5</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<span class="ribbon off">15% off</span>
								<img src="img/lazy-placeholder.png" data-src="img/location_3.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Vegetarian</small>
									<div class="item_title">
										<h3>Vego Life</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv no">Delivery</span></li>
								<li>
									<div class="score"><strong>7.5</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_4.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Japanese</small>
									<div class="item_title">
										<h3>Sushi Temple</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take no">Takeaway</span> <span class="deliv no">Delivery</span></li>
								<li>
									<div class="score"><strong>9.5</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_5.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Pizza</small>
									<div class="item_title">
										<h3>Auto Pizza</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv no">Delivery</span></li>
								<li>
									<div class="score"><strong>7.0</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_6.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Burghers</small>
									<div class="item_title">
										<h3>Alliance</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_7.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Chinese</small>
									<div class="item_title">
										<h3>Alliance</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_8.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Sushi</small>
									<div class="item_title">
										<h3>Dragon Tower</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv no">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_9.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Mexican</small>
									<div class="item_title">
										<h3>El Paso Tacos</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_10.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Bakery</small>
									<div class="item_title">
										<h3>Monnalisa</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_11.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Mexican</small>
									<div class="item_title">
										<h3>Guachamole</h3>
										<small>135 Newtownards Road</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take yes">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="strip">
							<figure>
								<img src="img/lazy-placeholder.png" data-src="img/location_12.jpg" class="img-fluid lazy" alt="">
								<a href="detail-restaurant.html" class="strip_info">
									<small>Chinese</small>
									<div class="item_title">
										<h3>Pechino Express</h3>
										<small>27 Old Gloucester St</small>
									</div>
								</a>
							</figure>
							<ul>
								<li><span class="take no">Takeaway</span> <span class="deliv yes">Delivery</span></li>
								<li>
									<div class="score"><strong>8.9</strong></div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /strip grid -->
				</div>
				<!-- /row -->
				<div class="pagination_fg">
					<a href="#">&laquo;</a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">&raquo;</a>
				</div>
			</div>
			<!-- /col -->
		</div>
	</div>
	<!-- /container -->

</main>
<!-- /main -->

<footer>
	<div class="wave footer"></div>
	<div class="container margin_60_40 fix_mobile">

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3 data-target="#collapse_1">Quick Links</h3>
				<div class="collapse dont-collapse-sm links" id="collapse_1">
					<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="submit-restaurant.html">Add your restaurant</a></li>
						<li><a href="help.html">Help</a></li>
						<li><a href="account.html">My account</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contacts.html">Contacts</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3 data-target="#collapse_2">Categories</h3>
				<div class="collapse dont-collapse-sm links" id="collapse_2">
					<ul>
						<li><a href="grid-listing-filterscol.html">Top Categories</a></li>
						<li><a href="grid-listing-filterscol-full-masonry.html">Best Rated</a></li>
						<li><a href="grid-listing-filterscol-full-width.html">Best Price</a></li>
						<li><a href="grid-listing-filterscol-full-masonry.html">Latest Submissions</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3 data-target="#collapse_3">Contacts</h3>
				<div class="collapse dont-collapse-sm contacts" id="collapse_3">
					<ul>
						<li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
						<li><i class="icon_mobile"></i>+94 423-23-221</li>
						<li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3 data-target="#collapse_4">Keep in touch</h3>
				<div class="collapse dont-collapse-sm" id="collapse_4">
					<div id="newsletter">
						<div id="message-newsletter"></div>
						<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
							<div class="form-group">
								<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
								<button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
							</div>
						</form>
					</div>
					<div class="follow_us">
						<h5>Follow Us</h5>
						<ul>
							<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
							<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
							<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
							<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /row-->
		<hr>
		<div class="row add_bottom_25">
			<div class="col-lg-6">
				<ul class="footer-selector clearfix">
					<li>
						<div class="styled-select lang-selector">
							<select>
								<option value="English" selected>English</option>
								<option value="French">French</option>
								<option value="Spanish">Spanish</option>
								<option value="Russian">Russian</option>
							</select>
						</div>
					</li>
					<li>
						<div class="styled-select currency-selector">
							<select>
								<option value="US Dollars" selected>US Dollars</option>
								<option value="Euro">Euro</option>
							</select>
						</div>
					</li>
					<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
				</ul>
			</div>
			<div class="col-lg-6">
				<ul class="additional_links">
					<li><a href="#0">Terms and conditions</a></li>
					<li><a href="#0">Privacy</a></li>
					<li><span>© FooYes</span></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!--/footer-->

<div id="toTop"></div><!-- Back to top button -->

<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
	<div class="modal_header">
		<h3>Sign In</h3>
	</div>
	<form>
		<div class="sign-in-wrapper">
			<a href="#0" class="social_bt facebook">Login with Facebook</a>
			<a href="#0" class="social_bt google">Login with Google</a>
			<div class="divider"><span>Or</span></div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" id="email">
				<i class="icon_mail_alt"></i>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" id="password" value="">
				<i class="icon_lock_alt"></i>
			</div>
			<div class="clearfix add_bottom_15">
				<div class="checkboxes float-left">
					<label class="container_check">Remember me
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
			</div>
			<div class="text-center">
				<input type="submit" value="Log In" class="btn_1 full-width mb_5">
				Don’t have an account? <a href="account.html">Sign up</a>
			</div>
			<div id="forgot_pw">
				<div class="form-group">
					<label>Please confirm login email below</label>
					<input type="email" class="form-control" name="email_forgot" id="email_forgot">
					<i class="icon_mail_alt"></i>
				</div>
				<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
				<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
			</div>
		</div>
	</form>
	<!--form -->
</div>
<!-- /Sign In Modal -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/common_func.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/sticky_sidebar.min.js"></script>
<script src="js/specific_listing.js"></script>

<!-- Map -->
<script src="js/main_map_scripts.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>

<?php
$this->load->view('application/restaurant/include/footer');
?>