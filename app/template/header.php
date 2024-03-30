<?php session_start(); ?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item">
            <a class="nav-link text-gray-600" href="#" id="userDropdown" role="button" data-toggle="modal" data-target="#logoutModal">
                <span class="mr-1 d-none d-lg-inline"><?php echo ucfirst($_SESSION['nama']); ?></span>
                <div class="topbar-divider d-none d-sm-block"></div>
                <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                <span class="ml-1 d-none d-lg-inline">Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->