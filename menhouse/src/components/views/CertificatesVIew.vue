<script setup>
import Description from "../Certificates/Description.vue"
import Ordering from "../Certificates/Ordering.vue"
</script>

<template>
    <div class="container">
        <p class="container-title">Подарочные <span class="orange">Сертификаты</span></p>
        <Description></Description>
        <Ordering></Ordering>
    </div>    
</template>

<style scoped>
.container {
  padding-top: 50px;
  text-align: center;
  display: flex;
  color: white;
  flex-direction: column;
}

.container-title {
  padding: 2em .5em 0 .5em;;
  font-weight: 500;
  font-size: calc(.5em + 2vw);
}

.orange {
  color: #ff320d;
}

@media (max-width: 550px) {
    .container-title {
        font-size: calc(1em + 2vw);
        padding: 1em .5em 0 .5em;
    }
}
</style>