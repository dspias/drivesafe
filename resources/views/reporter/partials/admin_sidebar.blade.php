<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('admin_file/img/sidebar-2.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">Drive Safe</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::is('reporter.dashboard.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('reporter.dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('reporter.report.index') ? "active":""}}">
                <a class="nav-link" href="{{ route('reporter.report.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Report Incident</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>