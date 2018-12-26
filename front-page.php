<?php
/**
 * The template for displaying HOME
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cfreshc
 */

get_header();
?>

<div id="primary" class="content-area">
	<?php 
	$hero = get_field('cfr_hero');
	if ( $hero ): ?> 
		<header class="cfr-hero" style="background-image: url(<?php echo $hero['featured_item_image'] ?>">
			<div class="cfr-wrapper">
				<div class="cfr-hero-content">
					<span class="cfr-hero-date"><?php echo get_the_date( 'M j, Y', $hero['featured_item']) ?></span>
					<h1 class="cfr-hero-title"><?php echo get_the_title($hero['featured_item']) ?></h2>
						<p><?php echo $hero['featured_item_text'] ?></p>
						<a href="<?php echo get_permalink($hero['featured_item']) ?>" class="btn btn--secondary">Read More</a>
					</div>
					<?php the_sub_field('featured_item'); ?>
				</div>
			</header>
		<?php endif; ?>
		<main id="main" class="site-main cfr-wrapper cfr-main-content">
			<?php 
			$about = get_field('about');
			if ( $about ): ?> 
				<div class="cfr-grid-wrapper">
					<h2><?php echo $about['section_title'] ?></h2>
					<div class="cfr-grid">
						<div class="cfr-grid-item">
							<h3><?php echo $about['item_1_title'] ?></h3>
							<p><?php echo $about['item_1_text'] ?></p>
						</div>
						<div class="cfr-grid-item">
							<h3><?php echo $about['item_2_title'] ?></h3>
							<p><?php echo $about['item_2_text'] ?></p>
						</div>
						<div class="cfr-grid-item">
							<h3><?php echo $about['item_3_title'] ?></h3>
							<p><?php echo $about['item_3_text'] ?></p>
						</div>
					</div>
					<a href="<?php echo $about['link_url'] ?>" class="btn btn--primary btn--lg"><?php echo $about['about_link_text'] ?></a>
				</div>
			<?php endif; ?>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'home' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php 
	$cta = get_field('call_to_action');
	if ( $cta ): ?> 
		<section class="cfr-cta">
			<div class="cfr-wrapper">
				<h2><?php echo $cta['call_to_action_title'] ?></h2>
				<p><?php echo $cta['call_to_action_text'] ?></p>
				<a href="<?php echo $cta['call_to_action_link_url'] ?>" class="btn btn--secondary btn--lg"><?php echo $cta['call_to_action_link_text'] ?></a>
			</div>
		</section>
	<?php endif ?>
</div><!-- #primary -->

<?php
get_footer();
