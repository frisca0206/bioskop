<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('adminLTE'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cinema</span></h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?=url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('film') ?>" class="nav-link">
                        <i class="nav-icon far fa fa-users"></i>
                        <p>Film List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('genre') ?>" class="nav-link">
                        <i class="nav-icon far fa fa-users"></i>
                        <p>Genre List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('kursi') ?>" class="nav-link">
                        <i class="nav-icon far fa fa-users"></i>
                        <p>Seat Number</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('cemilan') ?>" class="nav-link">
                        <i class="nav-icon far fa fa-users"></i>
                        <p>Snacks</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('bioskop') ?>" class="nav-link">
                        <i class="nav-icon far fa fa-users"></i>
                        <p>Cinema</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>