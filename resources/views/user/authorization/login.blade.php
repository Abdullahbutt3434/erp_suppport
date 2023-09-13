<!DOCTYPE html>
<html lang="zxx">

@include('layouts.head')
<body class="crm_body_bg">



<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header justify-content-center theme_bg_1">
                                    <h5 class="modal-title text_white">Log in</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{route('user.attemptLogin')}}">
                                        @csrf
                                        <div class>
                                            <input type="text" class="form-control" name="email" placeholder="Enter your email">
                                        </div>
                                        <div class>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <button class="btn_1 full_width text-center">Log in</button>
                                        <p>Need an account? <a data-toggle="modal" data-target="#sing_up"
                                                               data-dismiss="modal" href="#"> Sign Up</a></p>
                                        <div class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#forgot_password"
                                               data-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.scripts')
</body>

</html>
