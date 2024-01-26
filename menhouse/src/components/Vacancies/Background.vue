<template>    
    <div class="background">
      <img src="@/assets/logo.png" alt="body_image" class="container-background-logo">
      <p class="background-title">С НАМИ <span>Приятно</span> РАБОТАТЬ</p>
    </div>
</template>

<style scoped>
.background {
  background: url("@/assets/vacancies/background.png") no-repeat center center;
  background-size: cover; /* или background-size: 100% 100%; */
  position: relative;
  height: 20em;
  margin-top: calc(1em + 2.5vw);
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.container-background-logo {
  max-width: calc(8em + 20vw); /* Адаптивная ширина */
  object-fit: contain;
  height: auto; /* Сохранение пропорций */
}


.background-title {
    color: white;
    font-weight: 500;
    font-size: calc(.8em + .5vw);
    max-width: fit-content;
}

.background-title span {
    color: #ff320d;
    font-family: 'Sweet Mavka';
    font-size: calc(1em + 1vw);
    padding: 0 5px;
}

@media (max-width: 550px) {
    .background {
        margin-top: 0;
    }
}
</style>