<script setup>

</script>

<template>
    <p class="salaries-title">
        НАЧНИ ЗАРАБАТЫВАТЬ<br>
        <span class="salaries-orange-title">ОТ 50 000</span> РУБЛЕЙ В МЕСЯЦ
    </p>

    <div class="salaries-container">
        <div class="image-block">
            <div class="caption">
                <span class="left-caption">7 <span>дней</span></span>
                <span class="right-caption">ОБНОВЛЕННЫЙ<br>ГАРДЕРОБ</span>
            </div>
            <img src="../../assets/vacancies/salaries/1.png" alt="Картинка 2">
        </div>
        <div class="image-block">
            <div class="caption">
                <span class="left-caption">30 <span>дней</span></span>
                <span class="right-caption">НОВЫЙ<br>ТЕЛЕФОН</span>
            </div>
            <img src="../../assets/vacancies/salaries/2.png" alt="Картинка 2">
        </div>
        <div class="image-block">
            <div class="caption">
                <span class="left-caption">90 <span>дней</span></span>
                <span class="right-caption">БЕЗЗАБОТНЫЙ<br>ОТДЫХ</span>
            </div>
            <img src="../../assets/vacancies/salaries/3.png" alt="Картинка 2">
        </div>
        <div class="image-block">
            <div class="caption">
                <span class="left-caption">6 <span>месяцев</span></span>
                <span class="right-caption">КОМФОРТНАЯ<br>МАШИНА</span>
            </div>
            <img src="../../assets/vacancies/salaries/4.png" alt="Картинка 2">
        </div>
        <div class="image-block">
            <div class="caption">
                <span class="left-caption">12 <span>месяцев</span></span>
                <span class="right-caption">СОБСТВЕННАЯ<br>КВАРТИРА</span>
            </div>
            <img src="../../assets/vacancies/salaries/5.png" alt="Картинка 2">
        </div>
    </div>

    
</template>

<style scoped>

.salaries-title {
  padding: 1em 0 1em 0;
  font-weight: 600;
  /* font-size: calc(.8em + 1.7vw); */
  font-size: calc(.8em + 1vw);
}

.salaries-orange-title {
  color: #ff320d;
}

.image-block {
    position: relative;
    width: fit-content;
    display: flex;
    align-items: center;
    margin: 5px auto;
    justify-content: center;
}

img {
    width: 60vw;
    height: auto;
    display: block;
}

.caption {
    position: absolute;
    left: 15%;
    right: 0;
    padding: 0 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.left-caption {
    position: relative; /* Изменение на относительное позиционирование */
    font-weight: 700;
    font-size: 5vw;
}

.left-caption span {
    position: absolute; /* Изменение на абсолютное позиционирование */
    top: 65%; /* Размещение посередине относительно родительского элемента */
    left: 45%;
    transform: translateY(-50%); /* Коррекция для точного выравнивания по вертикали */
    font-family: 'Sweet Mavka';
    font-weight: 100;
    color: #ff320d;
    font-size: 2.8vw;   
    text-align: left;
}

.right-caption {
    text-align: left;
    line-height: 1.5em;
    font-weight: 500;
    margin-right: 15%;
    font-size: calc(.3em + .6vw);
    position: absolute;
    left: 65%;
}

.left-caption, .right-caption {
    color: #ffffff;
}

@media (max-width: 550px) {
    img {
        width: 100%;
    }

    .left-caption {
        font-size: 7vw;
    }

    .left-caption span {
        font-size: 4vw;
    }
}
</style>