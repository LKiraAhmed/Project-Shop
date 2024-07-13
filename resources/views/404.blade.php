@extends('layouts.header')

@section('title', 'About :: Be Unique – Minimal Fashion Bootstrap 5 Template') 

@section('content')

    <!--== Start Page Not Found Area Wrapper ==-->
    <section class="page-not-found-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-not-found-content">
              <h1>404</h1>
              <h2>Opps! PAGE NOT BE FOUND</h2>
              <p>Sorry but the page you are looking for does not exist, have <br> been removed, name changed or is temporarity unavailable.</p>
              <a class="btn-back" href="{{route('home')}}">Back to home page</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Not Found Area Wrapper ==-->
  </main>
  @include('layouts.footer')
  @endsection
