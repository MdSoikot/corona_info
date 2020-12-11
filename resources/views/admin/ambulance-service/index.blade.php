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
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Driver Name</th>
                                <th>Driver Phone</th>
                                <th>Vehicle Number</th>
                                <th>District</th>
                                <th>Area</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            @foreach ($ambulances as $ambulance)
                                <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $ambulance->name }}</td>
                                    <td>{{ $ambulance->driver_name }}</td>
                                    <td>{{ $ambulance->driver_phone }}</td>
                                    <td>{{ $ambulance->vehicle_number }}</td>
                                    <td>{{ $ambulance->district }}</td>
                                    <td>{{ $ambulance->area }}</td>
                                    <td>
                                      @if ($ambulance->is_reserved)
                                        <span class="badge bg-primary">Available</span>
                                      @else
                                        <span class="badge bg-warning">UnAvailable</span>
                                      @endif
                                    </td>

                                    <td>
                                        <span class="btn btn-primary" data-toggle="modal"
                                            data-target="#editModal{{ $ambulance->id }}" id="editModal">Edit</span>
                                        <span class="btn btn-danger" <span class="btn btn-primary" data-toggle="modal"
                                            data-target="#deleteModal{{ $ambulance->id }}" id="deleteModal">Delete</span>

                                    </td>
                                </tr>

                                <div class="modal fade" id="editModal{{ $ambulance->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Ambulance</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form class="form form-horizontal"
                                                    action="{{ route('ambulance.update', $ambulance->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @method('PATCH') @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                          <div class="col-md-12 form-group">
                                                            <label>Title</label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                  value="{{ $ambulance->name }}" name="name">
                                                          </div>
                                                            <div class="col-md-12 form-group">
                                                                <label>Driver Name</label>
                                                                <input type="text" value="{{ $ambulance->driver_name }}" class="form-control" name="driver_name">
                                                            </div>
                                                            
                                                            <div class="col-md-12 form-group">
                                                                <label>Driver Phone</label>
                                                                <input type="text" value="{{ $ambulance->driver_phone }}" class="form-control" name="driver_phone">
                                                            </div>
                
                                                            <div class="col-md-12 form-group">
                                                                <label>Vehicle Number</label>
                                                                <input type="text" value="{{ $ambulance->vehicle_number }}" class="form-control" name="vehicle_number">
                                                            </div>

                                                          <div class="col-md-12 form-group">
                                                            <label>District</label>
                                                            <select name="district" class="form-control">
                                                              <option value="">Select District</option>
                                                              <option @if ($ambulance->district == "Dhaka") selected @endif value="Dhaka">Dhaka</option>
                                                              <option @if ($ambulance->district == "Gazipur") selected @endif value="Gazipur">Gazipur</option>
                                                              <option @if ($ambulance->district == "Kishoreganj") selected @endif value="Kishoreganj">Kishoreganj</option>
                                                              <option @if ($ambulance->district == "Manikganj") selected @endif value="Manikganj">Manikganj</option>
                                                              <option @if ($ambulance->district == "Munshiganj") selected @endif value="Munshiganj">Munshiganj</option>
                                                              <option @if ($ambulance->district == "Narayanganj") selected @endif value="Narayanganj">Narayanganj</option>
                                                              <option @if ($ambulance->district == "Narsingdi") selected @endif value="Narsingdi">Narsingdi</option>
                                                              <option @if ($ambulance->district == "Tangail") selected @endif value="Tangail">Tangail</option>
                                                              <option @if ($ambulance->district == "Faridpur") selected @endif value="Faridpur">Faridpur</option>
                                                              <option @if ($ambulance->district == "Gopalganj") selected @endif value="Gopalganj">Gopalganj</option>
                                                              <option @if ($ambulance->district == "Madaripur") selected @endif value="Madaripur">Madaripur</option>
                                                              <option @if ($ambulance->district == "Rajbari") selected @endif value="Rajbari">Rajbari</option>
                                                              <option @if ($ambulance->district == "Shariatpur") selected @endif value="Shariatpur">Shariatpur</option>
                                                            </select>
                                                          </div>
              
                                                          <div class="col-md-12 form-group">
                                                            <label>Area</label>
                                                            <input type="text" class="form-control" value="{{ $ambulance->area }}" name="area">
                                                          </div>
                                                            

                                                            <div class="col-sm-12 d-flex justify-content-start">
                                                                <button type="submit"
                                                                    class="btn btn-primary mr-1 mb-1">Edit</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="deleteModal{{ $ambulance->id }}" class="modal fade">
                                    <div class="modal-dialog modal-confirm">
                                        <div class="modal-content" style="width: 70%!important;text-align:center">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you really want to delete these records? This process cannot
                                                    be undone.</p>
                                            </div>
                                            <div class="modal-footer">

                                                <form action="{{ route('ambulance.destroy', $ambulance->id) }}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf

                                                    <div class="col-sm-12 d-flex justify-content-center">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal"
                                                            style="margin-right: 10px">Cancel</button>

                                                        <button class="btn btn-danger" type="submit">Delete</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (Session::has('delete_confirm_msg'))
                                    <div id="deleteModal" class="modal fade show">
                                        <div class="modal-dialog modal-upload">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="icon-box" data-dismiss="modal" aria-label="Close">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <h4 class="modal-title">Great!</h4>

                                                </div>
                                                <div class="modal-body">
                                                    <p>Your data has been deleted successfully</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info"
                                                        data-dismiss="modal">Ok</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <h1>fsdfsdfsdf</h1> --}}
                                @endif

                                @if(Session::has('update_confirm_msg'))

                                <div id="updateModal" class="modal fade show">
                                    <div class="modal-dialog modal-upload">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="icon-box" data-dismiss="modal" aria-label="Close">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <h4 class="modal-title">Great!</h4>

                                            </div>
                                            <div class="modal-body">
                                                <p>Your data has been updated successfully</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: 'textarea#mytextarea'
            });

        </script>

<script>
  @if(Session::has('update_confirm_msg'))
  $('#updateModal').modal('show');
  @endif
  $('#update_confirm_msg').delay(2000).fadeOut('slow')
  setTimeout(function(){
      $('#updateModal').modal('hide')
  },2500);

</script>

<script>
    @if(Session::has('delete_confirm_msg'))
    $('#deleteModal').modal('show');
    @endif
    $('#delete_confirm_msg').delay(2000).fadeOut('slow')
    setTimeout(function(){
        $('#deleteModal').modal('hide')
    },2500);
  
</script>
</div>





@endsection
