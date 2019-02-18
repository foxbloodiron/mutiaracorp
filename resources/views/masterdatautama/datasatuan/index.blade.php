@extends('main')

@section('content')

<article class="content animated fadeInLeft">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Satuan </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
	    	/ <span>Master Data Utama</span>
	    	/ <span class="text-primary font-weight-bold">Data Satuan</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

				<div class="card">
              <div class="card-header bordered p-2">
              	<div class="header-block">
                    <h3 class="title"> Data Satuan </h3>
                </div>
                <div class="header-block pull-right">

              			<button class="btn btn-primary" id="btn-tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
                </div>
              </div>
              <div class="card-block">
                  <section>
                  	<div class="table-responsive">
                        <table class="table table-striped table-hover display nowrap" cellspacing="0" id="table_satuan">
                            <thead class="bg-primary">
                                <tr>
                                	<th width="1%">No</th>
									                <th>Kode Satuan</th>
									                <th>Nama Satuan</th>
									                <th width="15%">Aksi</th>
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

	var tb_satuan;
	setTimeout(function() {
		table_satuan();
	}, 1500);

	function table_satuan()
	{
		$('#table_satuan').dataTable().fnDestroy();
		tb_list_pegawai = $('#table_satuan').DataTable({
			responsive: true,
			// language: dataTableLanguage,
			// processing: true,
			serverSide: true,
			ajax: {
				url: "{{ route('datasatuan.list') }}",
				type: "get",
				data: {
					"_token": "{{ csrf_token() }}"
				}
			},
			columns: [
				{data: 'DT_Row_Index', name: 'DT_Row_Index'},
				{data: 'u_id', name: 'u_id'},
				{data: 'u_name', name: 'u_name'},
				{data: 'action', name: 'action'}
			],
			pageLength: 10,
			lengthMenu: [[10, 20, 50, -1], [10, 20, 50, 'All']]
		});
	}

	$(document).ready(function(){
		
	$('#table_satuan tbody').on('click', '.btn-edit', function(){
		window.location.href = '{{route("datasatuan.edit")}}';
	});

	$('#btn-tambah').on('click', function(){
		window.location.href = '{{route("datasatuan.create")}}';
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

		// function table_hapus(a){
		// 	table.row($(a).parents('tr')).remove().draw();
		// }
	});
</script>
@endsection
