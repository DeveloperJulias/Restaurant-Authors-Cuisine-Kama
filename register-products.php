<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>REGISTER PRODUCTS|AUTHOR'S CUISINE KAMA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Nunito:600,700,800,900" rel="stylesheet"> 

    <!-- Bootstrap CSS File -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
<main id="main">
    <!-- Banner Header Start -->
    <section class="banner-header">
        <div class="logo">
            <img src="img/logo.png" />
        </div>
    </section>
    <!-- Banner Header End -->

    <!-- Header Start -->
    <header id="header">
        <div class="container">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Online Order</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="menu-has-children"><a href="#"><i class="fa fa-user" style="margin-right: 0.5em;"></i>Logins</a>
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li class="menu-has-children"><a href="#">Administration</a>
                                <ul>
                                    <li><a href="./admin-login.php">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Checkout Section Start -->
    <section id="checkout">
        <div class="container">
            <header class="section-header">
                <h3>PRODUCT REGISTRATION</h3>
            </header>
            <form action="./routes/store-register-products.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="row form">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" alt="" width="50%" height="50%" name="product_image" style="margin-left: 16em;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="menu" placeholder="Product name" />
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="date"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="number" class="form-control" name="price" placeholder="UGX.000" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="author" placeholder="Author" />
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit" name="register-product">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact end -->

    <!-- Support Section Start -->
    <?php include './includes/footer.php'?>
</main>
</body>
</html>
