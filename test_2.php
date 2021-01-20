<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        // $_SESSION['msg'] = " login";
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

        <!-- FEATURED PRODUCTS -->
        <section class="festured section" id="featured">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            <div class="featured__container bd-grid">
                
            
<?php require("server.php");

$sql = "SELECT id_product, name, price, img FROM product";
$sql = $sql . " WHERE id_product;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){ ?>
                <form action="test.php">
                <?php echo '<input type="hidden" name="id" value="'.$row['id_product'].'">'
                ?>
                <button type="submit" style="height:400px">
                <a>
                    <div class="featured__products">
                        <div class="featured__box">
                            <div class="featured__new"></div>
                            <img src="<?php echo $row['img']?>" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name"><?php echo $row['name']?></h3>
                            <span class="featured__preci"><?php echo $row['price']?> THB</span>
                        </div>
                    </div>
                </a>
                </button>
                </form>
                <?php    
                    }  
                } else {
        
                }
                mysqli_close($conn);
                ?>







                <!-- <div class="page-btn">
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>&#8594;</span>
                </div> -->
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
                    <li><a href="view-featured.php" class="footer__link">Featured</a></li>
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


