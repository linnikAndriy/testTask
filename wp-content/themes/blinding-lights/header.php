<?php
    $header_logo = get_field('header_logo', 'option');
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



<header class="header">
    <div class="container-wide">
        <div class="header__content">
            <?php if($header_logo):?>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo ($header_logo['alt']) ? $header_logo['alt'] : 'company logo'  ?>" class="header__logo">
                </a>
            <?php endif?>
            <div class="wrap">
                <?php wp_nav_menu(array( 'theme_location' => 'header-menu', 'menu_class' => 'header__menu')); ?>
                <div class="header__search">
                    <?php get_search_form(); ?>
                </div>
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
            </div>

        </div>
    </div>

</header>
