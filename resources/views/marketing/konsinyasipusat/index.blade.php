@extends('main')

@section('content')

<!-- Modal Terima Order -->
@include('marketing.konsinyasipusat.penempatanproduk.modal')

<article class="content animated fadeInLeft">

	<div class="title-block text-primary">
	    <h1 class="title"> Manajemen Konsinyasi Pusat </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Aktivitas Marketing</span> / <span class="text-primary" style="font-weight: bold;">Manajemen Konsinyasi Pusat</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="" class="nav-link active" data-target="#penempatanproduk" aria-controls="penempatanproduk" data-toggle="tab" role="tab">Penempatan Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-target="#promosi_tahunan" aria-controls="promosi_tahunan" data-toggle="tab" role="tab">Monitoring Penjualan</a>
					</li>
                </ul>

                <div class="tab-content">

					@include('marketing.konsinyasipusat.penempatanproduk.index')
					@include('marketing.penjualanpusat.returnpenjualan.index')

	            </div>

			</div>

		</div>

	</section>

</article>

@endsection
@section('extra_script')
<script type="text/javascript">

	$(document).ready(function(){
		var table_sup = $('#table_approval').DataTable();
		var table_bar= $('#table_tahunan').DataTable();
		var table_pus= $('#table_bulanan').DataTable();


		$(document).on('click','.btn-preview-rekruitmen',function(){
			window.location.href='{{route('rekruitmen.preview')}}'
		});
		$(document).on('click','.btn-proses-rekruitmen',function(){
			window.location.href='{{route('rekruitmen.process')}}'
		});

		$(document).on('click', '.btn-disable', function(){
			var ini = $(this);
			$.confirm({
				animation: 'RotateY',
				closeAnimation: 'scale',
				animationBounce: 1.5,
				icon: 'fa fa-exclamation-triangle',
				title: 'Peringatan!',
				content: 'Apa anda yakin mau menonaktifkan data ini?',
				theme: 'disable',
			    buttons: {
			        info: {
						btnClass: 'btn-blue',
			        	text:'Ya',
			        	action : function(){
							$.toast({
								heading: 'Information',
								text: 'Data Berhasil di Nonaktifkan.',
								bgColor: '#0984e3',
								textColor: 'white',
								loaderBg: '#fdcb6e',
								icon: 'info'
							})
					        ini.parents('.btn-group').html('<button class="btn btn-success btn-enable" type="button" title="Enable"><i class="fa fa-check-circle"></i></button>');
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
				text: 'Data Berhasil di Aktifkan.',
				bgColor: '#0984e3',
				textColor: 'white',
				loaderBg: '#fdcb6e',
				icon: 'info'
			})
			$(this).parents('.btn-group').html('<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>'+
	                                		'<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-times-circle"></i></button>')
		})


		$(document).ready(function() {
			$('#modal-penempatan').DataTable( {
				"iDisplayLength" : 5
			});
		});
	});
</script>
@endsection
