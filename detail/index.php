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

    $url = $_SERVER['REQUEST_URI']; 
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    if(isset($_POST['search']) && !empty($_POST['search'])){
        $url = "../show_product/index.php?search=" . $_POST['search'] . ".*";
        header("Location: $url");
    }
    
?>



<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
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
                            <a class="nav-link fw-bold active" aria-current="page" href="../homepage/index.php" style="color:rgb(142, 216, 229)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="../show_product/index.php" style="color:rgb(142, 216, 229)">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#" style="color: rgb(211, 230, 89);">Products Detail</a>
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
<!-- Details -->
    <div class="container">
        <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $product_list[$params['item_id']]['item_image'] ?>" width ="400px;" height="500px;" alt="item-1">
                    </div>
                    <div class="col-md-6" style="margin-top: 30px; font-size: 20px; letter-spacing:1px;" >
                        <ul style="line-height:35px;" class="information" >
                        <iframe name="votar" style="display:none;"></iframe>
                            <form method="POST" target="votar">
                            <input type="text" name="addToCart" value="<?php echo $product_list[$params['item_id']]['item_id']?>" hidden>
                            <li style=" color: aliceblue;">Product name : <?php echo $product_list[$params['item_id']]['item_name'] ?></li>  <!-- tên sản phẩm  -->
                            <li style=" color: aliceblue;">Price: $<?php echo $product_list[$params['item_id']]['item_price'] ?></li> <!-- giá tiền -->
                            <li style=" color: aliceblue;">Category: <?php echo $product_list[$params['item_id']]['item_cate'] ?></li> <!--cate -->
                            <li style=" color: aliceblue;">Year of production: <?php echo $product_list[$params['item_id']]['item_nsx'] ?></li><!-- ngày sản xuất -->
                            <li style=" color: aliceblue;">About this product: <?php echo $product_list[$params['item_id']]['item_about'] ?></li> <!-- about -->
                            <li class="quantity" style=" color: aliceblue;">Quantity: <?php echo $product_list[$params['item_id']]['item_qty']?>
                            </li>                       
                            <li><button class="btn btn-outline-success" type="submit" >Add To Cart</button></li>
                            </form>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" >
                        <h4>Related Products</h4>
                        <hr>
                        <?php $i=0;
                        foreach($product_list as $item){
                            if ($item['item_cate']==$product_list[$params['item_id']]['item_cate']){
                               ?>
                               <a href="../detail/index.php?item_id=<?php echo $link=$item['item_id']-1;?>"> <img src="<?php echo $item['item_image'] ?>" style="width:100px; height:110px;"></a>
                           <?php
                            $i++;   
                        }
                        }?>
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
<?php if(isset($_POST['addToCart']) && !empty($_POST['addToCart'])){
    $cart->addToCart($_POST['addToCart']);
}?>
</body>
</html>