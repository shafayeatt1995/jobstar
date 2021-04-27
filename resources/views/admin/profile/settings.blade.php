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
                        <h2 class="sec__title">Edit Profile</h2>
                    </div><!-- end section-heading -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-lg-12">
                    <div class="user-profile-action-wrap mb-5">
                        <div class="user-profile-action mb-4 d-flex align-items-center">
                            <div class="user-pro-img">
                                <img src="{{URL::to(Auth::user()->image)}}" id="image" alt="user-image" class="img-fluid radius-round border">
                            </div>
                            <div class="upload-btn-box">
                                <input type="file" accept="image/*" class="" name="image" onchange="readURL(this);">
                                <p>Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg &amp;
                                    .png</p>
                            </div>
                        </div><!-- end user-profile-action -->
                    </div><!-- end user-profile-action-wrap -->
                </div>
                <div class="col-lg-12">
                    <div class="edit-profile-wrap">
                        <div class="user-form-action">
                            <div class="billing-form-item">
                                <div class="billing-title-wrap">
                                    <h3 class="widget-title pb-0">Company Profile</h3>
                                    <div class="title-shape margin-top-10px"></div>
                                </div><!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Company Name</label>
                                                        <div class="form-group">
                                                            <span class="la la-building-o form-icon"></span>
                                                            <input class="form-control" type="text" name="company_name" value="{{ Auth::user()->company_name}}" placeholder="Company name">
                                                        </div>
                                                    </div><!-- end input-box -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Username</label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input class="form-control" type="text" name="username" placeholder="Username"  value="{{ Auth::user()->username}}">
                                                        </div>
                                                    </div><!-- end input-box -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">About Your Company</label>
                                                        <div class="form-group">
                                                            <textarea class="message-control form-control pt-3 pr-4 pb-3 pl-4" name="company_about" style="" >{{ Auth::user()->company_about}}</textarea>
                                                        </div>
                                                    </div><!-- end input-box -->
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                    </div><!-- end contact-form-action -->
                                </div><!-- end billing-content -->
                            </div>
                        </div><!-- end user-form-action -->
                    </div><!-- end edit-profile-wrap -->
                </div>
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Social Edit</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-0">
                                <div class="contact-form-action">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Facebook</label>
                                                    <div class="form-group">
                                                        <span class="la la-facebook form-icon"></span>
                                                        <input class="form-control" type="text" name="company_facebook" placeholder="www.facebook.com/bluetechinc" value="{{ Auth::user()->company_facebook }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Twitter</label>
                                                    <div class="form-group">
                                                        <span class="la la-twitter form-icon"></span>
                                                        <input class="form-control" type="text" name="company_twitter" placeholder="www.twitter.com/bluetechinc" value="{{ Auth::user()->company_twitter }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Instagram</label>
                                                    <div class="form-group">
                                                        <span class="la la-instagram form-icon"></span>
                                                        <input class="form-control" type="text" name="company_instagram" placeholder="www.instagram.com/bluetech_inc" value="{{ Auth::user()->company_instagram }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Linkedin</label>
                                                    <div class="form-group">
                                                        <span class="la la-linkedin form-icon"></span>
                                                        <input class="form-control" type="text" name="company_linkedin" placeholder="www.Linkedin.com/bluetechinc" value="{{ Auth::user()->company_linkedin }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Google Plus</label>
                                                    <div class="form-group">
                                                        <span class="la la-google-plus form-icon"></span>
                                                        <input class="form-control" type="text" name="company_googleplus" placeholder="www.google-plus.com/bluetechinc" value="{{ Auth::user()->company_googleplus }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Pinterest</label>
                                                    <div class="form-group">
                                                        <span class="la la-pinterest form-icon"></span>
                                                        <input class="form-control" type="text" name="company_pinterest" placeholder="www.pinterest.com/bluetechinc" value="{{ Auth::user()->company_pinterest }}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div>
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Contact Information</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Phone number</label>
                                                    <div class="form-group">
                                                        <span class="la la-phone form-icon"></span>
                                                        <input class="form-control" type="tel" name="company_phone" placeholder="+1 246-345-0695" value="{{ Auth::user()->company_phone}}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Email Address</label>
                                                    <div class="form-group">
                                                        <span class="la la-envelope form-icon"></span>
                                                        <input class="form-control" type="email" name="company_email" placeholder="bluetechinc@example.com" value="{{ Auth::user()->company_email}}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Website</label>
                                                    <div class="form-group">
                                                        <span class="la la-external-link form-icon"></span>
                                                        <input class="form-control" type="text" name="company_website" placeholder="www.bluetechinc.com" value="{{ Auth::user()->company_website}}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Complete Address</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" name="company_address" placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw" value="{{ Auth::user()->company_address}}">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end row -->
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div>
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">More Information</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-3">
                                <div class="contact-form-action">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Founded in</label>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <span class="la la-building-o form-icon"></span>
                                                            <input class="form-control" type="number" name="company_founded" placeholder="e.g 1998" value="{{ Auth::user()->company_founded }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Business Type</label>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <select class="business-tag-option-field select2-hidden-accessible" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                                                <option value="" data-select2-id="19">Select business type</option>
                                                                <option>Private Limited</option>
                                                                <option>Artitecture</option>
                                                                <option>Limited Company</option>
                                                                <option>C Corporations</option>
                                                                <option>Partnerships</option>
                                                                <option>S Corporations</option>
                                                                <option>Sole Proprietorships</option>
                                                                <option>Software Company</option>
                                                                <option>Marketing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Employees</label>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <span class="la la-users form-icon"></span>
                                                            <input class="form-control" type="number" name="company_employed" placeholder="e.g 10,200" value="{{ Auth::user()->company_employed }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div>
                <div class="col-lg-12">
                    <div class="btn-box">
                        <button class="theme-btn border-0" type="submit">Update Profile</button>
                    </div>
                </div>
            </form>
        </div><!-- end row -->


    </div><!-- end container-fluid -->

@endsection

@push('js')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
