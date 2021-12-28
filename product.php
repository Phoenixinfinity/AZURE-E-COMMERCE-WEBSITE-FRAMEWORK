<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rymo | The Online Experiene</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />
    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .product select {
            display: block;
            padding: 5px 10px;
        }

        .product input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .product input:focus {
            outline: none;
        }

        .buy-btn {
            background: #fb77fb;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>

</head>

<body>
    <!---Navigation---->
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
    <section class="container product mt-5 py-5 ">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="../img/shop/1.jpg" id="MainImg" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="../img/shop/1.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../img/shop/24.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../img/shop/25.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../img/shop/26.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home / T-Shirt</h6>
                <h3 class="my-4">T-Shirt (Demo)</h3>
                <h2>Rs. 892.00</h2>
                <select class="my-3">

                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                    <input type="number" value="1">
                    <form action="manage_cart.php" method="POST">
                        <button id="demo" type="submit" name="Add_To_Cart" class="buy-btn">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="T-Shirt">
                        <input type="hidden" name="Price" value="892.00">
                    </form>
                    <h4 class="mt-5 mb-5">Product Details</h4>
                    <span>The Gildan Ultra Cotton T-shirt is made from a substanial 6.0 oz. per sq. yd. fabric
                        constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort
                        with each wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and
                        unavailable in a rangeof colors, it offers it all in the ultimate head turning Package. </span>

                </select>
            </div>
        </div>

    </section>
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Related Products</h3>
            <hr class="mx-auto">

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

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img')

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>

</html>
