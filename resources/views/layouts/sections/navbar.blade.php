<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('storage/images/icon-page.png') }}" alt="" style="width:36px;height:36px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="nav-item">
                        <a class="link-menu" aria-current="page" href="{{ route('home') }}"><i class="fa-solid fa-house fa-xl"></i></a>
                    </div>
                </div>
                <div class="nav-item mb-2 mb-lg-0" style="width: 150px">
                    <a class="link-menu" href="{{ route('contact') }}"><strong>SALUDAME :)</strong></a>
                </div>
                
                <div class="nav-item d-flex mb-2 mb-lg-0">
                    <a class="link-menu" href="{{ url('lang/es') }}" style="text-decoration: none;"><strong>ES</strong></a>
                    <p class="mx-1 my-auto text-primary"> | </p>
                    <a class="link-menu" href="{{ url('lang/en') }}" style="text-decoration: none;"><strong>EN</strong></a>
                </div>
            </div>
        </div>
    </nav>
    @yield('found')
</div>
