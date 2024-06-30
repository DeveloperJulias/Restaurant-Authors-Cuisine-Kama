<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN|AUTHOR'S CUISINE KAMA</title>    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Nunito:600,700,800,900" rel="stylesheet"> 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- /***favicons***? -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>

<header id="header">
        <div class="container">
            <!-- <div class="logo">
                <img src="img/logo.png" alt="BD Restaurant Logo">
            </div> -->
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
                                    <!-- <li><a href="#">Drop Down 2</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="login">
        <div class="container">
            <div class="section-header">
                <h3>Registration / Login</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="login-col-1">
                        <div class="login-form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Repeat Your Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-col-2">
                        <div class="login-form">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php include './includes/footer.php'?>