<div id="thingy">
	<div class="logo-bar" id="logo-bar">
				<div class="row logo align-bottom expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="medium-2 column show-for-medium">
						<a href="<?php echo home_url();?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/deland.png" alt="">
						</a>
					</div>
					<div class="column">
						</div>
					<div class="weather small-10 medium-3 column">
						<h3>Current Weather</h3>
						<p>We're Jumping!!</p>
							<div class="row align-bottom">
								<div class="weather-icon medium-3 columns">
									<i class="fa fa-sun-o fa-fw"></i>
								</div>
								<div class="columns">
									<div class="temp">
										<p>77</p>
									</div>
									<div class="wind">
										<p>27</p>
									</div>
								</div>
							</div>
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
			</div>
</div>