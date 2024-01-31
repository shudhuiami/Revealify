@extends('layout.profile')
@section('content')
    <div id="profile">
        {{--    {{dd($userInfo->first_name)}}--}}
        {{--    {{dd($userInfo)}}--}}
        <div class="container">
            <div class="content py-5" v-if="profileInfo">
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

            <!-- Modal -->
            <div class="modal fade" id="EditProfile" tabindex="-1" aria-labelledby="EditProfileLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control mt-1">
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-aqua-blue">Update</button>
                                <button type="button" class="btn btn-orange-red" data-bs-dismiss="modal">Cancel</button>
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
                profileInfo: null
            },
            methods: {

                openModal() {
                    const myModal = new bootstrap.Modal(document.getElementById('EditProfile'), {})
                    myModal.show()
                },

                getProfile(){
                    this.loading = true;
                    this.error = null;
                    axios.get('{{ route('user.profile') }}').then(response => {
                        const res = response.data;
                        this.profileInfo = res.user;
                        if(this.profileInfo){
                            this.profileInfo.name = this.profileInfo.first_name + this.profileInfo.last_name;
                        }
                    })
                }

            },
            mounted() {
                this.getProfile();
            }
        })
    </script>
@endsection
