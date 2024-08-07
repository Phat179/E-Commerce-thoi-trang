<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/0b9558d756.js" ></script>
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png">
</head>
<body>
    <section id="header">
        <a href="index.php"><img src="assets/image/logo.png" width="150px" height="60px" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">Giới thiệu</a></li>
                <li><a class="active" href="contact.php">Liên hệ</a></li>
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
    
    <section id="page-header"  class="contact" style="background-image: url('assets/image/b1.jpg')">
        <h2>#thongtinlienhe</h2>
        <p>Hãy liên hệ với chúng tôi!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>LIÊN HỆ NGAY</span>
            <h2>Ghé thăm một trong những chi nhánh của chúng tôi hoặc liên hệ ngay hôm nay!</h2>
            <h3>Trụ Sở</h3>
            <div>
                <li>
                    <i class="fa-regular fa-map"></i>
                    <p> P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội</p>
                </li>
                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>22012376@st.phenikaa-uni.edu.vn</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>0353163114</p>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>Thứ hai - thứ bảy: 6:45 tới 18:30</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17721.88015007435!2d105.75760889982445!3d20.9699221407696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2s!4v1719091365831!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>ĐỂ LẠI TIN NHẮN</span>
            <h2>Chúng tôi mong chờ những ý kiến của bạn</h2>
            <input type="text" placeholder="Nguyen Van A">
            <input type="text" placeholder="Nguyenvana@gmail.com">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Gửi</button>
        </form>

        <div class="people">
            <div>
                <img src="./assets/image/people/1.jpg" alt="">
                <p><span>Nguyễn Thế Phát</span> CEO <br> Sđt 0984663477 <br> Email: 20010975@st.phenikaa-uni.edu.vn</p>
            </div>
            <div>
                <img src="./assets/image/people/2.jpg" alt="">
                <p><span>Lưu Quang Trung</span> Vice <br> Sđt 0837658020 <br> Email: 20010992@st.phenikaa-uni.edu.vn</p>
            </div>
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
            <button class="checkout" onclick="window.location.href='checkout.php'">Thanh Toán</button>
        </div>
    </div>




    <!-- footer  -->
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
            <a href="">Đăng nhập</a>
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

    


    <script  src="assets/js/cart.js"></script>
    <script  src="assets/js/script.js"></script>
</body>
</html>