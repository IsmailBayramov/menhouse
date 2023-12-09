<template>
  <footer class="footer-container">
    <div class="footer-content">
      <div class="column">
        <img src="../../assets/logo.png" alt="" class="footer-logo">
      </div>
      <div class="column">
        <p>Спа салон для&nbsp;независимых и&nbsp;сильных мужчин</p>
        <a href="tel:+7 912 512 0016"><button class="column-button">Записаться</button></a>
      </div>
      <div class="column">
        <p>Правила посещения</p>
        <a href="https://apple.com" target="_blank"><button class="column-button">Ознакомиться</button></a>
      </div>
      <div class="column">
        <p>Мы в&nbsp;социальных сетях</p>
        <div class="column-buttons">
          <a href="https://apple.com" target="_blank"><img src="../../assets/footer/icon-whatsapp.png" alt="" class="column-link-button"></a>
          <a href="https://apple.com" target="_blank"><img src="../../assets/footer/icon-instagram.png" alt="" class="column-link-button"></a>
          <a href="https://apple.com" target="_blank"><img src="../../assets/footer/icon-vk.png" alt="" class="column-link-button"></a>
          <a href="https://apple.com" target="_blank"><img src="../../assets/footer/icon-telegram.png" alt="" class="column-link-button"></a>
        </div>
      </div>
    </div>
    <p>2023 &copy; Все права защищены.</p>
  </footer>
</template>

<style scoped>
a {
  width: fit-content;
}

.footer-container {
  font-size: calc(.5em + .5vw);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.footer-container p {
  color: rgb(252, 252, 252);
}

.footer-content {
  padding: 2em 0 4em 0;
  display: flex;
  background-color: #0f0f0f;
  width: 100%;
}

.column {
  text-align: left;
  flex: 1;
  display: flex;
  flex-direction: column;
  margin-right: 2vw;
}

.column:first-child {
  margin-left: 3vw;
}

.column-buttons {
  flex-direction: row;
}

.column-button {
  color: white;
  padding: 10px 20px 10px 20px;
  background-color: #ff320d;
  max-width: fit-content;
  border: none;
  border-radius: 10px;
}

.column-button:hover {
  background-color: rgb(168, 34, 11);
}

.column-link-button {
  padding: 0 5px 0 5px;
  width: 2.3em;
  pointer-events: all;
  max-width: fit-content;
}

.column-link-button:hover {
  filter: brightness(0.6); 
}

.footer-logo {
  margin-left: 1em;
  margin-top: 1.1em;
  max-width: 14em; /* Адаптивная ширина */
  object-fit: contain;
  height: auto; /* Сохранение пропорций */
}

@media (max-width: 550px) {
  .footer-container {
    font-size: calc(.8em + .5vw);
  }

  .footer-container p {
    text-align: center;
    max-width: 80vw;
  }

  .footer-content {
    flex-direction: column;
  }

  .footer-logo {
    margin-left: 0;
    width: 50vw;
  }

  .column {
    align-items: center;
  }

  .column:nth-child(n+2) {
    padding-top: 15px;
  }
  
}
</style>
  