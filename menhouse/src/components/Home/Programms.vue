<script setup>

</script>

<template>
    <p class="container-title">Популярные <span class="container-orange-title">Программы</span></p>
    <div class="programms">
        <button class="slider-button slider-prev"><div class="arrow left"></div></button>
        <div class="slider">
            <div class="slider-line programm-container">
                <div class="slide-content programm">
                    <div class="first-container">
                        <img class="programm-photo" src="../../assets/programms/photo.png" alt="">
                        <p class="price">
                            От 14 990 ₽
                            <img class="price-mark" src="../../assets/programms/icons/question.png" alt="">
                        </p>
                    </div>
                    <div class="second-container">
                        <p class="programm-title">Секретарша</p>
                        <p class="programm-description">
                            Офисная тема - богатая почва 
                            для сексуальных фантазий, особенно, 
                            если в твоем офисе ничего подобного 
                            не просиходит. <span>Подобный сценарий 
                            можно считать классикой жанра и мы 
                            можем предложить несколько вариантов 
                            развития событий</span>
                        </p>
                        <div class="icons">
                            <img src="../../assets/programms/icons/1.png" alt="">
                            <img src="../../assets/programms/icons/2.png" alt="">
                            <img src="../../assets/programms/icons/3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="slide-content programm">
                    <div class="first-container">
                        <img class="programm-photo" src="../../assets/programms/photo.png" alt="">
                        <p class="price">
                            От 14 990 ₽
                            <img class="price-mark" src="../../assets/programms/icons/question.png" alt="">
                        </p>
                    </div>
                    <div class="second-container">
                        <p class="programm-title">Секретарша</p>
                        <p class="programm-description">
                            Офисная тема - богатая почва 
                            для сексуальных фантазий, особенно, 
                            если в твоем офисе ничего подобного 
                            не просиходит. <span>Подобный сценарий 
                            можно считать классикой жанра и мы 
                            можем предложить несколько вариантов 
                            развития событий</span>
                        </p>
                        <div class="icons">
                            <img src="../../assets/programms/icons/1.png" alt="">
                            <img src="../../assets/programms/icons/2.png" alt="">
                            <img src="../../assets/programms/icons/3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="slide-content programm">
                    <div class="first-container">
                        <img class="programm-photo" src="../../assets/programms/photo.png" alt="">
                        <p class="price">
                            От 14 990 ₽
                            <img class="price-mark" src="../../assets/programms/icons/question.png" alt="">
                        </p>
                    </div>
                    <div class="second-container">
                        <p class="programm-title">Секретарша</p>
                        <p class="programm-description">
                            Офисная тема - богатая почва 
                            для сексуальных фантазий, особенно, 
                            если в твоем офисе ничего подобного 
                            не просиходит. <span>Подобный сценарий 
                            можно считать классикой жанра и мы 
                            можем предложить несколько вариантов 
                            развития событий</span>
                        </p>
                        <div class="icons">
                            <img src="../../assets/programms/icons/1.png" alt="">
                            <img src="../../assets/programms/icons/2.png" alt="">
                            <img src="../../assets/programms/icons/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="slider-button slider-next"><div class="arrow right"></div></button>
    </div>
    <form action="https://apple.com" target="_blank">
        <button class="container-background-button">Смотреть больше</button>
    </form>
</template>

<style scoped>
.programms {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.programm {
    display: flex;
    flex-direction: row;
    justify-content: center;
    /* margin: 0 40px; */
}

.programm-photo {
    width: calc(4em + 15vw);
}

.price {
    position: absolute;
    font-size: calc(.5em + .6vw);
    width: fit-content;
    z-index: 2;
    transform: translate(0, calc(120% + 5vw));
    border: 2.5px solid #ff320d;
    border-radius: 12px;
    background: rgba(0, 0, 0, 0.85);
    text-align: center;
    padding: 8px 13px;
}

.price-mark {
    position: absolute;
    top: -35%;
    right: -10%;
    width: 20%;
}

.first-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 35px;
    justify-content: center;
}

.second-container {
    max-width: 20vw;
    text-align: left;
}

.programm-title {
    color: #ff320d;
    font-weight: 600;
    font-size: calc(.7em + .9vw);
    margin-bottom: 0;
}

.programm-description {
    font-weight: 400;
    font-size: 100%;
}

.programm-description span{
    font-weight: 300;
    font-size: 85%;
    color: #c8c8c8;
}

.icons img {
    width: calc(1em + 2vw);
    margin-right: 10%;
}

.icons img:last-child {
    margin-right: 0;
}


@media (max-width: 550px) {
    .programms {
        justify-content: space-evenly;
        margin: 0;
    }
    .programm {
        flex-direction: column;
    }

    .first-container {
        margin-right: 0;
    }
    
    .second-container {
        max-width: 50vw;
    }

    .programm-photo {
        width: calc(6em + 15vw);
    }

    .icons img {
        width: calc(2em + 3vw);
    }
}
    
</style>