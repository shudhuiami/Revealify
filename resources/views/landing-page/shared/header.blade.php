<header class="fixed-top _header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="d-flex d-lg-none align-items-center justify-content-between w-100">
                    <a href="{{route('landing.page')}}" class="navbar-brand">
                        <img src="{{asset('/images/landing-page/revealify.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a href="{{route('landing.page')}}" class="navbar-brand d-none d-lg-inline-flex" href="#">
                        <img src="{{asset('/images/landing-page/revealify.png')}}" alt="">
                    </a>
                    <ul class="navbar-nav me-auto flex-grow-1 justify-content-center justify-content-lg-end flex-row mb-4 mb-lg-0 mt-4 mt-lg-0">
                        <a href="{{route('login')}}" class="btn btn-aqua-blue rounded-pill me-3">Log in</a>
                        <a href="{{route('register')}}" class="btn btn-aqua-blue rounded-pill">Sign up</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    window.onscroll = function () {
        const header = document.querySelector('._header');
        if (window.scrollY >= 200) {
            header.classList.add("active");
        } else {
            header.classList.remove("active");
        }
    };

    window.addEventListener('click', (e) => {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if(!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)){
            navbarToggler.classList.add('collapsed');
            navbarCollapse.classList.remove('show');
        }
    })

</script>
