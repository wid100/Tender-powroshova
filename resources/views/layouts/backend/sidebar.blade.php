<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.tender.index') }}" class="nav-link">Tender</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.participate.index') }}" class="nav-link">Participate</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a href="{{ route('admin.participate.draft') }}" class="nav-link">Draft Participate</a>
                    </li> --}}

                </ul>
            </li>

        </ul>
    </div>
</nav>
