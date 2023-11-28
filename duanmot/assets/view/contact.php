<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" type="image/png" href="/icon.png" />
  <!-- <link rel="stylesheet" href="../config/styles.css"> -->

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../config/contact.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

  <script defer src="geolocation.js"></script>
  <title>mapty // Map your workouts</title>
</head>

<body>
  <div class="row">
    <div class="col-lg-4">
      <img src="../img/dog-img.jpg" alt="" width="140" height="140">

      <h2 class="fw-normal">Mentor</h2>
      <p>Nội dung giới thiệu</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="../img/dog-img.jpg" alt="" width="140" height="140">
      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>

      <h2 class="fw-normal">Mentor</h2>
      <p>Nội dung</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="../img/dog-img.jpg" alt="" width="140" height="140">

      <h2 class="fw-normal">Mentor</h2>
      <p>Nội dung</p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div><!-- /.col-lg-4 -->
  </div>

  <!-- /END THE FEATURETTES -->

  </div>
  <h1 class="address">Địa chỉ của chúng tôi</h1>
  <div class="map-over">

    <div class="sidebar">
      <img src="../img/logo.png" alt="Logo" class="logo" />

      <ul class="workouts">
        <form class="form hidden">
          <div class="form__row">
            <label class="form__label">Type</label>
            <select class="form__input form__input--type">
              <option value="running">Running</option>
              <option value="cycling">Cycling</option>
            </select>
          </div>
          <div class="form__row">
            <label class="form__label">Distance</label>
            <input class="form__input form__input--distance" placeholder="km" />
          </div>
          <div class="form__row">
            <label class="form__label">Duration</label>
            <input class="form__input form__input--duration" placeholder="min" />
          </div>
          <div class="form__row">
            <label class="form__label">Cadence</label>
            <input class="form__input form__input--cadence" placeholder="step/min" />
          </div>
          <div class="form__row form__row--hidden">
            <label class="form__label">Elev Gain</label>
            <input class="form__input form__input--elevation" placeholder="meters" />
          </div>
          <button class="form__btn">OK</button>
        </form>

      </ul>

    </div>

    <div id="map"></div>

  </div>
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Dịch vụ</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cash-stack"
            viewBox="0 0 16 16">
            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
            <path
              d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
          </svg>
        </div>
        <div>
          <h3>Giá cả</h3>
          <p>Cung cấp đa dạng sách giáo khoa, tiểu thuyết, truyện tranh với giá cả phải chăng, dao động từ 50.000 đồng
            đến 300.000 đồng một cuốn. Áp dụng nhiều chính sách giảm giá và khuyến mại hấp dẫn.</p>
          <a href="#" class="btn btn-success">
            Chi tiết
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
            <path
              d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
            <path
              d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
          </svg>
        </div>
        <div>
          <h3>Hổ trợ</h3>
          <p>Cung cấp dịch vụ vận chuyển nhanh trong ngày, phủ sóng toàn thành phố với mức phí dao động 25.000 đồng -
            50.000 đồng một đơn hàng. Thường xuyên áp dụng chính sách ưu đãi về phí ship</p>
          <a href="#" class="btn btn-success">
            Chi tiết
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-truck"
            viewBox="0 0 16 16">
            <path
              d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
          </svg>
        </div>
        <div>
          <h3>Vận chuyển</h3>
          <p>Cung cấp dịch vụ vận chuyển nhanh trong ngày, phủ sóng toàn thành phố với mức phí dao động 25.000 đồng -
            50.000 đồng một đơn hàng. Thường xuyên áp dụng chính sách ưu đãi về phí ship</p>
          <a href="#" class="btn btn-success">
            chi tiết
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="my-5">
    <div class="p-5 text-center bg-body-tertiary">
      <div class="container py-5">
        <h1 class="text-body-emphasis">Sách hay là nguồn tri thức, là người bạn tâm giao, là người thầy chỉ đường dẫn
          lối cho chúng ta.

        </h1>
        <img class="profile-img" src="../img/dog-img.jpg" alt="">
        <p class="col-lg-8 mx-auto lead">
          Sách hay, Bình Dương Việt Nam ❤️
        </p>
        <p class="col-lg-8 mx-auto lead">
          Nhà tài trợ
        </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-sm-12">
            <img src="../img/techcrunch.png" height="30px" alt="">
          </div>
          <div class="col-lg-3  col-sm-12">
            <img src="../img/mashable.png" alt="" height="30px">
          </div>
          <div class="col-lg-3  col-sm-12">
            <img src="../img/bizinsider.png" alt="" height="30px">
          </div>
          <div class="col-lg-3  col-sm-12">
            <img src="../img/techcrunch.png" alt="" height="30px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="snippetContent">

    <div class="container">
      <div class="row clearfix">
        <div class="col-lg-12">
          <div class="card chat-app" id="card chat-app">
            <div id="plist" class="people-list">
              <div class="input-group">
                <div class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-search"></i></span>
                </div> <input type="text" class="form-control" placeholder="Search...">
              </div>
              <ul class="list-unstyled chat-list mt-2 mb-0">
                <li class="clearfix"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                  <div class="about">
                    <div class="name">Phin</div>
                    <div class="status"> <i class="fa fa-circle offline"></i> Hoạt động 7 phút trước</div>
                  </div>
                </li>
                <li class="clearfix active"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                  <div class="about">
                    <div class="name">Chí</div>
                    <div class="status"> <i class="fa fa-circle online"></i> online</div>
                  </div>
                </li>
                <li class="clearfix"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                  <div class="about">
                    <div class="name">Bảo</div>
                    <div class="status"> <i class="fa fa-circle online"></i> Đang hoạt động</div>
                  </div>
                </li>
                <li class="clearfix"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                  <div class="about">
                    <div class="name">Toàn</div>
                    <div class="status"> <i class="fa fa-circle offline"></i> Hoạt động 10H trước</div>
                  </div>
                </li>
                <li class="clearfix"> <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                  <div class="about">
                    <div class="name">Sơn</div>
                    <div class="status"> <i class="fa fa-circle online"></i> Đang hoạt động</div>
                  </div>
                </li>
                <li class="clearfix"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                  <div class="about">
                    <div class="name">Sơn</div>
                    <div class="status"> <i class="fa fa-circle offline"></i> Hoạt động 5h trước</div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="chat">
              <div class="chat-header clearfix">
                <div class="row">
                  <div class="col-lg-6"> <a href=data-toggle="modal" data-target="#view_info">
                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar"> </a>
                    <div class="chat-about">
                      <h6 class="m-b-0">Chí</h6> <small>🤖Đang hoạt động</small>
                    </div>
                  </div>
                  <div class="col-lg-6 hidden-sm text-right"> <a href=class="btn btn-outline-primary"><i
                        class="fa fa-close"></i></a> </div>
                </div>
              </div>
              <div class="chat-history">
                <ul class="m-b-0">
                  <li class="clearfix">
                    <div class="message-data text-right"> <span class="message-data-time">10:10 AM, Today</span> <img
                        src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar"></div>
                    <div class="message other-message float-right">Tôi có thể giúp gì được cho bạn <div>
                  </li>
                  <li class="clearfix">
                    <div class="message-data"> <span class="message-data-time">10:12 AM, Today</span></div>
                    <div class="message my-message">Tôi cần mua một cuốn sách</div>
                  </li>
                  <li class="clearfix">
                    <div class="message-data"> <span class="message-data-time">10:15 AM, Today</span></div>
                    <div class="message my-message">...
                    </div>
                  </li>
                </ul>
              </div>
              <div class="chat-message clearfix">
                <div class="input-group mb-0">
                  <div class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-send"></i></span>
                  </div> <input type="text" class="form-control" placeholder="Enter text here...">
                </div>

              </div>

            </div>

          </div>

        </div>
      </div>

    </div>
    <div class="frame" style="background-image: url('https://accgroup.vn/assets/images/Frame_icon.svg');">
      <a id="messenger" target="_blank" rel="nofollow noopener noreferrer" aria-label="Messenger">
        <img src="https://accgroup.vn/assets/images/facebook.svg" title="Messenger" alt="Messenger" width="60px"
          height="45px">
        <div id="point_mess">1</div>
      </a>
      <a target="_blank" rel="nofollow noopener noreferrer" aria-label="WhatsApp">
        <img src="https://accgroup.vn/assets/images/WhatsApp.svg" title="WhatsApp" alt="WhatsApp" width="60px"
          height="45px">
      </a>
      <a target="_blank" rel="nofollow noopener noreferrer" aria-label="Viber">
        <img src="https://accgroup.vn/assets/images/viber-icon.svg" title="Viber" alt="Viber" width="60px"
          height="45px">
      </a>
      <a id="chat-button" aria-label="Chat Ngay">
        <img src="https://accgroup.vn/assets/images/tawkto.svg" title="Chat Ngay" alt="Chat Ngay" width="60px"
          height="45px">
      </a>
    </div>
  </div>

</body>

</html>