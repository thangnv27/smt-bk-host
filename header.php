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
    <link href="<?php echo get_template_directory_uri() ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '607169786098918');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=607169786098918&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" href="http://bkhost.vn/favicon.ico" type="image/x-icon" />
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>
    <div id="ajax_loading" style="display: none" class="ajax-loading-block-window">
        <div class="loading-image"></div>
    </div>
    <?php if(get_the_ID() != 5678): ?>
    <div class="notification">
        <span class="notification-content">
            <a href="http://bkhost.vn/chuong-trinh-khuyen-mai" title="ĐĂNG KÝ THẢ GA - ƯU ĐÃI TỐI ĐA" - COMBO (20% HOSTING + TÊN MIỀN QUỐC TẾ 0đ) VÀ -30% CLOUD VPS SSD>"ĐĂNG KÝ THẢ GA - ƯU ĐÃI TỐI ĐA" - COMBO (20% HOSTING + 0đ TÊN MIỀN QUỐC TẾ), -30% CLOUD VPS SSD</a>
        </span>
        <a class="notification-close" href="javascript://">✕</a>
    </div>
    <?php endif; ?>
    
    <div id="page" class="site">

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
                                        class="fa fa-bars"></i> <?php esc_html_e('Menu', 'smt-bk-host'); ?></button>
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