@extends('layouts.dashboard')

@section('title', 'Dashboard Login')

@section('content')
<style>
    .user {
        margin: 0 auto;
        display: block;
        margin-bottom: 20px
    }

    h3 {
        margin: 0;
        padding: 0 0 20px;
        color: #59238F;
        text-align: center
    }

    .loginBox input {
        width: 100%;
        margin-bottom: 20px
    }
    .lead {
        font-size: 14px;
        margin-bottom: 40px;
    }
</style>
<div class="container d-flex flex-column">
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">



                <div class="card loginBox">
                    <div class="card-body">
                        <div class="text-gray-500 fw-semidbold fs-6d mt-4 mb-10">



                        </div>
                        <div class="m-sm-3">
                            <img class="user" src="https://i.ibb.co/p1b4Szr/shield.png" height="100px" width="100px">
                                    <div class="text-center mt-4">
                                        <h1 class="h2">Two Factor Authentication</h1>
                                        <p class="lead">
                                            You have Two factor authentication enabled on this account.
                                            Please use your authenticator app to enter the current 6-digit
                                            code to complete the authentication process.
                                        </p>
                                    </div>

                            <form data-action="{{ route('post.dashboard.verify2fa') }}"  id="app-login-form" data-ajaxify="true" data-method="POST" class="js-validation" novalidate>


                                <div class="mb-4">
                                    <label class="form-label">Authentication Code</label>
                                    <input autofocus class="form-control form-control-lg form-control-solid" type="text" name="2fa_code"
                                                placeholder="Enter authentication code" required />
                                    <small>
                                        <a href='#'>Trouble to find the authentication code?</a>
                                    </small>
                                </div>

                                <div class="d-flex flex-center">
                                    <button type="button" onclick="location.href='{{ route('get.dashboard.logout') }}';" class="btn btn-light btn-lg me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" class="btn btn-lg btn-primary">
                                        Verify Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
