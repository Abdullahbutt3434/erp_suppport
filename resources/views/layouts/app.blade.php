<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Aug 2023 10:19:07 GMT -->
@include('layouts.head')
<body class="crm_body_bg">


@include('layouts.sidebar')

<section class="main_content dashboard_part large_header_bg">

    @include('layouts.header')


    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Analytic</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                            <div class="page_date_button d-flex align-items-center">
                                <img src="img/icon/calender_icon.svg" alt>
                                August 1, 2020 - August 31, 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
    {{--modals --}}
    @include('utils.chat-modal')

    {{--end modals--}}
    @include('layouts.scripts')
    @yield('scripts')
    <script>
        @if(Session::has('message'))
        $.toast({
            heading: 'Information',
            text: '{{  session('message') }}',
            icon: 'info',
            loader: true,
            position: 'bottom-right',
            loaderBg: '#9EC600'
        })
        @endif

        @if(Session::has('error'))
        $.toast({
            heading: 'Information',
            text: '{{  session('error') }}',
            icon: 'error',
            loader: true,
            position: 'bottom-right',
            loaderBg: '#9EC600'
        })
        @endif

        @if(Session::has('success'))
        $.toast({
            heading: 'Information',
            text: '{{  session('success') }}',
            icon: 'info',
            loader: true,
            position: 'bottom-right',
            loaderBg: '#9EC600',
            "positionClass": "toast-bottom-full-width",
        })
        @endif
    </script>
    {{Session::forget('success')}}
    {{Session::forget('error')}}
    {{Session::forget('message')}}
</section>


<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Aug 2023 10:19:07 GMT -->
</html>
