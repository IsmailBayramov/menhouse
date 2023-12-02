<script setup>

</script>

<template>
    <div class="button-container">
    <div class="left-buttons">
      <button>A</button>
      <button>B</button>
    </div>
    <div class="right-buttons">
      <button>C</button>
      <button>D</button>
    </div>
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
}

.left-buttons,
.right-buttons {
    display: flex;
    flex-direction: column;
}

/* Стили для всех кнопок */
button {
    margin: 5px 5px 25px 5px;
    background-color: #ff320d;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 50px; /* Set equal width and height */
    height: 50px; /* Set equal width and height */
    cursor: pointer;
}

/* Additional styles for specific buttons if needed */
.left-buttons button:nth-child(1),
.left-buttons button:nth-child(2) {
    margin-left: 30px;
}

.right-buttons button:nth-child(1),
.right-buttons button:nth-child(2) {
    margin-right: 30px;
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

    .right-buttons button:nth-child(1),
    .right-buttons button:nth-child(2),
    .left-buttons button:nth-child(1),
    .left-buttons button:nth-child(2) {
        margin: 1vw 5vw 1vw 1vw;
        width: 14vw;
        height: 14vw;
    }

    .right-buttons button:nth-child(2) {
        margin-right: 1vw;
    }
}
</style>