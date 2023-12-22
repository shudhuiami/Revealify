@extends('auth')
@section('content')
    <div class="authentication container-fluid vh-100">
        <div class="row h-100">
            <!--Authentication cover imgae-->
            <div class="col-xl-7 col-md-6  d-md-block d-none auth-cover"
                 style="background-image: url('./images/auth/image/2x/auth-bg.png')"></div>
            <!--Authentication cover imgae-->

            <div class="col-xl-5 col-md-6 col-12 px-lg-5">
                <!--Authentication form start-->
                <form action="" class="auth-form p-lg-5 p-4">

                    <div class="logo text-uppercase fs-4 fw-bold my-5 pb-4">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-2 auth-title text-uppercase">User Login</h3>

                    <h5 class="auth-sub-title mb-5 pb-3">Welcome to website</h5>

                    <div class="form-group form-floating mb-4 pb-2">
                        <input type="email" class="form-control shadow-none rounded-0" id="email" name="email"
                               placeholder="Enter Your Email">
                        <label for="email">Email</label>
                    </div>


                    <div class="form-group form-floating mb-4">
                        <input type="password" class="form-control shadow-none rounded-0" id="password" name="password"
                               placeholder="Enter Password">
                        <label for="password">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-5 pb-3">
                        <div class="form-check">
                            <input class="form-check-input rounded-0" type="checkbox" value="" id="remember">
                            <label class="form-check-label small user-select-none" for="remember">
                                Remember
                            </label>
                        </div>

                        <a href="javascript:void(0)" class="text-muted text-decoration-none small">Forgot your
                            password?</a>
                    </div>


                    <button type="button" class="btn btn-orange-red px-4 rounded-0 mb-4">Login</button>

                    <br>

                    <a href="javascript:void(0)" class="text-decoration-none sub-auth-btn">Create Account</a>


                </form>
                <!--Authentication form end  -->
            </div>
        </div>
    </div>
@endsection
