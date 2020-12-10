@extends('myTemplate.master')

@section('title', 'Corona-update')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'homepage'}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Corona Update</li>
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
                            <h4 class="card-title">Corona Update</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                            <form action={{route("add_corona_update")}} method="POST" class="form form-horizontal">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-md-6 form-group">
                                                <label>Case</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect" name="case">
                                                        <option value="new affected">New affected</option>
                                                        <option value="death">Death</option>
                                                        <option value="cure">Cure</option>
                                                        <option value="test">Test</option>

                                                    </select>
                                                </fieldset>
                                            </div>

                                          
                                            <div class="col-md-6 form-group">
                                                <label>24 Hour</label>
                                                <input type="number" id="first-name" class="form-control" name="today">
                                            </div>
                                            
                                            <div class="col-md-6 form-group">
                                                <label>Total</label>
                                                <input type="number" id="first-name" class="form-control" name="total">
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
