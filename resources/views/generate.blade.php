<!doctype html>
<html lang="en">
<head   >
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate</title>

    <link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
    <script src="{{asset('js/flatpickr.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/flatpickr.monthselect.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.js"></script>
    <script src="{{asset('js/flatpickr.monthselect.js')}}"></script>

    <script src="{{asset('js/vue.min.js')}}"></script>

    @vite('resources/stylesheet/style.scss')
</head>
<body>
    <div class="generate" id="generate">
        <div class="container">
            <form @submit.prevent="generateForm">
                {{--header--}}
                <header class="py-3 px-3 px-sm-5 shadow-sm fixed-top bg-white">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2>Generate Form</h2>
                        <button type="submit" class="btn btn-aqua-blue rounded-pill rounded-pill">Generate</button>
                    </div>
                </header>

                {{--form content--}}
                <div class="form-content mx-auto py-5 px-3 px-md-0">
                    <div class="mb-5 avatar">
                        <div class="img" v-if="formData.avatar != null">
                            <img :src="formData.avatar" alt="avatar">
                            <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle-avatar" @click="avatar = null">
                                <img src="/images/generate-form/delete.png" alt="">
                            </button>
                        </div>
                        <label for="uploadAvatar" v-if="formData.avatar == null">
                            <input type="file" id="uploadAvatar" class="form-control-custom d-none" name="avatar"
                                   accept="image/*"
                                   autocomplete="new-file_path" @change="attachFile(event)">
                            <img src="{{asset('/images/generate-form/camera.png')}}" alt="">
                        </label>
                    </div>
                    <div class="card mb-5 p-4">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" id="designation" name="designation" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="primary_contact">Primary Contact</label>
                                    <input type="text" id="primary_contact" name="primary_contact" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="secondary_contact">Secondary Contact</label>
                                    <input type="text" id="secondary_contact" name="secondary_contact" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" class="form-control mt-1">
                                    <div class="error-report"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" cols="30" rows="5" class="form-control mt-1"></textarea>
                                    <div class="error-report"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="fw-bold">Education</div>
                            <button type="button" class="btn btn-aqua-blue btn-sm add" @click="addEducationFields">
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20" class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in formData.education">
                            <div class="mb-3 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle" @click="formData.education.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                                </button>
                            </div>
                            <div class="card p-4 mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" name="title" class="form-control mt-1" v-model="each.title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="school">School</label>
                                            <input type="text" id="school" name="school" class="form-control mt-1" v-model="each.school">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 md-sm-0">
                                        <div class="form-group">
                                            <label for="start_date">Start month and year</label>
                                            <input type="text" :id="'start_date_' + index" name="start_date" class="form-control mt-1" v-model="each.start_date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="end_date">End month and year</label>
                                            <input type="text" :id="'end_date_' + index"  name="end_date" class="form-control mt-1" v-model="each.end_date">
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
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20" class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in  formData.skills">
                            <div class="mb-2 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle" @click="formData.skills.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                                </button>
                            </div>
                            <div class="card p-4 mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control mt-1"  v-model="each.title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="experience">Experience</label>
                                            <input type="text" id="experience" name="experience" class="form-control mt-1" v-model="each.experience">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="fluent">Fluent</label>
                                            <input type="range" class="form-range mt-1" min="0" max="100" id="fluent" name="fluent" v-model="each.fluent">
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
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20" class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in formData.experience">
                            <div class="mb-2 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle" @click="formData.experience.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                                </button>
                            </div>
                            <div class="card p-4 mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" id="designation" name="designation" class="form-control mt-1" v-model="each.designation">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" id="company" name="company" class="form-control mt-1" v-model="each.company">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="start_date">Start month and year</label>
                                            <input type="text" :id="'start_date_' + index" name="start_date" class="form-control mt-1" v-model="each.start_date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="end_date">End month and year</label>
                                            <input type="text" :id="'end_date_' + index" name="end_date" class="form-control mt-1"  v-model="each.end_date">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Short description about your role</label>
                                            <textarea name="short_description" cols="30" rows="5" class="form-control" v-model="each.short_description"></textarea>
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
                                <img src="/images/generate-form/add.png" alt="" height="20" width="20" class="me-0 me-sm-2">
                                <span class="d-none d-sm-inline-block">Add one more row</span>
                            </button>
                        </div>
                        <div v-for="(each, index) in formData.reference">
                            <div class="mb-2 text-end" v-if="index != 0">
                                <button type="button" class="btn btn-aqua-blue btn-sm remove rounded-circle" @click="formData.reference.splice(index, 1)">
                                    <img src="/images/generate-form/remove.png" alt="" height="16" width="16">
                                </button>
                            </div>
                            <div class="card p-4 mb-4">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control mt-1" v-model="each.name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control mt-1" v-model="each.email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control mt-1" v-model="each.phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" name="company" class="form-control mt-1" v-model="each.company">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control mt-1" v-model="each.address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
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
                    address: '',
                    end_date: '',
                    short_description: '',
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
                }
            },
            methods: {
                generateForm(){
                    console.log(this.formData)
                    window.location.href = "{{route('template.download')}}"
                },
              addEducationFields(){
                  if(this.formData.education.length < 3){
                      this.formData.education.push({
                          title: '',
                          school: '',
                          start_date: '',
                          end_date: ''
                      });
                      this.initFlat(this.formData.education.length - 1)
                  }
              },
                addSkillFields(){
                  if(this.formData.skills.length < 6){
                      this.formData.skills.push({
                              title: '',
                              experience: '',
                              fluent: '',
                          });
                  }
              },
                addJobExperienceFields(){
                  if(this.formData.experience.length < 3){
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
                addReferenceFields(){
                  if(this.formData.reference.length < 3){
                      this.formData.reference.push({
                              name: '',
                              email: '',
                              phone: '',
                              company: '',
                              address: '',
                        });
                  }
              },
                attachFile(e){
                  this.avatar = URL.createObjectURL(e.target.files[0]);
              },
                initFlat(id){
                    console.log(document.getElementById(`#start_date_${id}`))
                    setTimeout(() => {
                        flatpickr(`#start_date_${id}`, {
                            plugins: [
                                new monthSelectPlugin({
                                    shorthand: true, //defaults to false
                                    dateFormat: "F Y", //defaults to "F Y"
                                    altFormat: "F Y", //defaults to "F Y"
                                    theme: "dark", // defaults to "light"
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
                                    theme: "dark", // defaults to "light"
                                    disableMobile: "true"
                                })
                            ]
                        });
                    }, 200)
                }
            },
            mounted(){
                this.initFlat(0)
            }
        })
    </script>
</body>
</html>
