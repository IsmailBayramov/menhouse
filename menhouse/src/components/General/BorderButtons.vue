<script setup>
import { ref } from 'vue';

const leftContainer = ref(false);
const rightContainer = ref(false);

const toggleContainers = (container) => {
  if (container === 'left') {
    leftContainer.value = !leftContainer.value;
    rightContainer.value = false;
  } else if (container === 'right') {
    rightContainer.value = !rightContainer.value;
    leftContainer.value = false;
  }
};
</script>

<template>
    <div class="button-container">
        <div class="left-buttons">
            <button @click="toggleContainers('left')"><img src="@/assets/icons/border-button_4.png" alt=""></button>
            <button><img src="@/assets/icons/border-button_1.png" alt=""></button>
        </div>
        <div class="right-buttons">
            <button @click="toggleContainers('right')"><img src="@/assets/icons/border-button_2.png" alt=""></button>
            <button><img src="@/assets/icons/border-button_3.png" alt=""></button>
        </div>
    </div>
    <div class="link-buttons-container left" :class="{ show: leftContainer }">
        <a href="https://t.me/MHouse_club_bot"><img src="../../assets/footer/icon-telegram.png" alt="Telegram" class="column-link-button"></a>
        <a href="https://vk.com/menhouse_club"><img src="../../assets/footer/icon-vk.png" alt="Vkontakte" class="column-link-button"></a>
    </div>
    <div class="link-buttons-container right" :class="{ show: rightContainer }">
        <a href="tel:+7 912 512 0016"><img src="../../assets/footer/icon-vk.png" alt="Phone number" class="column-link-button"></a>
        <a href="whatsapp://send?phone=+79125120016"><img src="../../assets/footer/icon-whatsapp.png" alt="Whatsapp" class="column-link-button"></a>
        <a href="https://t.me/MENHOUSE0016"><img src="../../assets/footer/icon-telegram.png" alt="Telegram" class="column-link-button"></a>
        <a href="viber://chat?number=+79125120016"><img src="../../assets/footer/icon-vk.png" alt="Viber" class="column-link-button"></a>
    </div>
</template>

<style scoped>
.button-container {
    position: fixed;
    bottom: 0;
    display: flex;
    justify-content: space-between;
    width: -webkit-fill-available;
    padding: 10px;
    z-index: 2;
    pointer-events: none;
}

/* Стили для всех кнопок */
button {
    margin-bottom: 25px;
    background-color: #ff320d;
    padding: 0;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    cursor: pointer;
    pointer-events: all;
}

button:hover {
    background-color: rgb(168, 34, 11);
}

button img {
    width: 30px;
}

.left-buttons,
.right-buttons {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

.left-buttons button,
.left-buttons div {
    margin-left: 30px;
}

.right-buttons button,
.right-buttons div {
    margin-right: 30px;
}

.left-buttons button:nth-child(2) {
    transition: transform .6s linear;
}

.left-buttons button:nth-child(2):hover {
    transform: rotate3d(0, 1, 0, -180deg);
}

.left-buttons button:nth-child(2) img {
    width: 15px;
}

.link-buttons-container {
    display: flex;
    flex-direction: column;
    position: fixed;
    bottom: 160px;
    width: -webkit-fill-available;
    transform: scale(0);
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    z-index: 0;
}

.link-buttons-container.show {
    transform: scale(1);
}

.link-buttons-container.right {
    align-items: end;
    transform-origin: 65% 100%;
    right: 47px;
}

.link-buttons-container.left {
    align-items: start;
    transform-origin: 15% 100%;
    left: 47px;
}

.link-buttons-container a {
    width: fit-content;
}

.column-link-button {
  margin-bottom: .5em;
  width: 2.3em;
  pointer-events: all;
  max-width: fit-content;
}

.column-link-button:hover {
  filter: brightness(0.6); 
}


@media (max-width: 550px) {
    .button-container {
        justify-content: center;
        background-color: #191919e8;
    }

    .left-buttons,
    .right-buttons {
        flex-direction: row;
    }

    .right-buttons button,
    .left-buttons button{
        margin: 1vw 5vw 1vw 1vw;
        width: 14vw;
        height: 14vw;
    }

    .right-buttons button:nth-child(2) {
        margin-right: 1vw;
    }

    
    .link-buttons-container {
        bottom: 22vw;
    }

    .link-buttons-container.right {
        right: 5vw;
    }

    .link-buttons-container.left {
        left: 5vw;
    }
}
</style>