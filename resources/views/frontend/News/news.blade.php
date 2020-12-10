@extends('layouts.main')

@section('content')
  
<!-- Page Title -->
<div class="page-title-area title-bg-four">
  <div class="title-shape">
      <img src="assets/img/title/title-bg-shape.png" alt="Shape">
  </div>
  <div class="d-table">
      <div class="d-table-cell">
          <div class="container">
              <div class="title-content">
                  <h2>News</h2>
                  <ul>
                      <li>
                          <a href="/">Home</a>
                      </li>
                      <li>
                          <i class='bx bx-chevron-right'></i>
                      </li>
                      <li>
                          <span>News</span>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Page Title -->

<!-- Blog -->
<section class="blog-area three ptb-100">
  <div class="container">
      <div class="row align-items-center">
        @foreach ($latestNews as $news)
        <div class="col-lg-4">
            <div class="blog-item">
                <a href="{{url('/news/'.$news->slug)}}">
                  @if ($news->image)
                    <img src="/{{$news->image}}" alt="Blog">
                  @else 
                    <img src="assets/img/corona.jpg" alt="Blog">
                  @endif
                </a>
                <ul>
                    <li>
                        <i class='bx bxs-calendar'></i>
                        <span> {{date('F H, Y', strtotime($news->created_at))}} </span>
                    </li>
                    <li>
                        <i class='bx bxs-user'></i>
                        <span>By:</span>
                        <a href="{{url('/news/'.$news->slug)}}">Admin</a>
                    </li>
                </ul>
                <h3>
                    <a href="{{url('/news/'.$news->slug)}}">{{$news->title}}</a>
                </h3>
                <a class="blog-btn" href="{{url('/news/'.$news->slug)}}">Read More</a>
            </div>
        </div>
        @endforeach
          

      </div>
      {{$latestNews->links()}}
  </div>
</section>
<!-- End Blog -->

@endsection