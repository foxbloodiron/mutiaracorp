@extends('main')

@section('content')

@include('biayadanbeban.maintenance.tambah_maintenance')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Maintenance </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Biaya dan Beban</span> / <span class="text-primary" style="font-weight: bold;">Maintenance</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">


			<div class="col-12">

				<ul class="nav nav-pills mb-3">
	                <li class="nav-item">
	                    <a href="" class="nav-link active" data-target="#kendaraan" aria-controls="kendaraan" data-toggle="tab" role="tab">Kendaraan</a>
	                </li>
	                <li class="nav-item">
	                    <a href="" class="nav-link" data-target="#mesin_produksi" aria-controls="mesin_produksi" data-toggle="tab" role="tab">Mesin Produksi</a>
	                </li>
	            </ul>
				
				<div class="tab-content">
					<div class="tab-pane fade in show active" id="kendaraan">
						<div class="card">
			                <div class="card-block">
			                    <div class="card-title-block">
			                        <h3 class="title"> Kendaraan </h3>
			                    </div>
			                    <section>
			                    	
			                		<div class="col-12" align="right" style="margin-bottom: 15px;">
			                			<button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
			                		</div>
			                    	
			                    	<div class="table-responsive">
			                            <table class="table data-table table-hover" cellspacing="0">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>Nama Kendaraan</th>
									                <th>Status</th>
									                <th>Aksi</th>
									            </tr>
			                                </thead>
			                                <tbody>

									        </tbody>
			                            </table>
			                        </div>
			                    </section>
			                </div>
			            </div>
			        </div>

			        <div class="tab-pane fade in" id="mesin_produksi">
						<div class="card">
			                <div class="card-block">
			                    <div class="card-title-block">
			                        <h3 class="title"> Mesin Produksi </h3>
			                    </div>
			                    <section>

			                    	<div class="table-responsive">
			                            <table class="table data-table table-hover" cellspacing="0">
			                                <thead class="bg-primary">
			                                    <tr>
									                <th>Nama Mesin Produksi</th>
									                <th>Status</th>
									                <th>Aksi</th>
									            </tr>
			                                </thead>
			                                <tbody>

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