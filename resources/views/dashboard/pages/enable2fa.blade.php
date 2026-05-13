@extends('layouts.dashboard')

@section('title', 'Dashboard Login')

@section('content')
<div class="container d-flex flex-column">
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2"></h1>

                </div>
                {{-- https://i.ibb.co/Y01S5dS/mode.png --}}
                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-3">

                            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">

                                <div class="" data-kt-element="apps">

                                    <h3 class="text-gray-900 fw-bold mb-3">
                                        Choose An Authentication Method
                                    </h3>

                                    <div class="text-gray-500 fw-semidbold fs-6d mb-10">
                                        Using an authenticator app like
                                        <a href="https://support.google.com/accounts/answer/1066447?hl=en"
                                            target="_blank">Google Authenticator</a>,
                                        <a href="https://www.microsoft.com/en-us/account/authenticator"
                                            target="_blank">Microsoft Authenticator</a>,
                                        <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                                        <a href="https://support.1password.com/one-time-passwords/"
                                            target="_blank">1Password</a>,
                                        scan the QR code. It will generate a 6 digit code for you to enter below.

                                        <div class="pt-4 text-center mw-150px pb-4">
                                            <img src="{!! $qrImage !!}" />
                                        </div>

                                    </div>

                                    <div
                                        class="alert alert-warning alert-dismissible border-warning border border-dashed mb-10 p-4 pt-4 ps-0 pe-0 mb-4">

                                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>

                                        <div class="d-flex flex-stack flex-grow-1 ">

                                            <div class=" fw-d">

                                                <div class="fs-6 text-gray-700 ">If you having trouble using the QR
                                                    code, select manual entry on your app, and enter your email address
                                                    and the code: <span
                                                        class="fw-bold text-gray-900 pt-2">{{ $google2faSecret }}</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <form data-action="{{ route('post.dashboard.enable2fa') }}" id="app-enable2fa-form" data-ajaxify="true" data-method="POST"
                                        class="js-validation" novalidate>
                                        <input name="google2fa_secret" type="hidden" value="{{ $google2faSecret }}" />

                                        <div class="mb-3">

                                            <input class="form-control form-control-lg form-control-solid" type="text" name="2fa_code"
                                                placeholder="Enter authentication code" required />
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
    </div>
</div>
@endsection
