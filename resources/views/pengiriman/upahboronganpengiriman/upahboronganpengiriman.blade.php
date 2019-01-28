@extends('main')

@section('content')

@include('pengiriman.upahboronganpengiriman.status_upahboronganpengiriman')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Upah Borongan Pengiriman </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Pengiriman</span> / <span class="text-primary" style="font-weight: bold;">Upah Borongan Pengiriman</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

				<ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="" class="nav-link active" data-target="#pengiriman" aria-controls="pengiriman" data-toggle="tab" role="tab">Operasional Jalan</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-target="#upah" aria-controls="upah" data-toggle="tab" role="tab">Upah Borongan Pengiriman</a>
                    </li>
                </ul>
				
				<div class="tab-content">
					<div class="tab-pane active fade in show" id="pengiriman">
						<div class="card">
	                        <div class="card-header bordered p-2">
	                        	<div class="header-block">
		                            <h3 class="title"> Operasional Jalan </h3>
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
		            <div class="tab-pane fade in" id="upah">
		            	<div class="card">

	            			<div class="card-header bordered p-2">
	            				<div class="header-block">
		            				<h3 class="title">Upah Borangan Pengiriman</h3>
		            			</div>
	            			</div>
		            		<div class="card-block">
		            			
		            			<section>

		            				<div class="table-responsive">
		            					<table class="table table-bordered table-hover table-striped data-table" cellspacing="0">
		            						<thead class="bg-primary">
		            							<tr>
		            								<th>No</th>
		            								<th>Nota</th>
		            								<th>Status</th>
		            								<th width="15%">Aksi</th>
		            							</tr>
		            						</thead>
		            						<tbody>
		            							<tr>
		            								<th>1</th>
		            								<td>PP/20181123/3</td>
		            								<td><span class="badge badge-pill badge-secondary">Belum dibayar</span></td>
		            								<td>
		            									<a class="btn btn-info btn-sm" href="{{route('proses_upahboronganpengiriman')}}" title="Proses"><i class="fa fa-gear"></i></a>
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