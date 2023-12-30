<script setup>
import { ref } from 'vue';
import Modal from "./Modal.vue"

const models = [
  {
    "photosClass": "photosClass1",
    "name": "Надя",
    "weight": 64,
    "age": 19,
    "height": 180,
    "breast": 2,
    "image": "src/assets/models/nadya/2.webp",
    "gallery": [
        "src/assets/models/nadya/1.webp",
        "src/assets/models/nadya/2.webp",
        "src/assets/models/nadya/3.webp",
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
    "image": "src/assets/models/vika/2.webp",
    "gallery": [
        "src/assets/models/vika/1.webp",
        "src/assets/models/vika/2.webp",
        "src/assets/models/vika/3.webp",
        "src/assets/models/vika/4.webp",
        "src/assets/models/vika/5.webp",
    ],
    "status": true
  },{
    "photosClass": "photosClass6",
    "name": "Алина",
    "weight": 55,
    "age": 29,
    "height": 175,
    "breast": 2.5,
    "image": "src/assets/models/alina/1.webp",
    "gallery": [
        "src/assets/models/alina/1.webp",
        "src/assets/models/alina/2.webp",
        "src/assets/models/alina/3.webp",
        "src/assets/models/alina/4.webp",
    ],
    "status": true
  },
];

const isModalOpen = ref(false);
const choosenModel = ref(0);
const selectedImageSrc = ref(0);

const showModal = (number) => {
  choosenModel.value = number
  isModalOpen.value = true
  selectedImageSrc.value = models[choosenModel.value].gallery[0]
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
    <Modal
      :isModalOpen="isModalOpen"
      :choosenModel="choosenModel"
      :selectedImageSrc="selectedImageSrc"
      @closeModal="isModalOpen = false"
      @updateSelectedImage="selectedImageSrc = $event"
    />
    <button @click="$router.push('/menhouse-app/models')" class="container-background-button">Смотреть больше</button>
</template>

<style scoped>
.our.models {
  flex-direction: row;
}

.model-card {
  width: max-content;
  height: auto;
  position: relative;
  cursor: pointer;
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
  border-radius: 20px;
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