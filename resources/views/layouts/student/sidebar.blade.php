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
                @can('user_management_access')
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->is('admin/permissions*') ? 'active' : '' }} {{ request()->is('admin/roles*') ? 'collapsed active' : '' }} {{ request()->is('admin/users*') ? 'collapsed active' : '' }} {{ request()->is('admin/audit-logs*') ? 'collapsed active' : '' }}" href="#userManagementPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="userManagementPages">
                            <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">{{ trans('cruds.userManagement.title') }}</span>
                        </a>
                        <div class="collapse menu-dropdown {{ request()->is('admin/permissions*') ? 'show' : '' }} {{ request()->is('admin/roles*') ? 'show' : '' }} {{ request()->is('admin/users*') ? 'show' : '' }} {{ request()->is('admin/audit-logs*') ? 'show' : '' }}" id="userManagementPages">
                            <ul class="nav nav-sm flex-column">
                                @can('permission_access')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.permissions.index') }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-unlock-alt"></i> <span >{{ trans('cruds.permission.title') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('role_access')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.roles.index') }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-briefcase"></i> <span >{{ trans('cruds.role.title') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('user_access')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-user"></i> <span >{{ trans('cruds.user.title') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('audit_log_access')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.audit-logs.index') }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-file-alt"></i> <span >{{ trans('cruds.auditLog.title') }}</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

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
