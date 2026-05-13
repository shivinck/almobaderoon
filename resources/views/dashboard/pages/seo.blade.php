@extends('layouts.dashboard')

@section('title', 'SEO Pages - Dashboard')

@section('content')


    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">SEO Pages</h1>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">

                        <div class="card-body">

                            <form data-action="{{ route('post.dashboard.seo') }}" id="faculty-form" data-ajaxify="true"
                                data-method="POST" class="js-validation" novalidate>

                                @foreach($pages as $page)
                                <div class="mb-4">
                                    <label class="form-label">{{ $page->page }}</label>
                                    <textarea name="pages[{{ $page->id }}]" required
                                        class="form-control form-control-lg form-control-solid editor"
                                        rows="5">{{ $page->content }}</textarea>
                                </div>
                            @endforeach
                                <button type="submit" id="save-btn" class="btn form-btn  btn-lg btn-primary">Save
                                    Information</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>

    @push('scripts')

    @endpush
@endsection
