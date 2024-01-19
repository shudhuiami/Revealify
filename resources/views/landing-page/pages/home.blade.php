@extends('landing-page.layout.layout')
@section('content')
    <div class="home landing-page" id="home">
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
                                <div class="title">Welcome to Revealify - Unveil Your Professional Potential</div>
                                <div class="desc">Ready to showcase your skills and experience in style? Welcome to
                                    Revealify, where we empower you to create stunning resumes that captivate employers.
                                </div>
                                <div class="buttons">
                                    <a href="{{route('theme.selection')}}" class="btn btn-aqua-blue me-3">choose
                                        template</a>
                                    <button class="btn btn-aqua-blue">contact us</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="right-content text-center text-lg-end">
                                <img src="{{asset('/images/landing-page/banner.svg')}}" alt="">
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
                                        <img src="{{asset('/images/landing-page/f1.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Dazzling Templates:</div>
                                        <div class="desc">Explore our curated collection of captivating and
                                            sophisticated templates designed to make your resume unforgettable.
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="{{asset('/images/landing-page/f2.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Monthly Revelations:</div>
                                        <div class="desc">Stay ahead of the curve! We unveil new templates every month
                                            to keep your options fresh and on-trend.
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="{{asset('/images/landing-page/f3.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Intuitive Interface:</div>
                                        <div class="desc">Crafting a professional resume is a breeze with our
                                            user-friendly platform. Experience seamless design and hassle-free
                                            customization.
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="{{asset('/images/landing-page/f4.png')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title">Account Benefits:</div>
                                        <div class="desc">Elevate your experience by creating an account. Save your
                                            resumes and access them anytime, anywhere.
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
                                <div class="section-title">Why Choose Revealify?</div>
                                <div class="desc">
                                    Unleash the power of Revealify to transform your resume into a work of art! With
                                    dazzling templates, monthly revelations of new designs, an intuitive interface, and
                                    exclusive account benefits, Revealify offers a seamless and stylish resume-building
                                    experience. <br> <br>
                                    Elevate your professional presence and make a lasting impression with
                                    Revealify – where your potential gets the spotlight it deserves.
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
                    <div class="img aqua-blue">
                        <img src="{{asset('/images/landing-page/subscribe.png')}}" alt="">
                    </div>
                    <div class="row right-content">
                        <div class="col-xl-5">
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
                            <div class="template-item aqua-blue">
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
                            <div class="template-item aqua-blue">
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
                            <div class="template-item aqua-blue">
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
                    <div class="section-title">Main Features of Revealify</div>
                    <div class="desc">Join Revealify and experience these standout features that set us apart in the
                        world of resume building. Elevate your career journey with a platform designed to reveal your
                        true professional potential.
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f1.png')}}" alt="">
                                </div>
                                <div class="title">Dazzling Templates:</div>
                                <div class="desc">Choose from a curated selection of stunning and professionally
                                    designed templates that cater to various industries. Make a visual impact with
                                    styles that reveal your unique professional personality.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f2.png')}}" alt="">
                                </div>
                                <div class="title">Monthly Revelations:</div>
                                <div class="desc">Stay ahead of the competition with our commitment to constant
                                    innovation. Every month, we unveil new templates, ensuring that your resume reflects
                                    the latest trends and captures attention.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f3.png')}}" alt="">
                                </div>
                                <div class="title">Intuitive Interface:</div>
                                <div class="desc">Crafting your resume is a breeze with our user-friendly interface.
                                    Effortlessly input your details, customize layouts, and preview your changes in
                                    real-time. No design skills required – just reveal your best self effortlessly.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f4.png')}}" alt="">
                                </div>
                                <div class="title">Account Benefits:</div>
                                <div class="desc">Unlock a personalized experience by creating a Revealify account. Save
                                    multiple resumes, access them from any device, and enjoy exclusive features tailored
                                    to enhance your resume-building journey.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f5.png')}}" alt="">
                                </div>
                                <div class="title">Customization Options:</div>
                                <div class="desc">Tailor your resume to perfection with a range of customization
                                    options. Adjust colors, fonts, and layouts to match your personal brand. Revealify
                                    puts you in control of your professional narrative.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-item">
                                <div class="icon">
                                    <img src="{{asset('/images/landing-page/f6.png')}}" alt="">
                                </div>
                                <div class="title">One-Click Downloads:</div>
                                <div class="desc">Transform your masterpiece into a polished PDF with just one click.
                                    Download and share your professionally crafted resume seamlessly, ready to impress
                                    recruiters and hiring managers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--features section end--}}


        {{--testimonial section start--}}
        <section class="testimonial d-none">
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
            mounted() {
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
