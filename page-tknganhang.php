<?php
/**
 * Template Name: Tài khoản ngân hàng
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */
get_header();
?>
    <link href="<?php echo get_template_directory_uri() ?>/css/smt-thanhtoan.css" rel="stylesheet" type="text/css"/>
    <div class="smt-top-page">
        <div class="container">
            <?php
            if (is_page(4527)) {
                smt_nav_thanhtoan();
            } else {
                ?>
                <?php smt_nav_thanhtoan(); ?>
                <?php
            }
            ?>
        </div>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <article class="smt-content-home container">
                <header class="entry-header">
                    <div class="smt_before_content">
                        <?php
                        $smt_before_content = get_field('smt_before_content');
                        if (!empty($smt_before_content)):
                            ?>

                            <?php echo $smt_before_content; ?>
                        <?php endif; ?>
                    </div>

                </header><!-- .entry-header -->

                <div class="entry-content">

                    <?php
                    $args = array(
                        'post_type' => 'tk-ngan-hang',
                        'posts_per_page' => 32,

                    );
                    $smt_tknganhang = new WP_Query($args);
                    if ($smt_tknganhang->have_posts()) {
                        while ($smt_tknganhang->have_posts()) : $smt_tknganhang->the_post();
                            ?>
                            <div class="col-sm-6 col-xs-12">
                                <div id="bank-account">
                                    <div class="row">

                                        <div class="col-sm-4 col-xs-12" style="text-align: center">
                                            <?php the_post_thumbnail() ?>
                                        </div>
                                        <div class="col-sm-8 col-xs-12">
                                            <p style="text-align: center; font-weight: bold; text-transform: uppercase"><?php the_title() ?></p>
                                            <p>
                                                <span><?php echo __('Account Name: ', 'smt-bk-host') ?></span> <?php the_field('chu_tk_ngan_hang') ?>
                                            </p>
                                            <p>
                                                <span><?php echo __('Account Number: ', 'smt-bk-host') ?> </span> <?php the_field('so_tk_ngan_hang') ?>
                                            </p>
                                            <p>
                                                <span><?php echo __('Bank branch: ', 'smt-bk-host') ?> </span> <?php the_field('swiff_tk_ngan_hang') ?>
                                            </p>
                                            <p>
                                                <span><?php echo __('Card Number: ', 'smt-bk-host') ?></span> <?php the_field('so_the_tk_ngan_hang') ?>
                                            </p>
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
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <div class="smt_after_content">
                        <?php
                        $smt_after_content = get_field('smt_after_content');
                        if (!empty($smt_after_content)):
                            echo $smt_after_content;
                        endif;
                        ?>
                    </div>
                    <?php
                    edit_post_link(
                        sprintf(
                        /* translators: %s: Name of current post */
                            esc_html__('Edit %s', 'smt-bk-host'), the_title('<span class="screen-reader-text">"', '"</span>', false)
                        ), '<span class="edit-link">', '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->

            </article>
            <article class="smt-above-footer">
                <div class="smt-support ">
                    <?php get_template_part('template-parts/content', 'support'); ?>
                </div>
                <div class="smt-testimonials">
                    <?php get_template_part('template-parts/content', 'testimonials'); ?>
                </div>


                <div class="smt-counter">
                    <?php get_template_part('template-parts/content', 'counter'); ?>
                </div>
            </article>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
