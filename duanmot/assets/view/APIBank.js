'use strict';
const container = document.getElementById('container');
const bankSelect = document.getElementById('bankOptions');
const input = document.getElementById('input');
const bin = document.getElementById('bin');
const showData = async function (e) {
  // e.preventDefault();
  try {
    const response = await fetch('https://api.vietqr.io/v2/banks');
    const res = await fetch('https://provinces.open-api.vn/api/');
    const results = await res.json();
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
        choose.preventDefault();
        const nameShort = choose.target.value;
        console.log(`${nameShort} ${name}`);
        input.value = `${nameShort} ${name}`;
        bin.value = bank.bin;
      });
    });
    results.forEach((information) => {});
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};
const focus = function () {
  // Hiển thị
  bankOptions.style.display = 'block';
};
const blur = function () {
  // Ẩn
  bankOptions.style.display = 'none';
};

input.addEventListener('focus', focus);
// input.addEventListener('blur', blur);
window.addEventListener('load', showData);
// geolocation
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(
    function (postion) {
      const { latitude } = postion.coords;
      const { longtitude } = postion.coords;
      console.log(postion);
    },
    function () {
      alert('Không thể lấy được vị trí của bạn');
    }
  );
}
