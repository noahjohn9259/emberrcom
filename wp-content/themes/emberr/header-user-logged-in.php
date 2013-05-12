<?php
    /**
     * Header Template
     *
     *
     * @file           header.php
     * @package        StrapPress 
     * @author         Brad Williams 
     * @copyright      2011 - 2012 Brag Interactive
     * @license        license.txt
     * @version        Release: 2.2.1
     * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
     * @since          available since Release 1.0
     */
    ?>
<!doctype html>
<!--[if lt IE 7 ]> 
<html class="no-js ie6" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 7 ]>    
    <html class="no-js ie7" <?php language_attributes(); ?>>
        <![endif]-->
        <!--[if IE 8 ]>    
        <html class="no-js ie8" <?php language_attributes(); ?>>
            <![endif]-->
            <!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!--[if IE 7]>
        <link rel="stylesheet" href="<?php get_template_directory_uri();?>/css/font-awesome-ie7.css">
        <![endif]-->
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?>>
        <?php responsive_container(); // before container hook ?>
        <?php responsive_header(); // before header hook ?>
        <div id="header" class="header_background">
            <?php responsive_in_header(); // header hook ?>
            <?php $nav_color = of_get_option('nav_color');?>
            <div class="navbar navbar-fixed-top <?php if($nav_color =='black') { echo 'navbar-inverse'; } ?>">
                <div class="navbar-inner">
                    <?php if ( of_get_option('logo_upload') ) { ?>
                    <div id="logo" class="logo"><a href=" <?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
                        <img src="<?php echo of_get_option('logo_upload'); ?>" alt="<?php bloginfo( 'name' ) ?>"/>
                        </a>
                    </div>
                    <!-- end of #logo -->
                    <?php } else { ?>
                    <?php if (is_front_page()) { ?>
                    <a class="brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
                    <?php } else { ?>
                    <a class="brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
                    <?php } } ?>
                    <div class="header_right">
                        <div class="btn btn-danger dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo get_template_directory_uri().'/includes/css/images/user_image_thumb.jpg'; ?>" > <span>Good Morning, John D </span><i class="fixt_margin icon-sort"></i></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="#"><i class="fix_margin icon-home"></i>Home</a></li>
                                          <li><a href="#"><i class="fix_margin icon-dashboard"></i>My Dashboard</a></li>
                                          <li><a href="#"><i class="fix_margin icon-th-list"></i>My Listing (20)</a></li>
                                          <li><a href="#"><i class="fix_margin icon-envelope-alt"></i>Message Center (45)</a></li>
                                          <li><a href="#"><i class="fix_margin icon-star"></i>My Favorites (11)</a></li>
                                          <li><a href="#"><i class="fix_margin icon-cloud-upload"></i>Add Listing</a></li>
                                          <li><a href="#"><i class="fix_margin icon-signout"></i>Log out</a></li>
                                        </ul>
                            </div>
                                         
                    </div>
                </div>
            </div>
        </div>
        <!-- end of #header -->
        <?php responsive_header_end(); // after header hook ?>
        <?php responsive_wrapper(); // before wrapper ?>
        <div id="wrapper" class="clearfix">
        <?php responsive_in_wrapper(); // wrapper hook ?>
        <div class="container inner_pages">
        <div class="row-fluid page_wrapper">