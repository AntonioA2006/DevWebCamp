import Swiper, { Navigation } from 'swiper'

document.addEventListener('DOMContentLoaded', ()=>{
    if (document.querySelector('.slider')) {
        const opciones = {
                slidesPerView: 1,
                spaceBetween : 15,
                Navigation:{
                    nextEl:'.swiper-button-next',
                    prevEl:'.swiper-button-prev'
                },
                breakpoints:{
                    768:{
                        slidesPerView: 2
                    },
                    1024:{
                        slidesPerView: 3
                    },
                    1200:{
                        slidesPerView: 4
                    }
                }
        }
        Swiper.use([Navigation])
            new Swiper('.slider',opciones)
    }
});