<?php get_header(); ?>

<div id="sticky-wrap">
	<div class="nav-pos" data-sticky-container>
		<div class="sticky" id="example" data-sticky data-margin-top="0" style="width:100%;" data-margin-bottom="0" data-top-anchor="logo-bar" data-btm-anchor="sticky-wrap:bottom">
			
			<div class="logo-bar" id="logo-bar">
				<div class="row logo align-bottom expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="medium-2 column show-for-medium">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/deland.png" alt="">
					</div>
					<div class="column">
						</div>
					<div class="weather small-3 column">
						<h3>Current Weather</h3>
						<p>We're Jumping!!</p>
							<div class="row align-bottom">
								<div class="weather-icon small-3 columns">
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
	</div>	
	
	<div id="content">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">

				<section class="about row expanded" id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns small-6 words">
								<h1><span class="sm-dec">About</span> Tandems</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p class="blockquote">Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
						</div>
						<div class="columns small-4 bg-test">	
								<img class="" src="http://lorempixel.com/500/645/animals/8" alt="">
								<div class="inner">
									<h2>Different Font&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
								</div>
								
						</div>
						<div class="medium-1 column show-for-medium">
						</div>					
				</section>
				
				<section class="pac-wing row expanded some-content">
					<div class="inner expanded row">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="row column small-10">
							<div class="row expanded">
								<h1>Something Promotional</h1>
							</div>
							<div class="row expanded">
								<div class="column words">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis vel omnis explicabo corrupti quod repellendus, quam labore porro iure, hic expedita sequi! Doloribus impedit sit fuga laboriosam iusto, earum libero laudantium voluptates. Dolores suscipit obcaecati possimus exercitationem consectetur unde, nostrum commodi, distinctio, maiores tempora libero veritatis ad necessitatibus vel doloremque.</p>
									<p class="pullquote">Quasi doloribus blanditiis porro molestias quam commodi eligendi ea maiores magnam, in dolorem expedita culpa dolore autem fugit repellendus numquam tempore quia sequi ipsa nesciunt maxime adipisci vero tempora!</p>
									<p>Hic voluptate beatae at, earum, ducimus, accusamus repellendus harum quo nulla unde reiciendis autem assumenda veritatis culpa provident quisquam ut voluptas iure quas architecto. Quia nihil, quod accusantium ut tempora ad a officiis temporibus adipisci cupiditate cumque ea hic corporis, deleniti voluptatem nam, exercitationem velit eius voluptates. Quo, mollitia. Quod!</p>

									<ul>
										<li>Lorem ipsum dolor sit.</li>
										<li>Tempore dolore sit molestias?</li>
										<li>Earum vitae quod veritatis!</li>
									</ul>

								</div>
								<div class="column picture">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tandem cutout.jpg" alt="">							
									<img src="http://lorempixel.com/400/200/animals/3" alt="">

								</div>
							</div>
						<div class="cloud"></div>


						</div>
						<div class="medium-1 column show-for-medium">
						</div>
					</div>
				</section>
				
				
				<section class="faq row expanded">
					<div class="row expanded align-middle pos-adjust small-12 columns">
						<div class="small-1 column otter-stripe">
						</div>
						<div class="column shrink">
							<h1>Frequently Asked</h1>
						</div>
						<div class="columns otter-stripe">
						</div>
					</div>
					<div class="row expanded small-12 columns">
						<div class="small-7 small-offset-1 columns">
							<div class="faq-list">
							<ul class="accordion" data-accordion data-allow-all-closed="true">
								<li class="question accordion-item" data-accordion-item>
									<a href="#" class="accordion-title">
										<h1>Lorem ipsum dolor.</h1>
										<div class="date">
												<p class="start"><span class="time">8:45am</span> 4/15 - </p><p>4/17</p>
										</div>
									</a>
									<div class="accordion-content" data-tab-content>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, voluptatem.</p>
									</div>
								</li>
								<li class="question accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><h1>Lorem ipsum dolor.</h1></a>
									<div class="accordion-content" data-tab-content>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, voluptatem.</p>
									</div>
								</li>
								<li class="question accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><h1>Lorem ipsum dolor.</h1></a>
									<div class="accordion-content" data-tab-content>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, voluptatem.</p>
									</div>
								</li>
								<li class="question accordion-item" data-accordion-item>
									<a href="#" class="accordion-title"><h1>Lorem ipsum dolor.</h1></a>
									<div class="accordion-content" data-tab-content>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, voluptatem.</p>
									</div>
								</li>
							</ul>
							<div class="load-more">	
								load more
							</div>
						</div>
						<div class="small-4 columns">
							<p>Something Decorative/Promotional</p>
							<img src="http://lorempixel.com/400/200/animals/7" alt="">
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
</div>

<?php get_footer(); ?>