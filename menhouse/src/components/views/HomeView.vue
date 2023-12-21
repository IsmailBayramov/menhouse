<script setup>
import Models from '../Home/Models.vue'
import Map from '../Home/Map.vue'
import Advantages from '../Home/Advantages.vue'
import Sales from '../Home/Sales.vue'
import Apartments from '../Home/Apartments.vue'
import Review from '../Home/Review.vue'
import Programms from '../Home/Programms.vue'
import BorderButtons from '../General/BorderButtons.vue'
import { useSliderLogic } from '../../sliderLogic.js'
import { ref } from 'vue'

useSliderLogic("sales", 0);
useSliderLogic("programms", 2);
useSliderLogic("apartments", 4);

const isModalOpen = ref(false);

const openModal = () => {
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
};
</script>

<template>
  <div class="container">
    <div class="container-background">
      <img src="../../assets/logo.png" alt="body_image" class="container-background-logo">
      <button @click="openModal" class="container-background-button">Записаться</button>
    </div>
    <div v-if="isModalOpen" class="modalBackground">
        <div class="modal">
          <p class="info">+7 912 512 00 16</p>
          <a href="tel:+7 912 512 0016" class="sign-up">ПОЗВОНИТЬ</a>
          <div @click="closeModal" class="close"></div>
        </div>
    </div>
    <Advantages @openModal="openModal"></Advantages>
    <Sales @openModal="openModal"></Sales>
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
  margin-right: auto;
  margin-left: auto;
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

/* Модальное окно */
.close {
  width: 25px;
  height: 25px;
  position: absolute;
  top: 10px;
  right: 0px; /* Расположение в правом верхнем углу */
  cursor: pointer;
}

.close:before {
  content: '+';
  color: white;
  position: absolute;
  z-index: 2;
  transform: rotate(45deg);
  font-size: 25px;
  line-height: 1;
  top: -5px;
  right: 15px;
  transition: all 0.3s cubic-bezier(0.77, 0, 0.2, 0.85);
}

.close:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background: white;
  z-index: 1;
  transition: all 0.3s cubic-bezier(0.77, 0, 0.2, 0.85);
  transform: scale(0.01);
}

.close:hover::before {
  color: rgb(123, 123, 123);
}

.modalBackground {
  touch-action: none;
  background: rgba(0, 0, 0, 0.8);
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 1001;
}

.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  color: white;
  background-color: #222222;
  border: 3px solid #3d3d3d;
  border-radius: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  z-index: 1002;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.sign-up {
  font-size: calc(.5em + .8vw);
  font-weight: 700;
  padding: 10px 0;
  width: 85%;
  background: none;
  border-radius: 15px;
  border-style: solid;
  text-decoration: none;
  color: #39c434;
  cursor: pointer;
}

.sign-up:hover {
  color: #1e711b;
}

.info {
  text-align: left;
  padding: 10px;
  font-weight: 600;
  font-size: calc(.8em + .8vw);
  width: max-content;
}

.info span {
  font-weight: 100;
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