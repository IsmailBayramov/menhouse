<script setup>
import BorderButtons from '../General/BorderButtons.vue'

</script>

<template>
    <div class="container">
        <p class="container-title">Наши <span class="container-orange-title">Программы</span></p>
        <div class="card-container">
            <div class="card">
                <div class="front">
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
                </div>
                <div class="back">

                </div>
            </div>
        </div>
    </div>
    <BorderButtons></BorderButtons>
</template>

<style scoped>
.container {
  padding-top: 50px;
  text-align: center;
  display: flex;
  color: white;
  flex-direction: column;
  align-items: center;
}

.container-title {
    padding: 1em 0 0 0;
    font-weight: 500;
    font-size: calc(.5em + 2vw);
}

.container-orange-title {
    color: #ff320d;
}

.card-container {
    display: flex;
    margin-bottom: 5em;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card {
    position: relative;
    border-radius: 30px;
    background-color: rgb(255, 255, 255);
    width: fit-content;
    height: auto;
    margin-bottom: 25px;
}

.front, .back {
    position: relative;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    transition: 1s;
    backface-visibility: hidden;
}

.back {
    transform: rotateY(180deg);
}

.number {
    font-family: "Bahnscrift", sans-serif;
    font-weight: 800;
    font-size: 33px;
    color: black;
    margin: 0;
}

.card-suit {
    width: 30px;
}

.card-suit img {
    width: 100%;
    height: auto;
}

.card-photo {
    position: relative;
    margin: 15% 8%;
}

.card-photo img {
    width: 80%;
}

.card-photo p {
    position: absolute;
    right: 50%;
    top: 50%;
    margin: 0;
    padding: 8px 15px;
    border-radius: 10px;
    font-size: .8em;
    background-color: #ff320d;
    transform: translate(50%, -50%);
}

.card-info:first-child {
    left: 4%;
    top: -8%;
    z-index: 1;
    position: absolute;
    width: fit-content;
}

.card-info:last-child {
    position: absolute;
    width: fit-content;
    transform: rotate(180deg);
    right: 4%;
    bottom: 13%;
}

@media (min-width: 1920px) {
    .card-container {
        width: 35%;
    }
}

@media (max-width: 1920px) {
    .card-container {
        width: 40%;
    }
}

@media (max-width: 1600px) {
    .card-container {
        width: 50%;
    }
}
@media (max-width: 1280px) {
    .card-container {
        width: 62%;
    }
}
@media (max-width: 1024px) {
    .card-container {
        width: 80%;
    }
}

@media (max-width: 900px) {
    .card-container {
        width: 90%;
    }
}

@media (max-width: 780px) {
    .card-container {
        width: 98%;
    }

    .card {
        width: 30%;
        border-radius: 20px;
    }
}

@media (max-width: 550px) {
    .container-title {
        font-size: calc(1em + 2vw);
        margin-top: 0;
    }
}

@media (max-width: 480px) {
    .card-container {
        width: 95%;
    }

    .card {
        width: 45%;
    }
}

</style>