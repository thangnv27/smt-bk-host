
<link href="<?php echo get_template_directory_uri() ?>/css/smt-services.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo get_template_directory_uri() ?>/js/services.plugin.js" type="text/javascript"></script>
<div class="container">
    <div class="smt-title">
        <h3 ><?php echo __('My Services', 'smt-bk-host') ?></h3>
        
    
    </div>

    <div class="btslide_sercice">
    	<a href="javascript:void(0" class="btslide_1"></a>
        <a href="javascript:void(0)" class="btslide_2"></a>
    </div>
    <div class="clearfix" style="margin-bottom: 15px"></div>
    <ul class="sercice">
   
            <?php
            $smt_services = new WP_Query(
                    array(
                'post_type' => 'services',
                'posts_per_page' => 8,
                    )
            );
            if ($smt_services->have_posts()) {
                while ($smt_services->have_posts()) : $smt_services->the_post();
                    ?>
            <li class="col-md-3">
                        <div class="smt-services-box ">

                            <a href="<?php the_field('smt_link_services') ?>"
                               title="<?php the_title() ?>"> <?php the_post_thumbnail() ?></a>
                            <h3>
                                <a href="<?php the_field('smt_link_services') ?>"
                                   title="<?php the_title() ?>"><?php the_title() ?></a>
                            </h3>
                            <p>
        <?php the_excerpt() ?>
                            </p>
                            <a class="btn btn-default"
                               href="<?php the_field('smt_link_services') ?>"> <?php echo __('Register', 'smt-bk-host') ?></a>
                        </div>
    </li>
        <?php
    endwhile;
} else {
    echo __('Not Found', 'smt-bk-host');
}
wp_reset_postdata();
?>


        </ul>
 
</div>
 

