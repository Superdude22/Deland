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
					<div class="small-3 column">
						<h3>Current Weather</h3>
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
						<div class="columns small-6">
								<h1>About Deland</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p class="blockquote">Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
						</div>
						<div class="columns small-4">	
								<img class="" src="http://lorempixel.com/400/200/animals/8" alt="">
						</div>
						<div class="medium-1 column show-for-medium">
						</div>					
				</section>
				<section class="disciplines " id="disciplines">
					<div class="row expanded align-middle pos-adjust">
						<div class="small-1 column otter-stripe">
						</div>
						<div class="column shrink">
							<h1>Skydiving Info</h1>
						</div>
						<div class="column otter-stripe">
						</div>
					</div>
					
					<div class="row expanded medium-collapse align-middle">
						<div class="columns medium-4"><h3>Tandem<hr></h3><img class="discipline" src="http://lorempixel.com/400/200/animals/1" alt=""></div>
						<div class="columns medium-4"><h3>Learn to jump<hr></h3><img class="discipline" src="http://lorempixel.com/400/200/animals/2" alt=""></div>
						<div class="columns medium-4"><h3>Experienced Jumpers<hr></h3><img class="discipline" src="http://lorempixel.com/400/200/animals/3" alt=""></div></div>
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
				
				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-10 columns">
						<h1>Contact Deland / Map</h1>
						<div class="row small-12 expanded columns">
							<div class="small-6 columns contact-links align-middle">
								<ul class="no-bullet">
									<li>
										<p><i class="fa fa-facebook-square fa-fw"></i>&nbsp;Facebook</p>
									</li>
									<li>
										<p><i class="fa fa-twitter-square fa-fw"></i>&nbsp;Twitter</p>
									</li>
									<li>
										<p><i class="fa fa-instagram fa-fw"></i>&nbsp;Instagram</p>
									</li>
									<li>
										<p><i class="fa fa-youtube-square fa-fw"></i>&nbsp;YouTube</p>
									</li>
									<li>
										<p><i class="fa fa-envelope fa-fw"></i>&nbsp;Email</p>
									</li>
									<li>
										<p><i class="fa fa-map-marker fa-fw"></i>&nbsp;Location</p>
									</li>
								</ul>
							</div>
							<div class="small-6 columns g-map">
								<img src="http://lorempixel.com/400/200/animals/8" alt="">
							</div>
						</div>
						
					</div>
					<div class="medium-1 column show-for-medium">
						</div>
				</section>
				<section class="photostream">
					<h1>Photostream</h1>
					<p>Should this be instagram or hosted images? Videos?</p>
					
				</section>
				<aside class="promo">
					<p>Promo Banner</p>
				</aside>


				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>

			


			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
</div>

<?php get_footer(); ?>