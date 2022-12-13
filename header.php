<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="l-header">
        <div class="c-logo">
            <a href="#" class="c-logo__link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-white.svg" alt="Mobilizacja biznesu" class="c-logo__link__img">
            </a>
        </div>
        <nav class="c-nav">
            <div class="c-nav__menu-hamburger">
                <div class="c-nav__menu-hamburger__button">
                    <div class="c-nav__menu-hamburger__button__line"></div>
                    <div class="c-nav__menu-hamburger__button__line"></div>
                </div>
            </div>
            <div class="c-nav__menu-container">
                <?php
			    wp_nav_menu(
				    array(
					    'theme_location' => 'menu-1',
					    'menu_id'        => 'primary-menu',
				    )
			    );
			?>
            </div>
            <a class="btn c-button btn--secondary" href="#">
                Pobierz NDA
            </a>
        </nav>
	</header>
