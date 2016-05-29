<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class('loading'); ?>>
		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					<?php 
					$site_data_post = site_data();
					?>
				
					<?php if ( is_front_page() ) { ?>
					<?php $post_image_id = get_post_thumbnail_id($post->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
						}
						//echo $thumbnail;
					?>
					<div id="skrollr-body">
					<section id="intro" class="homeSlide">
			        	<div class="bcg show-for-small-only" data-center="background-position: 30% 0px;" data-top-bottom="background-position: 30% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">
				        	<div class="hsContainer">				    	
					    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">
									<div class="row expanded align-right align-middle">
										<div class="small-10 column text-right align-right intro-small">
											<img class="align-right" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">
											<h1><span>Are You Ready</span><br><span class="highlight slabtext">To FLY!</span></h1><hr>
											<h4>Home of Such and such</h4>
											<p class="phone"><a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', $site_data_post); ?></a></p>
										</div>
									</div>
									
					    		</div>
				        	</div>
			        	</div>
			        	<div class="bcg show-for-medium" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">
				        	<div class="hsContainer">				    	
					    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">
									<div class="row expanded align-right">
											<div class="medium-1 column show-for-medium">
										</div>
										<div class="medium-10 columns text-right intro-large">
											<h1>Are You Ready<br><span class="highlight slabtext">To FLY!</span></h1><hr>
											<h4>Home of Such and such</h4>
											<p class="phone"><a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', $site_data_post); ?></a></p>
										</div>
									
									</div>
									
					    		</div>
				        	</div>
			        	</div>
				    </section>


					<div id="all-wrap" class="all-wrap">

					<?php }elseif ( is_page() ){ ?>
					
					<?php $post_image_id = get_post_thumbnail_id($post->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
						}
						//echo $thumbnail;
					?>

					<section id="intro" class="homeSlide <?php the_slug();?>">
			        	<div class="bcg show-for-small-only" data-center="background-position: 30% 0px;" data-top-bottom="background-position: 30% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">
				        	<div class="hsContainer">				    	
					    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">
									<div class="row expanded align-left align-middle">
										<div class="small-10 column text-left align-left intro-small">
											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">
											<?php the_field('intro_main'); ?><br><h1><span class="highlight"><?php the_field('intro_sub'); ?></span></h1><hr>
											<h4 id="result"><?php the_field('intro_sub_sub'); ?></h4>
											<p class="phone"><a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', $site_data_post); ?></a></p>
										</div>
									</div>
									
					    		</div>
				        	</div>
			        	</div>
			        	<div class="bcg show-for-medium" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro" style="background-image: url(<?php echo $thumbnail;?>);">
				        	<div class="hsContainer">				    	
					    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">
									<div class="row expanded align-left">
										<div class="medium-10 large-8 column text-left intro-large">
											<?php the_field('intro_main'); ?><br><h1><span class="highlight"><?php the_field('intro_sub'); ?></span></h1><hr>
											<h4><?php the_field('intro_sub_sub'); ?></h4>
											<p class="phone"><a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', $site_data_post); ?></a></p>
										</div>
										<div class="medium-1 column show-for-medium">
										</div>
									</div>
									
					    		</div>
				        	</div>
			        	</div>
				    </section>

					<div id="all-wrap" class="all-wrap">
					<?php }elseif ( is_woocommerce()){ ?>
						<?php 
					    	$product_id = get_the_ID();
					    	$product = new WC_product($product_id);
							$image_id = $product->get_image_id();
							$price = $product->price;
							// $image_id = 0 if a product image has not been set.
							$image_loc = wp_get_attachment_image_src( $image_id, 'full') ;					
					    ?>
					
					<section id="intro" class="homeSlide cartSlide">
			        	<div class="bcg show-for-small-only" data-center="background-position: 30% 0px;" data-top-bottom="background-position: 30% -100px;" data-anchor-target="#intro" style="background-image: url('<?php echo $image_loc[0]; ?>');">
				        	<div class="hsContainer">				    	
					    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">
									<div class="row expanded align-left align-middle">
										<div class="small-10 column text-left align-left intro-small">
											<img class="align-left" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/deland.png" alt="">
											<?php the_field('intro_main'); ?><br><h1><span class="highlight"><?php the_field('intro_sub'); ?></span></h1><hr>
											<h4>Book Now, only $<?php echo $price; ?></h4>
											<p class="phone"><a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp;<?php the_field('phone_num', $site_data_post); ?></a></p>
											<p><?php print_r($product);?></p>
										</div>
									</div>
									
					    		</div>
				        	</div>
			        	</div>
			        	<div class="bcg show-for-medium" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#intro" style="background-image: url('<?php echo $image_loc[0]; ?>');">
				        	<div class="hsContainer">				    	
					    		<div class="hsContent" data-start="opacity: 0.8" data-100-start="opacity: 0.2" data-anchor-target="#intro h1">
									<div class="row expanded align-left">
										<div class="medium-8 column text-left intro-large">
											<h1>Order Tandem Vouchers<span class="highlight"> Fly</span></h1><hr>
											<h4>Book Now, only $<?php echo $price; ?></h4>
											<p class="phone">Or, Call To Book:  <a href="<?php the_field('phone_link', $site_data_post); ?>"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php the_field('phone_num', $site_data_post); ?></a></p>
										</div>
										<div class="medium-1 column show-for-medium">
										</div>
									</div>
									
					    		</div>
				        	</div>
			        	</div>
				    </section>

					<div id="all-wrap" class="all-wrap">

					<?php }else{ ?>





					<?php } ?>

					 <?php get_template_part( 'parts/nav', 'topbar' ); ?>