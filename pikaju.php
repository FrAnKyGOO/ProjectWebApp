<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "ต้องไป login";
        header('location: Accounts.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: Accounts.php');
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIKACHU</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- BOXICON -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- HEADER -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="index.php" class="nav__logo">FIGUER SHOP</a>
            </div>

            <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="test_2.php" class="nav__link">Featured</a></li>
                    <li class="nav__item"><a href="view-arrivals.php" class="nav__link">New</a></li>
                    <li class="nav__item"><a href="About.php" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="Accounts.php" class="nav__link">Account</a></li>
                    <li class="nav__item"><a href="#"><i class='bx bx-cart-alt nav_cart'></i></a></li>
                    <i class='bx bx-menu nav_toggle' id="nav_toggle"></a></i>
                    <li class="nav__item"><?php if (isset($_SESSION['username'])) :?></li>
                        <strong><?php echo $_SESSION['username']; ?></strong>
                        <p><a href="index.php?logout='1'" style="color: red"> Logout</a></p>
                    <?php endif ?>          
                </ul>
            </div>

            <!-- <div>
            <a href="adf.php"><i class='bx bx-cart-alt nav_cart'></i></a>
                <i class='bx bx-menu nav_toggle' id="nav_toggle" ></i>
            </div> -->
        </nav>
    </header>

    <!-- single product -->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./assets/01/1.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/01/2.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/01/3.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/01/4.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/01/5.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/01/6.jpg" class="d-block w-100" alt="">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2>BEPO X PIKACHU</h2>
                <p class="price">10,800 THB</p>
                <p><b>ขนาด:</b> W50 D55 H 73 cm</p>
                <p><b>Scale:</b> 1:1</p>
                <p><b>มัดจำ:</b> 2,800 THB</p>
                <p><b>สินค้ามาประมาณเดือน : ธ.ค. 63 - ม.ค. 64 <br>
                ‼️กำหนดการสินค้าออก อาจมีการเลื่อนหรือช้ากว่ากำหนด<br>
                ‼️ปิดรับยอด จนกว่าสินค้าจองเต็มโควต้า</b></p>
                <p><b>ได้รับสินค้าแน่นอน 100% <br>
                - รับประกันสินค้าแตกหัก สามารถเคลมทางค่ายได้โดยตรง ไม่มีค่าใช้จ่ายเพิ่มเติม</b></p>
                <label>Quantity:</label>
                <input type="text" value="1">
                <button type="button" class="btn btn-default cart">Add to cart</button>
            </div>
        </div>
    </div>
        

    <main class="l-main">

        <!-- FEATURED PRODUCTS -->
        <section class="festured section" id="featured">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            
            <div class="featured__container bd-grid">

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/41/5.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Buggy</h3>
                        <span class="featured__preci">8,200THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/40/2.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Nico Robin</h3>
                        <span class="featured__preci">7,800THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/39/5.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Uchiha Itachi</h3>
                        <span class="featured__preci">13,800THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/36/1.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Sabo SOC</h3>
                        <span class="featured__preci">7,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/35/1.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">OH Oh</h3>
                        <span class="featured__preci">4,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/34/1.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Squirtle Family (Zenigame)</h3>
                        <span class="featured__preci">5,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/32/1.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Hashirama</h3>
                        <span class="featured__preci">10,900THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/29/1.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Hyuga Hinata</h3>
                        <span class="featured__preci">7,400THB</span>
                    </div>
                </div>
        
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__box">
                <h3 class="footer__title">FIGUER SHOP</h3>
                <p class="footer__deal">Products Store</p>
                <a href="#"><img src="./assets/footerstore1.png" alt="" class="footer__store"></a>
                <a href="#"><img src="./assets/footerstore2.png" alt="" class="footer__store"></a>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">EXPLORE</h3>
                <ul>
                    <li><a href="index.php" class="footer__link">Home</a></li>
                    <li><a href="test_2.php" class="footer__link">Featured</a></li>
                    <li><a href="view-arrivals.php" class="footer__link">new</a></li>
                    <li><a href="About.php" class="footer__link">About</a></li>
                    <li><a href="Accounts.php" class="footer__link">Account</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">OUR SERVICES</h3>
                <ul>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Free Shipping</a></li>
                    <li><a href="#" class="footer__link">Gift Cards</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">FOLLow</h3>
                <a href="#" class="footer__social"><i class='bx bxl-facebook-square'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; 2020 copyright all right reserved</p>
    </footer>
    



    <script src="./js/mian.js"></script>
</body>
</html>
