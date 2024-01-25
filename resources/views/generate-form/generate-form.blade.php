@extends('layout.generate-layout')
@section('content')
    <div class="generate" id="generate">
        <form @submit.prevent="generateCV">
            {{--header--}}
            <header class="py-3 px-1 px-sm-5 shadow-sm fixed-top bg-white">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="mb-0 title">Generate Form</h2>
                        <button type="submit" class="btn btn-aqua-blue rounded-pill rounded-pill" v-if="!loading">Generate</button>
                        <button type="button" class="btn btn-aqua-blue rounded-pill rounded-pill" v-if="loading">
                            <img :src="'/images/loader.svg'" alt="loader">
                        </button>
                    </div>
                </div>
            </header>

            {{--form content--}}
            <div class="container">
                <div class="form-content mx-auto py-5 px-3 px-md-0">
                    <div class="form-group mb-5 avatar">
                        <div class="img" v-if="formData.avatar != null">
                            <img :src="'/storage/media/'+formData.avatar" alt="">
                            <button type="button" class="btn btn-aqua-blue btn-sm remove-avatar rounded-circle-avatar"
                                    @click="formData.avatar = null">
                                <img :src="'/images/generate-form/delete.png'" alt="">
                            </button>
                        </div>
                        <label for="uploadAvatar" class="avatar_label"  v-if="!avatarLoading && formData.avatar == null">
                            <input type="file" id="uploadAvatar" class="form-control-custom d-none" name="avatar"
                                   accept="image/*"
                                   autocomplete="new-file_path" @change="attachFile($event)">
                            <img src="{{asset('/images/generate-form/camera.png')}}" alt="">
                        </label>
                        <div class="avatar_label"  v-if="avatarLoading">
                            <img :src="'/images/loader.svg'" class="spin" alt="loader">
                        </div>
                        <div class="error-report"></div>
                    </div>
                    <div class="card mb-5 p-4">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control mt-1"
                                           v-model="formData.name">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" id="designation" name="designation" class="form-control mt-1"
                                           v-model="formData.designation">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control mt-1"
                                           v-model="formData.email">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control mt-1"
                                           v-model="formData.address">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="primary_contact">Primary Contact</label>
                                    <input type="text" id="primary_contact" name="primary_contact"
                                           class="form-control mt-1" v-model="formData.primary_contact" @keypress="checkNumber($event)">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="secondary_contact">Secondary Contact</label>
                                    <input type="text" id="secondary_contact" name="secondary_contact"
                                           class="form-control mt-1" v-model="formData.secondary_contact" @keypress="checkNumber($event)">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" class="form-control mt-1"
                                           v-model="formData.website">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" cols="30" rows="5" class="form-control mt-1"
                                              v-model="formData.description"></textarea>
                                    <div class="error-report"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="fw-bold">Education</div>
                            <button type="button" class="btn btn-aqua-blue btn-sm add" @click="addEducationFields">
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20"
                                     class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in formData.education">
                            <div class="mb-3 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle"
                                        @click="formData.education.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                                </button>
                            </div>
                            <div class="card p-4 mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" :name="'education.'+index+'.title'"
                                                   class="form-control mt-1" v-model="each.title">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="school">School</label>
                                            <input type="text" id="school" :name="'education.'+index+'.school'"
                                                   class="form-control mt-1" v-model="each.school">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 md-sm-0">
                                        <div class="form-group">
                                            <label for="start_date">Start month and year</label>
                                            <input type="text" :id="'start_date_' + index"
                                                   :name="'education.'+index+'.start_date'" class="form-control mt-1"
                                                   v-model="each.start_date">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="end_date">End month and year</label>
                                            <input type="text" :id="'end_date_' + index"
                                                   :name="'education.'+index+'.end_date'" class="form-control mt-1"
                                                   v-model="each.end_date">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="fw-bold">Skills</div>
                            <button type="button" class="btn btn-aqua-blue btn-sm add" @click="addSkillFields">
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20"
                                     class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in  formData.skills">
                            <div class="mb-2 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle"
                                        @click="formData.skills.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                                </button>
                            </div>
                            <div class="card p-4 mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" :name="'skills.'+index+'.title'" id="title" class="form-control mt-1"
                                                   v-model="each.title">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="experience">Experience</label>
                                            <input type="text" :name="'skills.'+index+'.experience'" id="experience"
                                                   class="form-control mt-1" v-model="each.experience">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="fluent">Fluent</label>
                                            <input type="range" :name="'skills.'+index+'.fluent'" class="form-range mt-1" min="0" max="100" id="fluent"
                                                   v-model="each.fluent">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="fw-bold">Job Experience</div>
                            <button type="button" class="btn btn-aqua-blue btn-sm add" @click="addJobExperienceFields">
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20"
                                     class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in formData.experience">
                            <div class="mb-2 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle"
                                        @click="formData.experience.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                                </button>
                            </div>
                            <div class="card p-4 mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" id="designation" :name="'experience.'+index+'.designation'"
                                                   class="form-control mt-1" v-model="each.designation">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" :name="'experience.'+index+'.company'" id="company" class="form-control mt-1"
                                                   v-model="each.company">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="start_date">Start month and year</label>
                                            <input type="text" :name="'experience.'+index+'.start_date'" :id="'start_date_' + index"
                                                   class="form-control mt-1" v-model="each.start_date">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="end_date">End month and year</label>
                                            <input type="text" :name="'experience.'+index+'.end_date'" :id="'end_date_' + index"
                                                   class="form-control mt-1" v-model="each.end_date">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Short description about your role</label>
                                            <textarea :name="'experience.'+index+'.short_description'" cols="30" rows="5" class="form-control"
                                                      v-model="each.short_description"></textarea>
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="fw-bold">Reference</div>
                            <button type="button" class="btn btn-aqua-blue btn-sm add" @click="addReferenceFields">
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20"
                                     class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in formData.reference">
                            <div class="mb-2 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle"
                                        @click="formData.reference.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="16" width="16">
                                </button>
                            </div>
                            <div class="card p-4 mb-4">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" :name="'reference.'+index+'.name'" class="form-control mt-1"
                                                   v-model="each.name">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" :name="'reference.'+index+'.email'" class="form-control mt-1"
                                                   v-model="each.email">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" :name="'reference.'+index+'.phone'" class="form-control mt-1"
                                                   v-model="each.phone" @keypress="checkNumber($event)">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" :name="'reference.'+index+'.company'" class="form-control mt-1"
                                                   v-model="each.company">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" :name="'reference.'+index+'.address'" class="form-control mt-1"
                                                   v-model="each.address">
                                            <div class="error-report"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        new Vue({
            el: "#generate",
            data: {
                formData: {
                    avatar: null,
                    name: "",
                    designation: '',
                    email: '',
                    primary_contact: '',
                    secondary_contact: '',
                    address: '',
                    website: '',
                    description: '',
                    template: 1,
                    education: [
                        {
                            title: '',
                            school: '',
                            start_date: '',
                            end_date: ''
                        }
                    ],
                    skills: [
                        {
                            title: '',
                            experience: '',
                            fluent: '',
                        }
                    ],
                    experience: [
                        {
                            designation: '',
                            company: '',
                            start_date: '',
                            end_date: '',
                            short_description: '',
                        }
                    ],
                    reference: [
                        {
                            name: '',
                            email: '',
                            phone: '',
                            company: '',
                            address: '',
                        }
                    ],
                },
                image: null,
                loading: false,
                avatarLoading: false,
                error: null
            },
            methods: {
                addEducationFields() {
                    if (this.formData.education.length < 3) {
                        this.formData.education.push({
                            title: '',
                            school: '',
                            start_date: '',
                            end_date: ''
                        });
                        this.initFlat(this.formData.education.length - 1)
                    }
                },
                addSkillFields() {
                    if (this.formData.skills.length < 6) {
                        this.formData.skills.push({
                            title: '',
                            experience: '',
                            fluent: '',
                        });
                    }
                },
                addJobExperienceFields() {
                    if (this.formData.experience.length < 3) {
                        this.formData.experience.push({
                            designation: '',
                            company: '',
                            start_date: '',
                            end_date: '',
                            short_description: '',
                        });
                    }
                    this.initFlat(this.formData.experience.length - 1)
                },
                addReferenceFields() {
                    if (this.formData.reference.length < 3) {
                        this.formData.reference.push({
                            name: '',
                            email: '',
                            phone: '',
                            company: '',
                            address: '',
                        });
                    }
                },
                attachFile(e) {
                    console.log(e.target.files[0])
                    this.avatar = URL.createObjectURL(e.target.files[0]);
                },
                initFlat(id) {
                    setTimeout(() => {
                        flatpickr(`#start_date_${id}`, {
                            plugins: [
                                new monthSelectPlugin({
                                    shorthand: true, //defaults to false
                                    dateFormat: "F Y", //defaults to "F Y"
                                    altFormat: "F Y", //defaults to "F Y"
                                    theme: "light", // defaults to "light"
                                    disableMobile: "true"
                                })
                            ]
                        });
                        flatpickr(`#end_date_${id}`, {
                            plugins: [
                                new monthSelectPlugin({
                                    shorthand: true, //defaults to false
                                    dateFormat: "F Y", //defaults to "F Y"
                                    altFormat: "F Y", //defaults to "F Y"
                                    theme: "light", // defaults to "light"
                                    disableMobile: "true"
                                })
                            ]
                        });
                    }, 200)
                },

                generateCV() {
                    this.loading = true;
                    this.error = null;
                    axios.post('{{ route('user.resume') }}', this.formData).then(response => {
                        this.loading = false;
                        const res = response.data;
                        if (res.status === 200) {
                            window.location.href = '{{route('template.download')}}';
                        } else {
                            this.error = res.error;
                            this.ErrorHandler(res.error)
                        }
                    }).catch(err => {
                        this.loading = false
                        this.ErrorHandler(err.response.data.errors)
                    })
                },

                attachFile: function (event) {
                    this.avatarLoading = true;
                    const file = event.target.files[0];
                    let formData = new FormData();
                    formData.append("file", file);
                    axios.post('{{ route('global.media.upload') }}', formData).then(response => {
                        this.avatarLoading = false;
                        const res = response.data;
                        if (parseInt(res.status) === 200) {
                            this.formData.avatar = res.data.file_path;
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
                this.initFlat(0)
            }
        })
    </script>
@endsection
