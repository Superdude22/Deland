<?php get_header(); ?>
<?php $slideshow = get_field('slideshow'); ?>
	
	<div id="content aff">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">


				<section class="about row expanded " id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns small-11 medium-6 words">
								<h1><span class="sm-dec">About</span> <br class="hide-for-large-up">AFF</h1>
								<h2><strong>A</strong>ccelerated <strong>F</strong>ree <strong>F</strong>all</h2>

								<p class="blockquote">The Accelerated Freefall Program was first developed and implemented in DeLand Florida. The instructional program is designed to teach beginners to become skydivers.</p>
								<p>The Accelerated Freefall ( AFF) is a seven level progression program designed to progress you to the point where you can skydive safely by yourself. Skydive DeLand’s full time professional instructors will provide personalized training during the AFF course.</p>
						</div>
						<div class="columns small-12 medium-4 bg-test">
								<a href="<?php 	the_field('promo_link'); ?>">
								<img class="" src="<?php the_field('promo_image'); ?>" alt="">
								<div class="inner">
									<h2><?php the_field('promo_lang'); ?>&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
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
								<h1 class="ready_set"><span class='set'>Learn To</span><br><a href="<?php 	the_field('promo_link'); ?>" class='highlight go'>Skydive!</a></h1>
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
				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-11 columns prices">
						<h1>The Course:</h1>
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
											<th width="100">
												Level:
											</th>
						
											<th width="300">
												Objective:
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											
											<td>Relax have fun and show ground, altitude and instructor awareness and the ability to pull on your own and on time</td>
										</tr>
										<tr>
											<td>2</td>
										
											<td>Introduces the student to freefall turns (jump with two Instructors.</td>
										</tr>
										<tr>
											<td>3</td>
										
											<td>Jump with two Instructors, learn forward movement and then fly 'solo' for the rest of the skydive</td>
										</tr>
										<tr>
											<td>4</td>
										
											<td>One Instructor, teaches 360 turns in freefall</td>
										</tr>
										<tr>
											<td>5</td>
										
											<td>Move to forward motion and docking on your Instructor</td>
										</tr>
										<tr>
											<td>6</td>
											
											<td>Solo exit from the airplane, backloops and recovery, tracking before pull.</td>
										</tr>
										<tr>
											<td>7</td>
										
											<td>The Graduation Dive! Diving solo exit, frontloops, backloops, turns, docking- just about anything you want to show off, after all it's your graduation</td>
										</tr>
										
									</tbody>
								</table>

								<h2>7 Jump AFF Package</h2>

								<table class="hover prepay">
									<thead>
										<tr>
											<th width="300">
												Skydive DeLand offers a seven jump prepay special that includes the ground school for the AFF program, all the instruction and gear for seven jumps.
											</th>
											<th width="100">Price:</th>
						
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>7 Jump Special</td>
											
											<td>$1299.00</td>
										</tr>
										<tr>
											<td>Additional jumps needed to complete the AFF program charged at the pay as you go rate.</td>
											<td></td>
										</tr>
										
									</tbody>
								</table>

								<h2>Or: Pay as you go</h2>

								<table class="hover payas">
									<thead>
										<tr>
											<th width="300">
												Jump:
											</th>
						
											<th width="100">
												Price:
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a href="/">Ground School & Level 1</a></td>
											
											<td>$361.00</td>
										</tr>
										<tr>
											<td>Levels 2 & 3</td>
										
											<td>$204.00 each</td>
										</tr>
										<tr>
											<td>Levels 4 to 7</td>
										
											<td>$174.00 each</td>
										</tr>
										<tr>
											<td>Instructor freefall video only is provided on all AFF jumps.</td>
											<td></td>
										</tr>
																			
									</tbody>
								</table>

								<div class="bg-test no-pic">
								<a href="<?php 	the_field('promo_link'); ?>">
								<div class="inner">
									<h2><?php the_field('promo_lang'); ?>&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
								</div>
								</a>
								</div>


							</div>
						</div>
						
					</div>
				</section>
				
				
				<section class="faq row expanded">
					<div class="row expanded align-middle pos-adjust small-12 columns">
						<div class="show-for-medium small-1 column otter-stripe">
						</div>
						<div class="column shrink">
							<h1>Requirements and FAQs</h1>
						</div>
						<div class="columns otter-stripe">
						</div>
					</div>
					<div class="row small-12 columns medium-unstack">
						<div class="small-11 medium-5 small-offset-1 columns requirements">
							<h3>Requirements:</h3>
							<ul>
								<li>Must be at least 18 years of age, no exceptions. Anyone over the age of 60 must be evaluated and have no medical infirmities. Please call Skydive DeLand at <a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', site_data()); ?></a> for additional information.</li>
								<li>Weigh no more than 230 pounds and be in good physical shape.</li>
								<li>Provide a valid government issued photo ID.</li>
								<li>Absolutely no alcohol or drugs consumption prior to skydiving!</li>
								<li>Reservation to attend the AFF ground special must be at least 24 hours in advance.</li>
								<li>Please allow all day to complete the AFF ground school and first skydive.</li>
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
						<div class="small-12 medium-5 columns">
							<h3>Frequently Asked:</h3>
							
							<div class="faq-list">
								<?php 
									query_posts('post_type=afffaq' );
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