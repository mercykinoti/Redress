<footer>
		<div class="footer-bottom-agile">
			<div class="container">
				<div class="footer-bottom-agile-grids">
					<div class="col-md-4 footer-logo">
						<h2>
							<span>Red</span>ress
							<span>Eve</span>nts
						</h2>
						<p>We aim to please and always available. Find us on Social Media</p>
						<div class="footer-social-grids-w3l">
							<ul>
								<li>
									<a href="https://www.facebook.com/" target="_blank">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/" target="_blank">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/" target="_blank">
										<span class="fa fa-instagram"></span>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/" target="_blank">
										<span class="fa fa-linkedin"></span>
									</a>
								</li>
							</ul>
						</div>

					</div>
					<div class="col-md-4 footer-bottom-agile-left">
						<h5>Our Events</h5>
						<div class="footer-img-grids">
							<div class="footer-img">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/f2.jpg" class="img-responsive">
							</div>
							<div class="footer-img-info">
								<p>Suspese potenti. Pelleue pulvinar tellus at est.</p>
								<span>20 Nov 2017</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="footer-img-grids grid-foot-2">
							<div class="footer-img">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/a3.jpg" class="img-responsive">
							</div>
							<div class="footer-img-info">
								<p>Suspese potenti. Pelleue pulvinar tellus at est.</p>
								<span>24 Nov 2017</span>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 mk-footer one tweet footer-bottom-agile-right">
						<h5>Mentions</h5>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
									<i>http//example.com</i>
								</a>
								<span>About 15 minutes ago
									<span>
									</span>
								</span>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="copyright-agile">
			<div class="container">
				<p>© 2017 
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- js -->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js -->

	<!-- banner slider js -->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr.custom.46884.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.slicebox.js"></script>
	<script type="text/javascript">
		$(function () {

			var Page = (function () {

				var $navArrows = $('#nav-arrows').hide(),
					$shadow = $('#shadow').hide(),
					slicebox = $('#sb-slider').slicebox({
						onReady: function () {

							$navArrows.show();
							$shadow.show();

						},
						orientation: 'r',
						cuboidsRandom: true
					}),

					init = function () {

						initEvents();

					},
					initEvents = function () {

						// add navigation events
						$navArrows.children(':first').on('click', function () {

							slicebox.next();
							return false;

						});

						$navArrows.children(':last').on('click', function () {

							slicebox.previous();
							return false;

						});

					};

				return {
					init: init
				};

			})();

			Page.init();

		});
	</script>
	<!-- //banner slider js -->

	<!-- //here starts scrolling icon -->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling script -->
	<!-- //here ends scrolling icon -->

	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //scrolling script -->
	<!-- flexisel -->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<!-- //flexisel -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<?php wp_footer(); ?> 

</body>

</html>