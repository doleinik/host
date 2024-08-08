import Swiper from '../../../../../../plugins/brainwave/assembly/node_modules/swiper';
import Navigation from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/navigation.min.mjs';


const blogShortSwiper = document.querySelectorAll('.blog_short_swiper');
if (blogShortSwiper.length > 0) {
    blogShortSwiper.forEach((element, index) => {
        var swiper = new Swiper(element, {
            modules: [Navigation],
            spaceBetween: 26,
            // slidesPerView: 1,
            // breakpoints: {
            //     640: {
            //         slidesPerView: 2,
            //     },
            //     768: {
            //         slidesPerView: 4,
            //     },
            //     1024: {
            //         slidesPerView: 5,
            //     },
            // },
            slidesPerView: "auto",
            // navigation: {
            //     nextEl: `.quick_clips_swiper .arrow-button-next`,
            //     prevEl: `.quick_clips_swiper .arrow-button-prev`,
            // },
        });
    })
}

