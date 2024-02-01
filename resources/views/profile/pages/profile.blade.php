@extends('layout.profile')
@section('content')
    <div id="profile">
        <div class="container">
            <div class="page_content" v-if="profileInfo && !loading">
                <h2 class="page_title">Profile</h2>
                <div class="row">
                    <div class="col-lg-5 col-xxl-4">
                        <div class="card shadow-sm px-3 py-4">
                            <div>
                                <table class="table">
                                    <tbody class="table-borderless">
                                    <tr>
                                        <th colspan="3" class="border-0">
                                            <div class="text-center mb-4">
                                                <img :src="profileInfo.avatar" height="80" width="80" alt="" v-if="profileInfo.avatar">
                                                <img src="{{asset('/images/generate-form/profile.png')}}"
                                                     height="80" width="80" alt="" v-if="!profileInfo.avatar">
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="border-0">Name</th>
                                        <td class="border-0">:</td>
                                        <td class="border-0">@{{ profileInfo.name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-0">Email</th>
                                        <td class="border-0">:</td>
                                        <td class="border-0">@{{ profileInfo.email }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-0">Phone</th>
                                        <td class="border-0">:</td>
                                        <td class="border-0">@{{ profileInfo.phone ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="border-0">
                                            <a href="javascript:void(0)" class="edit_profile"
                                               @click="openModal">Edit</a>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="action">
                                <a href="" class="link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xxl-8 mt-4 mt-lg-0">
                        <div class="card py-4 px-3 cv-template">
                            <div class="d-flex align-items-center justify-content-between list-item">
                                <a href="" class="title d-inline-block">Theme Template One</a>
                                <div class="action">
                                    <a href="javascript:void(0)" class="btn btn-aqua-blue d-inline-block me-2">
                                        <img src="{{asset('/images/generate-form/pencil.png')}}" height="20" width="20"
                                             alt="">
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-orange-red d-inline-block">
                                        <img src="{{asset('/images/generate-form/delete.png')}}" height="20" width="20"
                                             alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between list-item">
                                <a href="" class="title d-inline-block">Theme Template Two</a>
                                <div class="action">
                                    <a href="javascript:void(0)" class="btn btn-aqua-blue d-inline-block me-2">
                                        <img src="{{asset('/images/generate-form/pencil.png')}}" height="20" width="20"
                                             alt="">
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-orange-red d-inline-block">
                                        <img src="{{asset('/images/generate-form/delete.png')}}" height="20" width="20"
                                             alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loader" v-if="loading">
                <div class="card text-center p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#000000"
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
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="EditProfile" tabindex="-1" aria-labelledby="EditProfileLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        </div>
                        <form @submit.prevent="updateProfile">
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control mt-1" v-model="formData.first_name">
                                    <div class="error-report"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control mt-1" v-model="formData.last_name">
                                    <div class="error-report"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control mt-1" v-model="formData.email">
                                    <div class="error-report"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control mt-1" v-model="formData.phone" @keypress="checkNumber($event)">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" class="btn btn-aqua-blue" v-if="!updateLoading">Update</button>
                                <button type="submit" class="btn btn-aqua-blue" v-if="updateLoading">
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
                                <button type="button" class="btn btn-orange-red" @click="closeModal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        new Vue({
            el: '#profile',
            data: {
                profileInfo: null,
                formData: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: ''
                },
                updateLoading: false,
                loading: false
            },
            methods: {

                openModal() {
                    this.formData = {...this.profileInfo}
                    $('#EditProfile').modal('show');
                },

                closeModal(){
                    this.formData = {
                        first_name: '',
                        last_name: '',
                        email: '',
                        phone: ''
                    };
                    $('.is-invalid').removeClass('is-invalid');
                    $('.error-report').html('');

                    $('#EditProfile').modal('hide');
                },

                updateProfile(){
                    this.updateLoading = true;
                    this.error = null;
                    axios.post('{{ route('user.update.profile') }}', this.formData).then(response => {
                        this.updateLoading = false;
                        const res = response.data;
                        if (res.status === 200) {
                            this.closeModal();
                            this.getProfile();
                        } else {
                            this.ErrorHandler(res.error);
                        }
                    }).catch(err => {
                        this.updateLoading = false
                        this.ErrorHandler(err.response.data.errors);
                    })
                },

                getProfile(){
                    this.loading = true;
                    this.error = null;
                    axios.get('{{ route('user.profile') }}').then(response => {
                        this.loading = false
                        const res = response.data;
                        this.profileInfo = res.user;
                        if(this.profileInfo){
                            this.profileInfo.name = this.profileInfo.first_name + ' ' + this.profileInfo.last_name;
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
                this.getProfile();
            }
        })
    </script>
@endsection
