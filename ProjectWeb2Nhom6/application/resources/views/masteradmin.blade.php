<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Technology - Đẳng cấp công nghệ</title>

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area" >
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{ url('index') }}"> TECHNOLOGY</a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{ url('shop') }}">Tổng quan</a>
                                <!-- <ul class="dropdown">
                                    <li><a href="{{ url('index') }}">Home</a></li>
                                    <li><a href="{{ url('shop') }}">Shop</a></li>
                                    <li><a href="{{ url('single-product-details') }}">Product Details</a></li>
                                    <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                    <li><a href="{{ url('regular-page') }}">Regular Page</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#">Sản phẩm</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        
                                        <li><a href="{{ url('shop/Smartphone') }}">Smartphone</a></li>
                                        <li><a href="{{ url('shop/Tablet') }}">Tablet </a></li>
                                        <li><a href="{{ url('shop/Other') }}">Phụ kiên</a></li>
                                        <li><a href="{{ url('shop/Laptop') }}">Laptop</a></li>
                                        <!-- <li><a href="{{ url('shop') }}">Bras &amp; Panties</a></li> -->
                                    </ul>
                                    <!-- <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="{{ url('shop') }}">T-Shirts</a></li>
                                        <li><a href="{{ url('shop') }}">Polo</a></li>
                                        <li><a href="{{ url('shop') }}">Shirts</a></li>
                                        <li><a href="{{ url('shop') }}">Jackets</a></li>
                                        <li><a href="{{ url('shop') }}">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="{{ url('shop') }}">Dresses</a></li>
                                        <li><a href="{{ url('shop') }}">Shirts</a></li>
                                        <li><a href="{{ url('shop') }}">T-shirts</a></li>
                                        <li><a href="{{ url('shop') }}">Jackets</a></li>
                                        <li><a href="{{ url('shop') }}">Trench</a></li>
                                    </ul> -->
                                   
                                </div>
                            </li>
                            
                            <li><a href="{{ url('contact') }}">Liên hệ</a></li>
                            <li><button style="background-color: blue;border-radius: 5px; border-color: blue;"><a id="admin" style = "color: white;" href="{{ url('auth/logout') }}">Đăng xuất</a></button>
                                </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="{{ URL::to('/search') }}" method="GET">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <input type="search" name="query" id="keyword" placeholder="Nhập từ khóa...">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true">
                                
                            </i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                
                <!-- User Login Info -->
               
                <!-- Cart Area -->
                
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
          
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    @yield('content')

        <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix" style = "background-color: rgba(148, 148, 148);">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a style="color: white; height: 20px;" href="{{ url('index') }}"> TECHNOLOGY</a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{ url('shop') }}">Technology</a></li>
                                <li><a href="{{ url('contact') }}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#"> Máy tính bảng</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Máy ảnh</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>2018</script> All rights reserved | Lập trình web 2  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Group 6 - LTW2</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Classy Nav js -->
    <script src="{{ asset('js/classy-nav.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>

</body>

</html>