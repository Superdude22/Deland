<?php get_header(); ?>

<div id="sticky-wrap">
	<div data-sticky-container>
	<div class="sticky" id="example" data-sticky data-margin-top="0" style="width:100%;" data-margin-bottom="0" data-top-anchor="sticky-wrap" data-btm-anchor="sticky-wrap:bottom">
	    <nav data-magellan>
	      <ul class="horizontal menu expanded">
	      <h1><a href="#section-intro">First Arrival</a></h1>
	      <h1><a href="#comments">Second Arrival</a></h1>
	      <h1><a href="#comments">Third Arrival</a></h1>
	      </ul>
	    </nav>
	</div>
	</div>	
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
</div>

<?php get_footer(); ?>