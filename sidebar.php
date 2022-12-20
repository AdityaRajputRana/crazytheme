


<nav class="crazy-nav">
<?php
$args = array(
    'container_class' => '',
    'menu_class' => 'sf-menu',
);
wp_nav_menu( $args ); 
?>
					</nav>

                    <a href="#" class="open-menu">
						<i class="burger-icon">
							<i></i>
						</i>
					</a>
				</div>
				<!-- End container -->
				<div class="container">
					<div class="row">
						<div class="mobile-menu-wrap">
							<nav>
                            <?php
$args = array(
    'container_class' => '',
    'menu_class' => 'list-none',
);
wp_nav_menu( $args ); 
?>
							</nav>
						</div>
						<!-- End mobile-menu-wrap -->
					</div>
				</div>