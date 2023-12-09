<script setup>
import Models from '../Home/Models.vue'
import Map from '../Home/Map.vue'
import Advantages from '../Home/Advantages.vue'
import Sales from '../Home/Sales.vue'
import Apartments from '../Home/Apartments.vue'
import Review from '../Home/Review.vue'
import Programms from '../Home/Programms.vue'
import BorderButtons from '../General/BorderButtons.vue'
import { useSliderLogic } from '../../sliderLogic.js'; // Укажите правильный путь к файлу

useSliderLogic("sales");
useSliderLogic("programms");
useSliderLogic("apartments");

</script>

<template>
  <div class="container">
    <div class="container-background">
      <img src="../../assets/logo.png" alt="body_image" class="container-background-logo">
      <form action="https://apple.com" target="_blank"><button class="container-background-button">Записаться</button></form>
    </div>
    <Advantages></Advantages>
    <Sales></Sales>
    <Models></Models>
    <Programms></Programms>
    <Apartments></Apartments>
    <Review></Review>
    <Map></Map>
    <BorderButtons></BorderButtons>
  </div>
</template>

<style>
.container {
  padding-top: 50px;
  text-align: center;
  display: flex;
  color: white;
  flex-direction: column;
}

.container-title {
  padding: 1em .5em 0 .5em;
  font-weight: 500;
  font-size: calc(.5em + 2vw);
}

.container-orange-title {
  color: #ff320d;
}

.container-background {
  background: url("../../assets/background.png") no-repeat center center;
  background-size: cover; /* или background-size: 100% 100%; */
  background-repeat: repeat; /* Или background-repeat: no-repeat; если не хотите замощения */
  position: relative;
  height: calc(10em + 25vw); /* Задайте высоту в соответствии с вашими требованиями */
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

.our.sales, .our.apartments, .our.models, .our.review {
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

.reviews button {
  visibility: collapse;
}

@media (max-width: 550px) {
  .container-title {
    font-size: calc(1em + 2vw);
  }

  .container-background-button {
    font-size: calc(.7em + 1vw);
  }
}
</style>