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

    let touchStartX = 0;
    let touchEndX = 0;

    const handleTouchStart = (event) => {
      touchStartX = event.touches[0].clientX;
    };

    const handleTouchMove = (event) => {
      touchEndX = event.touches[0].clientX;
    };

    const handleTouchEnd = () => {
      const swipeThreshold = 50; // Минимальное расстояние для определения свайпа

      if (touchStartX - touchEndX > swipeThreshold) {
        // свайп влево
        prevSlide();
        resetAutoSlide();
      } else if (touchEndX - touchStartX > swipeThreshold) {
        // свайп вправо
        nextSlide();
        resetAutoSlide();
      }
    };

    sliderLine.addEventListener('touchstart', handleTouchStart);
    sliderLine.addEventListener('touchmove', handleTouchMove);
    sliderLine.addEventListener('touchend', handleTouchEnd);

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
