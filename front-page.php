<?php get_header() ?>
<div class="title-home jarallax" style="background-image: url(
	<?php the_field('top_background'); ?>
)">

				<div class="overlay"></div>
				<!-- End overlay -->

				<div class="container">
					<div class="text-center">

						<h1 class="typed" data-sr>&nbsp;</h1>

						<em data-sr>
							<?php the_field("description"); ?>
						</em>

						<div class="buttons mt40 mb150">

							<!-- todo
								 <a href="work_style_one.html" class="btn btn-white animsition-link" data-sr>
								<span>view our works</span>
							</a> -->

							<a href="contact-us" class="btn btn-white animsition-link" data-sr>
								<span>contact us</span>
							</a>

						</div>
					</div>
				</div>
				<!-- End container -->

				<!--
					Todo <div class="container">
					<div class="text-center">
						<div class="goto" data-sr>

							<div class="border-top"></div>

							<a href="work_style_one.html" class="animsition-link">all</a>
							<a href="work_style_one.html" class="animsition-link">web design</a>
							<a href="work_style_one.html" class="animsition-link">development</a>
							<a href="work_style_one.html" class="animsition-link">graphic design</a>
							<a href="work_style_one.html" class="animsition-link">branding</a>
							<a href="work_style_one.html" class="animsition-link">photography</a>

						</div>
						End goto
					</div>
				</div> -->
				<!-- End container -->
			</div>
