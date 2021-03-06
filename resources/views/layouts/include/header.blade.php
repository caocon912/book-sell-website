<!DOCTYPE html>
<html lang="zxx">
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fad - new style, new life</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/font-awesome.min.css')}}" type="text/css}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('app-assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        nhitty099@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        033.849.0118
                    </div>
                </div>
                <div class="ht-right">
                @if(Auth::check())
                    <a href="{{route('profile',['username'=>Auth::user()->USERNAME])}}" class="login-panel"><i class="fa fa-user"></i>Profile</a>
                    @if (Auth::user()->LEVEL=='1')
                        <a href="{{route('admin')}}" class="login-panel"><i class="fa fa-user"></i>Admin</a>
                    @endif
                    <a href="{{route('logout')}}" class="login-panel"><i class="fa fa-user"></i>Logout</a>
                @else
                    <a href="{{route('login')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <a href="{{route('register')}}" class="login-panel"><i class="fa fa-user"></i>Register</a>
                @endif
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="#">
                                <img src="{{asset('app-assets/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>0</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                            @if ($cart_items ?? '' !=null && count($cart_items ?? '')!=0)
                                                @foreach($cart_items ?? '' as $item)
                                                <tr>
                                                    <td class="si-pic"><img src="{{asset('app-assets/img/select-product-2.jpg')}}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">                 
                                                            <p>{{$item->NEW_PRICE}} X {{$item->QUANLITY}}</p>
                                                            <h6>{{$item->NAME}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <h6>Don't have any items</h6>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>{{$sub_total ?? ''}}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="{{route('view-cart-detail')}}" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="{{route('checkout')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>

                            <li class="cart-price"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <!-- <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div> -->
                <nav class="nav-menu mobile-menu">
                    <ul>
                        {{-- <li><a href="{{route('home')}}">Home</a></li> --}}
                        <li><a href="{{route('shop')}}">Shop</a></li>
                        <li><a href="{{route('view-cart-detail')}}">Cart</a></li>
                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        {{-- <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{route('blog-detail')}}">Blog Details</a></li>
                                <li><a href="{{route('view-cart-detail')}}">Shopping Cart</a></li>
                                <li><a href="{{route('checkout')}}">Checkout</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->