// sliderLogic.js
import { onMounted } from 'vue';

export const useSliderLogic = (name) => {
  let countSales = 0;
  let widthSales;
  let intervalIdSales;

  const initSlider = (sliderClass, countVar, widthVar, intervalIdVar) => {
    const images = document.querySelectorAll(`.${sliderClass} .slider .slider-line .slide-content`);
    const sliderLine = document.querySelector(`.${sliderClass} .slider .slider-line`);

    const rollSlider = () => sliderLine.style.transform = `translate(-${countVar * widthVar}px)`;
    const prevSlide = () => rollSlider(countVar = (countVar + 1) % images.length);
    const nextSlide = () => rollSlider(countVar = (countVar - 1 + images.length) % images.length);

    const init = () => {
      widthVar = document.querySelector(`.${sliderClass} .slider`).offsetWidth;
      sliderLine.style.width = `${widthVar * images.length}px`;

      images.forEach(item => {
        item.style.width = `${widthVar}px`;
        item.style.height = 'auto';
      });

      rollSlider();
    };

    init();
    window.addEventListener('resize', init);
    document.querySelector(`.${sliderClass} .slider-prev`).addEventListener('click', prevSlide);
    document.querySelector(`.${sliderClass} .slider-next`).addEventListener('click', nextSlide);

    const startAutoSlide = () => {
      intervalIdVar = setInterval(() => {
        prevSlide();
      }, 4000);
    };

    const stopAutoSlide = () => {
      clearInterval(intervalIdVar);
    };

    const resetAutoSlide = () => {
      stopAutoSlide();
      startAutoSlide();
    };

    document.querySelector(`.${sliderClass} .slider-prev`).addEventListener('click', () => {
      prevSlide();
      resetAutoSlide();
    });

    document.querySelector(`.${sliderClass} .slider-next`).addEventListener('click', () => {
      nextSlide();
      resetAutoSlide();
    });

    startAutoSlide();
  };

  onMounted(() => {
    initSlider(name, countSales, widthSales, intervalIdSales);
  });
};
