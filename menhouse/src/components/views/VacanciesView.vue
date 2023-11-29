<script setup>
import Background from '../Vacancies/Background.vue';
import Salaries from '../Vacancies/Salaries.vue';
import FreeVacancies from '../Vacancies/FreeVacancies.vue';
</script>

<template>
  <div class="container">
    <Background></Background>
    <Salaries></Salaries>
    <FreeVacancies></FreeVacancies>
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
  padding: 1em 0 0 0;
  font-weight: 500;
  /* font-size: calc(.8em + 1.7vw); */
  font-size: calc(.5em + 2vw);
}

.container-background {
  background: url("../../assets/body-background.png") no-repeat center center;
  background-size: cover; /* или background-size: 100% 100%; */
  background-repeat: repeat; /* Или background-repeat: no-repeat; если не хотите замощения */
  position: relative;
  height: calc(10em + 25vw); /* Задайте высоту в соответствии с вашими требованиями */
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.container-background-logo {
  max-width: calc(5em + 22vw); /* Адаптивная ширина */
  object-fit: contain;
  height: auto; /* Сохранение пропорций */
}

.container-background-button {
  cursor: pointer;
  color: white;
  padding: 10px 20px 10px 20px;
  background-color: #ff320d;
  font-size: calc(.5em + 1vw);
  margin-top: calc(2em + 1vw);
  max-width: fit-content;
  border: none;
  border-radius: 10px;
}

.container-background-button.advantage {
  margin-top: calc(.5em + .5vw);
}

.container-background-button:hover {
  background-color: rgb(168, 34, 11);
}

.container-button {
  font-size: calc(1em + .5vw);
  background-color: rgb(224, 224, 224);
  border-radius: 0.5em;
  border: 0;
  margin: 0px 5px 0px 5px;
  cursor: pointer;
  width: 30vw;
  height: 30vw;
  max-width: 50px;
  max-height: 50px;
}

.container-button:hover {
  background-color: rgb(202, 202, 202);
}

.our.sales, .our.apartments, .our.models, .our.review {
  display: flex;
  justify-content: center;
  align-items: center;
}

@media (max-width: 550px) {
  .container-title {
    font-size: calc(1em + 2vw);
  }

  .container-background-button {
    font-size: calc(.7em + 1vw);
  }
}
</style>