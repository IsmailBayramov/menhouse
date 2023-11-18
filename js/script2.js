let popupBg = document.querySelector(".popup__bg");
let popup = document.querySelector(".popup");
let openPopupButtons = document.querySelectorAll(".open-popup");
let closePopupButton = document.querySelector(".close-popup");

openPopupButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();
    popupBg.classList.add("active");
    popup.classList.add("active");
  });
});

closePopupButton.addEventListener("click", () => {
  popupBg.classList.remove("active");
  popup.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target === popupBg) {
    popupBg.classList.remove("active");
    popup.classList.remove("active");
  }
});

let popupBg2 = document.querySelector(".popup__bg2");
let popup2 = document.querySelector(".popup2");
let openPopupButtons2 = document.querySelectorAll(".button_will_respond_ozn");
let closePopupButton2 = document.querySelector(".close-popup2");

openPopupButtons2.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();
    popupBg2.classList.add("active");
    popup2.classList.add("active");
  });
});

closePopupButton2.addEventListener("click", () => {
  popupBg2.classList.remove("active");
  popup2.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target === popupBg2) {
    popupBg2.classList.remove("active");
    popup2.classList.remove("active");
    console.log("Me");
  }
});

const sidebars = {
  1: {
    el: $("#sidebarMenu1"),
    open: false,
  },
  2: {
    el: $("#sidebarMenu2"),
    open: false,
  },
};

$("#sidebarMenu1").animate({ left: "-150px" }, 10);
$("#sidebarMenu2").animate({ left: "-150px" }, 10);

function openSidebar(sb) {
  sidebars[sb].open = true;
  sidebars[sb].el.animate({ left: "0" }, 100);
}

function closeSidebar(sb) {
  sidebars[sb].open = false;
  sidebars[sb].el.animate({ left: "-150px" }, 100);
}
let otherSidebar = 0;
async function toggleSidebar(sb) {
  otherSidebar = sb === 1 ? 2 : 1;
  console.log(sidebars[sb].el);
  if (sidebars[sb].open) {
    console.log("if");
    await closeSidebar(sb);
  } else {
    console.log("else");
    await closeSidebar(otherSidebar);
    await openSidebar(sb);
  }
}

$("#openSidebarMenu1").click(() => toggleSidebar(1));
$("#openSidebarMenu2").click(() => toggleSidebar(2));

$(document).ready(function ($) {
  // Клик по ссылке "Закрыть".
  $(".popup-close").click(function () {
    $(this).parents(".popup-fade").fadeOut();
    return false;
  });

  // Закрытие по клавише Esc.
  $(document).keydown(function (e) {
    if (e.keyCode === 27) {
      e.stopPropagation();
      $(".popup-fade").fadeOut();
    }
  });

  // Клик по фону, но не по окну.
  $(".popup-fade").click(function (e) {
    if ($(e.target).closest(".popup").length == 0) {
      $(this).fadeOut();
    }
  });
});

// Получаем модальное окно
var modal = document.getElementById("modal");

// Получаем кнопку открытия окна
var openBtn = document.getElementById("open");

// Получаем элемент <span> для закрытия окна
var closeBtn = document.getElementsByClassName("close")[0];

// При клике на <span> (x) - скрываем окно
closeBtn.onclick = function () {
  modal.style.display = "none";
};

// При клике за пределами окна - скрываем его
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
