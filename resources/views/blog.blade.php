@extends('index')
@section('title', 'Page blog')
@section('main')
    <!-- blog -->
<section style="margin-top: 120px;">
	<div class="container">
		<span class="badge bg-main fw-normal px-2 py-1">NEW & BLOG</span>
		<div class="d-flex justify-content-between align-items-center mt-2">
			<h2>Tin tức & Blog mới nhất
			</h2>
			<button class="btn btn-main text-white px-3">Viết Bài</button>
		</div>
		<div class="row pb-3">
			<div class="col-lg-4 mt-5 col-md-6 col-ms-12">
				<div class="">
					<img src="./assets/images/blog8.png" class="card-img-top my-2 rounded" width="100%" height="auto">
					<div class="card-body">
						<p style="font-size: 15px;" class="card-text text-hidden-2 text-muted">
							<span class="text-sub fw-bold">By: </span>
							Bui phi Hung
						</p>
						<h5 class="card-title text-sub fw-bold fs-5 mb-4">Questions Business Must Be Able To Answers</h5>
						<a class="text-decoration-none text-main fw-normal" href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 col-md-6 col-ms-12">
				<div class="">
					<img src="./assets/images/blog1.png" class="card-img-top my-2 rounded" width="100%" height="auto">
					<div class="card-body">
						<p style="font-size: 15px;" class="card-text text-hidden-2 text-muted">
							<span class="text-sub fw-bold">By: </span>
							Bui phi Hung
						</p>
						<h5 class="card-title text-sub fw-bold fs-5 mb-4">Questions Business Must Be Able To Answers</h5>
						<a class="text-decoration-none text-main fw-normal" href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 col-md-6 col-ms-12">
				<div class="">
					<img src="./assets/images/blog7.png" class="card-img-top my-2 rounded" width="100%" height="auto">
					<div class="card-body">
						<p style="font-size: 15px;" class="card-text text-hidden-2 text-muted">
							<span class="text-sub fw-bold">By: </span>
							Bui phi Hung
						</p>
						<h5 class="card-title text-sub fw-bold fs-5 mb-4">Questions Business Must Be Able To Answers</h5>
						<a class="text-decoration-none text-main fw-normal" href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 col-md-6 col-ms-12">
				<div class="">
					<img src="./assets/images/blog6.png" class="card-img-top my-2 rounded" width="100%" height="auto">
					<div class="card-body">
						<p style="font-size: 15px;" class="card-text text-hidden-2 text-muted">
							<span class="text-sub fw-bold">By: </span>
							Bui phi Hung
						</p>
						<h5 class="card-title text-sub fw-bold fs-5 mb-4">Questions Business Must Be Able To Answers</h5>
						<a class="text-decoration-none text-main fw-normal" href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 col-md-6 col-ms-12">
				<div class="">
					<img src="./assets/images/blog5.png" class="card-img-top my-2 rounded" width="100%" height="auto">
					<div class="card-body">
						<p style="font-size: 15px;" class="card-text text-hidden-2 text-muted">
							<span class="text-sub fw-bold">By: </span>
							Bui phi Hung
						</p>
						<h5 class="card-title text-sub fw-bold fs-5 mb-4">Questions Business Must Be Able To Answers</h5>
						<a class="text-decoration-none text-main fw-normal" href="#">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 col-md-6 col-ms-12">
				<div class="">
					<img src="./assets/images/blog3.png" class="card-img-top my-2 rounded" width="100%" height="auto">
					<div class="card-body">
						<p style="font-size: 15px;" class="card-text text-hidden-2 text-muted">
							<span class="text-sub fw-bold">By: </span>
							Bui phi Hung
						</p>
						<h5 class="card-title text-sub fw-bold fs-5 mb-4">Questions Business Must Be Able To Answers</h5>
						<a class="text-decoration-none text-main fw-normal" href="#">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="page-menu" class="page w-100 d-flex justify-content-center my-4">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
				</li>
			</ul>
			</nav>
	</div>
</section>

@endsection