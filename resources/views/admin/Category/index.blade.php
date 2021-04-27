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
                        <h2 class="sec__title">Manage Category</h2>
                    </div><!-- end section-heading -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="billing-form-item">
                    <div class="billing-title-wrap">
                        <a href="{{ route('admin.category.create') }}" class="theme-btn border-0"><i
                                class="la la-plus"></i> Add Category </a>
                        <div class="title-shape margin-top-10px"></div>
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content pb-0">
                        <div class="manage-job-wrap">
                            <div class="manage-job-header mt-3 mb-5">
                                <div class="manage-job-count">
                                    <span class="font-weight-medium color-text-2 mr-1">{{ $categories->count() }}</span>
                                    <span class="font-weight-medium">Type Job</span>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Title</th>
                                        <th>Post Count</th>
                                        <th>Create date</th>
                                        <th>Updated date</th>
                                        <th class="text-center" style="width: 135px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>0</td>
                                            <td>{{ $category->created_at->toFormattedDateString() }}</td>
                                            <td>{{ $category->updated_at->toFormattedDateString() }}</td>
                                            <td>
                                                <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-success"><i class="la la-edit" ></i></a>
                                                <button class="btn btn-danger" type="button" onclick="deletedata({{ $category->id }})">
                                                    <i class="la la-trash"></i>
                                                </button>
                                                <form id="delete-form-{{ $category->id }}" action="{{ route('admin.category.destroy',$category->id) }}" method="POST" style="display: none;">
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
