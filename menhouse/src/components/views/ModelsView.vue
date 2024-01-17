<script setup>
import BorderButtons from '../General/BorderButtons.vue'
import Description from '../Models/Description.vue';
import Buttons from '../Models/Buttons.vue';
import ModelList from '../Models/ModelList.vue';
</script>

<template>
    <div class="container">
        <p class="container-title">Модели <span class="orange">Студии</span></p>
        <Description></Description>
        <Buttons></Buttons>
        <ModelList></ModelList>
    </div>    
    <BorderButtons></BorderButtons>
</template>

<style>
.container {
  padding-top: 50px;
  text-align: center;
  display: flex;
  color: white;
  flex-direction: column;
}

.container-title {
  padding: 2em 0 0 0;
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