<?php
session_start();
if($_SESSION['username'] == "admin1")
{
    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
        session_write_close();
    }
}

if(isset($_POST['search']) && !empty($_POST['search'])){
    $url = "../admin/user-manager.php?search=" . $_POST['search'] . ".*";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/scss/style.css">
    <script src="../app/js/script.js" defer></script>
    <script language="javascript" src="./products.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
        // require functions.php file
        require ('../product/lib/functions.php');
        require_once "db.php";
        $result = mysqli_query($conn, "SELECT * FROM tbl_product");
        $resultt = mysqli_query($connn, "SELECT * FROM tbl_member");
    ?>
</head>


<body>

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
                            <a class="nav-link fw-bold" style="color:rgb(142, 216, 229)" href="../homepage/index.php">Home</a>
                        </li>
                        <?php if($username == "admin1") { ?>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" style="color:rgb(142, 216, 229)" href="index.php">AdminDashBoard</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" style="color: rgb(211, 230, 89);" href="user-manager.php?search=.*">Users Manager</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold active" aria-current="page" style="color:rgb(142, 216, 229)" href="product-manager.php?search=.*">Products Manager</a>
                        </li>
                        
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
                </div>
            </div>
        </nav>
    </div>
    <br>
    <form name="frmUser" method="post" action="">
        <div>
            <table border="0" cellpadding="10" cellspacing="1" class="tblListForm table">
            <tr class="listheader" style="background-color: yellow;">
            <td></td>
            <td>Id</td>
            <td>Username</td>
            <td>Email</td>
            <td>Created at</td>
            </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($resultt)) {
            if($i%2==0)
            $classname="evenRow";
            else
            $classname="oddRow";
            $url = $_SERVER['REQUEST_URI']; 
            $url_components = parse_url($url);
            parse_str($url_components['query'], $params);
            $pattern = "/".$params['search']."/";
            if(preg_match($pattern, $row['username']) || preg_match($pattern, $row['email'])){
            ?>
            <tr class="<?php if(isset($classname)) echo $classname;?>">
            <?php 
                if($row["username"] != "admin1"){ ?>
                        <td><input type="checkbox" name="users[]" value="<?php echo $row["id"]; ?>" ></td>
                    <?php  
                }
                else{
                    ?>
                        <td></td>
                    <?php
                }
            ?>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["create_at"]; ?></td>
            </tr>
            <?php
            $i++;
            }
            }
            ?>
            <tr class="listheader">
            <td colspan="4"><input class="btn btn-danger" type="button" name="delete" value="Delete"  onClick="setDeleteUAction();"/></td>
            </tr>
            </table>
        </div>
    </form>

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

</html>