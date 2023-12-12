<script setup>
import BorderButtons from '../General/BorderButtons.vue'
import Card from '../Programms/Card.vue'
</script>

<template>
    <div class="container">
        <p class="container-title">Наши <span class="container-orange-title">Программы</span></p>
        <Card></Card>
    </div>
    <BorderButtons></BorderButtons>
</template>

<style scoped>
.container {
  padding-top: 50px;
  text-align: center;
  display: flex;
  color: white;
  flex-direction: column;
  align-items: center;
}

.container-title {
    padding: 1.5em .5em 1em .5em;
    font-weight: 500;
    font-size: calc(1.5em + 1vw);
}

.container-orange-title {
    color: #ff320d;
}

@media (max-width: 550px) {
    .container-title {
        font-size: calc(1em + 2vw);
        margin-top: 0;
    }
}
</style>