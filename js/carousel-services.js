/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery('#services').carouFredSel({
    auto: false,
    prev: '#prev2',
    next: '#next2',

    mousewheel: true,
    swipe: {
        onMouse: true,
        onTouch: true
    },
    items: {
        width: 200,
        //	height: '30%',	//	optionally resize item-height
        visible: {
            min: 4,
            max: 4
        }
    },
    scroll: {
        items: 1,
        easing: "easeOutBounce",
        duration: 1000,
        pauseOnHover: true
    }
});
	