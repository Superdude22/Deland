<?php get_header(); ?>
<?php $slideshow = get_field('slideshow'); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row expanded">
	
			<main id="main" class="small-12 columns" role="main">

				<section class="about row expanded medium-unstack" id="about">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="columns medium-6 words">
								<h1><span class="sm-dec">About</span> Deland</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p class="blockquote">Incidunt voluptatem veritatis quidem natus quaerat.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum sapiente quam debitis ut modi alias quae perferendis ratione, nihil fugiat, ab veniam neque. Incidunt voluptatem veritatis quidem natus quaerat.</p>
						</div>
						<div class="columns small-12 medium-4 bg-test">
								<a href="<?php 	the_field('promo_link'); ?>">
								<div class="img_div cover" style="background: url(<?php the_field('promo_image'); ?>);">	</div>
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
						<div class="small-1 column otter-stripe show-for-medium">
						</div>
						<div class="column shrink">
							<h1>Skydiver Info</h1>
						</div>
						<div class="column otter-stripe">
						</div>
					</div>
					
					<div class="row expanded medium-unstack align-middle collapse">
						<?php 
							$nav_array = nav_array();
						$pages = get_pages( array( 'include' => $nav_array ) ); ?> 
						    <?php foreach ( $pages as $page ) : ?>
							<div class="columns">
								<?php	
									$img_url = '';
									$img_url = wp_get_attachment_url( get_post_thumbnail_id($page->ID), 'full' ); ?>
								

								<a href="<?php echo get_page_link( $page->ID ); ?>">
									
									<h3><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?><hr></h3>
									<div class="discipline cover" style="background: url(<?php echo $img_url; ?>);">
					
										
									</div>									
								</a>
							</div>
							<?php endforeach; ?>
					</div>
				</section>

				<section class="pac-wing row expanded some-content">
					<div class="inner expanded row">
						<div class="medium-1 column show-for-medium">
						</div>
						<div class="row columns small-10">
							<div class="row expanded">
								<h1>Something Promotional</h1>
							</div>
							<div class="row expanded ">
								<div class="small-12 medium-8 columns words">
									<p>Latest Promo Ad Picture</p>
									<p class="pullquote">Quasi doloribus blanditiis porro molestias quam commodi eligendi ea maiores magnam, in dolorem expedita culpa dolore autem fugit repellendus numquam tempore quia sequi ipsa nesciunt maxime adipisci vero tempora!</p>
									<p>Hic voluptate beatae at, earum, ducimus, accusamus repellendus harum quo nulla unde reiciendis autem assumenda veritatis culpa provident quisquam ut voluptas iure quas architecto. Quia nihil, quod accusantium ut tempora ad a officiis temporibus adipisci cupiditate cumque ea hic corporis, deleniti voluptatem nam, exercitationem velit eius voluptates. Quo, mollitia. Quod!</p>
									

									<ul>
										<li>Lorem ipsum dolor sit.</li>
										<li>Tempore dolore sit molestias?</li>
										<li>Earum vitae quod veritatis!</li>
									</ul>

								</div>
								<div class="small-12 medium-4 columns picture">
									Add Slideshow
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
						<h1>Contact:</h1>
						<div class="row small-12 expanded columns">
							<div class="small-12 large-5 columns contact-links align-middle">
								<h2 class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></h2>
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
							<div class="small-12 large-6 columns g-map">
							
							<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
							<script type="text/javascript">
							(function($) {

							/*
							*  new_map
							*
							*  This function will render a Google Map onto the selected jQuery element
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	4.3.0
							*
							*  @param	$el (jQuery element)
							*  @return	n/a
							*/

							function new_map( $el ) {
								
								// var
								var $markers = $el.find('.marker');
								
								
								// vars
								var args = {
									zoom		: 16,
									center		: new google.maps.LatLng(0, 0),
									mapTypeId	: google.maps.MapTypeId.ROADMAP
								};
								
								
								// create map	        	
								var map = new google.maps.Map( $el[0], args);
								
								
								// add a markers reference
								map.markers = [];
								
								
								// add markers
								$markers.each(function(){
									
							    	add_marker( $(this), map );
									
								});
								
								
								// center map
								center_map( map );
								
								
								// return
								return map;
								
							}

							/*
							*  add_marker
							*
							*  This function will add a marker to the selected Google Map
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	4.3.0
							*
							*  @param	$marker (jQuery element)
							*  @param	map (Google Map object)
							*  @return	n/a
							*/

							function add_marker( $marker, map ) {

								// var
								var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

								// create marker
								var marker = new google.maps.Marker({
									position	: latlng,
									map			: map
								});

								// add to array
								map.markers.push( marker );

								// if marker contains HTML, add it to an infoWindow
								if( $marker.html() )
								{
									// create info window
									var infowindow = new google.maps.InfoWindow({
										content		: $marker.html()
									});

									// show info window when marker is clicked
									google.maps.event.addListener(marker, 'click', function() {

										infowindow.open( map, marker );

									});
								}

							}

							/*
							*  center_map
							*
							*  This function will center the map, showing all markers attached to this map
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	4.3.0
							*
							*  @param	map (Google Map object)
							*  @return	n/a
							*/

							function center_map( map ) {

								// vars
								var bounds = new google.maps.LatLngBounds();

								// loop through all markers and create bounds
								$.each( map.markers, function( i, marker ){

									var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

									bounds.extend( latlng );

								});

								// only 1 marker?
								if( map.markers.length == 1 )
								{
									// set center of map
								    map.setCenter( bounds.getCenter() );
								    map.setZoom( 16 );
								}
								else
								{
									// fit to bounds
									map.fitBounds( bounds );
								}

							}

							/*
							*  document ready
							*
							*  This function will render each map when the document is ready (page has loaded)
							*
							*  @type	function
							*  @date	8/11/2013
							*  @since	5.0.0
							*
							*  @param	n/a
							*  @return	n/a
							*/
							// global var
							var map = null;

							$(document).ready(function(){

								$('.acf-map').each(function(){

									// create map
									map = new_map( $(this) );

								});

							});

							})(jQuery);
							</script>
									<?php 

										$location = get_field('map', site_data());
										if( !empty($location) ):
									?>
										<div class="acf-map" id="<?php echo $location['lat']; ?>" >
											<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
										</div>
									<?php endif; ?>
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