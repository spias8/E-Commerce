<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">

    <!--
      - google font link*
    -->

    <script src="//code.tidio.co/2l8awmiopxub2rsj7vuajrnkxy2xnqln.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>

    <style>
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
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

        .table-wrapper {
            max-height: 400px; /* Adjust as needed */
            overflow-y: auto;
            position: relative;
        }

        .table thead {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
        }

        /* Remove table border and adjust other styles */
        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        /* Apply styles to table cells */
        .table th,
        .table td {
            padding: 8px;
            /* Remove border from table cells */
            border: none;
            /* ... (other styles) */
        }

        /* Optional: Adjustments for the fixed header appearance */
        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
            /* ... (other styles) */
        }

        .container {
            position: relative;
        }

        .table-wrapper {
            max-height: 400px; /* Adjust as needed */
            overflow-y: auto;
        }

        .table-footer {
            position: sticky;
            bottom: 0;
            background-color: #fff;
            width: 100%;
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

            <a href="#" class="header-logo">
                <img src="{{asset('storage/' .$user->Pic)}}" alt="{{$user->store_name}} logo" width="120" height="36">
            </a>

            <div class="header-search-container">
                <form action="#" method="get">
                    @csrf
                    <input type="search" name="search" class="search-field" placeholder="Enter your product...">

                    <button class="search-btn" type="submit">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>
            </div>

            <div class="header-user-actions">


                <div class="dropdown">
                    <span style="font-size: 15px;" class="user-greeting" onclick="toggleDropdown()">Hello, {{ implode(' ', array_slice(explode(' ', $user->store_name), 0, 3)) }}</span>
                    <ul>
                        <li><a href="{{route('sellerprofile',['id'=>$user->seller_id])}}" style="font-size: 15px">My Profile</a></li>
                        <li><a href="#" style="font-size: 15px">Purchase History</a></li>
                        <li><a href="/" style="font-size: 15px;">Logout</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <nav class="desktop-navigation-menu">

        <div class="container">

            <ul class="desktop-menu-category-list">

                <li class="menu-category">
                    <a href="{{route('sellerhomepage',['id'=>$user->seller_id])}}" class="menu-title">Home</a>

                <li class="menu-category">
                    <a href="{{route('addproduct',['id'=>$user->seller_id])}}" class="menu-title">Add Product</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Categories</a>
                    <ul class="dropdown-list">

                        @foreach($category as $cata)
                            <li class="dropdown-item">
                                <a href="{{route('sellerproduct',['id'=>$user->seller_id,'category'=>$cata->Category_Name])}}">{{$cata->Category_Name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>


                <li class="menu-category">
                    <a href="#" class="menu-title" style="color: blue;">Total Sells</a>
                </li>
                <li class="menu-category">
                    <a href="{{route('dailyupdate',['id'=>$user->seller_id])}}" class="menu-title" target="_blank">Daily Update</a>
                </li>
                <li class="menu-category">
                    <a href="{{route('monthly',['id'=>$user->seller_id])}}" class="menu-title" target="_blank">Monthly Report</a>
                </li>

            </ul>

        </div>

    </nav>

    <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        {{--        <a href="{{ route('cart', ['id' => $user->id]) }}" class="action-btn">--}}
        {{--            <ion-icon name="bag-handle-outline"></ion-icon>--}}
        {{--            <span class="count">{{ $total }}</span>--}}
        {{--        </a>--}}


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



            {{--            <li class="menu-category">--}}
            {{--                <a href="{{route('aboutus',['id'=>$user->id])}}" class="menu-title">About Us</a>--}}
            {{--            </li>--}}

            <li class="menu-category">
                <a href="#" class="menu-title">Hot Offers</a>
            </li>

            <li class="menu-category">

                {{--                <button class="accordion-menu" data-accordion-btn>--}}
                {{--                    <p class="menu-title">{{ $user->name }}</p>--}}

                {{--                    <div>--}}
                {{--                        <ion-icon name="add-outline" class="add-icon"></ion-icon>--}}
                {{--                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>--}}
                {{--                    </div>--}}
                {{--                </button>--}}

                <ul class="submenu-category-list" data-accordion>

                    {{--                    <li class="submenu-category">--}}
                    {{--                        <a href="{{ route('purchase',['id'=>$user->id]) }}" class="submenu-title">Purchase History</a>--}}
                    {{--                    </li>--}}

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


<div class="container">
    <h1>Order History</h1>

    <div class="table-wrapper">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Product</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Purchase Date</th>
            <th scope="col">Delivary Date</th>
            <th scope="col">Order Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $saw)
            <tr>
                <input type="hidden" name="id" value="{{$saw->product_id}}">
                <th scope="row">{{$saw->order_id}}</th>
                <td>{{$saw->products}}</td>
                <td><img src="{{ asset('storage/' . $saw->pro_pic) }}" class="rounded mx-auto d-block" width="50" height="50"></td>

                <td data-price-usd="{{$saw->Price}}">{{$saw->Price}}</td>
                <td>{{$saw->Quantity}}</td>
                <td>{{$saw->created_at}}</td>
                <td>{{$saw->Date}}</td>
                <td>{{$saw->order_status}}</td>

            </tr>
        @endforeach

        <!-- Add more rows for each order -->
        </tbody>
        <div class="table-footer">
            <table class="table">
                <tfoot>
                <!-- Table footer -->
                <tr>
                    <td colspan="3"></td>
                    <td colspan="4" style="text-align: right;"><strong>Total Price:</strong></td>
                    <td>
                        <!-- Calculate and display total price with fixed float -->
                        @php
                            $totalPrice = 0;
                            foreach($product as $saw) {
                                $totalPrice += $saw->Price;
                            }
                            echo $totalPrice; // Display total price with 2 decimal places
                        @endphp
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </table>

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






<!--
  - custom js link
-->
<script src="{{asset('js/script.js')}}"></script>
<script>
    // JavaScript code to calculate and update the time elapsed


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
<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
