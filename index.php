<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/0b9558d756.js" ></script>
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png">
</head>
<body class="">
    <section id="header">
        <a href="index.php"><img src="assets/image/logo.png" width="150px" height="60px" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Trang chủ</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">Giới thiệu</a></li>
                <li><a href="contact.php">Liên hệ</a></li>
                <li id="lg-bag" class="icon-cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>0</span>
                </li>

                <a href="" id="close"><i class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        

        <div id="mobile">
            <ul>
                <li class="icon-cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>0</span>
                </li>
            </ul>
            <i id="bar" class="fas fa-outdent"></i>
        </div>

    </section>
    
    <section style="background-image: url('assets/image/hero-1.png')" id="hero">
        <h4>Ưu đãi đổi-trả</h4>
        <h2>Siêu ưu đãi</h2>
        <h1>Cho mọi sản phẩm</h1>
        <p>Tiết kiệm hơn với coupon lên tới 70%</p>
        <button style="background-image: url('assets/image/button.png')">Mua Ngay</button>
    </section>

    <section class="section-p1" id="feature">
        <div class="fe-box">
            <img src="assets/image/f1.png" alt="">
            <h6>Giao hàng miễn phí</h6>
        </div>
        <div class="fe-box">
            <img src="assets/image/f2.png" alt="">
            <h6>Đặt hàng online</h6>
        </div>
        <div class="fe-box">
            <img src="assets/image/f3.png" alt="">
            <h6>Tiết kiệm tiền</h6>
        </div>
        <div class="fe-box">
            <img src="assets/image/f4.png" alt="">
            <h6>Quảng bá</h6>
        </div>
        <div class="fe-box">
            <img src="assets/image/f5.png" alt="">
            <h6>Giờ vàng</h6>
        </div>
        <div class="fe-box">
            <img src="assets/image/f6.png" alt="">
            <h6>Hộ trợ khách hàng 24/7</h6>
        </div>
    </section>

    <!-- <section class="section-p1" id="product1">
        <h2>Featured Products</h2>
        <p>Summer Collection Designs</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$139</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div> -->
            <!-- <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Flower T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$120</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Flower T-Shirt 2</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$120</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Sakura T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$149</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Lotus T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$139</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Brown&Blue Flannel</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$199</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Wideleg Flower Pants</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$359</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="assets/image/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cat Blouse</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$113</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div> -->
        </div>
    </section>

    <section class="section-m1" id="banner" style="background-image: url('assets/image/banner.png')">
        <h4>Dịch vụ bảo đảm</h4>
        <h2>Lên tới <span>70% được giảm</span> - Với tất cả áo phông và phụ kiện</h2>
        <button class="normal">Khám phá</button>
    </section>

    <section class="section-p1" id="product1">
        <h2>Hàng mới về</h2>
        <p>Bộ sưu tầm mùa hè!</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n1.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <i id="cart" class="material-icons addCart">shop</i>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n2.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n3.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n4.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n5.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n6.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n7.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="assets/image/n8.jpg" alt="">
                <div class="des">
                    <span>zara</span>
                    <h5>Cartoon Nature T-Shirt</h5>
                    <div class="star">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
        </div>
    </section>

    <section class="section-p1" id="sm-banner">
        <div class="banner-box" style="background-image: url('assets/image/b17.jpg')">
            <h4>khuyến mãi sốc</h4>
            <h2>mua 1 tặng 1</h2>
            <span>Chiếc váy cổ điển tuyệt nhất đang được giảm giá tại Zara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box" style="background-image: url('assets/image/b10.jpg')">
            <h4>xuân/hè</h4>
            <h2>mùa tới</h2>
            <span>Những thiết kế tuyệt nhất từ nhà thiết kế</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box" style="background-image: url('assets/image/b7.jpg')">
            <h2>KHUYẾN MÃI THEO MÙA</h2>
            <h3>Bộ sưu tầm mùa Đông - Giảm 50%</h3>
        </div>
        <div class="banner-box banner-box2" style="background-image: url('assets/image/b4.jpg')">
            <h2>BỘ SƯU TẬP GIÀY MỚI</h2>
            <h3>Xuân/Hè 2024</h3>
        </div>
        <div class="banner-box banner-box3" style="background-image: url('assets/image/b18.jpg')">
            <h2>ÁO SƠ MI</h2>
            <h3>Những mẫu in thịnh hành mới</h3>
        </div>
    </section>

    <section class="section-p1 section-m1" id="newsletter" style="background-image: url('assets/image/b14.png')">
        <div class="newstext">
            <h4>Đăng Ký Nhận Bản Tin</h4>
            <p>Nhận cập nhật qua email về cửa hàng mới nhất của chúng tôi và <span>các ưu đãi đặc biệt.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Điền email của bạn vào đây">
            <button class="normal">Đăng ký</button>
        </div>
    </section>

    <!-- login popup -->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
    <span class="close-btn material-symbols-outlined">close</span>
    <div class="form-box login">
        <div class="form-details">
            <h2>Chào mừng trở lại</h2>
            <p>Xin vui lòng đăng nhập sử dụng thông tin cá nhân của bạn</p>
        </div>
        <div class="form-content">
            <h2>Đăng nhập</h2>
            <form action="#">
                <div class="input-field">
                    <input type="text" id="emailInput" required>
                    <label for="emailInput">Email</label>
                </div>
                <div class="input-field">
                    <input type="password" id="passwordInput" required>
                    <label for="passwordInput">Mật khẩu</label>
                </div>
                <a href="#" class="forgot-pass">Quên mật khẩu?</a>
                <button type="submit" onclick="validateForm(event)">Đăng nhập</button>
            </form>
            <div class="bottom-link">
                Chưa có tài khoản?
                <a href="#" id="signup-link">Đăng ký</a>
            </div>
        </div>
    </div>
    <div class="form-box signup">
      <div class="form-details">
          <h2>Đăng ký</h2>
          <p>Để trở thành một phần cộng đồng chúng tôi, xin hãy đăng ký sử dụng thông tin cá nhân của bạn</p>
      </div>
      <div class="form-content">
        <h2>ĐĂNG KÝ</h2>
        <form action="#">
          <div class="input-field">
            <input type="text" required>
            <label>Nhập email của bạn</label>
          </div>
          <div class="input-field">
            <input type="password" required>
            <label for="">Tạo mật khẩu</label>
          </div>
          <div class="policy-text">
            <input type="checkbox" id="policy">
            <label for="policy">
              <span>Tôi đồng ý với </span>
              <a href="">Các điều khoản và chính sách</a>
            </label>
          </div>
          <button type="submit">Đăng ký</button>
        </form>
        <div class="bottom-link">
          Đã có tài khoản?
          <a href="" id="login-link">Đăng nhập</a>
        </div>
      </div>
  </div>
