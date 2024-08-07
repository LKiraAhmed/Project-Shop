@extends('dashboard.layouts.app')

@section('title', 'Remos eCommerce Admin Dashboard HTML Template') 

@section('content')

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
@endsection
