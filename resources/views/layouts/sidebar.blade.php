<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="#"><img src="{{asset('assets/img/logo_white.png')}}" alt></a>
        <a class="small_logo" href="#"><img src="{{asset('assets/img/mini_logo.png')}}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a class="" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/dashboard.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>Dashboard </span>
                </div>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('assets/img/menu-icon/4.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>User Management </span>
                </div>
            </a>
            <ul class="mm-collapse" style="height: 5px;">
                <li><a href="{{route('user.index')}}">User</a></li>
                <li><a href="index_3.html" class="active">Role</a></li>
                <li><a href="index-2.html">Permission</a></li>
            </ul>
        </li>
    </ul>
</nav>
