<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BD Restaurant</title>
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
          <!-- /***favicons***? -->
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
            <!-- Header End -->

            <!-- Contact Section Start -->
            <section id="contact">
                <div class="container">
                    <div class="section-header">
                        <h3>Contact Us</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-col-1">
                                <div class="contact-detail">
                                    <div class="contact-hours">
                                        <h4>Opening Hours</h4>
                                        <p>Monday-Friday: 7am to 12am</p>
                                        <p>Saturday: 5pm to 12am</p>
                                        <p>Sunday: 9am to 12am</p>
                                    </div>

                                    <div class="contact-info">
                                        <h4>Contact Info</h4>
                                        <p>4137  State Street, CA, USA</p>
                                        <p><a href="tel:+1-234-567-8900">+1-234-567-8900</a></p>
                                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-col-2">
                                <div class="contact-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" placeholder="Your Email" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Message" required="required" ></textarea>
                                        </div>
                                        <div><button type="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           

            <?php include './includes/footer.php'?>