@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 pt-4">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>User List </h4>
                            <div class="d-flex">
                                <a href="{{route('user.create')}}" class="btn_1">Add User</a>
                            </div>
{{--                            <div class="box_right d-flex lms_block">--}}
{{--                                <div class="serach_field_2">--}}
{{--                                    <div class="search_inner">--}}
{{--                                        <form Active="#">--}}
{{--                                            <div class="search_field">--}}
{{--                                                <input type="text" placeholder="Search content here...">--}}
{{--                                            </div>--}}
{{--                                            <button type="submit"><i class="ti-search"></i></button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="add_button ms-2">--}}
{{--                                    <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">search</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table lms_table_active ">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->roles[0]->name}}</td>
                                        <td><a href="#" class="status_btn  {{$user->status === \App\Domain\User\Enum\UserStatus::INACTIVE->value}}">{{$user->status}}</a></td>
                                        <td>
                                            <div class="action_btns d-flex">
                                                <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
