@extends('landing-page-two.layout.layout')
@section('content')
    <div class="home" id="home">
        {{--banner section start--}}
        <section class="banner">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6">
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
                                    <button class="btn btn-aqua-blue me-3">choose template</button>
                                    <button class="btn btn-aqua-blue">contact us</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
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
                        <div class="col-lg-6">
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
                        <div class="col-lg-6 mt-4 mt-lg-0">
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
                                <button class="btn btn-aqua-blue">lets build your cv</button>
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
                        <div class="col-lg-6 mb-4 mb-lg-0">
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
                        <div class="col-lg-6">
                            <div class="right-content text-center">
                                <img src="{{asset('/images/landing-page/cv.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--about section end--}}


        {{--subscribe section start--}}
        <section class="subscribe">
            <div class="container">
                <div class="content">
                    <div class="img">
                        <img src="{{asset('/images/landing-page/subscribe.png')}}"alt="">
                    </div>
                    <div class="row right-content">
                        <div class="col-xl-6">
                            <div class="section-title">Do you Need a Complete Custom CV Template?</div>
                        </div>
                        <div class="col-xl-5 text-end pe-4">
                            <button class="btn btn-aqua-blue-outline">Send a Request</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--subscribe section end--}}


        {{--cv template section start--}}
        <section class="cv-template" style="background-image: url('{{asset('/images/landing-page/ring-bg.png')}}')">
            <div class="container">
                <div class="header">
                    <div class="colors">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="section-title">Our Creative Templates</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="template-item">
                                <div class="img">
                                    <img src="{{asset('/images/landing-page/template-1.png')}}" alt="">
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-aqua-blue  rounded-pill">see template
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                    <button class="btn btn-aqua-blue-outline rounded-pill">use template
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="template-item">
                                <div class="img">
                                    <img src="{{asset('/images/landing-page/template-2.png')}}" alt="">
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-aqua-blue  rounded-pill">see template
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                    <button class="btn btn-aqua-blue-outline rounded-pill">use template
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="template-item">
                                <div class="img">
                                    <img src="{{asset('/images/landing-page/template-3.png')}}" alt="">
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-aqua-blue  rounded-pill">see template
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                    <button class="btn btn-aqua-blue-outline rounded-pill">use template
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--cv template section end--}}


        {{--features section start--}}
        <section class="feature">
            <div class="container">
                <div class="header">
                    <div class="colors">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="section-title">Our Main Features</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut
                        ut felis congue nisl hendrerit commodo.
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f1.png')}}" alt="">
                                </div>
                                <div class="title">Proven CV Templates to increase Hiring Chance</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque
                                    quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f2.png')}}" alt="">
                                </div>
                                <div class="title">Creative, Modern and Clean Templates Design</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque
                                    quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f3.png')}}" alt="">
                                </div>
                                <div class="title">Easy and Intuitive Online CV and Resume Builder</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque
                                    quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f4.png')}}" alt="">
                                </div>
                                <div class="title">Free to use. Developed by hiring professionals.</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque
                                    quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f5.png')}}" alt="">
                                </div>
                                <div class="title">Recruiter Approved Phrases with Module Notification</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque
                                    quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f6.png')}}" alt="">
                                </div>
                                <div class="title">Fast Easy CV and Resume Formatting</div>
                                <div class="desc">Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque
                                    quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--features section end--}}


        {{--testimonial section start--}}
        <section class="testimonial">
            <div class="container">
                <div class="header">
                    <div class="colors">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="section-title">Your Success, Our Inspiration</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut
                        ut felis congue nisl hendrerit commodo.
                    </div>
                </div>
                <div class="content">
                    <div class="testimonial-slider owl-carousel">
                        <div class="testimonial-item">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="img">
                                <img src="{{asset('/images/landing-page/t1.jpg')}}" alt="">
                            </div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci
                                porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.
                            </div>
                            <div class="name">Sunny Khan</div>
                            <div class="role">One of our clients</div>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="img">
                                <img src="{{asset('/images/landing-page/t1.jpg')}}" alt="">
                            </div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci
                                porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.
                            </div>
                            <div class="name">Sunny Khan</div>
                            <div class="role">One of our clients</div>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="img">
                                <img src="{{asset('/images/landing-page/t1.jpg')}}" alt="">
                            </div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci
                                porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.
                            </div>
                            <div class="name">Sunny Khan</div>
                            <div class="role">One of our clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--testimonial section end--}}
    </div>

    <script>
        new Vue({
            el: '#home',
            mounted(){
                $('.testimonial-slider').owlCarousel({

                    dots: false,
                    margin: 20,
                    autoplay: true,
                    loop: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    responsive: {
                        0: {
                            items: 1,
                        },
                        768: {
                            items: 2,
                        },
                        1200: {
                            items: 3,
                        }

                    }
                })
            }
        })
    </script>
@endsection
