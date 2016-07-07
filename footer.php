					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="small-12 columns">
								<div class="row expanded medium-unstack align-top collapse">
									<div class="columns">
										<h3>Social Media Links<hr></h3>
										<ul class="no-bullet">
											<li>
												<a href="https://www.facebook.com/SkydiveDeLand/"><i class="fa fa-facebook-square fa-fw"></i></a>
											</li>
											<li>
												<a href="/"><i class="fa fa-twitter-square fa-fw"></i></a>
											</li>
											<li>
												<a href="https://www.instagram.com/skydivedeland/"><i class="fa fa-instagram fa-fw"></i></a>
											</li>
											<li>
												<a href="https://www.youtube.com/channel/UCoKIn3K3VZYc8-IU7Zo-ncg"><i class="fa fa-youtube-square fa-fw"></i></a>
											</li>
											<li>
												<a href="mailto:info@skydivedeland.com"><i class="fa fa-envelope fa-fw"></i></a>
											</li>
											<li>
												<a href="https://www.google.com/maps/place/Skydive+Deland+Inc/@29.063578,-81.2814677,17z/data=!3m1!4b1!4m5!3m4!1s0x88e71c68a19df02d:0x4cc6f111f38d39d2!8m2!3d29.063578!4d-81.279279"><i class="fa fa-map-marker fa-fw"></i></a>
											</li>
										</ul>
							
									</div>
									<div class="columns">
										<h3>Phone<hr></h3>
										<h2 class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></h2>
							
										<h3>Address<hr></h3>
										<div class="vcard"> 
										   <div class="adr"> 
										      <div class="street-address">1600 Flightline Blvd</div> 
										      <div class="locality">DeLand, FL  <span class="postal-code">32724</span ></div >  										       
										      <div class="country-name">USA</div > 
										   </div> 
										  </div>
									</div>
									<div class="columns">
										<h3>Credits<hr></h3>

										<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">
										<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
										<p>Photos: Link to Credits Page</p>
										<p>Website:</p>
									</div>
							
								</div>
								
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
					

					</div>  <!-- end .all-wrap -->
					</div>  <!-- end #skrollr-body -->

				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->