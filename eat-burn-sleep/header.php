<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eat_Burn_Sleep
 */

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
	<header id="site-navigation" class="header" role="banner">
	<div id="utility-nav" class="relative bg-primary py-2 text-center">
            <div class="container">
                <span class="text-white text-sm md:text-base">Sign up for the premium membership and save 15%!</span>
            </div>
            <a data-modal-open="sign-up-modal"><span class="link-overlay"></span></a>
        </div>
	<nav id="main-navigation"
    class="flex items-center justify-between bg-white px-4 lg:px-6 xl:px-10 py-3 transition-300-ease"
    role="navigation" aria-label="main-navigation">
            <div class="flex-auto flex items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="site-logo" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" width="317">
                </a>
            </div>
            
            <div class="hidden lg:flex items-center justify-end lg:justify-start flex-auto">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'bootstrap-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul id="navigation-desktop" class="hidden lg:flex lg:items-center lg:justify-end mr-10">%3$s</ul>',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
							?>
							</div>
							<div class="inline-flex items-center">
									<div class="flex items-center mr-7">
											<div class="mr-6 relative">
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>cart/">
															<svg class="hover:opacity-50 transition-300-ease" xmlns="http://www.w3.org/2000/svg"
																	xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="23px"
																	viewBox="0 0 24 23" version="1.1">
																	<g id="Desktop-Marketing-Website" stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
																			<g id="EBS-Podcast" transform="translate(-1145.000000, -29.000000)" stroke="#000000"
																					stroke-width="2">
																					<g id="Group-30">
																							<g id="Group-6" transform="translate(545.000000, 16.000000)">
																									<g id="shopping-cart" transform="translate(601.000000, 14.000000)">
																											<circle id="Oval" cx="8" cy="20" r="1"></circle>
																											<circle id="Oval" cx="19" cy="20" r="1"></circle>
																											<path
																													d="M0,0 L4,0 L6.68,13.39 C6.86873697,14.3402315 7.71138394,15.0185624 8.68,15 L18.4,15 C19.3686161,15.0185624 20.211263,14.3402315 20.4,13.39 L22,5 L5,5"
																													id="Path"></path>
																									</g>
																							</g>
																					</g>
																			</g>
																	</g>
															</svg>
													</a>
											</div>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>member/">
											<svg class="hover:opacity-50 transition-300-ease" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="20px" viewBox="0 0 18 20"
                            version="1.1">
                            <defs>
                                <path
                                    d="M16,14 C18.7614237,14 21,16.2385763 21,19 L21,19 L21,21 C21,21.5522847 20.5522847,22 20,22 C19.4477153,22 19,21.5522847 19,21 L19,21 L19,19 C19,17.3431458 17.6568542,16 16,16 L16,16 L8,16 C6.34314575,16 5,17.3431458 5,19 L5,19 L5,21 C5,21.5522847 4.55228475,22 4,22 C3.44771525,22 3,21.5522847 3,21 L3,21 L3,19 C3,16.2385763 5.23857625,14 8,14 L8,14 Z M12,2 C14.7614237,2 17,4.23857625 17,7 C17,9.76142375 14.7614237,12 12,12 C9.23857625,12 7,9.76142375 7,7 C7,4.23857625 9.23857625,2 12,2 Z M12,4 C10.3431458,4 9,5.34314575 9,7 C9,8.65685425 10.3431458,10 12,10 C13.6568542,10 15,8.65685425 15,7 C15,5.34314575 13.6568542,4 12,4 Z"
                                    id="path-1"></path>
                            </defs>
                            <g id="Desktop-Marketing-Website" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="EBS-Podcast" transform="translate(-1195.000000, -30.000000)">
                                    <g id="Group-30">
                                        <g id="Group-6" transform="translate(545.000000, 16.000000)">
                                            <g id="user" transform="translate(647.000000, 12.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use id="Combined-Shape" fill="#000000" fill-rule="nonzero"
                                                    xlink:href="#path-1"></use>
                                                <g id="_COLORS/black" mask="url(#mask-2)">
                                                    <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>

                <button type="button" class="hamburger lg:hidden">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

                <button class="gtm-sign-up button-solid hidden lg:inline-flex" data-modal-open="sign-up-modal">
                    <span class="text">Sign Up</span>
                    <span class="text-hover">Sign Up</span>
                </button>
            </div>
    </nav>
	</header><!-- #masthead -->
