jQuery('#testimonials').carouFredSel({
//    auto: false,
    responsive: true,
    width: '100%',
    scroll: 1,
    prev: '#prev3',
    next: '#next3',
    items: {width: 360, height: 260, visible: {min: 1, max: 3}}
});
//$(document).ready(function () {
//    var $tabs = $('#horizontalTab');
//    $tabs.responsiveTabs({
//        rotate: false,
//        startCollapsed: 'accordion',
//        collapsible: 'accordion',
//        setHash: true,
//        disabled: [6, 7],
//        activate: function (e, tab) {
//            $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
//        },
//        activateState: function (e, state) {
//            $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
//        }
//    });
//    $('#start-rotation').on('click', function () {
//        $tabs.responsiveTabs('startRotation', 1000);
//    });
//    $('#stop-rotation').on('click', function () {
//        $tabs.responsiveTabs('stopRotation');
//    });
//    $('#start-rotation').on('click', function () {
//        $tabs.responsiveTabs('active');
//    });
//    $('#enable-tab').on('click', function () {
//        $tabs.responsiveTabs('enable', 3);
//    });
//    $('#disable-tab').on('click', function () {
//        $tabs.responsiveTabs('disable', 3);
//    });
//    $('.select-tab').on('click', function () {
//        $tabs.responsiveTabs('activate', $(this).val());
//    });
//});