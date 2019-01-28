<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div id="search-container" class="header-block header-block-search">
        <form role="search">
            <div class="input-container">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Search" id="filterInput">
                <button type="button" class="btn btn-secondary btn-sm d-none" id="btn-reset">
                    <i class="fa fa-times"></i>
                </button>
                <div class="underline"></div>
            </div>
        </form>
    </div>
    <!-- <div class="header-block header-block-buttons">
        <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn">
            <i class="fa fa-github-alt"></i>
            <span>View on GitHub</span>
        </a>
        <a href="https://github.com/modularcode/modular-admin-html/stargazers" class="btn btn-sm header-btn">
            <i class="fa fa-star"></i>
            <span>Star Us</span>
        </a>
        <a href="https://github.com/modularcode/modular-admin-html/releases" class="btn btn-sm header-btn">
            <i class="fa fa-cloud-download"></i>
            <span>Download .zip</span>
        </a>
    </div> -->
    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="d-block d-sm-block d-md-none">
                <a id="search-mobile" href="javascript:void(0);"><i class="fa fa-search"></i></a>
            </li>
            <li class="notifications new">
                <a href="" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <sup>
                        <span class="counter">8</span>
                    </sup>
                </a>
                <div class="dropdown-menu notifications-dropdown-menu">
                    <ul class="notifications-container">
                        <li>
                            <a href="" class="notification-item">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/assets/faces/3.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Zack Alien</span> pushed new commit:
                                        <span class="accent">Fix page load performance issue</span>. </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification-item">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/assets/faces/5.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Amaya Hatsumi</span> started new task:
                                        <span class="accent">Dashboard UI design.</span>. </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification-item">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/assets/faces/8.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Andy Nouman</span> deployed new version of
                                        <span class="accent">NodeJS REST Api V3</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <footer>
                        <ul>
                            <li>
                                <a href=""> View All </a>
                            </li>
                        </ul>
                    </footer>
                </div>
            </li>
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div>
                    <span class="name"> Administrator {{-- {{Auth::user()->name}} --}} </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user icon"></i> Profile </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-bell icon"></i> Notifications </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-gear icon"></i> Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>
