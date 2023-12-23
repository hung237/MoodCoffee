<header id="header" class="bg-sub2 py-3 position-fixed top-0 start-0 end-0 d-flex align-items-center">
    <div class="container">
        <div class="row d-lg-flex align-items-center">
            <div class="col-3 d-flex align-self-start">
                <a href="#!home" class="text-decoration-none">
                    <img class="align-items-center" src="{{asset('assets/images/logo.png')}}" height="60px">
                </a>
            </div>
            <div class="col-9 d-flex flex-column-reverse flex-lg-row align-items-end align-items-lg-center justify-content-between">
                <div class="col-8 d-none d-lg-flex justify-content-lg-center justify-content-end" id="menu">
                    <nav id="nav" class="d-flex align-items-end flex-column flex-lg-row list-unstyled 
                    px-3 py-1 bg-white box-shadow rounded-pill justify-content-lg-center align-items-lg-center">
                        <a ng-if="statusUser==false" href="login.html" class="text-decoration-none d-sm-none d-flex">
                            <button class="button">Login</button>
                        </a>
                        <button ng-if="statusUser==true" class="button d-sm-none d-flex">Đăng Xuất</button>
                        <a href="/" class="text-decoration-none"><li class="fs-6 fw-bold text-sub px-3 py-2 
                        @if(Route::currentRouteName() == 'index')
                            active
                        @endif">Home</li></a>
                        <a href="/about" class="text-decoration-none"><li class="fs-6 fw-bold text-sub px-3 py-2 
                        @if(Route::currentRouteName() == 'about')
                            active
                        @endif">About-Us</li></a>
                        <a href="/menu" class="text-decoration-none"><li class="fs-6 fw-bold text-sub px-3 py-2 
                        @if(Route::currentRouteName() == 'menu')
                            active
                        @endif">Menu</li></a>
                        <a href="/contact" class="text-decoration-none"><li class="fs-6 fw-bold text-sub px-3 py-2 
                            @if(Route::currentRouteName() == 'contact')
                            active
                        @endif">ConTact</li></a>
                        <a href="/blog" class="text-decoration-none"><li class="fs-6 fw-bold text-sub px-3 py-2 
                            @if(Route::currentRouteName() == 'blog')
                            active
                        @endif">Blog</li></a>
                    </nav>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end p-0 col-lg-4">
                    <a class="nav-link text-sub fs-4 me-4 d-flex" href="/cart"><i class="fa-solid fa-cart-shopping position-relative">
                        <span id="qty" style="font-size: 11px; height: 20px; width: 20px; line-height: 20px; top: -12px; right: -12px;" class="position-absolute fw-bold bg-main rounded-circle text-center text-white">{{count((array) session('cart'))}}</span>
                    </i></a>
                    <div class="d-flex align-items-center justify-content-end">
                        @if(session('user'))
                            <a href="/profile/{{ session('user')->id }}" class="text-decoration-none d-sm-none d-md-flex align-items-center nav-link text-sub">
                                <img class="rounded-circle" src="/assets/images/users/{{ session('user')->avatar }}" alt="" width="34px" height="34px" style="object-fit: cover;">
                                <p class="ms-2 me-4 fs-6 fw-bold mb-0 me-2">{{ session('user')->name }}</p>
                            </a>
                            <a href="/logout" class="text-decoration-none d-sm-none d-md-block nav-link text-sub">
                                <i class="fa-solid fa-right-from-bracket fs-4"></i>
                            </a>
                        @else
                            <a href="/login" class="text-decoration-none d-sm-none d-md-block">
                                <button class="button d-none d-sm-flex">Đăng Nhập</button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>