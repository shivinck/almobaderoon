@extends('layouts.dashboard')

@section('title', 'Services - Dashboard')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Services</strong></h3>
                </div>
                @if($isWritePermission)
                <div class="col-auto ms-auto text-end mt-n1 ">
                    <a href="{{ route('get.dashboard.newService') }}" class="btn btn-primary">Add New</a>
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
                                <th> Name</th>
                                <th>Created At</th>
                                <th>Created By</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $item)
                                <tr>
                                    <td><strong>#{{ $loop->iteration }}</strong></td>
                                    <td><strong>{{ $item->name }}</strong></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->author->name }}</td>
                                    <td>
                                        @if ($item->status == 'published')
                                            <span class="badge badge-success-light">{{ $item->status }}</span>
                                        @else
                                            <span class="badge badge-danger-light">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('get.dashboard.viewService', $item->id ) }}">View</a>
                                                @if($isWritePermission)
                                                <a class="dropdown-item" href="{{ route('get.dashboard.viewService', ['id' => $item->id, 'isEdit' => 'true']) }}">Edit</a>
                                                <a class="dropdown-item action-publish" data-id="{{ $item->id }}"
                                                    href="javascript:void();">
                                                    @if ($item->status == 'published')
                                                        Unpublish
                                                    @else
                                                        Publish
                                                    @endif
                                                </a>
                                                @endif
                                                @if($isAdminPermission)
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item action-delete" data-id="{{ $item->id }}"
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
        <input type="hidden" name="type" value="service" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.services') }}" />
    </form>
    <form data-action="{{ route('post.dashboard.archivePost') }}" id="delete-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="postId" />
        <input type="hidden" name="type" value="service" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.services') }}" />
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
