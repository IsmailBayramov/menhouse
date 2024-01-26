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
    <p class="vacancies-title">
        <span class="vacancies-orange-title">Открытые</span><br>
        ВАКАНСИИ
    </p>
    <p class="title-info">
        Мы предлагаем работу в&nbsp;профессиональном салоне (не апартаменты),<br>
        бесплатное обучение, дружный коллектив и рабочую атмосферу,<br>
        возможность начать зарабатывать уже с&nbsp;первого дня<br>
        Приезжай к&nbsp;нам с&nbsp;любой точки страны – проезд и проживание за&nbsp;счет компании.
    </p>
    <div class="vacancies">
        <div class="card-container">
            <div class="card-image">
                <img src="@/assets/vacancies/vacancies/1.png" alt="Vacancy Image">
            </div>
            <p class="card-title">Администратор</p>
            <div class="line">
                <p>Осуществляет работу по эффективному, культурному обслуживанию посетителей, созданию для них комфортных условий.</p>
            </div>
            <div class="price">
                <p>
                    от 100 000<br> 
                    за 14 дней
                </p>
            </div>
        </div>
        <div class="card-container">
            <div class="card-image">
                <img src="@/assets/vacancies/vacancies/2.png" alt="Vacancy Image">
            </div>
            <p class="card-title">SPA-Модель</p>
            <div class="line">
                <p>Специалист по мышцам и мягким тканям, который помогает клиентам снять стресс и боль</p>
            </div>
            <div class="price">
                <p>
                    от 150 000<br> 
                    за 14 дней
                </p>
            </div>
        </div>
        <div class="card-container">
            <div class="card-image">
                <img src="@/assets/vacancies/vacancies/3.png" alt="Vacancy Image">
            </div>
            <p class="card-title">HR-Менеджер</p>
            <div class="line">
                <p>Специалист отдела по подбору и обучению персонала. От него зависит эффективность персонала и его количество.</p>
            </div>
            <div class="price">
                <p>
                    от 50 000<br>
                    в неделю
                </p>
            </div>
        </div>
        <div class="card-container">
            <div class="card-image">
                <img src="@/assets/vacancies/vacancies/4.png" alt="Vacancy Image">
            </div>
            <p class="card-title">Оператор Call-Центра</p>
            <div class="line">
                <p>Удаленный сотрудник, который связывается с клиентами через средства интернет связи.</p>
            </div>
            <div class="price">
                <p>
                    от 20 000<br> 
                    в месяц
                </p>
            </div>
        </div>
        <div class="card-container">
            <div class="card-image">
                <img src="@/assets/vacancies/vacancies/5.png" alt="Vacancy Image">
            </div>
            <p class="card-title">SMM-Менеджер</p>
            <div class="line">
                <p>Создает и оформляет корпоративные страницы в различных социальных сетях, разрабатывает стратегию их развития</p>
            </div>
            <div class="price">
                <p>
                    от 15 000<br> 
                    в месяц
                </p>
            </div>
        </div>
    </div>
    <button @click="openModal" class="container-background-button">Откликнуться</button>
</template>

<style scoped>
.vacancies-title {
    position: relative;
    padding: 1em 0 0 0;
    font-weight: 600;
    font-size: calc(.8em + 1vw);
}

.vacancies-orange-title {
    position: absolute;
    left: 0;
    right: 0;
    top: .5rem;
    z-index: -1;
    font-weight: 100;
    font-size: calc(1.7em + 1.3vw);
    color: #ff320d;
    font-family: "Sweet Mavka";
}

.title-info {
    font-weight: 500;
    font-size: calc(.6em + .5vw);
    padding: 0 20px;
    /* line-height: 1.7vw; */
    text-align: center;
}

.vacancies {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}


.card-container {
    position: relative;
}

.card-image {

}

.card-image img {
    width: 90%;
}

.card-title {
    font-weight: 600;
    font-size: 18px;
    margin: 10px 0 5px 0;
}


.line {
    border-left: 3px solid #ff320d;
    height: 70px;
    position: absolute;
    left: 27%;
}

.line p {
    margin: 0 0 0 10px;
    font-size: 70%;
    font-weight: 600;
    text-align: left;
}

.price {
    text-align: center;
    margin-top: 30%;
    display: flex;
    justify-content: center;
}

.price p {
    color: black;
    background-color: white;
    width: fit-content;
    padding: 8px 20px;
    border-radius: 15px;
    font-weight: 700;
}

.container-background-button {
    margin-top: calc(1em + 1vw);
}

@media (max-width: 550px) {
    .card-title {
        font-size: 14px;
    }
}

</style>