@extends('layouts.dashboard.app')

@section('title','New Job Post')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                    <div class="section-heading">
                        <h2 class="sec__title">Post a New Job</h2>
                    </div><!-- end section-heading -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <form method="post" action="{{ route('employer.job.store') }}">
                @csrf
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Job Information</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-12 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Title</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input name="title" class="form-control" type="text"
                                                           placeholder="Enter job title">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Type</label>
                                                <div class="form-group">
                                                    <select name="jobtype_id" class="job-type-option-field select2-hidden-accessible">
                                                        @foreach($jobtypes as $jobtype)
                                                            <option
                                                                value="{{ $jobtype->id }}">{{ $jobtype->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Career Level</label>
                                                <div class="form-group">
                                                    <select name="career_id" class="job-category-option-field select2-hidden-accessible">
                                                        @foreach($careers as $career)
                                                            <option
                                                                value="{{ $career->id }}">{{ $career->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div><!-- end form-group -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">category</label>
                                                <div class="form-group">
                                                    <select name="category_id" class="category-option-field select2-hidden-accessible">
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div><!-- end form-group -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Budget</label>
                                                <div class="form-group">
                                                    <span class="la la-dollar-sign form-icon"></span>
                                                    <input name="budget" class="form-control" type="number"
                                                           placeholder="Type Your Projrct Budget">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Experience</label>
                                                <input name="experience" class="form-control" type="text"
                                                       placeholder="Enter Your Experience">
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text d-flex align-items-center ">Job Tags<span
                                                        class="text-muted ml-1">(optional)</span>
                                                    <i class="la la-question tip ml-1" data-toggle="tooltip"
                                                       data-placement="top"
                                                       data-original-title="Comma separate tags, such as required skills or technologies, for this job. Maximum of 5 keywords"></i>
                                                </label>
                                                <div class="form-group">
                                                    <select class="tag-option-field select2-hidden-accessible"
                                                            multiple="" name="tags[]">
                                                        @foreach($tags as $tag)
                                                            <option>{{ $tag->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Skill Requirements</label>
                                                <div class="form-group">
                                                    <select class="skill-option-field select2-hidden-accessible"
                                                            multiple="" name="skills[]">
                                                        @foreach($skills as $skill)
                                                            <option>{{ $skill->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">No. Of Vacancy</label>
                                                <div class="form-group">
                                                    <span class="la la-clock-o form-icon"></span>
                                                    <input class="form-control" type="text" name="vacancy"
                                                           placeholder="01, 02, 03">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Application Deadline Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="date" name="deadline">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Job Description</label>
                                                <div class="form-group mb-0">
                                                    <span class="la la-pencil form-icon"></span>
                                                    <textarea class="message-control form-control" name="description"
                                                              placeholder="Write your job description"></textarea>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                            </div><!-- end contact-form-action -->
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="btn-box mt-4">
                        <button type="submit" class="theme-btn border-0"><i class="la la-plus"></i> Submit Your Job
                        </button>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        </form>
    </div>
@endsection

@push('js')

@endpush
