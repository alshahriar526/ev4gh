/**
 * Template Name: ShahriarJan
 * Updated: Jan 30 2024 with Bootstrap v5.3.2
 * 
 */
(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim();

        // console.log(all);
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {

        // console.log(type);

        let selectEl = select(el, all);
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

      /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    console.log(window.scrollY);
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

/**
   * Sticky Header on Scroll
   */
// const selectHeader = document.querySelector('#header');
// if (selectHeader) {
//   let headerOffset = selectHeader.offsetTop;
//   let nextElement = selectHeader.nextElementSibling;

//   const headerFixed = () => {
//     if ((headerOffset - window.scrollY) <= 0) {
//       selectHeader.classList.add('sticked');
//       if (nextElement) nextElement.classList.add('sticked-header-offset');
//     } else {
//       selectHeader.classList.remove('sticked');
//       if (nextElement) nextElement.classList.remove('sticked-header-offset');
//     }
//   }
//   window.addEventListener('load', headerFixed);
//   document.addEventListener('scroll', headerFixed);
// }

/**
 * Navbar links active state on scroll
 */
let navbarlinks = document.querySelectorAll('#navbar a');

function navbarlinksActive() {
  navbarlinks.forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    let position = window.scrollY + 200;

    if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
      navbarlink.classList.add('active');
    } else {
      navbarlink.classList.remove('active');
    }
  })
}
window.addEventListener('load', navbarlinksActive);
document.addEventListener('scroll', navbarlinksActive);

/**
 * Mobile nav toggle
 */
const mobileNavShow = document.querySelector('.mobile-nav-show');
const mobileNavHide = document.querySelector('.mobile-nav-hide');

document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
  el.addEventListener('click', function(event) {
    event.preventDefault();
    mobileNavToogle();
  })
});

function mobileNavToogle() {
  document.querySelector('body').classList.toggle('mobile-nav-active');
  mobileNavShow.classList.toggle('d-none');
  mobileNavHide.classList.toggle('d-none');
}

/**
 * Hide mobile nav on same-page/hash links
 */
document.querySelectorAll('#navbar a').forEach(navbarlink => {

  if (!navbarlink.hash) return;

  let section = document.querySelector(navbarlink.hash);
  if (!section) return;

  navbarlink.addEventListener('click', () => {
    if (document.querySelector('.mobile-nav-active')) {
      mobileNavToogle();
    }
  });

});

/**
 * Toggle mobile nav dropdowns
 */
const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

navDropdowns.forEach(el => {
  el.addEventListener('click', function(event) {
    if (document.querySelector('.mobile-nav-active')) {
      event.preventDefault();
      this.classList.toggle('active');
      this.nextElementSibling.classList.toggle('dropdown-active');

      let dropDownIndicator = this.querySelector('.dropdown-indicator');
      dropDownIndicator.classList.toggle('bi-chevron-up');
      dropDownIndicator.classList.toggle('bi-chevron-down');
    }
  })
});

    /* Toggle Menu  */
    const menutoggle = select('.menu-toggle ');
    on('click', '.menu-toggle', function(e) {
        menutoggle.classList.toggle('navber-active')

    })








})()