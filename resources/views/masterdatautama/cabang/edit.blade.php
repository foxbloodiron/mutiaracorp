@extends('main')

@section('content')

<article class="content animated fadeInLeft">

  <div class="title-block text-primary">
      <h1 class="title"> Edit Data Cabang </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Master Data Utama</span>
         / <a href="{{route('cabang.index')}}"><span>Data Cabang</span></a>
         / <span class="text-primary" style="font-weight: bold;"> Edit Data Cabang</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">

        <div class="card">

                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Edit Data Cabang </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('cabang.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>

                    <form action="{{ route('cabang.edit', [Crypt::encrypt($data->c_id)]) }}" method="post" id="myForm" autocomplete="off">
                      <div class="card-block">
                        <section>

                          <div class="row">
                            {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                              {{--<label>ID Cabang</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-9 col-sm-6 col-xs-12">--}}
                              {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control form-control-sm" readonly="" name="cabang_id" value="{{ $data['cabang']->c_id }}">--}}
                              {{--</div>--}}
                            {{--</div>--}}

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Cabang</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="cabang_name" value="{{ $data->c_name }}" style="text-transform: uppercase;">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Alamat Cabang</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea type="text" class="form-control form-control-sm" name="cabang_address">{{ $data->c_address }}</textarea>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>No Telp</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="number" class="form-control form-control-sm" name="cabang_telp" value="{{ $data->c_tlp }}">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Tipe Cabang</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select id="" class="form-control form-control-sm" name="cabang_type">
                                  @if($data->c_type == 'PUSAT')
                                    <option value="PUSAT" selected="">Pusat</option>
                                    <option value="CABANG">Cabang</option>
                                  @elseif($data->c_type == 'CABANG')
                                    <option value="PUSAT">Pusat</option>
                                    <option value="CABANG" selected="">Cabang</option>
                                  @endif
                                </select>
                              </div>
                            </div>

                          </div>

                        </section>
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary btn-submit" type="button" id="btn_simpan">Simpan</button>
                        <a href="{{route('cabang.index')}}" class="btn btn-secondary">Kembali</a>
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

    $.ajax({
      data : form_data,
      type : "post",
      url : $("#myForm").attr('action'),
      dataType : 'json',
      beforeSend: function() {
        loading();
      },
      success : function (response){
        if(response.status == 'berhasil'){
          loadingEnd();
          $.toast({
            heading: 'Success',
            text: 'Data berhasil disimpan !',
            bgColor: '#00b894',
            textColor: 'white',
            loaderBg: '#3C415E',
            icon: 'success',
            stack: false,
            hideAfter: 5000
          });
        } else if (response.status == 'invalid') {
          loadingEnd();
          $.toast({
            heading: 'Perhatian',
            text: response.message,
            bgColor: '#FF4444',
            textColor: 'white',
            loaderBg: '#3C415E',
            icon: 'warning',
            stack: false,
            hideAfter: 5000
          });
        }
      },
      error : function(e){
        loadingEnd();
        $.toast({
          heading: 'Warning',
          text: e.message,
          bgColor: '#FF4444',
          textColor: 'white',
          loaderBg: '#3C415E',
          icon: 'warning',
          stack: false
        });
      }
    })

  }
// end: submit form

  // start: unused -> confirmed and deleted soon
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
  // });
  // end: unused

</script>
@endsection
