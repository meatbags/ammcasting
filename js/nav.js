/** Handle nav */

class Nav {
  constructor() {
    this.el = {
      navItems: document.querySelectorAll('.nav__menu-item'),
    };

    let offset = 200;
    let i = 0;
    this.el.navItems.forEach(el => {
      setTimeout(() => {
        el.classList.add('active');
      }, ++i * 200 + offset);

      el.addEventListener('click', () => {
        const target = document.querySelector(el.dataset.target);
        if (target) {
          target.scrollIntoView();
        }
      });
    });
  }
}

export default Nav;
