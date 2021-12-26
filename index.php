<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rymo | The Online Experiene</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!--NAVIGATION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img src="../img/logo1.png" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i id="bar" class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="men.php">MEN</a></li>
                                <li><a href="women.php">WOMEN</a></li>
                                <li><a href="men.php">BOYS</a></li>
                                <li><a href="women.php">GIRLS</a></li>
                                <li><a href="featured.php">NEW ARRIVALS</a></li>
                                <li><a href="shoes.php">SHOES</a></li>
                                <li><a href="watches.php">WATCHES</a></li>
                            </ul>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">LOGIN</a>
                    </li>

                </ul>
                <div>
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    ?>
                    <a href="mycart.php" class="btn btn-outline-success">My Cart <?php echo $count; ?> </a>
                </div>
            </div>
    </nav>

    <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1> <span>Best Price</span>This Year</h1>
            <p>Shoomatic offers your very comfortable time<br>on walking and exercises.</p>
            <a href='../shop.html'>
                <button>Shop Now</button>
            </a>

        </div>
    </section>
    <section id="brand" class="container">
        <div class="row m-0 py-5">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="../img/brand/1.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="../img/brand/2.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="../img/brand/3.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="../img/brand/4.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="../img/brand/5.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="../img/brand/6.png" alt="">
        </div>
    </section>
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="../img/new/1.jpg" alt="">
                <div class="details">
                    <h2>Extreme Rare Sneakers</h2>
                    <a href="#shoes">
                        <button class="text-uppercase">Shop Now</button>
                    </a>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="../img/new/5.jpg" alt="">
                <div class="details">
                    <h2>Awesome Blank Outfit</h2>
                    <a href="#clothes">
                        <button class="text-uppercase">Shop Now</button>
                    </a>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="../img/new/3.jpg" alt="">
                <div class="details">
                    <h2>Softwear Up To 50% Off</h2>
                    <a href="#watches">
                        <button class="text-uppercase">Shop Now</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new products with fair price on rymo.</p>
        </div>
        <div class="row mx-auto container-fluid">

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">

                    <img class="img-fluid mb-3" src="../img/featured/1.jpg">

                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">Rs. 592.00</h4>
                    <button type="submit" class="buy-btn" name="Add_To_Cart">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Sports Boots">
                    <input type="hidden" name="Price" value="592.00">

                </form>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/featured/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Mactree</h5>
                    <h4 class="p-price">Rs. 350.00</h4>
                    <button type="submit" class="buy-btn" name="Add_To_Cart">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Mactree">
                    <input type="hidden" name="Price" value="350.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/featured/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">LEWIS BAG</h5>
                    <h4 class="p-price">Rs. 1570.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="LEWIS BAG">
                    <input type="hidden" name="Price" value="1570.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/featured/4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">CAPEROON CAP</h5>
                    <h4 class="p-price">Rs. 230.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="CAPEROON CAP">
                    <input type="hidden" name="Price" value="230.00">
                </form>
            </div>
        </div>
    </section>
    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection<br>UP TO 20% OFF </h1>
            <a href="../shop.html">
                <button class="text-uppercase">Shop Now</button>
            </a>
        </div>
    </section>
    <section id="clothes" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Dresses and Jumpsuites</h3>
            <hr class="mx-auto">
            <p>Here you can check out our latest Dresses and Jumpsuites on rymo.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/clothes/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Strips Blazzer</h5>
                    <h4 class="p-price">Rs. 452.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Strips Blazzer">
                    <input type="hidden" name="Price" value="452.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/clothes/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>

                    </div>
                    <h5 class="p-name">Black & White</h5>
                    <h4 class="p-price">Rs. 598.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Black & White">
                    <input type="hidden" name="Price" value="598.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/clothes/6.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Pinkfros</h5>
                    <h4 class="p-price">Rs. 2358.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Pinkfros">
                    <input type="hidden" name="Price" value="2358.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/clothes/5.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Skinny Suite</h5>
                    <h4 class="p-price">Rs. 3215.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Skinny Suite">
                    <input type="hidden" name="Price" value="3215.00">
                </form>
            </div>
        </div>
    </section>
    <section id="banner2" class="my-5 py-5">
        <div class="container">
            <h4>FASHION, STYLE & LOOK</h4>
            <h1>Trendy Collection<br>UP TO 10% OFF </h1>
            <button class="text-uppercase">Shop Now</button>
        </div>

    </section>
    <section id="watches" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Best Watches</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new watches with fair price on rymo.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/watches/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">TITAN Gem3</h5>
                    <h4 class="p-price">Rs. 856.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="TITAN Gem3">
                    <input type="hidden" name="Price" value="856.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/watches/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Nixann</h5>
                    <h4 class="p-price">Rs. 9170.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Nixann">
                    <input type="hidden" name="Price" value="9170.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/watches/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">ROLEX</h5>
                    <h4 class="p-price">Rs. 13292.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="ROLEX">
                    <input type="hidden" name="Price" value="13292.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/watches/4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Fero Gold</h5>
                    <h4 class="p-price">Rs. 7125.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Fero Gold">
                    <input type="hidden" name="Price" value="7125.00">
                </form>
            </div>
        </div>
    </section>
    <section id="shoes" class="my-5 py-5">
        <div class="container text-center mt-5 py-5">
            <h3>Running Shoes</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new shoes with fair price on rymo.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shoes/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Spark Boots</h5>
                    <h4 class="p-price">Rs. 2252.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Spark Boots">
                    <input type="hidden" name="Price" value="2252.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shoes/7.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sportzz</h5>
                    <h4 class="p-price">Rs. 3172.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Sportzz">
                    <input type="hidden" name="Price" value="3172.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shoes/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">PUMA</h5>
                    <h4 class="p-price">Rs. 5249.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="PUMA">
                    <input type="hidden" name="Price" value="5249.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shoes/5.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i style="color:rgb(230, 223, 223);" class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Bootezer</h5>
                    <h4 class="p-price">Rs. 6129.00</h4>

                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Bootezer">
                    <input type="hidden" name="Price" value="6129.00">
            </form>
        </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="../img/logo2.png" alt="">
                <p class="pt-3">Fringilla urna porttitor rhoncus dolor purus luctus venenatis lacus manga fringilla diam
                    maecenas
                    ultricies mi eget mauris.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                    <li> <a href="men.php">men</a> </li>
                    <li> <a href="women.php">women</a> </li>
                    <li> <a href="men.php">boys</a> </li>
                    <li> <a href="women.php">girls</a> </li>
                    <li> <a href="featured.php">new arrivals</a> </li>
                    <li> <a href="shoes.php">shoes</a> </li>
                    <li> <a href="watches.php">watches</a> </li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>123 STREET NAME, CITY, US</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(123) 456-7890</p>
                </div>
                <div>
                    <h6 class="text-uppercase">E-Mail</h6>
                    <p>demo@example.com</p>
                </div>

            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="../img/insta/1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../img/insta/2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../img/insta/3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../img/insta/4.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../img/insta/5.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="../img/payment.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-nowrap">
                    <p>rymo ecommerce © 2021. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-2">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>