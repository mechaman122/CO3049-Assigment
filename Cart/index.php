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

if(isset($_POST['search']) && !empty($_POST['search'])){
    $url = "../show_product/index.php?search=" . $_POST['search'] . ".*";
    header("Location: $url");
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
                            <a class="nav-link fw-bold active" aria-current="page" href="../homepage/index.php" style="color: rgb(211, 230, 89);">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="../show_product/index.php?search=.*" style="color:rgb(142, 216, 229)">Products</a>
                        </li>
                        <?php if($username == "admin1") {?>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="../admin/index.php" style="color:rgb(142, 216, 229)">AdminDashBoard</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <form method="POST" action="" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="textbox" name="search">
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


                    <form action="#" class="font-size-14 font-rale">
                        <a href="../Cart/index.php" class="py-2 rounded-pill color-primary-bg">
                            <img src="../img/cart-icon.jpg" alt="cart icon" width="40px" height="auto">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($cart_list); ?></span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>

            <!--  shopping cart items   -->
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        $sum=0;
                            foreach ($cart_list as $item) {
                                $pd=$product_list[$item['item_id']-1];
                                $sum+=$pd['item_price'];
                            ?>
                            <!-- cart item -->
                            <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                        <img src="<?php echo  $pd['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $pd['item_name'] ?? "Unknown"; ?></h5>
                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                        <input type="number" min="0" value="1" max="<?php echo $pd['item_qty']?>" name="number">
                            <form method="post">
                                <input type="hidden" value="<?php echo $pd['item_id']?? 0; ?>" name="delete-cart-submit">
                                <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                <a href="../detail/index.php?item_id=<?php echo $index=$pd['item_id']-1;?>" class="btn ">About </a>
                            </form>
                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price" data-id="<?php echo $pd['item_id'] ?? '0'; ?>"><?php echo $pd['item_price'] ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                <!-- !cart item -->
                <?php             
                        }; 
                        // closing array_map function
                    
                ?>
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo count($cart_list); ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">
                            <?php echo $sum  ?></span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img src="../img/among-us-text-logo.png" alt="" width="55" height="auto" class="d-inline-block">
            </a>
            <span class="text-muted">© 2022 Company, Inc</span>
        </div>
    </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top">BACK TO TOP</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<?php if (isset($_POST['delete-cart-submit'])){
    $cart->deleteCart($_POST['delete-cart-submit']);
}?>
</html>