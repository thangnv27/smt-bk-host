$(document).ready(function () {
    $(".btslide_1").addClass('active');
    $('ul.sercice li:nth-child(1)').show();
    $('ul.sercice li:nth-child(2)').show();
    $('ul.sercice li:nth-child(3)').show();
    $('ul.sercice li:nth-child(4)').show();
    $('ul.sercice li:nth-child(5)').hide();
    $('ul.sercice li:nth-child(6)').hide();
    $('ul.sercice li:nth-child(7)').hide();
    $('ul.sercice li:nth-child(8)').hide();
    $(".btslide_1").click(function () {
        $('.btslide_1').addClass('active');
        $('.btslide_2').removeClass('active');
        $('ul.sercice li:nth-child(1)').show();
        $('ul.sercice li:nth-child(2)').show();
        $('ul.sercice li:nth-child(3)').show();
        $('ul.sercice li:nth-child(4)').show();
        $('ul.sercice li:nth-child(5)').hide();
        $('ul.sercice li:nth-child(6)').hide();
        $('ul.sercice li:nth-child(7)').hide();
        $('ul.sercice li:nth-child(8)').hide();


    });
    $(".btslide_2").click(function () {
        $('.btslide_2').addClass('active');
        $('.btslide_1').removeClass('active');

        $('ul.sercice li:nth-child(1)').hide();
        $('ul.sercice li:nth-child(2)').hide();
        $('ul.sercice li:nth-child(3)').hide();
        $('ul.sercice li:nth-child(4)').hide();
        $('ul.sercice li:nth-child(5)').show();
        $('ul.sercice li:nth-child(6)').show();
        $('ul.sercice li:nth-child(7)').show();
        $('ul.sercice li:nth-child(8)').show();
    });
});
