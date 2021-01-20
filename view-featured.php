<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEATURED PRODUCTS</title>

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
                <a href="index.html" class="nav__logo">FIGUER SHOP</a>
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

        <!-- FEATURED PRODUCTS -->
        <section class="festured section" id="featured">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            
            <div class="featured__container bd-grid">
                
                <a href="pikaju.html">
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="./assets/01/118596260_939298993220100_985020206533364232_n.jpg" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">BEPO X PIKACHU</h3>
                            <span class="featured__preci">10,800THB</span>
                        </div>
                    </div>
                </a>
                
                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/03/118525052_938579179958748_4536910050470552038_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Shiki</h3>
                        <span class="featured__preci">2,350THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/04/118371347_937759956707337_5057828442949818618_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Charizard</h3>
                        <span class="featured__preci">14,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/08/118541434_936868510129815_6310840077576274606_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Buu Foodie</h3>
                        <span class="featured__preci">3,250THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/41/117410465_923505018132831_528375783892507102_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Buggy</h3>
                        <span class="featured__preci">8,200THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/40/117695479_924998081316858_1438060584113929629_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Nico Robin</h3>
                        <span class="featured__preci">7,800THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/39/117644496_925102804639719_194051341297041640_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Uchiha Itachi</h3>
                        <span class="featured__preci">13,800THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/36/117641058_928352007648132_4594479943939006675_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Sabo SOC</h3>
                        <span class="featured__preci">7,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/35/117597044_928811357602197_8734666122673778194_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">OH Oh</h3>
                        <span class="featured__preci">4,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/34/117867291_928817434268256_8806233862646969531_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Squirtle Family (Zenigame)</h3>
                        <span class="featured__preci">5,500THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/32/117819752_929808204169179_1893497909341524033_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Hashirama</h3>
                        <span class="featured__preci">10,900THB</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new"></div>
                        <img src="./assets/29/118225837_930475530769113_1632951104539216552_n.jpg" alt="" class="featured__img">
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Hyuga Hinata</h3>
                        <span class="featured__preci">7,400THB</span>
                    </div>
                </div>
                <div class="page-btn">
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>&#8594;</span>
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
                    <li><a href="index.html" class="footer__link">Home</a></li>
                    <li><a href="view-featured.html" class="footer__link">Featured</a></li>
                    <li><a href="view-arrivals.html" class="footer__link">new</a></li>
                    <li><a href="About.html" class="footer__link">About</a></li>
                    <li><a href="Accounts.html" class="footer__link">Account</a></li>
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