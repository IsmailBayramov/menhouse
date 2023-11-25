<template>
    <p class="container-title">Отзывы <span class="container-orange-title">Гостей</span></p>
    <div class="our review">
        <button class="slider-button slider-prev"><div class="arrow left"></div></button>
        <div class="slider">
            <div class="slider-line">
                <div class="review-card">
                    <div class="text-container">
                        <p class="review-text">„Огромная благодарность мастер Алине за релакс.“</p>
                    </div>
                    <p class="reviewer-name">Антон</p>
                </div>
                <div class="review-card">
                    <div class="text-container">
                        <p class="review-text">„Огромная благодарность мастер Алине за релакс.“</p>
                    </div>
                    <p class="reviewer-name">Антон</p>
                </div>
                <div class="review-card">
                    <div class="text-container">
                        <p class="review-text">„Огромная благодарность мастер Алине за релакс.“</p>
                    </div>
                    <p class="reviewer-name">Антон</p>
                </div>
            </div>
        </div>
        <button class="slider-button slider-next"><div class="arrow right"></div></button>
    </div>
    <form action="https://apple.com" target="_blank"><button class="container-background-button">Оставить отзыв</button></form>
</template>

<style scoped>
.review {
    margin: 10px;
    text-align: center;
}

.review-card {
    height: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.text-container {
    background: url("../../assets/review_template.png") no-repeat center center;
    background-size: contain;
    padding: 5% 5% 5% 20%;
}

/* .review img {
    width: calc(5em + 45vw);
} */

.review p {
    font-size: calc(.4em + .8vw);
    font-weight: 500;
}   

.review-text {
    color: black;
    width: 100%;
    /* margin: calc(5% + 20px) calc(1% + 45px) calc(5% + 20px) calc(17% + 45px); */
}

.reviewer-name {
}
</style>