<script setup>
import { VueFlip } from 'vue-flip';

</script>

<template>
    <div class="card-container">
        <vue-flip class="card" active-hover="">
            <template v-slot:front class="front">
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
                <div class="status sale">СКИДКА</div>
                <div class="card-photo">
                    <img src="../../assets/programms/card-photos/1.png" alt="">
                    <p>НАЖМИ</p>
                </div>  
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit last">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
            </template>
            <template v-slot:back class="back">
                <div class="title">
                    <p>РАЗ, РАЗ И ГОТОВО</p>
                    <hr>
                </div>
                <div class="body">
                    <p>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОМЯЛИ СПИНКУ<br>
                        • РАЗ, РАЗ И ГОТОВО<br>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ
                    </p>
                </div>
                <div class="price">
                    <hr>
                    <p>
                        60 МИН 4 500 ₽ 🍌<br>
                        90 МИН 6 350 ₽ 🍌🍌
                    </p>
                </div>
            </template>
        </vue-flip>
        <vue-flip class="card" active-hover="">
            <template v-slot:front class="front">
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
                <div class="status top">ТОП</div>
                <div class="card-photo">
                    <img src="../../assets/programms/card-photos/1.png" alt="">
                    <p>НАЖМИ</p>
                </div>  
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit last">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
            </template>
            <template v-slot:back class="back">
                <div class="title">
                    <p>РАЗ, РАЗ И ГОТОВО</p>
                    <hr>
                </div>
                <div class="body">
                    <p>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОМЯЛИ СПИНКУ<br>
                        • РАЗ, РАЗ И ГОТОВО<br>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ
                    </p>
                </div>
                <div class="price">
                    <hr>
                    <p>
                        60 МИН 4 500 ₽ 🍌<br>
                        90 МИН 6 350 ₽ 🍌🍌
                    </p>
                </div>
            </template>
        </vue-flip>
        <vue-flip class="card" active-hover="">
            <template v-slot:front class="front">
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
                <div class="status"></div>
                <div class="card-photo">
                    <img src="../../assets/programms/card-photos/1.png" alt="">
                    <p>НАЖМИ</p>
                </div>  
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit last">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
            </template>
            <template v-slot:back class="back">
                <div class="title">
                    <p>РАЗ, РАЗ И ГОТОВО</p>
                    <hr>
                </div>
                <div class="body">
                    <p>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОМЯЛИ СПИНКУ<br>
                        • РАЗ, РАЗ И ГОТОВО<br>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ
                    </p>
                </div>
                <div class="price">
                    <hr>
                    <p>
                        60 МИН 4 500 ₽ 🍌<br>
                        90 МИН 6 350 ₽ 🍌🍌
                    </p>
                </div>
            </template>
        </vue-flip>
        <vue-flip class="card" active-hover="">
            <template v-slot:front class="front">
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
                <div class="status"></div>
                <div class="card-photo">
                    <img src="../../assets/programms/card-photos/1.png" alt="">
                    <p>НАЖМИ</p>
                </div>  
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit last">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
            </template>
            <template v-slot:back class="back">
                <div class="title">
                    <p>РАЗ, РАЗ И ГОТОВО</p>
                    <hr>
                </div>
                <div class="body">
                    <p>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОМЯЛИ СПИНКУ<br>
                        • РАЗ, РАЗ И ГОТОВО<br>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ
                    </p>
                </div>
                <div class="price">
                    <hr>
                    <p>
                        60 МИН 4 500 ₽ 🍌<br>
                        90 МИН 6 350 ₽ 🍌🍌
                    </p>
                </div>
            </template>
        </vue-flip>
        <vue-flip class="card" active-hover="">
            <template v-slot:front class="front">
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
                <div class="status"></div>
                <div class="card-photo">
                    <img src="../../assets/programms/card-photos/1.png" alt="">
                    <p>НАЖМИ</p>
                </div>  
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit last">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
            </template>
            <template v-slot:back class="back">
                <div class="title">
                    <p>РАЗ, РАЗ И ГОТОВО</p>
                    <hr>
                </div>
                <div class="body">
                    <p>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОМЯЛИ СПИНКУ<br>
                        • РАЗ, РАЗ И ГОТОВО<br>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ
                    </p>
                </div>
                <div class="price">
                    <hr>
                    <p>
                        60 МИН 4 500 ₽ 🍌<br>
                        90 МИН 6 350 ₽ 🍌🍌
                    </p>
                </div>
            </template>
        </vue-flip>
        <vue-flip class="card" active-hover="">
            <template v-slot:front class="front">
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
                <div class="status"></div>
                <div class="card-photo">
                    <img src="../../assets/programms/card-photos/1.png" alt="">
                    <p>НАЖМИ</p>
                </div>  
                <div class="card-info">
                    <p class="number">10</p>
                    <div class="card-suit last">
                        <img src="../../assets/programms/card-suits/heart.png" alt="">
                    </div>
                </div>
            </template>
            <template v-slot:back class="back">
                <div class="title">
                    <p>РАЗ, РАЗ И ГОТОВО</p>
                    <hr>
                </div>
                <div class="body">
                    <p>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОМЯЛИ СПИНКУ<br>
                        • РАЗ, РАЗ И ГОТОВО<br>
                        • ПОМЫЛИСЬ В ДУШИКЕ<br>
                        • ПОСИДЕЛИ ПОПИЛИ ЧАЙКУ ИЛИ ЧТО-НИБУДЬ ПОКРЕПЧЕ
                    </p>
                </div>
                <div class="price">
                    <hr>
                    <p>
                        60 МИН 4 500 ₽ 🍌<br>
                        90 МИН 6 350 ₽ 🍌🍌
                    </p>
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