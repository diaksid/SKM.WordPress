<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iweb-moscow
 */

$main_logo = get_field("main_logo", 2);
$main_bg = get_field("main_bg", 2);
$main_title = get_field("main_title", 2);
$main_subttie = get_field("main_subttie", 2);
$main_address = get_field("main_address", 2);
$main_phone = get_field("main_phone", 2);
$main_email = get_field("main_email", 2);

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
	
<div id="page" class="site">
    <img src="/wp-content/uploads/2022/08/diaksid.ico" width="24" height="24" style="position:fixed;z-index:0;margin:6px 4px;" alt="">
    
    <header class="header" style="min-height: 100vh; height: auto; background: url(<?php echo $main_bg ?>); background-size: cover; background-position: center;">
        <div class="topline">
            <div class="container-fluid">
                <div class="topline-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-5 animated delay-3s fadeInDown slower">
                            <a href="/" class="border-none logo">
                                <img src="<?php echo $main_logo ?>" alt="<?php bloginfo("name") ?>" class="logo-img">
                                <span><?php echo $main_title ?></span>
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <div class="header-menu animated delay-3s fadeInDown slower">
                                <nav>
                                    <?php
                        			wp_nav_menu( array(
                        				'theme_location' => 'menu-1',
                        				'menu_id'        => 'primary-menu',
                        			) );
                        			?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-title animated delay-4s fadeInDown slower">
                        <?php echo $main_subttie ?>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <?php
                if( have_rows('header_features') ):
                    while ( have_rows('header_features') ) : the_row();
                        $header_features_img = get_sub_field('header_features_img');
                        $header_features_num = get_sub_field('header_features_num');
                        $header_features_desc = get_sub_field('header_features_desc');
                        ?>
                        <div class="col-lg-3">
                            <div class="features-item animated delay-5s fadeInDown slower">
                                <img src="<?php echo $header_features_img; ?>" alt="" class="features-item__img">
                                <div class="features-item__num counter"><?php echo $header_features_num; ?></div>
                                <div class="features-item__desc"><?php echo $header_features_desc; ?></div>
                            </div>
                        </div>
                    <?php    
                    endwhile;
                endif;    
                ?>
            </div>
        </div>
        
    </header>

	<div id="content" class="site-content">
