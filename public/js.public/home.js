const slider_cursos1 = new Splide("#slider-cursos-1", {
    type: "loop",
    height: "10rem",
    focus: "center",
    autoWidth: true,
    autoplay: true,
    pagination: false,
    pauseOnHover: false,

    speed: 1000,
    interval: 2000,
}).mount();

const slider_cursos2 = new Splide("#slider-cursos-2", {
    type: "loop",
    height: "10rem",
    focus: "center",
    autoWidth: true,
    autoplay: true,
    pagination: false,
    pauseOnHover: false,
    speed: 1000,
    interval: 2000,
    direction: "rtl", // ltr, rtl
}).mount();
