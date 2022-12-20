<?php
/**
* Template Name: Contact
*
*/

get_header(); 
?>



<div class="page-title jarallax" style="background-image: url(img/bg3.png);">

				<div class="overlay"></div>
				<!-- End overlay -->
				<div class="container">
					<div class="text-center">

						<h1 class="tlt">
							Contact Us
						</h1>

						<div class="breadcrumbs">
							<ul class="list-none">
								<li>
									<a href="index_one.html" class="animsition-link">Home</a>
								</li>
								<li>Contact Us</li>
							</ul>
						</div>
						<!-- End breadcrumbs -->

					</div>
				</div>
				<!-- End container -->
			</div>
			<!-- End page-title -->

			<main>

				<!-- ************************ -->
				<!--   CONTACT INFO           -->
				<!-- ************************ -->

				<section class="pt150">
					<div class="container">
						<div class="contacts-wrap">

							<div class="borders"></div>

							<div class="row">

								<div class="col-md-4 sm-mb40" data-sr>
									<div class="text-center">
										<div class="contact-item">
											<i class="cr-location"></i>
											<p>10111 Santa Monica Boulevard<br>Los Angeles</p>
										</div>
										<!-- End contact-item -->
									</div>
								</div>

								<div class="col-md-4 sm-mb40" data-sr>
									<div class="text-center">
										<div class="contact-item">
											<i class="cr-phone"></i>
											<p>(1) 310-474-0000<br>(2) 310-474-0000</p>
										</div>
										<!-- End contact-item -->
									</div>
								</div>

								<div class="col-md-4 sm-mb40" data-sr>
									<div class="text-center">
										<div class="contact-item">
											<i class="cr-pencil"></i>
											<p>
												<a href="mailto:info@Example.com">info@Example.com</a><br>
												<a href="mailto:info@Example.com">info@Example.com</a>
											</p>
										</div>
										<!-- End contact-item -->
									</div>
								</div>

							</div>

						</div>
						<!-- End contacts-wrap -->
					</div>
					<!-- End container -->
				</section>

				<!-- ************************ -->
				<!--   CONTACT FORM           -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">

						<div class="text-center mb40">
							<h2 class="uppercase" data-sr>get in touch</h2>
						</div>
					</div>
					<!-- End container -->

					<div class="container">
                            <?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>
								<!-- End contact-form -->
					</div>
					<!-- End container -->
				</section>

				<!-- ************************ -->
				<!--   GOOGLE MAP             -->
				<!-- ************************ -->

			</main>


            <?php get_footer(); ?>