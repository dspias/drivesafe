<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('admin_file/img/sidebar-2.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">drive safe</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Route::is('admin.dashboard.index') ? "active":""}}">
                <a class="nav-link" href="{{ Route('admin.dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            <li class="nav-item {{ Route::is('admin.create_reporter.index') ? "active":""}}">
                <a class="nav-link" href="{{ Route('admin.create_reporter.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Reporters</p>
                </a>
            </li>

            <li class="nav-item {{ Route::is('admin.incident.index') ? "active":""}}">
                <a class="nav-link" href="{{ Route('admin.incident.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Incident</p>
                </a>
            </li>

            <li class="nav-item {{ Route::is('admin.driver.index') ? "active":""}}">
                <a class="nav-link" href="{{ Route('admin.driver.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Driver</p>
                </a>
            </li>

            <li class="nav-item {{ Route::is('admin.users.index') ? "active":""}}">
                <a class="nav-link" href="{{ Route('admin.users.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Approval</p>
                </a>
            </li>


        </ul>
    </div>
</div>