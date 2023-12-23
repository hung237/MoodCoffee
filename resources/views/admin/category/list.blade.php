@extends('admin.index')
@section('title', 'Danh mục sản phẩm')
@section('wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Danh Mục', 'key' => 'Danh Sách'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="/admin/category/create" class="btn btn-primary float-right my-3">Thêm Danh Mục</a>
          </div>
          {{-- tabele --}}
          <div class="col-lg-12">
            <table class="table p-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên danh mục</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categorys as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->name}}</td>
                  <td>
                    <a href="/admin/category/edit/{{$category->id}}" class="btn btn-default">Sửa</a>
                    <a href="javascript:void(0);" onclick="confirmDelete({{ $category->id }})" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{-- end table --}}
          <div class="col-md-12 m-auto mt-3">
            <div class="page w-100 d-flex justify-content-center my-4">
              <nav aria-label="Page navigation example">
                  <ul class="pagination">
                      @if ($categorys->currentPage() > 1)
                          <li class="page-item">
                              <a href="{{$categorys->url(1)}}" class="page-link" aria-label="Previous">
                                  First
                              </a>
                          </li>
                          <li class="page-item">
                          <a href="{{$categorys->url($categorys->currentPage()-1)}}" class="page-link" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                          </a>
                          </li>
                      @endif
                      @for($i=1; $i<=$categorys->lastPage(); $i++)
                          @if ($i<= $categorys->currentPage()+2 && $i>= $categorys->currentPage()-3)
                          <li class="page-item{{($i == $categorys->currentPage()) ? ' active' : ''}}">
                              <a href="{{$categorys->url($i)}}" class="page-link">{{$i}}</a>
                          </li>
                          @endif
                      @endfor
                      @if($categorys->currentPage() < $categorys->lastPage())
                          <li class="page-item">
                          <a href="{{$categorys->url($categorys->currentPage()+1)}}" class="page-link " aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                          </a>
                          </li>
                          <li class="page-item" ng-if="page.currentPage != page.offset">
                              <a href="{{$categorys->url($categorys->lastPage())}}" class="page-link" aria-label="Previous">
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
            window.location.href = '/admin/category/remove/' + id;
        }
    }
</script>
@endsection