<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */
?>


<link href="<?php echo get_template_directory_uri() ?>/css/smt-testimonials.css" rel="stylesheet" type="text/css"/>

<div class="container">
    <p class="smt-big-title"
       style="font-family: 'Roboto Condensed', sans-serif;"> <?php echo __('What customers say about us ?', 'smt-bk-host') ?></p>
    <div class="row" id="testimonials">

        <?php
        $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => 99,

        );
        $smt_testimonials = new WP_Query($args);
        if ($smt_testimonials->have_posts()) {
            while ($smt_testimonials->have_posts()) : $smt_testimonials->the_post();
                ?>
                <div class="col-md-4">
                    <div class="testimonials">
                        <div class="active item">
                            <blockquote><p><?php the_content() ?></p></blockquote>
                            <div class="carousel-info">
                                <?php the_post_thumbnail(array(120, 120), array('class' => 'pull-left')); ?>

                                <div class="pull-left">
                                    <span class="testimonials-name"><?php the_title() ?></span>
                                    <span
                                        class="testimonials-post"><?php the_field('smt_thong_tin_nguoi_nhan_xet') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        } else {
            echo __('Not Found');
        }
        wp_reset_postdata();
        ?>


    </div>
</div>
</div>
