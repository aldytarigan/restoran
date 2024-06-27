<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="<?= base_url() ?>admin">
                <i class="fa fa-utensils text-green"></i>
                <span class="h2 text-green"> Restaurant</span>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>admin">
                            <i class="ni ni-tv-2 text-green"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Menu Pegawai</span>
                </h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>makanan">
                            <i class="fa fa-utensils text-green"></i>
                            <span class="nav-link-text">Makanan & Minuman</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>meja">
                            <i class="fa fa-table text-green"></i>
                            <span class="nav-link-text">Manajemen Meja</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>pembayaran">
                            <i class="fa fa-edit text-green"></i>
                            <span class="nav-link-text">Riwayat Pembayaran</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>penjualan">
                            <i class="fa fa-money-bill-wave text-green"></i>
                            <span class="nav-link-text">Data Penjualan</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>saran">
                            <i class="fa fa-envelope text-green"></i>
                            <span class="nav-link-text">Kritik & Saran</span>
                        </a>
                    </li>
                </ul>
                <?php
                if ($this->session->userdata('jabatan') == "admin") {
                ?>
                    <!-- Divider -->
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Menu Admin</span>
                    </h6>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>profilusaha">
                                <i class="fa fa-home text-green"></i>
                                <span class="nav-link-text">Profil Usaha</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>profilusaha/edit">
                                <i class="fa fa-cog text-green"></i>
                                <span class="nav-link-text">Edit Profil Usaha</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>profilusaha/metode_pembayaran">
                                <i class="fa fa-money-bill text-green"></i>
                                <span class="nav-link-text">Metode Pembayaran</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>admin/daftar_pegawai">
                                <i class="fa fa-people-carry text-green"></i>
                                <span class="nav-link-text">Kelola Pegawai</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav" hidden>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>saw">
                                <i class="fa fa-trophy text-green"></i>
                                <span class="nav-link-text">Pemilihan Pegawai Teladan</span>
                            </a>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>