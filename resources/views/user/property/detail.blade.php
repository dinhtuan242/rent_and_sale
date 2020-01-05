@extends('user.layouts.master')
@section('content')
    
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Chi tiết tài sản</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                    <li class="active">Chi tiết tài sản</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>{{ $property->title }}</h3>
                        <p>
                            <i class="fa fa-map-marker"></i>{{ $property->address }}
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span>{{ $property->price }} triệu đồng</span></h3>
                    </div>
                </div>
                <!-- Properties details section start -->
                <div class="sidebar-widget mb-40">
                    <!-- Properties detail slider start -->
                    <div class="properties-detail-slider simple-slider mb-40">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach (json_decode($property->image) as $key => $image)
                                        <div class="item @if ($key == 0) active @endif">
                                            <img src="{{ asset('/images/property/' . $image) }}" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators thumbs visible-lg visible-md">
                                @foreach (json_decode($property->image) as $key => $image)
                                    <li data-target="#carousel-custom" data-slide-to="{{ $key }}" class=""><img src="{{ asset('/images/property/' . $image) }}" alt="Chevrolet Impala"></li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                    <!-- Properties detail slider end -->

                    <!-- Properties description start -->
                    <div class="properties-description mb-40 ">
                        <div class="main-title-2">
                            <h1><span>Mô tả</span></h1>
                        </div>
                        <div>
                            {!! utf8_decode($property['description']) !!}
                        </div>
                    </div>
                    <!-- Properties description end -->

                    <!-- Properties amenities start -->
                    <div class="properties-amenities">
                        <div class="main-title-2">
                            <h1><span>Tiện ích</span></h1>
                        </div>
                        <div class="row">
                            <ul class="facilities-list clearfix col-md-12">
                                @foreach ($feature as $ft)
                                    <div class="col-md-4">
                                        <li>
                                            <i class="@if (in_array($ft->id, json_decode($property->feature_id))) text-success fa fa-check @else text-danger fa fa-close @endif"></i>
                                            <span>{{ $ft->name }}</span>
                                        </li>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Properties amenities end -->
                </div>
                <!-- Properties details section end -->

                <!-- Floor plans start -->
                <div class="floor-plans sidebar-widget">
                    <div class="main-title-2">
                        <h1><span>Thông tin liên hệ</span></h1>
                    </div>
                    <table>
                        <tbody><tr>
                            <td><strong>Họ tên</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>SĐT</strong></td>
                        </tr>
                        <tr>
                            <td>{{ $property->user->name }}</td>
                            <td>{{ $property->user->email }}</td>
                            <td>{{ $property->user->phone }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Floor plans end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right">

                    <!-- Social media start -->
                    <div class="social-media sidebar-widget clearfix">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Social</span> Media</h1>
                        </div>
                        <!-- Social list -->
                        <ul class="social-list">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>

                    <!-- Helping center start -->
                    <div class="sidebar-widget helping-box clearfix">
                        <div class="main-title-2">
                            <h1><span>Helping</span> Center</h1>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h4>Address</h4>
                            <span>123 Kathal St. Tampa City,</span>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Phone</h4>
                            <p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
                        </div>
                    </div>

                    <!-- Mortgage calculator start -->
                    <div class="sidebar-widget contact-1 mortgage-calculator">
                        <div class="main-title-2">
                            <h1><span>Mortgage</span> Calculator</h1>
                        </div>
                        <div class="contact-form">
                            <form id="agent_form" action="index.html" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Property Price</label>
                                            <input type="text" class="input-text" placeholder="$87.000">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Interest Rate (%)</label>
                                            <input type="text" class="input-text" placeholder="10%">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Period In Months</label>
                                            <input type="text" class="input-text" placeholder="10 Months">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Down Payment</label>
                                            <input type="text" class="input-text" placeholder="$36,300">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button class="search-button">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sidebar end -->
            </div>
        </div>

        <div class="main-title-2">
            <h1><span>Tương tụ</span></h1>
        </div>
        <div class="row">
            @foreach ($recentProperty as $key => $rp)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <!-- Property 2 start -->
                    <div class="property-2">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="featured">
                                {{ $rp->type->name }}
                            </div>
                            <div class="price-ratings">
                                <div class="price">{{ $rp->price }} Triệu đồng</div>
                            </div>
                            <img src="{{ asset('/images/property/' . json_decode($rp['image'])[1]) }}" alt="rp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="{{ route('property.detail', $rp->id) }}" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="content">
                            <!-- title -->
                            <h4 class="title">
                                <a href="{{ route('property.detail', $rp->id) }}">{{ $rp->title }}</a>
                            </h4>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="{{ route('property.detail', $rp->id) }}">
                                    <i class="fa fa-map-marker"></i>{{ $rp->address }}
                                </a>
                            </h3>
                        </div>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            {{-- <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li> --}}
                            @foreach ($feature as $ft)
                                <li>
                                    <i class="@if (in_array($ft->id, json_decode($rp->feature_id))) text-success fa fa-check @else text-danger fa fa-close @endif"></i>
                                    <span>{{ $ft->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Property 2 end -->
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Properties details page end -->
@endsection