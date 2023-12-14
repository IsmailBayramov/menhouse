const sizeForBurger = 550

export const scrollToTop = () => {
  const burgerMenu = document.querySelector('.burger-menu');
  const menu = document.querySelector('.menu');
  const screenWidth = window.innerWidth;

  if (screenWidth <= sizeForBurger && getComputedStyle(menu).display === 'flex') {
    menu.style.display = 'none';
    burgerMenu.classList.remove('active');
  }
  
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Добавляет плавную анимацию прокрутки
  });
};

export const toggleMenu = () => {
  const burgerMenu = document.querySelector('.burger-menu');
  const menu = document.querySelector('.menu');
  const currentDisplay = getComputedStyle(menu).display;

  burgerMenu.classList.toggle('active');
  menu.style.display = currentDisplay === 'none' ? 'flex' : 'none';
};