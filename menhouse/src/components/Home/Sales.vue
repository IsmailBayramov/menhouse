<script setup> 
import { defineEmits } from 'vue';

const emit = defineEmits();

const openModal = () => {
  emit('openModal');
};

const sales = ["1.webp", "2.jpg", "3.jpg", "4.jpg",]

</script>

<template>
    <p class="container-title">Текущие <span class="container-orange-title">Акции</span></p>
    <div class="our sales">
      <button class="slider-button slider-prev"><div class="arrow left"></div></button>
      <div class="slider">
        <div class="slider-line">
          <img class="slide-content" v-for="(image, index) in sales" :key="index" :src="`assets/sales/${image}`" alt="">
        </div>
      </div>
      <button class="slider-button slider-next"><div class="arrow right"></div></button>
    </div>
    <button @click="openModal" class="container-background-button">Записаться</button>
</template>

<style scoped>
img.slide-content {
  object-fit: contain; 
}
</style>