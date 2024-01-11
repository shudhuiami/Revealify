<!doctype html>
<html lang="en">
<head   >
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate</title>

    <script src="{{asset('js/vue.min.js')}}"></script>

    @vite('resources/stylesheet/style.scss')
</head>
<body>
    <div class="generate" id="generate">
        <form >
            {{--header--}}
            <header class="py-3 px-3 px-sm-5 shadow-sm fixed-top bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h2>Generate Form</h2>
                    <button type="submit" class="btn btn-orange-red">Save</button>
                </div>
            </header>

            {{--form content--}}
            <div class="form-content mx-auto py-5 px-3 px-md-0">
                <div class="mb-5 avatar">
                    <div class="img" v-if="avatar != null">
                        <img :src="avatar" alt="avatar">
                        <button type="button" class="btn btn-orange-red btn-sm remove-avatar" @click="avatar = null">
                            <img src="/images/generate-form/delete.png" alt="">
                        </button>
                    </div>
                    <label for="uploadAvatar" v-if="avatar == null">
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
                        <button type="button" class="btn btn-orange-red btn-sm" @click="addEducationFields">
                            <img src="/images/generate-form/add.png" alt="" height="20" width="20">
                        </button>
                    </div>
                    <div v-for="(each, index) in education">
                        <div class="mb-3 text-end" v-if="index != 0">
                            <button type="button" class="btn btn-orange-red btn-sm remove" @click="education.splice(index, 1)">
                                <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                            </button>
                        </div>
                        <div class="card p-4 mb-3">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" name="title" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="school">School</label>
                                        <input type="text" id="school" name="school" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 md-sm-0">
                                    <div class="form-group">
                                        <label for="start_month">Start month and year</label>
                                        <input type="text" id="start_month" name="start_month" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="end_month">End month and year</label>
                                        <input type="text" id="end_month" name="end_month" class="form-control mt-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="fw-bold">Skills</div>
                        <button type="button" class="btn btn-orange-red btn-sm" @click="addSkillFields">
                            <img src="/images/generate-form/add.png" alt="" height="20" width="20">
                        </button>
                    </div>
                    <div v-for="(each, index) in  skills">
                        <div class="mb-2 text-end" v-if="index != 0">
                            <button type="button" class="btn btn-orange-red btn-sm remove" @click="skills.splice(index, 1)">
                                <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                            </button>
                        </div>
                        <div class="card p-4 mb-3">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <input type="text" id="experience" name="experience" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="fluent">Fluent</label>
                                        <input type="text" id="fluent" name="fluent" class="form-control mt-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="fw-bold">Job Experience</div>
                        <button type="button" class="btn btn-orange-red btn-sm" @click="addJobExperienceFields">
                            <img src="/images/generate-form/add.png" alt="" height="20" width="20">
                        </button>
                    </div>
                    <div v-for="(each, index) in jobExperiences">
                        <div class="mb-2 text-end" v-if="index != 0">
                            <button type="button" class="btn btn-orange-red btn-sm remove" @click="jobExperiences.splice(index, 1)">
                                <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                            </button>
                        </div>
                        <div class="card p-4 mb-3">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" id="designation" name="designation" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" id="company" name="company" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="start_month">Start month and year</label>
                                        <input type="text" id="start_month" name="start_month" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="end_month">End month and year</label>
                                        <input type="text" id="end_month" name="end_month" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description">Short description about your role</label>
                                        <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="fw-bold">Reference</div>
                        <button type="button" class="btn btn-orange-red btn-sm" @click="addReferenceFields">
                            <img src="/images/generate-form/add.png" alt="" height="20" width="20">
                        </button>
                    </div>
                    <div v-for="(each, index) in references">
                        <div class="mb-2 text-end" v-if="index != 0">
                            <button type="button" class="btn btn-orange-red btn-sm remove"@click="references.splice(index, 1)">
                                <img src="/images/generate-form/remove.png" alt="" height="20" width="20">
                            </button>
                        </div>
                        <div class="card p-4 mb-4">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" class="form-control mt-1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control mt-1">
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
                avatar: null,
                education: [''],
                skills: [''],
                jobExperiences: [''],
                references: [''],
            },
            methods: {
              addEducationFields(){
                  if(this.education.length < 3){
                      this.education.push('');
                  }
              },
                addSkillFields(){
                  if(this.skills.length < 6){
                      this.skills.push('');
                  }
              },
                addJobExperienceFields(){
                  if(this.jobExperiences.length < 3){
                      this.jobExperiences.push('');
                  }
              },
                addReferenceFields(){
                  if(this.references.length < 3){
                      this.references.push('');
                  }
              },
                attachFile(e){
                  this.avatar = URL.createObjectURL(e.target.files[0]);
              },
            },
            mounted(){
                console.log(1)
            }
        })
    </script>
</body>
</html>
