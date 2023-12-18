<script setup>
import { inject } from 'vue';

const models = [
  {
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
    ]
  },
  {
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
    ]
  },
  {
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
    ]
  }
];

const isModalOpen = inject('isModalOpen');
const choosenModel = inject('choosenModel')
const selectedImageSrc = inject('selectedImageSrc');

const closeModal = () => {
    isModalOpen.value = false;
};

const changeImage = (newImage) => {
    selectedImageSrc.value = newImage;
};
</script>

<template>

<div v-if="isModalOpen" class="modalBackground">
    <div class="modal">
        <div class="parent">
            <div class="div1">
                <img :src="selectedImageSrc"/>
            </div>
            <div class="div2" @click="changeImage(models[choosenModel].gallery[0])">
                <img :src="models[choosenModel].gallery[0]"/>
            </div>
            <div class="div3" @click="changeImage(models[choosenModel].gallery[1])">
                <img :src="models[choosenModel].gallery[1]"/>
            </div>
            <div class="div4" @click="changeImage(models[choosenModel].gallery[2])">
                <img :src="models[choosenModel].gallery[2]"/>
            </div>
            <div class="div5" @click="changeImage(models[choosenModel].gallery[3])">
                <img :src="models[choosenModel].gallery[3]"/>
            </div>
            <div class="div6" @click="changeImage(models[choosenModel].gallery[4])">
                <img :src="models[choosenModel].gallery[4]"/>
            </div>
        </div>
        <div class="description">
            <p class="info">
                <span>{{ models[choosenModel].name }}</span><br>
                Вес: <span>{{ models[choosenModel].weight }}</span><br>
                Возраст: <span>{{ models[choosenModel].age }}</span><br>
                Рост: <span>{{ models[choosenModel].height }}</span><br>
                Грудь: <span>{{ models[choosenModel].breast }}</span>
                <div class="status">Сегодня отсутствует</div>
            </p>
            <button class="sign-up">ЗАПИСАТЬСЯ</button>
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
    cursor: pointer;
    /* указываем z-индекс для корректного наслаивания */
    z-index: 1001;
}

.modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #222222;
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
}

.div2 img, .div3 img, .div4 img, .div5 img, .div6 img{
    width: 90%;
}

.description {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
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