@extends('myTemplate.master')

@section('title', 'Videos')

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
                            <li class="breadcrumb-item"><a href="{{'admin/homepage'}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Videos</li>
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
                                <th>Name</th>
                                <th>Video Thumbnail</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allVideos as $item)
                                <tr>
                                    <td>{{ $loop->index++ }}</td>
                                    <td>{{ $item->video_details }}</td>
                                    <td>
                                      @if ($item->video_thumbnail)
                                        <img src="{{asset($item->video_thumbnail)}}" style="width: 50px;
                                        height: 60px;">
                                          
                                      @endif
                                    </td>
                                    <td>
                                      {!!$item->video_link!!}
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
                                              <h5 class="modal-title" id="exampleModalLongTitle">Edit Videos</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form form-horizontal"
                                                  action="{{ route('videos.update', $item->id) }}" method="POST"
                                                  enctype="multipart/form-data">
                                                  @method('PATCH') @csrf
                                                  <div class="form-body">
                                                      <div class="row">

                                                          <div class="col-md-12 form-group">
                                                              <label>Video Name</label>
                                                              <input type="text" id="first-name" class="form-control"
                                                                  value="{{ $item->video_details }}" name="video_details">
                                                          </div>


                                                          <div class="col-md-12 form-group">
                                                            <label>Video Thumbnail</label>
                                                            <input type="file" id="first-name" class="form-control"
                                                                name="video_thumbnail">
                                                            @if ($item->video_thumbnail)
                                                              <img src="{{asset($item->video_thumbnail)}}" style="width: 50px;
                                                              height: 60px;">
                                                                
                                                            @endif
                                                          </div>

                                                          <div class="col-md-12 form-group">
                                                            <label>Url</label>
                                                            <input type="text" id="first-name" class="form-control"
                                                                  value="{{ $item->video_link }}" name="video_link">
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
