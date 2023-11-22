<script setup>
import { ref, reactive } from 'vue';


</script>

<template>
  <div class="container">
    <div class="container-background">
      <img src="../assets/logo.png" alt="body_image" class="container-background-logo">
      <form action="https://apple.com" target="_blank"><button class="container-background-button">Записаться</button></form>
    </div>
    <p class="container-title">Наши <span class="container-orange-title">Преимущества</span></p>
    <p class="container-title">Текущие <span class="container-orange-title">Акции</span></p>
    <p class="container-title">Модели <span class="container-orange-title">Студии</span></p>
    <p class="container-title">Популярные <span class="container-orange-title">Программы</span></p>
    <p class="container-title">Отзывы <span class="container-orange-title">Гостей</span></p>

    <section class="map">
        <div class="map_wrap">
            <div class="header_up_wrapp">
                <p class="container-title">Наши <span class="container-orange-title">Координаты</span></p>
            </div>
            <div style="position:relative;overflow:hidden;margin-bottom: 50px;">
                <a href="https://yandex.ru/maps/11184/nefteugansk/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:0px;">Нефтеюганск</a>
                <a href="https://yandex.ru/maps/11184/nefteugansk/house/14_y_mikrorayon_40/Y0sYcAViTkYBQFhrfXx2c3piYA==/?ll=72.622770%2C61.072573&utm_medium=mapframe&utm_source=maps&z=18"
                    style="color:#eee;font-size:12px;position:absolute;top:14px;">14-й микрорайон, 40 на карте
                    Нефтеюганска — Яндекс Карты</a>
                <iframe
                    src="https://yandex.ru/map-widget/v1/?ll=72.622770%2C61.072573&mode=whatshere&whatshere%5Bpoint%5D=72.622736%2C61.072614&whatshere%5Bzoom%5D=17&z=18"
                    width="100%" height="500" frameborder="1" allowfullscreen="true"
                    style="position:relative;"></iframe>
            </div>
        </div>
    </section>
  </div>
  
</template>

<style scoped>
progress {
  width: 70vw;
  max-width: 350px;
}

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

.container-orange-title {
  color: #ff320d;
}

.container-background {
  background: url("../assets/body-background.png") no-repeat center center;
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
  color: white;
  padding: 10px 20px 10px 20px;
  background-color: #ff320d;
  font-size: calc(.5em + 1vw);
  margin-top: calc(2em + 1vw);
  max-width: fit-content;
  border: none;
  border-radius: 10px;
}

.container-background-button:hover {
  background-color: rgb(168, 34, 11);
}

.count-text {
  margin-bottom: 10px;
  font-size: calc(.7em + 1.3vw);
}

.count-value {
  color: gold;
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
</style>