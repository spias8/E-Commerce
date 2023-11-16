<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Commerce Website</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="{{asset('logo/favicon.ico')}}" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">
    <!--
      - google font link*
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .line-long {
            width: 100%;
            border: 1px solid #ddd; /* Adjust the color as needed */
            margin: 20px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .about-section {
            margin-bottom: 40px;
        }

        .product-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .about-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .about-item {
            flex: 0 1 30%; /* Adjust the width as needed */
            text-align: center;
            margin-bottom: 20px;
        }

        .about-item img {
            width: 100%;
            height: 70%;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .user-greeting {
            font-size: 18px;
            margin-right: 10px;
            cursor: pointer;
        }

        .dropdown ul {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #fff;
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
            display: none; /* Add the "hidden" class to initially hide the dropdown menu */
        }

        .dropdown ul li {
            padding: 10px 15px;
            transition: background-color 0.3s;
        }

        .dropdown ul li a {
            text-decoration: none;
            color: #000;
            display: block;
        }

        .dropdown ul li:hover {
            background-color: hsl(51 , 100% , 50%);; /* Add the hover effect color here */
        }

        .dropdown:hover ul {
            display: block;
        }

    </style>
</head>
<body>
<header>

    <div class="header-top">

        <div class="container">

            <ul class="header-social-container">

                {{--          <li>--}}
                {{--            <a href="#" class="social-link">--}}
                {{--              <ion-icon name="logo-facebook"></ion-icon>--}}
                {{--            </a>--}}
                {{--          </li>--}}

                {{--          <li>--}}
                {{--            <a href="#" class="social-link">--}}
                {{--              <ion-icon name="logo-twitter"></ion-icon>--}}
                {{--            </a>--}}
                {{--          </li>--}}

                {{--          <li>--}}
                {{--            <a href="#" class="social-link">--}}
                {{--              <ion-icon name="logo-instagram"></ion-icon>--}}
                {{--            </a>--}}
                {{--          </li>--}}

                {{--          <li>--}}
                {{--            <a href="#" class="social-link">--}}
                {{--              <ion-icon name="logo-linkedin"></ion-icon>--}}
                {{--            </a>--}}
                {{--          </li>--}}
                <li>
                    <a href="{{route('delivaryregistration')}}" class="social-link">
                        <p style="font-size: 10px;">Want to our Delivary Boy?</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('sellerregistration')}}" class="social-link">
                        <p style="font-size: 10px;">Become a seller?</p>
                    </a>
                </li>

            </ul>



            <div class="header-top-actions">

                <select name="currency" id="currency">

                    <option value="usd">USD &dollar;</option>
                    <option value="eur">EUR &euro;</option>
                    <option value="bdt">BDT &#2547;</option>

                </select>

                <select name="language">

                    <option value="en-US">English</option>
                    <option value="es-ES">Espa&ntilde;ol</option>
                    <option value="fr">Fran&ccedil;ais</option>

                </select>

            </div>

        </div>

    </div>

    <div class="header-main">

        <div class="container">

            <a href="#" class="header-logo">
                <img src="{{asset('logo/logo.svg')}}" alt="Anon's logo" width="120" height="36">
            </a>

            <div class="header-search-container">

                <form action="{{route('allproduct')}}" method="get">
                    @csrf
                    <input type="search" name="search" class="search-field" value="" placeholder="Search your product...">

                    <button class="search-btn" type="submit">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>

            </div>

            <div class="header-user-actions">
                {{--            <a href="{{route('login')}}" class="action-btn">--}}
                {{--            <ion-icon name="person-outline"></ion-icon>--}}
                {{--        </a>--}}



                <button class="action-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="count">0</span>
                </button>

            </div>

        </div>

    </div>

    <nav class="desktop-navigation-menu">


        <div class="container">

            <ul class="desktop-menu-category-list">

                <li class="menu-category">
                    <a href="/" class="menu-title" >Home</a>
                </li>

                <li class="menu-category">
                    <a href="{{route('login')}}" class="menu-title">Sign in</a>
                </li>

                <li class="menu-category">
                    <a href="{{route('register')}}" class="menu-title">Sign up</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Categories</a>
                    <ul class="dropdown-list">

                        @foreach($category as $cata)
                            <li class="dropdown-item">
                                <a href="{{route('productlist',['category'=>$cata->Category_Name])}}">{{$cata->Category_Name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                {{--          <li class="menu-category">--}}
                {{--            <a href="#" class="menu-title">Categories</a>--}}

                {{--            <div class="dropdown-panel">--}}

                {{--              <ul class="dropdown-panel-list">--}}

                {{--                <li class="menu-title">--}}
                {{--                  <a href="#">Kids</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Shirt</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">T-Shirt</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Shoes</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Diaper</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Toy</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">--}}
                {{--                    <img src="{{asset('logo/electronics-banner-1.jpg')}}" alt="headphone collection" width="250"--}}
                {{--                      height="119">--}}
                {{--                  </a>--}}
                {{--                </li>--}}

                {{--              </ul>--}}

                {{--              <ul class="dropdown-panel-list">--}}

                {{--                <li class="menu-title">--}}
                {{--                  <a href="#">Men's</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Formal</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Casual</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Sports</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Jacket</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Sunglasses</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">--}}
                {{--                    <img src="{{asset('logo/mens-banner.jpg')}}" alt="men's fashion" width="250" height="119">--}}
                {{--                  </a>--}}
                {{--                </li>--}}

                {{--              </ul>--}}

                {{--              <ul class="dropdown-panel-list">--}}

                {{--                <li class="menu-title">--}}
                {{--                  <a href="#">Women's</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Formal</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Casual</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Perfume</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Cosmetics</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Bags</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">--}}
                {{--                    <img src="{{asset('logo/womens-banner.jpg')}}" alt="women's fashion" width="250" height="119">--}}
                {{--                  </a>--}}
                {{--                </li>--}}

                {{--              </ul>--}}

                {{--              <ul class="dropdown-panel-list">--}}

                {{--                <li class="menu-title">--}}
                {{--                  <a href="#">Electronics</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Smart Watch</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Smart TV</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Keyboard</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Mouse</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">Microphone</a>--}}
                {{--                </li>--}}

                {{--                <li class="panel-list-item">--}}
                {{--                  <a href="#">--}}
                {{--                    <img src="{{asset('logo/electronics-banner-2.jpg')}}" alt="mouse collection" width="250" height="119">--}}
                {{--                  </a>--}}
                {{--                </li>--}}

                {{--              </ul>--}}

                {{--            </div>--}}
                {{--          </li>--}}

                <li class="menu-category">
                    <a class="menu-title" href="{{route('aboutuser')}}" style="color: blue;">About Us</a>
                </li>

                <li class="menu-category">
                    <a href="/" class="menu-title">Special Offers</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Contact Us</a>
                </li>



            </ul>

        </div>

    </nav>

    <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>

            <span class="count">0</span>
        </button>

        <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </button>

        <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>

            <span class="count">0</span>
        </button>

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="grid-outline"></ion-icon>
        </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

        <div class="menu-top">
            <h2 class="menu-title">Menu</h2>

            <button class="menu-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="mobile-menu-category-list">

            <li class="menu-category">
                <a href="#" class="menu-title" data-section="main">Home</a>
            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Men's</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Shirt</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Shorts & Jeans</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Safety Shoes</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Wallet</a>
                    </li>

                </ul>

            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Women's</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Dress & Frock</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Earrings</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Necklace</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Makeup Kit</a>
                    </li>

                </ul>

            </li>


            <li class="menu-category">
                <a class="menu-title" href="{{route('aboutuser')}}">About Us</a>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Hot Offers</a>
            </li>

            <li class="menu-category">
                <a href="{{route('login')}}" class="menu-title">Sign in</a>
            </li>

            <li class="menu-category">
                <a href="{{route('register')}}" class="menu-title">Sign up</a>
            </li>

        </ul>

        <div class="menu-bottom">

            <ul class="menu-category-list">

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Language</p>

                        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">English</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Fren&ccedil;h</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Currency</p>
                        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                    </button>

                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">USD &dollar;</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">EUR &euro;</a>
                        </li>
                    </ul>
                </li>

            </ul>

            <ul class="menu-social-container">

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

    </nav>

</header>

<main>
    <div class="main-container">

        <hr class="line-long">

        <div class="section-title">
            <h1>What's Important to Us</h1>
        </div>

        <section class="about-section">
            <div class="product-title">
                <h2>Quality and Genuine Products</h2>
            </div>

            <div class="about-content">
                <div class="about-item">
                    <p>We believe in only the best, only genuine products will be displayed on our site.</p>
                    <img src="{{asset('logo/ecommerce-product-images.jpg')}}" alt="Quality Product">
                </div>

                <div class="about-item">
                    <p>Each product purchased from our site will be given a year Warranty.</p>
                    <img src="{{asset('logo/french_fall_fashion_trends.jpg')}}" alt="Warranty">
                </div>

                <div class="about-item">
                    <p>Any pirated products shipped out by us will be fully refunded.</p>
                    <img src="{{asset('logo/game-ps5-terbaik.jpg')}}" alt="Refund">
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="product-title">
                <h2>Efficient Delivery</h2>
            </div>

            <div class="about-content">
                <div class="about-item">
                    <p>We don't like it when something takes forever, why should you?</p>
                    <p>We provide efficient and accurate delivery service.</p>
                    <p>One-day delivery will be available soon, stay tuned!</p>
                    <img src="{{asset('logo/download.jpeg')}}" alt="Delivery" style="align-items: center">
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="product-title">
                <h2>Excellent Customer Service</h2>
            </div>

            <div class="about-content">
                <div class="about-item">
                    <p>Your satisfaction is our top priority.</p>
                    <p>24-hour hotline is available to assist you with your needs anytime.</p>
                    <p>Our team consists of professionals to handle all your requests.</p>

                    <div style="width: 100%; height: 100%">
                        <img src="{{asset('logo/customer.jpg')}}" alt="Customer Service">
                    </div>

                </div>

            </div>

    </section>

    </div>
</main>

<footer>

    <div class="footer-category">

        <div class="container">

            <h2 class="footer-category-title">Brand directory</h2>

            <div class="footer-category-box">

                <h3 class="category-box-title">Fashion :</h3>

                <a href="#" class="footer-category-link">T-shirt</a>
                <a href="#" class="footer-category-link">Shirts</a>
                <a href="#" class="footer-category-link">shorts & jeans</a>
                <a href="#" class="footer-category-link">jacket</a>
                <a href="#" class="footer-category-link">dress & frock</a>
                <a href="#" class="footer-category-link">innerwear</a>
                <a href="#" class="footer-category-link">hosiery</a>

            </div>

            <div class="footer-category-box">
                <h3 class="category-box-title">footwear :</h3>

                <a href="#" class="footer-category-link">sport</a>
                <a href="#" class="footer-category-link">formal</a>
                <a href="#" class="footer-category-link">Boots</a>
                <a href="#" class="footer-category-link">casual</a>
                <a href="#" class="footer-category-link">cowboy shoes</a>
                <a href="#" class="footer-category-link">safety shoes</a>
                <a href="#" class="footer-category-link">Party wear shoes</a>
                <a href="#" class="footer-category-link">Branded</a>
                <a href="#" class="footer-category-link">Firstcopy</a>
                <a href="#" class="footer-category-link">Long shoes</a>
            </div>

            <div class="footer-category-box">
                <h3 class="category-box-title">jewellery :</h3>

                <a href="#" class="footer-category-link">Necklace</a>
                <a href="#" class="footer-category-link">Earrings</a>
                <a href="#" class="footer-category-link">Couple rings</a>
                <a href="#" class="footer-category-link">Pendants</a>
                <a href="#" class="footer-category-link">Crystal</a>
                <a href="#" class="footer-category-link">Bangles</a>
                <a href="#" class="footer-category-link">bracelets</a>
                <a href="#" class="footer-category-link">nosepin</a>
                <a href="#" class="footer-category-link">chain</a>
                <a href="#" class="footer-category-link">Earrings</a>
                <a href="#" class="footer-category-link">Couple rings</a>
            </div>

            <div class="footer-category-box">
                <h3 class="category-box-title">cosmetics :</h3>

                <a href="#" class="footer-category-link">Shampoo</a>
                <a href="#" class="footer-category-link">Bodywash</a>
                <a href="#" class="footer-category-link">Facewash</a>
                <a href="#" class="footer-category-link">makeup kit</a>
                <a href="#" class="footer-category-link">liner</a>
                <a href="#" class="footer-category-link">lipstick</a>
                <a href="#" class="footer-category-link">prefume</a>
                <a href="#" class="footer-category-link">Body soap</a>
                <a href="#" class="footer-category-link">scrub</a>
                <a href="#" class="footer-category-link">hair gel</a>
                <a href="#" class="footer-category-link">hair colors</a>
                <a href="#" class="footer-category-link">hair dye</a>
                <a href="#" class="footer-category-link">sunscreen</a>
                <a href="#" class="footer-category-link">skin loson</a>
                <a href="#" class="footer-category-link">liner</a>
                <a href="#" class="footer-category-link">lipstick</a>
            </div>

        </div>

    </div>

    <div class="footer-nav">

        <div class="container">

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Popular Categories</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Fashion</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Electronic</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Cosmetic</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Health</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Watches</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Products</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Prices drop</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">New products</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Best sales</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Contact us</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Sitemap</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Our Company</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Delivery</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Legal Notice</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Terms and conditions</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">About us</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Secure payment</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Services</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Prices drop</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">New products</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Best sales</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Contact us</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Sitemap</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Contact</h2>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <address class="content">
                        Mirpur-2, Dhaka - 1216
                    </address>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>

                    <a href="tel:+607936-8058" class="footer-nav-link">016 42 88 92 75 </a>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <a href="mailto:example@gmail.com" class="footer-nav-link">rubayetislam16@gmail.com</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Follow Us</h2>
                </li>

                <li>
                    <ul class="social-link">

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>

    </div>

    <div class="footer-bottom">

        <div class="container">

            <img src="{{asset('logo/payment.png')}}" alt="payment method" class="payment-img">

            <p class="copyright">
                Copyright &copy; <a href="#">E-Commerce</a> all rights reserved.
            </p>

        </div>

    </div>

</footer>

<script src="{{asset('js/script.js')}}"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>
