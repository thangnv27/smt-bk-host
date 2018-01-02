<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function smt_footer_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'smt-bk-host'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'smt-bk-host'),
        'before_widget' => '<section id="%1$s" class=" widget %2$s smt-footer">',
        'after_widget' => '</section>',
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'smt-bk-host'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'smt-bk-host'),
        'before_widget' => '<section id="%1$s" class="widget %2$s smt-footer">',
        'after_widget' => '</section>',
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'smt-bk-host'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'smt-bk-host'),
        'before_widget' => '<section id="%1$s" class="widget %2$s smt-footer">',
        'after_widget' => '</section>',
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'smt-bk-host'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'smt-bk-host'),
        'before_widget' => '<section id="%1$s" class="widget %2$s smt-footer">',
        'after_widget' => '</section>',
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ));
}

add_action('widgets_init', 'smt_footer_widgets_init');

// HTML5 Blank navigation
function smt_nav_top_left() {
    wp_nav_menu(
            array(
                'theme_location' => 'top_left',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_top',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_top_left',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul class="smt_nav_top_left">%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_top_right() {
    wp_nav_menu(
            array(
                'theme_location' => 'top_right',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_top',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_top_right',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul class="smt_nav_top_right">%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_phanmem() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_phanmem',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_phanmem ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_phanmem',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_thanhtoan() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_thanhtoan',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_phanmem ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_phanmem',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_domain_infor() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_domain_infor',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_phanmem ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_phanmem',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}


function smt_nav_cham_soc_kh() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_cham_soc_kh',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_phanmem ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_phanmem',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}



function smt_nav_email_infor() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_email_infor',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_phanmem ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_phanmem',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}


function smt_nav_dai_ly() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_dai_ly',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_phanmem ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_phanmem',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}



function smt_nav_hosting() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_hosting',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_tab ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_tab',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_vps() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_vps',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_tab ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_tab',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_email() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_email',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_tab ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_tab',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_server() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_server',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_tab ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_tab',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}

function smt_nav_chodatserver() {
    wp_nav_menu(
            array(
                'theme_location' => 'smt_nav_chodatserver',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'smt_nav_tab ',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => 'smt_nav_tab',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            )
    );
}


// Xóa các thông báo update của wordpress
//function remove_core_updates(){
//global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
//}
//add_filter('pre_site_transient_update_core','remove_core_updates');
//add_filter('pre_site_transient_update_plugins','remove_core_updates');
//add_filter('pre_site_transient_update_themes','remove_core_updates');
// Sửa phần footer trong trang admin
//function remove_footer_admin () {
//echo __( 'Designed by <a href="http://www.luongthanhluan.com" target="_blank">Lương Thành Luân</a> | Developer: <a href="http://www.luongthanhluan.com" target="_blank">Lương Thành Luân</a></p>', 'smt-bk-host' );
//}
//add_filter('admin_footer_text', 'remove_footer_admin');
//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js', false, '1.11.1');
        wp_enqueue_script('jquery');
    }
}

add_action('init', 'modify_jquery');


