<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordpress_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<!-- <footer class="entry-footer default-max-width">
			<?php
			// edit_post_link(
			// 	sprintf(
			// 		/* translators: %s: Name of current post. Only visible to screen readers. */
			// 		esc_html__( 'Edit %s', 'wordpress-starter' ),
			// 		'<span class="screen-reader-text">' . get_the_title() . '</span>'
			// 	),
			// 	'<span class="edit-link">',
			// 	'</span>'
			// );
			?>
		</footer>.entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->