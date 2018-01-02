<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'smt-bk-host'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
       <div class="smt_after_content">
        <?php the_field('smt_after_content') ?>
        </div>

    <footer class="entry-footer">
        <?php
        edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
                esc_html__('Edit %s', 'smt-bk-host'),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
