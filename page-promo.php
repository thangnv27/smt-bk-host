<?php

/*

 * Template Name: Khuyen Mai

 */



get_header();

?>



<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <div id="BannerKMGiangSinh">

            <div class="MainObject">

                <div class="container">

                    <div class="vi_element countdown">

                        <div class="countdown_clock" id="countdown_6186"></div>

                    </div>

                    <script type="text/template" class="example_template">

                        <div class="time <%= label %>">

                            <span class="count curr top"><%= curr %></span>

                            <span class="count next top"><%= next %></span>

                            <span class="count next bottom"><%= next %></span>

                            <span class="count curr bottom"><%= curr %></span>

                            <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>

                        </div>

                    </script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.1.0/jquery.countdown.min.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.6.1/lodash.min.js"></script>

                    <script>jQuery(document).ready(function($){

                            var labels = ['Ngày', 'Giờ', 'Phút', 'Giây'],

                                //nextYear = (new Date().getFullYear() + 1) + '/01/01',

                                nextYear = '2017/07/02',

                                template = _.template($('.example_template').html()),

                                currDate = '00:00:00:00:00',

                                nextDate = '00:00:00:00:00',

                                parser = /([0-9]{2})/gi,

                                $example = $('#countdown_6186');

                            // Parse countdown string to an object

                            function strfobj(str) {

                                var parsed = str.match(parser),

                                    obj = {};

                                labels.forEach(function(label, i) {

                                    obj[label] = parsed[i]

                                });

                                return obj;

                            }

                            // Return the time components that diffs

                            function diff(obj1, obj2) {

                                var diff = [];

                                labels.forEach(function(key) {

                                    if (obj1[key] !== obj2[key]) {

                                        diff.push(key);

                                    }

                                });

                                return diff;

                            }

                            // Build the layout

                            var initData = strfobj(currDate);

                            labels.forEach(function(label, i) {

                                $example.append(template({

                                    curr: initData[label],

                                    next: initData[label],

                                    label: label

                                }));

                            });

                            // Starts the countdown

                            $example.countdown(nextYear, function(event) {

                                var newDate = event.strftime('%D:%H:%M:%S'),

                                    data;

                                if (newDate !== nextDate) {

                                    currDate = nextDate;

                                    nextDate = newDate;

                                    // Setup the data

                                    data = {

                                        'curr': strfobj(currDate),

                                        'next': strfobj(nextDate)

                                    };

                                    // Apply the new values to each node that changed

                                    diff(data.curr, data.next).forEach(function(label) {

                                        var selector = '.%s'.replace(/%s/, label),

                                            $node = $example.find(selector);

                                        // Update the node

                                        $node.removeClass('flip');

                                        $node.find('.curr').text(data.curr[label]);

                                        $node.find('.next').text(data.next[label]);

                                        // Wait for a repaint to then flip

                                        _.delay(function($node) {

                                            $node.addClass('flip');

                                        }, 50, $node);

                                    });

                                }

                            });

                        });</script>

                </div>

            </div>

        </div>

        

        <div class="container">

            <?php

            $taxonomy = "promo_cat";

            $terms = get_terms($taxonomy);

            foreach($terms as $term):

            ?>

            <div class="promo-block">

                <h2>KHUYẾN MẠI <span class="name"><?php echo $term->name ?></span></h2>

                <div class="desc"><?php echo $term->description ?></div>

                <div class="promoList owl-carousel">

                    <?php

                    $loop = new WP_Query(array(

                        'post_type' => 'promo',

                        'posts_per_page' => -1,

                        'post_status' => 'publish',

                        'tax_query' => array(

                            array(

                                'taxonomy' => $taxonomy,

                                'field' => 'term_id',

                                'terms' => $term->term_id,

                            )

                        ),

                    ));

                    while ($loop->have_posts()) : $loop->the_post();

                    ?>

                    <div class="promo">

                        <div class="content">

                            <div class="image">

                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>" />

                            </div>

                            <div class="text">

                                <h3><?php the_title() ?></h3>

                                <div class="desc"><?php the_content() ?></div>

                                <p class="origin">Giá gốc:

                                    <span><?php the_field('origin_price') ?></span>

                                </p>

                                <p class="afterPromo">Giá khuyến mãi:

                                    <span><?php the_field('sale_price') ?></span>

                                </p>

                                <p class="time">

                                    <i class="fa fa-clock-o"></i> Hết hiệu lực trong:

                                    <span class="countDown" data-end="<?php the_field('expired_date') ?>"></span>

                                </p>

                            </div>

                            <div class="CodeArea"><div class="code">CODE: <span class="the_code"><?php the_field('promo_code') ?></span></div></div>

                            <div class="LinkButton">

                                <a href="<?php the_field('url_register') ?>" target="_blank" class="link">ĐĂNG KÝ NGAY</a>

                            </div>

                            <div class="tag"><span><?php the_field('gia_tri') ?></span></div>

                        </div>

                    </div>

                    <?php

                    endwhile;

                    wp_reset_query();

                    ?>

                </div>

            </div>

            <?php endforeach; ?>

            

            <div class="Note">

                <strong>Quý khách hàng lưu ý:</strong>

                <?php

                while (have_posts()) : the_post();

                    the_content();

                endwhile;

                ?>

            </div>

        </div>

    </main>

    <div class="smt-support">

        <?php get_template_part('template-parts/content', 'support'); ?>

    </div>

</div><!-- #primary -->



<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.min.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/countDown.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/promo.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/countdown.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/moment-countdown.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/promo.js" type="text/javascript"></script>

<?php get_footer(); ?>