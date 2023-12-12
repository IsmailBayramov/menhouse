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
                <div class="status">СКИДКА</div>
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
                back
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
                <div class="status">СКИДКА</div>
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
                back
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
                <div class="status">СКИДКА</div>
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
                back
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
                <div class="status">СКИДКА</div>
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
                back
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
                <div class="status">СКИДКА</div>
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
                back
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
    transform: translate(50%, -20%);
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
    font-family: "Bahnscrift", sans-serif;
    font-weight: 800;
    font-size: 2.8em;
    color: black;
    margin: 0;
}

.status {
    font-family: "Bahnscrift", sans-serif;
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
}

.status.top {
    background-color: #ff330d;
}

@media (max-width: 850px) {
    .card-container {
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 1em;
        grid-row-gap: 1.5em;
    }

    :deep(.flipper) {
        /* width: 80% !important;
        height: 80% !important; */
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
}
</style>