@extends('main')

@section('content')

@include('customer.historitransaksi.tambah_historitransaksi')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Histori Transaksi </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Customer</span> / <span class="text-primary" style="font-weight: bold;">Histori Transaksi</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Histori Transaksi </h3>
	                    </div>
	                    
                    </div>
                    <div class="card-block">
                        <section>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover table-striped table-bordered" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th>Nama Customer</th>
							                <th width="15%">Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>Alpha</td>
	                                		<td align="center">
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary" type="button" data-target="#list_history" data-toggle="modal"><i class="fa fa-history"></i></button>
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