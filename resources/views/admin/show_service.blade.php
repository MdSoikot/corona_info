@extends('myTemplate.master')

@section('title', 'Show-servie')

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
                            <li class="breadcrumb-item active" aria-current="page">Show Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Show Service
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Service Name</th>
                                <th>Title</th>
                                <th>Service Image</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            @foreach ($allData as $item)

                                <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $item->service_name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>

                                        <img src="<?php echo asset("storage/app/uploads/images/$item->service_image"); ?>">
                                    </td>
                                    <td>
                                        {!! html_entity_decode($item->content) !!}
                                    </td>

                                    <td>
                                        <span class="btn btn-primary" data-toggle="modal"
                                            data-target="#editModal{{ $item->id }}" id="editModal">Edit</span>
                                        <span class="btn btn-danger" <span class="btn btn-primary" data-toggle="modal"
                                            data-target="#deleteModal{{ $item->id }}" id="deleteModal">Delete</span>

                                    </td>
                                </tr>


                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">My Profile</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form class="form form-horizontal"
                                                    action="{{ route('services.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @method('PATCH') @csrf
                                                    <div class="form-body">
                                                        <div class="row">

                                                            <div class="col-md-12 form-group">
                                                                <label>Service name</label>
                                                                <input type="text" id="first-name" class="form-control"
                                                                    value="{{ $item->service_name }}" name="service_name">
                                                            </div>


                                                            <div class="col-md-12 form-group">
                                                                <label>Title</label>
                                                                <input type="text" id="first-name" class="form-control"
                                                                    value="{{ $item->title }}" name="title">
                                                            </div>

                                                            <div class="col-md-12 form-group">
                                                                <label>Service Image</label>
                                                                <input type="file" id="first-name" class="form-control"
                                                                    name="service_image">
                                                            </div>

                                                            <div class="col-md-12 form-group">
                                                                <label>Content</label>
                                                                <textarea id="mytextarea"
                                                                    name="content">Hello, World!</textarea>
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

                                <div id="deleteModal{{ $item->id }}" class="modal fade">
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

                                                <form action="{{ route('services.destroy', $item->id) }}" method="POST">
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
