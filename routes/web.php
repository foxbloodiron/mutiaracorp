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
	Route::get('/master/datasatuan/datasatuan', 'MasterController@datasatuan')->name('datasatuan');
	Route::get('/master/datasatuan/tambah_datasatuan', 'MasterController@tambah_datasatuan')->name('tambah_datasatuan');
	Route::get('/master/datasatuan/edit_datasatuan', 'MasterController@edit_datasatuan')->name('edit_datasatuan');

	// !====================================================== Master Data Utama ======================================================!

	Route::get('/masterdatautama/datapegawai/kelolapegawai/index', 'MasterController@kelolapegawai')->name('kelolapegawai');
	Route::get('/masterdatautama/datapegawai/profilpegawai/index', 'MasterController@profilpegawai')->name('profilpegawai');
	Route::get('/masterdatautama/datapegawai/passwordpegawai/index', 'MasterController@passwordpegawai')->name('passwordpegawai');

	Route::get('/masterdatautama/produk/datajenisproduk/index', 'MasterController@datajenisproduk')->name('datajenisproduk');
	Route::get('/masterdatautama/produk/dataproduk/index', 'MasterController@dataproduk')->name('dataproduk');

	Route::get('/masterdatautama/harga/golonganharga/index', 'MasterController@golonganharga')->name('golonganharga');
	Route::get('/masterdatautama/harga/hargaperitem/index', 'MasterController@hargaperitem')->name('hargaperitem');
	Route::get('/masterdatautama/harga/hargapersatuan/index', 'MasterController@hargapersatuan')->name('hargapersatuan');
	Route::get('/masterdatautama/harga/hargapergolongan/index', 'MasterController@hargapergolongan')->name('hargapergolongan');

	Route::get('/masterdatautama/suplier/index', 'MasterController@suplier')->name('suplier.index');
	Route::get('/masterdatautama/suplier/tambah_kelolasuplier', 'MasterController@tambah_suplier')->name('tambah_suplier');
	Route::get('/masterdatautama/suplier/edit_kelolasuplier', 'MasterController@edit_suplier')->name('edit_suplier');

	Route::get('/masterdatautama/cabang/kelolacabang/index', 'MasterController@kelolacabang')->name('kelolacabang');

	Route::get('/masterdatautama/agen/kelolaagen/index', 'MasterController@kelolaagen')->name('kelolaagen');

	// !===================================================== End Master Data Utama =====================================================!
	
	// PRODUKSI
	// Order Produksi
	Route::get('/produksi/orderproduksi/pembuatan_order/index', 'ProduksiController@pembuatan_order')->name('pembuatan_order.index');
	Route::get('/produksi/orderproduksi/penentuan_termin/index', 'ProduksiController@penentuan_termin')->name('penentuan_termin.index');
	Route::get('/produksi/orderproduksi/histori_order/index', 'ProduksiController@histori_order')->name('histori_order.index');
	// Penerimaan Barang
	Route::get('/produksi/penerimaanbarang/data_penerimaan/index', 'ProduksiController@data_penerimaan')->name('data_penerimaan.index');
	Route::get('/produksi/penerimaanbarang/histori_penerimaan/index', 'ProduksiController@histori_penerimaan')->name('histori_penerimaan.index');
	// Pembayaran
	Route::get('/produksi/pembayaran/pencatatanpembayaran/index', 'ProduksiController@pencatatan_pembayaran')->name('pencatatan_pembayaran.index');
	Route::get('/produksi/pembayaran/historipembayaran/index', 'ProduksiController@histori_pembayaran')->name('histori_pembayaran.index');
	// Return Produksi
	Route::get('/produksi/returnproduksi/pencatatanreturn/index', 'ProduksiController@pencatatan_return')->name('pencatatan_return.index');
	Route::get('/produksi/returnproduksi/perlakuanreturn/index', 'ProduksiController@perlakuan_return')->name('perlakuan_return.index');
	Route::get('/produksi/returnproduksi/historireturn/index', 'ProduksiController@histori_return')->name('histori_return.index');
	// END PRODUKSI

	// Produksi
	Route::get('/produksi/pencatatanhasil/pencatatanhasil', 'ProduksiController@pencatatanhasil')->name('pencatatanhasil');
	Route::get('/produksi/pencatatanhasil/proses_pencatatanhasil', 'ProduksiController@proses_pencatatanhasil')->name('proses_pencatatanhasil');
	Route::get('/produksi/perencanaanproduksi/perencanaanproduksi', 'ProduksiController@perencanaanproduksi')->name('perencanaanproduksi');
	Route::get('/produksi/produksirencana/produksirencana', 'ProduksiController@produksirencana')->name('produksirencana');
	Route::get('/produksi/produksitanparencana/produksitanparencana', 'ProduksiController@produksitanparencana')->name('produksitanparencana');
	Route::get('/produksi/upahboronganproduksi/upahboronganproduksi', 'ProduksiController@upahboronganproduksi')->name('upahboronganproduksi');
	Route::get('/produksi/upahboronganproduksi/proses_upahboronganproduksi', 'ProduksiController@proses_upahboronganproduksi')->name('proses_upahboronganproduksi');


	// INVENTORY
	// Barang Masuk
	Route::get('/inventory/barangmasuk/pencatatanbarang/index', 'InventoryController@pencatatan_barang_masuk')->name('pencatatan_masuk.index');
	Route::get('/inventory/barangmasuk/pencatatanlokasi/index', 'InventoryController@pencatatan_lokasi_masuk')->name('lokasi_masuk.index');
	Route::get('/inventory/barangmasuk/historibarangmasuk/index', 'InventoryController@histori_barang_masuk')->name('histori_masuk.index');
	// Barang Keluar
	// Distribusi Barang
	// Manajemen Stok
	// END INVENTORY



}); 
// End Route Group
