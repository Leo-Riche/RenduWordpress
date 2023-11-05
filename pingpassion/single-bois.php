<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post(); ?>

		<div class="single-bois-title">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>
		<section class="single-bois-content">
			<div class="single-bois-content-img">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="single-bois-content-text">
				<?php the_content(); ?>
			</div>
		</section>

		<?php

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'pingpassion') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'pingpassion') . '</span> <span class="nav-title">%title</span>',
			)
		);

	endwhile; // End of the loop.
	?>

</main><!-- #main -->