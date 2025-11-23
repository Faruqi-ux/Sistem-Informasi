<x-layoutAdmin>
    @if (Auth::user()->role === 'admin')
        <!-- ======================== -->
        <!-- DASHBOARD ADMIN -->
        <!-- ======================== -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard Admin</h1>
                        <p>Selamat datang, Administrator!</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Total Anggota -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $totalAnggota ?? 0 }}</h3>
                                <p>Total Anggota</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('dataAnggota') }}" class="small-box-footer">
                                Lihat detail <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Total Buku -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $totalBuku ?? 0 }}</h3>
                                <p>Total Buku</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="{{ route('dataBuku') }}" class="small-box-footer">
                                Lihat detail <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Sedang Dipinjam -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $totalDipinjam ?? 0 }}</h3>
                                <p>Sedang Dipinjam</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <a href="{{ route('dataPeminjaman') }}" class="small-box-footer">
                                Lihat detail <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Dikembalikan Hari Ini -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $totalDikembalikan ?? 0 }}</h3>
                                <p>Dikembalikan Hari Ini</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <a href="{{ route('dataPengembalian') }}" class="small-box-footer">
                                Lihat detail <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @else
        <!-- ======================== -->
        <!-- DASHBOARD USER (ANGGOTA) -->
        <!-- ======================== -->
        <section class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">Dashboard Anggota</h1>
                <p>Halo, {{ Auth::user()->name }}!</p>

                <div class="row">
                    <!-- Buku Dipinjam -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $bukuDipinjam ?? 0 }}</h3>
                                <p>Buku Dipinjam</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <a href="{{ route('riwayatPeminjaman') }}" class="small-box-footer">
                                Lihat detail <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Perlu Dikembalikan -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $perluDikembalikan ?? 0 }}</h3>
                                <p>Perlu Dikembalikan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <a href="{{ route('riwayatPeminjaman') }}" class="small-box-footer">
                                Lihat detail <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</x-layoutAdmin>