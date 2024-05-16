<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard') }}" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('logo_muhajirin.png') }}" alt="logo image" class="logo-lg" width="250" />
                <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version"></span>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Menu Utama</label>
                </li>
                <li class="pc-item">
                    <a href="{{ route('dashboard') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-chart-pie"></i>
                        </span>
                        <span class="pc-mtext">Beranda</span></a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-gauge"></i>
                        </span>
                        <span class="pc-mtext">Jama'ah</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        {{-- <span class="pc-badge">2</span> --}}
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="index.html">Tambah Baru</a></li>
                        <li class="pc-item"><a class="pc-link" href="#">Data Per Wilayah</a> </li>
                        <li class="pc-item"><a class="pc-link" href="#">Infografis Jamaah</a> </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="javascript:void(0)" class="pc-link"><span class="pc-micon"> <i
                                class="ph-duotone ph-layout"></i></span><span class="pc-mtext">Acara</span><span
                            class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('acara.index') }}">Data Acara</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('acara.tambah') }}">Tambah Acara</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('acara.kalender') }}">Kalender Acara</a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Keuangan</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('kas.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-projector-screen-chart"></i>
                        </span>
                        <span class="pc-mtext">Kas</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="javascript:void(0)" class="pc-link"><span class="pc-micon"> <i
                                class="ph-duotone ph-layout"></i></span><span class="pc-mtext">Transaksi</span><span
                            class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('keuangan.informasi') }}">Informasi
                                Keuangan</a></li>
                        <li class="pc-item"><a class="pc-link" href="">Histori Transaksi</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('keuangan.pemasukan') }}">Pemasukan</a>
                        </li>
                        <li class="pc-item"><a class="pc-link"
                                href="{{ route('keuangan.pengeluaran') }}">Pengeluaran</a></li>
                        <li class="pc-item"><a class="pc-link" href="">Laporan</a>
                        </li>
                    </ul>
                </li>

            </ul>
            {{-- <div class="card nav-action-card bg-brand-color-4">
                <div class="card-body" style="background-image: url('../assets/images/layout/nav-card-bg.svg')">
                    <h5 class="text-dark">Kini Tersedia</h5>
                    <p class="text-dark text-opacity-75">Saat ini sudah tersedia portal web Musholla Al Muhajirin
                        Denpasar Utara</p>
                    <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Lihat
                        Website</a>
                </div>
            </div> --}}
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image"
                            class="user-avtar wid-45 rounded-circle" />
                    </div>
                    <div class="flex-grow-1 ms-3 me-2">
                        <h6 class="mb-0">Andreyadi Muchtar</h6>
                        <small>Administrator</small>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="btn btn-icon btn-link-secondary avtar arrow-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                            <i class="ph-duotone ph-windows-logo"></i>
                        </a>
                        <form class="dropdown-menu" action="{{ route('logout') }}" method="post">
                            @csrf
                            <ul>
                                <li><a class="pc-user-links">
                                        <i class="ph-duotone ph-user"></i>
                                        <span>Akun Saya</span>
                                    </a></li>
                                <li><a class="pc-user-links">
                                        <i class="ph-duotone ph-gear"></i>
                                        <span>Pengaturan</span>
                                    </a></li>
                                <li><a class="pc-user-links">
                                        <i class="ph-duotone ph-lock-key"></i>
                                        <span>Ubah Sandi</span>
                                    </a></li>
                                <li><a class="pc-user-links login-button" href="javascript:void(0)">
                                        <i class="ph-duotone ph-power"></i>
                                        <span>Keluar</span>
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


@push('js')
    <script>
        $(document).ready(function() {
            $(document).on("click", ".login-button", function() {
                var form = $(this).closest("form");
                //console.log(form);
                form.submit();
            });
        });
    </script>
@endpush
