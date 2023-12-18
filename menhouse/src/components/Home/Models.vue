<script setup>
import { ref, provide } from 'vue';
import Modal from "./Modal.vue"

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

const isModalOpen = ref(false);
const choosenModel = ref(0);
const selectedImageSrc = ref(0);

provide('isModalOpen', isModalOpen);
provide('choosenModel', choosenModel);
provide('selectedImageSrc', selectedImageSrc);

const showModal = (number) => {
  choosenModel.value = number
  isModalOpen.value = true
  selectedImageSrc.value = models[choosenModel.value].gallery[1]
}

</script>

<template>
    <p class="container-title">Модели <span class="container-orange-title">Студии</span></p>
    <div class="our models">
      <div v-for="(model, index) in models" :key="index" class="model-card" @click="showModal(index)">
        <img :src="model.image" alt="model"/>
        <p>
          Имя: <span>{{ model.name }}</span><br>
          Вес: <span>{{ model.weight }}</span><br>
          Возраст: <span>{{ model.age }}</span><br>
          Рост: <span>{{ model.height }}</span><br>
          Грудь: <span>{{ model.breast }}</span>
        </p>
      </div>
    </div>
    <Modal></Modal>
    <button to="/menhouse-app/models" class="container-background-button">Смотреть больше</button>
</template>

<style scoped>
.container-background-button {
  margin-right: auto;
  margin-left: auto;
}
.our.models {
  flex-direction: row;
}

.model-card {
  width: max-content;
  height: auto;
  position: relative;
  margin-right: calc(1em + 5vw);
  color: white;
  border-radius: 20px 20px 10px 10px;
  box-shadow: inset -5px 40px 36px -19px red;
}

.model-card:last-child {
  margin-right: 0;
}

.model-card:first-child, .model-card:last-child {
  top: 15px; /* Положение первого блока снизу от среднего */
}


.model-card img {
  width: calc(3em + 10vw);
  height: auto;
}

.model-card p {
  text-align: left;
  padding: 10px;
  font-size: calc(.4em + .6vw);
  line-height: calc(1em + 1vw);
  width: max-content;
}

.model-card p span {
  font-weight: 100;
}

@media (max-width: 550px) {
  .our.models {
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .model-card {
    margin-right: 0;
    margin-top: 15px;
  }

  .model-card img {
    width: calc(5em + 15vw);
  }

  .model-card p {
    font-size: calc(.5em + 1.5vw);
  }
}

@media (max-width: 435px) {
  .model-card:first-child, .model-card:last-child {
    top: 0;
  }
}
</style>