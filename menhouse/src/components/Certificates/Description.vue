<template>
    <div class="description">
        <p>
            <span class="orange">
                ПРИЯТНАЯ НОВОСТЬ!
            </span>
            <br>

            ТЕПЕРЬ&nbsp;МЫ ОСУЩЕСТВЛЯЕМ ДОСТАВКУ
            ПОДАРОЧНЫХ СЕРТИФИКАТОВ В&nbsp;ПРЕДЕЛАХ ГОРОДА.

            <span class="subtitle">
                Для&nbsp;вашего удобства каждому сертификату присвоен
                индивидуальный номер.
            </span>
        </p>
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
    font-size: calc(.7em + .5vw);
    width: 40%;
}

.orange {
    font-weight: 900;
    font-size: calc(1em + .5vw);
}

.subtitle {
    color: #7b7b7b;
    font-size: calc(.6em + .5vw);;
}

@media (max-width: 768px) {
    .description p {
        width: 60%;
    }
}

@media (max-width: 550px) {
    .description p {
        font-size: calc(.8em + .6vw);
        padding: 0 1em;
        width: 80%;
    }

    .orange {
        font-size: calc(1.2em + .6vw);
    }

    .subtitle {
        font-size: calc(.8em + .6vw);
    }
}
</style>