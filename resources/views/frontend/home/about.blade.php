@extends('layouts.main')

@section('header-style')
    <style>
        .page-title-area {
            background-position: top center;
        }
    </style>
@endsection

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
                      <div class="col-sm-6 col-lg-12">
                          <img src="assets/img/about/about1.jpg" alt="About">
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-7">
              <div class="about-content">
                  <div class="section-title">
                      <span class="sub-title">About</span>
                      <h2>Introduction</h2>
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                  </div>
                  <p class="about-p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>

                  <p class="about-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum ratione, illum nobis ducimus itaque molestiae est temporibus recusandae quisquam voluptatum quia possimus consequuntur suscipit aliquid rerum nemo, beatae officia! Ipsum odio nisi veritatis illum magni ipsam, corrupti consequatur saepe sit, dolores commodi, neque quibusdam atque deleniti possimus quo itaque voluptate quae? Repellat, maiores eaque modi quis animi magnam ipsa neque porro consectetur voluptatum corrupti natus. Vitae fugit, cupiditate nihil sint totam enim aliquam quo inventore aliquid ut. Ipsum minima quaerat magni placeat excepturi voluptatem beatae quos quae fugiat illo totam atque temporibus laborum autem quis sunt velit exercitationem, dicta impedit.</p>
              </div>
          </div>

      </div>
  </div>
</section>
<!-- End About -->

<!-- Founder -->
<section class="founder-area section-overlay pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="founder-content">
                    <div class="section-title">
                        <span class="sub-title">The Teacher</span>
                        <h2>Victor James</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                    </div>
                    <p class="founder-p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="founder-img">
                    <img src="assets/img/founder-main1.jpg" alt="Founder">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Founder -->

@endsection