@extends('layouts.dashboard')

@section('title', 'Faculties - Dashboard')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Events Added For Gallery</strong></h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header pb-0">
                    <div class="card-actions float-end">

                    </div>
                    <h5 class="card-title mb-0">Listing</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Title</th>
                                <th> Category</th>
                                <th>Created At</th>
                                <th>Created By</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $item)
                                <tr>
                                    <td><strong>#{{ $loop->iteration }}</strong></td>
                                    <td><strong>{{ $item->title }}</strong></td>
                                    <td><strong>{{ $item->category }}</strong></td>
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
                                        <a href="{{ route('get.dashboard.galleryMedias', $item->id) }}" class="btn btn-primary">Add Media</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

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
