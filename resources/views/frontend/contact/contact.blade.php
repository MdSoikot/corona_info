@extends('layouts.main')

@section('content')
 

<div class="page-title-area title-bg-five">
  <div class="title-shape">
      <img src="assets/img/title/title-bg-shape.png" alt="Shape">
  </div>
  <div class="d-table">
      <div class="d-table-cell">
          <div class="container">
              <div class="title-content">
                  <h2>Contact</h2>
                  <ul>
                      <li>
                          <a href="index.html">Home</a>
                      </li>
                      <li>
                          <i class='bx bx-chevron-right'></i>
                      </li>
                      <li>
                          <span>Contact</span>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Page Title -->

<!-- Contact -->
<div class="contact-area pt-100 pb-70">
  <div class="contact-shape">
      <img src="assets/img/contact-shape.png" alt="Shape">
  </div>
  <div class="container">
      <div class="row align-items-center">

          <div class="col-lg-8">
              <div class="section-title">
                  <h2>Get In Touch</h2>
              </div>
                <form action="{{route('contact.store')}}" method="POST">
                  @csrf
                  <div class="row">

                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="name" id="name" class="form-control" placeholder="Name"  data-error="Please enter your name">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>

                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="email" name="email" id="email" class="form-control" placeholder="Email"  data-error="Please enter your email">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>

                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="mobile" id="phone_number" placeholder="Phone"  data-error="Please enter your number" class="form-control">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>

                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject"  data-error="Please enter your subject">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="form-group">
                              <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message"  data-error="Write your message"></textarea>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                  Accept <a href="terms-conditions.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
                              </label>
                          </div>
                      </div>
                      
                      <div class="col-lg-12">
                          <button type="submit" class="btn common-btn">
                              Send Message
                          </button>
                          {{-- <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div> --}}
                      </div>

                  </div>
              </form>
          </div>

          <div class="col-lg-4">
              <div class="contact-info">
                  <h3>Contact Info</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, maxime at. Ipsa veniam eveniet</p>
                  <ul>
                      <li>
                          <i class='bx bx-current-location'></i>
                          <a href="#">113 Inva, White House, New Jersey, USA</a>
                      </li>
                      <li>
                          <i class='bx bx-phone-call'></i>
                          <a href="tel:+0015481592491">+001-548-159-2491</a>
                          <a href="tel:+5468792355698">+546-879-235-5698</a>
                      </li>
                      <li>
                          <i class='bx bx-paper-plane'></i>
                          <a href="mailto:hello@inva.com">hello@inva.com</a>
                          <a href="mailto:info@inva.com">info@inva.com</a>
                      </li>
                  </ul>
              </div>
          </div>

      </div>
  </div>
</div>
<!-- End Contact -->

<!-- Map -->
<div class="map-area pb-100">
  <div class="container">
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1604317797619!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>  
<!-- End Map -->



@endsection