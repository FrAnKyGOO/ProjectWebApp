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
    <title>NEW ARRIVALS</title>

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

    <main class="l-main">

        <!-- NEW ARRIVALS -->
        <section class="new section" id="new">
            <h2 class="section-title">NEW ARRIVALS</h2>

            <div class="new__container bd-grid">
                
                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/02/118645540_938693589947307_1475120825676003227_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="show_arr.php" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/05/118588684_937718410044825_4875768299113520694_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

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
                        <img src="./assets/22/118307086_932090373940962_7674091744649489519_n.jpg" alt="" class="new__img">

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

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/28/118160105_930627487420584_3176301690759024365_n.jpg" alt="" class="new__img">

                        <div class="new__link">
                            <a href="#" class="button">VIEW PRODUCT</a>
                        </div>
                </div>

                <div class="new__box">
                    <div class="arrivals__new">NEW</div>
                        <img src="./assets/39/5.jpg" alt="" class="new__img">

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