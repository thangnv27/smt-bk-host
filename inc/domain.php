<?php

/* ----------------------------------------------------------------------------------- */
# Create post_type
/* ----------------------------------------------------------------------------------- */
add_action('init', 'create_domain_post_type');

function create_domain_post_type(){
    register_post_type('domain', array(
        'labels' => array(
            'name' => __('Tên miền'),
            'singular_name' => __('Domains'),
            'add_new' => __('Add new'),
            'add_new_item' => __('Add new Domain'),
            'new_item' => __('New Domain'),
            'edit' => __('Edit'),
            'edit_item' => __('Edit Domain'),
            'view' => __('View Domain'),
            'view_item' => __('View Domain'),
            'search_items' => __('Search Domains'),
            'not_found' => __('No Domain found'),
            'not_found_in_trash' => __('No Domain found in trash'),
        ),
        'public' => false,
        'show_ui' => true,
        'publicy_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 20,
        'query_var' => true,
        'supports' => array(
            'title', 
//            'editor', 'comments', 'author', 'excerpt', 'thumbnail', 'custom-fields',
        ),
//        'rewrite' => array('slug' => 'domain', 'with_front' => FALSE),
        'can_export' => true,
        'description' => __('Domain description here.'),
//        'taxonomies' => array('post_tag'),
    ));
}
/* ----------------------------------------------------------------------------------- */
# Create taxonomy
/* ----------------------------------------------------------------------------------- */
add_action('init', 'create_domain_taxonomies');

function create_domain_taxonomies(){
    register_taxonomy('domain_category', 'domain', array(
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'labels' => array(
            'name' => __('Loại tên miền'),
            'singular_name' => __('Domain Categories'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Category'),
            'new_item' => __('New Category'),
            'search_items' => __('Search Categories'),
        ),
    ));
}

/* ----------------------------------------------------------------------------------- */
# Meta box
/* ----------------------------------------------------------------------------------- */
$domain_meta_box = array(
    'id' => 'domain-meta-box',
    'title' => 'Thông tin tên miền',
    'page' => 'domain',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Nhóm',
            'desc' => '',
            'id' => 'group',
            'type' => 'text',
            'std' => '0',
        ),
        array(
            'name' => 'Phí khởi tạo (*)',
            'desc' => 'Ví dụ: 100000',
            'id' => 'phi_khoi_tao',
            'type' => 'text',
            'std' => '0',
        ),
        array(
            'name' => 'Phí khởi tạo giảm giá',
            'desc' => 'Ví dụ: 77000',
            'id' => 'phi_khoi_tao_giam_gia',
            'type' => 'text',
            'std' => '0',
        ),
        array(
            'name' => 'Phí duy trì (*)',
            'desc' => "Ví dụ: 100000",
            'id' => 'phi_duy_tri',
            'type' => 'text',
            'std' => '',
        ),
        array(
            'name' => 'Phí duy trì giảm giá',
            'desc' => "Ví dụ: 77000",
            'id' => 'phi_duy_tri_giam_gia',
            'type' => 'text',
            'std' => '0',
        ),
        array(
            'name' => 'Phí Transfer (*)',
            'desc' => "Ví dụ: 100000",
            'id' => 'phi_transfer',
            'type' => 'text',
            'std' => '0',
        ),
        array(
            'name' => 'Phí Transfer giảm giá',
            'desc' => "Ví dụ: 77000",
            'id' => 'phi_transfer_giam_gia',
            'type' => 'text',
            'std' => '0',
        ),
        array(
            'name' => 'Tên miền nổi bật',
            'desc' => '',
            'id' => 'is_most',
            'type' => 'radio',
            'std' => '',
            'options' => array(
                '1' => 'Yes',
                '0' => 'No',
            )
        ),
));

// Add domain meta box
if(is_admin()){
    add_action('admin_menu', 'domain_add_box');
    add_action('save_post', 'domain_add_box');
    add_action('save_post', 'domain_save_data');
}

function domain_add_box(){
    global $domain_meta_box;
    add_meta_box($domain_meta_box['id'], $domain_meta_box['title'], 'domain_show_box', $domain_meta_box['page'], $domain_meta_box['context'], $domain_meta_box['priority']);
}
/**
 * Callback function to show fields in domain meta box
 * @global array $domain_meta_box
 * @global Object $post
 * @global array $area_fields
 */
function domain_show_box() {
    global $domain_meta_box, $post;
    custom_output_meta_box($domain_meta_box, $post);
}
/**
 * Save data from domain meta box
 * @global array $domain_meta_box
 * @global array $area_fields
 * @param Object $post_id
 * @return 
 */
function domain_save_data($post_id) {
    global $domain_meta_box;
    custom_save_meta_box($domain_meta_box, $post_id);
}

