@extends('myTemplate.master')

@section('title', 'Corona-info')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>
        <section class="section">
            <div class="row mb-2" style="text-align: center;color:#fff">
                {{-- <h3>Today's Corona Update</h3> --}}
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center;color:#fff!">
                                    <h4 style="margin-top:15px">New Affected</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($infected_update)

                                        <h1>{{ $infected_update->today }}</h1>
                                        @else
                                        <h1>00</h1>
                                    @endif


                                </div>

                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">Total Affected</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($infected_update)

                                        <h1>{{ $infected_update->total }}</h1>
                                        @else
                                        <h1>00</h1>
                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">New Death</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($death_update)

                                        <h1>{{ $death_update->today }}</h1>
                                        @else
                                        <h1>00</h1>
                                    @endif


                                </div>

                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">Total Death</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($death_update)

                                        <h1>{{ $death_update->total }}</h1>
                                        @else
                                        <h1>00</h1>
                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">New Cure</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($cure_update)

                                        <h1>{{ $cure_update->today }}</h1>
                                        @else
                                        <h1>00</h1>
                                    @endif


                                </div>

                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">Total Cure</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($cure_update)

                                        <h1>{{ $cure_update->total }}</h1>
                                        @else
                                        <h1>00</h1>
                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">New Test</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($test_update)

                                        <h1>{{$test_update->today}}</h1>
                                        @else
                                        <h1>00</h1>

                                        

                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2" style="text-align: center">
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">Total Services</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($total_services)

                                        <h1>{{$total_services }}</h1>

                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">Total Videos</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($total_videos)

                                        <h1>{{$total_videos }}</h1>

                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">Total News</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($total_news)

                                        <h1>{{ $total_news}}</h1>

                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column py-3">
                                <div class='px-3 d-flex justify-content-center' style="text-align: center">
                                    <h4 style="margin-top:15px">New Affected</h4>





                                </div>
                                <div class='px-3  d-flex justify-content-center'>
                                    @if ($infected_update)

                                        <h1>{{ $infected_update->today }}</h1>

                                    @endif


                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
