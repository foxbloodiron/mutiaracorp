@extends('main')

@section('content')

@include('masterdatautama.harga.modal')

<article class="content animated fadeInLeft">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Harga </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Master Data</span>
	    	 / <span class="text-primary" style="font-weight: bold;">Data Harga</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
                            <h3 class="title"> Data Harga </h3>
                        </div>
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	<div class="table-responsive">
	                            <table class="table table-striped table-hover" cellspacing="0" id="table_harga">
	                                <thead class="bg-primary">
	                                    <tr>
	                                    	<th>No</th>
	                                		<th>Kode/Nama Barang</th>
	                                		<th>Item Type</th>
	                                		<th>Item Group</th>
	                                		<th>Harga A</th>
	                                		<th>Harga B</th>
											<th>Harga C</th>
											<th>Barang Rusak</th>
	                                		<th>Aksi</th>
	                                	</tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>1</td>
	                                		<td>BRG001/BarangApayaw</td>
	                                		<td>BP</td>
	                                		<td>Bahan Obat</td>
	                                		<td>
												<input type="text" class="form-control form-control-sm input-rupiah" readonly="" value="0,00">
											</td>
	                                		<td>
												<input type="text" class="form-control form-control-sm input-rupiah" readonly="" value="0,00">
											</td>
	                                		<td>
												<input type="text" class="form-control form-control-sm input-rupiah" readonly="" value="0,00">
											</td>
	                                		<td>
												<input type="text" class="form-control form-control-sm input-rupiah" readonly="" value="0,00">
											</td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
	                                				<button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#detail" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                </tbody>
	                            </table>
	                        </div>
                        </section>
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
		var table = $('#table_harga').DataTable();

		$(document).on('click', '.btn-submit', function(){
			$.toast({
				heading: 'Success',
				text: 'Data Berhasil di Simpan',
				bgColor: '#00b894',
				textColor: 'white',
				loaderBg: '#55efc4',
				icon: 'success'
			})
		})
	});
</script>
@endsection
