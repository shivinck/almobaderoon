@extends('layouts.dashboard')

@section('title', 'Faculties - Dashboard')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>User Roles</strong></h3>
                </div>
            </div>

            <div class="card">
                <div class="alert alert-primary alert-dismissible m" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="alert-icon">
                        <i class="far fa-fw fa-bell"></i>
                    </div>
                    <div class="alert-message">
                        For permission or permission level configuration changes, please contact engineering support.
                    </div>
                </div>

                <div class="card-header pb-0 ">

                    <h5 class="card-title mb-0">Listing</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                                @if ($item->name != 'Developer')
                                <tr>
                                    <td><strong>#{{ $loop->iteration }}</strong></td>
                                    <td><strong>{{ $item->name }}</strong></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>

                                            <span class="badge badge-success-light">Active</span>

                                    </td>
                                </tr>
                                @endif
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
        <input type="hidden" name="type" value="news" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.news') }}" />
    </form>
    <form data-action="{{ route('post.dashboard.archivePost') }}" id="delete-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="postId" />
        <input type="hidden" name="type" value="news" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.news') }}" />
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
