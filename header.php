<?php
/**
 * Header
 *
 * @package wordpress-starter
 */


$menu_class     = \Wordpress_Starter\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'wordpress-starter-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header class="header js-toggle-header-style">
		<div class="header__container">
			<div class="header__branding">
				<?php the_custom_logo(); ?>

			</div>
			<div class="header__right">
			<?php
			if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
				?>
				<nav class="header__nav nav">
					<ul class="nav__menu">
					<?php
						foreach ( $header_menus as $menu_item ) {
							$link_target = ! empty( $menu_item->target ) && '_blank' === $menu_item->target ? '_blank' : '_self';
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
									<li class="nav__item dropdown js-nav-item-dropdown">
										<a id="header__dropdown-menu-link" class="dropdown__toggle" aria-expanded="false">
											<?php echo esc_html( $menu_item->title ); ?>
										</a>
										<div class="dropdown__menu" aria-labelledby="header__dropdown-menu-link">
										<?php
										foreach ( $child_menu_items as $child_menu_item ) {
											$link_target = ! empty( $child_menu_item->target ) && '_blank' === $child_menu_item->target ? '_blank' : '_self';
											?>
											<a
												class="dropdown__item"
											   	href="<?php echo esc_url( $child_menu_item->url ); ?>"
											   	target="<?php echo esc_attr( $link_target ); ?>"
											   	title="<?php echo esc_attr( $child_menu_item->title ); ?>">
												<?php echo esc_html( $child_menu_item->title ); ?>
											</a>
											<?php
										}
										?>
										</div>
									</li>
									<?php
								}
							}
						} 
					?>
					</ul>
				</nav>
				<?php 
			} ?>
				<!--
				<div class="header__social">
					<a href="#" class="header__icon">
					</a>
					<a href="#" class="header__icon">
					</a>
				</div>
				-->
				<a
					class="header__burger js-toggle-navigation"
					href="#navigation"
				>
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
		</div>
	</header>