<div id="profile-header">
    <header class="py-3 px-3 px-sm-5 shadow-sm fixed-top bg-white">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="{{route('landing.page')}}" class="d-inline-block logo">
                    <img src="{{asset('/images/landing-page/revealify.png')}}" width="200" alt="">
                </a>
                <div class="right">
                    <a href="javascript:void(0)" class="avatar" @click="openDropDown">
                        <img src="{{asset('/images/generate-form/profile.png')}}" height="40" width="40" alt="">
                    </a>
                    <ul class="drop_down shadow rounded">
                        <li>
                            <a href="javascript:void(0)" class="btn btn-aqua-blue rounded-pill" @click="openPasswordModal">Change Password</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="btn btn-aqua-blue rounded-pill" @click="logout" v-if="!logoutLoading">Log out</a>
                            <button type="button" class="btn btn-aqua-blue rounded-pill w-100 h-43" v-if="logoutLoading">
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    {{--Modal--}}
    <div class="modal fade" id="ChangePassword" tabindex="-1" aria-labelledby="ChangePasswordLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                </div>
                <form @submit.prevent="changePassword" >
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control mt-1" v-model="formData.current_password">
                            <div class="error-report"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control mt-1" v-model="formData.password">
                            <div class="error-report"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control mt-1" v-model="formData.password_confirmation">
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-aqua-blue" v-if="!passwordLoading">Update</button>
                        <button type="submit" class="btn btn-aqua-blue" v-if="passwordLoading">
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
                        <button type="button" class="btn btn-orange-red" @click="closePasswordModal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    new Vue({
        el: '#profile-header',
        data(){
            return {
                formData: {
                  current_password: '',
                  password: '',
                  password_confirmation: ''
                },
                passwordLoading: false,
                logoutLoading: false,
            }
        },
        methods: {
            logout(){
                this.logoutLoading = true;
                this.error = null;
                axios.post('{{ route('logout') }}').then(response => {
                    this.logoutLoading = false;
                    window.location.href = "{{route('login')}}";
                })
            },

            openPasswordModal(){
                $('#ChangePassword').modal('show');
            },

            closePasswordModal(){
                $('#ChangePassword').modal('hide');
                this.formData = {
                    current_password: '',
                    password: '',
                    password_confirmation: ''
                };
                $('.is-invalid').removeClass('is-invalid');
                $('.error-report').html('');
            },

            changePassword(){
                this.passwordLoading = true;
                this.error = null;
                axios.post('{{ route('user.password') }}', this.formData).then(response => {
                    this.passwordLoading = false;
                    const res = response.data;
                    if (res.status === 200) {
                        this.closePasswordModal();
                    } else {
                        this.ErrorHandler(res.error);
                    }
                }).catch(err => {
                    this.loading = false
                    this.ErrorHandler(err.response.data.errors);
                })
            },

            openDropDown(){
                const dropDown = document.querySelector('.drop_down');
                if(dropDown.classList.contains('active')){
                    dropDown.classList.remove('active');
                }else{
                    dropDown.classList.add('active');
                }

            },

           outsideClick(){
                window.addEventListener('click', (e) => {
                    const avatar = document.querySelector('.avatar');
                    const dropDown = document.querySelector('.drop_down');

                    if(!avatar.contains(e.target) && !dropDown.contains(e.target)){
                        dropDown.classList.remove('active');
                    }
                })
            },

            ErrorHandler(errors) {
                $('.is-invalid').removeClass('is-invalid');
                $('.error-report').html('');
                Object.entries(errors).forEach(([i, v]) => {
                    const inputElement = document.querySelector(`[name="${i}"]`);
                    const invalidFeedback = inputElement?.closest('.form-group')?.querySelector('.error-report');
                    if (invalidFeedback) {
                        invalidFeedback.textContent = v;
                        inputElement.classList.add('is-invalid')
                    }
                });
            },
        },
        mounted(){
            this.outsideClick();
        }
    })
</script>
