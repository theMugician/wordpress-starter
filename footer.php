<?php
/**
 * Footer
 * 
 * @package Wordpress_Starter
 */

$menu_class     = \Wordpress_Starter\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'wordpress-starter-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );

?>

	<footer class="footer section container">
		<div class="footer__info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="https://automattic.com/">Automattic</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="modal nav-modal" id="nav-modal">
	<div class="modal__container">
		<a href="#nav-modal" title="Close" class="js-toggle-modal modal__close">Close</a>
		<nav class="nav-modal__nav nav">
					<ul class="nav__menu">
					<?php
						foreach ( $header_menus as $menu_item ) {
							$link_target 		= ! empty( $menu_item->target ) && '_blank' === $menu_item->target ? '_blank' : '_self';
							$child_menu_items   = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
							$has_children       = ! empty( $child_menu_items ) && is_array( $child_menu_items );
							if ( ! $menu_item->menu_item_parent ) {

								if ( ! $has_children ) {
									?>
									<li class="nav__item">
										<a
											href="<?php echo esc_url( $menu_item->url ); ?>"
											target="<?php echo esc_attr( $link_target ); ?>"
											title="<?php echo esc_attr( $menu_item->title ); ?>">
											<?php echo esc_html( $menu_item->title ); ?>
										</a>
									</li>
									<?php
								} else {
									?>
									<li class="nav__item">
										<a>
											<?php echo esc_html( $menu_item->title ); ?>
										</a>
										<ul class="nav__menu">
										<?php
										foreach ( $child_menu_items as $child_menu_item ) {
											$link_target = ! empty( $child_menu_item->target ) && '_blank' === $child_menu_item->target ? '_blank' : '_self';
											?>
											<li class="nav__item">
												<a
													href="<?php echo esc_url( $child_menu_item->url ); ?>"
													target="<?php echo esc_attr( $link_target ); ?>"
													title="<?php echo esc_attr( $child_menu_item->title ); ?>">
													<?php echo esc_html( $child_menu_item->title ); ?>
												</a>
											</li>
											<?php
										}
										?>
										</ul>
									</li>
									<?php
								}
							}
						} 
					?>
					</ul>
				</nav>
		<!-- <ul class="flex flex__column nav__mobile-menu">
			<li class="nav__item has-dropdown">
				<a href="#">About</a>
				<ul class="dropdown" aria-label="submenu">
					<li class="nav__item"><a href="#">Sub-1</a></li>
					<li class="nav__item"><a href="#">Sub-2</a></li>
					<li class="nav__item"><a href="#">Sub-3</a></li>
				</ul>
			</li>
			<li class="nav__item"><a href="#">Documentation</a></li>
			<li class="nav__item"><a href="#">Github</a></li>
			<li class="nav__item"><a href="#">Contact</a></li>
		</ul> -->
	</div>
</div>

</body>
</html>