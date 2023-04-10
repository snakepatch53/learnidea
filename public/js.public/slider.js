// const swiper = new Swiper(".swiper", {
//     speed: 1500,
//     allowTouchMove: true,
//     autoplay: {
//         delay: 5000,
//     },
//     effect: "fade",
//     fadeEffect: {
//         crossFade: true,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
// });
// const $swiper = document.querySelector(".swiper").swiper;
const splide = new Splide("#slider-splide", {
    type: "fade",
    rewind: true,
    autoplay: true,
    pauseOnHover: false,
    perPage: 1,
    pagination: false,
    speed: 5000,
    interval: 5000,
}).mount();
