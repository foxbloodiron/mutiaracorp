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
                <li>
                    <a href="">
                        <i class="fa fa-sitemap"></i> Master Data Utama
                        <i class="fa arrow"></i>
                    </a>
                <ul class="sidebar-nav">
                    <li>
                        <a href="#"> Master Data Pegawai
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Kelola Data Pegawai </a>
                            </li>
                            <li>
                                <a href="#"> Profil Data Pegawai </a>
                            </li>
                            <li>
                                <a href="#">Ganti Password Pegawai</a>
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
                <li>
                    <a href="">
                        <i class="fa fa-sitemap"></i> Aktivitas Produksi
                        <i class="fa arrow"></i>
                    </a>
                <ul class="sidebar-nav">
                    <li>
                        <a href="#"> Order Produksi
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Pembuatan Order Produksi </a>
                            </li>
                            <li>
                                <a href="#"> Penentuan Termin Pembayaran</a>
                            </li>
                            <li>
                                <a href="#">Histori Order Produksi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Penerimaan Barang
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Data Penerimaan Barang </a>
                            </li>
                            <li>
                                <a href="#"> Histori Penerimaan Barang </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Pembayaran
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Pencatatan Data Pembayaran </a>
                            </li>
                            <li>
                                <a href="#"> Histori Pembayaran </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Return Produksi
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Pencatatan Data Return </a>
                            </li>
                            <li>
                                <a href="#"> Perlakuan Return  </a>
                            </li>
                            <li>
                                <a href="#">Histori Return Produksi</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
                <li>
                    <a href="">
                        <i class="fa fa-sitemap"></i> Aktivitas Inventory
                        <i class="fa arrow"></i>
                    </a>
                <ul class="sidebar-nav">
                    <li>
                        <a href="#"> Pengelolaan Barang Masuk
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#"> Pencatatan Barang Masuk </a>
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
                <li class="{{Request::is('suplier/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-user"></i> Suplier
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('suplier/barangsuplier/*') ? 'active' : ''}}">
                            <a href="{{url('suplier/barangsuplier/barangsuplier')}}">Item Barang Suplier</a>
                        </li>
                        <li class="{{Request::is('suplier/dataarmada/*') ? 'active' : ''}}">
                            <a href="{{url('suplier/dataarmada/dataarmada')}}">Data Armada</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('purchasing/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-credit-card"></i> Purchasing
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('purchasing/rencanapembelian/*') ? 'active' : ''}}">
                            <a href="{{route('rencanapembelian')}}"> Rencana Pembelian</a>
                        </li>
                        <li class="{{Request::is('purchasing/orderpembelian/*') ? 'active' : ''}}">
                            <a href="{{route('orderpembelian')}}">Order Pembelian</a>
                        </li>
                        <li class="{{Request::is('purchasing/returnpembelian/*') ? 'active' : ''}}">
                            <a href="{{route('returnpembelian')}}">Return Pembelian</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('stok/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-desktop"></i> Stok
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('stok/dataadonan/*') ? 'active' : ''}}">
                            <a href="{{url('stok/dataadonan/dataadonan')}}">Data Adonan</a>
                        </li>
                        <li class="{{Request::is('stok/tipemenghitunghpp/*') ? 'active' : ''}}">
                            <a href="{{url('stok/tipemenghitunghpp/tipemenghitunghpp')}}">Tipe Menghitung HPP</a>
                        </li>
                        <li class="{{Request::is('stok/pencatatanbarangmasuk/*') ? 'active' : ''}}">
                            <a href="{{url('stok/pencatatanbarangmasuk/pencatatanbarangmasuk')}}">Pencatatan Barang Masuk</a>
                        </li>
                        <li class="{{Request::is('stok/penggunaanbahanbaku/*') ? 'active' : ''}}">
                            <a href="{{url('stok/penggunaanbahanbaku/penggunaanbahanbaku')}}">Penggunaan Bahan Baku </a>
                        </li>
                        <li class="{{Request::is('stok/opnamebahanbaku/*') ? 'active' : ''}}">
                            <a href="{{url('stok/opnamebahanbaku/opnamebahanbaku')}}">Opname Bahan Baku </a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('produksi/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-product-hunt"></i> Produksi
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('produksi/perencanaanproduksi/*') ? 'active' : ''}}">
                            <a href="{{url('produksi/perencanaanproduksi/perencanaanproduksi')}}"> Perencanaan Produksi </a>
                        </li>
                        <li class="{{Request::is('produksi/produksitanparencana/*') ? 'active' : ''}}">
                            <a href="{{url('produksi/produksitanparencana/produksitanparencana')}}"> Pencatatan Produksi Tanpa Rencana </a>
                        </li>
                        <li  class="{{Request::is('produksi/produksirencana/*') ? 'active' : ''}}">
                            <a href="{{url('produksi/produksirencana/produksirencana')}}"> Pencatatan Produksi Dengan Rencana </a>
                        </li>
                        <li  class="{{Request::is('produksi/pencatatanhasil/*') ? 'active' : ''}}">
                            <a href="{{url('produksi/pencatatanhasil/pencatatanhasil')}}"> Pencatatan Hasil Produksi</a>
                        </li>
                        <li  class="{{Request::is('produksi/upahboronganproduksi/*') ? 'active' : ''}}">
                            <a href="{{url('produksi/upahboronganproduksi/upahboronganproduksi')}}"> Upah Borongan Produksi</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::is('customer/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-group"></i> Customer
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li  class="{{Request::is('customer/historitransaksi/*') ? 'active' : ''}}">
                            <a href="{{url('customer/historitransaksi/historitransaksi')}}"> Histori Transaksi</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{Request::is('penjualan/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-usd"></i> Penjualan
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li  class="{{Request::is('penjualan/penjualanorder/*') ? 'active' : ''}}">
                            <a href="{{url('penjualan/penjualanorder/penjualanorder')}}"> Pencatatan Penjualan Dengan Order</a>
                        </li>
                        <li class="{{Request::is('penjualan/penjualantanpaorder/*') ? 'active' : ''}}">
                            <a href="{{url('penjualan/penjualantanpaorder/penjualantanpaorder')}}"> Pencatatan Penjualan Tanpa Order</a>
                        </li>
                        <li class="{{Request::is('penjualan/diskonpenjualan/*') ? 'active' : ''}}">
                            <a href="{{url('penjualan/diskonpenjualan/diskonpenjualan')}}"> Diskon Penjualan</a>
                        </li>
                        <li class="{{Request::is('penjualan/penjualanproject/*') ? 'active' : ''}}">
                            <a href="{{url('penjualan/penjualanproject/penjualanproject')}}"> Penjualan Project</a>
                        </li>
                        <li class="{{Request::is('penjualan/returnpenjualan/*') ? 'active' : ''}}">
                            <a href="{{url('penjualan/returnpenjualan/returnpenjualan')}}"> Return Penjualan</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{Request::is('pengiriman/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-truck"></i> Pengiriman
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('pengiriman/perencanaanpengiriman/*') ? 'active' : ''}}">
                            <a href="{{url('pengiriman/perencanaanpengiriman/perencanaanpengiriman')}}"> Perencanaan Pengiriman</a>
                        </li>
                        <li class="{{Request::is('pengiriman/upahboronganpengiriman/*') ? 'active' : ''}}">
                            <a href="{{url('pengiriman/upahboronganpengiriman/upahboronganpengiriman')}}"> Upah Borongan Pengiriman</a>
                        </li>

                        <li class="{{Request::is('pengiriman/suratjalan/*') ? 'active' : ''}}">
                            <a href="{{url('pengiriman/suratjalan/suratjalan')}}"> Surat Jalan</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{Request::is('biayadanbeban/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-balance-scale "></i> Biaya dan Beban
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('biayadanbeban/upahborongan/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/upahborongan/upahborongan')}}"> Upah Borongan</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/upahharian/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/upahharian/upahharian')}}"> Upah Harian</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/upahbulanan/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/upahbulanan/upahbulanan')}}"> Upah Bulanan</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/sewalahan/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/sewalahan/sewalahan')}}"> Sewa Lahan</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/biayaoperasional/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/biayaoperasional/biayaoperasional')}}"> Biaya Operasional</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/biayabahanbakar/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/biayabahanbakar/biayabahanbakar')}}"> Biaya Bahan Bakar</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/biayakonsumsi/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/biayakonsumsi/biayakonsumsi')}}"> Biaya Konsumsi</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/biayakesehatan/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/biayakesehatan/biayakesehatan')}}"> Biaya Kesehatan</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/alattuliskantor/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/alattuliskantor/alattuliskantor')}}"> Alat Tulis Kantor</a>
                        </li>
                        <li class="{{Request::is('biayadanbeban/maintenance/*') ? 'active' : ''}}">
                            <a href="{{url('biayadanbeban/maintenance/maintenance')}}"> Maintenance</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{Request::is('danasosial/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-users"></i> Dana Sosial
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('danasosial/polsek/*') ? 'active' : ''}}">
                            <a href="{{url('danasosial/polsek/polsek')}}"> Polsek</a>
                        </li>
                        <li class="{{Request::is('danasosial/koramil/*') ? 'active' : ''}}">
                            <a href="{{url('danasosial/koramil/koramil')}}"> Koramil</a>
                        </li>
                        <li class="{{Request::is('danasosial/kampung/*') ? 'active' : ''}}">
                            <a href="{{url('danasosial/kampung/kampung')}}"> Kampung</a>
                        </li>
                        <li class="{{Request::is('danasosial/masjid/*') ? 'active' : ''}}">
                            <a href="{{url('danasosial/masjid/masjid')}}"> Masjid</a>
                        </li>
                        <li class="{{Request::is('danasosial/sumbangan/*') ? 'active' : ''}}">
                            <a href="{{url('danasosial/sumbangan/sumbangan')}}"> Sumbangan</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{Request::is('aset/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-line-chart"></i> Aset
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('aset/pengadaan/*') ? 'active' : ''}}">
                            <a href="{{url('aset/pengadaan/pengadaan')}}"> Pengadaan</a>
                        </li>
                        <li class="{{Request::is('aset/penyusutan/*') ? 'active' : ''}}">
                            <a href="{{url('aset/penyusutan/penyusutan')}}"> Penyusutan</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{Request::is('keuangan/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-money"></i> Keuangan
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('keuangan/prosesinputtransaksi/*') ? 'active' : ''}}">
                            <a href="{{url('keuangan/prosesinputtransaksi/prosesinputtransaksi')}}"> Proses Input Transaksi</a>
                        </li>
                        <li class="{{Request::is('keuangan/laporaninputtransaksi/*') ? 'active' : ''}}">
                            <a href="{{url('keuangan/laporaninputtransaksi/laporaninputtransaksi')}}"> Laporan Input Transaksi</a>
                        </li>
                        <li class="{{Request::is('keuangan/laporankeuangan/*') ? 'active' : ''}}">
                            <a href="{{url('keuangan/laporankeuangan/laporankeuangan')}}"> Laporan Keuangan</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);">
                                <i class="fa fa-search-plus"></i> Analisa
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li class="{{Request::is('keuangan/a_progress/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_progress/a_progress')}}"> Analisa Progress Terhadap Perencanaan</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_net/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_net/a_net')}}"> Analisa Net Profit Terhadap OCF</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_pertumbuhanaset/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_pertumbuhanaset/a_pertumbuhanaset')}}"> Analisa Pertumbuhan Aset</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_cashflow/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_cashflow/a_cashflow')}}"> Analisa Cashflow</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_commonsize/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_commonsize/a_commonsize')}}"> Analisa Common Size dan Index</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_rasiokeuangan/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_rasiokeuangan/a_rasiokeuangan')}}"> Analisa Rasio Keuangan</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_3bottomline/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_3bottomline/a_3bottomline')}}"> Analisa Three Bottom Line</a>
                                </li>
                                <li class="{{Request::is('keuangan/a_roe/*') ? 'active' : ''}}">
                                    <a href="{{url('keuangan/a_roe/a_roe')}}"> Analisa ROE</a>
                                </li>
                            </ul>
                        </li>

                        
                    </ul>
                </li>
                <li class="{{Request::is('system/*') ? 'active open' : ''}}">
                    <a href="#">
                        <i class="fa fa-user-circle-o "></i> Admin System
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="{{Request::is('system/manajemenuser/*') ? 'active' : ''}}">
                            <a href="{{url('system/manajemenuser/manajemenuser')}}"> Manajemen User</a>
                        </li>
                        <li class="{{Request::is('system/manajemenhakakses/*') ? 'active' : ''}}">
                            <a href="{{url('system/manajemenhakakses/manajemenhakakses')}}"> Manajemen Hak Akses</a>
                        </li>
                        <li class="{{Request::is('system/profilperusahaan/*') ? 'active' : ''}}">
                            <a href="{{url('system/profilperusahaan/profilperusahaan')}}"> Profil Perusahaan</a>
                        </li>
                        <li class="{{Request::is('system/tahunfinansial/*') ? 'active' : ''}}">
                            <a href="{{url('system/tahunfinansial/tahunfinansial')}}"> Tahun Financial</a>
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
