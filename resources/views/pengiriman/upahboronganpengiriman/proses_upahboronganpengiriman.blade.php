@extends('main')

@section('content')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Proses Upah Borongan Pengiriman </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
	    	/ <span>Pengiriman</span> 
	    	/ <a href="{{route('upahboronganpengiriman')}}"><span>Pengiriman</span> </a>
	    	/ <span class="text-primary font-weight-bold">Proses Upah Borongan Pengiriman</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-header bordered p-2">
                        <div class="header-block">
                            <h3 class="title"> Proses Upah Borongan Pengiriman </h3>
                        </div>
                        <div class="header-block pull-right">
                            <a href="{{route('upahboronganpengiriman')}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        <section>

                        	<div class="row">
                        		
                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<label>Nota</label>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<div class="form-group">
                        				<input type="text" readonly="" class="form-control form-control-sm" name="">
                        			</div>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<label>Sopir</label>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<div class="form-group">
                        				<input type="text" readonly="" class="form-control form-control-sm" name="">
                        			</div>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<label>Armada</label>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<div class="form-group">
                        				<input type="text" readonly="" class="form-control form-control-sm" name="">
                        			</div>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<label>Jadwal</label>
                        		</div>

                        		<div class="col-md-3 col-sm-6 col-xs-12">
                        			<div class="form-group">
                        				<input type="text" readonly="" class="form-control form-control-sm" name="">
                        			</div>
                        		</div>

                        	</div>

                        	<fieldset>
	                        	<div class="row">
	                        		
	                        		<div class="col-md-3 col-sm-6 col-xs-12">
	                        			<label>Upah Borongan Pengiriman</label>
	                        		</div>

	                        		<div class="col-md-9 col-sm-6 col-xs-12">
	                        			<div class="form-group">
	                        				<select class="form-control form-control-sm">
	                        					<option value="">--Pilih--</option>
	                        				</select>
	                        			</div>
	                        		</div>

	                        	</div>
	                        </fieldset>

                        </section>
                    </div>
                    <div class="card-footer text-right">
                    	<button class="btn btn-primary" type="button">Simpan</button>
                    	<a href="{{route('upahboronganpengiriman')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection