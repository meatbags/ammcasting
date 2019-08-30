/** Init swiper */

class Carousel {
  constructor() {
    // create swiper
    this.swiper = new Swiper('.swiper-container', {
      init: false,
      speed: 900,
      effect: 'coverflow',
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 2750,
        disableOnInteration: false,
      },
    //  initialSlide: Math.floor(Math.random() * document.querySelectorAll('.swiper-slide').length),
      runCallbacksOnInit: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: (index, className) => {
          return `<div class='${className}'><div class='${className}__inner'></div></div>`;
        }
      },
      coverflowEffect: {
        rotate: 30,
        slideShadows: true,
        depth: 200
      },
      on: {
        slideChangeTransitionStart: () => {
          document.querySelectorAll('.slide-info.active').forEach(el => { el.classList.remove('active'); });
        },
        slideChangeTransitionEnd: () => {
          const index = this.swiper.realIndex;
          const target = document.querySelector('.slide-info[data-index="' + index + '"]');
          if (target) {
            target.classList.add('active');
          }
        }
      }
    });

    // run
    this.swiper.init();
    document.querySelector('.swiper-container__loading').classList.remove('active');
  }
}

export default Carousel;
