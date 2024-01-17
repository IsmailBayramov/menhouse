<script setup>
import { ref } from 'vue';
import sendTelegramMessage from '../../telegramMessage.js'

const address = ref(null)
const number = ref(null)

const props = defineProps(['isModalOpen']);
const emit = defineEmits(['close'])

const closeModal = () => {
  emit('close');
};

const response = () => {
    if (address.value && number.value)
    {
        sendTelegramMessage(number.value, address.value, "ТАКСИ")
        address.value = null
        number.value = null
        closeModal()
    }
}
</script>

<template>

    <div v-if="isModalOpen" class="modalBackground">
        <div class="modal">
            <p class="info">Закажем такси<br>Для Вас</p>
            <div class="modal-container">
                <div class="form-container">
                    <p class="inscription">Куда подать машину?</p>
                    <input v-model="address" type="text" placeholder="14-й Микрорайон, 18">
                    <p class="inscription">Номер телефона для связи:</p>
                    <input v-model="number" type="tel" placeholder="+7 900 000 00 00" maxlength="12">
                </div>
                <aside>
                    <p>Итоговую стоимость такси мы вычтем из общей стоимости оплаченных услуг. </p>
                </aside>
            </div>
            <button @click="response" class="sign-up">ЗАКАЗАТЬ</button>
            <div @click="closeModal" class="close"></div>
        </div>
    </div>
    
</template>

<style scoped>

.modal {
    padding: 20px 50px;
    background-image: url("@/assets/border-buttons/TAXI.png");
    background-size: 45%;
    background-repeat: no-repeat;
    background-position: 65% 30%;
    width: 60%;
    max-width: 800px;
}

.info {
    width: 100%;
    padding-left: 0;
    padding-right: 0;
    margin: 0 auto;
    font-weight: 800;
    font-size: max(35px, calc(1em + 2vw));
    text-align: left;
}

.inscription {
    text-align: left;
    margin-bottom: 0.5em;
    margin-top: 1.3em;
    font-weight: 700;
    padding-left: 10px;
}

.inscription:first-child {
    margin-top: .7em;
}

.description {
    text-align: left;
    font-size: 10px;
    font-weight: 600;
    padding-left: 10px;
}

.modal-container {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: 2em;
}

.form-container {
    display: flex;
    flex-direction: column;
}

aside {
    padding-left: 1em;
    margin-left: 1em;
    max-width: 40%;
    border-left: 4px solid white;
    text-align: left;
    color: #ffd800;
    font-weight: 700;
}

aside p {
    margin: 0;
}

.photo-container {
    height: auto;
    min-width: 250px;
    position: relative;
}

.photo-container img {
    width: 100%;
    left: 0%;
    top: -120px;
    position: absolute;
}

.dropdown-wrapper {
    padding-bottom: 0;
}

.sign-up {
    border-color: #686868;
    color: #686868;
    max-width: 50%;
    font-size: max(17px, calc(.5em + .8vw));
    margin: 10px 0 10px 0;
    /* margin: 10px 0; */
}

.sign-up:hover {
    border-color: #ff0000;
    color: #ff0000;
}


input {
    border: none;
    outline: none;
    border-radius: 15px;
    font-size: 1em;
    padding: 10px 16px;
    width: 30vw;
    max-width: 300px;
    min-width: 100px;
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

@media (max-width: 700px) {
    .modal {
        padding: 20px 50px;
        background-position: center 30%;
        background-size: 70%;
    }   

    .modal:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,.25);
        border-radius: 20px;
        z-index: -1;
    }

    aside {
        margin-top: 2em;
        max-width: 80%;
        border-left: 4px solid white;
        text-align: left;
        color: #ffd800;
        font-weight: 700;
        font-size: 15px;
    }

    .modal-container {
        margin-bottom: 1.5em;
        flex-direction: column;
        align-items: center;
    }

    .photo-container {
        display: none;
    }

    .form-container {
        margin-right: 0;
    }

    .info {
        text-align: center;
        font-size: max(22px, calc(1em + 1.5vw));
    }

    .sign-up {
        max-width: none;
        font-size: max(15px, calc(.5em + .8vw));
        margin: 10px 0;
    }

    input {
        width: 50vw;
        max-width: 300px;
        min-width: 150px;
    }
}

</style>