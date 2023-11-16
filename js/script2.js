let popupBg = document.querySelector('.popup__bg');
let popup = document.querySelector('.popup');
let openPopupButtons = document.querySelectorAll('.open-popup');
let closePopupButton = document.querySelector('.close-popup');

openPopupButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        popupBg.classList.add('active');
        popup.classList.add('active');
    })
});

closePopupButton.addEventListener('click',() => {
    popupBg.classList.remove('active');
    popup.classList.remove('active');
});

document.addEventListener('click', (e) => {
    if(e.target === popupBg) {
        popupBg.classList.remove('active');
        popup.classList.remove('active');
    }
});


let popupBg2 = document.querySelector('.popup__bg2');
let popup2 = document.querySelector('.popup2');
let openPopupButtons2 = document.querySelectorAll('.button_will_respond_ozn');
let closePopupButton2 = document.querySelector('.close-popup2');

openPopupButtons2.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        popupBg2.classList.add('active');
        popup2.classList.add('active');
    })
});

closePopupButton2.addEventListener('click',() => {
    popupBg2.classList.remove('active');
    popup2.classList.remove('active');
});

document.addEventListener('click', (e) => {
    if(e.target === popupBg2) {
        popupBg2.classList.remove('active');
        popup2.classList.remove('active');
    }
});