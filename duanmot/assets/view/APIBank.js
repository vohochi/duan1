'use strict';
// https://provinces.open-api.vn/api/?depth=3
const container = document.getElementById('container');
const bankSelect = document.getElementById('bankOptions');
const input = document.getElementById('input');
const bin = document.getElementById('bin');
const city = document.getElementById('city');
const village = document.getElementById('village');
const district = document.getElementById('district');
const addressDetail = document.getElementById('addressDetail');
const zipCode = document.getElementById('zipCode');
const state = document.getElementById('state');
const nameCard = document.getElementById('nameCard');
const ccv = document.getElementById('ccv');
const exp = document.getElementById('exp');
const delivery = document.getElementById('delivery');
const submit = document.getElementById('submit');
const success = document.getElementsByClassName('success');
const optionVillage = document.getElementById('optionVillage');
const optionDistrict = document.getElementById('optionDistrict');
const small = document.querySelectorAll('small');
console.log(small);

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

      option.addEventListener('click', function (choose) {
        const nameShort = choose.target.value;
        // console.log(`${nameShort} ${name}`);
        input.value = `${nameShort} ${name}`;
        bin.value = bank.bin;
        bankSelect.style.display = 'none';
        bin.addEventListener('keyup', function (e) {
          // Kiểm tra xem input có chứa 10 số hay không
          if (e.target.value.split('').length === 16) {
            // Kích hoạt sự kiện
            nameCard.value = 'Võ Hồ Chí';
            ccv.value = 826;
            exp.value = 2028;
            console.log('Đã nhập đủ 10 số');
          } else console.log('chưa đủ');
        });
      });
    });
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};
const showCity = async function getLocationData() {
  const res = await fetch('https://provinces.open-api.vn/api/?depth=3');
  const results = await res.json();
  try {
    results.forEach((information) => {
      const optionCity = document.getElementById('optionCity');
      const optionVillage = document.getElementById('optionVillage');
      let option = document.createElement('option');
      option.textContent = information.name;
      optionCity.appendChild(option);
      option.addEventListener('click', function (choose) {
        city.value = choose.target.textContent;
        const fee = document.getElementById('fee');
        zipCode.value = information.phone_code;
        const random = Math.floor(Math.random() * (40000 - 10000 + 1)) + 10000;
        const random1 = random.toLocaleString();
        console.log(random1);
        fee.textContent = `${random1} VNĐ`;
        optionCity.style.display = 'none';
        state.value = 'Việt Nam';
        information.districts.forEach((villageAPI) => {
          const option1 = document.createElement('option');
          option1.textContent = villageAPI.name;
          optionVillage.appendChild(option1);
          option1.addEventListener('click', function (choose) {
            village.value = choose.target.textContent;
            optionVillage.style.display = 'none';
            villageAPI.wards.forEach((ward) => {
              const option2 = document.createElement('option');
              option2.textContent = ward.name;
              optionDistrict.appendChild(option2);
              option2.addEventListener('click', function (choose) {
                district.value = choose.target.textContent;
                optionDistrict.style.display = 'none';
              });
            });
          });
        });
      });
    });
  } catch (error) {
    console.error('Có lỗi xảy ra khi lấy dữ liệu');
  }
};

// const showVillage = async function () {
//   const res = await fetch('https://provinces.open-api.vn/api/?depth=3');
//   const results = await res.json();
//   try {
//     results.forEach((information) => {
//       const optionVillage = document.getElementById('optionVillage');
//       let option = document.createElement('option');
//       optionVillage.appendChild(option);
//       information.districts.forEach((e) => {
//         option.textContent = e.name;
//         const villageApi = e.name;
//         option.addEventListener('click', function (choose) {
//           village.value = e.name;
//           optionVillage.style.display = 'none';
//         });
//       });
//     });
//   } catch (error) {
//     console.error('Có lỗi xảy ra khi lấy dữ liệu');
//   }
// };
// const showDistrict = async function () {
//   const res = await fetch('https://provinces.open-api.vn/api/?depth=3');
//   const results = await res.json();
//   try {

//     results.forEach((information) => {
//       const optionDistrict = document.getElementById('optionDistrict');
//       let option = document.createElement('option');
//       optionDistrict.appendChild(option);
//       information.districts.map((item1) => {
//         return item1.wards.filter((item2) => {
//           option.textContent = item2.name;
//           option.addEventListener('click', function (choose) {
//             district.value = choose.target.textContent;
//             optionDistrict.style.display = 'none';
//           });
//         });
//       });
//     });
//   } catch (error) {
//     console.error('Có lỗi xảy ra khi lấy dữ liệu');
//   }
// };

Promise.all([showCity(), showData()]);

// event
input.addEventListener('focus', function () {
  // Hiển thị
  bankOptions.style.display = 'block';
});
city.addEventListener('focus', function () {
  // Hiển thị
  optionCity.style.display = 'block';
});
village.addEventListener('focus', function () {
  // Hiển thị
  optionVillage.style.display = 'block';
});
district.addEventListener('focus', function () {
  // Hiển thị
  optionDistrict.style.display = 'block';
});
//🐞🐞🐞🐞🐞🐞🐞🐞🐞🐞🐞
// submit.addEventListener('click', function (e) {
//   // e.preventDefault();
//   success.style.display = 'block';
//   console.log('xinchao');
// });
// geolocation
// event  checkValid
let i = 0;
let valid = true;
const checkRequired = (inputArr) => {
  inputArr.forEach((input) => {
    if (input.value.trim() === '') {
      small[i++].style.display = 'block';
      console.log('check');
      valid = false;
      return container;
    } else {
      input = small[i++].remove();
    }
  });
};

container.addEventListener('submit', (submit) => {
  checkRequired([village, city, district, input, addressDetail]);
  if (!valid) {
    submit.preventDefault();
  }
});