/***************************************************************************/
// ADD NEW COLUMN  
function domain_columns_head($defaults) {
    $defaults['new'] = 'Phí khởi tạo';
    $defaults['renew'] = 'Phí duy trì';
    $defaults['transfer'] = 'Phí Transfer';
    $defaults['is_most'] = 'Nổi bật';
    return $defaults;
}

// SHOW THE COLUMN
function domain_columns_content($column_name, $post_id) {
    switch ($column_name) {
        case 'new':
            $phi_khoi_tao = get_post_meta( $post_id, 'phi_khoi_tao', true );
            if($phi_khoi_tao > 0){
                $phi_khoi_tao_giam_gia = get_post_meta( $post_id, 'phi_khoi_tao_giam_gia', true );
                if($phi_khoi_tao_giam_gia > 0) {
                    echo number_format($phi_khoi_tao_giam_gia,0,',','.') . " VNĐ<br />";
                    echo "<del>" . number_format($phi_khoi_tao,0,',','.') . " VNĐ</del>";
                } else {
                    echo number_format($phi_khoi_tao,0,',','.') . " VNĐ";
                }
            } else {
                echo "Miễn phí";
            }
            break;
        case 'renew':
            $phi_duy_tri = get_post_meta( $post_id, 'phi_duy_tri', true );
            if($phi_duy_tri > 0){
                $phi_duy_tri_giam_gia = get_post_meta( $post_id, 'phi_duy_tri_giam_gia', true );
                if($phi_duy_tri_giam_gia > 0) {
                    echo number_format($phi_duy_tri_giam_gia,0,',','.') . " VNĐ<br />";
                    echo "<del>" . number_format($phi_duy_tri,0,',','.') . " VNĐ</del>";
                } else {
                    echo number_format($phi_duy_tri,0,',','.') . " VNĐ";
                }
            } else {
                echo "Miễn phí";
            }
            break;
        case 'transfer':
            $transfer = get_post_meta( $post_id, 'phi_transfer', true );
            if($transfer > 0){
                $phi_transfer_giam_gia = get_post_meta( $post_id, 'phi_transfer_giam_gia', true );
                if($phi_transfer_giam_gia > 0) {
                    echo number_format($phi_transfer_giam_gia,0,',','.') . " VNĐ<br />";
                    echo "<del>" . number_format($transfer,0,',','.') . " VNĐ</del>";
                } else {
                    echo number_format($transfer,0,',','.') . " VNĐ";
                }
            } else {
                echo "Miễn phí";
            }
            break;
        case 'is_most':
            $is_most = get_post_meta( $post_id, 'is_most', true );
            if($is_most == 1){
                echo '<a href="edit.php?update_is_most=true&post_id=' . $post_id . '&is_most=' . $is_most . '&redirect_to=' . urlencode(getCurrentRquestUrl()) . '">Yes</a>';
            }else{
                echo '<a href="edit.php?update_is_most=true&post_id=' . $post_id . '&is_most=' . $is_most . '&redirect_to=' . urlencode(getCurrentRquestUrl()) . '">No</a>';
            }
            break;
        default:
            break;
    }
}

// Update is most stataus
function update_domain_is_most(){
    if(getRequest('update_is_most') == 'true'){
        $post_id = getRequest('post_id');
        $is_most = getRequest('is_most');
        $redirect_to = urldecode(getRequest('redirect_to'));
        if($is_most == 1){
            update_post_meta($post_id, 'is_most', 0);
        }else{
            update_post_meta($post_id, 'is_most', 1);
        }
        header("location: $redirect_to");
        exit();
    }
}

add_filter('manage_domain_posts_columns', 'domain_columns_head');  
add_action('manage_domain_posts_custom_column', 'domain_columns_content', 10, 2);  
add_filter('admin_init', 'update_domain_is_most');  

function sortable_domain_columns( $columns ) {
    $columns['new'] = 'new';
    $columns['renew'] = 'renew';
    $columns['transfer'] = 'transfer';
    $columns['is_most'] = 'is_most';
    return $columns;
}

function domain_columns_orderby( $query ) {  
    if( ! is_admin() )  
        return;  
  
    $orderby = $query->get( 'orderby');  
  
    switch ($orderby) {
        case 'new':
            $query->set('meta_key','phi_khoi_tao');  
            $query->set('orderby','meta_value_num');
            break;
        case 'renew':
            $query->set('meta_key','phi_duy_tri');  
            $query->set('orderby','meta_value_num');
            break;
        case 'transfer':
            $query->set('meta_key','phi_transfer');  
            $query->set('orderby','meta_value_num');
            break;
        case 'is_most':
            $query->set('meta_key','is_most');  
            $query->set('orderby','meta_value_num');
            break;
        default:
            break;
    }
}

add_filter( 'manage_edit-domain_sortable_columns', 'sortable_domain_columns' );  
add_action( 'pre_get_posts', 'domain_columns_orderby' );  