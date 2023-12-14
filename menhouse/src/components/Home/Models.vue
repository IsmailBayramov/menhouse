<script setup>
import { scrollToTop } from "../../scrollLogic.js"

</script>

<template>
    <p class="container-title">Модели <span class="container-orange-title">Студии</span></p>
    <div class="our models">
      <RouterLink class="model-card" to="/menhouse-app/models" @click="scrollToTop">
        <img src="../../assets/models/1.png" alt="model"/>
        <p>
          Имя: <span>Вика</span><br>
          Вес: <span>50</span><br>
          Возраст: <span>20</span><br>
          Рост: <span>150</span><br>
          Грудь: <span>4</span>
        </p>
      </RouterLink>
      <RouterLink class="model-card" to="/menhouse-app/models" @click="scrollToTop">
        <img src="../../assets/models/2.png" alt="model"/>
        <p>
          Имя: <span>Илона</span><br>
          Вес: <span>45</span><br>
          Возраст: <span>22</span><br>
          Рост: <span>160</span><br>
          Грудь: <span>1.5</span>
        </p>
      </RouterLink>
      <RouterLink class="model-card" to="/menhouse-app/models" @click="scrollToTop">
        <img src="../../assets/models/3.png" alt="model"/>
        <p>
          Имя: <span>Аиша</span><br>
          Вес: <span>50</span><br>
          Возраст: <span>23</span><br>
          Рост: <span>162</span><br>
          Грудь: <span>1.5</span>
        </p>
      </RouterLink>
    </div>
    <form action="https://apple.com" target="_blank">
      <button class="container-background-button">Смотреть больше</button>
    </form>
</template>

<style scoped>
.our.models {
  flex-direction: row;
}

.model-card {
  width: max-content;
  height: auto;
  position: relative;
  margin-right: calc(1em + 5vw);
  color: white;
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
  position: absolute;
  font-size: calc(.4em + .6vw);
  line-height: calc(1em + 1vw);
  width: max-content;
  top: 50%;
  left: 10%;
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