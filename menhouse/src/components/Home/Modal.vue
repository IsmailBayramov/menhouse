<script setup>
import { defineProps, defineEmits } from 'vue';

const models = [
  {
    "photosClass": "photosClass1",
    "name": "Надя",
    "weight": 64,
    "age": 19,
    "height": 180,
    "breast": 2,
    "image": "nadya/2.webp",
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
    "image": "vika/2.webp",
    "gallery": [
        "vika/1.webp",
        "vika/2.webp",
        "vika/3.webp",
        "vika/4.webp",
        "vika/5.webp",
    ],
    "status": true
  },{
    "photosClass": "photosClass6",
    "name": "Алина",
    "weight": 55,
    "age": 29,
    "height": 175,
    "breast": 2.5,
    "image": "alina/1.webp",
    "gallery": [
        "alina/1.webp",
        "alina/2.webp",
        "alina/3.webp",
        "alina/4.webp",
    ],
    "status": true
  },
];

const { isModalOpen, choosenModel, selectedImageSrc } = defineProps(['isModalOpen', 'choosenModel', 'selectedImageSrc']);
const emit = defineEmits();

const closeModal = () => {
    emit('closeModal');
}

const changeImage = (newImage) => {
    emit('updateSelectedImage', newImage);
};
</script>

<template>

<div v-if="isModalOpen" class="modalBackground">
    <div class="modal">
        <div class="parent">
            <div class="div1">
                <img :src="`assets/models/${selectedImageSrc}`" />
            </div>
            <div v-for="(image, index) in models[choosenModel].gallery" :key="index" :class="'div' + (index + 2)" @click="changeImage(image)">
                <img
                    :src="`assets/models/${image}`"
                    :class="{ selected: selectedImageSrc === image }"
                />
            </div>
        </div>
        <div class="description">
            <p class="info">
                <span>{{ models[choosenModel].name }}</span><br>
                Вес: <span>{{ models[choosenModel].weight }}</span><br>
                Возраст: <span>{{ models[choosenModel].age }}</span><br>
                Рост: <span>{{ models[choosenModel].height }}</span><br>
                Грудь: <span>{{ models[choosenModel].breast }}</span>
                <div class="status" :class="{ active: models[choosenModel].status }">
                    {{ models[choosenModel].status ? 'Свободна для записи' : 'Сегодня отсутствует' }}
                </div>
            </p>
            <button class="sign-up" :class="{ active: models[choosenModel].status }">ЗАПИСАТЬСЯ</button>
            <div @click="closeModal" class="close"></div>
        </div>
    </div>
</div>

</template>

<style scoped>
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
    background-color: #202020;
    border: 3px solid #3d3d3d;
    border-radius: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    z-index: 1002;
    display: flex;
    flex-direction: row;
    align-items: center;
}

.parent {
    display: grid;
    margin-right: 1em;
    height: 100%;
    min-width: 200px;
    max-width: 250px;
}

.div1 { grid-area: 1 / 1 / 2 / 6; }
.div2 { grid-area: 2 / 1 / 3 / 2; }
.div3 { grid-area: 2 / 2 / 3 / 3; }
.div4 { grid-area: 2 / 3 / 3 / 4; }
.div5 { grid-area: 2 / 4 / 3 / 5; }
.div6 { grid-area: 2 / 5 / 3 / 6; }

.div1 img {
    width: 100%;
    border-radius: 15px;
}

.div2, .div3, .div4, .div5, .div6 {
    cursor: pointer;
}

.div2 img, .div3 img, .div4 img, .div5 img, .div6 img {
    width: 90%;
    border-radius: 5px;
}

.selected {
    border: 1px solid white;
}

.description {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}

.info {
    text-align: left;
    padding: 10px;
    font-size: calc(.6em + .6vw);
    line-height: calc(1.2em + 1vw);
    width: max-content;
}

.info span {
    font-weight: 100;
}

.status {
    margin-top: 1em;
    color: #ffd800;
    text-align: left;
    font-weight: 700;
    font-size: calc(.7em + .7vw);
}

.status.active {
    color: white;
}

.modal p span:first-child {
    font-weight: 800;
    font-size: calc(2em + 1vw);
}

.sign-up {
    font-size: calc(.5em + .8vw);
    font-weight: 800;
    padding: 10px 0;
    background: none;
    border-color: #666666;
    border-radius: 15px;
    border-style: solid;
    color: #666666;
    cursor: pointer;
    font-family: 'SF Pro Display', sans-serif;
}

.sign-up.active {
    color: #ff0000;
    border-color: #ff0000;
}

.close {
    width: 25px;
    height: 25px;
    position: relative;
    z-index: 1;
    margin: 20px auto;
    cursor: pointer;
}

.close {
  width: 25px;
  height: 25px;
  position: absolute;
  top: 10px;
  right: 10px; /* Расположение в правом верхнем углу */
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

@media (max-width: 650px) {
    .modal {
        flex-direction: column;
        align-items: unset;
        margin-right: 0;
    }

    .parent {
        margin-right: 0;
    }

    .div1 img {
        width: 90%;
    }

    .div2 img, .div3 img, .div4 img, 
    .div5 img, .div6 img {
        width: 85%;
    }

    .description {
        height: none;
    }

    .close {
        top: -12px;
        right: -5px;
    }
}
</style>