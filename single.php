<?php
/**
 * The template for displaying all single posts
 *
 * @package XSimply CP
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><br/><span class="post-title">%title</span>', 'Parent post link', 'xsimply-cp' ),
					)
				);
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation(
					array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'xsimply-cp' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'xsimply-cp' ) . '</span> <br/>' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'xsimply-cp' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'xsimply-cp' ) . '</span> <br/>' .
							'<span class="post-title">%title</span>',
					)
				);
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
