@extends('myTemplate.master')

@section('title', 'Ambulance List')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    {{-- <h3>Show Service</h3> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'homepage'}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ambulance List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                  Ambulance List
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Rent Id</th>
                                <th>Ambulance</th>
                                <th>Driver</th>
                                <th>Driver Phone</th>
                                <th>Vehicle Number</th>
                                <th>User Name</th>
                                <th>District</th>
                                <th>Area</th>
                                <th>Rent Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            @foreach ($rentList as $rent)
                                <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $rent->ambulance->name }}</td>
                                    <td>{{ $rent->ambulance->driver_name }}</td>
                                    <td>{{ $rent->ambulance->driver_phone }}</td>
                                    <td>{{ $rent->ambulance->vehicle_number }}</td>
                                    <td>{{ $rent->user->name }}</td>
                                    <td>{{ $rent->district }}</td>
                                    <td>{{ $rent->area }}</td>
                                    <td>{{ $rent->created_at }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>


</div>





@endsection
