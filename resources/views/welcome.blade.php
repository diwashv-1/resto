<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Restaurant HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/39/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/39/1/util.js"></script></head>
<body>

<!-- Header -->
<header id="header">

    <!-- Top nav -->
    <div id="top-nav">
        <div class="container">

            <!-- logo -->
            <div class="logo">
                <a href="index.html"><img src="{{asset('./img/logo.jpg')}}" alt="logo"></a>
            </div>
            <!-- logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- Mobile toggle -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Reservation</a></li>
                <li><a href="#">Galery</a></li>

                <li><a href="#">Contact</a></li>
            </ul>

            <!-- social links -->
            <ul class="social-nav">

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <!-- /social links -->

        </div>
    </div>
    <!-- /Top nav -->

    <!-- Bottom nav -->
    <div id="bottom-nav">
        <div class="container">
            <nav id="nav">

                <!-- nav -->

                <!-- /nav -->

                <!-- button nav -->
                <ul class="cta-nav">
                    <li><a href="#" class="main-button">Reserve</a></li>
                </ul>
                <!-- button nav -->

                <!-- contact nav -->
                <ul class="contact-nav nav navbar-nav">
                    <li><a href="#"><i class="fa fa-phone"></i> 980-2933333</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> C.M.C Road (Bharatpur, Nepal) </a></li>
                </ul>
                <!-- contact nav -->

            </nav>
        </div>
    </div>
    <!-- /Bottom nav -->


</header>
<!-- /Header -->

<!-- Home -->
<div id="home" class="banner-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{asset('./img/2018-08-26.jpg')}})"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">

        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="home-content">
                <h1 class="white-text">Welcome To Anusha's Restro</h1>
                <h4 class="white-text lead">We serve the best food with warm heart.</h4>
                <button class="main-button">Discover Menu</button>
            </div>
        </div>

    </div>

</div>
<!-- /Home -->

<!-- About -->
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- section header -->
            <div class="section-header text-center">
                <h4 class="sub-title">About Us</h4>
                <h2 class="title">Anusha's Restro</h2>
            </div>
            <!-- /section header -->

            <!-- about content -->
            <div class="col-md-5">
                <h4 class="lead">Welcome to Anusha's Restro. We offer you the dishes of the high quality.</h4>
            </div>
            <!-- /about content -->

            <!-- about content -->
            <div class="col-md-7">
                </div>
            <!-- /about content -->

            <!-- Galery Slider -->
            <div class="col-md-12">
                <div id="galery" class="owl-carousel owl-theme">

                    <!-- single column -->
                    <div class="galery-item">

                        <!-- single image -->
                        <div class="galery-img" style="background-image:url{{asset('./img/image01.jpg')}}"></div>
                        <!-- /single image -->

                    </div>
                    <!-- single column -->

                    <!-- single column -->
                    <div class="galery-item">

                        <!-- single image -->
                        <div class="galery-img" style="background-image:url({{asset('./img/image02.jpg')}})"></div>
                        <!-- /single image -->

                        <!-- single image -->
                        <div class="galery-img" style="background-image:url{{asset('./img/image03.jpg')}}"></div>
                        <!-- /single image -->

                    </div>
                    <!-- single column -->

                    <!-- single column -->
                    <div class="galery-item">

                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url({{asset('./img/image04.jpg')}})"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="galery-img" style="background-image:url({{asset('./img/image05.jpg')}})"></div>
                            <!-- /single image -->
                        </div>

                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url({{asset('./img/image06.jpg')}})"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="galery-img" style="background-image:url({{asset('./img/image07.jpg')}})"></div>
                            <!-- /single image -->
                        </div>

                    </div>
                    <!-- /single column -->

                </div>
            </div>
            <!-- /Galery Slider -->


        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /About -->


