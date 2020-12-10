@extends('layouts.main')

@section('content')
  
<!-- Page Title -->
<div class="page-title-area title-bg-two">
  <div class="title-shape">
      <img src="assets/img/title/title-bg-shape.png" alt="Shape">
  </div>
  <div class="d-table">
      <div class="d-table-cell">
          <div class="container">
              <div class="title-content">
                  <h2>Services</h2>
                  <ul>
                      <li>
                          <a href="/">Home</a>
                      </li>
                      <li>
                          <i class='bx bx-chevron-right'></i>
                      </li>
                      <li>
                          <span>Services</span>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Page Title -->

<!-- Services -->
<section class="services-area ptb-100">
  <div class="container">
      <div class="row">

        @foreach ($services as $service)
        <div class="col-sm-6 col-lg-4">
            <div class="services-item card-overlay @if($loop->index % 2 == 0) active @endif">
                <i class="flaticon-marketing-strategy"></i>
                <h3>
                    <a href="#">{{$service->service_name}}</a>
                </h3>
                <p>{{$service->title}}</p>
                <a class="services-btn" href="{{url('/service/'.$service->slug)}}">Read More</a>
            </div>
        </div>
        @endforeach

      </div>
      {{$services->links()}}
  </div>
</section>
<!-- End Services -->

@endsection