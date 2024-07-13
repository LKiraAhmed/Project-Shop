@extends('layouts.app')

@section('title', 'About :: Be Unique – Minimal Fashion Bootstrap 5 Template') 

@section('content')

        <main class="main-content">
            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="page-header-content">
                                <nav class="breadcrumb-area">
                                    <ul class="breadcrumb">
                                        <li><a href="index">Home</a></li>
                                        <li class="breadcrumb-sep">/</li>
                                        <li>Account</li>
                                    </ul>
                                </nav>
                                <h4 class="title">Account</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Account Area Wrapper ==-->
            <section class="account-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 m-auto">
                            <div class="account-form-wrap">
                                <!--== Start Login Form ==-->
                                <div class="login-form">
                                    <div class="content">
                                        <h4 class="title">Sign Up</h4>
                                        <p>Please sign up using account detail bellow.</p>
                                    </div>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="name" placeholder="User Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="phone" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="login-form-group">
                                                    <button class="btn-sign" type="submit">Sign Up</button>
                                                    <a class="btn-pass-forgot" href="{{ route('login.form') }}">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- <div class="col-12">
                                                <div class="account-optional-group">
                                                    <a class="btn-create" href="#/">Create account</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                                <!--== End Login Form ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Account Area Wrapper ==-->
        </main>
        @include('layouts.footer')

        @endsection
    