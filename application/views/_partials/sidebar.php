<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $this->session->userdata['full_name']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('surat_masuk'); ?>">
                    <i class="fa fa-laptop"></i> <span>Surat Masuk</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"><?= $count_all; ?></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('surat_keluar'); ?>">
                    <i class="fa fa-envelope"></i> <span>Surat Keluar</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>