<script setup>
import { ref, onBeforeMount, onMounted } from 'vue';

const reviewsSlider = ref(null);

onBeforeMount(() => {
    if (reviewsSlider.value) {
        $(reviewsSlider.value).slick('unslick');
    }
});

onMounted(() => {
    if (reviewsSlider.value) {
        $(reviewsSlider.value).slick({
            autoplay: true,
            autoplaySpeed: 8000,
            arrows: true,
            slidesToScroll: 1,
        });
    }
});
</script>

<template>
    <p class="container-title">Отзывы <span class="container-orange-title">Гостей</span></p>
    <section class="our reviews">
        <div class="reviews-container">
            <div ref="reviewsSlider" class="reviews-slider">
                <div class="slide">
                    <div class="review">
                        <div class="review-content">
                            <img src="@/assets/reviews/review_icon.png" alt="">
                            <p class="review-text">„Огромная благодарность мастер Алине за&nbsp;релакс.“</p>
                        </div>
                        <div class="review-author">
                            <h2 class="author-name">Антон</h2>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="review">
                        <div class="review-content">
                            <img src="@/assets/reviews/review_icon.png" alt="">
                            <p class="review-text">„Огромная благодарность мастер Алине за&nbsp;релакс.“</p>
                        </div>
                        <div class="review-author">
                            <h2 class="author-name">Антон</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form action="" target="_blank">
        <button class="container-background-button">Оставить отзыв</button>
    </form>
</template>

<style scoped>

.reviews {
    margin-bottom: -3rem;
}

.reviews button {
    visibility: collapse;
}

.reviews-slider {
    width: 60%;
    touch-action: none;
    margin: 20px auto;
}

.slider img {
    display: block;
    margin: auto;
}

.review {
    padding-left: 10px;
    padding-right: 10px;
}
.review-content {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 100px 30px 30px 100px;
}
.review-content img {
    width: 20%;
}

.author-name {
    font-size: calc(.4em + .8vw);
    padding-left: 0.6em; /* Используем em */
    text-align: left;
}

.review-text {
    color: black;
    font-size: calc(.5em + .8vw);
    font-weight: 500;
    padding-left: 2.5em; /* Используем em */
    padding-right: 1.25em; /* Используем em */
}

@media (max-width: 455px) {
    .reviews-slider {
        width: auto;
    }
}

</style>