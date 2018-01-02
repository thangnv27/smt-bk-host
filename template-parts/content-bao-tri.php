<h3><?php echo __('Maintenance News', 'smt-bk-host') ?></h3>
<ul class="smt_tin_bao_tri">
    <?php $smt_bao_tri = new WP_Query('showposts=5&cat=5');
    while ($smt_bao_tri->have_posts()) : $smt_bao_tri->the_post(); ?>
        <li>
            <span><i class="gray glyphicon glyphicon-calendar"></i><?php the_time('Y/m/d') ?> - </span><a
                href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </li>
    <?php endwhile;
    wp_reset_postdata(); ?>
</ul>

