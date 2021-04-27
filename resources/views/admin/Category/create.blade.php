@extends('layouts.dashboard.app')

@section('title','Category')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                    <div class="section-heading">
                        <h2 class="sec__title">Add Category</h2>
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
                            <form method="post" action="{{ route('admin.category.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 column-lg-full">
                                        <div class="input-box">
                                            <label class="label-text">category Title</label>
                                            <div class="form-group">
                                                <span class="la la-briefcase form-icon"></span>
                                                <input class="form-control" type="text" name="name"
                                                       placeholder="Enter category title">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="btn-box mt-4">
                                            <a href="{{ route('admin.category.index') }}" class="theme-btn border-0 btn-danger"><i class="la la-arrow-left"></i> Back</a>
                                            <button type="submit" class="theme-btn border-0"><i class="la la-plus"></i>
                                                Add Category
                                            </button>
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
