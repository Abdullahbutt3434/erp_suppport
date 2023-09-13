<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/error_400.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Aug 2023 10:19:12 GMT -->
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>500 error</title>

    @include('layouts.head')

</head>
<body>
<div class="erroe_page_wrapper">
    <div class="errow_wrap">
        <div class="container text-center">
            <img src="img/bak_hovers/sad.png" alt>
            <div class="error_heading  text-center">
                <h3 class="headline font-danger theme_color_6">500</h3>
            </div>
            <div class="col-md-8 offset-md-2 text-center">
                <p>You don't have rights to access this page.</p>
            </div>
            <div class="error_btn  text-center">
                <a class=" default_btn theme_bg_6 " href="{{redirect()->back()}}">Back Home</a>
            </div>
        </div>
    </div>
</div>


@include('layouts.scripts')

</body>

</html>
