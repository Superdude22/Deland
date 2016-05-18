<?php get_header(); ?>	
	
	<div id="content">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">

				<section class="about row expanded" id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns small-6 words">
								<h1><span class="sm-dec">About</span> Deland</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p class="blockquote">Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
						</div>
						<div class="columns small-4 bg-test">
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
						<?php $pages = get_pages( array( 'include' => '1846, 1828, 1855' ) ); ?> 
						    <?php foreach ( $pages as $page ) : ?>
							<div class="columns medium-4">
								<?php	
									$img_url = '';
									$img_url = wp_get_attachment_url( get_post_thumbnail_id($page->ID), 'full' ); ?>
								<h3><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?><hr></h3>
								<a href="<?php echo get_page_link( $page->ID ); ?>">
									<img class="discipline" src="<?php echo $img_url; ?>" alt="<?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?>">
								</a>
							</div>
							<?php endforeach; ?>
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
				
				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-11 columns">
						<h1>Contact Deland / Map</h1>
						<div class="row small-12 expanded columns">
							<div class="small-5 columns contact-links align-middle">
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
				</section>
				<section class="events row expanded">
					<div class="medium-1 column show-for-medium">
					</div>
					<div class="row columns">
					<div class="small-11 columns">	
						<h1>Upcoming Events</h1>
					</div>
					<div class="row small-11 columns">
						<div class="events-list small-4 columns">
								<ul class="accordion" data-accordion data-allow-all-closed="true">
							<li class="event accordion-item" data-accordion-item>
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
							<li class="event accordion-item" data-accordion-item>
								<a href="#" class="accordion-title"><h1>Lorem ipsum dolor.</h1></a>
								<div class="accordion-content" data-tab-content>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, voluptatem.</p>
								</div>
							</li>
							<li class="event accordion-item" data-accordion-item>
								<a href="#" class="accordion-title"><h1>Lorem ipsum dolor.</h1></a>
								<div class="accordion-content" data-tab-content>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, voluptatem.</p>
								</div>
							</li>
							<li class="event accordion-item" data-accordion-item>
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
						<div class="calendar small-7 columns">	
							<h2>Other Info</h2>
							<li class="row day-header small-unstack">
							<div class="columns day"><span class="show-for-medium-up">Lorem ipsum.</span><span class="show-for-small-only">Lorem.</span></div>
							<div class="small-1 day"><span class="show-for-medium-up">Recusandae, eos.</span><span class="show-for-small-only">Inventore!</span></div>
							<div class="small-1 day"><span class="show-for-medium-up">Officiis, facilis.</span><span class="show-for-small-only">Odit.</span></div>
							<div class="small-1 day"><span class="show-for-medium-up">Repellat, labore!</span><span class="show-for-small-only">Voluptate.</span></div>
							<div class="small-1 day"><span class="show-for-medium-up">Quas, eveniet.</span><span class="show-for-small-only">Doloremque.</span></div>
							<div class="small-1 day"><span class="show-for-medium-up">Officiis, saepe.</span><span class="show-for-small-only">Harum.</span></div>
							<div class="small-1 day"><span class="show-for-medium-up">Totam, atque!</span><span class="show-for-small-only">Sint.</span></div>
						</li>
						<li class="week row small-unstack">
							<div class="columns day previous-month">1</div>
							<div class="columns day">2</div>
							<div class="columns day">3</div>
							<div class="columns day">4</div>
							<div class="columns day">5</div>
							<div class="columns day">6</div>
							<div class="columns day">7</div>
						</li>
						<li class="week row small-unstack">
							<div class="columns day">3</div>
							<div class="columns day">3</div>
							<div class="columns day today">3</div>
							<div class="columns day">3</div>
							<div class="columns day">3</div>
							<div class="columns day">3</div>
							<div class="columns day">3</div>
						</li>
						<li class="week row small-unstack">
							<div class="columns day">12</div>
							<div class="columns day">12</div>
							<div class="columns day">12</div>
							<div class="columns day">12</div>
							<div class="columns day">12</div>
							<div class="columns day">12</div>
							<div class="columns day">12</div>
						</li>
						<li class="week row small-unstack">
							<div class="columns day">13</div>
							<div class="columns day">13</div>
							<div class="columns day">13</div>
							<div class="columns day">13</div>
							<div class="columns day">13</div>
							<div class="columns day">13</div>
							<div class="columns day">13</div>
						</li>
						<li class="week row small-unstack">
							<div class="columns day">5</div>
							<div class="columns day">5</div>
							<div class="columns day">5</div>
							<div class="columns day">5</div>
							<div class="columns day">5</div>
							<div class="columns day">5</div>
							<div class="columns day">5</div>
						</li>
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