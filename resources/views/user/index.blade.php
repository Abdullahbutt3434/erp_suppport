@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Admin List </h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">search</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table lms_table_active ">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="a0d7cfd2cb949099e0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="7e09110c154a4e473e19131f1712501d1113">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="f0879f829bc4c0c9b0979d91999cde939f9d">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="ccbba3bea7f8fcf58caba1ada5a0e2afa3a1">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="2e59415c451a1e176e49434f4742004d4143">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="20574f524b14101960474d41494c0e434f4d">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#" class="question_content"> 1 </a></th>
                                    <td>Hayden</td>
                                    <td>Hayden</td>
                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                           class="__cf_email__"
                                           data-cfemail="5a2d3528316e6a631a3d373b333674393537">[email&#160;protected]</a>
                                    </td>
                                    <td><a href="#">Admin</a></td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
