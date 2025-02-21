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
    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }

        #featured>div.row.mx-auto.container>nav>ul>li.page-item.active>a {
            background-color: black;
        }

        #featured>div.row.mx-auto.container>nav>ul>li:nth-child(n):hover>a {
            background-color: coral;
            color: white;
        }

        .pagination a {
            color: black;
        }
    </style>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="shop.php">Shop</a>
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

    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2 class="font-weight-bold">MEN PRODUCTS</h2>
            <hr>
            <p>Here you can check out our products with fair price on rymo.</p>
        </div>
        <div class="row mx-auto container">
            <div onclick="window.location.href = 'product.php'" class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">T-Shirt</h5>
                    <h4 class="p-price">Rs. 892.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="T-Shirt">
                    <input type="hidden" name="Price" value="892.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/6.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Brown Blazzer</h5>
                    <h4 class="p-price">Rs. 2674.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Brown Blazzer">
                    <input type="hidden" name="Price" value="2674.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/8.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Cold Cot</h5>
                    <h4 class="p-price">Rs. 4261.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Cold Cot">
                    <input type="hidden" name="Price" value="4261.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/16.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Shirtzip</h5>
                    <h4 class="p-price">Rs. 359.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Shirtzip">
                    <input type="hidden" name="Price" value="359.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/19.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Black Hoddy</h5>
                    <h4 class="p-price">Rs. 1259.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Black Hoddy">
                    <input type="hidden" name="Price" value="1259.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/21.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Blacky Zet</h5>
                    <h4 class="p-price">Rs. 6549.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Blacky Zet">
                    <input type="hidden" name="Price" value="6549.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/24.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">White T-Shirt</h5>
                    <h4 class="p-price">Rs. 256.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="White T-Shirt">
                    <input type="hidden" name="Price" value="256.00">
                </form>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                    <img class="img-fluid mb-3" src="../img/shop/23.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Tancor Shirt</h5>
                    <h4 class="p-price">Rs. 499.00</h4>
                    <button type="submit" name="Add_To_Cart" class="buy-btn">Buy Now</button>
                    <input type="hidden" name="Item_Name" value="Tancor Shirt">
                    <input type="hidden" name="Price" value="499.00">
                </form>
            </div>
            <nav aria-label="...">
                <ul class="pagination mt-5">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item " aria-current="page">
                        <a class="page-link">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

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
