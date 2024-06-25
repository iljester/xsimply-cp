<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package XSimply CP
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php xsimply_get_my_site_cp(); ?>
		<div class="search-box"> 
			<?php get_search_form(); ?>
		</div>
		<div class="site-info">
			<?php printf( 
				esc_html__('Powered by %s', XSIMPLY_CP ), '<a href="https://wordpress.org/">Wordpress</a>' );
			?>
			<span class="sep"> /&nbsp;/ </span>
			<?php printf( 
				esc_html__('Theme %s by %s', XSIMPLY_CP ), XSIMPLY_CP, '<a href="' . XSIMPLY_AUTHOR_SITE . '">Il Jester</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