<main>

				<!-- ************************ -->
				<!--   SECTION ABOUT          -->
				<!-- ************************ -->

				<section class="pt150">

					<div class="container">
						<div class="section-title">
							<h2 data-sr>About Us</h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s">
									<?php the_field("about_us") ?>
									</em>
								</div>
							</div>

						</div>
						<!-- End section-title -->
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">

							<div class="info-block-wrap clearfix">

								<div
									class="image-block col-md-7"
									style="background-image: url(<?php echo get_field('aboutImg'); ?>);"></div>
								<!-- End image-block -->
								<div class="col-md-7">
									<div class="info-block sm-mb30">
										<h3>who we are</h3>
										<p>
										<?php the_field("who_are_we") ?>
										</p>
										<div class="mt40">
											<a href="about-us" class="btn btn-white animsition-link">
												<span>read more</span>
											</a>
										</div>
									</div>
									<!-- End info-block -->

								</div>

							</div>
							<!-- End info-block-wrap -->
						</div>

					</div>
					<!-- End container -->

					<div class="container">

						<div class="love-block">
							<h2 data-sr><?php the_field("tag_line") ?>
								<i class="fa fa-fw fa-heart-o"></i>
							</h2>
						</div>
						<!-- End love-block -->

					</div>
					<!-- End container -->
				</section>

				<!-- ************************ -->
				<!--   SECTION FEATURES       -->
				<!-- ************************ -->

				<section class="features pt100 pb100">

					<div class="container">
						<div class="row">

							<div class="feature-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="cr-diamond"></i>
									</div>
									<h6>
										<?php the_field("info_bar_1_title") ?>
									</h6>
									<p>
									<?php the_field("info_bar_1") ?>
									</p>
								</div>
							</div>
							<!-- End features-item -->
							<div class="feature-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">

									<div class="item-head">
										<i class="cr-magnifier"></i>
									</div>
									<h6>
									<?php the_field("info_bar_2_title") ?>
									</h6>
									<p>
									<?php the_field("info_bar_2") ?>
									</p>
								</div>
							</div>
							<!-- End features-item -->

							<div class="feature-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="cr-gear"></i>
									</div>
									<h6><?php the_field("info_bar_3_title") ?></h6>
									<p>
									<?php the_field("info_bar_3") ?>
									</p>
								</div>
							</div>
							<!-- End features-item -->

							<div class="feature-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="cr-star"></i>
									</div>
									<h6><?php the_field("info_bar_4_title") ?></h6>
									<p><?php the_field("info_bar_4") ?></p>
								</div>
							</div>
							<!-- End features-item -->
						</div>
					</div>
					<!-- End container -->

				</section>

				<!-- ************************ -->
				<!--   SECTION SERVICES       -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">

						<div class="section-title">
							<h2 data-sr>what we do</h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s">
									<?php the_field("what_we_do") ?>
									</em>
								</div>
							</div>

						</div>
					</div>
					<!-- End container -->

					<!-- todo: Services Custom Post Type
					<div class="container">
						<div class="sep-with-icon">
							<i class="cr-heart"></i>
							<span></span>
						</div>
					</div>
					<!- End container ->

					
					<div class="container">
						<div class="row">
							<div class="owl-services">

								<div class="owl-item">
									<div class="col-md-5">
										<img src="/img/services-01.png" alt="image">
									</div>
									<div class="col-md-6 col-md-offset-1">
										<h2 class="uppercase">01. graphic design</h2>

										<p>Vestibulum eu ante eget metus consequat tincidunt id a metus. Curabitur
											bibendum quam porta, pharetra diam quis, porta lacus. Sed augue ex, tempor vitae
											rutrum vel, congue consequat tortor. Cras quis diam fermentum, ultrices leo at,
											ornare enim.
										</p>

										<p>Duis tincidunt, eros at feugiat efficitur, metus nulla sagittis neque, eget
											feugiat orci tellus vitae enim. Pellentesque volutpat dolor purus, ut tincidunt
											eros vestibulum vitae.</p>

										<div class="mt40">
											<a href="work_style_one.html" class="btn animsition-link">
												<span>view works</span>
											</a>
										</div>

									</div>
								</div>
								End owl-item ->


							</div>
							<!- End owl-services ->

						</div>
					</div>
					<!- End container ->
					<div class="container">

						<div class="services-nav">
							<i class="lnr lnr-arrow-left"></i>
							<i class="lnr lnr-arrow-right"></i>
						</div>

					</div> -->
					<!-- End container -->
				</section>

				<!-- ************************ -->
				<!--   VIDEO SECTION          -->
				<!-- ************************ -->

				<section
					class="video-section jarallax pt150 pb150"
					style="background-image: url(<?php echo get_field('VideoBgImg'); ?>);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">

								<h2 data-sr>we love our work</h2>
								<em data-sr="wait .2s">
									<?php the_field("we_love_our_work") ?>
								</em>
								<div class="mt90">
									<a
										href="
										<?php the_field("feature_video") ?>
										"
										class="btn btn-white btn-play popup-video"
										data-sr>
										<span>
											<i class="fa fa-play"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End container -->
				</section>

				<!-- ************************ -->
				<!--   OUR WORKS              -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">

						<div class="section-title">
							<h2 data-sr>our works</h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s">
										<?php the_field("our_work"); ?>
									</em>
								</div>
							</div>

						</div>
					</div>
					<!-- End container -->


					<div class="container">
						<div class="row">
							<div class="crazy-portfolio-masonry-wrapper" data-col="3">
								<div class="crazy-portfolio-list">
								<?php 
										$hrCount = get_field('working_hours');
										$clientCount = get_field("client_count");
										$projectCount = get_field("project_count");
										$coffeeCount = get_field("coffee_count");
										$clientA = get_field("featured_client_1");
										$clientB = get_field("featured_client_2");
										$clientC = get_field("featured_client_3");
										$clientD = get_field("featured_client_4");
										$clientBg = get_field("clientBg");
								?>

								<?php
								//WP Portfolio items
								$portfolio_query = array(
									'post_type' => 'post',
									'posts_per_page' => 6
								);

								$portfolioItems = new Wp_Query($portfolio_query);
								while($portfolioItems->have_posts()){
									$portfolioItems->the_post();
								?>

									<div class="crazy-portfolio-item with-figure f_web_design f_photography">
										<a href="<?php the_permalink(); ?>" class="animsition-link">
											<div
												class="image-wrap"
												style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>;">
</div>
											<div class="figure cross"></div>
											<div class="overlay-color"></div>
										</a>
									</div>

									<?php }?>

								</div>
								<!-- End crazy-portfolio-list -->
							</div>
							<!-- ENd crazy-portfolio-masonry-wrapper -->

							<!-- todo: see all work work page
								<div class="text-center mt80">
								<a href="work_style_one.html" class="btn animsition-link" data-sr>
									<span>see all works </span>
								</a>
							</div> -->

						</div>
					</div>
					<!-- End container -->

				</section>

				<!-- ************************ -->
				<!--   COUNTERS               -->
				<!-- ************************ -->

				<section class="counters pt100 pb100">

					<div class="container">
						<div class="row">

							<div class="counter-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="cr-check"></i>
									</div>
									<h6><?php 
									echo $hrCount;
									 ?></h6>
									<p>working hours</p>
								</div>
							</div>
							<!-- End counter-item -->
							<div class="counter-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">

									<div class="item-head">
										<i class="cr-send"></i>
									</div>
									<h6><?php echo $projectCount; ?></h6>
									<p>projects completed</p>
								</div>
							</div>
							<!-- End counter-item -->

							<div class="counter-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="cr-cup"></i>
									</div>
									<h6><?php echo $coffeeCount ?></h6>
									<p>cups of tea</p>
								</div>
							</div>
							<!-- End counter-item -->

							<div class="counter-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="cr-heart"></i>
									</div>
									<h6><?php  echo $clientCount ?></h6>
									<p>happy clients</p>
								</div>
							</div>
							<!-- End counter-item -->
						</div>
					</div>
					<!-- End container -->

				</section>

				<!-- ************************ -->
				<!--   Todo: TESTIMONIAL section custom post           -->
				<!-- ************************ -->


				<!-- ************************ -->
				<!--   CLIENTS                -->
				<!-- ************************ -->

				<section
					class="clients jarallax pt90 pb90"
					style="background-image: url(<?php echo $clientBg?>">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">


							<div class="col-sm-6 col-md-3 sm-mb40" data-sr>
							<div class="text-center">
								<img src="<?php echo $clientA; ?>" alt="client">
								</div>
							</div>
							<!-- End col-sm-6 col-md-3 -->

							<div class="col-sm-6 col-md-3 sm-mb40" data-sr>
								<div class="text-center">
								<img src="<?php echo $clientB; ?>" alt="client">
								</div>
							</div>
							<!-- End col-sm-6 col-md-3 -->

							<div class="col-sm-6 col-md-3 sm-mb40" data-sr>
								<div class="text-center">
									<img src="<?php echo $clientC; ?>" alt="client">
								</div>
							</div>
							<!-- End col-sm-6 col-md-3 -->

							<div class="col-sm-6 col-md-3 sm-mb40" data-sr>
								<div class="text-center">
									<img src="<?php echo $clientD; ?>" alt="client">
								</div>
							</div>
							<!-- End col-sm-6 col-md-3 -->

						</div>
					</div>
					<!-- End container -->

				</section>

				<!-- ************************ -->
				<!--   Todo: BLOG  section                 -->
				<!-- ************************ -->



			</main>
            <?php get_footer() ?>