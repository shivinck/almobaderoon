@extends('layouts.dashboard')

@section('title', 'Campaigns - Dashboard')

@section('content')
<style>
    .hw-11 {
        font-size: 11.5px;
    }
    .badge-primary-light, a.badge-primary-light {

    color: #2196F3;
}
</style>
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Campaigns</strong></h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header pb-0">
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">


                        </div>
                    </div>
                    <h5 class="card-title mb-0">Listing</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>For</th>
                                <th>Service</th>
                                <th>Contact</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($campaigns as $item)
                                <tr>
                                    <td class="hw-11"><strong>#{{ $loop->iteration }}</strong></td>
                                    <td class="hw-11"><strong>{{ $item->service_for }}</strong></td>
                                    <td class="hw-11"><strong>{{ $item->service }}</strong></td>
                                    <td class="hw-11"><strong>{{ $item->contact_fname }} {{ $item->contact_lname }}</strong></td>
                                    <td class="hw-11"><strong>{{ $item->contact_phone }}</strong></td>
                                    <td class="hw-11"><strong>{{ $item->contact_email }}</strong></td>
                                    <td class="hw-11">{{ $item->created_at }}</td>
                                    <td>
                                        @if ($item->status == 'submitted' || $item->status == 'contacted')
                                            <span class="badge badge-primary-light">{{ $item->status }}</span>
                                        @elseif ($item->status == 'declined' || $item->status == 'no response')
                                            <span class="badge badge-danger-light">{{ $item->status }}</span>
                                        @elseif ($item->status == 'on hold')
                                            <span class="badge badge-warning-light">{{ $item->status }}</span>
                                        @elseif ($item->status == 'accepted')
                                            <span class="badge badge-success-light">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td class="hw-11">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu">


                                                <a class="dropdown-item action-status" data-id="{{ $item->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#editModal"
                                                    href="javascript:void();">Change Status</a>

                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item action-delete" data-id="{{ $item->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    href="javascript:void();">Archive</a>

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
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-action="{{ route('post.dashboard.compaigns') }}" id="event-form" data-ajaxify="true"
                data-method="POST" class="js-validation" novalidate>
                <input type="hidden" name="id" id="compaign_id" />
                <div class="modal-body m-3">


                                <div class="mb-4">

                                    <label class="form-label">Select new status</label>
                                    <select id="status" required name="status" class="form-control form-control-lg form-control-solid">

                                        <option value="" selected>Choose...</option>
                                        <option value="declined">Declined</option>
                                        <option value="contacted">Contacted</option>
                                        <option value="no response">No Response</option>
                                        <option value="on hold">On Hold</option>
                                        <option value="accepted">Accepted</option>


                                    </select>
                                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <form data-action="{{ route('post.dashboard.archivePost') }}" id="delete-post-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="id" class="postId" />
        <input type="hidden" name="type" value="campaign" />
        <input type="hidden" name="redirect" value="{{ route('get.dashboard.campaigns') }}" />
    </form>
    @push('scripts')
        <script>
            $(function() {
                $(".action-status").click(function() {
                    var id = $(this).data('id');
                    $("#compaign_id").val(id);
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
