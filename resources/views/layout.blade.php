<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <title>CES - Construction Estimate System</title>
    <meta content="Templines" name="author">
    <meta content="Antek" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#222222">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<body class="page-home">
    <div class="container">
        <div class="card bg-secondary text-white">    
        <!-- Loader-->
        <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
        <!-- Loader end-->
        
        <div class="page-wrapper">
            <header class="page-header">
            <div class="page-header-top">
                <div class="page-header-top__right">
                <div class="login-link">
                    @if (Route::has('login'))
                        <div class="sm:right text-left">
                            @auth
                            <x-app-layout>
    
                            </x-app-layout>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif                
                </div>
                <div class="social">
                    <ul class="social-list">
                    <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-youtube"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
                <div class="page-header-bottom" data-uk-sticky>
                    <div class="page-header-bottom__left">
                    <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="./assets/img/logo.png" alt=""></a></div>
                    <div class="support"> <a class="support__link" href="tel:236-799-5500">
                        <div class="support__icon"><i class="fas fa-headset"></i></div>
                        <div class="support__desc">
                            <div class="support__label">Get Quick Support</div>
                            <div class="support__phone">+94 XXX XXX XXXX</div>
                        </div>
                        </a></div>
                    </div>
                    <div class="page-header-bottom__right">
                    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                        <div class="nav-overlay uk-visible@l">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Create Estimate</a></li>
                            <li><a href="{{url('products')}}">Products</a></li>
                            <li><a href="{{url('aboutus')}}">About Us</a></li>
                            <li><a href="{{url('contactus')}}">Contact Us</a></li>
                        </ul>
                        </div>
                    </nav>
                    <a class="uk-navbar-toggle uk-hidden@l" href="#offcanvas" data-uk-toggle><span data-uk-icon="menu"></span></a><a class="uk-navbar-toggle cart-btn" href="#">
                        <div class="cart-btn__icon" data-uk-icon="cart"><span class="cart-btn__count">0</span></div>
                    </a>
                    </div>
                </div>
            </header> 
            @yield('content')        
            <footer class="page-footer">
                <div class="uk-container uk-container-large">
                    <div class="page-footer-top">
                        <div class="logo"><a class="logo__link" href="/"><img class="logo__img" src="./assets/img/logo-white.png" alt="logo"></a></div>          
                    </div>
                    <div class="page-footer-middle">
                    <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                    <div class="uk-flex-first@l">              
                        <div class="title">About antek</div>
                        <p>CES streamlines cost prediction, making it efficient and convenient. 
                            It helps users choose budget-friendly building options with detailed item descriptions for informed decisions.</p>
                        <ul class="social-list">
                            <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>        
                    <div class="uk-flex-last@l footer-content2">
                    <div class="title">Contact Us</div>
                    <ul class="contacts-list">
                        <li class="contacts-list-item">
                        <div class="contacts-list-item__icon"><img src="./assets/img/icons/ico-phone24.svg" data-uk-svg alt="For Rental Support"></div>
                        <div class="contacts-list-item__desc">
                            <div class="contacts-list-item__label">For Rental Support</div>
                            <div class="contacts-list-item__content"> <a href="tel:12367995500/6600">+94 xxx xxx xxxx</a></div>
                        </div>
                        </li>
                        <li class="contacts-list-item">
                        <div class="contacts-list-item__icon"><img src="./assets/img/icons/ico-mail.svg" data-uk-svg alt="Send Us Email"></div>
                        <div class="contacts-list-item__desc">
                            <div class="contacts-list-item__label">Send Us Email</div>
                            <div class="contacts-list-item__content"> <a href="mailto:info@ces.com">info@ces.com</a></div>
                        </div>
                        </li>
                    </ul>
                    </div>
                    <div class="footer-content">
                        <div class="title">Explore CES</div>
                        <ul class="uk-nav uk-list-disc">
                            <li><a href="typography.html">Signup or Register</a></li>
                            <li><a href="typography.html">Get Equipments</a></li>
                            <li><a href="typography.html">Rental Pricing</a></li>
                            <li><a href="typography.html">Quick User Guide</a></li>
                            <li><a href="typography.html">Read FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                </div>
                
                <div class="page-footer-bottom"><span> Copyrights © 2023 CES - Construction Estimate System</span></div><a class="totop-link" href="#top" data-uk-scroll><img src="./assets/img/icons/ico-totop.svg" alt="totop"><span>Go to top</span></a>
            </div>      
            </footer>
        </div>
        <script src="assets/js/libs.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>
</html>