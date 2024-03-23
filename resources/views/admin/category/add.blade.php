@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content-header', ['name' => 'category','key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data" >
                        @csrf <!--  {{ csrf_field() }} -->
                        <div class="mb-3 form-group @error('name')text-danger @enderror">
                            <label class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Nhập tên danh mục">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">Chon danh mục cha</label>

                            <select class="form-control" name="parent_id">
                                <option value="0" selected>Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                              </select>
                        </div>

                        <button type="submit" class="btn btn-primary" value="submit">Submit</button>

                    </form>
                    </div>




                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
