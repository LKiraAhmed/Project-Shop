<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Remos eCommerce Admin Dashboard HTML Template</title>

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

</head>


<body class="body">

    <!-- #wrapper -->
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
                                <div class="center-heading">Setting</div>
                                <ul class="menu-list">
                                    <li class="menu-item">
                                        <a href="{{route('dashboard.page', ['page' => 'setting'])}}">
                                            <div class="icon"><i class="icon-settings"></i></div>
                                            <div class="text">Setting</div>
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
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="images/avatar/user-1.png" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2">Be-unique</span>
                                                    <span class="text-tiny">Admin</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
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
                                                <a href="setting" class="user-item">
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
                                                <a href="login" class="user-item">
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
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="tf-section-4 mb-30 d-flex justify-content-center flex-column flex-md-row"
                                    style="display: flex !important;">
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52"
                                                        viewBox="0 0 48 52" fill="none">
                                                        <path
                                                            d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                    <i class="icon-shopping-bag"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Sales</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-1"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52"
                                                        viewBox="0 0 48 52" fill="none">
                                                        <path
                                                            d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z"
                                                            fill="#FF5200" />
                                                    </svg>
                                                    <i class="icon-dollar-sign"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Income</div>
                                                    <h4>$37,802</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending down">
                                                <i class="icon-trending-down"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-2"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->

                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52"
                                                        viewBox="0 0 48 52" fill="none">
                                                        <path
                                                            d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z"
                                                            fill="#2377FC" />
                                                    </svg>
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Visitor</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-4"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                </div>
                                <div class="tf-section-5 mb-30 d-flex justify-content-center flex-column flex-md-row"
                                    style="display: flex !important;">
                                    <!-- chart -->
                                    <div class="wg-box col-12 col-md-6">
                                        <div class="flex items-center justify-between">
                                            <h5>Recent Order</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="line-chart-5"></div>
                                    </div>
                                    <!-- /chart -->
                                    <!-- top-product -->
                                    <div class="wg-box col-12 col-md-6">
                                        <div class="flex items-center justify-between">
                                            <h5>Top Products</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="view-all">View all<i
                                                            class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-top-product">
                                            <ul class="flex flex-column gap14">
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="images/products/1.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-title-2">Patimax
                                                                Fragrance Long...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>

                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="images/products/2.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-title-2">Nulo
                                                                MedalSeries Adult Cat...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>

                                                            <div class="body-text">Sflat</div>
                                                        </div>

                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="images/products/3.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-title-2">Pedigree
                                                                Puppy Dry Dog...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>

                                                            <div class="body-text">Sflat</div>
                                                        </div>

                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="images/products/4.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-title-2">Biscoito
                                                                Premier Cookie...</a>
                                                            <div class="text-tiny mt-3">100 Items</div>
                                                        </div>
                                                        <div>

                                                            <div class="body-text">Sflat</div>
                                                        </div>

                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image">
                                                        <img src="images/products/5.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list"
                                                                class="body-title-2 mb-3">Pedigree Adult Dry Dog...</a>
                                                            <div class="text-tiny">100 Items</div>
                                                        </div>
                                                        <div>

                                                            <div class="body-text">Sflat</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-title-2 mb-3">-15%</div>
                                                            <div class="text-tiny">$27.00</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /top-product -->

                                </div>
                                <div class="tf-section-6 mb-30">
                                    <!-- best-shop-sellers -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Best Shop Sellers</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="view-all">View all<i
                                                            class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-best-shop-sellers">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Shop</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Categories</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Total</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap18">
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/1.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Robert</a>
                                                            <div class="text-tiny mt-4">73 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Kitchen, Pets</div>
                                                        <div class="body-text">$1,000</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/2.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Calvin</a>
                                                            <div class="text-tiny mt-4">66 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Health, Grocery</div>
                                                        <div class="body-text">$4,000</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/3.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Dwight</a>
                                                            <div class="text-tiny mt-4">15,890 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Electronics</div>
                                                        <div class="body-text">$2,700</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/4.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Cody</a>
                                                            <div class="text-tiny mt-4">15 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Movies, Music</div>
                                                        <div class="body-text">$2,100</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/5.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Bruce</a>
                                                            <div class="text-tiny mt-4">127 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Sports, Fitness</div>
                                                        <div class="body-text">$4,400</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/6.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Jorge</a>
                                                            <div class="text-tiny mt-4">30 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Toys, Baby</div>
                                                        <div class="body-text">$4,750</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="shop-item">
                                                    <div class="image">
                                                        <img src="images/shop/7.png" alt="">
                                                    </div>
                                                    <div class="flex-grow flex items-center justify-between gap20">
                                                        <div>
                                                            <a href="#" class="body-text name">Kristin Watson</a>
                                                            <div class="text-tiny mt-4">93 Purchases</div>
                                                        </div>
                                                        <div class="body-text">Gift Cards</div>
                                                        <div class="body-text">$1,000</div>
                                                        <div class="flex items-center justify-between gap10">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /best-shop-sellers -->
                                    <!-- product-overview -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Product overview</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="view-all">View all<i
                                                            class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-product-overview">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Name</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Product ID</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Price</div>
                                                </li>

                                                <li>
                                                    <div class="body-title">Status</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap10">
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/6.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Soft Fluffy
                                                                Cats</a>
                                                        </div>
                                                        <div class="body-text">#327</div>
                                                        <div class="body-text">$11.70</div>
                                                        <div class="block-not-available text-no-wrap">Not Available
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/7.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Taste of the
                                                                Wild Formula Finder</a>
                                                        </div>
                                                        <div class="body-text">#380</div>
                                                        <div class="body-text">$8.99</div>
                                                        <div class="block-not-available text-no-wrap">Not Available
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/8.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Wellness
                                                                Natural Food</a>
                                                        </div>
                                                        <div class="body-text">#126</div>
                                                        <div class="body-text">$5.22</div>
                                                        <div class="block-not-available text-no-wrap">Not Available
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/9.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Dog Food
                                                                Rachael Ray</a>
                                                        </div>
                                                        <div class="body-text">#582</div>
                                                        <div class="body-text">$14.81</div>
                                                        <div>
                                                            <div class="block-available">Available</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item gap14">
                                                    <div class="image">
                                                        <img src="images/products/10.png" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list" class="body-text">Best Buddy
                                                                Bits Dog Treats</a>
                                                        </div>
                                                        <div class="body-text">#293</div>
                                                        <div class="body-text">$6.48</div>
                                                        <div class="block-not-available text-no-wrap">Not Available
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="flex items-center justify-between flex-wrap gap10">
                                            <div class="text-tiny">Showing 5 entries</div>
                                            <ul class="wg-pagination">
                                                <li>
                                                    <a href="#"><i class="icon-chevron-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /product-overview -->
                                </div>
                            </div>
                        </div>
                        <!-- /main-content-wrap -->
                    </div>
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