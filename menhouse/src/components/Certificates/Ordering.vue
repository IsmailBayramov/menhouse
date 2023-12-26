<script setup>
import { ref } from 'vue';
import DropDown from '../Certificates/DropDown.vue'
import sendTelegramMessage from '../../telegramMessage';

const options = ref([
    {"name": "2 000 руб", "value": 2000},
    {"name": "5 000 руб", "value": 5000},
    {"name": "10 000 руб", "value": 10000}
])

const parentSelectedOption = ref(null)
const address = ref(null)
const number = ref(null)
const isActive = ref(false)

const handleDataFromChild = (data) => {
    isActive.value = data
}

const response = () => {
    if (parentSelectedOption.value && address.value && number.value)
    {
        sendTelegramMessage(number.value, address.value, parentSelectedOption.value.name)
        address.value = null
        number.value = null
    }
}
</script>

<template>
    <div class="order-container" :class="{ active: isActive }">
        <div class="certificate-photo">
            <img src="../../assets/certificates/cards.png" alt="">
        </div>
        <div class="order">
            <div class="order-form">
                <p>ЗАКАЖИ СЕРТИФИКАТ</p>
                <drop-down
                    :options="options"
                    v-model="parentSelectedOption"
                    @isActive="handleDataFromChild"
                />
                <input v-model="address" type="text" placeholder="Укажите адрес доставки">
                <input v-model="number" type="tel" placeholder="Номер телефона для оплаты и связи с курьером">
            </div>
            <button @click="response" class="order-button">Заказать</button>
        </div>
    </div>
</template>

<style scoped>

.order-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    position: relative;    
    width: fit-content;
    transition: .3s;
}

.order-container.active {
    margin: 60px 0px;
}

.order {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 100px 10px 100px auto;
    position: absolute;
    right: -5vw;
}

.order-form {
    display: flex;
    flex-direction: column;
    padding: 2em;
    border: 2px solid white;
    border-radius: 40px;
}

.order-form input:first-of-type {
    margin-bottom: 16px;
}

.order-form p{
    padding: 0 1em;
    margin-top: 0;
    font-weight: 800;
    font-size: calc(1em + 1vw);
}

.order-button {
    cursor: pointer;
    color: white;
    padding: 10px 45px;
    margin-top: 2.5em;
    background-color: #ff320d;
    font-size: 1em;
    max-width: fit-content;
    border: none;
    border-radius: 10px;
}

.certificate-photo {
    position: relative;
    right: calc(11em + 10vw);
    z-index: -1;
}

.certificate-photo img {
    width: 80%;
}

input {
    border: none;
    outline: none;
    border-radius: 15px;
    font-size: 1em;
    padding: 13px 16px 13px 16px;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

input[type='number'],
input[type="number"]:hover,
input[type="number"]:focus {
    appearance: none;
    -moz-appearance: textfield;
}

@media (max-width: 550px) {
    .order-container.active {
        margin: 0;
    }

    .order {
        position: static;
        margin: 2.5em 1em;
    }

    .certificate-photo {
        display: none;
    }
}
</style>