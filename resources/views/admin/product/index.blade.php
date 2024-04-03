@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.partials.content-header', ['name' => 'product','key' => 'List'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row card">
                    <div class="col-md-12">
                        <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Add</a>

                    </div>
                    <div class="col-md-12">
                        @if ($message = Session::get('success'))

                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>

                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Giá KM</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Tuỳ chọn</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->sale_price }}</td>
                                    <td>{{ $item->category->name}}</td>
                                    <td>
                                        <img src="{{asset('storage/images')}}/{{$item->image}}" alt="" width="150px">
                                    </td>
                                    <td>{{ $item->created_at}}</td>
                                    <td>
                                        <a href="{{ route('product.edit',$item) }}" class="btn btn-default">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <p>No product</p>
                                @endforelse



                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-12 mb-2">
                        {{   $products->links() }}
                    </div>
                    <div class="col-md-12 mb-5">
                        <a href="#" class="btn btn-info float-left m-2"><i class="fa fa-trash"></i>Thùng rác</a>
                    </div>



                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
