<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // create an instance with username (guest)
    $username = "Guest";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/scss/style.css">
    <script src="../app/js/script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
        // require functions.php file
        require ('../product/lib/functions.php');
    ?>
</head>


<body style="background-image:url(../img/wrb_bg.jpg)">
    <!--Below is to show the navigation bar-->
    <div class="container-fluid" style="background-image: url(../img/zutru.jpg);">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url(../img/zutru.jpg);">
            <!--Below is to show left side of the navigation bar-->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand" href="#">
                        <img src="../img/among-us-text-logo.png" alt="" width="65px" height="auto" class="d-inline-block align-text-top">
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold active" aria-current="page" href="index.php" style="color: rgb(211, 230, 89);">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#" style="color:rgb(142, 216, 229)">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#"style="color:rgb(142, 216, 229)">More Infomation</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="textbox">
                        <button type="submit" class="btn btn-outline-dark"><i class="bi bi-search"></i></button>
                    </form>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="user-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../img/among-us-symbol.png" width="65px" height="auto" alt="user's Logo">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-dark" aria-labelledby="user-dropdown">
                            <li>
                                <h6 class="dropdown-header" id="user-signin-as" href="#">Signed in as</h6>
                            </li>
                            <li><a class="dropdown-item" id="user-signin-name" href="#"><b><?php echo $username;?></b></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <?php if($username == "Guest"){?>
                                <li><a class="dropdown-item" id="user-signin-text" href="../user-registration/login.php">Sign In</a></li>
                                <li><a class="dropdown-item" id="user-signin-text" href="../user-registration/user-registration.php"><b>Sign Up Now</b></a></li>
                            <?php }?>
                            
                            
                            <?php if($username != "Guest"){?>
                                <li><a class="dropdown-item" id="user-info-text" href="#">Your Info</a></li>
                                <li><a class="dropdown-item" id="user-help-text" href="#">Help</a></li>
                                <li><a class="dropdown-item" id="user-setting-text" href="#">Setting</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" id="user-signout-text" href="../user-registration/logout.php"><i class="bi bi-box-arrow-in-right"></i> Sign Out</a></li>
                            <?php }?>
                        </ul>
                    </div>

                    <!--Below is the code to show user logo (with dropdown) and cart info (with dropdown)-->

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="user-cart-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../img/cart-icon.jpg" alt="cart icon" width="40px" height="auto">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-2" style="max-width: 250px;" aria-labelledby="user-cart-dropdown">
                            <li><a class="dropdown-item" id="user-cart-viewall" href="#"><i class="bi bi-view-stacked"></i> View Cart (10)</a></li>
                            <li><a class="dropdown-item active" id="user-checkout" href="#"><i class="bi bi-arrow-right-square"></i> Proceed to Checkout</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<!-- Contact -->
<div class="contact">
    <div class="contact-section">
        <h2 class="contact-section-heading">CONTACT US</h2>    
        <div class="contact-list">
            <div class="contact-mem">
                <img src="../img/son.jpeg" alt="" class="contact-img">
                <p class="contact-name">Phạm Trọng Sơn</p>
                <p class="contact-logo"><img src="../img/logo-truong.jpg" alt="" > </p>
                <p class="contact-info">Trường đại học Bách Khoa</p>
                <p class="contact-id">MSSV: 2052688</p>
            </div>
            <div class="contact-mem">
                <img src="../img/tinh.jpeg" alt="" class="contact-img">
                <p class="contact-name">Bùi Thanh Tịnh</p>
                <p class="contact-logo"><img src="../img/logo-truong.jpg" alt="" > </p>
                <p class="contact-info">Trường đại học Bách Khoa</p>
                <p class="contact-id">MSSV: 2052749</p>
            </div>
            <div class="contact-mem">
                <img src="../img/phong.jpeg" alt="" class="contact-img">
                <p class="contact-name">Nguyễn Võ Hàn Phong</p>
                <p class="contact-logo"><img src="../img/logo-truong.jpg" alt="" > </p>
                <p class="contact-info">Trường đại học Bách Khoa</p>
                <p class="contact-id">MSSV: 2052088</p>
            </div>
            <div class="contact-mem">
                <img src="../img/trung.jpeg" alt="" class="contact-img">
                <p class="contact-name">Lại Đức Trung</p>
                <p class="contact-logo"><img src="../img/logo-truong.jpg" alt="" > </p>
                <p class="contact-info">Trường đại học Bách Khoa</p>
                <p class="contact-id">MSSV: 2053538</p>
            </div>
        </div>
    </div>
</div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="../img/among-us-text-logo.png" alt="" width="55" height="auto" class="d-inline-block">
        </a>
        <span class="text-muted">© 2022 Company, Inc</span>
    </div>
</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top">BACK TO TOP</button>
</body>
</html>