@extends('auth')
@section('content')
    <div class="authentication container-fluid">
        <div class="row">
            <div class="col-md-7 bg-danger">
            </div>

            <div class="col-md-5 px-md-5">
                <form action="" class="auth-form p-md-5 p-4">
                    <div class="logo text-uppercase fs-4 fw-bold my-5">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-3 auth-titlev text-uppercase">User Login</h3>

                    <h4 class="text-danger mb-5 pb-3">Welcome to website</h4>

                    <div class="form-group form-floating mb-4 pb-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                        <label class="bg-transparent" for="email">Email</label>
                    </div>


                    <div class="form-group form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Enter Password">
                        <label class="bg-transparent" for="password">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-5 pb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember">
                            <label class="form-check-label small" for="remember">
                                Remember
                            </label>
                        </div>

                        <a href="javascript:void(0)" class="text-muted text-decoration-none small">Forgot your password?</a>
                    </div>


                    <button type="button" class="btn btn-primary rounded-0 mb-5">Login</button>
                    <br>

                    <a href="javascript:void(0)">Create Account</a>


                </form>
            </div>
        </div>
    </div>
@endsection
