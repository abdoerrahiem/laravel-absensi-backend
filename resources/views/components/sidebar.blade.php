<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ request()->route()->getName() === 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ strstr(request()->route()->getName(), 'users.') !== false ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Users</span></a>
            </li>
        </ul>
    </aside>
</div>