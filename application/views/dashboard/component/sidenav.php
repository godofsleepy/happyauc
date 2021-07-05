<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="../../asset/assets_dashboard/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Rifat Khadafy</span>
                    <span class="text-secondary text-small">Developer</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/pages/home') ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Item</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('dashboard/pages/activeitem') ?>">Active Item</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('dashboard/pages/pendingitem') ?>">Pending Item</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('dashboard/pages/solditem') ?>">Sold Item</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('dashboard/pages/allitem') ?>">All Item</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/pages/admin') ?>">
                <span class="menu-title">Admin</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/pages/user') ?>">
                <span class="menu-title">User</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>

    </ul>
</nav>