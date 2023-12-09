<script setup>

</script>

<template>
    <p class="requirements-title">
        <span class="requirements-orange-title">Кого ищем</span><br>
        ТРЕБОВАНИЯ
    </p>
    <div class="requirements-container">
        <img src="../../assets/vacancies/requirements/1.png" alt="">
        <div class="description">
            <!-- <p class="title"></p> -->
            <p class="title">Ты нам точно подходишь, если:</p>
            <div class="qualities">
                <div class="quality">
                    <p><span>◆</span>Общительная.</p>
                </div>
                <div class="quality">
                    <p><span>◆</span>Возрастом от&nbsp;18.</p>
                </div>
                <div class="quality">
                    <p><span>◆</span>Любишь всегда хорошо выглядеть.</p>
                </div>
                <div class="quality">
                    <p><span>◆</span>Хочешь быть финансово независимой.</p>
                </div>
                <div class="quality">
                    <p><span>◆</span>Ценишь своё время.</p>
                </div>
                <div class="quality">
                    <p><span>◆</span>Привлекательная.</p>
                </div>
            </div>
        </div>
    </div>
    <form action="https://apple.com" target="_blank">
        <button class="container-background-button">Откликнуться</button>
    </form>
</template>

<style scoped>
.requirements-title {
    position: relative;
    padding: 1em 0 0 0;
    font-weight: 600;
    font-size: calc(.8em + 1vw);
}

.requirements-orange-title {
    position: absolute;
    left: 0;
    right: 0;
    top: .7rem;
    z-index: -1;
    font-weight: 100;
    font-size: calc(1.5em + 1.3vw);
    color: #ff320d;
    font-family: "Sweet Mavka";
}

.requirements-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.requirements-container img {
    width: 17%;
    margin-right: 40px;
}

.description {
    max-width: 30%;
}

.title{
    text-align: left;
    margin: 0 0 .9em 0;
    font-size: calc(.7em + .5vw);
    font-weight: 700;
}

.quality {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: nowrap;
}

.quality p {
    font-weight: 500;
    font-size: calc(.5em + .5vw);
    text-align: left;
    margin: 4px 0px 4px 0px;
}

.quality p span {
    margin-right: 5px;
    color: #ff320d;
}

@media (max-width: 550px) {
    .description {
        max-width: 60%;
    }

}

@media (max-width: 450px) {
    .requirements-container img {
        display: none;
    }

    .title {
        font-size: calc(.8em + .5vw);
    }

    .quality p {
        font-size: calc(.7em + .5vw);
    }
}
</style>
