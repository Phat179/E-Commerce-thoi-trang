<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartoon Nature T-Shirt</title>
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
              <li><a class="active" href="loggedshop.php">Shop</a></li>
              <li><a href="loggedblog.php">Blog</a></li>
              <li><a href="loggedabout.php">Giới thiệu</a></li>
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

    <section class="section-p1" id="prodetails">
        <div class="single-pro-image">
            <img src="assets/image/f1.jpg"  width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="assets/image/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="assets/image/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="assets/image/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="assets/image/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        
        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Cartoon Nature T-Shirt</h4>
            <h2>$139.00</h2>
            <select>
                <option value="">Select Size</option>
                <option value="">XL</option>
                <option value="">XXL</option>
                <option value="">Small</option>
                <option value="">Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Zara's Cartoon Nature T-Shirt combines whimsical cartoon illustrations with nature-inspired motifs, creating a charming and stylish garment. Crafted from premium materials, it offers comfort and durability, making it suitable for everyday wear. The design reflects Zara's commitment to quality and innovation, ensuring each piece is both visually appealing and practical. Versatile and effortlessly chic, this T-Shirt transitions seamlessly from casual to more refined settings, adding a touch of playful elegance to any outfit. It invites wearers to express their individual style with confidence, embodying a blend of artistry and comfort that defines Zara's approach to contemporary fashion.</span>
        </div>
    </section>

    <section class="section-p1" id="product1">
        <h2>Featured Products</h2>
        <p>Summer Collection Designs</p>
        <div class="pro-container">
            <div class="pro">
                <img src="assets/image/n1.jpg" alt="">
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
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro">
                <img src="assets/image/n2.jpg" alt="">
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
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro">
                <img src="assets/image/n3.jpg" alt="">
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
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
            </div>
            <div class="pro">
                <img src="assets/image/n4.jpg" alt="">
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
                    <h4>$70</h4>
                </div>
                <a href=""><i id="cart" class="material-icons">shop</i></a>
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



    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>
    

    <script  src="assets/js/dropdown.js"></script>
    <script  src="assets/js/cart.js"></script>
    <script  src="assets/js/script.js"></script>
</body>
</html>