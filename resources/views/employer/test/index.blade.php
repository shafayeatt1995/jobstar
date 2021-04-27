@extends('layouts.dashboard.app')

@section('title','Test')

@push('css')

@endpush

@section('content')

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLabel">
        <i class="fas fa-user-plus"></i> Add New
    </button>


    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                   role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-sort="ascending"
                        aria-label="Rendering engine: activate to sort column descending">ID
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Name
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending">Email
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending">Caeated At
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending">Updated At
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending">Action
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tests as $key=>$test)
                        <tr role="row" class="odd">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->email }}</td>
                            <td>{{ $test->created_at->diffForHumans() }}</td>
                            <td>{{ $test->updated_at->toFormattedDateString() }}</td>
                            <td>
                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success">
                                    <i class="la la-edit "></i>
                                </button>
                                <button class="btn btn-danger mr-5">
                                    <i class="la la-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Name</th>
                    <th rowspan="1" colspan="1">Email</th>
                    <th rowspan="1" colspan="1">Created At</th>
                    <th rowspan="1" colspan="1">Updated At</th>
                    <th rowspan="1" colspan="1">Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLabel" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add User Info</h5>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder="Type Your Name">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="Type Your email">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Type Your Password">
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-danger"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" name="submit" id="btnSave" class="btn btn-primary" onclick="store()">Add</button>
                        <button type="button" name="submit" id="btnUpdate" class="btn btn-primary " onclick="update()">Add</button>
                    </div>
                </form>
            </div>
        </div>





@endsection

@push('js')
    <script type="text/javascript">
        var mainUrl = '{{ url('employer') }}';
        var modal = $('#exampleModalLabel');
        var btnSave = $('#btnSave');
        var btnSave = $('#btnUpdate');

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN':'{{csrf_token()}}'}
        });

        function getDatas() {
            $.get (mainUrl+'/test')
                .success(function (tests) {
                    console.log(tests)
                })
        }
        getDatas()

    </script>
@endpush
