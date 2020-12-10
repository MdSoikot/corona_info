@extends('layouts.main')

@section('content')


<!-- Blog Details -->
<div class="blog-details-area ptb-100">
  <div class="container">
      <div class="row">

          <div class="col-lg-12">
              <div class="details-item">

                  <div class="details-img">
                    @if ($news->image)
                      <img src="/{{$news->image}}" alt="Details">
                    @else
                      <img src="/assets/img/corona.jpg" alt="Details">
                    @endif
                      <ul>
                          <li>
                              <span>{{date('F H, Y', strtotime($news->created_at))}}</span>
                          </li>
                          <li>
                              <span>By:</span>
                              <a href="#">Admin</a>
                          </li>
                      </ul>
                  </div>

                  <div class="details-head">
                    <h2>{{$news->title}}</h2>
                  </div>

                  <div class="details-text">
                    {!! $news->content !!}
                  </div>

              </div>
          </div>

      </div>
  </div>
</div>
<!-- End Blog Details -->

@endsection