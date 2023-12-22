@extends('auth')
@section('content')
    <div class="authentication container-fluid min-vh-100">

        <div class="auth-box reset d-flex bg-white shadow-lg m-2">

            <!--Authentication cover imgae-->
            <div class="auth-box-half d-md-block d-none auth-cover"
                 style="background-image: url({{asset('./images/auth/image/auth-bg.png')}})"></div>
            <!--Authentication cover imgae-->

            <div class="auth-box-half px-lg-5">
                <!--Authentication form start-->
                <form action="" class="auth-form p-sm-5 p-4">

                    <div class="logo text-uppercase fs-4 fw-bold mt-5 mb-md-5 pb-4">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-2 auth-title text-uppercase">Reset Password</h3>

                    <h5 class="auth-sub-title mb-md-5 mb-3 pb-3">Welcome to website</h5>

                    <input type="hidden" class="form-control shadow-none rounded-0" name="email"
                           placeholder="Enter Your Email">

                    <div class="form-group form-floating mb-4 pb-2">

                        <input type="text" class="form-control shadow-none rounded-0" id="verification_code" name="verification_code"
                               placeholder="Enter Your Verification Code">

                        <label for="verification_code">Verification Code</label>
                    </div>




                    <div class="form-group form-floating mb-4">
                        <input type="password" class="form-control shadow-none rounded-0" id="password" name="password"
                               placeholder="Enter Password">
                        <label for="password">New Password</label>
                    </div>


                    <div class="form-group form-floating mb-4">
                        <input type="password" class="form-control shadow-none rounded-0" id="password" name="password"
                               placeholder="Enter Password">
                        <label for="password">Confirm New Password</label>
                    </div>


                    <button type="button" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4">Confirm</button>

                    <br>

                    Remember Password? <a href="{{route('login')}}" class="text-decoration-none sub-auth-btn">Login</a>


                </form>
                <!--Authentication form end  -->
            </div>

        </div>
    </div>
    </div>
@endsection
