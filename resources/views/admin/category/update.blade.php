@extends('admin.index')
@section('title', 'Sửa Danh mục')
@section('wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Danh Mục', 'key' => 'Sửa'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          {{-- form create --}}
          <div class="col-lg-5 pt-3 mt-3 ms-5">
            <form action="/admin/category/update/{{$category->id}}" method="get">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Tên danh mục</label>
                  <input name="name" type="text" class="form-control" placeholder="Nhập tên danh mục" value="{{$category->name}}">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Chọn danh mục cha</label>
                    <select name="parent_id" class="form-select form-control" aria-label="Default select example">
                        <option value="0" selected>Danh mục gốc</option>
                        {!! $htmlOption !!}
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection