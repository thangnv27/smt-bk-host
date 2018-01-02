<?php
/**
 * Template Name: Thông tin tên miền
 * The main template file.
 *
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
            <?php smt_nav_domain_infor();
            ?>
        </div>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <article class="smt-content-home">

                <div class="container">


                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>

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
