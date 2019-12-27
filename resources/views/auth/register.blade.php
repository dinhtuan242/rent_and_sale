@extends('user.layouts.master')
@section('content')
    <!-- Content area start -->
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1><span>Đăng ký tài khoản</span></h1>
                        </div>
                        <!-- Form start-->
                        <form action="{{ route('register') }}" method="POST"">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="input-text" placeholder="Họ và tên" value="{{ old('name') }}" required autofocus>
                            </div>
                            @if ($errors->has('name'))
                                <span class="helper-text text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Địa chỉ email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="helper-text text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">
                                <input type="text" name="phone" class="input-text" placeholder="Số điện thoại"" value="{{ old('phone') }}" required>
                            </div>
                            @if ($errors->has('phone'))
                                <span class="helper-text text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                            
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Mật khẩu" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="helper-text text-danger" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="input-text" placeholder="Nhập lại mật khẩu" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">Đăng ký</button>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Content area end -->
@endsection