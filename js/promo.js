function pad(pad, str, padLeft) {
    if (typeof str === 'undefined')
        return pad;
    if (padLeft) {
        return (pad + str).slice(-pad.length);
    } else {
        return (str + pad).substring(0, pad.length);
    }
}
jQuery(function ($){
    jQuery('.owl-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 30,
        responsiveClass: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        dots: false,
        responsive: {
            0: {
                items: 1,
                margin: 0
            },
            481: {
                items: 2,
                margin: 15
            },
            600: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    
    setInterval(function() {
        $('.promoList .promo .countDown').each(function() {
            var test = moment($(this).data('end')).countdown();
            var dayStr = test.days ? pad('00', test.days, true) + ' ngày ' : '';
            $(this).text(dayStr + pad('00', test.hours, true) + ':' + pad('00', test.minutes, true) + ':' + pad('00', test.seconds, true));
        });
    }, 1000);
});