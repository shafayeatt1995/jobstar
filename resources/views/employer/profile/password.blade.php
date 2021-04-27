@extends('layouts.dashboard.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                    <div class="section-heading">
                        <h2 class="sec__title">Change Password</h2>
                    </div><!-- end section-heading -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <form  method="post" action="{{ route('employer.update.password') }}">
                @csrf
                @method('put')
                <div class="col-lg-12">
                <div class="user-form-action">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Change Password</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="input-box">
                                                <label class="label-text">Current Password</label>
                                                <div class="form-group">
                                                    <span class="la la-lock form-icon"></span>
                                                    <input class="form-control" type="password" id="old_password" name="old_password" placeholder="Current password">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="input-box">
                                                <label class="label-text">New Password</label>
                                                <div class="form-group">
                                                    <span class="la la-lock form-icon"></span>
                                                    <input class="form-control" type="password" id="password" name="password" placeholder="New password">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="input-box">
                                                <label class="label-text">Repeat New Password</label>
                                                <div class="form-group">
                                                    <span class="la la-lock form-icon"></span>
                                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat new password">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <p>If you forgot your password then contact our <a href="#" class="color-text">help center</a></p>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12">
                                            <div class="btn-box">
                                                <button class="theme-btn border-0">Updated Password</button>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end billing-content -->
                    </div>
                </div><!-- end user-form-action -->
            </div><!-- end col-lg-12 -->
            </form>
        </div><!-- end row -->
    </div>
@endsection

@push('js')

@endpush
