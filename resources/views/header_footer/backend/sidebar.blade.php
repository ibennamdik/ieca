<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="{{ route('admin.home')}}">
                        <img src="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('media/frontend_imgs/logo.png') }}" width="100" height="40">
                        <!-- <span class="font-size-xl text-dual-primary-dark">Tyre</span><span class="font-size-xl text-danger">villa</span> -->
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{isset(auth()->user()->profile->avatar) ? Storage::url(auth()->user()->profile->avatar) : asset('media/avatars/avatar15.jpg') }}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="javascript:void(0)">
                    <img class="img-avatar" src="{{isset(auth()->user()->profile->avatar) ? Storage::url(auth()->user()->profile->avatar) : asset('media/avatars/avatar15.jpg') }}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="javascript:void(0)">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">

                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="si si-logout mr-5"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                @can('admin-dashboard')
                <li>
                    <a class="{{ Route::is('admin.home') ? 'active' : '' }}" href="{{ route('admin.home')}}">
                        <i class="si si-home"></i><span class="sidebar-mini-hide">Dashboard</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage customers')
                <li>
                    <a class="{{ Route::is('admin.customers.*') ? 'active' : '' }}" href="{{ route('admin.customers.index')}}">
                        <i class="si si-users"></i><span class="sidebar-mini-hide">Customers</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage orders')
                <li>
                    <a class="{{ Route::is('admin.orders.*') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">
                        <i class="si si-present"></i><span class="sidebar-mini-hide">Orders</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage products')
                <li>
                    <a class="{{ Route::is('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index')}}">
                        <i class="si si-basket"></i><span class="sidebar-mini-hide">Products</span>
                    </a>
                </li>


                <div>&nbsp;</div>
                @endcan

                @can('manage payments')
                <li>
                    <a class="{{ Route::is('admin.payments.*') ? 'active' : '' }}" href="{{ route('admin.payments.index')}}">
                        <i class="si si-wallet"></i><span class="sidebar-mini-hide">Payments</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage posts')
                <li>
                    <a class="{{ Route::is('admin.posts.*') ? 'active' : '' }}" href="{{ route('admin.posts.index')}}">
                        <i class="si si-support"></i><span class="sidebar-mini-hide">Lessons/Posts</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                <li>
                    <a class="{{ Route::is('admin.tickets.*') ? 'active' : '' }}" href="{{ url('/tickets') }}">
                        <i class="si si-globe"></i><span class="sidebar-mini-hide">Tickets</span>
                    </a>
                </li>

                <div>&nbsp;</div>

                @can('manage complaints')
                <li>
                    <a class="{{ Route::is('admin.complaints.*') ? 'active' : '' }}" href="{{ route('admin.complaints.index')}}">
                        <i class="si si-envelope-letter"></i><span class="sidebar-mini-hide">Complaints</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage staff')
                <li>
                    <a class="{{ Route::is('admin.staff.*') ? 'active' : '' }}" href="{{ route('admin.staff.index')}}">
                        <i class="si si-lock"></i><span class="sidebar-mini-hide">Staff Mgt.</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage roles and permissions')
                <li>
                    <a class="{{ Route::is('admin.roles.*') ? 'active' : '' }}" href="{{ route('admin.roles.index')}}">
                        <i class="si si-lock"></i><span class="sidebar-mini-hide">Roles & Permissions</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan


                @can('manage staff')
                <li>
                    <a class="{{ Route::is('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.index')}}">
                        <i class="si si-settings"></i><span class="sidebar-mini-hide">Settings</span>
                    </a>
                </li>

                <div>&nbsp;</div>
                @endcan

                @can('manage logs')
                <li>
                    <a class="{{ Route::is('admin.logs.*') ? 'active' : '' }}" href="{{ route('admin.logs.index')}}">
                        <i class="si si-settings"></i><span class="sidebar-mini-hide">Logs</span>
                    </a>
                </li>
                <div>&nbsp;</div>
                @endcan
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>