</div>





<!-- carttab  -->
<div class="cartTab">
    <h1>Giỏ hàng của bạn</h1>
    <div class="listCart">
        
    </div>
    <div class="btn">
        <button class="close">Đóng</button>
        <button class="checkout" onclick="window.location.href='checkout.php'">Thanh Toán</button>
    </div>
</div>
    


    <!-- footer -->
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="assets/image/logo.png" width="150px" height="60px" alt="">
            <h4>Liên hệ</h4>
            <p><strong>Địa chỉ: </strong>P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội</p>
            <p><strong>Diện thoại: </strong> 0984663477</p>
            <p><strong>Giờ làm việc: </strong>08:00 - 16:00, Mon - Sat</p>
            <div class="follow">
                <h4>Theo dõi</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="">Về chúng tôi</a>
            <a href="">Thông tin đơn hàng</a>
            <a href="">Chính sách bảo mật</a>
            <a href="">Điều khoản và chính sách</a>
            <a href="">Liên hệ với chúng tôi</a>
        </div>

        <div class="col">
            <h4>Tài khoản của tôi</h4>
            <a class="login-btn" href="#">Đăng nhập</a>
            <a href="">Xem giỏ hàng</a>
            <a href="">Sản phẩm đăng ký</a>
            <a href="">Theo dõi đơn hàng</a>
            <a href="">Hỗ trợ</a>
        </div>
        
        <div class="col install">
            <h4>Tải ứng dụng</h4>
            <p>Từ App Store hoặc Google Play</p>
            <div class="row">
                <img src="assets/image/app.jpg" alt="">
                <img src="assets/image/play.jpg" alt="">
            </div>
            <p>Cổng Thanh Toán Được Bảo Mật</p>
            <img src="assets/image/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2024, Nguyen The Phat - CNTT-VJ Phenikaa</p>
        </div>
    </footer>

    

    <script  src="assets/js/login.js"></script>
    <script  src="assets/js/cart.js"></script>
    <script  src="assets/js/script.js"></script>
</body>
</html>