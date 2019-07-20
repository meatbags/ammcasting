/** App entry */

import Carousel from './carousel';
import Parallax from './parallax';
import Nav from './nav';

class App {
  constructor() {
    this.carousel = new Carousel();
    this.parallax = new Parallax();
    this.nav = new Nav();

    // rm loading screen
    const loading = document.querySelector('.loading-screen');
    if (loading) {
      loading.classList.add('hidden');
      setTimeout(() => {
        loading.parentNode.removeChild(loading);
      }, 500);
    }
  }
}

window.onload = () => {
  const app = new App();
};
