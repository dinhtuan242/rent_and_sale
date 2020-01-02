@extends('user.layouts.master')
@section('content')
    
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Tạo tài sản mới</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                    <li class="active">Tạo tài sản</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="content-area-7 submit-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="submit-address">
                    <form method="POST" action="{{ route('property.create.post') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="main-title-2">
                            <h1><span>Thông tin liên lạc</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Tên của bạn</label>
                                    <input type="text" class="input-text" name="name" value="{{ \Auth::user()->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Địa chỉ mail</label>
                                    <input type="email" class="input-text" name="email" value="{{ \Auth::user()->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="input-text" name="phone" value="{{ \Auth::user()->phone }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span>Thông tin cơ bản</span></h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label>Tên tài sản</label>
                                <input type="text" class="input-text" name="title"" placeholder="Tên tài sản" required>
                            </div>
                            @if ($errors->has('title'))
                                <span class="text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif

                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label>Loại tài sản</label>
                                        <select class="selectpicker search-fields" name="type_id" required>
                                            @foreach ($type as $tp)
                                                <option value="{{ $tp['id'] }}">{{ $tp['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('type'))
                                <span class="text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="number" class="input-text" name="price"" placeholder="Triệu đồng" required>
                                    </div>
                                </div>
                                @if ($errors->has('price'))
                                    <span class="text-danger" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Diện tích</label>
                                        <input type="number" class="input-text" name="area"" placeholder="Mét vuông" required>
                                    </div>
                                </div>
                                @if ($errors->has('area'))
                                    <span class="text-danger" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Ảnh mô tả</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="file" id="upload_file" name="image[]" multiple required>
                                </div>
                            </div>
                            @if ($errors->has('image'))
                                <span class="text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="main-title-2">
                            <h1><span>Vị trí</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Tỉnh/Thành phố</label>
                                    <select class="selectpicker search-fields" id="province_id" name="province_id" required>
                                        @foreach ($province as $pv)
                                            <option value="{{ $pv['id'] }}">{{ $pv['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if ($errors->has('province_id'))
                                <span class="text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('province_id') }}</strong>
                                </span>
                            @endif
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Địa chỉ cụ thể</label>
                                    <input type="text" class="input-text" name="address"  placeholder="Địa chỉ cụ thể" required>
                                </div>
                                @if ($errors->has('address'))
                                    <span class="text-danger" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('addess') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Chi tiết</span></h1>
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin về tài sản</label>
                                    <textarea class="input-text" name="description" id="description" placeholder="Thông tin về tài sản" required></textarea>
                                </div>
                            </div>
                            @if ($errors->has('description'))
                                <span class="text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-12">
                            <label class="margin-t-10">Tiện ích hiện có</label>
                            <div class="row">
                                @foreach ($feature as $ft)
                                    <div class="col-lg-4 col-sm-4 col-xs-12">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="feature{{ $ft['id'] }}" value="{{ $ft['id'] }}" name="feature_id[]" type="checkbox">
                                            <label for="feature{{ $ft['id'] }}">
                                                {{ $ft['name'] }}
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('feature_id'))
                                        <span class="text-danger" data-error="wrong" data-success="right">
                                            <strong>{{ $errors->first('feature_id') }}</strong>
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn button-md button-theme">Tạo tài sản</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->
@endsection
@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace('description', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    });
    </script>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
@endsection