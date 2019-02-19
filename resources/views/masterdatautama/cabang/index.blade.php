@extends('main')

@section('content')

<article class="content animated fadeInLeft">

	<div class="title-block text-primary">
	    <h1 class="title"> Master Cabang</h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Master Data Utama</span>
	    	 / <span class="text-primary" style="font-weight: bold;">Master Cabang</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Data Cabang </h3>
	                    </div>
	                    <div class="header-block pull-right">
                    			<a class="btn btn-primary" href="{{route('cabang.create')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>

	                    </div>
                    </div>
                    <div class="card-block">
                        <section>


                        	<div class="table-responsive">
	                            <table class="table table-striped table-hover display nowrap" cellspacing="0" id="table_cabang">
	                                <thead class="bg-primary">
	                                    <tr>
													                <th width="1%">No</th>
													                <th>Nama Cabang</th>
													                <th>Alamat Cabang</th>
													                <th>No Telp</th>
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

	</section>

</article>

@endsection
@section('extra_script')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	var tb_cabang;
	setTimeout(function() {
		TableCabang();
	}, 1500);
	// function to retrieve DataTable server side
	function TableCabang()
	{
		$('#table_cabang').dataTable().fnDestroy();
		tb_cabang = $('#table_cabang').DataTable({
			responsive: true,
			// language: dataTableLanguage,
			// processing: true,
			serverSide: true,
			ajax: {
				url: "{{ route('cabang.list') }}",
				type: "get",
				data: {
					"_token": "{{ csrf_token() }}"
				}
			},
			columns: [
				{data: 'c_nama', name: 'c_nama'},
				{data: 'c_nama', name: 'c_nama'},
				{data: 'c_alamat', name: 'c_alamat'},
				{data: 'c_no_telp', name: 'c_no_telp'},
				{data: 'action', name: 'action'}
			],
			pageLength: 10,
			lengthMenu: [[10, 20, 50, -1], [10, 20, 50, 'All']]
		});
	}
	// function to redirect page to edit page
	function EditCabang(idx)
	{
		window.location.href = baseUrl + "/masterdatautama/cabang/edit/" + idx;
	}
	// function to execute delete request
	function DeleteCabang(idx)
	{
		var url_hapus = baseUrl + "/masterdatautama/cabang/delete/" + idx;

		$.confirm({
			title: 'Hapus Cabang',
			content: 'Apakah anda yakin ingin menghapus data ini ?',
			buttons: {
				YA: function () {
					return $.ajax({
						type : "post",
						url : url_hapus,
						success : function (response){
							if(response.status == 'berhasil'){
								$.toast({
									heading: 'Success',
									text: 'Data berhasil dihapus !',
									bgColor: '#00b894',
									textColor: 'white',
									loaderBg: '#55efc4',
									icon: 'success',
									stack: false
								});
								tb_cabang.ajax.reload();
							}
						},
						error : function(e){
							$.toast({
								heading: 'Warning',
								text: e.message,
								bgColor: '#00b894',
								textColor: 'white',
								loaderBg: '#55efc4',
								icon: 'warning',
								stack: false
							});
						}
					});
				},
				TIDAK: function () {
					// $.alert('Canceled!');
				}
			}
		});
	}

	// start: unused -> confirmed and deleted soon
	// $(document).ready(function(){
	// 	var table = $('#table_cabang').DataTable();
	//
	// 	$(document).on('click', '.btn-disable', function(){
	// 		var ini = $(this);
	// 		$.confirm({
	// 			animation: 'RotateY',
	// 			closeAnimation: 'scale',
	// 			animationBounce: 1.5,
	// 			icon: 'fa fa-exclamation-triangle',
	// 			title: 'Peringatan!',
	// 			content: 'Apa anda yakin mau menonaktifkan data ini?',
	// 			theme: 'disable',
	// 		    buttons: {
	// 		        info: {
	// 					btnClass: 'btn-blue',
	// 		        	text:'Ya',
	// 		        	action : function(){
	// 						$.toast({
	// 							heading: 'Information',
	// 							text: 'Data Berhasil di Nonaktifkan.',
	// 							bgColor: '#0984e3',
	// 							textColor: 'white',
	// 							loaderBg: '#fdcb6e',
	// 							icon: 'info'
	// 						})
	// 				        ini.parents('.btn-group').html('<button class="btn btn-success btn-enable" type="button" title="Enable"><i class="fa fa-check-circle"></i></button>');
	// 			        }
	// 		        },
	// 		        cancel:{
	// 		        	text: 'Tidak',
	// 				    action: function () {
  //   			            // tutup confirm
  //   			        }
  //   			    }
	// 		    }
	// 		});
	// 	});
	//
	// 	$(document).on('click', '.btn-enable', function(){
	// 		$.toast({
	// 			heading: 'Information',
	// 			text: 'Data Berhasil di Aktifkan.',
	// 			bgColor: '#0984e3',
	// 			textColor: 'white',
	// 			loaderBg: '#fdcb6e',
	// 			icon: 'info'
	// 		})
	// 		$(this).parents('.btn-group').html('<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>'+
	//                                 		'<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-times-circle"></i></button>')
	// 	})
  //       $('#table_cabang tbody').on('click','.btn-edit', function(){
	// 	})
	// });
	// end: unused
</script>
@endsection
