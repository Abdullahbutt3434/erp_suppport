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
                    <form action="{{route('user.store')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="common_input mb_15">
                                    <input required type="text" name="name" value="{{ old('name') }}"
                                           autocomplete="false" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="common_input mb_15">
                                    <input required type="email" name="email" value="{{ old('email') }}"
                                           autocomplete="false" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="common_input mb_15">
                                    <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                           autocomplete="off" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="common_input mb_15">
                                    <input required type="text" name="password" value="{{ old('password') }}"
                                           autocomplete="false" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <select required class="nice_Select2 nice_Select_line wide" name="role" style="display: none;">
                                    <option value="1">Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"
                                                value="{{ old('role') == $role->id ? 'selected':'' }}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button class="btn_1 w-100 radius_btn d-block text-center">Add User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
