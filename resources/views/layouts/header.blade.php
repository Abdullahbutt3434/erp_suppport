<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="line_icon open_miniSide d-none d-lg-block">
                    <img src="{{asset("assets/img/line_img.png")}}" alt>
                </div>
                <div class="serach_field-area d-flex align-items-center">
                    <div class="search_inner">
                        <form action="#">
                            <div class="search_field">
                                <input type="text" placeholder="Search">
                            </div>
                            <button type="submit"><img src="{{asset('assets/img/icon/icon_search.svg')}}" alt></button>
                        </form>
                    </div>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a class="bell_notification_clicker" href="#"> <img src="{{asset('assets/img/icon/bell.svg')}}" alt>
                                <span>2</span>
                            </a>
                            @include('utils.notifications-modal')
                        </li>
                        <li>
                            <a class="CHATBOX_open" href="#"> <img src="{{asset('assets/img/icon/msg.svg')}}" alt> <span>2</span> </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="{{asset('assets/img/client_img.png')}}" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <p>Neurologist </p>
                                <h5>Dr. Robar Smith</h5>
                            </div>
                            <div class="profile_info_details">
                                <a href="#">My Profile </a>
                                <a href="#">Settings</a>
                                <a href="{{route('user.logout')}}">Log Out </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
