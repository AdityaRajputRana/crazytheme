<footer class="pt150 jarallax" style="background-image: url(<?php
$footerBg = get_field('footerBg');
$url = get_template_directory_uri()."/screenshot.png";
if($footerBg){
	$url = $footerBg;
}
echo $footerBg;
?>);">
				<div class="overlay"></div>
				
				<!-- Contact form was here. -->

				<div class="container">
					<div class="footer-inner clearfix">

						<div class="border-top"></div>

						<div class="footer-social mb30">
							<ul class="list-none">
							<?php dynamic_sidebar( 'social' ); ?>
							</ul>
						</div>
						<!-- End footer-social -->
						<div class="footer-copy">
						<?php dynamic_sidebar( 'copy' ); ?>
						</div>
						<!-- End footer-copy -->
					</div>
				</div>
				<!-- End container -->
			</footer>
		</div>
		<!-- End animsition -->

		<!-- ************************ -->
		<!--   SCRIPTS                -->
		<!-- ************************ -->

		<script src="<?php echo get_template_directory_uri(); ?>/vendors/jquery-1.12.0.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs.js"></script>

		<!-- Custom -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendors/vlthemes-ptf.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/scripts/crazy.js"></script>

        <?php wp_footer() ?>
	</body>

<!-- Mirrored from unvab.com/crazy_html/index_one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Dec 2022 06:27:53 GMT -->
</html>