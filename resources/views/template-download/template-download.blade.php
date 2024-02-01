@extends('layout.generate-layout')
@section('content')
    <div class="vh-100 d-flex align-items-center justify-content-center download" id="template-download">
        <div class="container text-center">
            <div class="alert alert-success box-content success">
                <img src="{{asset('/images/generate-form/excellence.png')}}" class="mb-3" alt="success">
                <div class="mt-5 title">
                    Your template has been created successfully. Please download it.
                </div>

                <div class="buttons mt-5">
                    <button class="btn btn-aqua-blue">Download pdf</button>
                    <button class="btn btn-aqua-blue ms-3">Save resume</button>
                </div>
            </div>
            <div class="alert alert-warning box-content warning d-none">
                <img src="{{asset('/images/generate-form/warning.png')}}" class="mb-3" alt="warning">
                <div class="mt-5 title">
                    Please sign up before download pdf or save resume.
                </div>

                <div class="buttons mt-5">
                    <a href="{{route('register')}}" class="btn btn-aqua-blue">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        new Vue({
            el: '#template-download',
            data: {

            },
            methods: {

            },
            mounted() {
            }
        })
    </script>
@endsection
