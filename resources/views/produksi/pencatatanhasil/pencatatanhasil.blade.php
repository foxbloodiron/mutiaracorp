@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Pencatatan Hasil Produksi </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Produksi</span> / <span class="text-primary" style="font-weight: bold;">Pencatatan Hasil Produksi</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Pencatatan Hasil Produksi </h3>
	                    </div>
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover tabel-striped table-bordered" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th>Kode Produksi</th>
							                <th>Nama Item</th>
							                <th>Jumlah Produksi</th>
							                <th>Tanggal Produksi</th>
							                <th>Status</th>
							                <th>Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>PTR/2018-11-15/1</td>
	                                		<td>Pintu</td>
	                                		<td>15</td>
	                                		<td>15 Nov 2018</td>
	                                		<td><span class="badge badge-info badge-pill">Menunggu diproses</span></td>
	                                		<td align="center"><a class="btn btn-primary btn-sm" href="{{route('proses_pencatatanhasil')}}">Proses</a></td>
	                                	</tr>
	                                	<tr>
	                                		<td>PTR/2018-11-15/2</td>
	                                		<td>Jendela</td>
	                                		<td>10</td>
	                                		<td>13 Nov 2018</td>
	                                		<td><span class="badge badge-success badge-pill">Sudah diproses</span></td>
	                                		<td align="center">-</td>
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