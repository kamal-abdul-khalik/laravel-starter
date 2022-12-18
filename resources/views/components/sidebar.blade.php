<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Laravel Starter</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">LS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer">
                    </i> <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Project</li>
            <li class="{{ Request::is('....') ? 'active' : '' }}">
                <a class="nav-link" href="#"><i class="fas fa-folder">
                    </i> <span>Project</span>
                </a>
            </li>
            @can('add_roles')
                <li class="menu-header">ROLES & PERMISSION</li>
                <li class="nav-item dropdown {{ $type_menu === 'utilities' ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-shield"></i>
                        <span>Role - Permission</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('role-and-permission/roles') ? 'active' : '' }}">
                            <a href="{{ route('roles.index') }}">Role</a>
                        </li>
                        <li class="{{ Request::is('role-and-permission/permissions') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('permissions.index') }}">Permission</a>
                        </li>
                        <li class="{{ Request::is('role-and-permission/assigns') ? 'active' : '' }}">
                            <a href="{{ route('assigns.create') }}">Assign Permission</a>
                        </li>
                        <li class="{{ Request::is('role-and-permission/permissionUsers') ? 'active' : '' }}">
                            <a href="{{ route('permissionUsers.create') }}">Give Role to User</a>
                        </li>
                    </ul>
                </li>
            @endcan
            <li class="{{ Request::is('setting') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('setting.edit') }}"><i class="fas fa-pencil-ruler">
                    </i> <span>Setting</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
