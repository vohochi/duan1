// Lấy vị trí của bạn
const myPosition = await navigator.geolocation.getCurrentPosition();

// Lấy vị trí của khách hàng
const customerPosition = {
  latitude: 10.770493,
  longitude: 106.665046,
};

// Chuyển đổi vị trí thành tọa độ
const myCoordinates = {
  latitude: myPosition.latitude,
  longitude: myPosition.longitude,
};
const customerCoordinates = {
  latitude: customerPosition.latitude,
  longitude: customerPosition.longitude,
};

// Sử dụng API Google Maps để tính khoảng cách
const distance = google.maps.geometry.spherical.distanceBetween(
  myCoordinates,
  customerCoordinates
);

// Chuyển đổi khoảng cách thành km
const distanceInKm = distance.toKm();

// In ra khoảng cách
console.log(distanceInKm); // 10.77 km
