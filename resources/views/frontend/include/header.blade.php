<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li class="myaccount"><a href="{{ route('sign-in') }}"><span>My Account</span></a></li>
                        <li class="wishlist"><a href="{{ route('my-wishlist') }}"><span>Wishlist</span></a></li>
                        <li class="header_cart hidden-xs"><a href="{{ route('shopping-cart') }}"><span>My Cart</span></a></li>
                        <li class="check"><a href="{{ route('checkout') }}"><span>Checkout</span></a></li>
                        <li class="login"><a href="{{ route('sign-in') }}"><span>Login</span></a></li>
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                data-toggle="dropdown"><span class="value">USD
                                </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle"
                                data-hover="dropdown" data-toggle="dropdown"><span class="value">English
                                </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a href="{{ route('home') }}"> <img src="asset/frontend/assets/images/logo.png" alt="logo">
                        </a> </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="{{ route('category') }}">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="{{ route('category') }}">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="{{ route('category') }}">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="{{ route('category') }}">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="{{ route('category') }}">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#"></a>
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart"> <a href="{{ route('shopping-cart') }}" class="dropdown-toggle lnk-cart"
                            data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <div class="basket-item-count"><span class="count">2</span></div>
                                    <div class="total-price-basket"> <span class="lbl">Shopping
                                            Cart</span> <span class="value">$4580</span> </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image"> <a href="{{ route('product-details') }}"><img
                                                        src="asset/frontend/assets/images/products/p4.jpg" alt=""></a> </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="name"><a href="index8a95.html?page-detail">Simple
                                                    Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sub Total
                                            :</span><span class='price'>$600.00</span> </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html"
                                        class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown"> <a href="{{ route('home') }}">Home</a> </li>
                                <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown"
                                        class="dropdown-toggle" data-toggle="dropdown">Clothing</a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Men</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Dresses</a></li>
                                                            <li><a href="{{ route('category') }}">Shoes </a></li>
                                                            <li><a href="{{ route('category') }}">Jackets</a></li>
                                                            <li><a href="{{ route('category') }}">Sunglasses</a></li>
                                                            <li><a href="{{ route('category') }}">Sport Wear</a></li>
                                                            <li><a href="{{ route('category') }}">Blazers</a></li>
                                                            <li><a href="{{ route('category') }}">Shirts</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Women</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Handbags</a></li>
                                                            <li><a href="{{ route('category') }}">Jwellery</a></li>
                                                            <li><a href="{{ route('category') }}">Swimwear </a></li>
                                                            <li><a href="{{ route('category') }}">Tops</a></li>
                                                            <li><a href="{{ route('category') }}">Flats</a></li>
                                                            <li><a href="{{ route('category') }}">Shoes</a></li>
                                                            <li><a href="{{ route('category') }}">Winter Wear</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Boys</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Toys & Games</a></li>
                                                            <li><a href="{{ route('category') }}">Jeans</a></li>
                                                            <li><a href="{{ route('category') }}">Shirts</a></li>
                                                            <li><a href="{{ route('category') }}">Shoes</a></li>
                                                            <li><a href="{{ route('category') }}">School Bags</a></li>
                                                            <li><a href="{{ route('category') }}">Lunch Box</a></li>
                                                            <li><a href="{{ route('category') }}">Footwear</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title">Girls</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Sandals </a></li>
                                                            <li><a href="{{ route('category') }}">Shorts</a></li>
                                                            <li><a href="{{ route('category') }}">Dresses</a></li>
                                                            <li><a href="{{ route('category') }}">Jwellery</a></li>
                                                            <li><a href="{{ route('category') }}">Bags</a></li>
                                                            <li><a href="{{ route('category') }}">Night Dress</a></li>
                                                            <li><a href="{{ route('category') }}">Swim Wear</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                        <img class="img-responsive"
                                                            src="asset/frontend/assets/images/banners/top-menu-banner.jpg" alt="">
                                                    </div>
                                                    <!-- /.yamm-content -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown mega-menu">
                                    <a href="{{ route('category') }}" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown">Electronics <span
                                            class="menu-label hot-menu hidden-xs">hot</span> </a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Laptops</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Gaming</a></li>
                                                            <li><a href="{{ route('category') }}">Laptop Skins</a></li>
                                                            <li><a href="{{ route('category') }}">Apple</a></li>
                                                            <li><a href="{{ route('category') }}">Dell</a></li>
                                                            <li><a href="{{ route('category') }}">Lenovo</a></li>
                                                            <li><a href="{{ route('category') }}">Microsoft</a></li>
                                                            <li><a href="{{ route('category') }}">Asus</a></li>
                                                            <li><a href="{{ route('category') }}">Adapters</a></li>
                                                            <li><a href="{{ route('category') }}">Batteries</a></li>
                                                            <li><a href="{{ route('category') }}">Cooling Pads</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Desktops</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Routers & Modems</a></li>
                                                            <li><a href="{{ route('category') }}">CPUs, Processors</a></li>
                                                            <li><a href="{{ route('category') }}">PC Gaming Store</a></li>
                                                            <li><a href="{{ route('category') }}">Graphics Cards</a></li>
                                                            <li><a href="{{ route('category') }}">Components</a></li>
                                                            <li><a href="{{ route('category') }}">Webcam</a></li>
                                                            <li><a href="{{ route('category') }}">Memory (RAM)</a></li>
                                                            <li><a href="{{ route('category') }}">Motherboards</a></li>
                                                            <li><a href="{{ route('category') }}">Keyboards</a></li>
                                                            <li><a href="{{ route('category') }}">Headphones</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Cameras</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Accessories</a></li>
                                                            <li><a href="{{ route('category') }}">Binoculars</a></li>
                                                            <li><a href="{{ route('category') }}">Telescopes</a></li>
                                                            <li><a href="{{ route('category') }}">Camcorders</a></li>
                                                            <li><a href="{{ route('category') }}">Digital</a></li>
                                                            <li><a href="{{ route('category') }}">Film Cameras</a></li>
                                                            <li><a href="{{ route('category') }}">Flashes</a></li>
                                                            <li><a href="{{ route('category') }}">Lenses</a></li>
                                                            <li><a href="{{ route('category') }}">Surveillance</a></li>
                                                            <li><a href="{{ route('category') }}">Tripods</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                        <h2 class="title">Mobile Phones</h2>
                                                        <ul class="links">
                                                            <li><a href="{{ route('category') }}">Apple</a></li>
                                                            <li><a href="{{ route('category') }}">Samsung</a></li>
                                                            <li><a href="{{ route('category') }}">Lenovo</a></li>
                                                            <li><a href="{{ route('category') }}">Motorola</a></li>
                                                            <li><a href="{{ route('category') }}">LeEco</a></li>
                                                            <li><a href="{{ route('category') }}">Asus</a></li>
                                                            <li><a href="{{ route('category') }}">Acer</a></li>
                                                            <li><a href="{{ route('category') }}">Accessories</a></li>
                                                            <li><a href="{{ route('category') }}">Headphones</a></li>
                                                            <li><a href="{{ route('category') }}">Memory Cards</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner">
                                                        <a href="{{ route('category') }}"><img alt=""
                                                                src="asset/frontend/assets/images/banners/top-menu-banner1.jpg"></a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown hidden-sm"> <a href="{{ route('category') }}">Health & Beauty <span
                                            class="menu-label new-menu hidden-xs">new</span> </a> </li>
                                <li class="dropdown hidden-sm"> <a href="{{ route('category') }}">Watches</a> </li>
                                <li class="dropdown"> <a href="{{ route('contact') }}">Jewellery</a> </li>
                                <li class="dropdown"> <a href="{{ route('contact') }}">Shoes</a> </li>
                                <li class="dropdown"> <a href="{{ route('contact') }}">Kids & Girls</a> </li>
                                <li class="dropdown"> <a href="{{ route('home') }}" class="dropdown-toggle" data-hover="dropdown"
                                        data-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="{{ route('home') }}">Home</a></li>
                                                            <li><a href="{{ route('category') }}">Category</a></li>
                                                            <li><a href="{{ route('product-details') }}">Detail</a></li>
                                                            <li><a href="{{ route('shopping-cart') }}">Shopping Cart
                                                                    Summary</a></li>
                                                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                            <li><a href="{{ route('blog') }}">Blog</a></li>
                                                            <li><a href="{{ route('blog-details') }}">Blog Detail</a></li>
                                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                                            <li><a href="{{ route('sign-in') }}">Sign In</a></li>
                                                            <li><a href="{{ route('my-wishlist') }}">Wishlist</a></li>
                                                            <li><a href="{{ route('terms') }}">Terms and
                                                                    Condition</a></li>
                                                            <li><a href="{{ route('track-orders') }}">Track Orders</a></li>
                                                            <li><a href="{{ route('product-comparison') }}">Product-Comparison</a>
                                                            </li>
                                                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                                                            <li><a href="{{ route('404') }}">404</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown  navbar-right special-menu"> <a href="{{ route('category') }}">Get 30% off on
                                        selected items</a> </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
