@extends('layouts.main')

@section('content')


<!-- Blog Details -->
<div class="blog-details-area ptb-100">
  <div class="container">
      <div class="row">

          <div class="col-lg-12">
              <div class="details-item">

                  {{-- <div class="details-img">
                    @if ($service->icon_image)
                      <img src="/{{$service->icon_image}}" alt="Details">
                    @else
                      <img src="/assets/img/corona.jpg" alt="Details">
                    @endif
                      <ul>
                          <li>
                              <span>{{date('F H, Y', strtotime($service->created_at))}}</span>
                          </li>
                          <li>
                              <span>By:</span>
                              <a href="#">Admin</a>
                          </li>
                      </ul>
                  </div> --}}

                  <div class="details-head">
                    <h2>{{$service->service_name}}</h2>
                    <p>{{$service->title}}</p>
                  </div>

                  <div class="details-text">
                    {!! $service->content !!}
                  </div>

              </div>
          </div>

      </div>
  </div>
</div>
<!-- End Blog Details -->

@endsection