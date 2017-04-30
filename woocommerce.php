<?php get_header(); ?>
	
	<div id="content" class="store">
	
		<div id="inner-content" class="row expanded">
	
		    <main id="main" class="small-12 columns" role="main">
				
				<?php if(is_shop()): ?>
				<section class="contact row expanded">
					<div class="medium-1 column show-for-medium">
						</div>
					<div class="row expanded small-11 columns prices">
						<?php 
								$page = get_page_by_path( 'store' );
								//echo $page->ID;
								if (get_field('promo_image', $page->ID)):
							?>
						<h1>Current Promotion:</h1>
						<div class="row small-12 expanded columns collapse">
							<div class="small-12 medium-10 columns">
							<div class="bg-test">
							
								<a href="<?php 	the_field('promo_link', $page->ID); ?>">
								<img class="" src="<?php the_field('promo_image', $page->ID); ?>" alt="">
								<div class="inner">
									<h2><?php if (get_field('promo_lang', $page->ID)): ?>
								<?php  endif;  ?>&nbsp;<i class="fa fa-plane fa-fw"></i></h2>
								</div>
								</a>
							</div>
								<div class="promo">
									<?php
										echo apply_filters('the_content', get_post_field('post_content', $page->ID));
									?>
								</div>								
							</div>
						</div>
						<?php  endif;  ?>
					</div>
				</section>
				<?php endif; ?>
				<section class="row expanded">
			    	<?php if ( is_active_sidebar( 'storemenu-sm' ) ) : ?>
			    	<div class="hide-for-medium storemenu-sm row small-12 columns align-center">
				    		
				    	<div class="small-10 columns">
				    		<?php dynamic_sidebar( 'storemenu-sm' ); ?>
				    	</div>
			    	</div>
					
					<?php endif; ?>

					<div class="medium-1 column show-for-medium">
						</div>
					<div class="columns small-10 medium-6 large-7">
						<?php if(is_tax('product_brand')): ?>
							<h2 class="hide-for-small-only">Brand:</h2>	
							<?php woocommerce_content(); ?>						
						<?php endif; ?>						
						<?php if ( is_product_category() ) : ?>
							<h2 class="hide-for-small-only">Category:</h2>
							<?php woocommerce_content(); ?>
							<?php endif; ?>
						<?php if (is_product()):?>
							<h1 class="hide-for-small-only"><?php the_title(); ?></h1>
							<?php woocommerce_content(); ?>
						<?php endif; ?>	

						<?php if (is_shop()):?>
							<?php if ( current_user_can('edit_others_pages' ); ) : ?>							
								<?php woocommerce_content(); ?>
							<?php else: ?>
								<h1 class="hide-for-small-only">Vouchers</h1>							
								<?php echo do_shortcode('[product_category category="vouchers"]' ); ?>
							<?php endif; ?>
						<?php endif; ?>	

						


					</div>

					<?php if ( is_active_sidebar( 'storemenu' ) ) : ?>
			    	<div class="hide-for-small-only show-for-medium medium-4 large-3 columns">
			    		<?php dynamic_sidebar( 'storemenu' ); ?>
			    	</div>
					<div class="medium-1 column show-for-medium">
					</div>
					
					<?php endif; ?>
				</section>
			</main> <!-- end #main -->
	    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>