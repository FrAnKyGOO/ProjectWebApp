<?php 
session_start();
include('server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNTS</title>

    <!-- BOXICON -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

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

    <Acc class="Account">
        <div class="cont">
                <div class="form">
                    <h2>Sing In</h2>
                    <form action="login_db.php" method="post">

                    <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h4>
                        <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>    
                        </h4>
                    </div>
                    <?php endif ?>


                        <?php include('errors.php') ?>


                        <label>
                            <span>Username</span>
                            <input type="text" name="username" required>
                        </label>
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" required>
                        </label>
                        <button class="submit" name="login_user" type="submit">Sing In</button>
                        <p class="forgot-pass">Forgot Password ?<p>
                    </form>
                </div>
                

            <div class="sub-cont">
                <div class="img">
                  <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                  </div>
                </div>
                
                <div class="form sign-up">
                    <h2>Sign Up</h2>
                    <form action="register_db.php" method="post">


                    <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h4>
                        <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>    
                        </h4>
                    </div>
                    <?php endif ?>


                        <?php include('errors.php') ?>


                        <label>
                            <span>username</span>
                            <input type="text" name="username" required>
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required>
                        </label>
                        <label>
                            <span>Password</span>
                            <input type="password" name="password_1" required>
                        </label>
                        <label>
                            <span>Confirm Password</span>
                            <input type="password" name="password_2" required>
                        </label>
                        <button type="submit" name="reg_user" class="submit">Sign Up Now</button>
                    </form>
                </div>
            </div>      
        </div>
    </Acc>
    

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