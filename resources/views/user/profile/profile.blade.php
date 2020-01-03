@extends('user.layouts.master')
@section('content')
<!-- Sub banner start -->
    <div class="sub-banner overview-bgi">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Thông tin cá nhân</h1>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                        <li class="active">Thông tin cá nhân</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- My profile start -->
    <div class="content-area my-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    @include('user.layouts.user-sidebar')
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <!-- My address start-->
                    <div class="my-address">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form action="index.html" method="GET">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="input-text" name="your name" placeholder="John Antony">
                            </div>
                            <div class="form-group">
                                <label>Your Title</label>
                                <input type="text" class="input-text" name="agent" placeholder="Your title">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="input-text" name="phone" placeholder="+55 4XX-634-7071">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="input-text" name="email" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="input-text" name="message" placeholder="Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc. Donec in lacus neque. Vivamus ullamcorper sed ligula vitae "></textarea>
                            </div>
                            <a href="#" class="btn button-md button-theme">Save Changes</a>
                        </form>
                    </div>
                    <!-- My address end -->
                </div>
            </div>
        </div>
    </div>
    <!-- My profile end -->
@endsection