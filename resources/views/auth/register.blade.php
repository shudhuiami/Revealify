@extends('layout.auth')
@section('content')
    <div class="authentication container-fluid min-vh-100" id="register">

        <div class="auth-box register d-flex bg-white shadow-lg m-2">

            <!--Authentication cover imgae-->
            <div class="auth-box-half d-md-block d-none auth-cover"
                 style="background-image: url({{asset('./images/auth/image/auth-bg.png')}})"></div>
            <!--Authentication cover imgae-->

            <div class="auth-box-half px-lg-5">
                <!--Authentication form start-->
                <form action="" class="auth-form p-sm-5 p-4" @submit.prevent="register" v-if="!isRegistrationSuccess">
                    <div class="logo text-uppercase fs-4 fw-bold mt-3 pb-4">Revealify</div>

                    <h3 class="mb-3 fw-bold fs-2 auth-title text-uppercase">User Signup</h3>

                    <h5 class="auth-sub-title mb-3 pb-3">Welcome to website</h5>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control shadow-none rounded-0" id="first_name" name="first_name"
                               placeholder="Enter First Name" v-model="formData.first_name">
                        <label for="first_name">First Name</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.first_name != undefined"
                              v-text="error.first_name[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control shadow-none rounded-0" id="last_name" name="last_name"
                               placeholder="Enter Last Name" v-model="formData.last_name">
                        <label for="last_name">last Name</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.last_name != undefined"
                              v-text="error.last_name[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control shadow-none rounded-0" id="email" name="email"
                               placeholder="Enter Your Email" v-model="formData.email">
                        <label for="email">Email</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.email != undefined"
                              v-text="error.email[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control shadow-none rounded-0" id="phone" name="phone"
                               placeholder="Enter Mobile Number" v-model="formData.phone" @keypress="checkNumber($event)">
                        <label for="phone">Mobile</label>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control shadow-none rounded-0" id="password" name="password"
                               placeholder="Enter Password" v-model="formData.password">
                        <label for="password">Password</label>
                        <span class="invalid-feedback d-block" v-if="error != null && error.password != undefined"
                              v-text="error.password[0]"></span>
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control shadow-none rounded-0" id="password_confirmation"
                               name="password_confirmation"
                               placeholder="Confirm Password" v-model="formData.password_confirmation">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>

                    <button type="submit" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4" v-if="!loading">Signup
                    </button>
                    <button type="button" class="btn btn-orange-red px-4 rounded-0 mt-5 mb-4" v-if="loading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="spin feather feather-loader">
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

                    Already have an account? <a href="{{route('login')}}" class="text-decoration-none sub-auth-btn">Login</a>


                </form>
                <div class="success-wrapper p-sm-5 py-lg-4 px-md-2 p-xl-4" v-if="isRegistrationSuccess">
                    <div class="success-box text-center">
                        <img src="{{asset('/images/auth/image/success.png')}}" class="mb-3" alt="success">
                        <div class="mt-5 title">
                            Registration has been completed successfully.
                        </div>
                        <div class="switch">
                            <span>Please back to</span>
                             <a href="{{route('login')}}" class="btn btn-aqua-blue">Login</a>
                        </div>
                    </div>
                </div>
                <!--Authentication form end  -->
            </div>

        </div>
    </div>
    </div>

    <script>
        new Vue({
            el: '#register',
            data: {
                formData: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    mobile: '',
                    password: '',
                    password_confirmation: ''
                },
                loading: false,
                error: null,
                isRegistrationSuccess: false
            },
            methods: {
                register: function () {
                    this.loading = true;
                    this.error = null;
                    axios.post('{{ route('user.registration') }}', this.formData).then(response => {
                        this.loading = false;
                        this.formData = {
                            first_name: '',
                            last_name: '',
                            email: '',
                            mobile: '',
                            password: '',
                            password_confirmation: ''
                        }
                        this.isRegistrationSuccess = true;
                    }).catch(err => {
                        // Error Handling here
                        this.loading = false
                        this.error = err.response.data.errors;
                    })
                },

                /*Number Validation*/
                checkNumber(evt) {
                    var theEvent = evt || window.event;

                    // Handle paste
                    if (theEvent.type === 'paste') {
                        // @ts-ignore
                        key = event.clipboardData.getData('text/plain');
                    } else {
                        // Handle key press
                        var key = theEvent.keyCode || theEvent.which;
                        key = String.fromCharCode(key);
                    }
                    var regex = /^\d*\.?\d*$/;
                    if (!regex.test(key)) {
                        theEvent.returnValue = false;
                        if (theEvent.preventDefault) theEvent.preventDefault();
                    }
                },
            },
            mounted() {
            }
        })
    </script>
@endsection
