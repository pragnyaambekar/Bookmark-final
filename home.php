<?php
$con = mysqli_connect("localhost","root","","bookmark") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The BookMark</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <!-- header section -->
    <header class="header">
        <div class="header-1">
        <a href="home.php" class="logo"><i class="fa-solid fa-book"></i>The BookMark</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here" id="search-box">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
                <a href="#" class="fa-solid fa-cart-shopping"></a>
                <a href="profile.php" class="fa-solid fa-user"></a>
                <a href="logout.php" class="fa-solid fa-sign-out"></a>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="#featured">featured</a>
                <a href="#deal">Deal</a>
                <a href="aboutus.php">About us</a>
                <a href="contactus.php">Contact us</a>
            </nav>
        </div>

    </header>



    <!-- header section end -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <h1><?php echo "Hello ".$_SESSION['name']."!"; ?></h1>

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                
                <h3>upto 75% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias
                    sit necessitatibus, aliquid ex minima at!</p>
                <a href="#featured" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <a class="item active">
                                <img src="https://s26162.pcdn.co/wp-content/uploads/2015/12/bookseller-picks-2015.png"
                                    alt="" style="width:100%; height: 480px; margin: auto;">
                            </a>

                            <a class="item">
                                <img src="https://i.guim.co.uk/img/media/77e3e93d6571da3a5d77f74be57e618d5d930430/0_0_2560_1536/master/2560.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=c99740fab952ee29d238d75272b98a61"
                                    alt="" style="width:100%; height: 480px; margin: auto;">
                            </a>

                            <a class="item">
                                <img src="https://i.pinimg.com/originals/ba/f2/c1/baf2c1631c86fc403a7879818af99267.jpg"
                                    alt="" style="width:100%; height: 480px; margin: auto;">
                            </a>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- home section ends  -->

    <!-- icons section starts  -->

    <section class="icons-container">


        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->


    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured books</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="swiper-slide box">
                                <div class="image">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/81IzbD2IiIL.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h3>The Kite Runner</h3>
                                    <div class="price">Rs 250<span>Rs 370</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="swiper-slide box">
                                <div class="image">
                                    <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1470082995i/29056083.jpg"
                                        alt="">
                                </div>
                                <div class="content">
                                    <h3>Harry Potter and the cursed child</h3>
                                    <div class="price">Rs 320 <span>Rs 480</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="swiper-slide box">
                                <div class="image">
                                    <img src="https://kbimages1-a.akamaihd.net/7165f0d7-a437-4313-8294-68cfcaf3d717/1200/1200/False/sapiens-5.jpg"
                                        alt="">
                                </div>
                                <div class="content">
                                    <h3>Sapiens</h3>
                                    <div class="price">Rs 800<span>Rs 1200</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="swiper-slide box">
                                <div class="image">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/412x5bm0IpL._SX301_BO1,204,203,200_.jpg"
                                        alt="">
                                </div>
                                <div class="content">
                                    <h3>Tuesdays With Morrie</h3>
                                    <div class="price">Rs 400 <span>Rs 550</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="swiper-slide box">
                                <div class="image">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71aFt4+OTOL.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h3>The alchemist</h3>
                                    <div class="price">Rs 560 <span>Rs 616</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="swiper-slide box">
                                <div class="image">
                                    <img src="https://m.media-amazon.com/images/I/41HXEG13EKL.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h3>Cant hurt me</h3>
                                    <div class="price">Rs 700 <span>Rs 970</span></div>
                                    <a href="#" class="btn">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- featured section ends  -->

    <!-- deal section starts  -->

    <section class="deal" id="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora
                quaerat at fuga dolorum natus velit.</p>
            <a href="#featured" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="https://storage.googleapis.com/kaggle-datasets-images/1724630/2820372/29aa847032183d94339fbbe3ed3650e7/dataset-cover.jpg?t=2021-11-16-19-28-50"
                alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> bhagyashreejena@gmail.com </a>
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> © 2022, <span>NFC Solutions, Inc. or its affiliates</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->






    <script src="thebookmark.js"></script>

</body>

</html>