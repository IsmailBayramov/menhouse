<script setup>
import Models from './container components/Models.vue'
import Map from './container components/Map.vue'
import Advantages from './container components/Advantages.vue'
import Sales from './container components/Sales.vue'
import Apartments from './container components/Apartments.vue'

document.addEventListener('DOMContentLoaded', () => {
  let countSales = 0;
  let countApartments = 0;
  let widthSales;
  let widthApartments;
  let intervalIdSales;
  let intervalIdApartments;

  const initSlider = (sliderClass, countVar, widthVar, intervalIdVar) => {
    // ... (код инициализации слайдера остается без изменений)
    const images = document.querySelectorAll(`.${sliderClass} .slider .slider-line img`);
    const sliderLine = document.querySelector(`.${sliderClass} .slider .slider-line`);

    const rollSlider = () => sliderLine.style.transform = `translate(-${countVar * widthVar}px)`;
    const nextSlide = () => rollSlider(countVar = (countVar + 1) % images.length);
    const prevSlide = () => rollSlider(countVar = (countVar - 1 + images.length) % images.length);

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
        nextSlide();
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

  initSlider('sales', countSales, widthSales, intervalIdSales);
  initSlider('apartments', countApartments, widthApartments, intervalIdApartments);
});

</script>

<template>
  <div class="container">
    <div class="container-background">
      <img src="../assets/logo.png" alt="body_image" class="container-background-logo">
      <form action="https://apple.com" target="_blank"><button class="container-background-button">Записаться</button></form>
    </div>

    <Advantages></Advantages>

    <Sales></Sales>

    <Models></Models>

    <p class="container-title">Популярные <span class="container-orange-title">Программы</span></p>
    <form action="https://apple.com" target="_blank"><button class="container-background-button">Смотреть больше</button></form>

    <Apartments></Apartments>

    <p class="container-title">Отзывы <span class="container-orange-title">Гостей</span></p>
    <form action="https://apple.com" target="_blank"><button class="container-background-button">Оставить отзыв</button></form>

    <Map></Map>
  </div>
</template>

<style>
progress {
  width: 70vw;
  max-width: 350px;
}

.container {
  padding-top: 50px;
  text-align: center;
  display: flex;
  color: white;
  flex-direction: column;
}

.container-title {
  padding: 1em 0 0 0;
  font-weight: 500;
  /* font-size: calc(.8em + 1.7vw); */
  font-size: calc(.5em + 2vw);
}

.container-orange-title {
  color: #ff320d;
}

.container-background {
  background: url("../assets/body-background.png") no-repeat center center;
  background-size: cover; /* или background-size: 100% 100%; */
  background-repeat: repeat; /* Или background-repeat: no-repeat; если не хотите замощения */
  position: relative;
  height: calc(10em + 25vw); /* Задайте высоту в соответствии с вашими требованиями */
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.container-background-logo {
  max-width: calc(5em + 22vw); /* Адаптивная ширина */
  object-fit: contain;
  height: auto; /* Сохранение пропорций */
}

.container-background-button {
  cursor: pointer;
  color: white;
  padding: 10px 20px 10px 20px;
  background-color: #ff320d;
  font-size: calc(.5em + 1vw);
  margin-top: calc(2em + 1vw);
  max-width: fit-content;
  border: none;
  border-radius: 10px;
}

.container-background-button.advantage {
  margin-top: calc(.5em + .5vw);
}

.container-background-button:hover {
  background-color: rgb(168, 34, 11);
}

.container-button {
  font-size: calc(1em + .5vw);
  background-color: rgb(224, 224, 224);
  border-radius: 0.5em;
  border: 0;
  margin: 0px 5px 0px 5px;
  cursor: pointer;
  width: 30vw;
  height: 30vw;
  max-width: 50px;
  max-height: 50px;
}

.container-button:hover {
  background-color: rgb(202, 202, 202);
}

.our.sales, .our.apartments, .our.models {
  display: flex;
  justify-content: center;
  align-items: center;
}

.slider {
  border: 2px solid black;
  /* width: 100%; */
  max-width: 60%;
  /* height: 300px; */
  margin: 20px 1em;
  overflow: hidden;
}

.slider-line {
  width: 1024px;
  display: flex;
  position: relative;
  left: 0;
  transition: all ease .9s;
}

.slider-button {
  background: none;
  font-size: calc(.5em + 1vw);
  max-width: fit-content;
  border: none;
}

.arrow {
  width: 16px;
  height: 16px;
  border-top: 5px solid #ff320d !important;
  border-right: 5px solid #ff320d !important;
  display: inline-block;
  cursor: pointer;
}

.arrow:hover {
  border-top: 5px solid rgb(168, 34, 11) !important;
  border-right: 5px solid rgb(168, 34, 11) !important;
}

.arrow.left {
  transform: rotate(-135deg);
}

.arrow.right {
  transform: rotate(45deg);
}
</style>