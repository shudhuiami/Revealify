@extends('landing-page.layout.layout')
@section('content')
    <div class="home">
        {{--banner section start--}}
        <section class="banner">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-content">
                                <div class="promo  rounded-pill">
                                    <img src="{{asset('/images/landing-page/dollar.svg')}}" alt="">
                                    <span>Discover The Easiest ways to Build Your CV!</span>
                                </div>
                                <div class="title">Online CV Builder With Creative Templates.</div>
                                <div class="desc">Our Perfect resume builder takes the hassle out of resume writing.
                                    Choose
                                    from several templates and follow easy prompts to create the perfect job-ready
                                    resume.
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-orange-red me-3">choose template</button>
                                    <button class="btn btn-orange-red">contact us</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-content">
                                <img src="{{asset('/images/landing-page/banner.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--banner section end--}}


        {{--service section start--}}
        <section class="service" style="background-image: url('{{asset('/images/landing-page/service_banner.svg')}}')">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-content">
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="{{asset('/images/landing-page/d1.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Easy Online Resume Builder</div>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Laudantium modi assumenda.
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="{{asset('/images/landing-page/d2.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Step By Step Expert Tips</div>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit skaj
                                            gjska consectetur adipisicing elit.
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="{{asset('/images/landing-page/d3.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Recruiter Approved Phrases</div>
                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Laudantium modi.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-content">
                                <div class="colors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="section-title">Why Choose Our Platform?</div>
                                <div class="desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non
                                    suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque
                                    in. <br> <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molestiae
                                    facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tempora odit
                                    laborum iure inventore possimus laboriosam qui nam. Fugit!
                                </div>
                                <button class="btn btn-orange-red">lets build your cv</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--service section end--}}


        {{--about section start--}}
        <section class="about">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-content">
                                <div class="colors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="section-title">We Deliver The Best</div>
                                <ul class="desc">
                                    <li>
                                        <img src="{{asset('images/landing-page/check.png')}}" alt="">
                                        Proven CV Templates to increase Hiring Chance
                                    </li>
                                    <li>
                                        <img src="{{asset('images/landing-page/check.png')}}" alt="">
                                        Creative and Clean Templates Design
                                    </li>
                                    <li>
                                        <img src="{{asset('images/landing-page/check.png')}}" alt="">
                                        Easy and Intuitive Online CV Builder
                                    </li>
                                    <li>
                                        <img src="{{asset('images/landing-page/check.png')}}" alt="">
                                        Free to use. Developed by hiring professionals.
                                    </li>
                                    <li>
                                        <img src="{{asset('images/landing-page/check.png')}}" alt="">
                                        Fast Easy CV and Resume Formatting
                                    </li>
                                    <li>
                                        <img src="{{asset('images/landing-page/check.png')}}" alt="">
                                        Recruiter Approved Phrases.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-content text-center">
                                <img src="{{asset('/images/landing-page/cv.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--about section end--}}
    </div>
@endsection
