@section('title', 'Page home')
<section style="margin-top: 80px;" class="bg-sub2">
    <div class="container">
        <div class="row align-items-center py-3">
            <div class="col-lg-6 col-sm-10 mx-auto justify-content-center">
                <h1 class="text-sub fs-1 fw-bold">Tận hưởng Tâm trạng, Trải nghiệm Niềm vui Cà phê tại <span class="text-main">Mood Coffee</span></h1>
                <p class="text-sub lh-base my-4">Tại Mood Coffee, chúng tôi tin rằng cà phê không chỉ là một loại đồ uống; đó là một biểu hiện của cá tính. Với những hạt cà phê được lựa chọn cẩn thận từ khắp nơi trên thế giới, chúng tôi tạo ra những hỗn hợp cà phê đậm đà và thú vị. Thưởng thức sự phong phú của các hương vị truyền thống và sáng tạo của chúng tôi, và để Mood Coffee đánh thức các giác quan của bạn với một thế giới cảm xúc!</p>
                <div>
                    <a href="/menu" class="text-decoration-none">
                        <button class="btn btn-outline-main border-2 border-main fw-bold fs-6">
                            Mua Ngay
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-md-block d-none">
                <div id="slider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img style="max-width: 100%;" src="./assets/images/banner1.png" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img style="max-width: 100%;" src="./assets/images/banner2.png" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img style="max-width: 100%;" src="./assets/images/banner1.png" alt="...">
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-md-flex d-none justify-content-center">
                <button class="text-main me-1 btn btn-main text-white rounded-circle" type="button" data-bs-target="#slider" data-bs-slide="prev"><i class="fa-solid fa-angle-left"></i>
                </button>
                <button class="text-main ms-1 btn btn-main text-white rounded-circle" type="button" data-bs-target="#slider" data-bs-slide="next"><i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-sub">
    <div class="container">
        <div class="mt-5 d-none d-md-block"></div>
        <div class="row">
            <div class="col-lg-3 col-5 mx-auto">
                <div class="text-white bg-sub" >
                    <div><i class="rounded bg-sub3 p-3 fa-solid fa-mug-hot fs-2"></i></div>
                    <div class="card-body">
                      <h5 class="card-title my-2">Hương Thơm Tuyệt Vời</h5>
                      <p class="card-text lh-base">Cà phê được pha bằng cách rang hạt cà phê xanh đầu tiên.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-5 mx-auto">
                <div class="text-white bg-sub" >
                    <div><i class="rounded bg-sub3 p-3 fa-solid fa-medal fs-2"></i></div>
                    <div class="card-body">
                      <h5 class="card-title my-2">Hoàn Hảo Tinh Tế</h5>
                      <p class="card-text lh-base">Cà phê được pha bằng cách rang hạt cà phê xanh đầu tiên.</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 d-lg-none my-4"></div>
            <div class="col-lg-3 col-5 mx-auto">
                <div class="text-white bg-sub" >
                    <div><i class="rounded bg-sub3 p-3 fa-solid fa-shop fs-2"></i></div>
                    <div class="card-body">
                      <h5 class="card-title my-2">không Gian Quyến Rũ</h5>
                      <p class="card-text lh-base">Đắm mình trong bầu không khí đầy mê hoặc của không gian hấp dẫn của Mood Coffee.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-5 mx-auto">
                <div class="text-white bg-sub" >
                    <div><i class="rounded bg-sub3 p-3 fa-solid fa-utensils fs-2"></i></div>
                    <div class="card-body">
                      <h5 class="card-title my-2">Món Ngon Ăn Kèm</h5>
                      <p class="card-text lh-base">Thưởng thức những món ăn nhanh thú vị của chúng tôi tại thực đơn đầy hương vị của Mood Coffee.</p>
                    </div>
                  </div>
            </div>
        </div>
        <!-- Unparalleled Coffee House Experience -->
        <div class="row my-5 py-5">
            <div class="col-lg-6">
                <img class="rounded" src="./assets/images/banner-content2.jpg" width="100%" height="auto">
            </div>
            <div class="col-lg-6 d-flex">
                <div class="card bg-sub text-white">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <h5 class="card-title fs-2">Trải Nghiệm Thú Vị Tại Mood Coffee</h5>
                      <p class="card-text lh-base fs-6">Trải nghiệm sự xuất sắc của quán cà phê tuyệt vời ngay tại trung tâm thành phố quê hương của bạn. Mood Coffee tự hào là hình ảnh thu nhỏ của nghề thủ công cà phê đặc biệt, mang đến một thiên đường cho những người đam mê cà phê. Sự chú ý tỉ mỉ của chúng tôi đến từng chi tiết trong việc tìm nguồn cung ứng những hạt cà phê tốt nhất, kỹ thuật rang chính xác và phương pháp ủ rượu khéo léo đảm bảo mang đến một hành trình đầy cảm giác với mỗi ngụm cà phê. <br><br>Khám phá bản chất của một trải nghiệm quán cà phê đáng chú ý, chỉ có tại Mood Coffee ở thành phố quê hương thân yêu của bạn.</p>
                      <div class="d-flex ">
                            <a href="/blog" class="btn btn-main fw-bold fs-6 text-white flex-sm-fill w-100">
                                Đọc Tiếp
                            </a>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <!-- Our Special Coffee -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-white fs-1 text-center">Cà Phê Đặc Biệt Của Chúng Tôi
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-10 mx-auto mt-5 box">
                <div class="card p-3">
                    <img src="/assets/images/products/{{$drink[0]->image}}" class="card-img-top my-2" width="100%" height="auto">
                    <div class="card-body">
                        <h5 class="card-title text-sub fw-bold">{{$drink[0]->name}}</h5>
                        <p class="card-text text-hidden">Đắm mình trong hương vị đặc biệt của bột cà phê xay mịn của Mood Coffee, nâng trải nghiệm pha cà phê của bạn lên một tầm cao mới.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-3 fw-bold text-sub">{{$drink[0]->price}} đ</span>
                            <a href="/product_details/{{$drink[0]->id}}">
                            <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                    Mua Ngay
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-10 mx-auto mt-5">
                <div class="card p-3">
                    <img src="/assets/images/products/{{$drink[1]->image}}" class="card-img-top my-2" width="100%" height="auto">
                    <div class="card-body">
                        <h5 class="card-title text-sub fw-bold">{{$drink[1]->name}}</h5>
                        <p class="card-text text-hidden">Trải nghiệm hương vị tinh tế của Cà phê Guatemala của Mood Coffee, có nguồn gốc từ vùng cao nguyên tươi tốt. Thưởng thức hương vị phong phú của caramel và sô cô la, nắm bắt được bản chất của di sản cà phê Guatemala.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-3 fw-bold text-sub">{{$drink[1]->price}} đ</span>
                            <a href="/product_details/{{$drink[1]->id}}">
                                <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                    Mua Ngay
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-flex mx-auto mt-5">
                <div class="card p-3">
                    <img src="/assets/images/products/{{$drink[2]->image}}" class="card-img-top my-2" width="100%" height="auto">
                    <div class="card-body">
                        <h5 class="card-title text-sub fw-bold">{{$drink[2]->name}}</h5>
                        <p class="card-text text-hidden">Đắm chìm trong hương vị đặc biệt của những hạt cà phê thượng hạng của Mood Coffee. Có nguồn gốc từ các đồn điền tốt nhất, hạt cà phê của chúng tôi mang đến một loại bia đậm đà và thơm, đảm bảo trải nghiệm cà phê thực sự thỏa mãn.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-3 fw-bold text-sub">{{$drink[2]->price}} đ</span>
                            <a href="/product_details/{{$drink[2]->id}}">
                                <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                    Mua Ngay
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-flex mx-auto mt-5 d-lg-none d-md-block d-sm-none">
                <div class="card p-3">
                    <img src="/assets/images/products/{{$drink[3]->image}}" class="card-img-top my-2" width="100%" height="auto">
                    <div class="card-body">
                        <h5 class="card-title text-sub fw-bold">{{$drink[3]->name}}</h5>
                        <p class="card-text text-hidden">Đắm chìm trong hương vị đặc biệt của những hạt cà phê thượng hạng của Mood Coffee. Có nguồn gốc từ các đồn điền tốt nhất, hạt cà phê của chúng tôi mang đến một loại bia đậm đà và thơm, đảm bảo trải nghiệm cà phê thực sự thỏa mãn.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-3 fw-bold text-sub">{{$drink[3]->price}} đ</span>
                            <a href="/product_details/{{$drink[3]->id}}">
                                <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                    Mua Ngay
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Our Order Breakfast Item -->
        <div class="row my-5 pt-5">
            <div class="col-lg-12">
                <h2 class="text-white fs-1 text-center">Sản Phầm Thức Ăn Của Chúng Tôi</h2>
            </div>
            <!-- list nav-tab -->
            <div class="row my-3">
                <nav class="col-lg-12 px-5">
                    <div class="nav nav-tabs nav-tabs-home mx-12 d-flex justify-content-center border-white" id="nav-tab" role="tablist">
                        
                        <button class="nav-link text-white mx-2" id="nav-hamburger" data-bs-toggle="tab" data-bs-target="#hamberger" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Hamburger</button>

                        <button class="nav-link active text-white mx-2" id="nav-prominent" data-bs-toggle="tab" data-bs-target="#prominent" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Bánh mì</button>

                        <button class="nav-link text-white mx-2" id="nav-sandwich" data-bs-toggle="tab" data-bs-target="#sandwich" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">sandwich</button>
                    </div>
                </nav>
            </div>

        </div>
        <!-- list content tab -->
        <div class="row tab-content pt-4" id="nav-tabContent">
            <!-- tab prominent -->
            <div class="tab-pane fade show active col-lg-12" id="prominent" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    @php $breadIndex = 1  @endphp
                    @foreach($bread as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto mt-4 
                        @if($breadIndex == 4)
                        d-none d-md-flex mx-auto mt-4 d-lg-none d-md-block d-sm-none
                        @endif">
                            <div class="card p-3">
                                <img src="/assets/images/products/{{$item->image}}" class="card-img-top my-2" width="100%" height="auto">
                                <div class="card-body">
                                    <h5 class="card-title text-sub fw-bold">{{$item->name}}</h5>
                                    <p class="card-text text-hidden">Thưởng thức hương vị đăng biệt đến từ các sản phẩm của MoodCoffee.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fs-3 fw-bold text-sub">{{$item->price}} đ</span>
                                        <a href="/product_details/{{$item->id}}">                                        <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                                Mua Ngay
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $breadIndex++  @endphp
                    @endforeach
                </div>
            </div>

            
            <!-- tab hamberger -->
            <div class="tab-pane fade col-lg-12" id="hamberger" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    @php $hamburgerIndex = 1  @endphp
                    @foreach($hamburger as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto mt-4 
                        @if($hamburgerIndex == 4)
                        d-none d-md-flex mx-auto mt-4 d-lg-none d-md-block d-sm-none
                        @endif">
                            <div class="card p-3">
                                <img src="/assets/images/products/{{$item->image}}" class="card-img-top my-2" width="100%" height="auto">
                                <div class="card-body">
                                    <h5 class="card-title text-sub fw-bold">{{$item->name}}</h5>
                                    <p class="card-text text-hidden">Thưởng thức hương vị đăng biệt đến từ các sản phẩm của MoodCoffee.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fs-3 fw-bold text-sub">{{$item->price}} đ</span>
                                        <a href="/product_details/{{$item->id}}">                                        <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                                Mua Ngay
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $hamburgerIndex++  @endphp
                    @endforeach
                </div>
            </div>

            <!-- tab sandwich -->
            <div class="tab-pane fade col-lg-12" id="sandwich" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    @php $sandwichIndex = 1  @endphp
                    @foreach($sandwich as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto mt-4 
                        @if($sandwichIndex == 4)
                        d-none d-md-flex mx-auto mt-4 d-lg-none d-md-block d-sm-none
                        @endif">
                            <div class="card p-3">
                                <img src="/assets/images/products/{{$item->image}}" class="card-img-top my-2" width="100%" height="auto">
                                <div class="card-body">
                                    <h5 class="card-title text-sub fw-bold">{{$item->name}}</h5>
                                    <p class="card-text text-hidden">Thưởng thức hương vị đăng biệt đến từ các sản phẩm của MoodCoffee.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fs-3 fw-bold text-sub">{{$item->price}} đ</span>
                                        <a href="/product_details/{{$item->id}}">                                        <button class="btn btn-outline-main border-2 border-main fw-bold fs-6 px-4">
                                                Mua Ngay
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $sandwichIndex++  @endphp
                    @endforeach
                </div>
            </div>
        </div>

        <!-- map -->
        <div class="row mt-5">
            <div class="col-sm-12 d-flex justify-content-between mt-3">
                <h3 class="fs-5 fw-lighter text-white m-0 p-0">Liên Hệ
                    <hr class="w-75">
                </h3>
                <span style="font-size: 15px;" class="text-white fw-bold col-6 text-center d-none d-md-block">Vị Trí</span>
            </div>
        </div>
        <div class="row d-md-flex align-items-lg-stretch">
            <div class="col-lg-5 col-md-6 col-12 text-white">
                <h3>Ghé thăm chúng tôi</h3>
                <div style="border-color: #bbbbbb !important;" class="d-flex align-items-center justify-content-between py-3 border-bottom border-1">
                    <input style="background-color: #FFFFFF00 !important;" type="text" class="form-control border-0 placeholder px-0" placeholder="Họ và Tên">
                    <i style="color: #f7873c;" class="fa-solid fa-plus fs-5"></i>
                </div>
                <div style="border-color: #bbbbbb !important;" class="d-flex align-items-center justify-content-between py-3 border-bottom border-1">
                    <input style="background-color: #FFFFFF00 !important;" type="email" class="form-control border-0 placeholder px-0" placeholder="Email">
                    <i style="color: #f7873c;" class="fa-solid fa-plus fs-5"></i>
                </div>
                <div style="border-color: #bbbbbb !important;" class="d-flex align-items-center justify-content-between py-3 border-bottom border-1">
                    <input style="background-color: #FFFFFF00 !important;" type="text" class="form-control border-0 placeholder px-0" placeholder="Số Điện Thoại">
                    <i style="color: #f7873c;" class="fa-solid fa-plus fs-5"></i>
                </div>
                <div style="border-color: #bbbbbb !important;" class="d-flex align-items-center justify-content-between py-3">
                    <input style="background-color: #FFFFFF00 !important;" type="text" class="form-control border-0 placeholder px-0" placeholder="Ghi Chú Của Bạn">
                    <i style="color: #f7873c;" class="fa-solid fa-plus fs-5"></i>
                </div>
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-lg-6 col-md-6 col-12 d-md-block">
                <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2591.087536838046!2d2.148651318688718!3d41.38234286090506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a3118782c88f%3A0xac00664cba72a763!2sBarcelona%20Coffeeshop!5e0!3m2!1svi!2s!4v1689571627795!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="mt-5 d-none d-md-block"></div>
    </div>
</section>