<!-- Menu -->
<div id="menu" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{asset('./img/background01.jpg')}})"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="section-header text-center">
                <h4 class="sub-title">Discover</h4>
                <h2 class="title white-text">Our Menu</h2>
            </div>

            <!-- menu nav -->
            <ul class="menu-nav">
                <li class="active"><a data-toggle="tab" href="#menu1">Restro Special</a></li>
                <li><a data-toggle="tab" href="#pizza">Pizza</a></li>
                <li><a data-toggle="tab" href="#Soup">Soup</a></li>
                <li><a data-toggle="tab" href="#menu">Dessert</a></li>
            </ul>
            <!-- /menu nav -->

            <!-- menu content -->
            <div id="menu-content" class="tab-content">

                <!-- menu1 -->
                <div id="pizza" class="tab-pane fade in active">
                    <div class="col-md-6">
                        <!-- /pijja -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Veg Supreme</h4>
                                <h4 class="price">NPR 600.00</h4>
                            </div>
                            <p>Tomato Sauce, Mozzarella, Kanchan, Mushroom, Olive, Onion, Tomato,Vegetables, Oregano.</p>
                        </div>
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Double Cheese</h4>
                                <h4 class="price">NPR 650.00</h4>
                            </div>
                            <p>Tomato Sauce, Mozzarella, Kanchan, Yak, Blue Cheese.</p>
                        </div>
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Chicken Supreme</h4>
                                <h4 class="price">NPR 700.00</h4>
                            </div>
                            <p>Tomato Sauce, Mozzarella, Tomatoes, Olives, Chicken Sausage, Oregano, Chicken Salami.</p>
                        </div>
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Pollo (Chicken)</h4>
                                <h4 class="price">NPR 600.00</h4>
                            </div>
                            <p>TTomato Sauce, Mozzarella, Grilled Chicken, Sweet Corn, Onion.
                            </p>
                        </div>
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Salami Chicken</h4>
                                <h4 class="price">NPR 650.00</h4>
                            </div>
                            <p>Tomato Sauce, Mozzarella, Salami, Onion.
                            </p>
                        </div>
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Meat Lovers
                                </h4>
                                <h4 class="price">NPR 750.00</h4>
                            </div>
                            <p>Tomato Sauce, Mozzarella, Chicken Ham, Salami, Chicken Sausage, Chicken, Olive.
                            </p>
                        </div>
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Mixed Pizza
                                </h4>
                                <h4 class="price">NPR 750.00</h4>
                            </div>
                            <p>Tomato Sauce, Mozzarella, Kanchan, Chicken, Sausage, Onion, Mushroom, Olive, Oregano, Vegetables, Tomato.
                            </p>
                        </div>
                    </div>
                        <div id="menu1" class="tab-pane fade in active">
                        <!-- Restro Special-->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Aaloo Tareko</h4>
                                <h4 class="price">NPR 180.00</h4>
                            </div>
                        </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Restro Aaloo</h4>
                                <h4 class="price">NPR 200.00</h4>
                            </div>
                            </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Veg Bullet</h4>
                                <h4 class="price">NPR 220.00</h4>
                            </div>
                            </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Chicken Kurkure</h4>
                                <h4 class="price">NPR 350.00
                                </h4>
                            </div>
                           </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Chicken Drumstick</h4>
                                <h4 class="price">NPR 350.00</h4>
                            </div>
                             </div>
                        <!-- /single dish -->

                    </div>

                    <div class="col-md-6">

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Chicken Lemon Jeera</h4>
                                <h4 class="price">NPR 380.00</h4>
                            </div>
                             </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Grilled Chicken Wings</h4>
                                <h4 class="price">NPR 350.00</h4>
                            </div>
                             </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Fish Finger</h4>
                                <h4 class="price">NPR 350.00</h4>
                            </div>
                           </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Steam Fish</h4>
                                <h4 class="price">NPR 450.00
                                </h4>
                            </div>
                            </div>
                        <!-- /single dish -->

                        <!-- single dish -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Bandel Tawa/Steam</h4>
                                <h4 class="price">NPR 450.00</h4>
                            </div>
                            </div>
                        <!-- /single dish -->
                    </div>
                        <div id="Soup" class="tab-pane fade in active">
                        <!-- soup -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Mushroom Soup</h4>
                                <h4 class="price">NPR 170.00</h4>
                            </div>
                        </div>
                        <!-- /soup-->
                        <!-- soup -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Chicken Mushroom Soup</h4>
                                <h4 class="price">NPR 200.00</h4>
                            </div>
                        </div>
                        <!-- /soup-->
                        <!-- soup -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Hot & Sour Veg</h4>
                                <h4 class="price">NPR 170.00</h4>
                            </div>
                        </div>
                        <!-- /soup-->
                        <!-- soup -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Hot & Sour Chicken</h4>
                                <h4 class="price">NPR 200.00</h4>
                            </div>
                        </div>
                        <!-- /soup-->

                        <!-- Choila -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Buff</h4>
                                <h4 class="price">NPR 280.00</h4>
                            </div>
                        </div>
                        <!-- /choila-->

                        <!-- Choila -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Chicken</h4>
                                <h4 class="price">NPR 290.00</h4>
                            </div>
                        </div>
                        <!-- /choila-->

                        <!-- Choila -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Mushroom</h4>
                                <h4 class="price">NPR 260.00</h4>
                            </div>
                        </div>
                        <!-- /choila-->

                        <!-- Choila -->
                        <div class="single-dish">
                            <div class="single-dish-heading">
                                <h4 class="name">Duck</h4>
                                <h4 class="price">NPR 450.00</h4>
                            </div>
                        </div>
                        <!-- /choila-->

                    </div>

                </div>
                <!-- /menu1 -->

            </div>
            <!-- /menu content -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Menu -->

