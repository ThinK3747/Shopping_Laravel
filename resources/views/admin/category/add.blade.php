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
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('categories.index') }}" class="btn btn-success float-right m-3">Back</a>

                    </div>
                </div>
                <div class="row card card-default">

                    <div class="col-md-12">
                        <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data" >
                        @csrf <!--  {{ csrf_field() }} -->
                        <div class="mb-3 form-group @error('name')text-danger @enderror">
                            <label class="form-label mt-4">Tên danh mục</label>
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

<div class="card card-default" style="display: none;">
    <div class="card-header">
      <h3 class="card-title">Select2 (Default Theme)</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-6" data-select2-id="30">
          <div class="form-group" data-select2-id="29">
            <label>Minimal</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="3">Alabama</option>
              <option data-select2-id="35">Alaska</option>
              <option data-select2-id="36">California</option>
              <option data-select2-id="37">Delaware</option>
              <option data-select2-id="38">Tennessee</option>
              <option data-select2-id="39">Texas</option>
              <option data-select2-id="40">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-jial-container"><span class="select2-selection__rendered" id="select2-jial-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Disabled</label>
            <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="6">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-gtrh-container"><span class="select2-selection__rendered" id="select2-gtrh-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6" data-select2-id="46">
          <div class="form-group" data-select2-id="45">
            <label>Multiple</label>
            <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
              <option data-select2-id="47">Alabama</option>
              <option data-select2-id="48">Alaska</option>
              <option data-select2-id="49">California</option>
              <option data-select2-id="50">Delaware</option>
              <option data-select2-id="51">Tennessee</option>
              <option data-select2-id="52">Texas</option>
              <option data-select2-id="53">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 425.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
          <div class="form-group" data-select2-id="57">
            <label>Disabled Result</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="11">Alabama</option>
              <option data-select2-id="58">Alaska</option>
              <option disabled="disabled" data-select2-id="59">California (disabled)</option>
              <option data-select2-id="60">Delaware</option>
              <option data-select2-id="61">Tennessee</option>
              <option data-select2-id="62">Texas</option>
              <option data-select2-id="63">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="10" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bthq-container"><span class="select2-selection__rendered" id="select2-bthq-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <h5>Custom Color Variants</h5>
      <div class="row">
        <div class="col-12 col-sm-6" data-select2-id="67">
          <div class="form-group" data-select2-id="66">
            <label>Minimal (.select2-danger)</label>
            <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="14">Alabama</option>
              <option data-select2-id="68">Alaska</option>
              <option data-select2-id="69">California</option>
              <option data-select2-id="70">Delaware</option>
              <option data-select2-id="71">Tennessee</option>
              <option data-select2-id="72">Texas</option>
              <option data-select2-id="73">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6m47-container"><span class="select2-selection__rendered" id="select2-6m47-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Multiple (.select2-purple)</label>
            <div class="select2-purple">
              <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                <option>Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 425.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
      the plugin.
    </div>
  </div>
