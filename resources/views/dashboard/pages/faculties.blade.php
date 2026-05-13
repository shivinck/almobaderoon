@extends('layouts.dashboard')

@section('title', 'Faculties - Dashboard')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Faculties</strong></h3>
                </div>
                @if($isWritePermission)
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('get.dashboard.newFaculty') }}" class="btn btn-primary">Add New</a>
                </div>
                @endif
            </div>

            <div class="card">
                <div class="card-header pb-0">
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Listing</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th colspan="2"> Name</th>
                                <th>Designation</th>
                                <th>Created At</th>
                                <th>Created By</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculties as $faculty)
                                <tr>
                                    <td><strong>#{{ $loop->iteration }}</strong></td>
                                    <td><img src="{{ $faculty->image }}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td><strong>{{ $faculty->name }}</strong></td>
                                    <td>{{ $faculty->designation }}</td>
                                    <td>{{ $faculty->created_at }}</td>
                                    <td>{{ $faculty->author->name }}</td>
                                    <td>
                                        @if ($faculty->status == 'published')
                                            <span class="badge bg-success">{{ $faculty->status }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ $faculty->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('get.dashboard.viewFaculty', $faculty->id ) }}">View</a>
                                                @if($isWritePermission)
                                                <a class="dropdown-item" href="{{ route('get.dashboard.viewFaculty', ['id' => $faculty->id, 'isEdit' => 'true']) }}">Edit</a>
                                                <a class="dropdown-item action-publish" data-id="{{ $faculty->id }}"
                                                    href="javascript:void();">
                                                    @if ($faculty->status == 'published')
                                                        Unpublish
                                                    @else
                                                        Publish
                                                    @endif
                                                </a>
                                                @endif
                                                @if($isAdminPermission)
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item action-delete" data-id="{{ $faculty->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    href="javascript:void();">Archive</a>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <p class="mb-0">Are you want to delete this post?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary confirm-archive-btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <form data-action="{{ route('post.dashboard.publishPost') }}" id="publish-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="postId" />
        <input type="hidden" name="type" value="faculty" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.faculties') }}" />
    </form>
    <form data-action="{{ route('post.dashboard.archivePost') }}" id="delete-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="postId" />
        <input type="hidden" name="type"value="faculty" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.faculties') }}" />
    </form>
    @push('scripts')
        <script>
            $(function() {
                $(".action-publish").click(function() {
                    var id = $(this).data('id');
                    $(".postId").val(id);
                    $("#publish-post-form").submit();
                });
                $(".action-delete").click(function() {
                    var id = $(this).data('id');
                    $(".postId").val(id);
                });
                $(".confirm-archive-btn").click(function() {
                    $("#delete-post-form").submit();
                });
            });
        </script>
    @endpush
@endsection
