/** Handle parallax */

class Parallax {
  constructor() {
    this.el = {
      nav: document.querySelector('.nav'),
      parallax: document.querySelectorAll('.parallax')
    };
    this.parallaxThreshold = 20;
    this.cascadeTime = 150;
    window.addEventListener('scroll', () => { this.onScroll(); });
    this.onScroll();
  }

  onScroll() {
    const top = (window.pageYOffset || document.documentElement.scrollTop)  - (document.documentElement.clientTop || 0);
    let i = 0;
    this.el.parallax.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - this.parallaxThreshold) {
        if (!el.classList.contains('parallax-active')) {
          el.classList.add('parallax-active');
        }
      } else {
        el.classList.remove('parallax-active');
      }
    });
  }
}

export default Parallax;
