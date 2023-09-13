@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Add New User </h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="text" name="phone_number" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="text" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="text" placeholder="Mobile No">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="text" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <select class="nice_Select2 nice_Select_line wide" style="display: none;">
                                <option value="1">Select Role</option>
                                <option value="1">Role 1</option>
                                <option value="1">Role2</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="create_report_btn mt_30">
                                <a href="#" class="btn_1 radius_btn d-block text-center">Add User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
