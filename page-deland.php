<?php get_header(); ?>
<?php $site_data_post = 1864; ?>
	
	<div id="content fun-jumper">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">

				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-11 columns prices">
						<h1>Facilities:</h1>
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


				<section class="about row expanded " id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns small-11 medium-6 words">
								<h1><span class="sm-dec">About</span> <br class="hide-for-large-up">Our Planes</h1>
								<h2>Title Of Image</h2>

								<p class="blockquote">Something relating to the image</p>
								<p>A Little Bit more information about the Image.</p>
						</div>
						<div class="columns small-12 medium-4 bg-test">
								<a href="<?php 	the_field('promo_link'); ?>">
								<img class="" src="<?php the_field('promo_image'); ?>" alt="">
								<div class="inner">
									<h2>Slideshow&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
								</div>
								</a>
						</div>
						<div class="medium-1 column show-for-medium">
						</div>					
				</section>
				
				<section class="pac-wing row expanded some-content">
					<div class="inner expanded row">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="row column small-11 medium-10">
							<div class="row expanded small-12 columns">
								<h1 class="ready_set"><span class='ready'>The</span><br><span class='set'>Perfect</span><br><span class='highlight'>Spot</span></h1>
							</div>
							<div class="row expanded small-12 columns">
								<div class="columns expanded words font-test">
									<div class="extra_image small-12 columns collapse">
											<img class="" src="<?php the_field('image_1'); ?>" alt="">
										</div>

									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    					<?php the_content(); ?>
			    
			    					<?php endwhile; endif; ?>
									
																



								</div>
							</div>
					</div>
						<div class="medium-1 column show-for-medium">
						</div>
					</div>
				</section>
				
				
				
				<section class="faq row expanded">
					<div class="row expanded align-middle pos-adjust small-12 columns">
						<div class="show-for-medium small-1 column otter-stripe">
						</div>
						<div class="column shrink">
							<h1>History</h1>
						</div>
						<div class="columns otter-stripe">
						</div>
					</div>
					<div class="row small-12 columns medium-unstack">
						<div class="small-11 medium-4 small-offset-1 columns requirements">
							<h3>Events List:</h3>
							<ul>
								<li>Must be at least 18 years of age, no exceptions.</li>
								<li>You must provide a valid government issued photo ID.</li>
								<li>Weigh no more than 225 pounds. There are weight exceptions based on height and weight proportions. For further details please call: <a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', $site_data_post); ?></a></li>
								<li>Absolutely no alcohol or drugs consumption prior to skydiving!</li>
								<li>Please allow three to four hours to complete the experience with us.</li>
								<li>Safety is our number one priority and there may be some physical limitations that will require an evaluation from a Skydive DeLand Instructor.</li>
							</ul>

							<h3>What to Wear:</h3>
							<ul>
								<li>Comfortable clothing according to the weather</li>
								<li>Sneakers or tennis shoes</li>
								<li>Long hair should be put in a pony tail</li>
								<li>We recommend that you do not wear dangling jewelry, or anything valuable</li>
							</ul>
						</div>
						<div class="small-12 medium-6 columns">
							<h3>Calendar:</h3>
							
							<div class="faq-list">
								<?php 
									query_posts('post_type=tandem_faq' );
								?>
								<ul class="accordion" data-accordion data-allow-all-closed="true">

									<?php while (have_posts()) : the_post(); ?>
										<li class="question accordion-item" data-accordion-item>
											<a href="#" class="accordion-title"><h1><?php the_field('question'); ?></h1></a>
											<div class="accordion-content" data-tab-content>
												<?php the_field('answer'); ?>
											</div>
										</li>						
									<?php endwhile;?>
								</ul>
							</div>
						</div>
						
					</div>

						
					
				</section>
				<section class="photostream">
					<h1>Photostream</h1>
					<p>Should this be instagram or hosted images? Videos?</p>
					<div class="row expanded small-collapse">
						<div class="columns"><img src="http://lorempixel.com/400/400/nature" alt=""></div>
						<div class="columns"><img src="http://lorempixel.com/400/400/nature" alt=""></div>
						<div class="columns"><img src="http://lorempixel.com/400/400/nature" alt=""></div>
						<div class="columns"><img src="http://lorempixel.com/400/400/nature" alt=""></div>
						<div class="columns"><img src="http://lorempixel.com/400/400/nature" alt=""></div>
					</div>
					
					
				</section>							
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>