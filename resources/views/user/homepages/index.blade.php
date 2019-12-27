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
            <h1>Featured Properties</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-1.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-1.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-3.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Modern Family Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-2.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-4.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-3.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Beautiful Single Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-3.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-3.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-4.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Sweet Family Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-4.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-4.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Park Avenue</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-5.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Big Head House</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-6.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-6.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Masons Villas</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-7.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-7.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Park Avenue</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-8.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-8.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Sweet Family Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                <!-- Property start -->
                <div class="property">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="property-tag button alt featured">Featured</div>
                        <div class="property-tag button sale">For Sale</div>
                        <div class="property-price">$150,000</div>
                        <img src="{{ asset('user/img/properties/properties-9.jpg') }}" alt="fp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="{{ asset('user/img/properties/properties-9.jpg') }}" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property content -->
                    <div class="property-content">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">Park Avenue</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Property end -->
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->
<!-- Recently properties start -->
<div class="mb-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Recently</span> Properties</h1>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners2">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('user/img/properties/properties-4.jpg') }}" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="{{ asset('user/img/properties/properties-4.jpg') }}" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                            <a href="{{ asset('user/img/properties/properties-3.jpg') }}" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Big Head House</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('user/img/properties/properties-3.jpg') }}" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="{{ asset('user/img/properties/properties-3.jpg') }}" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                            <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Masons Villas</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('user/img/properties/properties-2.jpg') }}" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ asset('user/img/properties/properties-1.jpg') }}" class="hidden"></a>
                                            <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('user/img/properties/properties-1.jpg') }}" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="{{ asset('user/img/properties/properties-1.jpg') }}" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ asset('user/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                            <a href="{{ asset('user/img/properties/properties-5.jpg') }}" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Sweet Family Home</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->

<div class="clearfix"></div>
@endsection
