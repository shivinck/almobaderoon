<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="developers@commercedept.in">
    <meta name="robots" content="noindex, nofollow">
    <meta name="request_uuid" content="{{ $request_uuid }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="/webstatic/sites/zweb/images/icons/favicon-150x150.png" />
    <link rel="canonical" href="{{ Request::url() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link class="js-stylesheet" href="/webstatic/sites/zdashboard/css/light.css" rel="stylesheet">
    <link class="js-stylesheet" href="/webstatic/sites/zdashboard/css/cropit.css" rel="stylesheet">
    <link class="js-stylesheet" href="/webstatic/sites/zdashboard/css/sceditor.min.css" rel="stylesheet">
    <style>
        .message_containter {
            cursor: pointer;
            display: none;
            position: fixed;
            width: auto;
            max-width: 400px;
            box-sizing: border-box;
            z-index: 9999;
            background-color: #fff;
            border-radius: 25px;
            margin: auto;
            margin-top: 10px;
            box-shadow: 0px 0px 10px 0px #ccc;
            right: 0px;
            left: 0px;
            top: -100px;
            transition: all .4s ease-in-out;
            width: fit-content;
            width: -moz-fit-content;
            width: -webkit-fit-content;
        }

        .success_msg {
            color: #fff;
            background: #3699FF;
            box-shadow: 0 0 40px -2px rgba(31, 43, 58, .25);
        }

        .error_msg {
            color: #fff;
            background: #ed0a0a;
            box-shadow: 0 0 40px -2px rgba(31, 43, 58, .25);
        }


        .error_msg_text {
            font-size: 13px;
            line-height: 18px;
            display: table-cell;
            float: left;
            padding: 16px 15px 16px 0px;
            width: 100%;
            box-sizing: border-box;
        }

        .word_break {
            word-break: break-all;
        }

        .err_icon_aligner {
            display: table-cell;
            width: 56px;
            vertical-align: middle;
        }

        .neg_error {
            color: #ff5555;
            font-weight: 600;
        }

        .warn_error {
            color: #EF950F;
            font-weight: 600;
        }

        .pos_error {
            color: #20ba51;
            font-weight: 600;
        }

        .warn_msg {
            margin-top: 10px;
            color: #ff5555;
        }

        .error_msg_cross {
            display: inline-block;
            float: right;
            height: 36px;
            width: 36px;
            margin: 7px 10px;
            background-color: #e03f3f;
            border-radius: 50%;
            box-sizing: border-box;
            padding: 10px 11px;
            position: relative;
        }

        .crossline1 {
            display: inline-block;
            position: relative;
            height: 14px;
            width: 2px;
            background-color: #fff;
            margin: auto;
            transform: rotate(-45deg);
            left: 6px;
        }

        .warnline1 {
            display: inline-block;
            position: absolute;
            height: 10px;
            width: 2px;
            background-color: #fff;
            margin: auto;
            left: 0px;
            right: 0px;
            top: 9px;
        }

        .crossline2 {
            display: inline-block;
            position: relative;
            height: 14px;
            width: 2px;
            background-color: #fff;
            margin: auto;
            transform: rotate(45deg);
            left: 0px;
        }

        .warnline2 {
            display: inline-block;
            position: absolute;
            height: 10px;
            width: 2px;
            background-color: #fff;
            margin: auto;
            transform: rotate(90deg);
            left: 8px;
            right: 0px;
            top: 13px;
        }

        .success_msg .error_msg_cross {
            background-color: rgb(21 135 238)
        }

        .warning_msg .error_msg_cross {
            background-color: #EF950F;
        }

        .success_msg .tick {
            display: inline-block;
            position: relative;
            height: 5px;
            width: 11px;
            background-color: transparent;
            border-left: 2px solid #fff;
            border-bottom: 2px solid #fff;
            margin: auto;
            transform: rotate(-45deg);
            top: -6px;
        }


        .form-btn {
            border: none;

            color: white;
            cursor: pointer;
            position: relative;
            display: block;
        }

        .form-btn:focus {
            outline: 0.05em dashed #ff6600;
            outline-offset: 0.05em;
        }

        .form-btn::after {
            content: '';
            display: block;
            width: 1.5em;
            height: 1.5em;
            position: absolute;
            left: calc(50% - 0.75em);
            top: calc(50% - 0.75em);
            border: 5px solid #fff;
            border-top: 7px solid transparent;
            border-radius: 100%;
            -webkit-animation: load-animate infinite linear 1s;
            animation: load-animate infinite linear 1s;
            opacity: 0 !important;
        }

        @keyframes button-anim {
            from {
                transform: rotate(0);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .form-btn.loading {
            color: transparent;
            font-size: 18px;
            font-weight: 600;
            padding: 0.4em 1.25em;
            pointer-events: none;
        }

        .form-btn.loading::after {
            opacity: .65 !important;
        }

        @-webkit-keyframes load-animate {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(180deg);
                opacity: 0.35;
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes load-animate {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(180deg);
                opacity: 0.35;
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .hidden {
            display: none !important;
            visibility: hidden !important;
        }

        .form-label {
            font-weight: 600;
            color: #000;
        }

        .badge {
            text-transform: capitalize;
        }

        .disabled {
            pointer-events: none;
            opacity: .7;
        }
    </style>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        @if (auth('admin')->check() && session('2fa_verified') === true)
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class='sidebar-brand' href='{{ route('get.dashboard.home') }}'>
                        <span class="sidebar-brand-text align-middle">
                            Site Manager <sup><small class="badge bg-success text-uppercase">Beta</small></sup>

                        </span>
                        <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24"
                            fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square"
                            stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                            <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                            <path d="M20 12L12 16L4 12"></path>
                            <path d="M20 16L12 20L4 16"></path>
                        </svg>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Modules
                        </li>
                        @if(\App\Helpers\PermissionsHelper::hasPermission('Dashboard'))
                        <li
                            class="sidebar-item {{ Route::currentRouteName() == 'get.dashboard.home' ? 'active' : '' }}">
                            <a class='sidebar-link ' href="{{ route('get.dashboard.home') }}">
                                <i class="align-middle" data-feather="home"></i> <span
                                    class="align-middle">Dashboard</span>
                            </a>
                        </li>

                        @endif

                         <li
                            class="sidebar-item {{ in_array(Route::currentRouteName(), ['get.dashboard.seo']) ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('get.dashboard.seo') }}'>
                                <i class="align-middle" data-feather="monitor"></i> <span
                                    class="align-middle">SEO Pages</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item {{ in_array(Route::currentRouteName(), ['get.dashboard.services', 'get.dashboard.newService']) ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('get.dashboard.services') }}'>
                                <i class="align-middle" data-feather="monitor"></i> <span
                                    class="align-middle">Services</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item {{ in_array(Route::currentRouteName(), ['get.dashboard.news', 'get.dashboard.newNews']) ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('get.dashboard.news') }}'>
                                <i class="align-middle" data-feather="monitor"></i> <span
                                    class="align-middle">Blogs</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item {{ in_array(Route::currentRouteName(), ['get.dashboard.images', 'get.dashboard.images']) ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('get.dashboard.images') }}'>
                                <i class="align-middle" data-feather="monitor"></i> <span
                                    class="align-middle">Image Library</span>
                            </a>
                        </li>
                        <li
                        class="sidebar-item {{ in_array(Route::currentRouteName(), ['get.dashboard.campaigns']) ? 'active' : '' }}">
                        <a class='sidebar-link' href='{{ route('get.dashboard.campaigns') }}'>
                            <i class="align-middle" data-feather="monitor"></i> <span
                                class="align-middle">Campaigns</span>
                        </a>
                    </li>


                        @if(\App\Helpers\PermissionsHelper::hasPermission('Management'))
                        <li class="sidebar-header">
                            Management
                        </li>
                        <li
                            class="sidebar-item {{ in_array(Route::currentRouteName(), ['get.dashboard.userManagement', 'get.dashboard.userManagement']) ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('get.dashboard.userManagement') }}'>
                                <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">User
                                    Management</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item mb-6 {{ in_array(Route::currentRouteName(), ['get.dashboard.roles']) ? 'active' : '' }}">
                            <a class='sidebar-link' href='{{ route('get.dashboard.roles') }}'>
                                <i class="align-middle" data-feather="plus-square"></i> <span
                                    class="align-middle">Roles</span>
                            </a>
                        </li>
                        @endif
                    </ul>

                </div>
            </nav>
        @endif
        <div class="main">
            @if (auth('admin')->check() && session('2fa_verified') === true)
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle js-sidebar-toggle">
                        <i class="hamburger align-self-center"></i>
                    </a>

                    <form class="d-none d-sm-inline-block">
                        <div class="input-group input-group-navbar">
                            <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                            <button class="btn" type="button">
                                <i class="align-middle" data-feather="search"></i>
                            </button>
                        </div>
                    </form>

                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item px-2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="megaDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Recently Visisted
                            </a>
                            <div class="dropdown-menu dropdown-menu-start dropdown-mega"
                                aria-labelledby="megaDropdown">
                                <div class="d-md-flex align-items-start justify-content-start">
                                    <div class="dropdown-mega-list">

                                        {{-- <a class="dropdown-item" href="{{ route('get.dashboard.newEvent') }}">Create Event</a>
                                        <a class="dropdown-item" href="{{ route('get.dashboard.faculties') }}">Faculties</a>
                                        <a class="dropdown-item" href="{{ route('get.dashboard.news') }}">News & Updates</a>
                                        <a class="dropdown-item" href="{{ route('get.dashboard.calendar') }}">Academic Calendar</a> --}}
                                    </div>

                                </div>
                            </div>
                        </li>


                    </ul>

                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">



                            {{-- <li class="nav-item">
							<a class="nav-icon js-fullscreen d-none d-lg-block" href="index.html#">
								<div class="position-relative">
									<i class="align-middle" data-feather="maximize"></i>
								</div>
							</a>
						</li> --}}
                            <li class="nav-item dropdown">
                                <div class="d-flex justify-content-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ auth('admin')->user()->avatar }}"
                                            class="avatar img-fluid rounded me-1" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <a class="sidebar-user-title dropdown-toggle text-dark" href="#"
                                            data-bs-toggle="dropdown">
                                            {{ auth('admin')->user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-start">
                                            <a class='dropdown-item' href='{{ route('get.dashboard.profile') }}'><i
                                                    class="align-middle me-1" data-feather="user"></i> Profile</a>
                                            <a class='dropdown-item' href='{{ route('get.dashboard.settings') }}'><i
                                                    class="align-middle me-1" data-feather="settings"></i> Settings &
                                                Privacy</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('get.dashboard.logout') }}">Log
                                                out</a>
                                        </div>

                                        <div class="sidebar-user-subtitle fs-7">Support Engineer</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            @endif

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0 ">
                                <small>Request ID : {{ $request_uuid }}</small>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a class="text-muted">© Copyright 2024. Site Managaer (Beta)</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="message_containter error_msg" id="notification" onclick="hideNotification()"
        style="display: block;">
        <div style="display:table;width: 100%;">
            <div class="err_icon_aligner success-icon d-none">
                <div class="error_msg_cross">
                    <span class="tick"></span>
                </div>
            </div>
            <div class="err_icon_aligner error-icon d-none">
                <div class="error_msg_cross">
                    <span class="crossline1"></span>
                    <span class="crossline2"></span>
                </div>
            </div>
            <div class="error_msg_text">
                <span id="succ_or_err"></span>
                <span id="message"></span>
            </div>
        </div>
    </div>
    <script src="/webstatic/sites/zdashboard/js/script.js"></script>

    <script src="/webstatic/sites/zdashboard/js/jquery.cropit.js"></script>
    <script src="/webstatic/sites/zdashboard/js/sceditor.min.js"></script>
    <script src="/webstatic/sites/zdashboard/js/monocons.js"></script>
    <script src="/webstatic/sites/zdashboard/js/bbcode.js"></script>

    @stack('scripts')
    <script>
        function openNotification(message, type = "success") {
            $('#message').html(message);
            if (type == 'error') {
                $("#notification").removeClass("success_msg");
                $("#notification").addClass("error_msg");
                $(".success-icon").addClass("d-none");
                $(".error-icon").removeClass("d-none");
            } else {
                $("#notification").removeClass("error_msg");
                $("#notification").addClass("success_msg");
                $(".success-icon").removeClass("d-none");
                $(".error-icon").addClass("d-none");
            }
            $("#notification").css("top", "32px");
            setTimeout(function() {
                hideNotification();
            }, 6000)
        }

        function hideNotification() {
            $("#notification").css("top", "-100px");
        }
        @if (session()->has('notification'))
            openNotification('{{ session('notification') }}', 'success')
        @endif
    </script>
    <script src="/webstatic/sites/zdashboard/js/app.init.js"></script>

</body>

</html>
