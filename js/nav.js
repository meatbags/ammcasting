/** Handle nav */

class Nav {
  constructor() {
    this.el = {
      cascadeIn: document.querySelectorAll('.nav__title, .nav__menu-item'),
      navItems: document.querySelectorAll('.nav__menu-item, .mobile-menu__menu-item'),
      mobileMenuButton: document.querySelector('.mobile-menu-button'),
      mobileMenu: document.querySelector('.mobile-menu'),
    };

    // cascade in nav
    let offset = 200;
    let i = 0;
    this.el.cascadeIn.forEach(el => {
      setTimeout(() => {
        el.classList.add('active');
      }, ++i * 200 + offset);
    });

    // hook up menus
    this.el.navItems.forEach(el => {
      el.addEventListener('click', () => {
        const target = document.querySelector(el.dataset.target);
        if (target) {
          target.scrollIntoView();
          this.closeMobileMenu();
        }
      });
    });

    // mobile menu button
    this.el.mobileMenuButton.addEventListener('click', () => {
      if (this.el.mobileMenuButton.classList.contains('active')) {
        this.closeMobileMenu();
      } else {
        this.openMobileMenu();
      }
    });
  }

  openMobileMenu() {
    this.el.mobileMenuButton.classList.add('active');
    this.el.mobileMenu.classList.add('active');
  }

  closeMobileMenu() {
    this.el.mobileMenuButton.classList.remove('active');
    this.el.mobileMenu.classList.remove('active');
  }
}

export default Nav;
