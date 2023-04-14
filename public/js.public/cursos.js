const slider_configs = {
    type: "loop",
    perPage: 5,
    focus: 0,
    omitEnd: true,
    gap: 20,
    pagination: false,
    breakpoints: {
        1100: {
            perPage: 4,
        },
        900: {
            perPage: 3,
        },
        700: {
            perPage: 2,
        },
        350: {
            perPage: 1,
        },
    },
};

const splide_proximos = new Splide("#slider-splide-cursos-proximos", slider_configs).mount();
const splide_anteriores = new Splide("#slider-splide-cursos-anteriores", slider_configs).mount();
const splide_activos = new Splide("#slider-splide-cursos-activos", slider_configs).mount();
