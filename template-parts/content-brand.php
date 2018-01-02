<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */
?>

<link href="<?php echo get_template_directory_uri() ?>/css/smt-brands.css" rel="stylesheet" type="text/css"/>
<ul id="smt-brands">


    <?php
    $args = array(
        'post_type' => 'smt_brand',
        'posts_per_page' => 20,

    );
    $smt_brand = new WP_Query($args);
    if ($smt_brand->have_posts()) {
        while ($smt_brand->have_posts()) : $smt_brand->the_post();
            ?>
            <li>
                <?php the_post_thumbnail() ?>
            </li>
            <?php
        endwhile;
    } else {
        echo __('Not Found');
    }
    wp_reset_postdata();
    ?>
</ul>




