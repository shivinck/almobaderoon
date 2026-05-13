@extends('layouts.dashboard')

@section('title', 'Dashboard Home')

@section('content')
    <main class="content">
        <div class=" container-fluid p-0">

            <h1 class="h3 mb-3">Account Settings</h1>

            <div class="row">
                <div class="col-md-3 col-xl-2">

                    <div class="card">


                        <div class="list-group list-group-flush" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account"
                                role="tab" aria-selected="true">
                                Account
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"
                                role="tab" aria-selected="false" tabindex="-1">
                                Password
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account" role="tabpanel">

                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Public info</h5>
                                </div>
                                <div class="card-body">
                                    <form data-action="{{ route('update.dashboard.profile') }}" id="news-form"
                                        data-ajaxify="true" data-method="POST" class="js-validation" novalidate>
                                        <input type="hidden" value="{{ $user->avatar }}" name="avatar" id="avatar" />
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name">Your name</label>
                                                    <input type="text" class="form-control" value="{{ $user->name }}"
                                                        required name="name" placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Email Address</label>
                                                    <input type="text" class="form-control" value="{{ $user->email }}"
                                                        required name="email" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="about">Biography</label>
                                                    <textarea rows="4" class="form-control" name="about" id="about" placeholder="Tell something about yourself">{{ $user->about }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="Designation">Designation</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $user->designation }}" disabled required
                                                        placeholder="Designation">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="Designation">Role Name</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $user->role->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <img alt="Charles Hall"
                                                        src="{{ $user->avatar }}"
                                                        class="rounded-circle img-responsive mt-2" width="128"
                                                        height="128">
                                                    <div class="mt-2">
                                                        <span class="btn btn-primary" id="uploadImage"><i
                                                                class="fas fa-upload"></i> Upload</span>
                                                    </div>
                                                    <small>For best results, use an image at least 128px by 128px in .jpg
                                                        format</small>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" id="save-btn" class="btn form-btn btn-primary">Save
                                            changes</button>
                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Password</h5>

                                    <form data-action="{{ route('update.dashboard.password') }}" id="news-form"
                                        data-ajaxify="true" data-method="POST" class="js-validation" novalidate>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordCurrent">Current password</label>
                                            <input type="password" required name="current_password" class="form-control"
                                                id="inputPasswordCurrent">
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew">New password</label>
                                            <input type="password" required name="npassword" class="form-control"
                                                id="inputPasswordNew">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputPasswordNew2">Verify password</label>
                                            <input type="password" required name="npassword_confirmation"
                                                class="form-control" id="inputPasswordNew2">
                                        </div>
                                        <button type="submit" class="btn form-btn btn-primary">Save changes</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-none">
            <input type="file" name="fileInput" id="fileInput" />
        </div>

        <form data-action="{{ route('post.dashboard.uploadImage') }}" id="image-upload-form" data-ajaxify="true"
            data-method="POST" class="js-validation" novalidate>
            <input type="hidden" name="imageData" id="imageDataInput" />
            <input type="hidden" name="width" value="400" />
        </form>
    </main>
    @push('scripts')
        <script>
            document.getElementById('uploadImage').addEventListener('click', function(event) {
                document.getElementById('fileInput').click();
            });
            document.getElementById('fileInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!['image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
                        alert('Please select a valid image file (JPEG, JPG, or PNG).');
                        return;
                    }

                    const reader = new FileReader();
                    reader.onloadend = function() {
                        const base64String = reader.result.split(',')[1];
                        document.getElementById('imageDataInput').value = base64String;
                        document.getElementById('save-btn').disabled = true;
                        $("#image-upload-form").submit();
                    };

                    reader.readAsDataURL(file);
                }
            });

            function inPageMethod(response) {
                document.getElementById('avatar').value = response.message;
                document.getElementById('save-btn').disabled = false;
            }
        </script>
    @endpush
@endsection
