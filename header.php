<!doctype html>  <html class="no-js"  <?php language_attributes(); ?>>	<head>		<meta charset="utf-8">				<!-- Force IE to use the latest rendering engine available -->		<meta http-equiv="X-UA-Compatible" content="IE=edge">		<!-- Mobile Meta -->		<meta name="viewport" content="width=device-width, initial-scale=1.0">		<meta class="foundation-mq">				<!-- If Site Icon isn't set in customizer -->		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>			<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-57x57.png">			<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-60x60.png">			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-72x72.png">			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-76x76.png">			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-114x114.png">			<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-120x120.png">			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-144x144.png">			<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-152x152.png">			<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-180x180.png">			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png" sizes="32x32">			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-194x194.png" sizes="194x194">			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-96x96.png" sizes="96x96">			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/android-chrome-192x192.png" sizes="192x192">			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png" sizes="16x16">			<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/icons/manifest.json">			<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/safari-pinned-tab.svg" content="#5bbad5">			<meta name="msapplication-TileColor" content="#da532c">			<meta name="msapplication-TileImage" content="/mstile-144x144.png">			<meta name="theme-color" content="#ffffff">	    <?php } ?>		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">				<?php wp_head(); ?>		<!-- Drop Google Analytics here -->		<!-- end analytics -->	</head>		<!-- Uncomment this line if using the Off-Canvas Menu --> 			<body <?php body_class('loading'); ?>>		<div class="off-canvas-wrapper">						<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>								<?php get_template_part( 'parts/content', 'offcanvas' ); ?>								<div class="off-canvas-content" data-off-canvas-content>														<?php if ( is_front_page() ) { ?>					<?php $post_image_id = get_post_thumbnail_id($post->ID);						if ($post_image_id) {							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);							if ($thumbnail) (string)$thumbnail = $thumbnail[0];						}						//echo $thumbnail;					?>					<div id="skrollr-body">					<section id="intro" class="homeSlide">			        	<div class="bcg show-for-small-only " data-center="background-position: 30% 0px;" data-top-bottom="background-position: 30% -100px;" data-anchor-target="#intro" style=" background-image: url(<?php echo $thumbnail;?>);">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-right align-middle">										<div class="small-10 column text-right align-right intro-small">											<a href="<?php echo home_url();?>">											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">										</a>											<h1><span>Are You Ready</span><br><span class="highlight slabtext">To FLY!</span></h1><hr>											<h4>Jump. Fly. Repeat.</h4>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>										</div>									</div>														    		</div>				        	</div>			        	</div>			        	<div class="bcg show-for-medium" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-right">											<div class="medium-1 column show-for-medium">										</div>										<div class="medium-10 columns text-right intro-large">											<h1>Are You Ready<br><span class="highlight slabtext">To FLY!</span></h1><hr>											<h4>Jump. Fly. Repeat.</h4>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>										</div>																		</div>														    		</div>				        	</div>			        	</div>				    </section>					<div id="all-wrap" class="all-wrap">					<?php }elseif ( is_product()||is_shop()||is_product_category()){ ?>						<?php 					    	$product_id = get_the_ID();					    	$product = new WC_product($product_id);							$image_id = $product->get_image_id();							$price = $product->price;							$product_name = $product->post_title;							// $image_id = 0 if a product image has not been set.							$image_loc = wp_get_attachment_image_src( $image_id, 'full') ;							$the_title = get_the_title(); 							if(is_shop()||is_product_category()){								$the_title = 'The Gear Store';							}										    ?>										<section id="intro" class="homeSlide cartSlide">			        	<div class="bcg show-for-small-only" data-center="background-position: 30% 0px;" data-top-bottom="background-position: 30% -100px;" data-anchor-target="#intro" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland_drone.jpg');">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-left align-middle">										<div class="small-10 column text-left align-left intro-small">										<a href="<?php echo home_url();?>">											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">										</a>											<h1><?php echo $the_title; ?></h1><hr>											<h4>Buy Now</h4>											<h4>Or, Call:</h4>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>																				</div>									</div>														    		</div>				        	</div>			        	</div>			        	<div class="bcg show-for-medium" data-center="background-position: 50% 50%;" data-top-bottom="background-position: 50% 60%;" data-anchor-target="#intro" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland_drone.jpg');">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-left">										<div class="medium-8 column text-left intro-large">											<h1><?php echo $the_title; ?></h1><hr>											<h4>Book Now</h4>											<p class="phone">Or, Call To Book:  <a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', site_data()); ?></a></p>										</div>										<div class="medium-1 column show-for-medium">										</div>									</div>														    		</div>				        	</div>			        	</div>				    </section>					<div id="all-wrap" class="all-wrap">					<?php }elseif ( is_woocommerce()|| is_cart() || is_checkout() || is_account_page() || is_page('photo-credits')){ ?>										<section id="intro" class="homeSlide cartSlide">			        	<div class="bcg show-for-small-only">				        	<div class="">				    						    		<div class="hsContent">									<div class="row expanded align-left align-middle">										<div class="small-10 column text-left align-left intro-small" >											<a href="<?php echo home_url();?>">											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">											</a>											<h1><?php the_title(); ?></h1><hr>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>																								</div>									</div>														    		</div>				        	</div>			        	</div>			        	<div class="bcg show-for-medium">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-left">										<div class="medium-1 column show-for-medium">										</div>										<div class="medium-8 column text-left intro-large">											<h1><?php the_title(); ?></h1><hr>																	<p class="phone">Questions?  Call: <a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', site_data()); ?></a></p>										</div>										<div class="medium-1 column show-for-medium">										</div>									</div>														    		</div>				        	</div>			        	</div>				    </section>					<div id="all-wrap" class="all-wrap">					<?php }elseif ( is_page() ){ ?>										<?php $post_image_id = get_post_thumbnail_id($post->ID);						if ($post_image_id) {							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);							if ($thumbnail) (string)$thumbnail = $thumbnail[0]; ?>					<section id="intro" class="homeSlide <?php the_slug();?>">			        	<div class="bcg show-for-small-only" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-left align-middle">										<div class="small-10 column text-left align-left intro-small">											<a href="<?php echo home_url();?>">											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">											</a>											<?php the_field('intro_main'); ?><br><h1><span class="highlight"><?php the_field('intro_sub'); ?></span></h1><hr>											<h4 id="result"><?php the_field('intro_sub_sub'); ?></h4>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>										</div>									</div>														    		</div>				        	</div>			        	</div>			        	<div class="bcg show-for-medium" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded <?php if(is_page('tandems')){ echo 'align-left'; }else{ echo 'align-right'; } ?> ">										<div class="medium-10 large-8 column <?php if(is_page('tandems')){ echo 'text-left'; }else{ echo 'text-right'; } ?> intro-large">											<?php the_field('intro_main'); ?><br><h1><span class="highlight"><?php the_field('intro_sub'); ?></span></h1><hr>											<h4><?php $photo_credit = photo_credit($post_image_id); echo $photo_credit['description'];?></h4>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>										</div>									</div>														    		</div>				        	</div>			        	</div>				    </section>				    <?php }else{ ?>				    <section id="intro" class="homeSlide cartSlide">			        	<div class="bcg show-for-small-only">				        	<div class="">				    						    		<div class="hsContent">									<div class="row expanded align-left align-middle">										<div class="small-10 column text-left align-left intro-small" >											<a href="<?php echo home_url();?>">											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">											</a>											<h1><?php the_title(); ?></h1><hr>											<p class="phone"><a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', site_data()); ?></a></p>																								</div>									</div>														    		</div>				        	</div>			        	</div>			        	<div class="bcg show-for-medium">				        	<div class="hsContainer">				    						    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">									<div class="row expanded align-left">										<div class="medium-1 column show-for-medium">										</div>										<div class="medium-8 column text-left intro-large">											<h1><?php the_title(); ?></h1><hr>																	<p class="phone">Questions?  Call: <a href="<?php the_field('phone_link', site_data()); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', site_data()); ?></a></p>										</div>										<div class="medium-1 column show-for-medium">										</div>									</div>														    		</div>				        	</div>			        	</div>				    </section>				    <?php }?>					<div id="all-wrap" class="all-wrap">										<?php } ?>					 <?php get_template_part( 'parts/nav', 'topbar' ); ?>