<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->role === 'admin')
                            <li class="nav-item">
                                <a href="{{ route('dataBuku') }}"
                                    class="nav-link {{ request()->routeIs('dataBuku') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Data Buku
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dataAnggota') }}"
                                    class="nav-link {{ request()->routeIs('dataAnggota') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data Anggota
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dataPeminjaman') }}"
                                    class="nav-link {{ request()->routeIs('dataPeminjaman') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Data Peminjaman
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dataPengembalian') }}"
                                    class="nav-link {{ request()->routeIs('dataPengembalian') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Data Pengembalian
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dataLaporan') }}"
                                    class="nav-link {{ request()->routeIs('dataLaporan') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Data Laporan
                                    </p>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('katalogBuku') }}"
                                    class="nav-link {{ request()->routeIs('katalogBuku') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Katalog Buku
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('riwayatPeminjaman') }}"
                                    class="nav-link {{ request()->routeIs('riwayatPeminjaman') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Riwayat Peminjaman
                                    </p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>