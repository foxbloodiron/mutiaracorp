@extends('main')

@section('content')

@include('pengiriman.perencanaanpengiriman.tambah_perencanaanpengiriman')
@include('pengiriman.perencanaanpengiriman.status_perencanaanpengiriman')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Perencanaan Pengiriman </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Pengiriman</span> / <span class="text-primary" style="font-weight: bold;">Perencanaan Pengiriman</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Perencanaan Pengiriman </h3>
	                    </div>
	                    <div class="header-block pull-right">
                			<button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
	                    	
	                    </div>
                    </div>
                    <div class="card-block">
                        <section>
                        		
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th>Nota</th>
							                <th>Sopir</th>
							                <th>Armada</th>
							                <th>Jadwal</th>
							                <th>Status</th>
							                <th>Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>PP/20181123/1</td>
	                                		<td>Alpha</td>
	                                		<td>Bravo-09</td>
	                                		<td>24-11-2018 22:22:22</td>
	                                		<td><span class="badge badge-secondary badge-pill">Packing</span></td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
		                                			<button class="btn btn-info" data-toggle="modal" data-target="#status" type="button" title="Status"><i class="fa fa-gear"></i></button>
		                                			<button class="btn btn-warning" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
		                                			<button class="btn btn-danger" type="button" title="Hapus"><i class="fa fa-trash-o"></i></button>
		                                		</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>PP/20181123/2</td>
	                                		<td>Bravo</td>
	                                		<td>Charlie-09</td>
	                                		<td>24-11-2018 22:22:22</td>
	                                		<td><span class="badge badge-info badge-pill">Proses Pengiriman</span></td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
		                                			<button class="btn btn-info" data-toggle="modal" data-target="#status" type="button" title="Status"><i class="fa fa-gear"></i></button>
		                                			<button class="btn btn-warning" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
		                                			<button class="btn btn-danger" type="button" title="Hapus"><i class="fa fa-trash-o"></i></button>
		                                		</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>PP/20181123/3</td>
	                                		<td>Charlie</td>
	                                		<td>Delta-09</td>
	                                		<td>24-11-2018 22:22:22</td>
	                                		<td><span class="badge badge-success badge-pill">Sudah diterima</span></td>
	                                		<td>
	                                			<div class="btn-group btn-group-sm">
		                                			<button class="btn btn-danger" disabled="" type="button" title="Hapus"><i class="fa fa-trash-o"></i></button>
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
		$('#status_pilih').on('change', function(){
			if($(this).val() != ''){
				console.log('a');
				$('#example_badge').text($('#status_pilih option:selected').text());
				$('#example_badge').removeClass('d-none');
				if ($(this).val() === '1') {
					$('#example_badge').addClass('badge-secondary');
					$('#example_badge').removeClass('badge-info');
					$('#example_badge').removeClass('badge-success');
				} else if($(this).val() === '2'){
					$('#example_badge').removeClass('badge-secondary');
					$('#example_badge').addClass('badge-info');
					$('#example_badge').removeClass('badge-success');
				} else if($(this).val() === '3'){
					$('#example_badge').removeClass('badge-secondary');
					$('#example_badge').removeClass('badge-info');
					$('#example_badge').addClass('badge-success');
				}
			} else {
				console.log('b');
				$('#example_badge').addClass('d-none');
				$('#example_badge').text('');
			}
		});
	});
</script>
@endsection