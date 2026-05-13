@extends('layouts.dashboard')

@section('title', 'User Management - Dashboard')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>User Management</strong></h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-primary">New User</a>
                </div>
            </div>

            <div class="card">
                <div class="alert alert-warning alert-dismissible m" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="alert-icon">
                        <i class="far fa-fw fa-bell"></i>
                    </div>
                    <div class="alert-message">
                        When creating a new user, ensure that permissions are carefully assigned to avoid content or security risks.
                    </div>
                </div>
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
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->role_id != 1001)
                                    <tr class="data-row">
                                        <td><strong>#{{ $loop->iteration }}</strong></td>
                                        <td><img src="{{ $user->avatar }}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                        <td><strong class="name">{{ $user->name }}</strong></td>
                                        <td class="designation">{{ $user->designation }}</td>
                                        <td class="email d-none">{{ $user->email }}</td>
                                        <td class="role_id d-none">{{ $user->role_id }}</td>
                                        <td class="about d-none">{{ $user->about }}</td>
                                        <td class="role">{{ $user->role->name }}</td>
                                        <td >{{ $user->created_at }}</td>

                                        <td>
                                            @if ($user->status == 'pending')
                                                <span class="badge badge-warning-light">{{ $user->status }}</span>
                                            @endif
                                            @if ($user->status == 'blocked')
                                                <span class="badge badge-danger-light">{{ $user->status }}</span>
                                            @endif
                                            @if ($user->status == 'active')
                                                <span class="badge badge-success-light">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Options
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void();">View Activities</a>
                                                    <a class="dropdown-item edit-profile" data-id="{{ $user->id }}" href="javascript:void();">Edit Info</a>
                                                    <a class="dropdown-item change-password" data-id="{{ $user->id }}" href="javascript:void();">Change Password</a>
                                                    @if ($user->status == 'pending')
                                                        <a class="dropdown-item action-user @if(auth('admin')->user()->id == $user->id) disabled @endif" data-status='active'
                                                            data-id="{{ $user->id }}" href="javascript:void();">Activate
                                                            Login</a>
                                                    @endif
                                                    @if ($user->status == 'active')
                                                        <a class="dropdown-item action-user @if(auth('admin')->user()->id == $user->id) disabled @endif" data-status='blocked'
                                                            data-id="{{ $user->id }}" href="javascript:void();">Block
                                                            User</a>
                                                    @endif
                                                    @if ($user->status == 'blocked')
                                                        <a class="dropdown-item action-user" data-status='active'
                                                            data-id="{{ $user->id }}" href="javascript:void();">Unblock
                                                            User</a>
                                                    @endif

                                                        <a class="dropdown-item action-mfa @if(!$user->google2fa_secret) disabled @endif"  data-status='active'
                                                            data-id="{{ $user->id }}" href="javascript:void();">Remove MFA</a>


                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item action-delete @if(auth('admin')->user()->id == $user->id) disabled @endif" data-id="{{ $user->id }}"
                                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                        href="javascript:void();">Archive</a>
                                                </div>
                                            </div>
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
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-action="{{ route('post.dashboard.user') }}" id="user-form" data-ajaxify="true"
                    data-method="POST" class="js-validation" novalidate>
                    <div class="modal-body m-3">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" required class="form-control form-control-solid form-control-lg" name="name" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" required class="form-control form-control-solid form-control-lg" name="designation" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">About User</label>
                            <textarea class="form-control form-control-solid form-control-lg" placeholder="" name="about" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2"
                                        data-feather="user"></i></span>
                                <input type="email" required name="email" class="form-control form-control-solid form-control-lg" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2"
                                        data-feather="lock"></i></span>
                                <input type="password" required name="password" class="form-control form-control-solid form-control-lg" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="inputState">Role</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2" data-feather="pocket"></i>
                                </span>
                                <select id="inputState" name="role_id" requird class="form-control form-control-solid form-control-lg">
                                    <option value="" selected>Choose...</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"> {{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit New Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-action="{{ route('post.dashboard.userProfile') }}" id="user-form" data-ajaxify="true"
                    data-method="POST" class="js-validation" novalidate>
                    <input type="hidden" name="id" class="userId" />
                    <div class="modal-body m-3">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" id="editName" required class="form-control form-control-solid form-control-lg" name="name" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" id="editDesignation" required class="form-control form-control-solid form-control-lg" name="designation" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">About User</label>
                            <textarea class="form-control" id="editAbout" placeholder="" name="about" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2"
                                        data-feather="user"></i></span>
                                <input type="email" id="editEmail" required name="email" class="form-control" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label" for="editRole_id">Role</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2" data-feather="pocket"></i>
                                </span>
                                <select id="editRole_id" name="role_id" requird class="form-control">
                                    <option value="" selected>Choose...</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"> {{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-action="{{ route('post.dashboard.userPassword') }}" id="user-form" data-ajaxify="true"
                    data-method="POST" class="js-validation" novalidate>
                    <input type="hidden" name="id" class="userId" />
                    <div class="modal-body m-3">
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2"
                                        data-feather="lock"></i></span>
                                <input type="password" required name="password" class="form-control" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text"><i class="align-middle me-2"
                                        data-feather="lock"></i></span>
                                <input type="password" required name="password_confirmation" class="form-control" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <p class="mb-0">Are you want to delete this user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary confirm-archive-btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mfaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <p class="mb-0">Are you want to remove MFA from this user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary confirm-mfa-btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <form data-action="{{ route('update.dashboard.userStatus') }}" id="publish-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="userId" />
        <input type="hidden" name="status" class="status" />
    </form>
    <form data-action="{{ route('post.dashboard.archivePost') }}" id="delete-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="userId" />
        <input type="hidden" name="type" value="user" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.userManagement') }}" />
    </form>
    <form data-action="{{ route('post.dashboard.removeMFA') }}" id="mfa-user-form" data-ajaxify="true" data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="userId" />
    </form>
    @push('scripts')
        <script>
            $(function() {
                $(".action-user").click(function() {
                    var id = $(this).data('id');
                    var status = $(this).data('status');
                    $(".userId").val(id);
                    $(".status").val(status);
                    $("#publish-post-form").submit();
                });
                $(".action-delete").click(function() {
                    var id = $(this).data('id');
                    $(".userId").val(id);
                });
                $(".confirm-archive-btn").click(function() {
                    $("#delete-post-form").submit();
                });

                $(".change-password").click(function() {
                    var id = $(this).data('id');
                    $(".userId").val(id);
                    $("#passwordModal").modal('show');
                });

                $(".edit-profile").click(function() {
                    var id = $(this).data('id');
                    $(".userId").val(id);
                    $data_row = $(this).parents(".data-row");
                    $("#editName").val($data_row.find(".name").html());
                    $("#editEmail").val($data_row.find(".email").html());
                    $("#editDesignation").val($data_row.find(".designation").html());
                    $("#editRole_id").val($data_row.find(".role_id").html());
                    $("#editAbout").html($data_row.find(".about").html());
                    $("#editModal").modal('show');
                });

                $(".action-mfa").click(function() {
                    var id = $(this).data('id');
                    $(".userId").val(id);
                    $("#mfaModal").modal('show');
                });

                $(".confirm-mfa-btn").click(function() {
                    $("#mfa-user-form").submit();
                });
            });
        </script>
    @endpush
@endsection
