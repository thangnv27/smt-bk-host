<?php /**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="smt_before_content">
            <?php
            $smt_before_content = get_field('smt_before_content');
            if (!empty($smt_before_content)):
                ?>

                <?php echo $smt_before_content; ?>
            <?php endif; ?>
        </div>
        <?php smt_nav_chodatserver() ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'smt-bk-host'),
            'after' => '</div>',
        ));
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
</article><!-- #post-## -->
