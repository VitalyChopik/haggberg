/*
!(i) 
Код попадает в итоговый файл, только когда вызвана функция, например FLSFunctions.spollers();
Или когда импортирован весь файл, например import "files/script.js";
Неиспользуемый (не вызванный) код в итоговый файл не попадает.

Если мы хотим добавить модуль следует его расскоментировать
*/
import {
  isWebp,
  headerFixed,
  togglePopupWindows,
  addTouchClass,
  addLoadedClass,
  menuInit,
} from './modules'
/* Раскомментировать для использования */
// import { MousePRLX } from './libs/parallaxMouse'

/* Раскомментировать для использования */
// import AOS from 'aos'

/* Раскомментировать для использования */
import Swiper, { Navigation } from 'swiper'
// Включить/выключить FLS (Full Logging System) (в работе)
window['FLS'] = location.hostname === 'localhost'

/* Проверка поддержки webp, добавление класса webp или no-webp для HTML
! (i) необходимо для корректного отображения webp из css 
*/
isWebp()
/* Добавление класса touch для HTML если браузер мобильный */
/* Раскомментировать для использования */
// addTouchClass();
/* Добавление loaded для HTML после полной загрузки страницы */
/* Раскомментировать для использования */
// addLoadedClass();
/* Модуль для работы с меню (Бургер) */
/* Раскомментировать для использования */
menuInit()

/* Библиотека для анимаций ===============================================================================
 *  документация: https://michalsnik.github.io/aos
 */
// AOS.init();
// =======================================================================================================

// Паралакс мышей ========================================================================================
// const mousePrlx = new MousePRLX({})
// =======================================================================================================

// Фиксированный header ==================================================================================
// headerFixed()
// =======================================================================================================

/* Открытие/закрытие модальных окон ======================================================================
* Чтобы модальное окно открывалось и закрывалось
* На окно повешай атрибут data-type="<название окна>"
* И на кнопку, которая вызывает окно так же повешай атрибут data-type="<название окна>"

* На обертку(враппер) окна добавь класс _overlay-bg
* На кнопку для закрытия окна добавь класс button-close
*/
/* Раскомментировать для использования */
// togglePopupWindows()
// =======================================================================================================

window.addEventListener('DOMContentLoaded', () => {
  const serviceBox = document.querySelectorAll('.services__box'),
    projectPosts = document.querySelectorAll('.project__post'),
    reviewsSlider = document.querySelector('.reviews__slider'),
    tabsList = document.querySelector('.service__tab-list'),
    tabItem = document.querySelectorAll('.service__tab-item'),
    navItem = document.querySelectorAll('.header__menu .menu__list .menu__item'),
    tabsContentBlock = document.querySelectorAll('.service__tab-content');

  function squareBlock(element) {
    element.forEach(item => {
      item.style.height = `${item.offsetWidth}px`;
    });
  }

  if (document.documentElement.clientWidth >= 992) {
    navItem.forEach(item => {
      const navLink = item.querySelector('a');
      item.style.width = `${navLink.offsetWidth}px`;
      item.style.height = `${navLink.offsetHeight}px`;
    })
  }
  if (projectPosts) {
    projectPosts.forEach((item, i) => {
      const projectPostText = item.querySelector('.project__post-text'),
        projectPostImage = item.querySelector('.project__post-image');
      if (i % 2 == 0) {
        projectPostText.style.order = 2;
        projectPostImage.style.order = 1;
      }
    });
  }


  if (document.documentElement.clientWidth >= 600) {
    squareBlock(serviceBox);
  }
  window.addEventListener('resize', function () {
    if (document.documentElement.clientWidth >= 600) {
      squareBlock(serviceBox);

    }
  }, true);

  const removeClass = (element) => {
    element.forEach(elem => {
      elem.classList.remove('active');
    });
  }

  if (reviewsSlider) {
    const swiper = new Swiper(reviewsSlider, {
      modules: [Navigation],
      speed: 1000,
      centeredSlides: true,
      slidesPerView: 1,
      loop: true,
      // effect: 'fade',
      // fadeEffect: {
      //   crossFade: true,
      // },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
  }
  if (tabItem) {
    if (tabItem[0]) {
      tabItem[0].classList.add('active');
      tabsContentBlock[0].classList.add("active");
    }
    tabItem.forEach(item => {

      const localHash = location.hash.replace(/#/g, '');
      if (localHash == item.getAttribute("data-tab-item")) {
        removeClass(tabItem);
        item.classList.add('active');
        const tabTargetAttrStart = item.getAttribute("data-tab-item");
        const tabTargetStart = document.querySelector(`[data-tab-content=${tabTargetAttrStart}]`);
        removeClass(tabsContentBlock);
        tabTargetStart.classList.add('active');
        console.log('работает2')
      } else {
        console.log('не работает')
      }
      item.addEventListener('click', () => {
        location.hash = item.getAttribute("data-tab-item")
        removeClass(tabItem);
        item.classList.add('active');

        const tabTargetAttr = item.getAttribute("data-tab-item");
        const tabTarget = document.querySelector(`[data-tab-content=${tabTargetAttr}]`);;
        removeClass(tabsContentBlock);
        tabTarget.classList.add('active');
        if (tabsList.classList.contains('active')) {
          tabsList.classList.remove('active');
        } else {
          if (item.classList.contains('active')) {
            tabsList.classList.add('active');
          }
        }
      })
    });
  }
})
