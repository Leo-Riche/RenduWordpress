<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-Passion
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()): ?>

		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while (have_posts()):
			the_post(); ?>

			<article class="bois-card">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<div class="bois-card__content">
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">En savoir plus</a>
				</div>
			</article>

			<?php
		endwhile;
		
	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->