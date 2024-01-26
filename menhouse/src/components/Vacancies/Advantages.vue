<script setup>
import Modal from '../Vacancies/Modal.vue'
import { ref } from 'vue';

const modalWindow = ref()

const openModal = () => {
  modalWindow.value.openModal()
}
</script>

<template>
    <Modal ref="modalWindow"></Modal>
    <p class="advantages-title">
        <span class="advantages-orange-title">Почему мы</span><br>
        ПРЕИМУЩЕСТВА
    </p>
    <div class="advantages-container">
        <img src="@/assets/vacancies/advantages/1.png" alt="">
        <div class="description">
            <!-- <p class="title"></p> -->
            <p class="title">Строго без&nbsp;интима</p>
            <div class="qualities">
                <div class="quality">
                    <p><span>•</span>Высокая оплата (ежедневный расчет)</p>
                </div>
                <div class="quality">
                    <p><span>•</span>Бесплатное обучение (различным техникам экзотического, расслабляющего, классического массажа)</p>
                </div>
                <div class="quality">
                    <p><span>•</span>Гибкий график</p>
                </div>
                <div class="quality">
                    <p><span>•</span>Дружелюбный коллектив, понимающее руководство</p>
                </div>
                <div class="quality">
                    <p><span>•</span>Безопасность и&nbsp;комфорт</p>
                </div>
                <div class="quality">
                    <p><span>•</span>Удобное расположение студии (легко добираться)</p>
                </div>
                <div class="quality">
                    <p><span>•</span>Помощь с&nbsp;проживанием иногородним.</p>
                </div>
            </div>
        </div>
    </div>
    <button @click="openModal" class="container-background-button">Откликнуться</button>
</template>

<style scoped>
.advantages-title {
    position: relative;
    padding: 1em 0 0 0;
    font-weight: 600;
    font-size: calc(.8em + 1vw);
}

.advantages-orange-title {
    position: absolute;
    left: 0;
    right: 0;
    top: .7rem;
    z-index: -1;
    font-weight: 100;
    font-size: calc(1.5em + 1.3vw);
    color: #ff320d;
    font-family: "Sweet Mavka";
}

.advantages-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.advantages-container img {
    width: 13%;
    margin-right: 40px;
}

.description {
    max-width: 30%;
}

.title{
    text-align: left;
    margin: 0 0 .9em 0;
    font-size: calc(.7em + .5vw);
    font-weight: 700;
    color: #ff3817;
}

.quality {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: nowrap;
}

.quality p {
    font-weight: 500;
    font-size: calc(.5em + .5vw);
    text-align: left;
    margin: 4px 0px 4px 0px;

}

.quality p span {
    margin-right: 5px;
    color: #ff320d;
}

.container-background-button {
    margin-bottom: 3em;
}

@media (max-width: 550px) {
    .description {
        max-width: 60%;
    }
}

@media (max-width: 450px) {
    .advantages-container img {
        display: none;
    }

    .title {
        font-size: calc(.8em + .5vw);
    }

    .quality p {
        font-size: calc(.7em + .5vw);
    }
}
</style>
