'use strict';

// prettier-ignore
// const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

const form = document.querySelector('.form');
const containerWorkouts = document.querySelector('.workouts');
const inputType = document.querySelector('.form__input--type');
const inputDistance = document.querySelector('.form__input--distance');
const inputDuration = document.querySelector('.form__input--duration');
const inputCadence = document.querySelector('.form__input--cadence');
const inputElevation = document.querySelector('.form__input--elevation');
const cart_chart_app = document.getElementById('card chat-app');
const messenger = document.getElementById('messenger');
console.log(messenger);

if (navigator.geolocation)
  navigator.geolocation.getCurrentPosition(
    function (position) {
      const { latitude } = position.coords;
      const { longitude } = position.coords;
      console.log(`https://www.google.com/maps/@${latitude}, ${longitude}`);
      const coords = [latitude, longitude];

      const map = L.map('map').setView(coords, 13);

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker(coords)
        .addTo(map)
        .bindPopup('Vị trí của bạn.<br> Đang ở đây')
        .openPopup();
    },
    function (unsuccess) {
      alert('không lấy được vị trí');
    }
  );
let clicked = false;

const mess = function () {
  if (!clicked) {
    // Thực hiện hành động lần click đầu
    console.log('Đã click lần 1');
    cart_chart_app.style.display = 'block';

    clicked = true;
  } else {
    // Hoàn tác lại khi click lần 2
    console.log('Click lần 2, hoàn tác lại');
    cart_chart_app.style.display = 'none';

    clicked = false;
  }
};
messenger.addEventListener('click', mess);
