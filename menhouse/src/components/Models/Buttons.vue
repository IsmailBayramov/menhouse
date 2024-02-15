<script setup>
import { ref } from 'vue';

const activeButton = ref(2);

const toggleButtonClass = (buttonIndex) => {
    if (activeButton.value === buttonIndex) {
        return; // Если кнопка уже включена, ничего не делаем
    }
    activeButton.value = buttonIndex;
};
</script>

<template>
    <div class="button-container">
        <button @click="toggleButtonClass(1)" :class="{ clicked: activeButton === 1 }">
            <p>10 Моделей</p>
        </button>
        
        <!-- <button @click="toggleButtonClass(2)" :class="{ clicked: activeButton === 2 }">
            <p >Сегодня в&nbsp;студии</p>
        </button>
        
        <button @click="toggleButtonClass(3)" :class="{ clicked: activeButton === 3 }">
            <p>ТОП Недели</p>
        </button> -->
    </div>
</template>

<style scoped>
.button-container {
    margin-top: 3em;
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    align-content: center;
    align-items: center;
}

.button-container button {
    background-color: black;
    border-radius: 11px;
    border: solid #ff320d;
    color: white;
    margin-right: 1em;
}

.button-container button.clicked {
    background-color: #ff320d;
}

.button-container button:last-child {
    margin-right: 0;
}

.button-container button p {
    font-weight: 500;
    font-size: 16px;
    margin: .5em 1em;
}

@media (max-width: 550px) {
    .button-container button p {
        font-weight: 600;
        font-size: 12px;
        margin: .5em .5em;
    }
}
</style>