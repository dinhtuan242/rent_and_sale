@extends('user.layouts.master')
@section('content')
<!-- Banner start -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height: 500px;" role="listbox">
            <div class="item banner-max-height active">
                <img src="{{ asset('user/img/banner/banner-slider-1.jpg') }}" alt="banner-slider-1">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Tìm </span> ngôi nhà của bạn</h1>
                        <p data-animation="animated fadeInUp delay-1s">Hãy để chúng tôi giúp bạn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Search area start -->
<div class="search-area">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form method="GET">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search area start -->

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Danh sách tài sản hiện có</h1>
        </div>
        <div class="row">
            @foreach ($property as $pp) 
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                    <!-- Property start -->
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">{{ $pp->type->name }}</div>
                            <div class="property-price">{{ $pp->price }} Triệu đồng</div>
                            <img src="{{ asset('/images/property/' . json_decode($pp['image'])[1]) }}" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="{{ route('property.detail', $pp->id) }}" class="overlay-link">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="{{ route('property.detail', $pp->id) }}">{{ $pp->title }}</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="{{ route('property.detail', $pp->id) }}">
                                    <i class="fa fa-map-marker"></i>{{ $pp->address }}
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                @foreach ($feature as $ft)
                                    <li>
                                        <i class="@if (in_array($ft->id, json_decode($pp->feature_id))) text-success fa fa-check @else text-danger fa fa-close @endif"></i>
                                        <span>{{ $ft->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">
                                    <a href="#"><i class="fa fa-user"></i>{{ $pp->user->name }}</a>
                                </span>
                                <span class="right">
                                    <i class="fa fa-calendar"></i>{{ date_format($pp->created_at, 'd-m-Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Property end -->
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured properties end -->
<div class="clearfix"></div>
@endsection
