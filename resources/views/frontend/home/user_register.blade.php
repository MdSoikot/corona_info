@extends('layouts.main')

@section('content')
 


<div class="user-form-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">

                <div class="user-form-item mt-5">
                        <h4>Register</h4>
                        <form method="POST" action={{ route('register') }}>
                            @csrf
                            <div class="form-group" style="display: none">
                                <label for="country-floating">Select Role</label>

                                <select class="form-select" id="role" name="role">
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Type your name*" value="" name="name" required />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Type your email *" value="" name="email" required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Password *" value="" name="password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *"
                                    value="" name="password_confirmation" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type your mobile no"
                                    value="" name="mobile" />

                            </div>
                            <div class="text-center">
                                <a href="#" class="common-btn">
                                    Sign Up
                                    <span></span>
                                </a>
                            </div>
                            <p>Already created an account? <a href="{{url("user_login")}}">Sign In</a></p>

                        </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection