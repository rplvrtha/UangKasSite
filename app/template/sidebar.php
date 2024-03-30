<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
        <div class="sidebar-brand-icon">
            <img src="assets/img/icon.png" width="50px"></im>
        </div>
        <!-- <div class="sidebar-brand-text mx-3">KasQu</div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/UangKasSite/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Riwayat Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#riwayat" aria-expanded="true" aria-controls="riwayat">
            <i class="fas fa-fw fa-history"></i>
            <span>Riwayat</span>
        </a>
        <div id="riwayat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Riwayat</h6>
                <a class="collapse-item" href="?page=pemasukan">Pemasukan</a>
                <a class="collapse-item" href="?page=pengeluaran">Pengeluaran</a>
                <h6 class="collapse-header">Transaksi</h6>
                <a class="collapse-item" href="?page=transaksi">Pembayaran Kas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Kelola Menu -->
    <li class="nav-item">
        <a class="nav-link" href="?page=kelola">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Kelola User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->