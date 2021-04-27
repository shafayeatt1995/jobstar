@extends('layouts.dashboard.app')

@section('title','Career Level')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                    <div class="section-heading">
                        <h2 class="sec__title">Edit Career Level</h2>
                    </div><!-- end section-heading -->
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="billing-form-item">
                    <div class="billing-content">
                        <div class="contact-form-action" data-select2-id="34">
                            <form method="post" action="{{ route('admin.career.update',$career->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12 column-lg-full">
                                        <div class="input-box">
                                            <label class="label-text">Job Title</label>
                                            <div class="form-group">
                                                <span class="la la-briefcase form-icon"></span>
                                                <input class="form-control" type="text" name="name"
                                                       placeholder="Enter job title" value="{{ $career->name }}">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="btn-box mt-4">
                                            <a href="{{ route('admin.career.index') }}" class="theme-btn border-0 btn-danger"><i class="la la-arrow-left"></i> Back</a>
                                            <button type="submit" class="theme-btn border-0">Update Career Level</button>
                                        </div><!-- end btn-box -->
                                    </div>
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end billing-content -->
                </div><!-- end billing-form-item -->
            </div>
@endsection

@push('js')

@endpush
