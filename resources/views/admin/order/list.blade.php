@extends('admin.index')
@section('title', 'Quản lý đơn hàng')
@section('wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Đơn Hàng', 'key' => 'Danh Sách'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Người Đặt</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Tổng Tiền</th>
                                    <th class="text-center">Trạng Thái</th>
                                    <th>Thời Gian Đặt</th>
                                    <th class="text-center">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                    <td><a>{{$order->id}}</a></td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{number_format($order->total,0,',','.')}} đ</td>
                                    <td class="text-center"><span class="badge badge-success ">{{$order->status->name}}</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{$order->date}}</div>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-danger">Hủy Đơn</button>
                                        <button class="btn btn-warning">Xử lí</button>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="col-md-12 m-auto">
                        <div class="page w-100 d-flex justify-content-center my-1">
                          <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                  @if ($orders->currentPage() > 1)
                                      <li class="page-item">
                                          <a href="{{$orders->url(1)}}" class="page-link" aria-label="Previous">
                                              First
                                          </a>
                                      </li>
                                      <li class="page-item">
                                      <a href="{{$orders->url($orders->currentPage()-1)}}" class="page-link" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                      </a>
                                      </li>
                                  @endif
                                  @for($i=1; $i<=$orders->lastPage(); $i++)
                                      @if ($i<= $orders->currentPage()+2 && $i>= $orders->currentPage()-3)
                                      <li class="page-item{{($i == $orders->currentPage()) ? ' active' : ''}}">
                                          <a href="{{$orders->url($i)}}" class="page-link">{{$i}}</a>
                                      </li>
                                      @endif
                                  @endfor
                                  @if($orders->currentPage() < $orders->lastPage())
                                      <li class="page-item">
                                      <a href="{{$orders->url($orders->currentPage()+1)}}" class="page-link " aria-label="Next">
                                          <span aria-hidden="true">&raquo;</span>
                                      </a>
                                      </li>
                                      <li class="page-item" ng-if="page.currentPage != page.offset">
                                          <a href="{{$orders->url($orders->lastPage())}}" class="page-link" aria-label="Previous">
                                              Last
                                          </a>
                                      </li>
                                  @endif
                              </ul>
                              </nav>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection