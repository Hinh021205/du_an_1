<?php require_once './views/layout/header.php' ?>

<?php require_once './views/layout/navbar.php' ?>

<?php require_once './views/layout/sidebar.php' ?>
<!-- content -->
<div class="container">
    <!-- slide show -->
    <div class="row">
        <section class="awe-section-1">
            <div class="mt-4 top-sliders col-md-12">
                <div class="slideshow">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/slideshow/1.jpg" alt="Los Angeles" width="1100" height="550">
                                <div class="carousel-caption">
                                    <a href="./Product.html" class="click-slideshow">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/slideshow/2.jpg" alt="Chicago" width="1100" height="550">
                                <div class="carousel-caption">
                                    <a href="./Product.html" class="click-slideshow">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/slideshow/3.jpg" alt="New York" width="1100" height="550">
                                <div class="carousel-caption">
                                    <a href="./Product.html" class="click-slideshow">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end slide show -->
    <div class="product">
        <div class="container">
            <div class="product_popular">
                <h3 class="product__popular title-product">Sản phẩm phổ biến</h3>
                <div class="row">
                    <div class="col-lg-4 col-sm-12 mb-20">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="./assets/img/product/addidas1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Joma Super Regate</h4>
                                <p class="card-text description" style="font-weight: 400;">Phần trên được sản xuất bằng cách sử dụng sợi nhỏ, nylon và TPU chèn trên nylon để bảo vệ chống nứt nẻ
                                    . Joma Super Regate bao gồm công nghệ BẢO VỆ ở cổ chân để tăng cường sức đề kháng
                                    và sự ổn định cho đòn đánh. Joma Super Regate có hệ thống thông gió VTS cho phép thở và
                                    luồng không khí lớn hơn bên trong giày.
                                    Đế lót EVA định hình sẵn có thể điều chỉnh theo hình dạng của bàn chân.
                                    Đế được sản xuất bằng EVA tự nhiên góp phần tạo đệm cho giày bằng cách
                                    hấp thụ tác động từ bàn chân.</p>
                                <a href="./ProductDetail.html" title="GIÀY ADIDAS 4D FUTURECRAFT" class="btn btn-buynow">Xem ngay <i class="fas fa-arrow-right"
                                        style="font-size: 16px;margin-left: 5px;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="./assets/img/product/stansmith.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">adidas stan smith</h4>
                                <p class="card-text description" style="font-weight: 400;">Đúng chất kinh điển.
                                    Trước đây, Stan Smith từng là ngôi sao lớn của làng quần vợt.
                                    Mang đôi giày adidas xứng tầm tên tuổi của ông, bạn sẽ là ngôi sao đường phố.
                                    Từ trên xuống dưới, đôi giày kinh điển này bắt trọn tinh hoa phong cách của kiểu dáng nguyên bản năm 1971,
                                    với thiết kế bằng da tối giản và đường nét gọn gàng.</p>
                                <a href="./ProductDetail.html" class="btn btn-buynow">Xem ngay <i class="fas fa-arrow-right "
                                        style="font-size: 16px;margin-left: 5px;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="./assets/img/product/stansmith.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">adidas stan smith</h4>
                                <p class="card-text description" style="font-weight: 400;">Đúng chất kinh điển.
                                    Trước đây, Stan Smith từng là ngôi sao lớn của làng quần vợt.
                                    Mang đôi giày adidas xứng tầm tên tuổi của ông, bạn sẽ là ngôi sao đường phố.
                                    Từ trên xuống dưới, đôi giày kinh điển này bắt trọn tinh hoa phong cách của kiểu dáng nguyên bản năm 1971,
                                    với thiết kế bằng da tối giản và đường nét gọn gàng.</p>
                                <a href="./ProductDetail.html" class="btn btn-buynow">Xem ngay <i class="fas fa-arrow-right "
                                        style="font-size: 16px;margin-left: 5px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__new">
                <h3 class="product__ne title-product">Sản phẩm mới</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/ambush1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Áo bloolyn
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/aohoodie1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Hoodie Adidas
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/Ao_Gio_Adicolor_Classics_DJen_GN2780_21_model.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Áo khoác adidas
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/áo-ngực-thun-gân-medium-support-3-sọc-believe-this.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Đồ gym
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product__sale">
                <h3 class="product__sale title-product">Top sản phẩm hot</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/vaymidi1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Quần giả váy
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/ult1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Giày Ultra
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/tuiprimegreen1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Balo
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/tuicheo1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Túi chéo
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <section class="awe-section-9">
                <div class="section_policy clearfix">
                    <div class="col-12">
                        <div class="owl-policy-mobile">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div class="section_policy_content">

                                            <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_1.png?1628514159582" alt="">
                                            <div class="section-policy-padding">
                                                <h3>Miễn phí vận chuyển</h3>
                                                <div class="section_policy_title">Cho các đơn hàng</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="section_policy_content">

                                            <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_2.png?1628514159582" alt="">
                                            <div class="section-policy-padding">
                                                <h3>Hỗ trợ 24/7</h3>
                                                <div class="section_policy_title">Liên hệ hỗ trợ 24h/ngày</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="section_policy_content">

                                            <img src="	https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_3.png?1628514159582" alt="">
                                            <div class="section-policy-padding">
                                                <h3>Hoàn tiền 100%</h3>
                                                <div class="section_policy_title">Nếu sản phẩm bị lỗi, hư hỏng</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="section_policy_content">

                                            <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_4.png?1628514159582" alt="">
                                            <div class="section-policy-padding">
                                                <h3>Thanh toán</h3>
                                                <div class="section_policy_title">Được bảo mật 100%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="product__yml">
                <h3 class="product__yml title-product">Có thể bạn sẽ thích</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/sandalduramo1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Giày sandan
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/stansmithgolf2.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Adidas stansmith
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/superfly1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Giày bóng đá
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="./ProductDetail.html" class="product__new-item">
                            <div class="card" style="width: 100%">
                                <div>
                                    <img class="card-img-top" src="./assets/img/product/tatchaybo1.jpg" alt="Card image cap">
                                    <form action="" class="hover-icon hidden-sm hidden-xs">
                                        <input type="hidden">
                                        <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title description">
                                        Tất
                                    </h5>
                                    <div class="product__price">
                                        <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                        <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">79 đã bán</span>
                                    </div>
                                    <div class="sale-off">
                                        <span class="sale-off-percent">20%</span>
                                        <span class="sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shoesnews">
        <div class="container">
            <h3 class="shoesnews__title">Tin tức</h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-20">
                    <a href="./newDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <img class="card-img-top" src="./assets/img/product/new2.jpg" alt="Card image cap" height="230px">
                            <div class="card-body">
                                <h5 class="card-title description title-news">
                                    Tin tức về giày puma
                                </h5>
                                <p class="card-text description" style="font-weight: 400;">Trong phạm vi bài viết ngày hôm nay, hãy cùng Thanh Hùng Futsal khám phá mẫu giày
                                    đá bóng độc nhất vô nhị được nhà Swoosh thửa riêng cho cậu bé vàng của xứ sở Lục Lăng nhé! </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-20">
                    <a href="./newDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <img class="card-img-top" src="./assets/img/product/new1.jpg" alt="Card image cap" height="230px">
                            <div class="card-body">
                                <h5 class="card-title description title-news">
                                    Người sáng lập đế chế puma
                                </h5>
                                <p class="card-text description" style="font-weight: 400;">"PUMA ra mắt KING TOP DASSLER phiên bản giới hạn
                                    20/11/2021
                                    Nhằm tôn vinh những di sản mà Rudolph Dassler, người sáng lập Puma để lại, mới đây hãng thể thao nước Đức đã cho ra đời phiên bản Puma King Top Dassler
                                    với chỉ giới hạn 100 đôi trên toàn thế giới.
                                    Đôi giày đá banh được thiết kế theo phong cách đơn giản, đúng với tinh thần của dòng sản phẩm Puma King
                                    . Upper là chất liệu da Kangaroo cao cấp với tone màu trắng chủ đạo lấy ý tưởng từ những bộ
                                    quần áo sạch sẽ mà cậu bé Dassler đã giặt thuê từ khi còn nhỏ,
                                    thông qua đó cũng xây dựng lên tinh thần kinh doanh và ý chí khởi nghiệp từ sớm của cậu.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-20">
                    <a href="./newDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <img class="card-img-top" src="./assets/img/product/new3.jpg" alt="Card image cap" height="230px">
                            <div class="card-body">
                                <h5 class="card-title description title-news">
                                    Thông tin bên lề Uero
                                </h5>
                                <p class="card-text description" style="font-weight: 400;">"Bóng đá đã trở lại", câu nói tưởng chừng bình thường nhưng lại vô cùng ý nghĩa trong thời điểm hiện tại, khi mà chúng ta đang phải sống chung với đại dịch Covid-19.
                                    Các sân vận động chật kín cổ động viên với các tràng vỗ tay,
                                    tiếng cổ vũ cũng là một hình ảnh đánh dấu chiến thắng của nhân loại trước Covid-19.
                                    Bên cạnh các trận đấu bóng đá đỉnh cao đang diễn ra khắp các sân cỏ trên toàn thế giới,
                                    thì các ông lớn như Nike, adidas hay Puma, v.v...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="shoesnews__all">
                <a href="./Product.html" class="shoesnews__all-tittle">Xem tất cả</a> <i class="fi-rs-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<?php require_once './views/layout/footer.php' ?>

</html>