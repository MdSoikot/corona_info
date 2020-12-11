@extends('myTemplate.master')

@section('title', 'Corona-info')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'homepage'}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Ambulance</li>
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
                            <h4 class="card-title">Add Ambulace</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{route("ambulance.store")}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                     <div class="form-body">
                                        <div class="row">

                                            <div class="col-md-12 form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Driver Name</label>
                                                <input type="text" class="form-control" name="driver_name">
                                            </div>
                                            
                                            <div class="col-md-4 form-group">
                                                <label>Driver Phone</label>
                                                <input type="text" class="form-control" name="driver_phone">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label>Vehicle Number</label>
                                                <input type="text" class="form-control" name="vehicle_number">
                                            </div>
                                            
                                            <div class="col-md-6 form-group">
                                              <label>District</label>
                                              <select name="district" class="form-control">
                                                <option value="">Select District</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Gazipur">Gazipur</option>
                                                <option value="Kishoreganj">Kishoreganj</option>
                                                <option value="Manikganj">Manikganj</option>
                                                <option value="Munshiganj">Munshiganj</option>
                                                <option value="Narayanganj">Narayanganj</option>
                                                <option value="Narsingdi">Narsingdi</option>
                                                <option value="Tangail">Tangail</option>
                                                <option value="Faridpur">Faridpur</option>
                                                <option value="Gopalganj">Gopalganj</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="Rajbari">Rajbari</option>
                                                <option value="Shariatpur">Shariatpur</option>
                                              </select>
                                            </div>

                                            <div class="col-md-6 form-group">
                                              <label>Area</label>
                                              <input type="text" class="form-control" name="area">
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


    </div>

    

    

@endsection
