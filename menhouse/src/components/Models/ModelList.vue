<script setup>
import { useSliderLogic } from '../../sliderLogic.js';
useSliderLogic("suka")
useSliderLogic("sukaa")
useSliderLogic("sukaaa")
useSliderLogic("sukaaaa")
</script>

<template>

    <div class="modelList">
        <div class="model-container">
            <div class="photos-container suka">
                <button class="slider-button slider-prev"><div class="arrow left"></div></button>
                <div class="slider">
                    <div class="slider-line">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    </div>
                </div>
                <button class="slider-button slider-next"><div class="arrow right"></div></button>
            </div>
            <div class="content-container">
                <div class="info">
                    <p>
                        Имя: <span>Илона</span> <br>
                        Вес: <span>45</span> <br>
                        Возраст: <span>22</span> <br>
                        Рост: <span>160</span> <br>
                        Грудь: <span>1.5</span>
                    </p>
                </div>
                <button class="info-button">Записаться</button>
            </div>
        </div>
        <div class="model-container">
            <div class="photos-container sukaa">
                <button class="slider-button slider-prev"><div class="arrow left"></div></button>
                <div class="slider">
                    <div class="slider-line">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    </div>
                </div>
                <button class="slider-button slider-next"><div class="arrow right"></div></button>
            </div>
            <div class="content-container">
                <div class="info">
                    <p>
                        Имя: <span>Илона</span> <br>
                        Вес: <span>45</span> <br>
                        Возраст: <span>22</span> <br>
                        Рост: <span>160</span> <br>
                        Грудь: <span>1.5</span>
                    </p>
                </div>
                <button class="info-button">Записаться</button>
            </div>
        </div>
        <div class="model-container">
            <div class="photos-container sukaaa">
                <button class="slider-button slider-prev"><div class="arrow left"></div></button>
                <div class="slider">
                    <div class="slider-line">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    </div>
                </div>
                <button class="slider-button slider-next"><div class="arrow right"></div></button>
            </div>
            <div class="content-container">
                <div class="info">
                    <p>
                        Имя: <span>Илона</span> <br>
                        Вес: <span>45</span> <br>
                        Возраст: <span>22</span> <br>
                        Рост: <span>160</span> <br>
                        Грудь: <span>1.5</span>
                    </p>
                </div>
                <button class="info-button">Записаться</button>
            </div>
        </div>
        <div class="model-container">
            <div class="photos-container sukaaaa">
                <button class="slider-button slider-prev"><div class="arrow left"></div></button>
                <div class="slider">
                    <div class="slider-line">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    <img class="slide-content" src="../../assets/modelList/1.png" alt="">
                    </div>
                </div>
                <button class="slider-button slider-next"><div class="arrow right"></div></button>
            </div>
            <div class="content-container">
                <div class="info">
                    <p>
                        Имя: <span>Илона</span> <br>
                        Вес: <span>45</span> <br>
                        Возраст: <span>22</span> <br>
                        Рост: <span>160</span> <br>
                        Грудь: <span>1.5</span>
                    </p>
                </div>
                <button class="info-button">Записаться</button>
            </div>
        </div>
    </div>  
    
</template>

<style scoped>
.modelList {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin-top: 2.5em;
}

.model-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: fit-content;
    margin: 1em 1em 2.5em 1em;
    box-shadow: 25px 0px 55px -35px rgba(149,35,16,1);
    border-radius: 10px;
}

.photos-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    margin-right: 2em;
}

.info p {
    text-align: left;
    margin-top: 0;
    font-size: calc(.5em + .7vw);
    line-height: calc(1em + 1vw);
    width: max-content;
}

.info p span {
    font-weight: 100;
}

.info-button {
    cursor: pointer;
    color: white;
    padding: 10px 30px;
    background-color: #ff320d;
    font-size: calc(.5em + .7vw);
    max-width: fit-content;
    border: none;
    border-radius: 10px;
}

.info-button:hover {
    background-color: rgb(168, 34, 11);
}

.slider {
    margin: 0 1em;
    max-width: 20vw;
    border: none;
    border-radius: 15px;
    box-shadow: 0px 0px 25px 0px rgba(149,35,16,1);
}

.arrow {
  width: 16px;
  height: 16px;
  border-top: 5px solid #fff !important;
  border-right: 5px solid #fff !important;
  display: inline-block;
  cursor: pointer;
}

.arrow:hover {
  border-top: 5px solid rgb(123, 123, 123) !important;
  border-right: 5px solid rgb(123, 123, 123) !important;
}

.arrow.left {
  transform: rotate(-135deg);
}

.arrow.right {
  transform: rotate(45deg);
}


@media (max-width: 550px) {
    .slider {
        max-width: 40vw;
    }

    .model-container {
        flex-direction: column;
        box-shadow: none;
    }

    .photos-container {
        margin-bottom: 1em;
    }

    .content-container {
        margin-right: 0;
    }

    .info p {
        font-size: calc(.7em + 1vw);
    }

    .info-button {
        font-size: calc(.7em + 1vw);
    }
}
</style>