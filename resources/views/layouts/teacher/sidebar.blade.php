<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        @include('layouts.common.logo')


        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>

    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('admin.audit-logs.index') }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                        <i class="mdi mdi-account"></i> <span >My Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('teacher.courses.index') }}" class="nav-link {{ request()->is('teacher.courses') || request()->is('teacher.courses/*') ? 'active' : '' }}">
                        <i class="mdi mdi-book-open"></i> <span >My Courses</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.audit-logs.index') }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                        <i class="mdi mdi-star"></i> <span >Reviews</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="mdi mdi-logout"></i> <span >{{ trans('global.logout') }}</span>
                    </a>
                </li>

                <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
