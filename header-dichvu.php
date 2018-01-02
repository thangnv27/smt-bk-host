<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SMT_BK_Host
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <link href="<?php echo get_template_directory_uri() ?>/lib/bootstrap/css/bootstrap.css" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href="http://bkhost.vn/favicon.ico" type="image/x-icon" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(get_the_ID() != 5678): ?>
    <div class="notification">
        <span class="notification-content">
            <a href="http://bkhost.vn/chuong-trinh-khuyen-mai" title="ĐĂNG KÝ THẢ GA - ƯU ĐÃI TỐI ĐA" - COMBO (20% HOSTING + TÊN MIỀN QUỐC TẾ 0đ) VÀ -30% CLOUD VPS SSD>"ĐĂNG KÝ THẢ GA - ƯU ĐÃI TỐI ĐA" - COMBO (20% HOSTING + 0đ TÊN MIỀN QUỐC TẾ), -30% CLOUD VPS SSD</a>
        </span>
        <a class="notification-close" href="javascript://">✕</a>
    </div>
    <?php endif; ?>
    
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'smt-bk-host'); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <div class="smt-top-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <?php smt_nav_top_left() ?>
                    </div>
                    <div class="col-sm-6">
                        <?php smt_nav_top_right() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="smt-main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="site-branding">
                            <?php if (is_front_page() || is_home()) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                                            class="img-responsive"
                                            src="<?php echo get_template_directory_uri() . '/img/logo-bkhost.jpg' ?>"
                                            alt="<?php bloginfo('name'); ?>"/></a></h1>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                                            class="img-responsive"
                                            src="<?php echo get_template_directory_uri() . '/img/logo-bkhost.jpg' ?>"
                                            alt="<?php bloginfo('name'); ?>"/></a></p>
                                <?php
                            endif;
                            ?>
                        </div><!-- .site-branding -->
                    </div>
                    <div class="col-sm-9">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i
                                    class="fa fa-bars"></i><?php esc_html_e('Menu', 'smt-bk-host'); ?></button>
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                        </nav><!-- #site-navigation -->

                    </div>
                </div>
            </div>

        </div>
        <div class="smt-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="padding-top: 10px 0">


                        <div class="row">
                            <form action="http://bkhost.vn/check-domain/" method="post">
                                <div class="col-xs-6" style="padding-right: 0">
                                    <input style="height: 42px" type="text" id="check-domain" name="domains"
                                           placeholder="<?php echo __('Enter Domain', 'smt-bk-host'); ?>"
                                           class="form-control" value="<?php echo getRequest('domains') ?>" />
                                </div>
                                <div class="col-xs-6">
                                    <button id="btnCheckDomain" style="height: 42px" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><?php echo __(' Check Domain', 'smt-bk-host'); ?></button>
                                </div>
                            </form>
                        </div>


                        <p style="color: #fff; margin-bottom: 0; margin-top: 7px"><?php echo __('Domain agency of VNNIC', 'smt-bk-host') ?></p>


                    </div>
                    <div class="col-sm-6" style="padding-top: 10px 0">
                        <div class="adv-domain">
                            <img src="<?php echo get_template_directory_uri() ?>/img/domain-adv.png"
                                 alt="Check tên miền, kiểm tra tên miền"/>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </header><!-- #masthead -->
    <div id="content" class="site-content">
        <link href="<?php echo get_template_directory_uri() ?>/css/page-hosting.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri() ?>/css/smt-pricing-table.css" rel="stylesheet"
              type="text/css"/>


        <div class="smt-top-page">

        </div>
        <div id="primary" class="content-area"
             style="       background:             linear-gradient(       rgba(0, 0, 0, 0.5),        rgba(0, 0, 0, 0.5)     ),     url(http://bkhost.vn/wp-content/themes/smt-bk-host/img/pricing-table.jpg); background-repeat: repeat">
            <main id="main" class="site-main" role="main">

                <article class="smt-content-home">

                    <div class="container">

