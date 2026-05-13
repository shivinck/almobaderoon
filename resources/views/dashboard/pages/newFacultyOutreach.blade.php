@extends('layouts.dashboard')

@section('title', 'Faculties - Dashboard')

@section('content')


    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">New Faculty Outreach</h1>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Information</h5>
                        </div>
                        <div class="card-body">

                            <form data-action="{{ route('post.dashboard.outreachGuide') }}" id="faculty-form" data-ajaxify="true"
                                data-method="POST" class="js-validation" novalidate>

                                <div class="mb-4">
                                    <label class="form-label">Choose From Faculty</label>
                                    <select id="inputState" required name="faculty_id" class="form-control form-control-lg form-control-solid">
                                        <option value="" selected>Choose...</option>
                                        @foreach($faculties as $faculty)
                                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Sort Order</label>
                                    <input type="number" name="sort_order" required
                                        class="form-control form-control-lg form-control-solid">
                                </div>


                                <button type="submit" id="save-btn" class="btn form-btn  btn-lg btn-primary">Save
                                    Information</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>

@endsection
