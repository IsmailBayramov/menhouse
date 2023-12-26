<script setup>
import DropDown from '../Certificates/DropDown.vue'
import { ref, defineExpose } from 'vue';
import sendTelegramMessage from '../../telegramMessage.js'

const options = ref([
    {"name": "Администратор", "value": "Администратор"},
    {"name": "SPA-модель", "value": "SPA-модель"},
    {"name": "HR-Менеджер", "value": "HR-Менеджер"},
    {"name": "Оператор Call-Центра", "value": "Оператор Call-Центра"},
    {"name": "SMM-Менеджер", "value": "SMM-Менеджер"},
])

const parentSelectedOption = ref(null)
const name = ref(null)
const number = ref(null)
const isActive = ref(false)
const isModalOpen = ref(false);

const handleDataFromChild = (data) => {
    isActive.value = data
}

const openModal = () => {
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
};

defineExpose({
    openModal,
})

const response = () => {
    if (parentSelectedOption.value && name.value && number.value)
    {
        sendTelegramMessage(number.value, name.value, parentSelectedOption.value.name)
        name.value = null
        number.value = null
        closeModal()
    }
}
</script>

<template>

    <div v-if="isModalOpen" class="modalBackground">
        <div class="modal">
            <p class="info">Хочу работать с вами</p>
            <div class="modal-container">
                <div class="form-container">
                    <p class="inscription">Как вас зовут?</p>
                    <input v-model="name" type="text" placeholder="Например, Ольга">
                    <p class="inscription">Выберите вакансию:</p>
                    <drop-down
                        :options="options"
                        :inscription="'Вакансия'"
                        v-model="parentSelectedOption"
                        @isActive="handleDataFromChild"
                    />
                    <p class="inscription">Номер телефона:</p>
                    <input v-model="number" type="tel" placeholder="+7 900 000 00 00" maxlength="12">
                    <p class="description">Нужен для обртаной связи с кандидатом.</p>
                </div>
                <div class="photo-container">
                    <img src="/src/assets/vacancies/modal/woman.png" alt="">
                </div>
            </div>
            <button @click="response" class="sign-up">ОТКЛИКНУТЬСЯ</button>
            <div @click="closeModal" class="close"></div>
        </div>
    </div>
    
</template>

<style scoped>

.modal {
    padding: 20px 50px;
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
    align-items: center;
}

.form-container {
    display: flex;
    flex-direction: column;
    margin-right: 2em;
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
    border-color: #ff0000;
    color: #ff0000;
    max-width: 50%;
    font-size: max(17px, calc(.5em + .8vw));
    margin: 10px 0 10px 0;
    /* margin: 10px 0; */
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

@media (max-width: 650px) {
    .modal {
        padding: 20px 50px;
    }   

    .modal-container {
        margin-bottom: 1.5em;
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
        width: 40vw;
        max-width: 300px;
        min-width: 150px;
    }
}

</style>