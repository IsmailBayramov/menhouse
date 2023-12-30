<script setup>
import { VueFlip } from 'vue-flip';
import { ref } from 'vue';

const cards = ref([
  {
    number: 10,
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/1.jpg",
    title: "РАЗ, РАЗ И ГОТОВО",
    body: "• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОМЯЛИ СПИНКУ 🙌<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ ☕️",
    price: "60 МИН 4 900 ₽ 🍌<br>90 МИН 6 900 ₽ 🍌🍌"
  },{
    number: "В",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/spades.png",
    status: "",
    photo: "src/assets/programms/card-photos/2.png",
    title: "ТРОГАТЕЛЬНАЯ ИСТОРИЯ",
    body: "• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ТРОГАТЕЛЬНАЯ ИСТОРИЯ 👙<br>• ПОМЯЛИ СПИНКУ 🙌<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ☕️",
    price: "60 МИН 6 900 ₽ 🍌<br>90 МИН 9 900 ₽ 🍌🍌"
  },{
    number: "Д",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/clubs.png",
    status: "",
    photo: "src/assets/programms/card-photos/3.jpg",
    title: "ПОГОНЯТЬ ШАРЫ",
    body: "• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОМЯЛИ СПИНКУ 🙌<br>• ТРОГАТЕЛЬНАЯ ИСТОРИЯ 👙<br>• ПОГОНЯЛИ ШАРЫ 🎱🎱<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ☕️",
    price: "60 МИН 9 900 ₽ 🍌<br>90 МИН 11 900 ₽ 🍌🍌"
  },{
    number: "К",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/diamonds.png",
    status: "",
    photo: "src/assets/programms/card-photos/4.jpg",
    title: "ПОИГРАТЬ С КИСКОЙ",
    body: "• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОМЯЛИ СПИНКУ 🙌<br>• ТРОГАТЕЛЬНАЯ ИСТОРИЯ 👙<br>• ПОИГРАЛИ С КИСКОЙ 😹<br>• ПОГОНЯЛИ ШАРЫ 🎱🎱<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ☕️",
    price: "60 МИН 9 900 ₽ 🍌<br>90 МИН 11 900 ₽ 🍌🍌"
  },{
    number: "Т",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/5.jpg",
    title: "РАЗВОД ПО ПОЛНОЙ",
    body: "• ИГРА НАЧАЛАСЬ 💃💋<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОМЯЛИ СПИНКУ 🙌<br>• ТРОГАТЕЛЬНАЯ ИСТОРИЯ 👙<br>• ПОИГРАЛИ С КИСКОЙ 😹<br>• ПОГОНЯЛИ ШАРЫ 🎱🎱<br>• СТОЙ, ТОЛЬКО НЕ ТУДА 🎯<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁",
    price: "60 МИН 15 900 ₽ 🍌<br>90 МИН 19 900 ₽ 🍌🍌"
  },{
    number: "J",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/nothing.png",
    status: "",
    photo: "src/assets/programms/card-photos/6.jpg",
    title: "СТОП СЛОВО",
    body: "• ИГРА НАЧАЛАСЬ 💃💋<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• УСТРОИЛИ ВАКХАНАЛИЮ<br• ПОМЯЛИ СПИНКУ 🙌<br>• ТРОГАТЕЛЬНАЯ ИСТОРИЯ 👙<br>• ПОИГРАЛИ С КИСКОЙ 😹<br>• ПОГОНЯЛИ ШАРЫ 🎱🎱<br>• СТОЙ, ТОЛЬКО НЕ ТУДА 🎯<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ☕️",
    price: "60 МИН 25 000 ₽ 🍌"
  },{
    number: "J",
    isRed: true,
    suitImage: "src/assets/programms/card-suits/nothing.png",
    status: "",
    photo: "src/assets/programms/card-photos/7.jpg",
    title: "СТОЙ, ТОЛЬКО НЕ ТУДА!",
    body: "• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОМЯЛИ СПИНКУ 🙌<br>• ТРОГАТЕЛЬНАЯ ИСТОРИЯ 👙<br>• ПОГОНЯЛИ ШАРЫ 🎱🎱<br>• СТОЙ, ТОЛЬКО НЕ ТУДА 🎯<br>• РАЗ, РАЗ И ГОТОВО 😘<br>• ПОМЫЛИСЬ В ДУШИКЕ 🛁<br>• ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ☕️",
    price: "60 МИН 11 900 ₽ 🍌<br>90 МИН 13 900 ₽ 🍌🍌"
  },{
    number: "М",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/8.jpg",
    title: "МЕДСЕСТРА",
    body: "При загадочных обстоятельствах Вы впали в кому. Но сексуальные медсестричка и врач выяснят причину и очень быстро приведут вас в чувство, ведь перед такой медициной никто не сможет устоять.",
    price: "90 МИН 14 900 ₽ 🍌<br>120 МИН 19 900 ₽ 🍌🍌"
  },{
    number: "С",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/9.jpg",
    title: "СЕКРЕТАРША",
    body: "Офисная тема - богатая почва для сексуальных фантазий, особенно если в твоём офисе ничего подобного не происходит. Подобный сценарий можно считать классикой жанра и мы можем предложить несколько вариантов развития событий.",
    price: "90 МИН 14 900 ₽ 🍌<br>120 МИН 19 900 ₽ 🍌🍌"
  },{
    number: "У",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/10.jpg",
    title: "УЧИТЕЛЬНИЦА",
    body: "Школьные годы чудесные. Наверняка у многих мальчишек была тайная фантазия отдаться в руки своей первой сексуальной учительнице или может быть побыть директором? А может вас вообще вызвали в школу?",
    price: "90 МИН 14 900 ₽ 🍌<br>120 МИН 19 900 ₽ 🍌🍌"
  },{
    number: "Г",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/11.jpg",
    title: "ГОРНИЧНАЯ",
    body: "Представьте, вы хозяин шикарного особняка в котором работает шикарная домработница. Сексуальная и немного рассеянная девушка. Всем своим видом даёт понять насколько эротические фантазии сидят в ее голове....",
    price: "90 МИН 14 900 ₽ 🍌<br>120 МИН 19 900 ₽ 🍌🍌"
  },{
    number: "Б",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/12.jpg",
    title: "БИБЛИОТЕКАРША",
    body: "Блуждая среди пыльных книг, одинокая библиотекарша мечтает, чтобы приятный в общении читатель также взял ее и вернул полностью потрепанной...",
    price: "90 МИН 14 900 ₽ 🍌<br>120 МИН 19 900 ₽ 🍌🍌"
  },{
    number: "Ш",
    isRed: false,
    suitImage: "src/assets/programms/card-suits/heart.png",
    status: "",
    photo: "src/assets/programms/card-photos/13.jpg",
    title: "ШКОЛЬНИЦА",
    body: "Во время контрольной ты решил списать у своей одноклассницы, однако шпаргалка оказалась спрятана у неё под юбкой.",
    price: "90 МИН 14 900 ₽ 🍌<br>120 МИН 19 900 ₽ 🍌🍌"
  },
]);
</script>

