<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-Passion
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (have_posts()):

		if (is_home() && !is_front_page()):
			?>
			<header>
				<h1 class="page-title screen-reader-text">
					<?php single_post_title(); ?>
				</h1>
			</header>
			<?php
		endif;

		// /* Start the Loop */
		// while ( have_posts() ) :
		// 	the_post();
	
		// 	/*
		// 	 * Include the Post-Type-specific template for the content.
		// 	 * If you want to override this in a child theme, then include a file
		// 	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		// 	 */
		// 	get_template_part( 'template-parts/content', get_post_type() );
	
		// endwhile;
	
		the_posts_navigation();

	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

	<section class="Accueil">
		<div class="accueil-text-content">
			<h2 class="accueil-title">
				Bienvenue sur Ping Passion !
			</h2>
			<p class="accueil-text">Ping Passion est le site référent des meilleures raquettes de ping pong. Retrouvez
				un large choix de customisation de raquette ainsi que des tenues, des bagages et des serviettes !</p>
		</div>
	</section>

	<section class="accueil-description">
		<div class="accueil-description-text">
			Chez Ping-Passion, notre mission est de satisfaire les besoins des amateurs de ping-pong en leur offrant une
			vaste gamme de produits de qualité supérieure. Notre boutique en ligne propose une sélection diversifiée de
			bois de raquettes de ping-pong, de revêtements, de tenues de sport, de sacs et de serviettes. Que vous soyez
			un joueur débutant ou expérimenté, nous avons tout ce dont vous avez besoin pour améliorer votre jeu. Nos
			bois de raquettes sont soigneusement conçus pour répondre aux exigences de différents styles de jeu, tandis
			que nos revêtements offrent une variété d'options pour personnaliser vos raquettes.
		</div>
		<div class="accueil-description-text2">
			Chez Ping-Passion, nous comprenons l'importance de l'équipement de qualité, c'est pourquoi nous proposons
			également des tenues de sport, des sacs de transport et des serviettes pour compléter votre ensemble de
			ping-pong avec élégance. Notre objectif est de devenir votre destination de choix pour trouver tout ce dont
			vous avez besoin pour exceller dans le ping-pong. Rejoignez la passion du ping-pong avec Ping-Passion, où la
			qualité et la diversité se rejoignent pour vous offrir une expérience de jeu inégalée.
		</div>
	</section>

</main><!-- #main -->

<?php
