<?php
/**
 *	The template for displaying Header.
 *
 *	@package ThemeIsle
 */
?>
<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="cf">
			<div class="header-top">
				<div class="wrap cf">
					<div class="header-top-contact">
						<span>
							<?php

							if ( get_theme_mod( 'ti_header_title' ) != false ) {
    							echo get_theme_mod( 'ti_header_title' );
    						} else {
    							echo _e( 'Contact Us Now: ', 'ti' );
    						}

							?>
						</span>
						<?php
    						if ( get_theme_mod( 'ti_header_subtitle' ) != false ) { ?>
                                <a href="tel: <?php echo get_theme_mod( 'ti_header_subtitle' ); ?>" title="<?php echo get_theme_mod( 'ti_header_subtitle' ); ?>"><?php echo get_theme_mod( 'ti_header_subtitle' ); ?></a>
    						<?php } else { ?>
    							<a href="tel: <?php _e( '+1-888-846-1732', 'ti' ); ?>" title="<?php echo get_theme_mod( 'ti_header_subtitle' ); ?>"><?php _e( '+1-888-846-1732', 'ti' ); ?></a>
    						<?php }
    					?>
					</div><!--/.header-top-contact-->
					<div class="header-top-socials">
						<?php
						if ( get_theme_mod( 'ti_header_youtube' ) != false ) { ?>
							<a href="<?php echo get_theme_mod( 'ti_header_youtube' ); ?>" title="YouTube" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
									<g>
									</g>
									<path d="M26 4h-20c-3.3 0-6 2.7-6 6v12c0 3.3 2.7 6 6 6h20c3.3 0 6-2.7 6-6v-12c0-3.3-2.7-6-6-6zM12 24v-16l10 8-10 8z" />
								</svg>
							</a>
						<?php } else { ?>
							<a href="http://www.youtube.com" title="YouTube" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
									<g>
									</g>
									<path d="M26 4h-20c-3.3 0-6 2.7-6 6v12c0 3.3 2.7 6 6 6h20c3.3 0 6-2.7 6-6v-12c0-3.3-2.7-6-6-6zM12 24v-16l10 8-10 8z" />
								</svg>
							</a>
						<?php }
						?>

						<?php
						if ( get_theme_mod( 'ti_header_facebook' ) != false ) { ?>
							<a href="<?php echo get_theme_mod( 'ti_header_facebook' ); ?>" title="Facebook" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
									<path d="M17.996 32h-5.996v-16h-4v-5.514l4-0.002-0.007-3.248c0-4.498 1.22-7.236 6.519-7.236h4.412v5.515h-2.757c-2.064 0-2.163 0.771-2.163 2.209l-0.008 2.76h4.959l-0.584 5.514-4.37 0.002-0.004 16z" />
								</svg>
							</a>
						<?php } else { ?>
							<a href="http://www.facebook.com" title="Facebook" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
									<path d="M17.996 32h-5.996v-16h-4v-5.514l4-0.002-0.007-3.248c0-4.498 1.22-7.236 6.519-7.236h4.412v5.515h-2.757c-2.064 0-2.163 0.771-2.163 2.209l-0.008 2.76h4.959l-0.584 5.514-4.37 0.002-0.004 16z" />
								</svg>
							</a>
						<?php }
						?>

						<?php
						if ( get_theme_mod( 'ti_header_googleplus' ) != false ) { ?>
							<a href="<?php echo get_theme_mod( 'ti_header_googleplus' ); ?>" title="Google+" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
									<path d="M17.471 2c0 0-6.28 0-8.373 0-3.754 0-7.287 2.844-7.287 6.138 0 3.366 2.559 6.083 6.378 6.083 0.266 0 0.524-0.005 0.776-0.024-0.248 0.475-0.425 1.009-0.425 1.564 0 0.936 0.503 1.694 1.14 2.313-0.481 0-0.945 0.014-1.452 0.014-4.649-0-8.228 2.961-8.228 6.032 0 3.024 3.923 4.916 8.573 4.916 5.301 0 8.228-3.008 8.228-6.032 0-2.425-0.715-3.877-2.928-5.442-0.757-0.536-2.204-1.839-2.204-2.604 0-0.897 0.256-1.34 1.607-2.395 1.385-1.082 2.365-2.603 2.365-4.372 0-2.106-0.938-4.159-2.699-4.837h2.655l1.874-1.355zM14.546 22.483c0.066 0.28 0.103 0.569 0.103 0.863 0 2.444-1.575 4.353-6.093 4.353-3.214 0-5.535-2.035-5.535-4.478 0-2.395 2.879-4.389 6.093-4.354 0.75 0.008 1.449 0.129 2.083 0.334 1.745 1.213 2.996 1.899 3.349 3.281zM9.401 13.368c-2.157-0.065-4.207-2.413-4.58-5.246-0.372-2.833 1.074-5.001 3.231-4.937 2.157 0.065 4.207 2.338 4.58 5.171 0.372 2.833-1.075 5.077-3.231 5.012zM26 8v-6h-2v6h-6v2h6v6h2v-6h6v-2z" />
								</svg>
							</a>
						<?php } else { ?>
							<a href="http://www.google.com" title="Google+" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="15" viewBox="0 0 32 32">
									<path d="M17.471 2c0 0-6.28 0-8.373 0-3.754 0-7.287 2.844-7.287 6.138 0 3.366 2.559 6.083 6.378 6.083 0.266 0 0.524-0.005 0.776-0.024-0.248 0.475-0.425 1.009-0.425 1.564 0 0.936 0.503 1.694 1.14 2.313-0.481 0-0.945 0.014-1.452 0.014-4.649-0-8.228 2.961-8.228 6.032 0 3.024 3.923 4.916 8.573 4.916 5.301 0 8.228-3.008 8.228-6.032 0-2.425-0.715-3.877-2.928-5.442-0.757-0.536-2.204-1.839-2.204-2.604 0-0.897 0.256-1.34 1.607-2.395 1.385-1.082 2.365-2.603 2.365-4.372 0-2.106-0.938-4.159-2.699-4.837h2.655l1.874-1.355zM14.546 22.483c0.066 0.28 0.103 0.569 0.103 0.863 0 2.444-1.575 4.353-6.093 4.353-3.214 0-5.535-2.035-5.535-4.478 0-2.395 2.879-4.389 6.093-4.354 0.75 0.008 1.449 0.129 2.083 0.334 1.745 1.213 2.996 1.899 3.349 3.281zM9.401 13.368c-2.157-0.065-4.207-2.413-4.58-5.246-0.372-2.833 1.074-5.001 3.231-4.937 2.157 0.065 4.207 2.338 4.58 5.171 0.372 2.833-1.075 5.077-3.231 5.012zM26 8v-6h-2v6h-6v2h6v6h2v-6h6v-2z" />
								</svg>
							</a>
						<?php }
						?>

						<?php
						if ( get_theme_mod( 'ti_header_twitter' ) != false) { ?>
							<a href="<?php echo get_theme_mod( 'ti_header_twitter' ); ?>" title="Twitter" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13" height="15" viewBox="0 0 32 32">
									<path d="M32 6.076c-1.177 0.522-2.443 0.875-3.771 1.034 1.355-0.813 2.396-2.099 2.887-3.632-1.269 0.752-2.674 1.299-4.169 1.593-1.198-1.276-2.904-2.073-4.792-2.073-3.626 0-6.565 2.939-6.565 6.565 0 0.515 0.058 1.016 0.17 1.496-5.456-0.274-10.294-2.888-13.532-6.86-0.565 0.97-0.889 2.097-0.889 3.301 0 2.278 1.159 4.287 2.921 5.465-1.076-0.034-2.088-0.329-2.974-0.821-0.001 0.027-0.001 0.055-0.001 0.083 0 3.181 2.263 5.834 5.266 6.437-0.551 0.15-1.131 0.23-1.73 0.23-0.423 0-0.834-0.041-1.235-0.118 0.835 2.608 3.26 4.506 6.133 4.559-2.247 1.761-5.078 2.81-8.154 2.81-0.53 0-1.052-0.031-1.566-0.092 2.905 1.863 6.356 2.95 10.064 2.95 12.076 0 18.679-10.004 18.679-18.68 0-0.285-0.006-0.568-0.019-0.849 1.283-0.926 2.396-2.082 3.276-3.398z" />
								</svg>
							</a>
						<?php } else { ?>
							<a href="http://www.twitter.com" title="Twitter" target="_blank">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13" height="15" viewBox="0 0 32 32">
									<path d="M32 6.076c-1.177 0.522-2.443 0.875-3.771 1.034 1.355-0.813 2.396-2.099 2.887-3.632-1.269 0.752-2.674 1.299-4.169 1.593-1.198-1.276-2.904-2.073-4.792-2.073-3.626 0-6.565 2.939-6.565 6.565 0 0.515 0.058 1.016 0.17 1.496-5.456-0.274-10.294-2.888-13.532-6.86-0.565 0.97-0.889 2.097-0.889 3.301 0 2.278 1.159 4.287 2.921 5.465-1.076-0.034-2.088-0.329-2.974-0.821-0.001 0.027-0.001 0.055-0.001 0.083 0 3.181 2.263 5.834 5.266 6.437-0.551 0.15-1.131 0.23-1.73 0.23-0.423 0-0.834-0.041-1.235-0.118 0.835 2.608 3.26 4.506 6.133 4.559-2.247 1.761-5.078 2.81-8.154 2.81-0.53 0-1.052-0.031-1.566-0.092 2.905 1.863 6.356 2.95 10.064 2.95 12.076 0 18.679-10.004 18.679-18.68 0-0.285-0.006-0.568-0.019-0.849 1.283-0.926 2.396-2.082 3.276-3.398z" />
								</svg>
							</a>
						<?php }
						?>
					</div><!--/.header-top-socials-->
				</div><!--/.wrap ,cf-->
			</div><!--/.header-top-->
			<div class="header-shadow">
				<div class="wrap cf">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" class="logo">
						<?php
						if ( get_theme_mod( 'ti_header_logo' ) != false ) { ?>
							<img src="<?php echo get_theme_mod( 'ti_header_logo' ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
						<?php }
						?>
					</a><!--/.logo-->
					<div class="openresponsivemenu">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
							<path d="M0 12h22v4h-22v-4zM0 6h22v4h-22v-4zM0 18h22v4h-22v-4zM0 24h22v4h-22v-4zM24 18l4 6 4-6h-8zM32 16l-4-6-4 6h8z" fill="#000000" />
						</svg>
					</div><!--/.openresponsivemenu-->
					<nav>
						<?php
							wp_nav_menu(
								array(
									'theme_location'	=> 'top-menu',
								)
							);
						?>
					</nav><!--/nav-->
				</div><!--/.wrap .cf-->
			</div><!--/.header-shadow-->
		</header><!--/header-->