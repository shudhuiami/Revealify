@extends('layout.generate-layout')
@section('content')
    <div class="vh-100 d-flex align-items-center justify-content-center download">
        <div class="container text-center">
            <div class="alert alert-success success-box">
                <img src="{{asset('/images/generate-form/excellence.png')}}" class="mb-3" alt="">
                <div class="mt-5 title">
                    Your template has been created successfully. Please download it.
                </div>

                <div class="buttons mt-5">
                    <button class="btn btn-aqua-blue me-3">Download pdf</button>
                    <button class="btn btn-aqua-blue">Save resume</button>
                </div>
            </div>
        </div>
    </div>
@endsection
