@extends('auth')
@section('content')
    <div class="authentication container-fluid min-vh-100">

        <div class="auth-box register d-flex bg-white shadow-lg m-2">

            <!--Authentication cover imgae-->
            <div class="auth-box-half d-md-block d-none auth-cover"
                 style="background-image: url({{asset('./images/auth/image/auth-bg.png')}})"></div>
            <!--Authentication cover imgae-->

            <div class="auth-box-half px-lg-5">
                <!--Authentication form start-->
                <form action="" class="auth-form p-sm-5 p-4">

                    <div class="logo text-uppercase fs-4 fw-bold mt-3 pb-4">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-2 auth-title text-uppercase">User Signup</h3>

                    <h5 class="auth-sub-title mb-3 pb-3">Welcome to website</h5>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control shadow-none rounded-0" id="first_name" name="first_name"
                               placeholder="Enter First Name">
                        <label for="first_name">First Name</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control shadow-none rounded-0" id="last_name" name="last_name"
                               placeholder="Enter Last Name">
                        <label for="last_name">last Name</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control shadow-none rounded-0" id="email" name="email"
                               placeholder="Enter Your Email">
                        <label for="email">Email</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control shadow-none rounded-0" id="mobile" name="mobile"
                               placeholder="Enter Your Email">
                        <label for="mobile">Mobile</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control shadow-none rounded-0" id="password" name="password"
                               placeholder="Enter Password">
                        <label for="password">Password</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control shadow-none rounded-0" id="password_confirmation" name="password_confirmation"
                               placeholder="Confirm Password">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>


                    <button type="button" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4">Signup</button>

                    <br>

                   Already have an account?  <a href="{{route('login')}}" class="text-decoration-none sub-auth-btn">Login</a>


                </form>
                <!--Authentication form end  -->
            </div>

        </div>
    </div>
    </div>
@endsection
