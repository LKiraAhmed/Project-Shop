<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title> 
    
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/style.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/dashboard/images/favicon.png') }}">
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

</head>


<body class="body">
ّ    <!-- #wrapper -->


<div id="wrapper">
    <!-- #page -->
    <div id="page" class="">
        <!-- layout-wrap -->
        <div class="layout-wrap">
            <!-- preload -->
            <div id="preload" class="preload-container">
                <div class="preloading">
                    <span></span>
                </div>
            </div>
            <!-- /preload -->
            <!-- section-menu-left -->
            <div class="section-menu-left">
                <div class="box-logo">
                    <a href="{{route('dashboard.index')}}" id="site-logo-inner">
                        <img class="" alt="" src="" data-light="" data-dark="">
                    </a>
                    <div class="button-show-hide">
                        <i class="icon-menu-left"></i>
                    </div>
                </div>
                <div class="section-menu-left-wrap">
                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Main Home</div>
                            <ul class="menu-list">
                                <li class="menu-item has-children active">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                    <ul class="sub-menu" style="display: block;">
                                        <li class="sub-menu-item">
                                            <a href="{{route('dashboard.index')}}" class="active">
                                                <div class="text">Home</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <div class="center-heading">All Pages</div>
                            <ul class="menu-list">
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                                        <div class="text">Ecommerce</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('dashboard.add-product')}}">
                                                <div class="text">Add Product</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('dashboard.show')}}">
                                                <div class="text">Product List</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Category</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('category.index')}}">
                                                <div class="text">Category List</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('category.add')}}">
                                                <div class="text">New Category</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-user"></i></div>
                                        <div class="text">User</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('users.index')}}">
                                                <div class="text">All Users</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('add-new-user')}}">
                                                <div class="text">Add New User</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <div class="center-heading">Order</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{route('orders')}}">
                                        <div class="icon">
                                            <i class="icon-file-plus"></i>
                                        </div>
                                        <div class="text">order</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- /section-menu-left -->
            <!-- section-content-right -->
            <div class="section-content-right">
                <!-- header-dashboard -->
                <div class="header-dashboard">
                    <div class="wrap">
                        <div class="header-left">

                            <div class="button-show-hide">
                                <i class="icon-menu-left"></i>
                            </div>
                            <form class="form-search flex-grow">
                                <fieldset class="name">
                                    <input type="text" placeholder="Search here..." class="show-search" name="name"
                                        tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <div class="button-submit">
                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                </div>
                                <div class="box-content-search" id="box-content-search">
                                    <ul class="mb-24">
                                        <li class="mb-14">
                                            <div class="body-title">Top selling product</div>
                                        </li>
                                        <li class="mb-14">
                                            <div class="divider"></div>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="product-item gap14 mb-10">
                                                    <div class="image no-bg">
                                                        <img src="images/products/17.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Dog Food
                                                                Rachael Ray Nutrish®</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-10">
                                                    <div class="divider"></div>
                                                </li>
                                                <li class="product-item gap14 mb-10">
                                                    <div class="image no-bg">
                                                        <img src="images/products/18.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Natural
                                                                Dog Food Healthy Dog Food</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-10">
                                                    <div class="divider"></div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/19.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Freshpet
                                                                Healthy Dog Food and Cat</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="">
                                        <li class="mb-14">
                                            <div class="body-title">Order product</div>
                                        </li>
                                        <li class="mb-14">
                                            <div class="divider"></div>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="product-item gap14 mb-10">
                                                    <div class="image no-bg">
                                                        <img src="images/products/20.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Sojos
                                                                Crunchy Natural Grain Free...</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-10">
                                                    <div class="divider"></div>
                                                </li>
                                                <li class="product-item gap14 mb-10">
                                                    <div class="image no-bg">
                                                        <img src="images/products/21.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Kristin
                                                                Watson</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-10">
                                                    <div class="divider"></div>
                                                </li>
                                                <li class="product-item gap14 mb-10">
                                                    <div class="image no-bg">
                                                        <img src="images/products/22.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Mega
                                                                Pumpkin Bone</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-10">
                                                    <div class="divider"></div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="images/products/23.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Mega
                                                                Pumpkin Bone</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="header-grid">
                          
                            <div class="header-item button-dark-light">
                                <i class="icon-moon"></i>
                            </div>
                            <div class="popup-wrap noti type-header">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="header-item">
                                            <span class="text-tiny">1</span>
                                            <i class="icon-bell"></i>
                                        </span>
                                    </button>
                            
                                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1" >
                                        <li>
                                            <h6>Message</h6>
                                        </li>
                                        <li>
                                            <div class="noti-item w-full wg-user active">
                                                <div class="image">
                                                    <img src=""  alt="">
                                                </div>
                                                <div class="flex-grow">
                                                    <div class="flex items-center justify-between">
                                                        <a href="#" class="body-title"></a>
                                                        <div class="time"></div>
                                                    </div>
                                                    <div class="text-tiny">Hello?</div>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                          
                            <div class="header-item button-zoom-maximize">
                                <div class="">
                                    <i class="icon-maximize"></i>
                                </div>
                            </div>
          
                            <div class="popup-wrap user type-header">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="header-user wg-user">
                                            <span class="image">
                                                <img src="images/avatar/user-1.png" alt="">
                                            </span>
                                            <span class="flex flex-column">
                                                <span class="body-title mb-2">Kristin Watson</span>
                                                <span class="text-tiny">Admin</span>
                                            </span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3" >
                                        <li>
                                            <a href="#" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="body-title-2">Account</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-mail"></i>
                                                </div>
                                                <div class="body-title-2">Inbox</div>
                                                <div class="number">27</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-file-text"></i>
                                                </div>
                                                <div class="body-title-2">Taskboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="setting.html" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-settings"></i>
                                                </div>
                                                <div class="body-title-2">Setting</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-headphones"></i>
                                                </div>
                                                <div class="body-title-2">Support</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.html" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-log-out"></i>
                                                </div>
                                                <div class="body-title-2">Log out</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
    @yield('content')
                <!-- /header-dashboard -->
                         <!-- /main-content-wrap -->
                    <!-- bottom-page -->
                    <div class="bottom-page">
                        <div class="body-text">Copyright © 2024 Remos. Design with</div>
                        <i class="icon-heart"></i>
                        <div class="body-text">by <a
                                href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights
                            reserved.</div>
                    </div>
                    <!-- /bottom-page -->
                </div>
                <!-- /main-content -->
            </div>
            <!-- /section-content-right -->
        </div>
        <!-- /layout-wrap -->
    </div>
    <!-- /#page -->
    </div>
    <!-- /#wrapper -->

     <!-- Javascript -->
     <script src="{{ asset('assets/dashboard/js/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/bootstrap-select.min.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/zoom.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/apexcharts.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/line-chart-1.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/line-chart-2.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/line-chart-3.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/line-chart-4.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/line-chart-5.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/apexcharts/line-chart-6.js') }}"></script>
     <!-- <script src="{{ asset('assets/dashboard/js/switcher.js') }}"></script> -->
     <script src="{{ asset('assets/dashboard/js/theme-settings.js') }}"></script>
     <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

</body>

</html>