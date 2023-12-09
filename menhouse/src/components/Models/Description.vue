<template>
    <div class="description">
        <p>
            Наша студия эротического массажа
            первая в&nbsp;городе. Кто&nbsp;<span class="orange">гарантирует</span> достоверность
            и&nbsp;соответствие на&nbsp;100% расписания работы
            моделей в&nbsp;текущий момент времени
        </p>
        <div class="logo">
            <img src="../../assets/logo.png" alt="">
        </div>
    </div>
</template>

<style scoped>
.description {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: 500;
}

.description p {
    font-size: calc(.8em + .7vw);
    width: 50%;
}

.description img {
    width: 20%;
}

@media (max-width: 550px) {
    .description p {
        font-size: calc(1em + .6vw);
        padding: 0 1em;
        width: 80%;
    }

    .description img {
        width: 30%;
    }
}
</style>