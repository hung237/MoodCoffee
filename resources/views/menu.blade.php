@extends('index')
@section('title', 'Page home')
@section('main')
    <section style="margin-top: 130px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-lg-flex justify-content-between">
                    <h2 class="">Sản Phẩm</h2>
                    <div class="d-sm-flex align-items-center mt-2 justify-content-between">
                        <div class="d-flex align-items-center">
                            <form class="d-flex" role="search">
                                <input ng-model="keyword" class="form-control me-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
                                <button style="white-space: nowrap;" class="btn btn-outline-main" ng-click="search(keyword)">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div class="me-5 d-sm-flex d-none"></div>
                        <div class="mt-3 d-block d-sm-none"></div>
                        <div class="d-flex flex-row-reverse flex-sm-row align-items-center justify-content-md-end">
                            <div class="mx-1">
                                <button class="btn btn-outline-main d-flex align-items-center">Giá<i class="ms-1 fa-solid fa-priceIcon-long"></i></button>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-outline-main dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  Tìm Theo Loại
                                </a>
                              
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    {!! $htmlOption !!}
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <div class="card p-2 box-shadow">
                        <a class="text-decoration-none" href="/product_details/{{$item->id}}">
                            <img src="/assets/images/products/{{$item->image}}" class="card-img-top my-2" width="100%" height="auto">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-sub fw-bold fs-5 text-hidden-1">{{$item->name}}</h5>
                            <p class="card-text text-hidden-2">{{$item->description}}</p>
                            <div class="d-flex flex-column align-items-center">
                                <span class="fs-5 fw-bold text-sub">{{number_format($item->price,0,',','.')}} đ</span>
                                <button onclick="addToCart({{$item->id}})" class="btn btn-outline-main border-2 border-main fw-bold fs-6 w-100 mt-2">
                                    Thêm Giỏ Hàng
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    {{-- page --}}
        <div id="page-menu" class="page w-100 d-flex justify-content-center my-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($products->currentPage() > 1)
                        <li class="page-item">
                            <a href="{{$products->url(1)}}" class="page-link" aria-label="Previous">
                                First
                            </a>
                        </li>
                        <li class="page-item">
                        <a href="{{$products->url($products->currentPage()-1)}}" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                    @endif
                    @for($i=1; $i<=$products->lastPage(); $i++)
                        @if ($i<= $products->currentPage()+2 && $i>= $products->currentPage()-3)
                        <li class="page-item{{($i == $products->currentPage()) ? ' active' : ''}}">
                            <a href="{{$products->url($i)}}" class="page-link">{{$i}}</a>
                        </li>
                        @endif
                    @endfor
                    @if($products->currentPage() < $products->lastPage())
                        <li class="page-item">
                        <a href="{{$products->url($products->currentPage()+1)}}" class="page-link " aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                        <li class="page-item" ng-if="page.currentPage != page.offset">
                            <a href="{{$products->url($products->lastPage())}}" class="page-link" aria-label="Previous">
                                Last
                            </a>
                        </li>
                    @endif
                </ul>
                </nav>
        </div>
        <script>
            function addToCart(id) {
                $.ajax({
                    url: '/addtocart',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'), // Lấy CSRF token từ thẻ meta trong HTML
                        id: id
                    },
                    success: function(response) {
                        document.getElementById('qty').innerText = response;
                    },
                    error: function(error) {
                        console.log(error);
                    }
                
                });
            }
        </script>
    </section>
@endsection