<?php
/**
 * The main template file
 *
 * @package XSimply CP
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			
			the_posts_pagination( array(
				'prev_text' => '&larr; <span class="screen-reader-text">' . __( 'Previous Page', 'xsimply-cp' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'xsimply-cp' ) . '</span> &rarr;',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'xsimply-cp' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
