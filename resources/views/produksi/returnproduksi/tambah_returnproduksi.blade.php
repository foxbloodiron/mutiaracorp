@extends('main')

@section('content')



<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Tambah Return Produksi </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Aktifitas Produksi</span>
	    	 / <a href="{{route('return.index')}}">Return Produksi</a>
	    	 / <span class="text-primary font-weight-bold">Tambah Return Produksi</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
                            <h3 class="title"> Tambah Return Produksi </h3>
                        </div>
                        <div class="header-block pull-right">
                			<a class="btn btn-secondary btn-sm" href="{{route('return.index')}}"><i class="fa fa-arrow-left"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	<div class="row">
                        		<div class="col-md-3 col-sm-6 col-12">
                        			<label>Metode Return</label>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-12">
                        			<div class="form-group">
                        				<select class="form-control form-control-sm">
                        					<option value="">--Pilih Metode Return--</option>
                        					<option value="1">Potong Nota</option>
                        					<option value="2">Tukar Barang</option>
                        					<option value="3">Salah Barang</option>
                        					<option value="4">Salah Alamat</option>
                        					<option value="5">Kurang Barang</option>
                        				</select>
                        			</div>
                        		</div>
                        	</div>

                        	<fieldset class="mt-3">
                        		<div class="row">
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Nota Penjualan</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					<select class="form-control form-control-sm select2">
                        						<option value="">--Pilih Nota--</option>
                        					</select>
                        				</div>
                        			</div>

                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Jenis Return</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					<select class="form-control form-control-sm">
                        						<option value="">Barang Rusak</option>
                        						<option value="">Kelebihan Barang</option>
                        					</select>
                        				</div>
                        			</div>

                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Tanggal Return</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					
                        					<input type="text" class="form-control form-control-sm datepicker" value="{{date('d-m-Y')}}" name="">
                        				</div>
                        			</div>

                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Metode Pembayaran</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					
                        					<input type="text" class="form-control form-control-sm" readonly="" name="">
                        				</div>
                        			</div>

                        		</div>

                    			<hr>

                    			<div class="row">
                    				
                    				<div class="col-md-3 col-sm-6 col-12">
                    					<label>Detail Pelanggan</label>
                    				</div>

                    				<div class="col-md-9 col-sm-6 col-12">
                    					<div class="form-group">
                    						<input type="text" readonly="" class="form-control form-control-sm" name="">
                    					</div>
                    				</div>


                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Total Return</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					
                        					<input type="text" class="form-control form-control-sm" readonly="" name="">
                        				</div>
                        			</div>

                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>S Gross</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					
                        					<input type="text" class="form-control form-control-sm" readonly="" name="">
                        				</div>
                        			</div>

                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Total Diskon</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					
                        					<input type="text" class="form-control form-control-sm" readonly="" name="">
                        				</div>
                        			</div>

                        			<div class="col-md-3 col-sm-6 col-12">
                        				<label>Total Penjualan Nett</label>
                        			</div>
                        			<div class="col-md-3 col-sm-6 col-12">
                        				<div class="form-group">
                        					
                        					<input type="text" class="form-control form-control-sm" readonly="" name="">
                        				</div>
                        			</div>
                    			</div>
                    			<hr>
                    			<div class="table-responsive">
                    				<table class="table table-bordered table-hover table-striped" cellspacing="0" id="tabel_return">
                    					<thead class="bg-primary">
                    						<tr>
                    							<th>Nama</th>
                    							<th>Jumlah</th>
                    							<th>Return</th>
                    							<th>Satuan</th>
                    							<th>Harga</th>
                    							<th>Disc Percent</th>
                    							<th>Disc Value</th>
                    							<th>Jumlah Return</th>
                    							<th>Total</th>
                    						</tr>
                    					</thead>	
                    				</table>
                    			</div>
                        	</fieldset>

                        </section>
                    </div>
                    <div class="card-footer text-right">
                    	<button class="btn btn-primary" type="button">Simpan</button>
                    	<a href="{{route('return.index')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection

@section('extra_script')
<script type="text/javascript">
	$(document).ready(function(){
		var eueue = $('#tabel_return').DataTable();
	});
</script>
@endsection
