<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cfreshc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $header_img = get_field('header_background_image');
	if ($header_img) : ?>
		<header class="cfr-hero" style="background-image: url(<?php the_field('header_background_image') ?>">
			<div class="cfr-wrapper">
				<div class="cfr-hero-content">

					<span class="cfr-hero-date"><?php cfreshc_posted_on(); ?></span>
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="cfr-hero-title">', '</h1>' );
					else :
						the_title( '<h2 class="cfr-hero-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							cfreshc_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</div>
			</div>
		</header><!-- .entry-header -->
	<?php else : ?>

		<header class="entry-header cfr-post-header cfr-blog-header">

			<span class="cfr-hero-date"><?php cfreshc_posted_on(); ?></span>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					cfreshc_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	<?php endif; ?>


	<div class="entry-content cfr-wrapper cfr-main-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cfreshc' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cfreshc' ),
			'after'  => '</div>',
		) );
		?>
		<?php 
		// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() && get_comments_number() ) {
				comments_template();
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer cfr-wrapper">
		<?php cfreshc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
