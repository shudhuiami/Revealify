@extends('auth')
@section('content')
    <div class="authentication container-fluid min-vh-100" id="forgot">

        <div class="auth-box forgot d-flex bg-white shadow-lg m-2">

            <!--Authentication cover imgae-->
            <div class="auth-box-half d-md-block d-none auth-cover"
                 style="background-image: url({{asset('./images/auth/image/auth-bg.png')}})"></div>
            <!--Authentication cover imgae-->

            <div class="auth-box-half px-lg-5">
                <!--Authentication form start-->
                <form action="" class="auth-form py-sm-5 p-4" @submit.prevent="forgot">
                    <div class="alert alert-success" v-if="message">@{{ message }}</div>

                    <div class="logo text-uppercase fs-4 fw-bold mt-5 mb-md-5 pb-4">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-2 auth-title text-uppercase">Forgot Password</h3>

                    <h5 class="auth-sub-title mb-md-5 mb-3 pb-3">Welcome to website</h5>

                    <div class="form-group form-floating mb-4 pb-2">
                        <input type="email" class="form-control shadow-none rounded-0" id="email" name="email"
                               placeholder="Enter Your Email" v-model="formData.email">
                        <label for="email">Email</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.email != undefined" v-text="error.email[0]"></span>
                    </div>

                    <button type="submit" class="btn btn-orange-red px-4 rounded-0 mt-2 mb-4" v-if="!loading">Confirm</button>
                    <button type="button" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4" v-if="loading">
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor"
                             stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                             class="css-i6dzq1 la-spin spin">
                            <line x1="12" y1="2" x2="12" y2="6"></line>
                            <line x1="12" y1="18" x2="12" y2="22"></line>
                            <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                            <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                            <line x1="2" y1="12" x2="6" y2="12"></line>
                            <line x1="18" y1="12" x2="22" y2="12"></line>
                            <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                            <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                        </svg>
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
            el: '#forgot',
            data: {
                formData: {
                    email: '',
                },
                loading: false,
                error: null,
                message: null
            },
            methods:  {
                forgot: function () {
                    this.message = null;
                    this.loading = true;
                    this.error = null;
                    axios.post('{{ route('user.forgot.password') }}', this.formData).then(response => {
                        this.loading = false;
                        const res = response.data;
                        if(res.status === 200){
                            this.formData = {
                                email: ''
                            }
                            this.message = res.msg;
                        }else {
                            console.log(res)
                            this.error = res.error;
                        }
                    }).catch(err => {
                        this.loading = false
                        this.error = err.response.data.errors;
                    })
                }
            },
            mounted() {
            }
        })
    </script>
@endsection
