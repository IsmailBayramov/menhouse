// sliderLogic.js
import { onMounted } from 'vue';

export const useSliderLogic = (name, timeToStart) => {
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
    let touchMoveX = 0;

    const handleTouchStart = (event) => {
      touchStartX = event.touches[0].clientX;
      stopAutoSlide();
    };

    const handleTouchMove = (event) => {
      touchMoveX = event.touches[0].clientX;
      const deltaX = touchStartX - touchMoveX

      // Обновляем положение слайдов в реальном времени во время drag
      sliderLine.style.transition = 'none';
      sliderLine.style.transform = `translate(-${countVar * widthVar + deltaX}px)`;
    };

    const handleTouchEnd = () => {
      const swipeThreshold = 50;

      if (touchMoveX - touchStartX > swipeThreshold) {
        // свайп влево
        nextSlide();
        resetAutoSlide();
      } else if (touchStartX - touchMoveX > swipeThreshold) {
        // свайп вправо
        prevSlide();
        resetAutoSlide();
      }

      startAutoSlide();
      // Восстанавливаем transition и реальное положение слайдов после drag
      sliderLine.style.transition = '';
      sliderLine.style.transform = `translate(-${countVar * widthVar}px)`;
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

    const startAutoSlide = () => {
      intervalIdVar = setInterval(() => {
        prevSlide();
      }, 8000);
    };

    const stopAutoSlide = () => {
      clearInterval(intervalIdVar);
    };

    const resetAutoSlide = () => {
      stopAutoSlide();
      startAutoSlide();
    };

    document.querySelector(`.${sliderClass} .slider-prev`).addEventListener('click', () => {
      nextSlide();
      resetAutoSlide();
    });

    document.querySelector(`.${sliderClass} .slider-next`).addEventListener('click', () => {
      prevSlide();
      resetAutoSlide();
    });

    setTimeout(() => {
      startAutoSlide()
    }, timeToStart * 1000)
    
  };

  onMounted(() => {
    initSlider(name, countSales, widthSales, intervalIdSales);
  });
};
