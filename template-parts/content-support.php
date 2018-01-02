<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */
?>

<link href="<?php echo get_template_directory_uri() ?>/css/smt-support.css" rel="stylesheet" type="text/css"/>
<div class="smt-support">
    <div class="container">
        <div class="row">
            <div class="smt-big-title">
                <p style="margin-bottom: 0;text-transform: uppercase;font-size: 3.3rem;font-weight: bold; color: #c72027"><?php echo __('Our Consultants', 'smt-bk-host') ?></p>
                <p style="   font-size: 2.1rem"><?php echo __('Always ready to support', 'smt-bk-host') ?></p>
            </div>


            <?php
            $args = array(
                'post_type' => 'tu-van',
                'posts_per_page' => 4,

            );
            $smt_support = new WP_Query($args);
            if ($smt_support->have_posts()) {
                while ($smt_support->have_posts()) : $smt_support->the_post();
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="support">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>
                            <div class="support-info">
                                <p><?php the_title() ?></p>
                                <div class="support-phone">
                                    <img
                                        src="<?php echo get_template_directory_uri() ?>/img/bottom_support_ico_phone.png"
                                        alt=""/> <a
                                        href="tel:<?php the_field('smt_mobile_support') ?>"><?php the_field('smt_mobile_support') ?></a>
                                    <br/>
                                    <img
                                        src="<?php echo get_template_directory_uri() ?>/img/bottom_support_ico_phone.png"
                                        alt=""/> <a
                                        href="tel:<?php the_field('smt_tel_support') ?>"><?php the_field('smt_tel_support') ?></a>
                                </div>
                                <div class="support-social">
                                    <a href="<?php the_field('smt_facebook_support') ?>">
                                        <i class="fa fa-facebook-official"></i>
                                    </a>
                                    <a href="<?php the_field('smt_google_support') ?>">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="<?php the_field('smt_twitter_support') ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>

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



