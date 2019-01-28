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

Route::group(['middleware' => 'guest'], function(){

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

	// Aset
	Route::get('/aset/pengadaan/pengadaan', 'AsetController@pengadaan');	
	Route::get('/aset/penyusutan/penyusutan', 'AsetController@penyusutan');	

	// Biaya dan Beban
	Route::get('/biayadanbeban/alattuliskantor/alattuliskantor', 'BiayaController@alattuliskantor')->name('alattuliskantor');
	Route::get('/biayadanbeban/biayabahanbakar/biayabahanbakar', 'BiayaController@biayabahanbakar')->name('biayabahanbakar');
	Route::get('/biayadanbeban/biayakesehatan/biayakesehatan', 'BiayaController@biayakesehatan')->name('biayakesehatan');
	Route::get('/biayadanbeban/biayakonsumsi/biayakonsumsi', 'BiayaController@biayakonsumsi')->name('biayakonsumsi');
	Route::get('/biayadanbeban/biayaoperasional/biayaoperasional', 'BiayaController@biayaoperasional')->name('biayaoperasional');
	Route::get('/biayadanbeban/maintenance/maintenance', 'BiayaController@maintenance')->name('maintenance');
	Route::get('/biayadanbeban/sewalahan/sewalahan', 'BiayaController@sewalahan')->name('sewalahan');
	Route::get('/biayadanbeban/upahborongan/upahborongan', 'BiayaController@upahborongan')->name('upahborongan');
	Route::get('/biayadanbeban/upahborongan/tambah_upahborongan', 'BiayaController@tambah_upahborongan')->name('tambah_upahborongan');
	Route::get('/biayadanbeban/upahbulanan/upahbulanan', 'BiayaController@upahbulanan')->name('upahbulanan');
	Route::get('/biayadanbeban/upahharian/upahharian', 'BiayaController@upahharian')->name('upahharian');

	// Customer
	Route::get('/customer/historitransaksi/historitransaksi', 'CustomerController@historitransaksi');

	// Dana Sosial
	Route::get('/danasosial/kampung/kampung', 'DanaController@kampung');
	Route::get('/danasosial/koramil/koramil', 'DanaController@koramil');
	Route::get('/danasosial/masjid/masjid', 'DanaController@masjid');
	Route::get('/danasosial/polsek/polsek', 'DanaController@polsek');
	Route::get('/danasosial/sumbangan/sumbangan', 'DanaController@sumbangan');

	// Keuangan
	Route::get('/keuangan/a_3bottomline/a_3bottomline', 'KeuanganController@a_3bottomline');
	Route::get('/keuangan/a_cashflow/a_cashflow', 'KeuanganController@a_cashflow');
	Route::get('/keuangan/a_commonsize/a_commonsize', 'KeuanganController@a_commonsize');
	Route::get('/keuangan/a_net/a_net', 'KeuanganController@a_net');
	Route::get('/keuangan/a_pertumbuhanaset/a_pertumbuhanaset', 'KeuanganController@a_pertumbuhanaset');
	Route::get('/keuangan/a_progress/a_progress', 'KeuanganController@a_progress');
	Route::get('/keuangan/a_rasiokeuangan/a_rasiokeuangan', 'KeuanganController@a_rasiokeuangan');
	Route::get('/keuangan/a_roe/a_roe', 'KeuanganController@a_roe');
	Route::get('/keuangan/laporaninputtransaksi/laporaninputtransaksi', 'KeuanganController@laporaninputtransaksi');
	Route::get('/keuangan/laporankeuangan/laporankeuangan', 'KeuanganController@laporankeuangan');
	Route::get('/keuangan/prosesinputtransaksi/prosesinputtransaksi', 'KeuanganController@prosesinputtransaksi');

	// Pengiriman
	Route::get('/pengiriman/perencanaanpengiriman/perencanaanpengiriman', 'PengirimanController@perencanaanpengiriman')->name('perencanaanpengiriman');
	Route::get('/pengiriman/suratjalan/suratjalan', 'PengirimanController@suratjalan')->name('suratjalan');
	Route::get('/pengiriman/upahboronganpengiriman/upahboronganpengiriman', 'PengirimanController@upahboronganpengiriman')->name('upahboronganpengiriman');
	Route::get('/pengiriman/upahboronganpengiriman/proses_upahboronganpengiriman', 'PengirimanController@proses_upahboronganpengiriman')->name('proses_upahboronganpengiriman');

	// Penjualan
	Route::get('/penjualan/diskonpenjualan/diskonpenjualan', 'PenjualanController@diskonpenjualan')->name('diskonpenjualan');
	Route::get('/penjualan/diskonpenjualan/tambah_diskonpenjualan', 'PenjualanController@tambah_diskonpenjualan')->name('tambah_diskonpenjualan');
	Route::get('/penjualan/penjualanorder/penjualanorder', 'PenjualanController@penjualanorder')->name('penjualanorder');
	Route::get('/penjualan/penjualanproject/penjualanproject', 'PenjualanController@penjualanproject')->name('penjualanproject');
	Route::get('/penjualan/penjualantanpaorder/penjualantanpaorder', 'PenjualanController@penjualantanpaorder')->name('penjualantanpaorder');
	Route::get('/penjualan/returnpenjualan/returnpenjualan', 'PenjualanController@returnpenjualan')->name('returnpenjualan');
	Route::get('/penjualan/returnpenjualan/tambah_returnpenjualan', 'PenjualanController@tambah_returnpenjualan')->name('tambah_returnpenjualan');

	// Produksi
	Route::get('/produksi/pencatatanhasil/pencatatanhasil', 'ProduksiController@pencatatanhasil')->name('pencatatanhasil');
	Route::get('/produksi/pencatatanhasil/proses_pencatatanhasil', 'ProduksiController@proses_pencatatanhasil')->name('proses_pencatatanhasil');
	Route::get('/produksi/perencanaanproduksi/perencanaanproduksi', 'ProduksiController@perencanaanproduksi')->name('perencanaanproduksi');
	Route::get('/produksi/produksirencana/produksirencana', 'ProduksiController@produksirencana')->name('produksirencana');
	Route::get('/produksi/produksitanparencana/produksitanparencana', 'ProduksiController@produksitanparencana')->name('produksitanparencana');
	Route::get('/produksi/upahboronganproduksi/upahboronganproduksi', 'ProduksiController@upahboronganproduksi')->name('upahboronganproduksi');
	Route::get('/produksi/upahboronganproduksi/proses_upahboronganproduksi', 'ProduksiController@proses_upahboronganproduksi')->name('proses_upahboronganproduksi');

	// Purchasing
	Route::get('/purchasing/rencanapembelian/rencanapembelian', 'PurchaseController@rencanapembelian')->name('rencanapembelian');
	Route::get('/purchasing/rencanapembelian/tambah_rencanapembelian', 'PurchaseController@tambah_rencanapembelian')->name('tambah_rencanapembelian');
	Route::get('/purchasing/orderpembelian/orderpembelian', 'PurchaseController@orderpembelian')->name('orderpembelian');
	Route::get('/purchasing/orderpembelian/tambah_orderpembelian', 'PurchaseController@tambah_orderpembelian')->name('tambah_orderpembelian');
	Route::get('/purchasing/orderpembelian/tambah_orderpembelian_tanparencana', 'PurchaseController@tambah_orderpembelian_tanparencana')->name('tambah_orderpembelian_tanparencana');
	Route::get('/purchasing/returnpembelian/returnpembelian', 'PurchaseController@returnpembelian')->name('returnpembelian');
	Route::get('/purchasing/returnpembelian/tambah_returnpembelian', 'PurchaseController@tambah_returnpembelian')->name('tambah_returnpembelian');

	// Stok
	Route::get('/stok/dataadonan/dataadonan', 'StokController@dataadonan')->name('dataadonan');
	Route::get('/stok/dataadonan/tambah_dataadonan', 'StokController@tambah_dataadonan')->name('tambah_dataadonan');
	Route::get('/stok/dataadonan/edit_dataadonan', 'StokController@edit_dataadonan')->name('edit_dataadonan');
	Route::get('/stok/opnamebahanbaku/opnamebahanbaku', 'StokController@opnamebahanbaku')->name('opnamebahanbaku');
	Route::get('/stok/pencatatanbarangmasuk/pencatatanbarangmasuk', 'StokController@pencatatanbarangmasuk')->name('pencatatanbarangmasuk');
	Route::get('/stok/pencatatanbarangmasuk/tambah_pencatatanbarangmasuk', 'StokController@tambah_pencatatanbarangmasuk')->name('tambah_pencatatanbarangmasuk');
	Route::get('/stok/penggunaanbahanbaku/penggunaanbahanbaku', 'StokController@penggunaanbahanbaku')->name('penggunaanbahanbaku');
	Route::get('/stok/penggunaanbahanbaku/tambah_penggunaanbahanbaku', 'StokController@tambah_penggunaanbahanbaku')->name('tambah_penggunaanbahanbaku');
	Route::get('/stok/tipemenghitunghpp/tipemenghitunghpp', 'StokController@tipemenghitunghpp')->name('tipemenghitunghpp');

	// Suplier
	Route::get('/suplier/barangsuplier/barangsuplier', 'SuplierController@barangsuplier')->name('barangsuplier');
	Route::get('/suplier/barangsuplier/tambah_barang', 'SuplierController@tambah_barang')->name('tambah_barang');
	Route::get('/suplier/barangsuplier/edit_barang', 'SuplierController@edit_barang')->name('edit_barang');
	Route::get('/suplier/barangsuplier/tambah_suplier', 'SuplierController@tambah_suplier')->name('tambah_suplier');
	Route::get('/suplier/barangsuplier/edit_suplier', 'SuplierController@edit_suplier')->name('edit_suplier');
	Route::get('/suplier/dataarmada/dataarmada', 'SuplierController@dataarmada');

	// Admin System
	Route::get('/system/manajemenhakakses/manajemenhakakses', 'SystemController@manajemenhakakses');
	Route::get('/system/manajemenuser/manajemenuser', 'SystemController@manajemenuser');
	Route::get('/system/profilperusahaan/profilperusahaan', 'SystemController@profilperusahaan');
	Route::get('/system/tahunfinansial/tahunfinansial', 'SystemController@tahunfinansial');

}); // End Route Group
