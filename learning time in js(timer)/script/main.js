//Элементы таймера
const hourElement = document.querySelector(".hours");
const minuteElement = document.querySelector(".minutes");
const secondElement = document.querySelector(".seconds");
const msElement = document.querySelector(".milliseconds");

//Кнопки
const startButton = document.querySelector(".start");
const stopButton = document.querySelector(".stop");
const pauseButton = document.querySelector(".pause");

//Слушатели
startButton.addEventListener("click", function () {
  clearInterval(interval);
  interval = setInterval(startTimer, 10);
});
pauseButton.addEventListener("click", function () {
  clearInterval(interval);
});
stopButton.addEventListener("click", function () {
  hour = 00;
  hourElement.innerText = "00";
  minute = 00;
  minuteElement.innerText = "00";
  second = 00;
  secondElement.innerText = "00";
  ms = 00;
  msElement.innerText = "00";
  clearInterval(interval);
});

//Переменные
let hour = 00;
let minute = 00;
let second = 00;
let ms = 00;
let interval;

function startTimer() {
  //миллисекунды
  ms++;
  if (ms === 0) {
    msElement.innerText = "00";
  }
  if (ms < 9) {
    msElement.innerText = "0" + ms;
  }
  if (ms > 9) {
    msElement.innerText = ms;
  }
  if (ms > 99) {
    second++;
    secondElement.innerText = "0" + second;
    ms = 0;
    msElement.innerText = 0 + ms;
  }
  //секунды
  if (second > 9) {
    secondElement.innerText = second;
  }
  if (second > 59) {
    minute++;
    minuteElement.innerText = "0" + minute;
    ms = 0;
    msElement.innerText = "0" + ms;
    second = 0;
    secondElement.innerText = "0" + second;
  }
  //Минуты и часы
  if (minute > 9) {
    minuteElement.innerText = minute;
  }
  if (minute > 59) {
    hour++;
    hourElement.innerText = "0" + hour;
    minute = 0;
    minuteElement.innerText = "0" + minute;
    ms = 0;
    msElement.innerText = "0" + ms;
    second = 0;
    secondElement.innerText = "0" + second;
  }
}
