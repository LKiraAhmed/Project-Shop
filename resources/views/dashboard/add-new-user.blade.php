@extends('dashboard.layouts.app')

@section('title', 'Remos eCommerce Admin Dashboard HTML Template') 

@section('content')
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add New User</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="{{route('dashboard.index')}}">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="text-tiny">User</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add New User</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- add-new-user -->
                                <form action="{{route('users.create')}}" class="form-add-new-user form-style-2">
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Account</h5>
                                            <div class="body-text">Fill in the information below to add a new account
                                            </div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="name mb-24">
                                                <div class="body-title mb-10">Name</div>
                                                <input class="flex-grow" type="text" placeholder="Username" name="name"
                                                    tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email mb-24">
                                                <div class="body-title mb-10">Email</div>
                                                <input class="flex-grow" type="email" placeholder="Email" name="email"
                                                    tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email mb-24">
                                                <div class="body-title mb-10">phone</div>
                                                <input class="flex-grow" type="text" placeholder="phone" name="phone"
                                                    tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="password mb-24">
                                                <div class="body-title mb-10">Password</div>
                                                <input class="password-input" type="password"
                                                    placeholder="Enter password" name="password" tabindex="0" value=""
                                                    aria-required="true" required="">
                                                <span class="show-pass">
                                                    <i class="icon-eye view"></i>
                                                    <i class="icon-eye-off hide"></i>
                                                </span>
                                            </fieldset>
                                            <fieldset class="password">
                                                <div class="body-title mb-10">Confirm password</div>
                                                <input class="password-input" type="password"
                                                    placeholder="Confirm password" name="password" tabindex="0" value=""
                                                    aria-required="true" required="">
                                                <span class="show-pass">
                                                    <i class="icon-eye view"></i>
                                                    <i class="icon-eye-off hide"></i>
                                                </span>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="bot">
                                        <button class="tf-button w180" type="submit">Save</button>
                                    </div>

                                </form>
                                <!-- /add-new-user -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->

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
    @endsection
