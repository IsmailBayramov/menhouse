<script setup>
import { useSliderLogic } from '../../sliderLogic.js';
import { ref } from 'vue';
import Modal from '../Footer/Modal.vue'
import {openFullscreen} from '../../plugins/fullScreen.vue';

const applySliderLogicToModels = (models) => {
  models.forEach((model, index) => {
    useSliderLogic(`photosClass${index + 1}`, (index % 4) + 1);
  });
};

const models = [
  {
    "photosClass": "photosClass1",
    "name": "Надя",
    "weight": 64,
    "age": 19,
    "height": 180,
    "breast": 2,
    "image": "nadya/1.webp",
    "gallery": [
        "nadya/1.webp",
        "nadya/2.webp",
        "nadya/3.webp",
    ],
    "status": false
  },
  {
    "photosClass": "photosClass2",
    "name": "Вика",
    "weight": 50,
    "age": 23,
    "height": 150,
    "breast": 4,
    "image": "vika/1.webp",
    "gallery": [
        "vika/1.webp",
        "vika/2.webp",
        "vika/3.webp",
        "vika/4.webp",
        "vika/5.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass3",
    "name": "Василиса",
    "weight": 53,
    "age": 21,
    "height": 162,
    "breast": 1.5,
    "image": "vasilisa/3.webp",
    "gallery": [
        "vasilisa/1.webp",
        "vasilisa/2.webp",
        "vasilisa/3.webp",
        "vasilisa/4.webp",
        "vasilisa/5.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass4",
    "name": "Лиза",
    "weight": 48,
    "age": 25,
    "height": 158,
    "breast": 3,
    "image": "liza/1.webp",
    "gallery": [
        "liza/1.webp",
        "liza/2.webp",
        "liza/1.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass5",
    "name": "Дия",
    "weight": 50,
    "age": 23,
    "height": 158,
    "breast": 2,
    "image": "dia/1.webp",
    "gallery": [
        "dia/1.webp",
        "dia/2.webp",
        "dia/3.webp",
        "dia/4.webp",
        "dia/5.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass6",
    "name": "Алина",
    "weight": 55,
    "age": 29,
    "height": 175,
    "breast": 2.5,
    "image": "alina/3.webp",
    "gallery": [
        "alina/1.webp",
        "alina/2.webp",
        "alina/3.webp",
        "alina/4.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass7",
    "name": "Ясмина",
    "weight": 57,
    "age": 20,
    "height": 156,
    "breast": 3,
    "image": "yasmina/1.webp",
    "gallery": [
        "yasmina/1.webp",
        "yasmina/2.webp",
        "yasmina/3.webp",
        "yasmina/4.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass8",
    "name": "Настя",
    "weight": 59,
    "age": 21,
    "height": 169,
    "breast": 2,
    "image": "nastya/1.webp",
    "gallery": [
        "nastya/1.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass9",
    "name": "Ника",
    "weight": 50,
    "age": 27,
    "height": 164,
    "breast": 2.5,
    "image": "nika/1.webp",
    "gallery": [
        "nika/1.webp",
        "nika/2.webp",
        "nika/1.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass10",
    "name": "Моника",
    "weight": 57,
    "age": 22,
    "height": 170,
    "breast": 1,
    "image": "monika/1.webp",
    "gallery": [
        "monika/1.webp",
        "monika/2.webp",
        "monika/3.webp",
        "monika/4.webp",
        "monika/5.webp",
    ],
    "status": true
  },
  {
    "photosClass": "photosClass11",
    "name": "Текила",
    "weight": 63,
    "age": 27,
    "height": 168,
    "breast": 2.5,
    "image": "tekila/1.webp",
    "gallery": [
        "tekila/1.webp",
        "tekila/2.webp",
        "tekila/3.webp",
    ],
    "status": true
  }
];

const modalWindow = ref()

const openModal = () => {
  modalWindow.value.openModal()
}

applySliderLogicToModels(models);
</script>

<template>
    <Modal ref="modalWindow"></Modal>
    <div class="modelList">
        <div class="model-container" v-for="(model, index) in models" :key="index">
            <div :class="['photos-container', model.photosClass]">
                <button class="slider-button slider-prev"><div class="arrow left"></div></button>
                <div class="slider">
                    <div class="slider-line">
                        <img 
                            class="slide-content fullscreenable" 
                            @click="openFullscreen(`assets/models/${photo}`)" 
                            v-for="(photo, photoIndex) in model.gallery" 
                            :src="`assets/models/${photo}`" 
                            :alt="'Photo ' + photoIndex"
                        >
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
                    Грудь: <span>{{ model.breast }}</span>
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

img.slide-content {
  width: 100%; /* Занимает всю ширину контейнера */
  height: auto; /* Высота автоматически подстраивается, сохраняя пропорции изображения */
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