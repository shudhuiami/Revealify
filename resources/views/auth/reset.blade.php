@extends('layout.auth')
@section('content')
    <div class="authentication container-fluid min-vh-100" id="reset">

        <div class="auth-box reset d-flex bg-white shadow-lg m-2">

            <!--Authentication cover imgae-->
            <div class="auth-box-half d-md-block d-none auth-cover"
                 style="background-image: url({{asset('./images/auth/image/auth-bg.png')}})"></div>
            <!--Authentication cover imgae-->

            <div class="auth-box-half px-lg-5">
                <!--Authentication form start-->
                <form action="" class="auth-form p-sm-5 p-4" @submit.prevent="reset">

                    <div class="logo text-uppercase fs-4 fw-bold mt-5 mb-md-5 pb-4">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-2 auth-title text-uppercase">Reset Password</h3>

                    <h5 class="auth-sub-title mb-md-5 mb-3 pb-3">Welcome to website</h5>

                    <input type="hidden" class="form-control shadow-none rounded-0" name="email"
                           placeholder="Enter Your Email">

                    <div class="form-group form-floating mb-4 pb-2">
                        <input type="text" class="form-control shadow-none rounded-0" id="verification_code"
                               name="verification_code"
                               placeholder="Enter Your Verification Code" v-model="formData.code">

                        <label for="verification_code">Verification Code</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.code != undefined"
                              v-text="error.code[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-4 pb-2">
                        <input type="email" class="form-control shadow-none rounded-0" id="email" name="email"
                               placeholder="Enter Email" v-model="formData.email">

                        <label for="verification_code">Email</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.email != undefined"
                              v-text="error.email[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-4">
                        <input type="password" class="form-control shadow-none rounded-0" id="password" name="password"
                               placeholder="Enter Password" v-model="formData.password">
                        <label for="password">New Password</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.password != undefined"
                              v-text="error.password[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-4">
                        <input type="password" class="form-control shadow-none rounded-0" id="password_confirmation"
                               name="password_confirmation"
                               placeholder="Enter Confirm Password" v-model="formData.password_confirmation">
                        <label for="password_confirmation">Confirm New Password</label>
                    </div>


                    <button type="submit" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4" v-if="!loading">Confirm
                    </button>
                    <button type="button" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4" v-if="loading">
                        <img :src="'/images/loader.svg'" class="spin" alt="loader">
                    </button>


                    <br>

                    Remember Password? <a href="{{route('login')}}" class="text-decoration-none sub-auth-btn">Login</a>


                </form>
                <!--Authentication form end  -->
            </div>

        </div>
    </div>
    </div>

    <script>
        new Vue({
            el: '#reset',
            data: {
                formData: {
                    code: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                },
                loading: false,
                error: null
            },
            methods: {
                reset: function () {
                    this.loading = true;
                    this.error = null;
                    axios.post('{{ route('user.reset.password') }}', this.formData).then(response => {
                        this.loading = false;
                        const res = response.data;
                        if (res.status === 200) {
                            this.formData = {
                                code: '',
                                email: '',
                                password: '',
                                password_confirmation: ''
                            }
                            window.location.href = "{{route('theme.selection')}}"
                        } else {
                            this.error = res.error;
                        }
                    }).catch(err => {
                        this.loading = false
                        this.error = err.response.data.errors;
                    })
                }
            },
            mounted() {
                this.formData.code = {{ app('request')->input('token') }};
            }
        })
    </script>

@endsection
