@extends('index')
@section('title', 'chi tiết sản phẩm')
@section('main')
<section style="margin-top: 120px;">
    <div class="container">
        <a class="text-decoration-none text-main" href="/menu"><i class="fa-solid fa-circle-left"></i> Back to shopping</a>
        <h3 class="mt-3 mb-5">Product Detail</h3>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-5">
                <img src="/assets/images/products/{{$product->image}}" width="100%" height="auto">
            </div>
            <div class="col-lg-5">
                <h4>{{$product->name}}
                    <hr class="w-25 hr">
                </h4>
                <span class="text-muted">Brand: Thức uống</span>
                <p class="my-3">Experience the unparalleled coffee house excellence right in the heart of your home town.</p>
                
                <div style="color: #5d5d5d;" class="d-flex align-items-center mt-3">
                    <div class="d-flex align-items-center rounded border border-2 border-sub2 px-3 py-1">
                        <span class="fw-bold p-1">Quantity: 1</span>
                    </div>
                    <div class="d-flex ms-2">
                        <button ng-click="down()" style="margin-right: 2px;" class="border btn rounded border-sub btn-outline-none text-sub fw-bold fs-6"><i class="fa-solid fa-arrow-down"></i></button>
                        <button ng-click="up()" class="border rounded border-sub btn-outline-none text-white bg-sub fw-bold fs-6 btn"><i class="fa-solid fa-arrow-up"></i></button>
                    </div>
                </div>
                <div class="d-flex align-items-center my-3">
                    <span class="text-sub">Price:</span>
                    <span class=" fs-5 ms-2"> {{number_format($product->price,0,',','.')}} đ</span>
                </div>
                <div class="d-flex my-5 justify-content-between">
                    <a href="/addtocart/{{$product->id}}" class="btn btn-main text-white px-3 me-2"><i class="fa-solid fa-cart-plus"></i> Add to cart</a>
                    <div class="d-flex align-items-center">
                        <span>Add to favourites</span>
                        <button class="btn btn-outline-none"><i class="fa-solid fa-heart text-muted fs-4"></i></button>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row my-5">
            <h3>Description</h3>
            <div class="col-12 mt-3">
                <p class="lh-base">
                    {{$product->description}}
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <h5>Customer Questions & Answers</h5>
            <div class="col-12">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="AMSwXbTr"></script>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="2"></div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection