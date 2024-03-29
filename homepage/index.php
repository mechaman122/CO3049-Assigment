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
                            <a class="nav-link fw-bold active" aria-current="page" href="index.php?search=.*" style="color: rgb(211, 230, 89);">Home</a>
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

                    <!--Below is the code to show user logo (with dropdown) and cart info (with dropdown)-->

                      

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

    <!--Below is to show carousel to show banner-->
    <div id="banner-carousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="width: 100vw;">
            <div class="carousel-item active">
                <img src="../img/among-us-youtube-banner.jpg" class="d-block w-100 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/among-us-youtube-banner.jpg" class="d-block w-100 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/among-us-youtube-banner.jpg" class="d-block w-100 mx-auto" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#banner-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>

    <br><br>
         <h1 style="color: white;">You May like</h1>  
         <div class="container">
            <div class="row product-row">
                <?php for($i=0;$i<20;$i++){
                $j=rand(0,59);
                 $item=$product_list[$j];?><br>
                    <div class="col-6 col-sm-3">
                        <div class="card" style="width: 280px ;height: 450px">
                            <iframe name="votar" style="display:none;"></iframe>
                            <form method="POST" target="votar">
                            <input type="text" name="addToCart" value="<?php echo $item['item_id']?>" hidden>
                            <img src="<?php echo $item['item_image'] ?>"class="card-img-top" style="height: 300px;">
                            <div class="card-body">
                            <h5 class="card-title fw-bold d-inline-block text-truncate" style="max-width: 200px;"><?php echo $item['item_name'] ?></h5>
                            <p class="card-text"><?php echo $item['item_price'] ?></p>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                             <a href="../detail/index.php?item_id=<?php echo $index=$item['item_id']-1;?>" class="btn ">Check </a>
                            </div>
                            </form> 
                        </div>
                        <br>
                    </div>
                
                <?php } ?>
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
    <?php if(isset($_POST['addToCart']) && !empty($_POST['addToCart'])){
    $cart->addToCart($_POST['addToCart']);
}?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>