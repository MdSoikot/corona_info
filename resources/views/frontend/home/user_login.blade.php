@extends('layouts.main')

@section('content')
 


<div class="user-form-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">

                <div class="user-form-item">
                    <h4>Sign In</h4>

                    <form method="POST" action={{ route('login') }}>
                        @csrf
                        <div class="form-group" style="display: none">
                            <label for="country-floating">Select Role</label>

                            <select class="form-select" id="role" name="role">
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Type your email *"
                                value="" name="email" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" value=""
                                name="password" required/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <button type="submit" class="common-btn">Sign In</button>
                        </div>
                    <p>Didn't have an account? <a href="{{url("user_register")}}">Sign Up</a></p>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection