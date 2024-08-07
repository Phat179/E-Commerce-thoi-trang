<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/0b9558d756.js" ></script>
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png">
</head>
<body>
    <section id="header">
        <a href="loggedindex.php"><img src="assets/image/logo.png" width="150px" height="60px" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="loggedindex.php">Trang chủ</a></li>
                <li><a href="loggedshop.php">Shop</a></li>
                <li><a href="loggedblog.php">Blog</a></li>
                <li><a class="active" href="loggedabout.php">Giới thiệu</a></li>
                <li><a href="loggedcontact.php">Liên hệ</a></li>
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

        <!-- dropdown   -->
        <div class="profile-dropdown">
            <div onclick="toggle()" class="profile-dropdown-btn">
              <div class="profile-img" style="background-image: url('assets/image/people/1.jpg')">
                <i class="fa-solid fa-circle"></i>
              </div>
    
              <span
                >Phat Ng
                <i class="fa-solid fa-angle-down"></i>
              </span>
            </div>
    
            <ul class="profile-dropdown-list">
              <li class="profile-dropdown-list-item" onclick="window.location.href='profile.php'">
                <a href="#">
                  <i class="fa-regular fa-user"></i>
                  Tài khoản
                </a>
              </li>
    
              <li class="profile-dropdown-list-item">
                <a href="#">
                  <i class="fa-solid fa-sliders"></i>
                  Cài đặt
                </a>
              </li>
    
              <li class="profile-dropdown-list-item">
                <a href="#">
                  <i class="fa-regular fa-circle-question"></i>
                  Hỗ trợ
                </a>
              </li>
              <hr />
    
              <li class="profile-dropdown-list-item" onclick="window.location.href='index.php'">
                <a href="#">
                  <i class="fa-solid fa-arrow-right-from-bracket" ></i>
                  Đăng xuất
                </a>
              </li>
            </ul>
          </div>
    </section>
    
    <section id="page-header" style="background-image: url('assets/image/banner.png')">
        <h2>#Gioithieu</h2>
        <p>vài điều về chúng tôi</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="./assets/image/a6.jpg" alt="img">
        <div>
            <h2>Chúng Tôi Là Ai?</h2>
            <p>Chúng tôi là một nhóm sinh viên đam mê, đang bắt đầu hành trình tạo ra một trang web thương mại điện tử thời trang sáng tạo. Với tầm nhìn chung về việc kết hợp sáng tạo và công nghệ, đội ngũ của chúng tôi cam kết xây dựng một nền tảng không chỉ giới thiệu các xu hướng mới nhất mà còn ưu tiên trải nghiệm người dùng và tính tiếp cận. Mục tiêu của chúng tôi là tái định nghĩa mua sắm trực tuyến bằng cách cung cấp một bộ sưu tập quần áo và phụ kiện được tuyển chọn, đáp ứng các sở thích và phong cách sống đa dạng. Hãy theo dõi khi chúng tôi làm việc chăm chỉ để mang đến cho bạn một trải nghiệm mua sắm liền mạch và thú vị ngay tại đầu ngón tay của bạn.</p>
            <abbr title="">Zara: Nơi Thời Trang Tìm Tới Bạn.</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Cam kết mang đến thời trang chất lượng, truyền cảm hứng và sức mạnh cho khách hàng trên toàn thế giới.</marquee>
            
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Tải về <a href="#">Ứng dụng </a></h1>
        <div class="video">
            <video autoplay muted loop src="./assets/image/1.mp4"></video>
        </div>
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

    <div class="cartTab">
        <h1>Giỏ hàng của bạn</h1>
        <div class="listCart">
            
        </div>
        <div class="btn">
            <button class="close">Đóng</button>
            <button class="checkout" onclick="window.location.href='checkout.php'">Check Out</button>
        </div>
    </div>

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
            <a href="index.php">Đăng xuất</a>
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

    

    <script  src="assets/js/dropdown.js"></script>
    <script  src="assets/js/cart.js"></script>
    <script  src="assets/js/script.js"></script>
</body>
</html>