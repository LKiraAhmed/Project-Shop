@extends('layouts.header')

@section('title', 'About :: Be Unique – Minimal Fashion Bootstrap 5 Template') 

@section('content')

    

    <!--== Start Contact Info Area Wrapper ==-->
    <section class="contact-info-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="contact-info-item">
              <h4>CONTACT DIRECTLY</h4>
              <p>info@example.com</p>
              <p>+20000000</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="contact-info-item">
              <h4>VISIT OUR OFFICE</h4>
              <p>184 Be Unique Rd E, St Be Unique </p>
              <p>VIC 0000,</p>
            </div>
          </div>
          <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
            <div class="contact-info-item">
              <h4>WORK WITH US</h4>
              <p>Send your CV to our email:</p>
              <p>career@example.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Info Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Get in touch with us</h2>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="contact-form-content">
              <!--== Start Rsvp Form ==-->
              <div class="contact-form">
                <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input class="form-control" type="text" name="con_name" placeholder="Your name" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input class="form-control" type="email" name="con_email" placeholder="Your email" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input class="form-control" type="text" name="con_phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" name="con_message" placeholder="Your Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group text-center">
                        <button class="btn btn-link btn-contact" type="submit">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!--== End Rsvp Form ==-->
              <div class="form-message"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>
  @include('layouts.footer')

{{-- 

    @section('footer')
    @endsection --}}

    @endsection
