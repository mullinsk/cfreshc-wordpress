<?php
/**
 * Template part for displaying page content in page.php
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
					<?php the_title( '<h1 class="entry-title cfr-hero-title">', '</h1>' ); ?>
				</div>
			</div>
		</header><!-- .entry-header -->
	<?php else : ?>
		<header class="entry-header cfr-post-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php cfreshc_post_thumbnail(); ?>

	<div class="entry-content cfr-wrapper cfr-main-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cfreshc' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'cfreshc' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
