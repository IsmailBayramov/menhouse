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
                    привет
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
    padding: 1em .5em 0 .5em;
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
    width: fit-content;
    height: auto;
    margin-bottom: 25px;
    perspective: 1000px;
    width: 300px;
    height: 40%;
    position: relative;
    perspective: 1000px;
}

.front, .back {
    background-color: #fff;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 1s;
    backface-visibility: hidden;
    border-radius: 10px;
}

.back {
    transform: rotateY(180deg);
}

.card:hover .front {transform: rotateY(180deg);}
.card:hover .back {transform: rotateY(360deg);}

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

@media (max-width: 550px) {
    .container-title {
        font-size: calc(1em + 2vw);
        margin-top: 0;
    }
}
</style>