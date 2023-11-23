'use strict';
// https://provinces.open-api.vn/api/?depth=2
const container = document.getElementById('container');
const bankSelect = document.getElementById('bankOptions');
const input = document.getElementById('input');
const bin = document.getElementById('bin');
const city = document.getElementById('city');
const village = document.getElementById('village');
const district = document.getElementById('district');
const addressDetail = document.getElementById('addressDetail');
const zipCode = document.getElementById('zipCode');

// const res = await fetch('https://provinces.open-api.vn/api/');
const showData = async function (e) {
  // e.preventDefault();
  try {
    const response = await fetch('https://api.vietqr.io/v2/banks');
    const { data } = await response.json();
    data.forEach((bank) => {
      const inputBox = document.querySelector('.inputBox');
      const option = document.createElement('option');
      const logo = document.createElement('img');
      const div = document.createElement('div');
      let name;
      logo.value = bank.logo;
      logo.setAttribute('src', bank.logo);
      option.textContent = bank.shortName;
      name = bank.name;
      div.appendChild(logo);
      div.appendChild(option);
      bankSelect.appendChild(div);

      // bankSelect.appendChild(option);
      //   console.log(e.val);
      option.addEventListener('click', function (choose) {
        const nameShort = choose.target.value;
        // console.log(`${nameShort} ${name}`);
        input.value = `${nameShort} ${name}`;
        bin.value = bank.bin;
        bankSelect.style.display = 'none';
      });
    });
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};
const showCity = async function getLocationData() {
  try {
    const res = await fetch('https://provinces.open-api.vn/api/?depth=2');
    const results = await res.json();
    results.forEach((information) => {
      const optionCity = document.getElementById('optionCity');
      const optionVillage = document.getElementById('optionVillage');
      let option = document.createElement('option');
      // zipCode = information.name;

      option.textContent = information.name;
      optionCity.appendChild(option);
      option.addEventListener('click', function (choose) {
        city.value = choose.target.textContent;
        zipCode.value = information.phone_code;
        optionCity.style.display = 'none';
        // city.value = `${choose.textContent}`;
      });
    });
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};
const showVillage = async function () {
  try {
    const res = await fetch('https://provinces.open-api.vn/api/?depth=2');
    const results = await res.json();
    console.log(results);

    results.forEach((information) => {
      // console.log(information);
      const optionVillage = document.getElementById('optionVillage');
      let option = document.createElement('option');
      information.districts.forEach((e) => {
        option.textContent = information.name;
        optionVillage.appendChild(option);
        option.addEventListener('click', function (choose) {
          choose.preventDefault();
          village.value = choose.target.textContent;
          optionVillage.style.display = 'none';
          // city.value = `${choose.textContent}`;
        });
      });
    });
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};
const showDistrict = async function () {
  try {
    const res = await fetch('https://provinces.open-api.vn/api/');
    const results = await res.json();
    // console.log(results);

    results.forEach((information) => {
      const optionDistrict = document.getElementById('optionDistrict');
      let option = document.createElement('option');
      option.textContent = information.name;
      optionDistrict.appendChild(option);
      option.addEventListener('click', function (choose) {
        choose.preventDefault();
        district.value = choose.target.textContent;
        optionDistrict.style.display = 'none';
      });
    });
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};

Promise.all([showCity(), showData(), showVillage(), showDistrict()]);
const focus = function () {
  // Hiển thị
  bankOptions.style.display = 'block';
};
const blur = function () {
  // Ẩn
  bankOptions.style.display = 'none';
};
// event
// inputElements.forEach(function () {
//   inputElement.addEventListener('focus', handleFocus);
// });
const inputElements = [input, city, village, district];
inputElements.forEach((element) => {
  element.addEventListener('focus', focus);
});
inputElements.forEach((element) => {
  element.addEventListener('blur', blur);
});
// geolocation
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(
    function (position) {
      const { latitude } = position.coords;
      const { longtitude } = position.coords;
      console.log(latitude, longtitude);
    },
    function () {
      alert('Không thể lấy được vị trí của bạn');
    }
  );
}
