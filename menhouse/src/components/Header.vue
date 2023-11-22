<script setup>
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Добавляет плавную анимацию прокрутки
  });
  
};
</script>

<template>
    <header>
        <div class="header-top">
            <span @click="scrollToTop" class="header-text">
              ДЛЯ <span class="header-text-orange">НАСТОЯЩИХ</span> МУЖЧИН
            </span>
        </div>
    </header>
</template>

<style scoped>

.header-top {
  display: flex;
  justify-content: center;
  text-align: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  padding: 10px;
  background: #0f0f0f;
  color: white;
  z-index: 1000;
  border-bottom: 1px solid #474747;
}

.header-text {
  font-size: calc(.5em + 1.5vw);
  font-weight: 700;
  cursor: pointer;
}

.header-text-orange {
    color: #ff320d;
    /* Дополнительные стили для оранжевого слова, если необходимо */
}

</style>
