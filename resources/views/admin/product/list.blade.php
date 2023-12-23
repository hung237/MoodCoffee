@extends('admin.index')
@section('title', 'Quản lý sản phẩm')
@section('wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Sản Phẩm', 'key' => 'Danh Sách'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="/admin/product/create" class="btn btn-primary float-right my-3">Thêm Sản Phẩm</a>
          </div>
          {{-- tabele --}}
          <div class="col-lg-12">
            <table class="table p-5 table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th class="text-center" scope="col">Ảnh</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <th class="align-middle " scope="row">{{$product->id}}</th>
                  <td class="align-middle text-center"><img style="object-fit: cover" width="80px" height="65px" src="/assets/images/products/{{$product->image}}" alt=""></td>
                  <td class="align-middle">{{$product->name}}</td>
                  <td class="align-middle">{{number_format($product->price,0,',','.')}} đ</td>
                  <td class="align-middle">
                    <a href="/admin/product/edit/{{$product->id}}" class="btn btn-default">Sửa</a>
                    <a href="javascript:void(0);" onclick="confirmDelete({{ $product->id }})" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{-- end table --}}
          <div class="col-md-12 m-auto">
            <div class="page w-100 d-flex justify-content-center my-1">
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
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <script>
    function confirmDelete(id) {
        if (confirm('Bạn có chắc chắn muốn xóa không?')) {
            // Nếu người dùng đồng ý, chuyển hướng đến route xóa
            window.location.href = '/admin/product/remove/' + id;
        }
    }
</script>
@endsection