<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <!-- <img src="{{asset('assets/img/games.ico')}}" height="45px" width="45px" class="mr-2"> -->
                {{-- <div class="logo">
                    <span class="l l1"></span>
                    <span class="l l2"></span>
                    <span class="l l3"></span>
                    <span class="l l4"></span>
                    <span class="l l5"></span>
                </div>  --}}
                <div class="text-brand">Mutiara Berlian</div>
            </div>
        </div>
        <nav class="menu" id="sidebar">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li class="{{Request::is('home') ? 'active' : ''  || Request::is('/') ? 'active' : ''}}">
                    <a href="{{url('/')}}" class="dashboard">
                        <i class="fa fa-home"></i> Dashboard 
                    </a>
                </li>
                <li class="{{Request::is('master/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-th-large"></i> Master Data
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('master/databarang/*') ? 'active' : ''}}">
                            <a href="{{route('databarang')}}">Data Barang</a>
                        </li>
                        <li class="{{Request::is('master/datasuplier/*') ? 'active' : ''}}">
                            <a href="{{route('datasuplier')}}">Data Suplier</a>
                        </li>
                        <li class="{{Request::is('master/datacustomer/*') ? 'active' : ''}}">
                            <a href="{{route('datacustomer')}}">Data Customer</a>
                        </li>
                        <li class="{{Request::is('master/datapegawai/*') ? 'active' : ''}}">
                            <a href="{{route('datapegawai')}}">Data Pegawai</a>
                        </li>
                        <li class="{{Request::is('master/dataarmada/*') ? 'active' : ''}}">
                            <a href="{{route('dataarmada')}}">Data Armada</a>
                        </li>
                        <li class="{{Request::is('master/datasatuan/*') ? 'active' : ''}}">
                            <a href="{{route('datasatuan')}}">Data Satuan</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('masterdatautama/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-sitemap"></i> Master Data Utama
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('masterdatautama/datapegawai/*') ? 'aktif open' : ''}}">
                            <a href="#"> 
                                <span>
                                    Master Data Pegawai
                                </span>
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="{{Request::is('masterdatautama/datapegawai/kelolapegawai/*') ? 'active' : ''}}">
                                    <a href="{{route('kelolapegawai')}}"> Kelola Data Pegawai </a>
                                </li>
                                <li class="{{Request::is('masterdatautama/datapegawai/profilpegawai/*') ? 'active' : ''}}">
                                    <a href="{{route('profilpegawai')}}"> Profil Data Pegawai </a>
                                </li>
                                <li class="{{Request::is('masterdatautama/datapegawai/passwordpegawai/*') ? 'active' : ''}}">
                                    <a href="{{route('passwordpegawai')}}">Ganti Password Pegawai</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Master Produk
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Kelola Data Jenis Produk </a>
                                </li>
                                <li>
                                    <a href="#"> Profil Data Produk </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Master Harga
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Kelola Data Golongan Harga </a>
                                </li>
                                <li>
                                    <a href="#"> Kelola Data Harga Per Satuan </a>
                                </li>
                                <li>
                                    <a href="#">Kelola Data Per Item</a>
                                </li>
                                <li>
                                    <a href="#">Kelola Data Per Golongan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Master Suplier
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Kelola Data Suplier </a>
                                </li>
                                <li>
                                    <a href="#"> Kelola Produk Per Suplier </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Master Cabang
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Kelola Data Cabang </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Master Agen
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Kelola Data Agen </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('produksi/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-product-hunt"></i> Aktivitas Produksi
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('produksi/orderproduksi/*') ? 'aktif open' : ''}}">
                            <a href="#"> Order Produksi
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="{{Request::is('produksi/orderproduksi/pembuatanorder/*') ? 'open' : ''}}">
                                    <a href="{{ route('pembuatan_order.index')}}"> Pembuatan Order Produksi </a>
                                </li>
                                <li class="{{Request::is('produksi/orderproduksi/penentuantermin/*') ? 'open' : ''}}">
                                    <a href="{{ route('penentuan_termin.index')}}"> Penentuan Termin Pembayaran</a>
                                </li>
                                <li class="{{Request::is('produksi/orderproduksi/historiorder/*') ? 'open' : ''}}">
                                    <a href="{{ route('histori_order.index')}}">Histori Order Produksi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{Request::is('produksi/penerimaanbarang/*') ? 'aktif open' : ''}}">
                            <a href="#"> Penerimaan Barang
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="{{Request::is('produksi/penerimaanbarang/datapenerimaan/*') ? 'open' : ''}}">
                                    <a href="{{ route('data_penerimaan.index') }}"> Data Penerimaan Barang </a>
                                </li>
                                <li class="{{Request::is('produksi/penerimaanbarang/historipenerimaan/*') ? 'open' : ''}}">
                                    <a href="{{ route('histori_penerimaan.index') }}"> Histori Penerimaan Barang </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{Request::is('produksi/pembayaran/*') ? 'aktif open' : ''}}">
                            <a href="#"> Pembayaran
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="{{Request::is('produksi/pembayaran/pencatatanpembayaran/*') ? 'open' : ''}}">
                                    <a href="{{ route('pencatatan_pembayaran.index') }}"> Pencatatan Data Pembayaran </a>
                                </li>
                                <li class="{{Request::is('produksi/pembayaran/historipembayaran/*') ? 'open' : ''}}">
                                    <a href="{{ route('histori_pembayaran.index') }}"> Histori Pembayaran </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{Request::is('produksi/returnproduksi/*') ? 'aktif open' : ''}}">
                            <a href="#"> Return Produksi
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="{{Request::is('produksi/returnproduksi/pencatatanreturn/*') ? 'open' : ''}}">
                                    <a href="{{ route('pencatatan_return.index')}}"> Pencatatan Data Return </a>
                                </li>
                                <li class="{{Request::is('produksi/returnproduksi/perlakuanreturn/*') ? 'open' : ''}}">
                                    <a href="{{ route('perlakuan_return.index') }}"> Perlakuan Return  </a>
                                </li>
                                <li class="{{Request::is('produksi/returnproduksi/historireturn/*') ? 'open' : ''}}">
                                    <a href="{{ route('histori_return.index') }}">Histori Return Produksi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('inventory/*') ? 'active open' : ''}}">
                    <a href="">
                        <i class="fa fa-desktop"></i> Aktivitas Inventory
                        <i class="fa arrow"></i>
                    </a>
                <ul class="sidebar-nav">
                    <li class="{{Request::is('inventory/barangmasuk/*') ? 'aktif open' : ''}}">
                        <a href="#"> Pengelolaan Barang Masuk
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li class="{{Request::is('inventory/barangmasuk/pencatatanbarang/*') ? 'open' : ''}}">
                                <a href="{{ route('pencatatan_masuk.index') }}"> Pencatatan Barang Masuk </a>
                            </li>
                            <li class="{{Request::is('inventory/barangmasuk/pencatatanlokasi/*') ? 'open' : ''}}">
                                <a href="{{ route('lokasi_masuk.index') }}"> Pencatatan Lokasi Barang </a>
                            </li>
                            <li class="{{Request::is('inventory/barangmasuk/historibarangmasuk/*')}}">
                                <a href="{{ route('histori_masuk.index')}}">Histori Barang Masuk</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Pengelolaan Barang Keluar
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Pencatatan Barang Keluar </a>
                            </li>
                            <li>
                                <a href="#"> Pencatatan Lokasi Barang </a>
                            </li>
                            <li>
                                <a href="#">Histori Barang Masuk</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Pengelolaan Distribusi Barang
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Pencatatan Distribusi Barang </a>
                            </li>
                            <li>
                                <a href="#"> Monitoring Progress Distribusi </a>
                            </li>
                            <li>
                                <a href="#">Histori Distribusi Barang</a>
                            </li>
                            <li>
                                <a href="#">Kelola Data Per Golongan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Pengelolaan Manajemen Stok
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Opname Stok </a>
                            </li>
                            <li>
                                <a href="#"> Adjustment Stok  </a>
                            </li>
                            <li>
                                <a href="#"> Approval Adjustment Stok</a>
                            </li>
                            <li>
                                <a href="#"> Pengelolaan Data Max/Min</a>
                            </li>
                            <li>
                                <a href="#"> Pengelolaan Data Re-Order Point</a>
                            </li>
                            <li>
                                <a href="#"> Analisa Stok Turn Over</a>
                            </li>
                            <li>
                                <a href="#"> Histori Opname</a>
                            </li>
                            <li>
                                <a href="#"> Histori Adjustment</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
                <li>
                    <a href="">
                        <i class="fa fa-group"></i> Aktivitas SDM
                        <i class="fa arrow"></i>
                    </a>
                <ul class="sidebar-nav">
                    <li>
                        <a href="#"> Proses Rekruitmen
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Kelola Posisi SDM </a>
                            </li>
                            <li>
                                <a href="#"> Kelola Pengajuan SDM</a>
                            </li>
                            <li>
                                <a href="#">Kelola Publikasi Lowongan Kerja</a>
                            </li>
                            <li>
                                <a href="#">Kelola Prosedur Calon SDM</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Kelola Kinerja SDM
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#">Kelola KPI SDM</a>
                            </li>
                            <li>
                                <a href="#">Kelola SOP SDM</a>
                            </li>
                            <li>
                                <a href="#">Dashboard KPI SDM</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Kelola Abesensi SDM
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#">Kelola Hari Kerja dan Hari Libur</a>
                            </li>
                            <li>
                                <a href="#">Kelola Jenis Cuti</a>
                            </li>
                            <li>
                                <a href="#">Kelola Aturan Kehadiran</a>
                            </li>
                            <li>
                                <a href="#">Daftar Presensi SDM</a>
                            </li>
                            <li>
                                <a href="#">Dashboard Presensi SDM</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Kelola Penggajian
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#">Kelola Cashbon SDM</a>
                            </li>
                            <li>
                                <a href="#">Kelola Bonus, Reward, Punishment SDM</a>
                            </li>
                            <li>
                                <a href="#">Kelola Pembayaran Salary SDM</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
                <li class="">
                    <a href="#">
                        <i class="fa fa-usd"></i> Aktivitas Marketing
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="">
                            <a href="#">Manajemen Marketing
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="">
                                    <a href="#">Kelola Data Promosi Tahunan</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Data Promosi Bulanan</a>
                                </li>
                                <li class="">
                                    <a href="#">Usulan Biaya Promosi</a>
                                </li>
                                <li class="">
                                    <a href="#">Approval Promosi</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Promosi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Manajemen Penjualan Pusat
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="">
                                    <a href="#">Target dan Realisasi Penjualan</a>
                                </li>
                                <li class="">
                                    <a href="#">Terima Order Penjualan Agen</a>
                                </li>
                                <li class="">
                                    <a href="#">Distribusi Penjualan Agen</a>
                                </li>
                                <li class="">
                                    <a href="#">Return Penjualan Agen</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Penjualan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Manajemen Konsinyasi Pusat
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="">
                                    <a href="#">Penempatan Produk ke Konsignee</a>
                                </li>
                                <li class="">
                                    <a href="#">Monitoring Penjualan Konsignee</a>
                                </li>
                                <li class="">
                                    <a href="#">Nota Penjualan Konsignee</a>
                                </li>
                                <li class="">
                                    <a href="#">Penerimaan Uang Pembayaran Penjualan Konsignee</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Konsinyasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Manajemen Marketing Area
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="">
                                    <a href="#">Pendaftaran dan Pengelolaan Data Agen</a>
                                </li>
                                <li class="">
                                    <a href="#">Order Produk ke Pusat</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Data Order Agen</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Data Canvassing</a>
                                </li>
                                <li class="">
                                    <a href="#">Hutang Piutang Marketing Area</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Order Produk</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Penjualan ke Agen</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Canvassing</a>
                                </li>
                                <li class="">
                                    <a href="#">Histori Konsinyasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Manajemen Agen
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="">
                                    <a href="#">Order Produk ke Agen/Pusat</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Penjualan Langsung</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Penjualan Via Website Mutiara Berlian</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Laporan Keuangan Sederhana</a>
                                </li>
                                <li class="">
                                    <a href="#">Kelola Data Inventory Agen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <footer class="sidebar-footer">
        <ul class="sidebar-menu metismenu" id="customize-menu">
            <li>
                <ul>
                    <li class="customize">
                        <div class="customize-item">
                            <div class="row customize-header">
                                <div class="col-4"> </div>
                                <div class="col-4">
                                    <label class="title">fixed</label>
                                </div>
                                <div class="col-4">
                                    <label class="title">static</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="title">Sidebar:</label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="title">Header:</label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="headerPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="title">Footer:</label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="footerPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="customize-item">
                            <ul class="customize-colors">
                                <li>
                                    <span class="color-item color-red" data-theme="red"></span>
                                </li>
                                <li>
                                    <span class="color-item color-orange" data-theme="orange"></span>
                                </li>
                                <li>
                                    <span class="color-item color-green active" data-theme=""></span>
                                </li>
                                <li>
                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                </li>
                                <li>
                                    <span class="color-item color-blue" data-theme="blue"></span>
                                </li>
                                <li>
                                    <span class="color-item color-purple" data-theme="purple"></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- <a href="#">
                    <i class="fa fa-cog"></i> Customize </a>
            </li> -->
        </ul>
    </footer>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
