<h3 style="font-family: 'Roboto Condensed', sans-serif;"><?php echo __('News', 'smt-bk-host') ?></h3>
<ul class="smt_tin_cong_ty">


    <?php $smt_tin_tuc = new WP_Query('showposts=5&cat=1');
    while ($smt_tin_tuc->have_posts()) : $smt_tin_tuc->the_post(); ?>
        <li>
            <span><i class="gray glyphicon glyphicon-calendar"></i><?php the_time('Y/m/d') ?> - </span><a
                href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </li>

    <?php endwhile;
    wp_reset_postdata(); ?>

</ul>

