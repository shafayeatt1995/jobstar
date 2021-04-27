@extends('layouts.dashboard.app')

@section('title','Job')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                    <div class="section-heading">
                        <h2 class="sec__title">Manage Jobs</h2>
                    </div><!-- end section-heading -->
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="billing-form-item">
                    <div class="billing-title-wrap">
                        <a href="{{ route('employer.job.create') }}" class="btn btn-success"><i class="la la-plus"></i> Add new Job Post</a>
                        <div class="title-shape margin-top-10px"></div>
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content pb-0">
                        <div class="manage-job-wrap">
                            <div class="manage-job-header mt-3 mb-5">
                                <div class="manage-job-count">
                                    <span class="font-weight-medium color-text-2 mr-1">{{ $jobs->count() }}</span>
                                    <span class="font-weight-medium">job(s) Posted</span>
                                </div>
                                <div class="manage-job-count">
                                    <span class="font-weight-medium color-text-2 mr-1">8</span>
                                    <span class="font-weight-medium">Application(s)</span>
                                </div>
                                <div class="manage-job-count">
                                    <span class="font-weight-medium color-text-2 mr-1">6</span>
                                    <span class="font-weight-medium">Active Job(s)</span>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Job Title</th>
                                        <th>Job Applicant</th>
                                        <th>Created date</th>
                                        <th>Expire date</th>
                                        <th>Status</th>
                                        <th class="text-center" style="width: 150px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $key=>$job)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$job->title}}</td>
                                            <td>0</td>
                                            <td>{{$job->created_at->diffForHumans()}}</td>
                                            <td>{{$job->deadline}}</td>
                                            <td>{{$job->status}}</td>
                                            <td>
                                                <a href="{{ route('employer.job.show',$job->id) }}" class="btn btn-success"><i class="la la-eye"></i></a>
                                                <a href="{{ route('employer.job.edit',$job->id) }}" class="btn btn-primary"><i class="la la-edit"></i></a>
                                                <button class="btn btn-danger" type="button" onclick="deletedata({{ $job->id }})">
                                                    <i class="la la-trash"></i>
                                                </button>
                                                <form id="delete-form-{{ $job->id }}" action="{{ route('employer.job.destroy',$job->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end billing-content -->
                </div><!-- end billing-form-item -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-navigation-wrap mt-4">
                    <div class="page-navigation mx-auto">
                        <a href="#" class="page-go page-prev">
                            <i class="la la-arrow-left"></i>
                        </a>
                        <ul class="page-navigation-nav">
                            <li><a href="#" class="page-go-link">1</a></li>
                            <li class="active"><a href="#" class="page-go-link">2</a></li>
                            <li><a href="#" class="page-go-link">3</a></li>
                            <li><a href="#" class="page-go-link">4</a></li>
                            <li><a href="#" class="page-go-link">5</a></li>
                        </ul>
                        <a href="#" class="page-go page-next">
                            <i class="la la-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- end page-navigation-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        function deletedata(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure to delete this!',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your Data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
