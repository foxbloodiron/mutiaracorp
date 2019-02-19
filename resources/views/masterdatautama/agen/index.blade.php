@extends('main')

@section('content')

<article class="content animated fadeInLeft">

	<div class="title-block text-primary">
	    <h1 class="title"> Master Agen</h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	 / <span>Master Data Utama</span>
	    	 / <span class="text-primary" style="font-weight: bold;">Master Agen</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

				<div class="card">
                    <div class="card-header bordered p-2">
                    	<div class="header-block">
	                        <h3 class="title"> Data Agen </h3>
	                    </div>
	                    <div class="header-block pull-right">
                    			<a class="btn btn-primary" href="{{route('agen.create')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>

	                    </div>
                    </div>
                    <div class="card-block">
                        <section>


                        	<div class="table-responsive">
	                            <table class="table table-striped table-hover display nowrap" cellspacing="0" id="table_agen">
	                                <thead class="bg-primary">
	                                    <tr>
												                <th width="1%">No</th>
																				<th>Kode Agen</th>
												                <th>Nama Agen</th>
																				<th>Tipe Agen</th>
																				<th>Tanggal Lahir</th>
												                <th>Alamat Agen</th>
																				<th>Email</th>
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
	// set header token for ajax request
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	var tb_agen;
	setTimeout(function() {
		TableAgen();
	}, 1500);
	// function to retrieve DataTable server side
	function TableAgen()
	{
		$('#table_agen').dataTable().fnDestroy();
		tb_agen = $('#table_agen').DataTable({
			responsive: true,
			// language: dataTableLanguage,
			// processing: true,
			serverSide: true,
			ajax: {
				url: "{{ route('agen.list') }}",
				type: "get",
				data: {
					"_token": "{{ csrf_token() }}"
				}
			},
			columns: [
				{data: 'a_name', name: 'a_name'},
				{data: 'a_code', name: 'a_code'},
				{data: 'a_name', name: 'a_name'},
				{data: 'type', name: 'type'},
				{data: 'a_birthday', name: 'a_birthday'},
				{data: 'a_address', name: 'a_address'},
				{data: 'a_email', name: 'a_email'},
				{data: 'a_no_telp', name: 'a_no_telp'},
				{data: 'action', name: 'action'}
			],
			pageLength: 10,
			lengthMenu: [[10, 20, 50, -1], [10, 20, 50, 'All']]
		});
	}
	// function to redirect page to edit page
	function EditAgen(idx)
	{
		window.location.href = baseUrl + "/masterdatautama/agen/edit/" + idx;
	}
	// function to execute delete request
	function DeleteAgen(idx)
	{
		var url_hapus = baseUrl + "/masterdatautama/agen/delete/" + idx;

		$.confirm({
			title: 'Hapus Agen',
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
								tb_agen.ajax.reload();
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

	// start : unused -> deleted soon
	
	// $(document).ready(function(){
	// 	var table = $('#table_agen').DataTable();
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
  //   $('#table_agen tbody').on('click','.btn-edit', function(){
	// 	});
	// });
	// end : unused
</script>
@endsection