<!-- Reservation -->
<div id="reservation" class="section">

    <!-- Backgound Image -->
    <div class="bg-image" style="background-image:url({{asset('./img/slider-restaurant.jpg')}})"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- reservation form -->
            <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form class="reserve-form row">
                    <div class="section-header text-center">
                        <h4 class="sub-title">Reservation</h4>
                        <h2 class="title white-text">Book Your Table</h2>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="input" type="text" placeholder="Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input class="input" type="tel" placeholder="Phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input class="input" type="text" placeholder="MM/DD/YYYY" id="date">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="input" type="email" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="number">Number of Guests:</label>
                            <select class="input" id="number">
                                <option>1 Person</option>
                                <option>2 People</option>
                                <option>3 People</option>
                                <option>4 People</option>
                                <option>5 People</option>
                                <option>6 People</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time">Time:</label>
                            <input class="input" type="text" placeholder="HH:MM" id="time">
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button class="main-button">Book Now</button>
                    </div>

                </form>
            </div>
            <!-- /reservation form -->

            <!-- opening time -->
            <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                <div class="opening-time row">
                    <div class="section-header text-center">
                        <h2 class="title white-text">Opening Time</h2>
                    </div>
                    <ul>
                        <li>
                            <h4 class="day">Sunday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Monday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Tuesday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Wednesday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Thursday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Friday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Saturday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /opening time -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Reservation -->

<!-- Events -->

<!-- /Events -->

<!-- Contact -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-5 col-md-offset-7">
                <div class="section-header">
                    <h4 class="sub-title">Contact Us</h4>
                    <h2 class="title">Get In Touch</h2>
                </div>
                <div class="contact-content">
                    <p>We heartly welcome you with warm heart and good food.Give us a chance to serve you.</p>
                    <h3>Tel: <a href="#">056-521928</a></h3>
                    <p>Address: CMC Road
                        Bharatpur 44200
                        Nepal</p>

                    <ul class="list-inline">
                        <li><p>Follow Us:</p></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

    <!-- map -->
     <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.059232167174!2d84.4297964!3d27.6859372!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb43c69241a10693!2sAnusha&#39;s%20Restro!5e0!3m2!1sen!2snp!4v1576381112475!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
     </div>
    <!-- /map -->

</div>
<!-- Contact -->

<!-- Footer -->
<footer id="footer">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- copyright -->

            <!-- /copyright -->

            <!-- footer nav -->
            <div class="col-md-6">
                <nav class="footer-nav">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Menu</a>
                    <a href="#">Reservation</a>
                    <a href="#">Galery</a>

                    <a href="#">Contact</a>
                </nav>
            </div>
            <!-- /footer nav -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</footer>
<!-- /Footer -->

<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- /Preloader -->

<!-- jQuery Plugins -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/google-map.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>



</body></html>
