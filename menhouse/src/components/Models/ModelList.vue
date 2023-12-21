<script setup>
import { useSliderLogic } from '../../sliderLogic.js';
import { ref } from 'vue';
import Modal from '../Footer/Modal.vue'

useSliderLogic("first", 0)
useSliderLogic("second", 2)
useSliderLogic("third", 4)
useSliderLogic("fourth", 6)

const models = [
  {
    "photosClass": "first",
    "name": "Вика",
    "weight": 50,
    "age": 20,
    "height": 150,
    "breast": 4,
    "image": "src/assets/models/1/1.png",
    "gallery": [
        "src/assets/models/1/1.png",
        "src/assets/models/1/2.png",
        "src/assets/models/1/3.png",
        "src/assets/models/1/4.png",
        "src/assets/models/1/5.png",
    ],
    "status": false
  },
  {
    "photosClass": "second",
    "name": "Илона",
    "weight": 45,
    "age": 22,
    "height": 160,
    "breast": 1.5,
    "image": "src/assets/models/2/2.png",
    "gallery": [
        "src/assets/models/2/1.png",
        "src/assets/models/2/2.png",
        "src/assets/models/2/3.png",
        "src/assets/models/2/4.png",
        "src/assets/models/2/5.png",
    ],
    "status": true
  },
  {
    "photosClass": "third",
    "name": "Аиша",
    "weight": 50,
    "age": 23,
    "height": 162,
    "breast": 1.5,
    "image": "src/assets/models/3/3.png",
    "gallery": [
        "src/assets/models/3/1.png",
        "src/assets/models/3/2.png",
        "src/assets/models/3/3.png",
        "src/assets/models/3/4.png",
        "src/assets/models/3/5.png",
    ],
    "status": true
  },
  {
    "photosClass": "fourth",
    "name": "Аиша",
    "weight": 50,
    "age": 23,
    "height": 162,
    "breast": 1.5,
    "image": "src/assets/models/3/3.png",
    "gallery": [
        "src/assets/models/3/1.png",
        "src/assets/models/3/2.png",
        "src/assets/models/3/3.png",
        "src/assets/models/3/4.png",
        "src/assets/models/3/5.png",
    ],
    "status": true
  }
];

const modalWindow = ref()

const openModal = () => {
  modalWindow.value.openModal()
}
</script>

<template>
    <Modal ref="modalWindow"></Modal>
    <div class="modelList">
        <div class="model-container" v-for="(model, index) in models" :key="index">
            <div :class="['photos-container', model.photosClass]">
                <button class="slider-button slider-prev"><div class="arrow left"></div></button>
                <div class="slider">
                    <div class="slider-line">
                        <img class="slide-content" v-for="(photo, photoIndex) in model.gallery" :src="photo" :alt="'Photo ' + photoIndex">
                    </div>
                </div>
                <button class="slider-button slider-next"><div class="arrow right"></div></button>
            </div>
            <div class="content-container">
                <div class="info">
                    <p>
                    Имя: <span>{{ model.name }}</span> <br>
                    Вес: <span>{{ model.weight }}</span> <br>
                    Возраст: <span>{{ model.age }}</span> <br>
                    Рост: <span>{{ model.height }}</span> <br>
                    Грудь: <span>{{ model.bust }}</span>
                    </p>
                </div>
                <button @click="openModal" class="info-button">Записаться</button>
            </div>
        </div>
    </div>  
    
</template>

<style scoped>
.modelList {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin-top: 2.5em;
}

.model-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: fit-content;
    margin: 1em 1em 2.5em 1em;
    box-shadow: 25px 0px 55px -35px rgba(149,35,16,1);
    border-radius: 10px;
}

.photos-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    margin-right: 2em;
}

.info p {
    text-align: left;
    margin-top: 0;
    font-size: calc(.5em + .7vw);
    line-height: calc(1em + 1vw);
    width: max-content;
}

.info p span {
    font-weight: 100;
}

.info-button {
    cursor: pointer;
    color: white;
    padding: 10px 30px;
    background-color: #ff320d;
    font-size: calc(.5em + .7vw);
    max-width: fit-content;
    border: none;
    border-radius: 10px;
}

.info-button:hover {
    background-color: rgb(168, 34, 11);
}

.slider {
    margin: 0 1em;
    max-width: 20vw;
    border: none;
    border-radius: 15px;
    box-shadow: 0px 0px 25px 0px rgba(149,35,16,1);
}

.arrow {
  width: 16px;
  height: 16px;
  border-top: 5px solid #fff !important;
  border-right: 5px solid #fff !important;
  display: inline-block;
  cursor: pointer;
}

.arrow:hover {
  border-top: 5px solid rgb(123, 123, 123) !important;
  border-right: 5px solid rgb(123, 123, 123) !important;
}

.arrow.left {
  transform: rotate(-135deg);
}

.arrow.right {
  transform: rotate(45deg);
}


@media (max-width: 550px) {
    .slider {
        max-width: 40vw;
    }

    .model-container {
        flex-direction: column;
        box-shadow: none;
    }

    .photos-container {
        margin-bottom: 1em;
    }

    .content-container {
        margin-right: 0;
    }

    .info p {
        font-size: calc(.7em + 1vw);
    }

    .info-button {
        font-size: calc(.7em + 1vw);
    }
}
</style>