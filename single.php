<?php get_header(); 
//portolio - portfolio items
//single.php - single post
//single.php to portolio.php
 
?>

<div class="page-title jarallax" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

				<div class="overlay"></div>
				<!-- End overlay -->
				<div class="container">
					<div class="text-center">

						<h1 class="tlt">
							<?php echo get_the_title();?>
						</h1>

						<div class="breadcrumbs">
							<ul class="list-none">
								<li>
									<a href="" class="animsition-link">Home</a>
								</li>
								<li>
                                    <!-- Todo: do this -->
									<a href="" class="animsition-link">Our works</a>
								</li>
								<li><?php echo get_the_title();?></li>
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
				<!--   SINGLE WORK            -->
				<!-- ************************ -->

				<section class="pt150">

					<div class="container">
						<div class="row">
							<div class="col-md-12 mb30">
								<?php the_content(); ?>
								<!-- End single-work-slider -->
							</div>
							<!-- End col-sm-4 -->
						</div>
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="single-work-wrap mt80 mb100">

									<div class="borders"></div>

									<div class="row">

										<div class="work-meta col-md-6 col-sm-12 sm-mb40" data-sr>
											<div class="text-center">
												<h6>date:
													<span><?php echo get_the_date(); ?></span>
												</h6>
											</div>
										</div>
										<!-- End col-md-3 col-sm-6 -->
										<!-- End col-md-3 col-sm-6 -->

										<div class="work-meta col-md-6 col-sm-12 sm-mb40" data-sr>
											<div class="text-center">
												<h6>project type:
													<span><?php 
                                                    $categories = get_the_category();
                                                    if (!empty( $categories ) ) {
                                                        $the_cat =  $categories[0]->name;
                                                        $cat_id = $categories[0]->cat_ID;
                                                        echo esc_html( $categories[0]->name );	
                                                    }
                                                    ?></span>
												</h6>
											</div>
										</div>
										<!-- End col-md-3 col-sm-6 -->

									
										<!-- End col-md-3 col-sm-6 -->

									</div>

								</div>
								<!-- End single-work-wrap -->
							</div>

							<div class="col-md-12">
								<?php echo get_the_excerpt(); ?>
							</div>

						</div>

					</div>
					<!-- End container -->

				</section>

				<!-- ************************ -->
				<!--   RELATED WORKS          -->
				<!-- ************************ -->

				<section class="pt150 pb150">

					<div class="container">

						<div class="section-title-sm">
							<h2 data-sr>related works</h2>

						</div>

					</div>
					<!-- End container -->

					<div class="container">

						<div class="owl-related-works">

						

                        <?php
								//WP Portfolio items
								$portfolio_query = array(
									'post_type' => 'post',
                                    'cat' => $cat_id,
									'posts_per_page' => 6
								);

								$portfolioItems = new Wp_Query($portfolio_query);
								while($portfolioItems->have_posts()){
									$portfolioItems->the_post();
								?>
							<!-- End crazy-portfolio-item -->

							<div class="crazy-portfolio-item with-figure f_web_design f_photography">
										<a href="<?php the_permalink(); ?>" class="animsition-link">
											<div
												class="image-wrap"
												style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>;"></div>
											<div class="figure cross"></div>
											<div class="overlay-color"></div>
										</a>
									</div>
							<!-- End crazy-portfolio-item -->

					
                            <?php } ?>

						</div>

					</div>
					<!-- End container -->

				</section>
			</main>

<?php get_footer(); ?>