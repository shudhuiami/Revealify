<header class="fixed-top _header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="d-flex d-lg-none align-items-center justify-content-between w-100">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('/images/landing-page/logo.png')}}" alt="">
                        <span>CV Builder.</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand d-none d-lg-block" href="#">
                        <img src="{{asset('/images/landing-page/logo.png')}}" alt="">
                        <span>CV Builder.</span>
                    </a>
                    <ul class="navbar-nav me-auto mb-lg-2 flex-grow-1 justify-content-center justify-content-lg-end flex-row mb-4 mt-4 mt-lg-0">
                        <button class="btn btn-orange-red rounded-pill me-3">Log in</button>
                        <button class="btn btn-orange-red rounded-pill">Sign up</button>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    window.onscroll = function () {
        console.log(1)
        const header = document.querySelector('._header');
        console.log(window.scrollY)
        if (window.scrollY >= 200 ) {
            header.classList.add("active");
            console.log(33)
        }
        else {
            header.classList.remove("active");
        }
    };
</script>
