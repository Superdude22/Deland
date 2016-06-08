<div id="thingy">
	<div class="logo-bar" id="logo-bar">

			<?php if ( is_woocommerce() || is_cart() ) { ?>
				<div class="row logo align-bottom expanded">
				<?php if( is_woocommerce() ) { ?>

					
					<div class="column">
						</div>
					<div class="weather show-for-medium medium-2 column">
							<div class="row align-bottom">
								<a href="<?php echo home_url();?>">
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">
								</a>
							</div>
					</div>
					<div class="medium-1 column show-for-medium">
					</div>	

				<?php } ?>
										
				</div>
				<div class="row expanded nav-bar">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="columns">
						<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					</div>
					<div class="medium-1 column show-for-medium">
						</div>
				</div>
				

			<?php }else{ ?>

				<div class="row logo align-bottom expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="medium-2 column show-for-medium">
						<a href="<?php echo home_url();?>">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">
						</a>
					</div>
					<div class="column">
						</div>
					<div class="weather small-8 medium-5 large-2 column text-right">
						<h3>Current Weather</h3>
						<?php echo do_shortcode('[awesome-weather location="Deland" units="F" owm_city_id="4152890" size="wide" locale="en"]' ); ?>
					</div>
					<div class="medium-1 column show-for-medium">
					</div>					
				</div>
				<div class="row expanded nav-bar">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="columns">
						<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					</div>
					<div class="medium-1 column show-for-medium">
						</div>
				</div>
			<?php } ?>
	</div>	
</div>