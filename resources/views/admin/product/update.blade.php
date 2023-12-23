@extends('admin.index')
@section('title', 'Sửa sản phẩm')
@section('wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Sản Phẩm', 'key' => 'Cập Nhập'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          {{-- form create --}}
            <div class="col-lg-11 pt-3 mt-3">
                <form class="row " action="/admin/product/update/{{$product->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                            <input value="{{$product->name}}" name="name" type="text" class="form-control" id="inputEmail4" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="form-label">Danh mục sản phẩm</label>
                            <select name="category_id" class="form-select form-control" aria-label="Default select example">
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="inputCity" class="form-label">Giá sản phẩm</label>
                            <input value="{{$product->price}}" name="price" type="number" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-12 d-flex mt-2">
                            <div class="col-6 mb-3">
                                <label for="inputState" class="form-label">Ảnh sản phẩm</label>
                                <input name="image" class="form-control" type="file" id="formFile" accept="image/*" onchange="showPreview(event)">
                            </div>
                            <div class="col-6">
                                <img src="/assets/images/products/{{$product->image}}" alt="" id="imagePreview" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩm</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Nhập mô tả sản phẩm">{{$product->description}}</textarea>
                        </div>
                        <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary m-auto">Cập Nhập</button>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success mt-2">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <script>
    function showPreview(event) {
        var fileInput = event.target;
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var preview = document.getElementById('imagePreview');
            preview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
</script>
@endsection