@extends('main')

@section('content')
<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Produk </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Master Data Utama</span> 
	    	/ <span class="text-primary font-weight-bold">Data Produk</span>
	     </p>
	</div>

	<section class="section">

		<ul class="nav nav-pills mb-3">
			<li class="nav-item">
				<a href="" class="nav-link active" data-toggle="tab" data-target="#tab-1">Data Produk</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link" data-toggle="tab" data-target="#tab-2">Data Jenis Produk</a>
			</li>
		</ul>

		<div class="row">

			<div class="col-12">
				
				<div class="tab-content">
					<div class="tab-pane fade in active show" id="tab-1">
						<div class="card">
		                    <div class="card-header bordered p-2">
		                    	<div class="header-block">
			                        <h3 class="title"> Data Produk </h3>
			                    </div>
			                    <div class="header-block pull-right">
		                			<button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data Produk</button>
			                    </div>
		                    </div>
		                    <div class="card-block">
		                        <section>
		                        	
		                        	<div class="table-responsive">
			                            <table class="table table-striped table-hover" cellspacing="0" id="tabel_jenisproduk">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>No</th>
									                <th>ID Pegawai</th>
									                <th>NIK</th>
									                <th>Nama Pegawai</th>
									                <th>Alamat</th>
									                <th>Status Karyawan</th>
									                <th>Aksi</th>
									            </tr>
			                                </thead>
			                                <tbody>
			                                	<tr>
			                                		<td>1</td>
			                                		<td>PG/001</td>
			                                		<td>1111</td>
			                                		<td>Alpha</td>
			                                		<td>Jl. Alpha</td>
			                                		<td>Sudah Menikah</td>
			                                		<td>
			                                			<div class="btn-group btn-group-sm">
			                                				<button class="btn btn-warning btn-edit" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
			                                				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
			                                			</div>
			                                		</td>
			                                	</tr>
			                                	<tr>
			                                		<td>2</td>
			                                		<td>PG/002</td>
			                                		<td>1112</td>
			                                		<td>Bravo</td>
			                                		<td>Jl. Bravo</td>
			                                		<td>Sudah Menikah</td>
			                                		<td>
			                                			<div class="btn-group btn-group-sm">
															<button class="btn btn-warning btn-edit" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
			                                				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
			                                			</div>
			                                		</td>
			                                	</tr>
			                                	<tr>
			                                		<td>3</td>
			                                		<td>PG/003</td>
			                                		<td>1113</td>
			                                		<td>Charlie</td>
			                                		<td>Jl. Charlie</td>
			                                		<td>Belum Menikah</td>
			                                		<td>
			                                			<div class="btn-group btn-group-sm">
															<button class="btn btn-warning btn-edit" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
			                                				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
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

		            <div class="tab-pane fade in" id="tab-2">
		            	<div class="card">

		            		<div class="card-header p-2 bordered">
		            			<div class="header-block">
			            			<h3 class="title">Data Jenis Produk</h3>
			            		</div>
			            		<div class="header-block pull-right">
			            			<button class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Tambah Data Jenis Produk</button>
			            		</div>
		            		</div>

		            		<div class="card-block">
		            			<section>
			            			
			            			<div class="table-responsive">
			                            <table class="table table-striped table-hover" cellspacing="0" id="tabel_produk">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>No</th>
									                <th>ID Pegawai</th>
									                <th>NIK</th>
									                <th>Nama Pegawai</th>
									                <th>Alamat</th>
									                <th>Status Karyawan</th>
									                <th>Aksi</th>
									            </tr>
			                                </thead>
			                                <tbody>
			                                	<tr>
			                                		<td>1</td>
			                                		<td>PG/001</td>
			                                		<td>1111</td>
			                                		<td>Alpha</td>
			                                		<td>Jl. Alpha</td>
			                                		<td>Sudah Menikah</td>
			                                		<td>
			                                			<div class="btn-group btn-group-sm">
			                                				<button class="btn btn-warning btn-edit" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
			                                				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
			                                			</div>
			                                		</td>
			                                	</tr>
			                                	<tr>
			                                		<td>2</td>
			                                		<td>PG/002</td>
			                                		<td>1112</td>
			                                		<td>Bravo</td>
			                                		<td>Jl. Bravo</td>
			                                		<td>Sudah Menikah</td>
			                                		<td>
			                                			<div class="btn-group btn-group-sm">
															<button class="btn btn-warning btn-edit" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
			                                				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
			                                			</div>
			                                		</td>
			                                	</tr>
			                                	<tr>
			                                		<td>3</td>
			                                		<td>PG/003</td>
			                                		<td>1113</td>
			                                		<td>Charlie</td>
			                                		<td>Jl. Charlie</td>
			                                		<td>Belum Menikah</td>
			                                		<td>
			                                			<div class="btn-group btn-group-sm">
															<button class="btn btn-warning btn-edit" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
			                                				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
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

			</div>

		</div>

	</section>

</article>

@endsection

@section('extra_script')
<script type="text/javascript">
	$('#calendar_date').click(function(){
		$('.datepicker').datepicker('show');
	});
</script>
<script type="text/javascript">

$(document).ready(function(){
	var table = $('#tabel_jenisproduk').DataTable();
	var table1 = $('#tabel_produk').DataTable();

	$(document).on('click', '.btn-disable', function(){
		var ini = $(this);
		$.confirm({
			animation: 'RotateY',
			closeAnimation: 'scale',
			animationBounce: 1.5,
			icon: 'fa fa-exclamation-triangle',
			title: 'Disable',
			content: 'Apa anda yakin mau disable data ini?',
			theme: 'disable',
			buttons: {
				info: {
					btnClass: 'btn-blue',
					text:'Ya',
					action : function(){
						$.toast({
							heading: 'Information',
							text: 'Data Berhasil di Disable.',
							bgColor: '#0984e3',
							textColor: 'white',
							loaderBg: '#fdcb6e',
							icon: 'info'
						})
						ini.parents('.btn-group').html('<button class="btn btn-danger btn-enable" type="button" title="Enable"><i class="fa fa-eye"></i></button>');
					}
				},
				cancel:{
					text: 'Tidak',
					action: function () {
						// tutup confirm
					}
				}
			}
		});
	});

	$(document).on('click', '.btn-enable', function(){
		$.toast({
			heading: 'Information',
			text: 'Data Berhasil di Enable.',
			bgColor: '#0984e3',
			textColor: 'white',
			loaderBg: '#fdcb6e',
			icon: 'info'
		})
		$(this).parents('.btn-group').html('<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>'+
										'<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>')
	})

	// function table_hapus(a){
	// 	table.row($(a).parents('tr')).remove().draw();
	// }
});
</script>
@endsection