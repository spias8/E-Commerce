<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>

    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">

    <script src="//code.tidio.co/2l8awmiopxub2rsj7vuajrnkxy2xnqln.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>

    <style>
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

            <a href="{{route('dashboard',['id'=>$user->id])}}" class="header-logo">
                <img src="{{asset('logo/logo.svg')}}" alt="Anon's logo" width="120" height="36">
            </a>

            <div class="header-search-container">
                <form action="{{route('allproduct2',['id'=>$user->id])}}" method="get">
                    @csrf
                    <input type="search" name="search" class="search-field" placeholder="Enter your product...">

                    <button class="search-btn" type="submit">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>
            </div>

            <div class="header-user-actions">


                <div class="dropdown">
                    <span style="font-size: 15px;" class="user-greeting" onclick="toggleDropdown()">Hello, {{ implode(' ', array_slice(explode(' ', $user->name), 0, 3)) }}</span>
                    <ul>
                        <li><a href="{{ route('yourprducts',['id'=>$user->id]) }}" style="font-size: 15px">My Products</a></li>
                        <li><a href="/" style="font-size: 15px;">Logout</a></li>
                    </ul>
                </div>

                @if($userfind)
                    <a class="action-btn" href="{{ route('cart',['id' => $user->id]) }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="count">{{ $total }}</span>
                    </a>
                @else
                    <a class="action-btn" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                @endif



            </div>

        </div>

    </div>

    <nav class="desktop-navigation-menu">

        <div class="container">

            <ul class="desktop-menu-category-list">


                <li class="menu-category">
                    <a href="#" class="menu-title" style="color: blue;">Home</a>
                </li>

                <li class="menu-category">
                    <a href="{{route('postanadd',['id'=>$user->id])}}" class="menu-title">Post an Add</a>
                </li>
                <li class="menu-category">
                    <a href="{{route('aboutus',['id'=>$user->id])}}" class="menu-title">About Us</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Categories</a>
                    <ul class="dropdown-list">

                        @foreach($category as $cata)
                            <li class="dropdown-item">
                                <a href="{{route('productlist2',['id'=>$user->id,'category'=>$cata->Category_Name])}}">{{$cata->Category_Name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>


                <li class="menu-category">
                    <a href="{{route('contactus2',['id'=>$user->id])}}" class="menu-title">Contact Us</a>
                </li>

            </ul>

        </div>

    </nav>

    <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <a href="{{ route('cart', ['id' => $user->id]) }}" class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">{{ $total }}</span>
        </a>


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
                <a href="#" class="menu-title">Home</a>
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
                <a href="{{route('aboutus',['id'=>$user->id])}}" class="menu-title">About Us</a>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Hot Offers</a>
            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">{{ $user->name }}</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="{{ route('purchase',['id'=>$user->id]) }}" class="submenu-title">Purchase History</a>
                    </li>

                    <li class="submenu-category">
                        <a href="/" class="submenu-title">Logout</a>
                    </li>

                </ul>

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


<div class="product-main">

    <h2 class="title">New Products</h2>

    <div class="product-grid">
        @foreach($products2 as $prod)

            @if($prod->userid != $user->id)
                <div class="showcase">

                    <div class="showcase-banner">

                        <a href="{{ route('product2', ['id' => $prod->id,'ids'=>$user->id,'category'=>$prod->category]) }}">
                            <img src="{{asset('storage/' .$prod->img1)}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                            <img src="{{asset('storage/' .$prod->img2)}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                        </a>
                        @if($prod->type === 'Standard')
                            <p class="showcase-badge">{{$prod->end_date}}</p>
                        @elseif($prod->type === 'Premium')
                            <p class="showcase-badge">{{$prod->end_date}}</p>
                        @endif


                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">{{$prod->name}}</a>

                        <a href="#">
                            <h3 class="showcase-title">{{$prod->description}}</h3>
                        </a>

                        <a href="tel:{{$prod->phone}}">
                            <h3 class="showcase-title"><strong>{{$prod->phone}}</strong></h3>
                        </a>


                        <div class="price-box">
                            <p class="price" data-price-usd="{{$prod->price}}">${{$prod->price}}</p>
                        </div>

                    </div>

                </div>



            @else
                <div class="showcase">

                    <div class="showcase-banner">

                        <img src="{{asset('storage/' .$prod->img1)}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                        <img src="{{asset('storage/' .$prod->img2)}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                        {{$prod->userid}}
                        @if($prod->type === 'Standard')
                            <p class="showcase-badge">{{$prod->end_date}}</p>
                        @elseif($prod->type === 'Premium')
                            <p class="showcase-badge">{{$prod->end_date}}</p>
                        @endif


                    </div>

                    <div class="showcase-content">

                        <a href="#" class="showcase-category">{{$prod->name}}</a>

                        <a href="#">
                            <h3 class="showcase-title">{{$prod->description}}</h3>
                        </a>

                        <a href="tel:{{$prod->phone}}">
                            <h3 class="showcase-title"><strong>{{$prod->phone}}</strong></h3>
                        </a>


                        <div class="price-box">
                            <p class="price" data-price-usd="{{$prod->price}}">${{$prod->price}}</p>
                        </div>

                    </div>

                </div>
            @endif
        @endforeach


    </div>

</div>


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
                    <h2 class="nav-title">Usefull Links</h2>
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
                    <a href="{{route('sitemap',['id'=>$user->id])}}" class="footer-nav-link">Sitemap</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Customer Policy</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="{{route('privacypolicy')}}" class="footer-nav-link">Privacy Policy</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">FAQ</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Track Order</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Return Policy</a>
                </li>

                <li class="footer-nav-item">
                    <a href="{{route('termsandcondition')}}" class="footer-nav-link">Term and Condition</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Services</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">World Wide Delivery</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Next Day delivery</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Best online support</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Return policy</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">30% money back</a>
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
                        <ion-icon name="call-outline"></ion-icon>
                    </div>

                    <a href="tel:+607936-8058" class="footer-nav-link">016 38 75 23 71 </a>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <a href="mailto:example@gmail.com" class="footer-nav-link">customer.support@gmail.com</a>
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

<script>
    // JavaScript code to calculate and update the time elapsed
    var soldTime = new Date("{{$product3->created_at}}");
    var currentTime = new Date();
    var timeDifference = currentTime - soldTime;

    var timeElapsed = document.getElementById("timeElapsed");

    function updateElapsedTime() {
        var timeDifferenceMinutes = Math.floor(timeDifference / 60000); // Convert milliseconds to minutes
        if (timeDifferenceMinutes < 120) {
            // Less than 2 hours, show in minutes
            timeElapsed.textContent = timeDifferenceMinutes + " Minute(s) ago";
        } else {
            // More than 2 hours, switch to hours
            var timeDifferenceHours = Math.floor(timeDifferenceMinutes / 60); // Convert minutes to hours
            timeElapsed.textContent = timeDifferenceHours + " Hour(s) ago";
        }
    }

    // Update the time every minute
    setInterval(updateElapsedTime, 60000); // Update every minute (60,000 milliseconds)
    updateElapsedTime();


    const exchangeRates = {
        usd: 1,    // 1 USD to USD (base currency)
        eur: 0.85, // Example: 1 USD to EUR is 0.85
        bdt: 110.32 // Example: 1 USD to BDT is 110.32
        // Add more currencies and exchange rates as needed
    };

    // Function to update the displayed price
    function updatePrice(currency) {
        const priceElements = document.querySelectorAll('.price');
        const previousPriceElements = document.querySelectorAll('del[data-previous-price-usd]');
        const selectedCurrency = document.getElementById('currency').value;
        const exchangeRate = exchangeRates[selectedCurrency];
        const currencySymbol = getCurrencySymbol(selectedCurrency);

        priceElements.forEach(priceElement => {
            const priceInUSD = parseFloat(priceElement.getAttribute('data-price-usd'));
            const convertedPrice = (priceInUSD * exchangeRate).toFixed(2);
            const formattedPrice = currency === 'usd' ? `$${priceInUSD}` : `${currencySymbol}${convertedPrice}`;
            priceElement.textContent = formattedPrice;
        });

        previousPriceElements.forEach(previousPriceElement => {
            const previousPriceInUSD = parseFloat(previousPriceElement.getAttribute('data-previous-price-usd'));
            const convertedPreviousPrice = (previousPriceInUSD * exchangeRate).toFixed(2);
            const formattedPreviousPrice = currency === 'usd' ? `$${previousPriceInUSD}` : `${currencySymbol}${convertedPreviousPrice}`;
            previousPriceElement.textContent = formattedPreviousPrice;
        });
    }

    // Function to get the currency symbol
    function getCurrencySymbol(currency) {
        switch (currency) {
            case 'usd':
                return '$';
            case 'eur':
                return '€'; // Euro symbol
            case 'bdt':
                return '৳'; // BDT symbol
            default:
                return currency;
        }
    }

    // Attach an event listener to the currency select element
    document.getElementById('currency').addEventListener('change', function() {
        const selectedCurrency = this.value;
        updatePrice(selectedCurrency);
    });

    // Initialize the price with the default currency (USD)
    updatePrice('usd');

    function toggleDropdown() {
        var dropdown = document.querySelector(".dropdown ul");
        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.user-greeting')) {
            var dropdowns = document.querySelectorAll(".dropdown ul");
            dropdowns.forEach(function (dropdown) {
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                }
            });
        }
    }
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
