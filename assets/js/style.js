//親Swiper
var mySwiperp = new Swiper('.swiper-parent', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    }
});
//子Swiper
var mySwiperc = new Swiper('.swiper-child', {
    nested: true,
    slidesPerColumnFill: 'row',
    slidesPerColumn: 2,
    slidesPerView: 3,
    slidesPerGroup: 6
});