<style>
  form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
  }

  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
  }

  form.example button:hover {
    background: #0b7dda;
  }

  form.example::after {
    content: "";
    clear: both;
    display: table;
  }
          /* Mobile & tablet  */
@media (max-width: 1023px) {
}
/* tablet */
@media (min-width: 740px) and (max-width: 1023px) {
  .owl-item {
    width: 396px;
    padding: 16px 0;
  }
}
/* mobile */
@media (max-width: 739px) {
  .owl-item {
    float: unset;
    padding: 16px 0;
  }
} 
</style>

<body style="background-color: rgb(248, 242, 236);">
  <div class="overlay hidden"></div>
  <!-- mobile menu -->
  <div class="mobile-main-menu">
    <div class="drawer-header">
      <a href="">
        <div class="drawer-header--auth">
          <div class="_object">
            <img src="./assets/img/product/giayxah2.jpg" alt="">
          </div>
          <div class="_body">Đăng nhập
            <br>Nhận nhiều ưu đãi hơn
          </div>
        </div>
      </a>
    </div>
    <ul class="ul-first-menu">
      <li>
        <a href="">Đăng nhập</a>
      </li>
      <li>
        <a href="" class="abc">Đăng kí</a>
      </li>
    </ul>
    <!-- <ul class="ul-first-menu">
      <li>
        <a href="">Tài khoản của tôi</a>
      </li>
      <li>
        <a href="">Địạ chỉ của tôi</a>
      </li>
      <li>
        <a href="">Đơn mua</a>
      </li>
      <li>
        <a href="" class="list-like-noicte">Danh sách yêu thích</a>
        <span id="header__second__like--notice" class="header__second__like--notice">3</span>
      </li>
      <li>
        <a href="">Đăng xuất</a>
      </li> -->
    </ul>
    <div class="la-scroll-fix-infor-user">
      <div class="la-nav-menu-items">
        <div class="la-title-nav-items">
          <strong>Danh mục</strong>
        </div>
        <ul class="la-nav-list-items">
          <li class="ng-scope">
            <a href="">Trang chủ</a>
          </li>
          <li class="ng-scope">
            <a href="./intro.html">Giới thiệu</a>
          </li>
          <li class="ng-scope ng-has-child1">
            <a href="./Product.html">Sản phẩm <i class="fas fa-plus cong"></i> <i class="fas fa-minus tru hidden"></i></a>
            <ul class="ul-has-child1">
              <li class="ng-scope ng-has-child2">
                <a href="./Product.html">Tất cả sản phẩm <i class="fas fa-plus cong1" onclick="hienthi(1,`abc`)"></i> <i
                    class="fas fa-minus tru1 hidden" onclick="hienthi(1,`abc`)"></i></a>
                <ul class="ul-has-child2 hidden" id="abc">
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng đá</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Chạy</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Cầu lông</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng rổ</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Quần vợt</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bơi lội</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">GOLF</a>
                  </li>
                </ul>
              </li>
              <li class="ng-scope ng-has-child2">
                <a href="./Product.html">Quần áo <i class="fas fa-plus cong2" onclick="hienthi(2,`abc2`)"></i> <i
                    class="fas fa-minus tru2 hidden" onclick="hienthi(2,`abc2`)"></i></a>
                <ul class="ul-has-child2 hidden" id="abc2">
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng đá</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Chạy</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Cầu lông</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng rổ</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Quần vợt</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bơi lội</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">GOLF</a>
                  </li>
                </ul>
              </li>
              <li class="ng-scope ng-has-child2">
                <a href="./Product.html">Già dép<i class="fas fa-plus cong3" onclick="hienthi(3,`abc3`)"></i> <i
                    class="fas fa-minus tru3 hidden" onclick="hienthi(3,`abc3`)"></i></a>
                <ul class="ul-has-child2 hidden" id="abc3">
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng đá</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Chạy</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Cầu lông</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng rổ</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Quần vợt</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bơi lội</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">GOLF</a>
                  </li>
                </ul>
              </li>
              <li class="ng-scope ng-has-child2">
                <a href="./Product.html">Phụ kiện <i class="fas fa-plus cong4" onclick="hienthi(4,`abc4`)"></i> <i
                    class="fas fa-minus tru4 hidden " onclick="hienthi(4,`abc4`)"></i></a>
                <ul class="ul-has-child2 hidden" id="abc4">
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng đá</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Chạy</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Cầu lông</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bóng rổ</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Quần vợt</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">Bơi lội</a>
                  </li>
                  <li class="ng-scope">
                    <a href="./Product.html">GOLF</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="ng-scope">
            <a href="./news.html">Tin tức</a>
          </li>
          <li class="ng-scope">
            <a href="./contact.html">Liên hệ</a>
          </li>
        </ul>
      </div>
    </div>
    <ul class="mobile-support">
      <li>
        <div class="drawer-text-support">Hỗ trợ</div>
      </li>
      <li>
        <i class="fas fa-phone-square-alt footer__item-icon">HOTLINE: </i>
        <a href="tel:19006750">19006750</a>
      </li>
      <li>
        <i class="fas fa-envelope-square footer__item-icon">Email: </i>
        <a href="mailto:support@sapo.vn">support@gmail.vn</a>
      </li>
    </ul>
  </div>
  <!-- end mobile menu -->
  <!-- header -->
  <header class="header">
    <div class="container">
      <div class="top-link clearfix hidden-sm hidden-xs">
        <div class="row">
          <div class="col-6 social_link">
            <div class="social-title">Theo dõi: </div>
            <a href="https://www.facebook.com/zeroryo25/"><i class="fab fa-facebook" style="font-size: 24px; margin-right: 10px"></i></a>
            <a href=""><i class="fab fa-instagram" style="font-size: 24px; margin-right: 10px;color: pink;"></i></a>
            <a href=""><i class="fab fa-youtube" style="font-size: 24px; margin-right: 10px;color: red;"></i></a>
            <a href=""><i class="fab fa-twitter" style="font-size: 24px; margin-right: 10px"></i></a>
          </div>
          <div class="col-6 login_link">
            <ul class="header_link right m-auto">
              <li>
                <a href="./Login.html"><i class="fas fa-sign-in-alt mr-3"></i>Đăng nhập</a>
              </li>
              <li>
                <a href="./registration.html"><i class="fas fa-user-plus mr-3" style="margin-left: 10px;"></i>Đăng kí</a>
              </li>
            </ul>
            <ul class="nav nav__first right">
                <li class="nav-item nav-item__first nav-item__first-user">
                  <img src="./assets/img/product/noavatar.png" alt="" class="nav-item__first-img">
                  <span class="nav-item__first-name">Huy Hùng</span>
                  <ul class="nav-item__first-menu">
                    <li class="nav-item__first-item">
                      <a href="">Tài khoản của tôi</a>
                    </li>
                    <li class="nav-item__first-item">
                      <a href="">Địa chỉ của tôi</a>
                    </li>
                    <li class="nav-item__first-item">
                      <a href="">Đơn mua</a>
                    </li>
                    <li class="nav-item__first-item">
                      <a href="">Đăng xuất</a>
                    </li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
      </div>