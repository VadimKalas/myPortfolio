export default function addScrollButton() {
  // Управление кнопкой прокрутки страницы header__btn
  const button = document.querySelector(".header__btn");

  //Получаем числовое значение высоты элемента header__row и прокручиваем страницу на это значение
  button.addEventListener("click", function (event) {
    const destination = document.querySelector(".header__row");
    let destinationHeight = window.getComputedStyle(destination).height;
    // Удаляем 'px' с конца, чтобы остались только цифры
    let destinationHeightNum = Number(destinationHeight.slice(0, -2));
    window.scrollTo(0, destinationHeightNum);
  });
}
