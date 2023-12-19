@extends('layouts.app')
@section('content')
    <!-- Layout wrapper -->
    <style>
        .notify{
            position: absolute;
            top: 22px;
            z-index: 1;
            left: 21px;
        }
    </style>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('home') }}" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase text-center">HANDY-MEN</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item @if (request()->routeIs('home-admin')) active open @endif">
                        <a href="{{ route('home-admin') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
             
                    
                    <!--All Users-->
                    <li class="menu-item @if (request()->routeIs('users_index')) active open @endif">
                        <a href="{{ route('users_index') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bxs-group'></i>
                            <div data-i18n="Account">Users</div>
                        </a>
                    </li>

                    <!--All Categories-->
                    <li class="menu-item @if (request()->routeIs('categorie-index')) active open @endif">
                        <a href="{{ route('categorie-index') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bxs-user-detail'></i>
                            <div data-i18n="Account">Categories</div>
                        </a>
                    </li>

                  
                    <!--All Services-->
                    <li class="menu-item @if (request()->routeIs('service-index')) active open @endif">
                        <a href="{{ route('service-index') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-briefcase-alt-2'></i>
                            <div data-i18n="Services text-info">Services</div>
                        </a>
                    </li>
                    
                    <!--All Booking-->
                    <li class="menu-item @if (request()->routeIs('booking-index')) active open @endif">
                        <a href="{{ route('booking-index') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-briefcase-alt-2'></i>
                            <div data-i18n="Services text-info">Booking</div>
                        </a>
                    </li>

                    <!--All Blogs-->
                    <li class="menu-item @if (request()->routeIs('blog-index')) active open @endif">
                        <a href="{{ route('blog-index') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-briefcase-alt-2'></i>
                            <div data-i18n="Services text-info">Blogs</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav  class=" w-100 border layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">{{ Auth::user()->name }}
                                
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        @if ($myProfile->img_path == null)
                                            <img src="{{ asset('users/profile/1.png') }}" alt="profile" class="w-px-40 h-auto rounded-circle  img-fluid" />
                                        @else
                                            <img src="{{ asset('users/profile/' . $myProfile->img_path) }}" alt="profile" class="w-px-40 h-auto  img-fluid rounded-circle" />
                                        @endif
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        @if ($myProfile->img_path == null)
                                                            <img src="{{ asset('users/profile/1.png') }}" alt="profile"
                                                                class="w-px-40 h-auto rounded-circle  img-fluid" />
                                                                
                                                        @else
                                                            <img src="{{ asset('users/profile/' . $myProfile->img_path) }}"
                                                                alt="profile"
                                                                class="w-px-40 h-auto  img-fluid rounded-circle" />
                                                                
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ Auth::user()->email }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile_index') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                               
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Layout Demo -->
                        @yield('m-content')
                        <!--/ Layout Demo -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0 ">
                                Copyright &copy; 2023 
                                <div style="font-size:small">
                                     made by <a href="https://younes-talibi.web.app/">younes-talibi</a>
                                </div>
                            </div>
                            
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
