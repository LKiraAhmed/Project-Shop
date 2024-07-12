@extends('layouts.admin')

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
                  <li>about</li>
                </ul>
              </nav>
              <h4 class="title">about</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-thumb">
              <a href="#/"><img class="w-100" src="assets/img/about/1.jpg" alt="Image-HasTech"></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content">
              <h4 class="title">Our company</h4>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
              <a class="btn-theme" href="#/">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-area">
      <div class="container pt-2">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="section-title section-title-style-two text-center"  >
              <h2 class="sub-title">HAND WORK</h2>
              <h2 class="title">our expert team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img class="w-100" src="assets/img/team/1.jpg" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Marcos Alonso</a></h4>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img class="w-100" src="assets/img/team/2.jpg" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Farhan</a></h4>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img class="w-100" src="assets/img/team/3.jpg" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Marcos Alonso</a></h4>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->
  </main>

  @section('footer')
  @endsection
@endsection
