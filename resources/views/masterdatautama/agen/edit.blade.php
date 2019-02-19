@extends('main')

@section('content')

<article class="content animated fadeInLeft">

  <div class="title-block text-primary">
      <h1 class="title"> Edit Data Agen </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Master Data Utama</span>
         / <a href="{{route('agen.index')}}"><span>Data Agen</span></a>
         / <span class="text-primary" style="font-weight: bold;"> Edit Data Agen</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">

        <div class="card">

                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Edit Data Agen </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('agen.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>

                    <form action="{{ route('agen.update', [$data['agen']->a_id]) }}" method="post" id="myForm" autocomplete="off">
                      <div class="card-block">
                        <section>

                          <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Kode Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="" value="{{ $data['agen']->a_code }}" readonly="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="agen_name" value="{{ $data['agen']->a_name }}">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Tipe Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select name="agen_type" id="" class="form-control form-control-sm">
                                  <option value="">Pilih Tipe Agen</option>
                                  @if($data['agen']->a_type == 'RT')
                                    <option value="RT" selected="">Retail</option>
                                    <option value="GR">Grosir</option>
                                  @elseif($data['agen']->a_type == 'GR')
                                    <option value="RT">Retail</option>
                                    <option value="GR" selected="">Grosir</option>
                                  @endif
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Tanggal Lahir</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm datepicker" name="agen_birthday" value="{{ date('d-m-Y', strtotime($data['agen']->a_birthday)) }}">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Alamat Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea type="text" class="form-control form-control-sm" name="agen_address">{{ $data['agen']->a_address }}</textarea>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Email</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="agen_email" value="{{ $data['agen']->a_email }}" placeholder="user@email.com">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>No Telp</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="agen_telp" value="{{ $data['agen']->a_no_telp }}">
                              </div>
                            </div>

                          </div>

                        </section>
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary btn-submit" type="button" id="btn_simpan">Simpan</button>
                        <a href="{{route('agen.index')}}" class="btn btn-secondary">Kembali</a>
                      </div>
                    </form>
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


  $('#btn_simpan').on('click', function() {
    SubmitForm(event);
  })
  // start: submit form to update data in db
  function SubmitForm(event)
  {
    event.preventDefault();
    form_data = $('#myForm').serialize();

    $.confirm({
      title: 'Edit Agen',
      content: 'Apakah anda yakin menyimpan data ini ?',
      buttons: {
          YA: function () {
            $.ajax({
              data : form_data,
              type : "post",
              url : $("#myForm").attr('action'),
              dataType : 'json',
              success : function (response){
                if(response.status == 'berhasil'){
                  $.toast({
                  		heading: 'Success',
                  		text: 'Data berhasil disimpan !',
                  		bgColor: '#00b894',
                  		textColor: 'white',
                  		loaderBg: '#55efc4',
                  		icon: 'success',
                      stack: false
                  	});
                } else if (response.status == 'invalid') {
                  $.toast({
                  		heading: 'Perhatian',
                  		text: response.message,
                  		bgColor: '#00b894',
                  		textColor: 'white',
                  		loaderBg: '#55efc4',
                  		icon: 'warning',
                      stack: false
                  	});
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
            })
          },
          TIDAK: function () {
              // $.alert('Canceled!');
          }
      }
    });
  }
  // end: submit form

  // $(document).ready(function(){
  //   $('#type_cus').change(function(){
  //     if($(this).val() === 'kontrak'){
  //       $('#label_type_cus').text('Jumlah Bulan');
  //       $('#jumlah_hari_bulan').val('');
  //       $('#pagu').val('');
  //       $('#armada').prop('selectedIndex', 0).trigger('change');
  //       $('.120mm').removeClass('d-none');
  //       $('.125mm').addClass('d-none');
  //       $('.122mm').removeClass('d-none');
  //     } else if($(this).val() === 'harian'){
  //       $('#label_type_cus').text('Jumlah Hari');
  //       $('#armada').prop('selectedIndex', 0).trigger('change');
  //       $('#pagu').val('');
  //       $('#jumlah_hari_bulan').val('');
  //       $('.122mm').addClass('d-none');
  //       $('.120mm').removeClass('d-none');
  //       $('.125mm').removeClass('d-none');
  //     } else {
  //       $('#jumlah_hari_bulan').val('');
  //       $('#armada').prop('selectedIndex', 0).trigger('change');
  //       $('#pagu').val('');
  //       $('.122mm').addClass('d-none');
  //       $('.120mm').addClass('d-none');
  //       $('.125mm').addClass('d-none');
  //     }
  //   });
  //   $(document).on('click', '.btn-submit', function(){
	// 		$.toast({
	// 			heading: 'Success',
	// 			text: 'Data Berhasil di Edit',
	// 			bgColor: '#00b894',
	// 			textColor: 'white',
	// 			loaderBg: '#55efc4',
	// 			icon: 'success'
	// 		})
	// 	})
  // });
</script>
@endsection
