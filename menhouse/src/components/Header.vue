<script setup>

// Скрывает Header при скроллинге
window.onscroll = function() {
  const currentScrollPos = window.pageYOffset;

  if (currentScrollPos <= 50) {
    document.querySelector(".header-text").classList.remove("header-text-hidden");
  } else {
    document.querySelector(".header-text").classList.add("header-text-hidden");
  }
};

// Обработчик изменения размера окна
window.addEventListener('resize', () => {
  const menu = document.querySelector('.menu');
  const burgerMenu = document.querySelector('.burger-menu');
  const screenWidth = window.innerWidth;

  // Если ширина экрана больше 450px и меню видимо, скрываем его
  if (screenWidth > 450 && getComputedStyle(menu).display === 'none') {
    menu.style.display = 'flex';
  }
  if (screenWidth <= 450 && getComputedStyle(menu).display === 'flex') {
    burgerMenu.classList.remove('active');
    menu.style.display = 'none';
  }
});

const scrollToTop = () => {
  const burgerMenu = document.querySelector('.burger-menu');
  const menu = document.querySelector('.menu');
  const screenWidth = window.innerWidth;

  if (screenWidth <= 450 && getComputedStyle(menu).display === 'flex') {
    menu.style.display = 'none';
    burgerMenu.classList.remove('active');
  }
  
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Добавляет плавную анимацию прокрутки
  });
};

const toggleMenu = () => {
  const burgerMenu = document.querySelector('.burger-menu');
  const menu = document.querySelector('.menu');
  const currentDisplay = getComputedStyle(menu).display;

  burgerMenu.classList.toggle('active');
  menu.style.display = currentDisplay === 'none' ? 'flex' : 'none';
};
</script>

<template>
  <header>
    <div class="header-top">
      <span class="header-text">
        ДЛЯ <span class="header-text-orange">НАСТОЯЩИХ</span> МУЖЧИН
      </span>
      <nav>
        <div class="menu">
          <a @click="scrollToTop">Men<span class="header-text-orange">house</span></a>
          <a href="./models">Модели</a>
          <a href="./programms">Программы</a>
          <a href="./apartments">Апартаменты</a>
          <a href="./contacts">Контакты</a>
          <a href="./certificates">Сертификаты</a>
          <a href="./vacancies">Вакансии</a>
        </div>
        <div class="burger-menu" @click="toggleMenu">
          <div class="burger-line"></div>
          <div class="burger-line"></div>
          <div class="burger-line"></div>
        </div>
      </nav>
    </div>
  </header>
</template>

<style scoped>
.header-top {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  flex-direction: column;
  text-align: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  padding: 10px;
  background: #0f0f0f;
  color: white;
  z-index: 1000;
}
.header-text {
  font-size: calc(.5em + 1.5vw);
  font-weight: 700;
  border-bottom: 1px solid #474747;
  padding-bottom: 10px;
}

.header-text-hidden {
  display: none;
}

.header-text-orange {
  color: #ff320d;
}

.header-logo {
  width: 10vw;
}

nav {
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 5px;
  margin-top: 15px;
}

nav a {
  color: white;
  text-decoration: none;
  margin-right: 3vw;
  cursor: pointer;
  font-size: calc(.5em + .5vw);
}

nav a:last-child {
  margin-right: 0;
}

nav a:hover {
  color: rgb(129, 129, 129);
}

.menu {
  display: flex;
}

.burger-menu {
  display: none; /* По умолчанию скрыто на широких экранах */
  cursor: pointer;
}

.burger-line {
  width: 25px;
  height: 3px;
  background-color: white;
  margin: 5px 0;
  transition: transform 0.3s; /* Добавляем анимацию для плавного изменения */
}

.burger-menu.active .burger-line:nth-child(1) {
  transform: rotate(-45deg) translate(-5px, 6px);
}

.burger-menu.active .burger-line:nth-child(2) {
  opacity: 0;
}

.burger-menu.active .burger-line:nth-child(3) {
  transform: rotate(45deg) translate(-5px, -6px);
}

@media (max-width: 450px) {
  .header-text {
    display: none;
  }
  .menu {
    display: none; /* Скрываем основное меню на узких экранах */
    flex-direction: column;
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    background-color: #0f0f0f;
    text-align: center;
  }

  .menu a {
    margin: 10px 0;
  }

  .menu a:last-child {
    margin-bottom: 15px;
  }

  .burger-menu {
    display: block; /* Показываем бургер-иконку на узких экранах */
  }

  nav {
    justify-content: flex-end;
    margin: 0;
    padding: 0;
  }

  nav a {
    font-size: calc(.5em + 2vw);
  }
}

</style>
