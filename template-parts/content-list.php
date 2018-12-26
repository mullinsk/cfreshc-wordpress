<div class="cfr-wrapper cfr-excerpt">
	
	<?php
		the_title( '<h2 class="cfr-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

	if ( 'post' === get_post_type() ) :
		?>
		
		<div>
			<?php cfreshc_posted_on(); ?> ,
			<?php
			cfreshc_posted_by();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<?php the_excerpt(); ?>
</div>