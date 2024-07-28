@extends('layouts.header')

@section('title', 'About :: Be Unique – Minimal Fashion Bootstrap 5 Template') 

@section('content')



    <!--== Start Account Area Wrapper ==-->
    <section class="account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="account-form-wrap">
                        <div class="login-form">
                            <div class="content">
                                <h4 class="title">Verify Email</h4>
                                <p>Please enter the verification code sent to your email.</p>
                            </div>
                            <form action="{{ route('verify.otp') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="name" value="{{Auth::user()->name}}">
                                            <input class="form-control" type="text" name="code" placeholder="Verification Code" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="login-form-group">
                                            <button class="btn-sign" type="submit">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Account Area Wrapper ==-->
  </main>
  @include('layouts.footer')


  @endsection
