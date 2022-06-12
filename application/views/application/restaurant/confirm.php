<?php
$this->load->view('application/restaurant/include/header');
$this->load->view('application/restaurant/include/navbar');
?>

<main class="bg_gray">

	<div class="container margin_60_40">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="box_order_form">
					<div class="head text-center">
						<h3>Pizzeria da Alfredo</h3>
						27 Old Gloucester St, 4530 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
					</div>
					<!-- /head -->
					<div class="main">
						<div id="confirm">
							<div class="icon icon--order-success svg add_bottom_15">
								<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
									<g fill="none" stroke="#8EC343" stroke-width="2">
										<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
										<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
									</g>
								</svg>
							</div>
							<h3>Order Confirmed!</h3>
							<p>Sit an meis aliquam, cetero inermis.</p>
						</div>
					</div>
				</div>
				<!-- /box_booking -->
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

</main>
<!-- /main -->

<footer>
	<div class="wave gray footer"></div>
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
					<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
				</ul>
			</div>
			<div class="col-lg-6">
				<ul class="additional_links">
					<li><a href="#0">Terms and conditions</a></li>
					<li><a href="#0">Privacy</a></li>
					<li><span>© GRUBPANDA</span></li>
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

<?php
$this->load->view('application/restaurant/include/footer');
?>