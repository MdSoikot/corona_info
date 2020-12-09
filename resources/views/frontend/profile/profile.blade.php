@extends('layouts.main')

@section('content')
  
<!-- Team Details -->
<div class="team-details-area pt-100 pb-70">
  <div class="container">
      <div class="row align-items-center">

          <div class="col-lg-5">
              <div class="details-img">
                @if (auth()->user()->image)
                  <img src="/{{auth()->user()->image}}" alt="Team">
                @else
                  <img src="/assets/img/team/team-details1.jpg" alt="Team">
                @endif
              </div>
          </div>

          <div class="col-lg-7">
              <div class="details-content">
                  <h2> {{auth()->user()->name}} </h2>
                  <span> {{auth()->user()->email}} </span>
                  <p>Mobile: {{auth()->user()->mobile}} </p>
                  
                  <div class="change-password">
                    <button class="btn common-btn" type="button" data-toggle="modal"  data-target="#exampleModalLong">
                      Edit Profile
                      <span></span>
                    </button>
                    <button class="btn common-btn" type="button" data-toggle="modal"  data-target="#changePassword">
                      Change Password
                      <span></span>
                    </button>
                  </div>
              </div>
          </div>

      </div>
  </div>
</div>
<!-- End Team Details -->

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action=" {{route('user-update')}} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">My Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}"/>
              </div>
              <div class="form-group">
                <label>Mobile Number:</label>
                <input type="text" class="form-control" name="mobile" value="{{auth()->user()->mobile}}"/>
              </div>
              <div class="form-group">
                <label>Profile Picture:</label>
                <input type="file" class="form-control" name="image"/>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn common-btn" type="submit">Update</button>
            </div>
          </form>
        </div>
    </div>
</div>


<div class="modal fade" id="changePassword" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form role="form" action=" {{route('user-password-update')}} " id="changePasswordForm" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">My Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>New Password:</label>
                <input type="password" class="form-control" id="password" name="password"/>
                <span id="password-error" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" id="password2" name="password2"/>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn common-btn" type="button" onclick="checkPassword()">Update</button>
            </div>
          </form>
        </div>
    </div>
</div>

@endsection

@section('footer-script')
  <script>
    function checkPassword() {
      let pass1 = $('#password').val();
      let pass2 = $('#password2').val();

      if (pass1 == pass2) {
        $("#changePasswordForm").submit()
      }
      else{
        $('#password-error').html('Password is not matched.')
      }
    }
  </script>
@endsection