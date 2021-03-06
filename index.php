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
    <title>FIGUER STORE</title>

    <!-- BOXICON -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
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
                        <strong><?php echo $_SESSION['username'];?></strong>
                        <p><a href="index.php?logout='1'" style="color: red">Logout</a></p>
                    <?php endif ?>          
                </ul>
                <!-- <?php if (isset($_SESSION['success'])) : ?>
                    <div class="success">
                        <h4>
                            <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>    
                        </h4>
                    </div>
                <?php endif ?>     -->
            </div>
                    
        </nav>
    </header>

    <main class="l-main">
        <!-- HOME -->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">NEW<br><span>ARRIVALS</span></h1>
                    <a href="view-arrivals.php" class="button">SHOP NOW</a>
                </div>
                
                <div class="home__img">
                    <img src="./assets/pngguru.com (1).png" alt="">
                </div>
            </div>
        </section>

        <!-- FEATURED PRODUCTS -->
        <section class="festured section" id="featured">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            <a href="test_2.php" class="section-all">View All</a>

            <div class="featured__container bd-grid">
                <a href="pikaju.php">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/01/2.jpg" alt="" class="featured__img">
                        </div>    
    
                        <div class="featured__data">
                            <h3 class="featured__name">BEPO X PIKACHU</h3>
                            <span class="featured__preci">10,800THB</span>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/03/2.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Shiki</h3>
                            <span class="featured__preci">2,350THB</span>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/04/1.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Charizard</h3>
                            <span class="featured__preci">14,500THB</span>
                        </div>
                    </div>
                </a>    

                <a href="#">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/08/4.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Buu Foodie</h3>
                            <span class="featured__preci">3,250THB</span>
                        </div>
                    </div>
                </a>
                    
            </div>
        </section>

        <!-- OFFER -->
        <section class="offer section">
            <div class="offer__bg" >
                <div class="offer__data">
                    <h2 class="offer__title">Special offer</h2>
                    <p class="offer__description"></p>

                    <a href="test_2.php" class="button">Shop Now</a>
                </div>
            </div>
        </section>

        <!-- NEW ARRIVALS -->
        <section class="new section" id="new">
            <h2 class="section-title">NEW ARRIVALS</h2>
            <a href="view-arrivals.php" class="section-all">View All</a>

            <div class="new__container bd-grid">
                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/09/118573386_936796850136981_3272470656219208729_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/10/118289358_936181270198539_4450972402247178204_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/12/118171855_935251290291537_5202132437160223096_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/13/118323802_935115610305105_3669299407012147682_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/14/118282802_934687387014594_5558164028472561684_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/24/117841366_931416587341674_6093995474613005795_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/26/118209226_931388520677814_7122810891118117237_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/27/117928323_931373397345993_8061287586258070330_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>
            </div>
        </section>>

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
                <h3 class="footer__title">FOLLOW</h3>
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