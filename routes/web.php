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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	// Master
	Route::get('/master/databarang/databarang', 'MasterController@databarang')->name('databarang');
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
	// Penerimaan Barang
	Route::get('/produksi/penerimaanbarang/index', 'ProduksiController@penerimaan_barang')->name('penerimaan.index');
	// Pembayaran
	Route::get('/produksi/pembayaran/index', 'ProduksiController@pembayaran')->name('pembayaran.index');
	// Return Produksi
	Route::get('/produksi/returnproduksi/index', 'ProduksiController@return_produksi')->name('return.index');
	// !===================================================== END PRODUKSI =====================================================!

	// !===================================================== INVENTORY =====================================================!
	// Barang Masuk
	Route::get('/inventory/barangmasuk/index', 'InventoryController@barangmasuk')->name('barangmasuk');
	// Barang Keluar
	// Distribusi Barang
	// Manajemen Stok
	// !===================================================== END INVENTORY =====================================================!

	// !===================================================== SDM =====================================================!
	// Rekruitmen
	Route::get('/sdm/prosesrekruitmen/index', 'SDMController@proses_rekruitmen')->name('rekruitmen.index');
	// Kinerja
	Route::get('/sdm/kinerjasdm/index', 'SDMController@kinerja')->name('kinerjasdm.index');
	// Absensi
	Route::get('/sdm/absensisdm/index', 'SDMController@absensi')->name('absensisdm.index');
	// Penggajian
	Route::get('/sdm/penggajian/index', 'SDMController@penggajian')->name('penggajian.index');
	// !===================================================== END SDM =====================================================!

	// !===================================================== Marketing =====================================================!
	// Manajemen Marketing
	Route::get('/marketing/manajemenmarketing/index', 'MarketingController@marketing')->name('mngmarketing.index');
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
