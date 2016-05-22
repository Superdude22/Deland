<?php get_header(); ?>
<?php $site_data_post = 1864; ?>
	
	<div id="content tandems">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">


				<section class="about row expanded " id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns medium-6 words">
								<h1><span class="sm-dec">About</span> <br class="hide-for-large-up">Tandem Skydiving</h1>
								<p>The <strong>Tandem Skydive</strong> is currently used world wide and is the most popular way for first-time jumpers to experience the <em>thrill of the sport of skydiving.</em></p>
								<p class="blockquote">The method of tandem skydive and the equipment was conceived and developed here in DeLand, Florida.</p>
								<p>Through the tandem program you will jump with one of Skydive DeLand’s highly experienced instructors using a parachute system specially built for two. Your harness is connected to your instructor’s from start to finish.</p>
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
						<div class="row column small-10">
							<div class="row expanded small-12 columns">
								<h1 class="pic-bg"><span class='highlight2'>Ready,</span><br> Set, <br><span class='highlight'>Go</span></h1>
							</div>
							<div class="row expanded small-12 columns">
								<div class="column words font-test">
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    					<?php the_content(); ?>
			    
			    					<?php endwhile; endif; ?>
									
									<h1 class="titillium">This Big Font</h1>
									<p class="titillium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis harum suscipit natus minima id fuga deleniti illo recusandae a hic.</p>
									<h1 class="exo">This Big Font</h1>
									<p class="exo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis harum suscipit natus minima id fuga deleniti illo recusandae a hic.</p>
									



								</div>
							</div>
						<div class="cloud"></div>


						</div>
						<div class="medium-1 column show-for-medium">
						</div>
					</div>
				</section>
				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-11 columns">
						<h1>Prices:</h1>
						<div class="row small-12 expanded columns">
							<div class="small-12 medium-7 columns">
								<table class="hover">
									<thead>
										<tr>
											<th>
												Tandem Skydive
											</th>
											<th>
												Price:
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1 - 3 people</td>
											<td>$189 each</td>
										</tr>
										<tr>
											<td>Video and Stills Package</td>
											<td>+$90 each</td>
										</tr>
										<tr>
											<td>4 - 6 people</td>
											<td>$165 each</td>
										</tr>
										<tr>
											<td>Video and Stills Package</td>
											<td>+$90 each</td>
										</tr>
										<tr>
											<td>7 or more people</td>
											<td>$155 each</td>
										</tr>
										<tr>
											<td>Video and Stills Package</td>
											<td>+$90 each</td>
										</tr>
										<tr>
											<td>
												Steston, ERAU, FCU, and UCF students call for student discount price: <a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', $site_data_post); ?></a>
											</td>
											<td></td>									
										</tr>
									</tbody>
								</table>
								<p>*All our advertised prices reflect a 5% cash and debit discount. Visa and Mastercard payments do not qualify for the cash discount.</p>
								<p>*Proces subject to change without notice.</p>
							</div>
							<div class="small-12 medium-3 columns g-map">
								<img src="http://lorempixel.com/400/200/animals/8" alt="">
							</div>
						</div>
						
					</div>
				</section>
				
				
				<section class="faq row expanded">
					<div class="row expanded align-middle pos-adjust small-12 columns">
						<div class="small-1 column otter-stripe">
						</div>
						<div class="column shrink">
							<h1>Requirements and FAQs</h1>
						</div>
						<div class="columns otter-stripe">
						</div>
					</div>
					<div class="row expanded small-12 columns">
						<div class="small-5 small-offset-1 columns">
							<h3>Requirements</h3>
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
						<div class="small-5 columns">
							<h3>Frequently Asked Questions</h3>
							
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
				<aside class="promo">
					<p>Promo Banner</p>
				</aside>
									
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>