<template>
    <div class="card-container">
    <vue-flip v-for="(card, index) in cards" :key="index" class="card" active-hover="">
      <template v-slot:front class="front">
        <!-- Front side content -->
        <div class="card-info">
          <p class="number" :class="{ red: card.isRed }">{{ card.number }}</p>
          <div class="card-suit">
            <img :src="card.suitImage" alt="">
          </div>
        </div>
        <div class="status" v-if="card.status">{{ card.status }}</div>
        <div class="card-photo">
          <img :src="card.photo" alt="">
          <p>НАЖМИ</p>
        </div>
        <div class="card-info">
          <p class="number" :class="{ red: card.isRed }">{{ card.number }}</p>
          <div class="card-suit last">
            <img :src="card.suitImage" alt="">
          </div>
        </div>
      </template>
      <template v-slot:back class="back">
        <!-- Back side content -->
        <div class="title">
          <p>{{ card.title }}</p>
          <hr>
        </div>
        <div class="body">
          <p v-html="card.body"></p>
        </div>
        <div class="price">
          <hr>
          <p v-html="card.price"></p>
        </div>
      </template>
    </vue-flip>
        
    </div>
</template>

<style scoped>
.card-container {
  margin-bottom: 5em;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-column-gap: 2em;
  grid-row-gap: 2.5em;
}

:deep(.front), :deep(.back) {
  font-family: "Bahnscrift", sans-serif;
  background-color: white;
  color: black;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 2em;
  overflow: hidden;
}

.card {
  width: 250px;
  height: 360px;
}

.card-photo {
  position: relative;
}

.card-photo img {
  width: 100%;
  max-width: 50vw;
  border-radius: 25px;
}

.card-photo p {
  position: absolute;
  right: 50%;
  top: 50%;
  transform: translate(50%, -50%);
  margin: 0;
  padding: 8px 20px;
  border-radius: 10px;
  font-size: .9em;
  font-weight: 500;
  color: white;
  background-color: #ff320d;
}

.card-info {
  position: relative;
  z-index: 1;
}

.card-info:first-child {
  top: -35%;
  left: 6%;
}

.card-info:last-child {
  top: 35%;
  left: -6%;
  transform: rotate(180deg);
}

.number {
  font-weight: 800;
  font-size: 2.8em;
  color: black;
  margin: 0;
}

.number.red {
  color: #ff320d;
}

.status {
  font-weight: 800;
  font-size: 1.2em;
  padding: 5px;
  transform: rotate(45deg);
  position: absolute;
  right: -39%;
  top: 5%;
  z-index: 0;
  width: 100%;
  background-color: #951cff;
  color: white;
  display: none;
}

.status.sale {
  display: block;
}

.status.top {
  display: block;
  background-color: #ff320d;
}

:deep(.back) {
  font-family: 'Roboto Condensed', sans-serif;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.title, .body, .price {
  font-weight: 900;
}

.title {
  color: #ff320d;
  margin-top: .5em;
  font-size: min(20px, calc(1em + 1vw));
}

.body {
  text-align: left;
  line-height: 150%;
  max-width: 70%;
  font-size: min(12px, calc(.5em + .7vw));
}

.price {
  font-size: min(17px, calc(.8em + .5vw));
}

hr {
  border: none;
  height: 1.5px;
  width: 100%;
  margin: 0;
  background-color: black;
}

@media (max-width: 850px) {
  .card-container {
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 1em;
    grid-row-gap: 1.5em;
  }
}

@media (max-width: 550px) {
  :deep(.front), :deep(.back) {
    border-radius: 6vw;
  }

  .card {
    width: 45vw;
    height: 68vw;
  }

  .status {
    font-size: 3.2vw;
  }

  .card-info p {
    font-size: 8.8vw;
  }

  .card-info img {
    width: 100%;
  }

  .card-photo img {
    border-radius: 20px;
    max-width: 40vw;
  }

  .title, .body, .price {
    margin-right: 3vw;
    margin-left: 3vw;
  }

  .title {
    font-size: calc(.2em + 3vw);
  }

  .body {
    font-size: min(12px, calc(.1em + 2vw));
  }

  .price {
    font-size: min(calc(.1em + 2.5vw));
  }
}
</style>