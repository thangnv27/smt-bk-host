<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SMT_BK_Host
 */
?>
</div><!-- #content -->
<link href="<?php echo get_template_directory_uri() ?>/layouts/footer.css" rel="stylesheet" type="text/css"/>


<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="smt-time-support">
            <ul class="smt-time-support">
                <li class="col-sm-3 col-xs-6"><i class="fa fa-support"></i> <span>Hỗ trợ 24/7</span></li>
                <li class="col-sm-3 col-xs-6"><i class="fa fa-clock-o"></i> <span>99% Uptime</span></li>
                <li class="col-sm-3 col-xs-6"><i class="fa fa-bolt"></i> <span>Kích hoạt nhanh chóng</span></li>
                <li class="col-sm-3 col-xs-6"><i class="fa fa-money"></i> <span>Hoàn tiền trong 30 ngày</span></li>
            </ul>
        </div>
        <div style="height: 20px; background: transparent"></div>
        <div class="clearfix"></div>
        <div class="smt-footer-widget">
            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('footer-3') ?>
            </div>
            <div class="col-md-3 col-sm-6">
                <?php dynamic_sidebar('footer-4') ?>
            </div>
        </div>
        <div class="clear"></div>

        <div class="site-info">

            <div class="row">
                <div class="col-sm-2">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo-bkhost-small.png"
                         alt="<?php echo bloginfo('name') ?>"
                </div>
            </div>
            <div class="col-sm-7">
                <h3> CÔNG TY CỔ PHẦN GIẢI PHÁP MẠNG TRỰC TUYẾN VIỆT NAM </h3>
                <p><i class="icon-map-marker"></i> <span> Trụ Sở Tại Hà Nội: Số 2, Hẻm 230/138/11 Định Công Thượng, Phường Định Công, Quận Hoàng Mai, Hà Nội</span>
                </p>

<p><i class="icon-map-marker"></i> <span> Mã số thuế: 0106810847</span>
                </p>
<p><i class="icon-map-marker"></i> <span> Người đại diện: Trịnh Duy Thanh </span>
                </p>
                <p><i class="icon-phone"></i> <span> Hotline: (04) 6259 1442 -  0163 272 0340  - 0984 131 161</span> <i
                        class="icon-envelope"></i> <span><a href="mailto:info@bkhost.vn">info@bkhost.vn</a></span></p>
                <div class="site-copyright">
                    <?php echo __('Copyright ©') ?><?php the_time('Y') ?><?php echo __(' BKHOST Corporation. All Rights Reserved') ?>
                </div><!-- .site-info -->
            </div>
            <div class="col-sm-3">
                <div class="smt-footer-social">
                    <h4><?php echo __('Contact with us', 'smt-bk-host') ?></h4>
                    <a rel="nofollow" target="_blank" title="Facebook" href="<?php the_field('smt_bkhost_facebook') ?>"><i
                            class="fa fa-facebook fa-lg"></i></a>
                    <a rel="nofollow" target="_blank" title="Google Plus"
                       href="<?php the_field('smt_bkhost_google') ?> "><i class="fa fa-google-plus fa-lg"></i></a>
                    <a rel="nofollow" target="_blank" title="Twitter" href="<?php the_field('smt_bkhost_twitter') ?>"><i
                            class="fa fa-twitter fa-lg"></i></a>
                    <a rel="nofollow" target="_blank" title="Youtube" href="<?php the_field('smt_bkhost_youtube') ?>"><i
                            class="fa fa-youtube fa-lg"></i></a>

                </div>
		<div>
		<a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=22605"><img src="http://bkhost.vn/wp-content/uploads/2016/12/20150827110756-dathongbao.png" height="100" ></a>
		</div>
            </div>
		
        </div>


        <div class="clearfix"></div>


    </div>

</footer><!-- #colophon -->

<div class="bottom_support" style="z-index:999px;">
    <div class="wrap_bottom">
        <div class="hotline_bottom">

            <span class="ico"><img
                    src="http://bkhost.vn/wp-content/uploads/2016/05/bottom_support_ico_phone-1.png"></span>
            <div class="txt">Hotline: <strong>(04) 6259 1442</strong> <span>(CSKH)</span> - <strong>(04) 6259
                    1443</strong> <span>(Kỹ Thuật)</span></div>
        </div>
        <div class="guide_payment">
            <a target="_self" href="http://bkhost.vn/thanh-toan/">
                <span class="ico"><img
                        src="http://bkhost.vn/wp-content/uploads/2016/05/bottom_support_ico_guidepayment.png"></span>
                <span class="txt">Hướng dẫn thanh toán</span>
            </a>
        </div>
        <div class="advisory_online">
            <a>
                <span class="ico"><img
                        src="http://bkhost.vn/wp-content/uploads/2016/05/bottom_support_ico_advisoryonline.png"></span>
                <span class="txt">Tư vấn online</span>
            </a>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/counter.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/carouFredSel/jquery.carouFredSel-6.0.0.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/carousel-testimonials.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/carousel-brands.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
function displayAjaxLoading(n){
    n?$(".ajax-loading-block-window").show():$(".ajax-loading-block-window").hide("slow");
}
jQuery(function (){
    jQuery("#btnCheckDomain").click(function (){
        displayAjaxLoading(true);
    });
    jQuery(".form-dkdl .form-group").find("p").remove();
    if(jQuery(".notification").length > 0){
        jQuery(".notification-close").click(function(){
            jQuery(this).parent().fadeOut('slow');
        });
    }
});
</script>

<?php wp_footer(); ?>

<script lang="javascript">(function () {
        var pname = ( (document.title != '') ? document.title : document.querySelector('meta[property="og:title"]').getAttribute('content') );
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=c7315c9bfdd9287340c15c5516e7d85e&data=eyJzc29faWQiOjI4MDcyOTksImhhc2giOiIxNWViYTkzZjJhYmRlMjYxZDAxNzNkMTQ2ZGM4ZmQzYSJ9&pname=' + pname;
        var s = document.getElementsByTagName('script');
        s[0].parentNode.insertBefore(ga, s[0]);
    })();</script>
<noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">Tài trợ bởi vatgia.com</a></noscript>
<noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Phát triển bởi vchat.vn</a></noscript>

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 879117416;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/879117416/?value=1&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>
