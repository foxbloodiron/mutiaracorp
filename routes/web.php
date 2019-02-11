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
    return redirect('home');
});

Route::get('/recruitment', 'RecruitmentController@index')->name('recruitment.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	// Mastern	Route::get('/master/databarang/databarang', 'MasterController@databarang')->name('databarang');
	Route::get('/master/databarang/tambah_databarang', 'MasterController@tambah_databarang')->name('tambah_databarang');
	Route::get('/master/databarang/edit_databarang', 'MasterController@edit_databarang')->name('edit_databarang');
	Route::get('/master/datasuplier/datasuplier', 'MasterController@datasuplier')->name('datasuplier');
	Route::get('/master/datasuplier/tambah_datasuplier', 'MasterController@tambah_datasuplier')->name('tambah_datasuplier');
	Route::get('/master/datasuplier/edit_datasuplier', 'MasterController@edit_datasuplier')->name('edit_datasuplier');
	Route::get('/master/dataarmada/dataarmada', 'MasterController@dataarmada')->name('dataarmada');
	Route::get('/master/dataarmada/tambah_dataarmada', 'MasterController@tambah_dataarmada')->name('tambah_dataarmada');
	Route::get('/master/dataarmada/edit_dataarmada', 'MasterController@edit_dataarmada')->name('edit_dataarmada');
	Route::get('/master/dataarmada/modal_dataarmada', 'MasterController@modal_dataarmada')->name('modal_dataarmada');
	Route::get('/master/datacustomer/datacustomer', 'MasterController@datacustomer')->name('datacustomer');
	Route::get('/master/datacustomer/tambah_datacustomer', 'MasterController@tambah_datacustomer')->name('tambah_datacustomer');
	Route::get('/master/datacustomer/edit_datacustomer', 'MasterController@edit_datacustomer')->name('edit_datacustomer');
	Route::get('/master/datapegawai/datapegawai', 'MasterController@datapegawai')->name('datapegawai');
	Route::get('/master/datapegawai/tambah_datapegawai', 'MasterController@tambah_datapegawai')->name('tambah_datapegawai');
	Route::get('/master/datapegawai/edit_datapegawai', 'MasterController@edit_datapegawai')->name('edit_datapegawai');

	// !====================================================== Master Data Utama ======================================================!

	Route::get('/masterdatautama/datapegawai/index', 'MasterController@kelolapegawai')->name('kelolapegawai');
	Route::get('/masterdatautama/datapegawai/edit', 'MasterController@edit_kelolapegawai')->name('edit_kelolapegawai');
	Route::get('/masterdatautama/datapegawai/create', 'MasterController@tambah_kelolapegawai')->name('tambah_kelolapegawai');

	Route::get('/masterdatautama/produk/index', 'MasterController@dataproduk')->name('dataproduk');
	Route::get('/masterdatautama/produk/edit', 'MasterController@edit_dataproduk')->name('edit_dataproduk');
	Route::get('/masterdatautama/produk/create', 'MasterController@tambah_dataproduk')->name('tambah_dataproduk');
	Route::get('/masterdatautama/produk/jenis/edit', 'MasterController@edit_datajenisproduk')->name('edit_datajenisproduk');
	Route::get('/masterdatautama/produk/jenis/create', 'MasterController@tambah_datajenisproduk')->name('tambah_datajenisproduk');

	Route::get('/masterdatautama/harga/index', 'MasterController@dataharga')->name('dataharga');
	Route::get('/masterdatautama/harga/edit', 'MasterController@edit_dataharga')->name('edit_dataharga');

	Route::get('/masterdatautama/suplier/index', 'MasterController@suplier')->name('suplier.index');
	Route::get('/masterdatautama/suplier/tambah_suplier', 'MasterController@tambah_suplier')->name('tambah_suplier');
	Route::get('/masterdatautama/suplier/edit_suplier', 'MasterController@edit_suplier')->name('edit_suplier');

	Route::get('/masterdatautama/cabang/index', 'MasterController@cabang')->name('cabang.index');
	Route::get('/masterdatautama/cabang/tambah_cabang', 'MasterController@tambah_cabang')->name('tambah_cabang');
	Route::get('/masterdatautama/cabang/edit_cabang', 'MasterController@edit_cabang')->name('edit_cabang');

	Route::get('/masterdatautama/agen/index', 'MasterController@agen')->name('agen.index');
	Route::get('/masterdatautama/agen/tambah_agen', 'MasterController@tambah_agen')->name('tambah_agen');
	Route::get('/masterdatautama/agen/edit_agen', 'MasterController@edit_agen')->name('edit_agen');


	Route::get('/masterdatautama/agen/kelolaagen/index', 'MasterController@kelolaagen')->name('kelolaagen');

	Route::get('/masterdatautama/datasatuan/datasatuan', 'MasterController@datasatuan')->name('datasatuan');
	Route::get('/masterdatautama/datasatuan/tambah_datasatuan', 'MasterController@tambah_datasatuan')->name('tambah_datasatuan');
	Route::get('/masterdatautama/datasatuan/edit_datasatuan', 'MasterController@edit_datasatuan')->name('edit_datasatuan');
	// !===================================================== End Master Data Utama =====================================================!
	
	// !===================================================== PRODUKSI =====================================================!
	// Order Produksi
    Route::get('/produksi/orderproduksi/index', 'ProduksiController@order_produksi')->name('order.index');
    Route::get('/produksi/orderproduksi/create', 'ProduksiController@tambah_produksi')->name('order.create');
    Route::get('/produksi/orderproduksi/edit', 'ProduksiController@edit_produksi')->name('order.edit');

	// Penerimaan Barang
	Route::get('/produksi/penerimaanbarang/index', 'ProduksiController@penerimaan_barang')->name('penerimaan.index');
	Route::get('/produksi/penerimaanbarang/create', 'ProduksiController@tambah_penerimaan_barang')->name('tambah_penerimaan_barang');
	// Pembayaran
	Route::get('/produksi/pembayaran/index', 'ProduksiController@pembayaran')->name('pembayaran.index');
	// Return Produksi
	Route::get('/produksi/returnproduksi/index', 'ProduksiController@return_produksi')->name('return.index');
	Route::get('/produksi/returnproduksi/create', 'ProduksiController@tambah_return_produksi')->name('return.create');
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
	// Penjualan Pusat
	Route::get('/marketing/penjualanpusat/index', 'MarketingController@penjualan')->name('penjualanpusat.index');
	// Konsinyasi Pusat
	Route::get('/marketing/konsinyasipusat/index', 'MarketingController@kosinyasi')->name('kosinyasi.index');
	// Marketing Area
	Route::get('/marketing/marketingarea/index', 'MarketingController@marketing_area')->name('marketingarea.index');
	// Manajemen Agen
	Route::get('/marketing/agen/index', 'MarketingController@agen')->name('mngagen.index');
	// !===================================================== END Marketing =====================================================!



}); 
// End Route Group
