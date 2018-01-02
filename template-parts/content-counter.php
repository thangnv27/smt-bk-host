<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SMT_BK_Host
 */
?>

<link href="<?php echo get_template_directory_uri() ?>/css/smt-counter.css" rel="stylesheet" type="text/css"/>
<div class="smt-counter" style="background: linear-gradient( rgba(235, 0, 0, 0.7), rgba(235, 0, 0, 0.7)),
    url(<?php echo get_template_directory_uri() ?>/img/bg_nhanxet.jpg);">
    <div class="container">
        <h3><?php echo __('BKHOST and numbers', 'smt-bk-host') ?></h3>
        <div class="row">
            <div class="col-md-3">
                <span class="count"><?php the_field('smt_nam_phat_trien', 'option') ?></span>
                <p class="count-title"><?php echo __('Years development', 'smt-bk-host') ?></p>
            </div>
            <div class="col-md-3">
                <span class="count"><?php the_field('smt_kh_than_thiet', 'option') ?></span>
                <p class="count-title"><?php echo __('Loyal customers', 'smt-bk-host') ?></p>
            </div>
            <div class="col-md-3">
                <span class="count"><?php the_field('smt_dai_ly', 'option') ?></span>
                <p class="count-title"><?php echo __('Agency', 'smt-bk-host') ?></p>
            </div>
            <div class="col-md-3">
                <span class="count"><?php the_field('smt_nhan_su', 'option') ?></span>
                <p class="count-title"><?php echo __('Member', 'smt-bk-host') ?></p>
            </div>
        </div>
    </div>
</div>



