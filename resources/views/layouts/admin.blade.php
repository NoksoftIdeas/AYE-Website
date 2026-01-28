<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Admin Dashboard</title>
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
    
    <!-- Datatable -->
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    
    <!-- Custom Stylesheet -->
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    
    <!-- Custom Color Overrides -->
    <style>
        :root {
            --primary: #8B1E3F;
            --secondary: #2FA4A9;
            --accent: #F4D35E;
        }
        
        /* Override primary colors */
        .bg-primary, .btn-primary, .badge-primary {
            background-color: #8B1E3F !important;
            border-color: #8B1E3F !important;
        }
        
        .text-primary {
            color: #8B1E3F !important;
        }
        
        .border-primary {
            border-color: #8B1E3F !important;
        }
        
        /* Sidebar and Nav Header */
        .nav-header {
            background-color: #8B1E3F !important;
        }
        
        .deznav {
            background-color: #8B1E3F !important;
        }
        
        .deznav .metismenu > li > a {
            color: rgba(255, 255, 255, 0.8) !important;
        }
        
        .deznav .metismenu > li.mm-active > a,
        .deznav .metismenu > li:hover > a {
            background-color: rgba(47, 164, 169, 0.2) !important;
            color: #ffffff !important;
        }
        
        /* Header */
        .header {
            background-color: #ffffff;
            border-bottom: 1px solid #f0f0f0;
        }
        
        /* Cards with accent colors */
        .card-coin .currency-icon circle:first-child {
            fill: #F4D35E !important;
        }
        
        /* Stats cards */
        .stats-card-1 .currency-icon path:last-child {
            fill: #2FA4A9 !important;
        }
        
        .stats-card-2 .currency-icon path:last-child {
            fill: #F4D35E !important;
        }
        
        .stats-card-3 .currency-icon path:last-child {
            fill: #8B1E3F !important;
        }
        
        /* Buttons */
        .btn-primary:hover {
            background-color: #6F1832 !important;
            border-color: #6F1832 !important;
        }
        
        .btn-secondary {
            background-color: #2FA4A9 !important;
            border-color: #2FA4A9 !important;
        }
        
        .btn-secondary:hover {
            background-color: #268387 !important;
            border-color: #268387 !important;
        }
        
        /* Links and accent elements */
        a {
            color: #8B1E3F;
        }
        
        a:hover {
            color: #6F1832;
        }
        
        /* Brand logo background */
        .brand-logo .svg-logo-rect {
            fill: #8B1E3F !important;
        }
    </style>
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('admin.dashboard') }}" class="brand-logo">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div style="width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <span style="color: #8B1E3F; font-weight: bold; font-size: 20px;">A</span>
                    </div>
                    <div>
                        <h4 style="color: white; margin: 0; font-weight: bold;">AYE Admin</h4>
                        <small style="color: rgba(255,255,255,0.7);">Sickle Cell Foundation</small>
                    </div>
                </div>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                @yield('page-title', 'Dashboard')
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <div class="header-info">
                                        <span>{{ Auth::user()->name }}</span>
                                        <small>Administrator</small>
                                    </div>
                                    <div style="width: 35px; height: 35px; background: linear-gradient(135deg, #8B1E3F, #6F1832); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-left: 10px;">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile</span>
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item ai-icon" style="border: none; background: none; width: 100%; text-align: left;">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ml-2">Logout</span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li class="{{ request()->routeIs('admin.dashboard') ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.contacts') ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.contacts') }}" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Contact Submissions</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.volunteers') ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.volunteers') }}" aria-expanded="false">
                            <i class="flaticon-077-menu-1"></i>
                            <span class="nav-text">Volunteers</span>
                        </a>
                    </li>
                    <li class="nav-label">External</li>
                    <li>
                        <a href="{{ route('home') }}" target="_blank" aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">View Website</span>
                        </a>
                    </li>
                </ul>
                <div class="copyright">
                    <p><strong>AYE Sickle Cell Foundation</strong></p>
                    <p class="fs-12">Powered by Noksoft Ideas</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © {{ date('Y') }} AYE Sickle Cell Foundation. All Rights Reserved.</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
	<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
	
    <!-- Datatable -->
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>

</body>
</html>
