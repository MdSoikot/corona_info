@extends('layouts.main')

@section('content')
  
<!-- Page Title -->
<div class="page-title-area title-bg-one">
  <div class="title-shape">
      <img src="assets/img/title/title-bg-shape.png" alt="Shape">
  </div>
  <div class="d-table">
      <div class="d-table-cell">
          <div class="container">
              <div class="title-content">
                  <h2>About</h2>
                  <ul>
                      <li>
                          <a href="/">Home</a>
                      </li>
                      <li>
                          <i class='bx bx-chevron-right'></i>
                      </li>
                      <li>
                          <span>About</span>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Page Title -->

<!-- About -->
<section class="about-area four section-overlay pt-100 pb-70">
  <div class="container">
      <div class="row align-items-center">

          <div class="col-lg-5">
              <div class="about-img">
                  <div class="row align-items-end">
                      <div class="col-sm-6 col-lg-6">
                          <img src="assets/img/about/about4.jpg" alt="About">
                      </div>
                      <div class="col-sm-6 col-lg-6">
                          <img src="assets/img/about/about5.jpg" alt="About">
                      </div>
                  </div>
                  <div class="years">
                      <h3>25+ <br> <span>Years</span></h3>
                  </div>
              </div>
          </div>

          <div class="col-lg-7">
              <div class="about-content">
                  <div class="section-title">
                      <span class="sub-title">About</span>
                      <h2>We Are A Trusted Company With <span>25+</span> Years Of Experience</h2>
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                  </div>
                  <p class="about-p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                  <div class="row">

                      <div class="col-sm-6 col-lg-6">
                          <ul>
                              <li>
                                  <i class="flaticon-medal-of-award"></i>
                              </li>
                              <li>
                                  <h3>25+ Years Experience</h3>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                              </li>
                          </ul>
                      </div>

                      <div class="col-sm-6 col-lg-6">
                          <ul>
                              <li>
                                  <i class="flaticon-star"></i>
                              </li>
                              <li>
                                  <h3>Growing Success</h3>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                              </li>
                          </ul>
                      </div>

                      <div class="col-sm-6 col-lg-6">
                          <ul>
                              <li>
                                  <i class="flaticon-insurance"></i>
                              </li>
                              <li>
                                  <h3>100% Trusted Company</h3>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                              </li>
                          </ul>
                      </div>

                      <div class="col-sm-6 col-lg-6">
                          <ul>
                              <li>
                                  <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                              </li>
                              <li>
                                  <h3>Finance Management</h3>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                              </li>
                          </ul>
                      </div>

                  </div>
                  <a class="common-btn two" href="#">
                      Explore About Us
                      <span></span>
                  </a>
              </div>
          </div>

      </div>
  </div>
</section>
<!-- End About -->

@endsection