<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/recruitment', 'RecruitmentController@index')->name('recruitment.index');

Auth::routes();

Route::group(['middleware' => 'guest'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	// !====================================================== Master Data Utama ======================================================!

	Route::get('/masterdatautama/datapegawai/index', 'MasterController@kelolapegawai')->name('kelolapegawai.index');
	Route::get('/masterdatautama/datapegawai/edit', 'MasterController@edit_kelolapegawai')->name('kelolapegawai.edit');
	Route::get('/masterdatautama/datapegawai/create', 'MasterController@create_kelolapegawai')->name('kelolapegawai.create');

	Route::get('/masterdatautama/produk/index', 'MasterController@dataproduk')->name('dataproduk.index');
	Route::get('/masterdatautama/produk/edit', 'MasterController@edit_dataproduk')->name('dataproduk.edit');
	Route::get('/masterdatautama/produk/create', 'MasterController@create_dataproduk')->name('dataproduk.create');
	Route::get('/masterdatautama/produk/jenis/edit', 'MasterController@edit_datajenisproduk')->name('datajenisproduk.edit');
	Route::get('/masterdatautama/produk/jenis/create', 'MasterController@create_datajenisproduk')->name('datajenisproduk.create');

	Route::get('/masterdatautama/variasisatuanproduk/index', 'MasterController@variasisatuanproduk')->name('variasisatuan.index');
	Route::get('/masterdatautama/variasisatuanproduk/create', 'MasterController@create_variasisatuanproduk')->name('variasisatuan.create');
	Route::get('/masterdatautama/variasisatuanproduk/edit', 'MasterController@edit_variasisatuanproduk')->name('variasisatuan.edit');

	Route::get('/masterdatautama/harga/index', 'MasterController@dataharga')->name('dataharga.index');
	Route::get('/masterdatautama/harga/create', 'MasterController@create_dataharga')->name('dataharga.create');
	Route::get('/masterdatautama/harga/edit', 'MasterController@edit_dataharga')->name('dataharga.edit');

	Route::get('/masterdatautama/suplier/index', 'MasterController@suplier')->name('suplier.index');
	Route::get('/masterdatautama/suplier/create', 'MasterController@create_suplier')->name('suplier.create');
	Route::get('/masterdatautama/suplier/edit', 'MasterController@edit_suplier')->name('suplier.edit');

	Route::get('/masterdatautama/cabang/index', 'MasterController@cabang')->name('cabang.index');
	Route::get('/masterdatautama/cabang/create', 'MasterController@create_cabang')->name('cabang.create');
	Route::get('/masterdatautama/cabang/edit', 'MasterController@edit_cabang')->name('cabang.edit');

	Route::get('/masterdatautama/agen/index', 'MasterController@agen')->name('agen.index');
	Route::get('/masterdatautama/agen/create', 'MasterController@create_agen')->name('agen.create');
	Route::get('/masterdatautama/agen/edit', 'MasterController@edit_agen')->name('agen.edit');


	Route::get('/masterdatautama/agen/kelolaagen/index', 'MasterController@kelolaagen')->name('kelolaagen.index');

	Route::get('/masterdatautama/datasatuan/index', 'MasterController@datasatuan')->name('datasatuan.index');
	Route::get('/masterdatautama/datasatuan/create', 'MasterController@create_datasatuan')->name('datasatuan.create');
	Route::get('/masterdatautama/datasatuan/edit', 'MasterController@edit_datasatuan')->name('datasatuan.edit');
	// !===================================================== End Master Data Utama =====================================================!
	
	// !===================================================== PRODUKSI =====================================================!
	// Order Produksi
    Route::get('/produksi/orderproduksi/index', 'ProduksiController@order_produksi')->name('order.index');
    Route::get('/produksi/orderproduksi/create', 'ProduksiController@create_produksi')->name('order.create');
    Route::get('/produksi/orderproduksi/edit', 'ProduksiController@edit_produksi')->name('order.edit');

	// Penerimaan Barang
	Route::get('/produksi/penerimaanbarang/index', 'ProduksiController@penerimaan_barang')->name('penerimaan.index');
	Route::get('/produksi/penerimaanbarang/create', 'ProduksiController@create_penerimaan_barang')->name('penerimaan.create');
	// Pembayaran
	Route::get('/produksi/pembayaran/index', 'ProduksiController@pembayaran')->name('pembayaran.index');
	// Return Produksi
	Route::get('/produksi/returnproduksi/index', 'ProduksiController@return_produksi')->name('return.index');
	Route::get('/produksi/returnproduksi/create', 'ProduksiController@create_return_produksi')->name('return.create');
	// !===================================================== END PRODUKSI =====================================================!

	// !===================================================== INVENTORY =====================================================!
	// Barang Masuk
	Route::get('/inventory/barangmasuk/index', 'InventoryController@barangmasuk_index')->name('barangmasuk.index');
	Route::get('/inventory/barangmasuk/create', 'InventoryController@barangmasuk_create')->name('barangmasuk.create');
	Route::get('/inventory/barangmasuk/edit', 'InventoryController@barangmasuk_edit')->name('barangmasuk.edit');
	// Barang Keluar
	Route::get('/inventory/barangkeluar/index', 'InventoryController@barangkeluar_index')->name('barangkeluar.index');
	Route::get('/inventory/barangkeluar/create', 'InventoryController@barangkeluar_create')->name('barangkeluar.create');
	Route::get('/inventory/barangkeluar/edit', 'InventoryController@barangkeluar_edit')->name('barangkeluar.edit');

	// Distribusi Barang
	Route::get('/inventory/distribusibarang/index', 'InventoryController@distribusibarang_index')->name('distribusibarang.index');
	Route::get('/inventory/distribusibarang/create', 'InventoryController@distribusibarang_create')->name('distribusibarang.create');
	Route::get('/inventory/distribusibarang/edit', 'InventoryController@distribusibarang_edit')->name('distribusibarang.edit');
	// Manajemen Stok
	Route::get('/inventory/manajemenstok/index', 'InventoryController@manajemenstok_index')->name('manajemenstok.index');
	Route::get('/inventory/manajemenstok/create', 'InventoryController@manajemenstok_create')->name('manajemenstok.create');
	Route::get('/inventory/manajemenstok/edit', 'InventoryController@manajemenstok_edit')->name('manajemenstok.edit');
	// !===================================================== END INVENTORY =====================================================!

	// !===================================================== SDM =====================================================!
	// Rekruitmen
	Route::get('/sdm/prosesrekruitmen/index', 'SDMController@proses_rekruitmen')->name('rekruitmen.index');
	Route::get('/sdm/prosesrekruitmen/process', 'SDMController@process')->name('rekruitmen.process');
	Route::get('/sdm/prosesrekruitmen/preview', 'SDMController@preview')->name('rekruitmen.preview');
	// Kinerja
	Route::get('/sdm/kinerjasdm/index', 'SDMController@kinerja')->name('kinerjasdm.index');
	// Absensi
	Route::get('/sdm/absensisdm/index', 'SDMController@absensi')->name('absensisdm.index');
	// Penggajian
	Route::get('/sdm/penggajian/index', 'SDMController@penggajian')->name('penggajian.index');
	// TAB MANAJEMEN
	Route::get('/sdm/penggajian/manajemen/create', 'SDMController@create_manajemen')->name('manajemen.create');
	Route::get('/sdm/penggajian/manajemen/edit', 'SDMController@edit_manajemen' )->name('manajemen.edit');
	// END
	// TAB TUNJANGAN
	Route::get('/sdm/penggajian/tunjangan/create', 'SDMController@create_tunjangan')->name('tunjangan.create');
	Route::get('/sdm/penggajian/tunjangan/edit', 'SDMController@edit_tunjangan')->name('tunjangan.edit');
	Route::get('/sdm/penggajian/tunjangan/setting', 'SDMController@set_tunjangan')->name('tunjangan.setting');
	Route::get('/sdm/penggajian/tunjangan/edit_setting_tunjangan', 'SDMController@edit_set_tunjangan')->name('tunjangan.setting.edit');
	// END
	// TAB PRODUKSI
	Route::get('/sdm/penggajian/produksi/create', 'SDMController@create_produksi')->name('produksi.create');
	Route::get('/sdm/penggajian/produksi/edit', 'SDMController@edit_produksi')->name('produksi.edit');
	// END
	// !===================================================== END SDM =====================================================!

	// !===================================================== Marketing =====================================================!
	// Manajemen Marketing
    Route::get('/marketing/manajemenmarketing/index', 'MarketingController@marketing')->name('mngmarketing.index');
    Route::get('/marketing/manajemenmarketing/create-year-promotion', 'MarketingController@year_promotion_create')->name('yearpromotion.create');
    Route::get('/marketing/manajemenmarketing/edit-year-promotion', 'MarketingController@year_promotion_edit')->name('yearpromotion.edit');
    Route::get('/marketing/manajemenmarketing/create-month-promotion', 'MarketingController@month_promotion_create')->name('monthpromotion.create');
    Route::get('/marketing/manajemenmarketing/edit-month-promotion', 'MarketingController@month_promotion_edit')->name('monthpromotion.edit');
    // Target dan Realisasi Penjualan
    Route::get('/marketing/targetrealisasipenjualan/index', 'MarketingController@targetrealisasi')->name('targetrealisasi.index');
	Route::get('/marketing/targetrealisasipenjualan/targetrealisasi/create', 'MarketingController@targetrealisasi_create')->name('targetrealisasi.create');
	Route::get('/marketing/targetrealisasipenjualan/targetrealisasi/status', 'MarketingController@status_target')->name('targetrealisasi.status');
	// Penjualan Pusat
	Route::get('/marketing/penjualanpusat/index', 'MarketingController@penjualan')->name('penjualanpusat.index');
	Route::get('/marketing/penjualanpusat/returnpenjualan/create', 'MarketingController@returnpenjualanagen_create')->name('returnpenjualanagen.create');
	// Konsinyasi Pusat
	Route::get('/marketing/konsinyasipusat/index', 'MarketingController@konsinyasipusat')->name('konsinyasipusat.index');
	Route::get('/marketing/konsinyasipusat/penempatanproduk/create', 'MarketingController@create_penempatanproduk')->name('penempatanproduk.create');
	Route::get('/marketing/konsinyasipusat/penempatanproduk/edit', 'MarketingController@edit_penempatanproduk')->name('penempatanproduk.edit');
	// Marketing Area
	Route::get('/marketing/marketingarea/index', 'MarketingController@marketing_area')->name('marketingarea.index');
	Route::get('/marketing/marketingarea/orderproduk/create', 'MarketingController@create_orderproduk')->name('orderproduk.create');
	Route::get('/marketing/marketingarea/orderproduk/edit', 'MarketingController@edit_orderproduk')->name('orderproduk.edit');
	Route::get('/marketing/marketingarea/keloladataorder/create', 'MarketingController@create_keloladataorder')->name('keloladataorder.create');
	Route::get('/marketing/marketingarea/keloladataorder/edit', 'MarketingController@edit_keloladataorder')->name('keloladataorder.edit');
	Route::get('/marketing/marketingarea/datacavassing/create', 'MarketingController@create_datacanvassing')->name('datacanvassing.create');
	Route::get('/marketing/marketingarea/datacavassing/edit', 'MarketingController@edit_datacanvassing')->name('datacanvassing.edit');
	Route::get('/marketing/marketingarea/datakonsinyasi/create', 'MarketingController@create_datakonsinyasi')->name('datakonsinyasi.create');
	Route::get('/marketing/marketingarea/datakonsinyasi/edit', 'MarketingController@edit_datakonsinyasi')->name('datakonsinyasi.edit');
	// Manajemen Agen
	Route::get('/marketing/agen/index', 'MarketingController@agen')->name('mngagen.index');
	Route::get('/marketing/agen/orderproduk/create', 'MarketingController@create_orderprodukagenpusat')->name('orderagenpusat.create');
	Route::get('/marketing/agen/orderproduk/edit', 'MarketingController@edit_orderprodukagenpusat')->name('orderagenpusat.edit');
	// !===================================================== END Marketing =====================================================!



}); 
// End Route Group
