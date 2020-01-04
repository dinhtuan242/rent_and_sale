@extends('user.layouts.master')
@section('content')
    <div class="sub-banner overview-bgi">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Tài sản của tôi</h1>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                        <li class="active">Danh sách tài sản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-area-7 my-properties">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    @include('user.layouts.user-sidebar')
                </div>
    
                 <div class="col-lg-8 col-md-8 col-sm-12">
                     <div class="main-title-2">
                         <h1><span>Danh sách tài sản</span></h1>
                     </div>
                    <!-- table start -->
                    <table class="manage-table responsive-table">
                        <tbody>
                        @foreach ($listProperty as $pp)
                            <tr>
                                <td class="title-container">
                                    <img src="{{ asset('/images/property/' . json_decode($pp['image'])[1]) }}" alt="my-properties-1" class="img-responsive hidden-xs">
                                    <div class="title">
                                        <h4><a href="#">{{ $pp['title'] }}</a></h4>
                                        <span><i class="fa fa-map-marker"></i> {{ $pp['address'] }}</span>
                                        <span class="table-property-price">{{ $pp['area'] }} m2 - {{ $pp['price'] }} triệu đồng</span>
                                    </div>
                                </td>
                                <td class="expire-date hidden-xs">{{ date_format($pp['created_at'], 'm/Y') }}</td>
                                <td class="action">
                                    <a href="{{ route('user.editProperty', ['id' => Auth::user()->id, 'propertyId' => $pp['id']]) }}"><i class="fa fa-pencil"></i> Sửa</a>
                                    <a href="{{ route('user.delteProperty', ['id' => Auth::user()->id, 'propertyId' => $pp['id']]) }}" class="delete" onclick="event.preventDefault();
                                    document.getElementById('remove-property-{{ $pp['id'] }}').submit();"><i class="fa fa-remove"></i> Xóa</a>
                                    <form id="remove-property-{{ $pp['id'] }}" action="{{ route('user.delteProperty', ['id' => Auth::user()->id, 'propertyId' => $pp['id']]) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- table end -->
                </div>
            </div>
        </div>
    </div>
@endsection