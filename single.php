<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SMT_BK_Host
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container">

                <div class="col-sm-9">
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    } ?>
                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', get_post_format());

                        the_post_navigation();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php get_sidebar() ?>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
