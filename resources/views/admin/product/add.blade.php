@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content-header', ['name' => 'product','key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data" >
                        @csrf <!--  {{ csrf_field() }} -->
                        <div class="row justify-content-between" >
                            <div class="col form-group @error('name')text-danger @enderror">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" id="productName" name="name" placeholder="Nhập tên danh mục" onkeyup="ChangeToSlug()">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="col form-group @error('name')text-danger @enderror">
                            <label class="form-label">Đường dẫn slug</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" id="slug"  name="slug"
                            placeholder="Nhập tên danh mục">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col form-group @error('name')text-danger @enderror">
                                <label class="form-label">Giá sản phẩm</label>
                                <input type="text" class="form-control @error('name')is-invalid @enderror" name="price"
                                    placeholder="Nhập tên danh mục">
                                @error('name')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col form-group @error('name')text-danger @enderror">
                                <label class="form-label">Giá sản phẩm KM</label>
                                <input type="text" class="form-control @error('name')is-invalid @enderror" name="sale_price"
                                    placeholder="Nhập tên danh mục">
                                @error('name')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="mb-3 form-group">
                            <label class="form-label">Chon danh mục</label>

                            <select class="form-control" name="category_id">
                                <option value="0" >Chọn danh mục</option>
                                @foreach ($categories as $item)
                                <option value="{{$item->id}}">{!! $item->name !!}</option>
                                @endforeach
                              </select>
                        </div>

                        <div class="mb-3 form-group @error('name')text-danger @enderror">
                            <label class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control @error('name')is-invalid @enderror" name="photo" placeholder="Nhập tên danh mục">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group @error('name')text-danger @enderror">
                            <label class="form-label">Ảnh mô tả</label>
                            <input type="file" class="form-control @error('name')is-invalid @enderror" name="photos" multiple placeholder="Nhập tên danh mục">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 form-group @error('name')text-danger @enderror">
                            <label class="form-label">Mô tả sản phẩm</label>
                            <textarea name="description" id="editor1" rows="10" cols="80">
                                This is my textarea to be replaced with CKEditor 4.
                            </textarea>
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

@section('custom-js')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>
<script language="javascript">
function ChangeToSlug()
{
    var productName, slug;

    //Lấy text từ thẻ input title
    productName = document.getElementById("productName").value;

    //Đổi chữ hoa thành chữ thường
    slug = productName.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, " - ");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>
@endsection

