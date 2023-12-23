@extends('index')
@section('title', 'Page cart')
@section('main')
<!-- cart -->
<section style="margin-top: 80px; background-color: #f1f1f1;" class="py-5">
	<div class="container position-relative">
		@if (session('user'))
			<div id="storeOrder" class="position-fixed top-0 start-0 end-0 bottom-0 d-none justify-content-center" style="background-color: rgba(0, 0, 0, 0.468); z-index: 9999;">
				<div id="storeOrderForm" style="max-width: 700px" class="m-auto mt-5 bg-white p-5 rounded position-relative">
					<button onclick="hideForm()" class="position-absolute fw-bold btn-remove text-decoration-none">X</button>
					<h2>Thông tin đặt hàng</h2>
					<hr>
					<form class="row g-3" action="{{route('order.store')}}" method="POST">
						@csrf
						<div class="col-md-6">
						<label for="inputEmail4" class="form-label">Tên</label>
						<input name="name" type="text" class="form-control" id="inputEmail4" value="{{session('user')->name}}">
						</div>
						<div class="col-md-6">
						<label for="inputPassword4" class="form-label">Số điện thoại</label>
						<input name="phone" type="text" class="form-control" id="inputPassword4" value="{{session('user')->phone}}">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Địa chỉ</label>
							<textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div class="col-12">
						<button type="submit" class="btn btn-primary">Đặt Hàng</button>
						</div>
					</form>
				</div>
			</div>
		@endif

		@if(Session::has('success_order'))
					<div class="alert alert-success">
						{{ Session::get('success_order') }}
					</div>
				@endif
		<div class="row">
			<a href="/menu" class="d-flex align-items-center text-main text-decoration-none">
				<i class="fa-solid fa-circle-left fs-5 me-2"></i>
				<span class="fs-6">quay lại mua sắm</span>
			</a>
		</div>
		<div class="row d-lg-flex align-items-lg-stretch mt-2">
			<div  class="col-lg-7">
				<h4>Giỏ hàng của bạn</h4>
				<hr>
				<div class="row">
					<div class="row fs-15 fw-bold">
						<div class="col-6">
							Chi tiết sản phẩm
						</div>
						<div class="col-2 text-center">
							Giá
						</div>
						<div style=" white-space: nowrap;" class="col-2 text-center">
							Số lượng
						</div>
						<div class="col-2 text-center">
							Tổng
						</div>
					</div>
				</div>

				<!-- list items in cart -->
				<div style="max-height: 460px; overflow-y: auto;" class="row">
					@if (count((array) session('cart')) == 0 || !session('cart'))
						<img  class="w-75 mx-auto" src="/assets/images/emptycart.png" alt="">
					@endif
					@php
						$total = 0;	
					@endphp
					@if (session('cart'))
						@foreach (session('cart') as $id => $item)
							@php
								$total += $item['price']*$item['quantity'];
							@endphp
							<div class="row bg-white d-flex align-items-center mt-3 py-3 box-shadow mx-0 position-relative">
								<a href="/removecart/{{$item['id']}}" class="position-absolute fw-bold btn-remove text-decoration-none">X</a>
								<div class="col-6 d-flex">
									<div class="w-50">
										<img src="/assets/images/products/{{$item['image']}}" width="100%" height="auto">
									</div>
									<div>
										<h5 class="fs-6 text-hidden-2">{{$item['name']}}</h5>
										<span class="text-muted fs-15 text-hidden-2">Brand: thức uống</span>
									</div>
								</div>
								<div class="col-2 text-muted fs-6 text-center">
									{{number_format($item['price'],0,',','.')}}
								</div>
								<div class="col-2 d-flex flex-column-reverse flex-lg-row align-items-center justify-content-center">
									<a href="/reducecart/{{$item['id']}}" class="border btn rounded border-sub btn-outline-none text-sub fw-bold fs-15 py-1"><i class="fa-solid fa-arrow-down"></i></a>
									<span class="mx-2 fs-6 fw-bold">{{$item['quantity']}}</span>
									<a href="/increasecart/{{$item['id']}}" class="border rounded border-sub btn-outline-none text-white bg-sub fs-14 btn fw-lighter py-1"><i class="fa-solid fa-arrow-up"></i></a>
								</div>
								<div class="col-2 text-sub3 fs-6 fw-bold text-center">
									{{number_format(($item['price'])*($item['quantity']),0,',','.')}} đ
								</div>
							</div>
						@endforeach
					@endif
					
				</div>
			</div>
			<div class="col-lg-1"></div>
			<hr class="d-ms-block d-lg-none">
			<div class="col-lg-4 bg-white box-shadow p-4 d-lg-flex flex-column py-5">
				<h4>Tổng Hóa Đơn</h4>
				<hr>
				<div class="d-flex justify-content-between py-2">
					<span class="fs-6">Tổng tiền</span>
					<span class="fs-6 fw-bold text-muted">{{number_format($total,0,',','.')}} vnđ</span>
				</div>
				<hr>
				<div class="d-flex justify-content-between py-2">
					<span class="fs-6">Vat(10%)</span>
					<span class="fs-6 fw-bold text-muted">{{number_format(($total*0.1),0,',','.')}} vnđ</span>
				</div>
				<div class="d-flex justify-content-between mt-2 py-2">
					<span class="fs-6">Phí ship</span>
					@if (count((array) session('cart')) == 0 || !session('cart'))
						<span class="fs-6 fw-bold text-muted">0 vnđ</span>
					@else
						<span class="fs-6 fw-bold text-muted">22.000 vnđ</span>
					@endif
				</div>
				<hr>
				<div class="d-flex justify-content-between">
					<span class="fs-5">Thành Tiền</span>
					@if (count((array) session('cart')) == 0 || !session('cart'))
						<span class="fs-5 fw-bold ">0</span>
					@else
						<span class="fs-5 fw-bold ">{{number_format((($total*0.1)+$total+22000),0,',','.')}}</span>
					@endif
				</div>
				<div class="w-100 text-end">
					@if (session('user'))
						<button onclick="order(true)" class="btn btn-main rounded-0 text-white btn lg py-2 px-5 mt-5 fs-6">Đặt Hàng</button>
					@else
						<button onclick="order(false)" class="btn btn-main rounded-0 text-white btn lg py-2 px-5 mt-5 fs-6">Đặt Hàng</button>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function order(status){
		if(status){
			document.getElementById('storeOrder').classList.add('d-flex');
			document.getElementById('storeOrder').classList.remove('d-none');
		}else{
			alert('Bạn cần đăng nhập để đặt hàng');
		}
	}
	function hideForm(){
		document.getElementById('storeOrder').classList.remove('d-flex');
		document.getElementById('storeOrder').classList.add('d-none');
	}
</script>

@endsection