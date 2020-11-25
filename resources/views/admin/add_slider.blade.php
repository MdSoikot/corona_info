@extends('myTemplate.master')

@section('title', 'add-slider')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Slider</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Slider</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-md-6 form-group">
                                                <label>slider name</label>
                                                <input type="text" id="first-name" class="form-control" name="slider_name">
                                            </div>

                                          
                                            <div class="col-md-6 form-group">
                                                <label>Title</label>
                                                <input type="text" id="first-name" class="form-control" name="sub_title">
                                            </div>
                                            
                                            <div class="col-md-6 form-group">
                                                <label>Sub Title</label>
                                                <input type="text" id="first-name" class="form-control" name="sub_title">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>slider Image</label>
                                                <input type="file" id="first-name" class="form-control" name="title">
                                            </div>

                                            <div class="col-sm-12 d-flex justify-content-start">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- // Basic Horizontal form layout section end -->





    </div>
@endsection
