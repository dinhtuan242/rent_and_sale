
<!-- User account box start -->
<div class="user-account-box">
    <div class="header clearfix">
        <div class="edit-profile-photo">
            <img src="{{ asset('user/img/avatar/avatar-3.jpg') }}" alt="agent-1" class="img-responsive">
            <div class="change-photo-btn">
            </div>
        </div>
        <h3>{{ Auth::user()->name }}</h3>
        <p>{{ Auth::user()->email }}</p>
    </div>
    <div class="content">
        <ul>
            <li>
                <a href="{{ route('user.index', Auth::user()->id) }}" class="@if (Route::currentRoutename() == 'user.index') active @endif">
                    <i class="flaticon-social"></i>Thông tin
                </a>
            </li>
            <li>
                <a href="{{ route('user.property', Auth::user()->id) }}" class="@if (Route::currentRoutename() == 'user.property') active @endif">
                    <i class="flaticon-apartment"></i>Danh sách tài sản
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="flaticon-sign-out-option"></i>Đăng xuất
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- User account box end -->
