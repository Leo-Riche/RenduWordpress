<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */
$dataCaractéristiques = get_fields();
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post(); ?>

		<div class="single-revetements-title">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>
		<section class="single-revetements-content">
			<div class="single-revetements-content-img">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="single-revetements-content-text">
				<?php the_content(); ?>
				<section class="Caracteristiques">
					<h2>Caractéristiques :</h2>
					<p>Rapidité :
						<?= $dataCaractéristiques['rapidite'] ?>
					</p>
					<p>
						Contrôle :
						<?= $dataCaractéristiques['controle'] ?>
					</p>
					<p>
						Adhérence :
						<?= $dataCaractéristiques['adherence'] ?>
					</p>
					<p>
						Épaisseur :
						<?= $dataCaractéristiques['epaisseur'] ?>
					</p>
				</section>
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