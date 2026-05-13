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
    </style>
    <main class="d-flex w-100 h-100 ">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card loginBox">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <img class="user" src="https://i.ibb.co/Myw94bQ4/user-3297.png" height="100px" width="100px">
                                    <div class="text-center mt-4">
                                        <h1 class="h2">Welcome back!</h1>
                                        <p class="lead">
                                            Sign in to your account to continue
                                        </p>
                                    </div>

                                    <form data-action="{{ route('post.dashboard.login') }}" id="app-login-form"
                                        data-ajaxify="true" data-method="POST" class="js-validation" novalidate>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg form-control-solid" type="email"
                                                value="" autofocus name="email"
                                                placeholder="Enter your email" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg form-control-solid" type="password"
                                                value="" name="password" placeholder="Enter your password"
                                                required />
                                            <small>
                                                <a href='#'>Having trouble to login?</a>
                                            </small>
                                        </div>

                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class='btn form-btn  btn-lg btn-primary'>Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
