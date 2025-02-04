<?php
include 'connection.php';

$sql = "SELECT id, menu_name, date, price, author, menu_image_data FROM product_registration";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ORDERS | AUTHOR'S CUISINE KAMA</title>
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

        <!-- Menu Section Start -->
        <section id="food-menu">
            <div class="container">
                <header class="section-header">
                    <h3>Delicious Food Menu</h3>
                </header>
                <div class="row">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-sm-6 col-md-4 col-lg-3">';
                            echo '<div class="single-menu">';
                            echo '<img class="img-fluid" src="view_image.php?id=' . $row["id"] . '" />';
                            echo '<h4>' . $row["menu_name"] . '</h4>';
                            echo '<span>UGX.' . $row["price"] . '</span><br>';
                            echo '<a href="order.php">Order Now</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "<p>No menu items available.</p>";
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- Menu Section End -->

        <!-- Cart Section Start -->
        <section id="cart">
            <div class="container">
                <header class="section-header">
                    <h3>Cart</h3>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Lorem ipsum</th>
                                        <td>$10</td>
                                        <td>
                                            <div class="quantity"><input type="text" value="1"></div>
                                        </td>
                                        <td>$10</td>
                                        <td><a href=""><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Proin Tortor</th>
                                        <td>$15</td>
                                        <td>
                                            <div class="quantity"><input type="text" value="2"></div>
                                        </td>
                                        <td>$30</td>
                                        <td><a href=""><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Aliquam Erat</th>
                                        <td>$20</td>
                                        <td>
                                            <div class="quantity"><input type="text" value="3"></div>
                                        </td>
                                        <td>$60</td>
                                        <td><a href=""><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="button">
                            <button type="submit">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Section End -->

        <!-- Checkout Section Start -->
        <section id="checkout">
            <div class="container">
                <header class="section-header">
                    <h3>Checkout</h3>
                </header>
                <div class="row form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="State" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Zip" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cards">
                            <p>We Accept:</p>
                            <img src="img/credit-cards.png" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name on Card" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Credit card number" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Exp Month" />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Exp Year" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="CVV" />
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->

        <!-- Support Section Start -->

        <?php include './includes/footer.php' ?>