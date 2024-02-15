<script setup> 

const apartments = [
  "1.webp", "2.webp", "3.webp", "4.webp",
  "5.webp", "6.webp", "7.webp", "8.webp",
  "9.webp", "10.webp", "11.webp", "12.webp",
  "13.webp", "14.webp",
]

</script>

<template>
    <p class="container-title">Обзор <span class="container-orange-title">Апартаментов</span></p>
    <div class="our apartments">
      <button class="slider-button slider-prev"><div class="arrow left"></div></button>
      <div class="slider">
        <div class="slider-line">
          <img class="slide-content" v-for="(image, index) in apartments" :key="index" :src="`assets/apartments/${image}`" alt="">
        </div>
      </div>
      <button class="slider-button slider-next"><div class="arrow right"></div></button>
    </div>
</template>