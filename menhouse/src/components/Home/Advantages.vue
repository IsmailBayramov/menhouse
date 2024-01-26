<script setup>
import { defineEmits } from 'vue';

const emit = defineEmits();

const openModal = () => {
  emit('openModal');
};
</script>

<template>
    <p class="container-title">Наши <span class="container-orange-title">Преимущества</span></p>
    <div class="our advantages">
      <div class="advantage-item">
        <img src="@/assets/icons/1.png" class="our-advantages-img" alt="24/7">
        <p class="our-advantages-img-caption">24/7</p>
      </div>

      <div class="advantage-item">
        <img src="@/assets/icons/2.png" class="our-advantages-img" alt="security">
        <p class="our-advantages-img-caption">Полная секретность</p>
      </div>

      <div class="advantage-item">
        <img src="@/assets/icons/3.png" class="our-advantages-img" alt="heart">
        <p class="our-advantages-img-caption">Теплый прием</p>
      </div>

      <div class="advantage-item">
        <img src="@/assets/icons/4.png" class="our-advantages-img" alt="pay">
        <p class="our-advantages-img-caption">Оплата по&nbsp;безналу</p>
      </div>

      <div class="advantage-item">
        <img src="@/assets/icons/5.png" class="our-advantages-img" alt="design">
        <p class="our-advantages-img-caption">Современный дизайн</p>
      </div>

      <div class="advantage-item">
        <img src="@/assets/icons/6.png" class="our-advantages-img" alt="programms">
        <p class="our-advantages-img-caption">Большой выбор программ</p>
      </div>
    </div>
    <button @click="openModal" class="container-background-button advantage">Записаться</button>
</template>

<style scoped>
.our.advantages {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  margin-top: 10px; /* или любой другой отступ, который вам нужен */
}

.advantage-item {
  text-align: center;
  margin-right: calc(.5em + 3.5vw);
  transition: opacity 0.6s ease-in-out;
}

.advantage-item-hidden {
  opacity: 0;
}

.advantage-item:last-child {
  margin-right: 0;
}

.our-advantages-img {
  width: calc(2em + 4vw);
  height: auto;
}

.our-advantages-img-caption {
  text-align: center;
  font-size: calc(.3em + .8vw);
  max-width: 6em;
  margin-top: 10px; /* или любой другой отступ, который вам нужен */
}

@media (max-width: 550px) {
  .our.advantages {
    /* flex-direction: column;
    align-items: center; */
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .our-advantages-img-caption {
    max-width: none;
    font-size: calc(.5em + .8vw);
  }

  .advantage-item {
    max-width: 30%;
    margin-right: 0;
    margin-bottom: 5vw;
    flex-basis: 33%;
  }
}
</style>