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
                                <h1><span>Đăng nhập</span></h1>
                            </div>
                            <!-- Form start -->
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="input-text" placeholder="Địa chỉ email" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="helper-text text-danger" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group">
                                    <input type="password" name="password" class="input-text" placeholder="Mật khẩu" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="checkbox">
                                    <div class="ez-checkbox pull-left">
                                        <label>
                                            <input name="remember" type="checkbox" class="ez-hide" {{ old('remember') ? 'checked' : '' }}>
                                            Lưu đăng nhập
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button-md button-theme btn-block">Đăng nhập</button>
                                </div>
                            </form>
                            <!-- Form end -->
                        </div>
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>
<!-- Content area end -->
@endsection