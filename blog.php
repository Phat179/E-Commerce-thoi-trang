<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
                <li><a class="active" href="blog.php">Blog</a></li>
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
    
    <section id="page-header" style="background-image: url('assets/image/b19.jpg')">
        <h2>#blog</h2>
        <p>Đọc những bài blog về sản phẩm của chúng tôi</p>
    </section>
    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="assets/image/b7.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Áo Hoodie Cotton-Jersey Khóa Kéo</h4>
                <p>Áo Hoodie Cotton-Jersey Có Khóa Kéo: Sự kết hợp hoàn hảo giữa phong cách và tiện ích, với chất liệu cotton-jersey mềm mại và thiết kế khóa kéo tiện lợi...</p>
                <a href="singleblog.php">ĐỌC THÊM</a>
            </div>
            <h1>23/06</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="assets/image/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Phối đồ với kiểu tóc</h4>
                <p>Khi lựa chọn kiểu tóc, không chỉ là vấn đề của phong cách cá nhân mà còn là cách bạn phối đồ để tạo nên một tổng thể hài hòa và ấn tượng. Trong bài viết này, chúng ta sẽ khám phá...</p>
                <a href="#">ĐỌC THÊM</a>
            </div>
            <h1>24/06</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="assets/image/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Món đồ không thể thiếu cho "Gơn Phố"</h4>
                <p>"Món đồ không thể thiếu cho phong cách 'Gơn Phố' chính là chiếc áo...</p>
                <a href="#">ĐỌC THÊM</a>
            </div>
            <h1>25/06</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="assets/image/b5.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Những Xu Hướng Lấy Cảm Hứng Từ Sàn Diễn</h4>
                <p>Các xu hướng lấy cảm hứng từ sàn diễn đang tạo nên những phong cách thời trang đột phá và đầy sáng tạo...</p>
                <a href="#">Đọc thêm</a>
            </div>
            <h1>26/06</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="assets/image/b6.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Dinh dưỡng lành mạnh</h4>
                <p>Khi nhắc đến sự kết hợp giữa dinh dưỡng lành mạnh và thời trang, chúng ta không chỉ nói đến việc chăm sóc cơ thể mà còn là cách thể hiện phong cách sống khỏe mạnh và...</p>
                <a href="#">ĐỌC THÊM</a>
            </div>
            <h1>27/06</h1>
        </div>
    </section>

     <section class="section-p1" id="pagination">
        <a href="">1</a>
        <a href="">2</a>
        <a href=""><i class="fa-solid fa-arrow-right"></i></i></a>
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