export default function addThemeChanger() {
  const theme__btn = document.querySelector(".theme__change");
  const iElement = document.querySelector("i");

  const header = document.querySelector(".header");
  const portfolio__items = document.querySelectorAll(".portfolio__item");
  const main__title = document.querySelector(".main__title");
  const body = document.querySelector("body");
  const footer = document.querySelector(".footer");

  theme__btn.addEventListener("click", function () {
    console.log(iElement);
    iElement.classList.toggle("fa-moon");
    iElement.classList.toggle("fa-sun");
    //iElement.classList.toggle("light");
    theme__btn.classList.toggle("light");

    console.log(theme__btn.children[1].innerHTML);

    if (theme__btn.children[1].innerHTML === "Тёмная тема") {
      theme__btn.children[1].innerHTML = "Светлая тема";
    } else {
      theme__btn.children[1].innerHTML = "Тёмная тема";
    }

    //Выше всё про усправление самой кнопкой.
    //Ниже всё про изменение страницы

    header.classList.toggle("header__dark");
    main__title.classList.toggle("main__title--dark");
    body.classList.toggle("body__dark");
    footer.classList.toggle("footer__dark");

    portfolio__items.forEach((portfolio__item) =>
      portfolio__item.classList.toggle("portfolio__item--dark")
    );
  });
}
