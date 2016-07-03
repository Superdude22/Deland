<?php get_header(); ?>
<?php $slideshow = get_field('slideshow'); ?>
	
	<div id="content fun-jumper">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">

				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-11 columns prices">
						<h1>Prices:</h1>
						<div class="row small-12 expanded columns collapse">
							<div class="small-12 medium-10 columns">
							<div class="bg-test">
								<a href="<?php 	the_field('promo_link'); ?>">
								<img class="" src="<?php the_field('promo_image'); ?>" alt="">
								<div class="inner">
									<h2><?php the_field('promo_lang'); ?>&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
								</div>
								</a>
							</div>
								
								<table class="hover">
									<thead>
										<tr>
											<th width="200">
												Altitude:
											</th>
											<th width="100">
												Price:
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>5,000 ft. / 1500 m </td>
											<td>$18</td>
										</tr>
										<tr>
											<td>13,500 ft. / 4100 m</td>
											<td>$24</td>											
										</tr>
																				
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</section>
				<section class="row expanded image_2">
					<img class="" src="<?php the_field('image_2'); ?>" alt="">					
				</section>

				<section class="about row expanded " id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns small-11 medium-4 words">
								<h1><span class="sm-dec">About</span> <br class="hide-for-large-up">Our Facilites</h1>
								<h3>Full Gear Store</h3>
								<h3>Packing Hangar</h3>
								<p>With a Full Staff of Professional Packers!</p>								
								<h3>A/C Team Rooms and Packing</h3>
								<br>
								<h2>Open Daily</h2>
								<h3>9:00 am - Sunset</h3>
								<h3>If it's Jumpable, We're Flying!</h3S>
						</div>
						<div class="columns small-12 medium-6 bg-test">
								<img class="" src="<?php the_field('image_3'); ?>" alt="">
								<div class="inner">
									<h2>&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
								</div>
						</div>
						<div class="medium-1 column show-for-medium">
						</div>					
				</section>
				
				<section class="pac-wing row expanded some-content">
					<div class="inner expanded row">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="row column small-11 medium-10 coaching">						
							<div class="row expanded small-12 columns">
								<h1 class="ready_set"><span class='ready'>Get,</span><br><span class='set'>Some,</span><br><span class='highlight'>Coaching!</span></h1>
							</div>

							<div class="row expanded small-12 columns">
								<div class="columns expanded">
									<div class="extra_image small-12 columns collapse clearfix">
										<img class="" src="<?php the_field('image_1'); ?>" alt="">
									</div>
									<?php query_posts('post_type=coaches&order=DESC' ); ?>

									<?php while (have_posts()) : the_post(); ?>
										<div class="small-12 medium-6 columns float-left coach">
											<?php if ( has_post_thumbnail() ) : ?>											
												<a href="<?php the_field('coach_website'); ?>" title="<?php the_title_attribute(); ?>">
													<div class="coach-logo" style="background-image: url(<?php the_post_thumbnail_url('full');?>);">								
													</div>
												</a>
	
												
											<?php endif; ?>
											<a href="<?php the_field('coach_website'); ?>"><h1><?php the_title(); ?></h1></a>
											<hr>											
											<?php the_content(); ?>										
										</div>	
									<?php endwhile;?>

																
								</div>
							</div>
					</div>
						<div class="medium-1 column show-for-medium">
						</div>
					</div>
				</section>
				
				
				
				<section class="faq row expanded spot" id="spot">
					<div class="row expanded align-middle pos-adjust small-12 columns">
						<div class="show-for-medium small-1 column otter-stripe">
						</div>
						<div class="column shrink">
							<h1>The Perfect Spot</h1>
						</div>
						<div class="columns otter-stripe">
						</div>
					</div>
					<div class="row small-12 columns medium-unstack">
						<div class="small-11 medium-5 small-offset-1 columns requirements">
							<h3>Full Service Restaurant and Bar</h3>
							<ul>
								<li>Open every day. Laid back atmosphere.</li>
								<li>Great Food, Great Service, Great View!</li>
								<li>Come Watch The Jumpers Land!</li>							
							</ul>

							<h3>Sunday - Thursday:</h3>
							<p>8:00 am - 9:00 pm</p>
							<h3>Friday - Saturday:</h3>
							<p>8:00 am - 10:00 pm</p>
							
							<h2><a href="tel://1-386-734-0088"><i class="fa fa-phone fa-fw"></i>&nbsp; (386) 734-0088</a></h2>

							<h3>Link to Menu(coming soon)</h3>
						</div>
						<div class="small-12 medium-5 columns">
							<h3>Photos: (Coming Soon)</h3>					
						</div>
						
					</div>

						
					
				</section>
				<?php if( get_field('slideshow') ): ?>	
					<section class="photostream">
					<h1>Photostream</h1>
					<div class="row expanded small-collapse">
						
							<?php echo $slideshow; ?>
						
					</div>								
					</section>
				<?php endif; ?>	
												
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>