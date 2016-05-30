					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="medium-10 columns">
								<div class="row expanded medium-unstack align-middle collapse">
						
									<div class="columns">
									<h3>Social Media Links</h3>
									<ul class="no-bullet">
										<li>
											<a href="/"><i class="fa fa-facebook-square fa-fw"></i><br class=show-for-small-only>&nbsp;Facebook</a>
										</li>
										<li>
											<a href="/"><i class="fa fa-twitter-square fa-fw"></i>&nbsp;<br class=show-for-small-only>Twitter</a>
										</li>
										<li>
											<a href="/"><i class="fa fa-instagram fa-fw"></i>&nbsp;<br class=show-for-small-only>Instagram</a>
										</li>
										<li>
											<a href="/"><i class="fa fa-youtube-square fa-fw"></i>&nbsp;<br class=show-for-small-only>YouTube</a>
										</li>
										<li>
											<a href="/"><i class="fa fa-envelope fa-fw"></i>&nbsp;<br class=show-for-small-only>Email</a>
										</li>
										<li>
											<a href="/"><i class="fa fa-map-marker fa-fw"></i>&nbsp;<br class=show-for-small-only>Location</a>
										</li>
									</ul>
							
									</div>
									<div class="columns">
							<h2 class="phone"><a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', $site_data_post); ?></a></h2>
							
									</div>
									<div class="columns">
									<h3>Credits</h3>
									Logo
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
									<p>Photos: Instagram Links?</p>
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