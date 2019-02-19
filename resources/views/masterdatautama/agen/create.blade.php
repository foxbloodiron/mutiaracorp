@extends('main')

@section('content')

<article class="content animated fadeInLeft">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Data Agen </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Master Data Utama</span>
         / <a href="{{route('agen.index')}}"><span>Data Agen</span></a>
         / <span class="text-primary" style="font-weight: bold;"> Tambah Data Agen</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">

        <div class="card">

                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Tambah Data Agen </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('agen.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>

                    <form action="{{ route('agen.store') }}" method="post" id="myForm" autocomplete="off">
                      <div class="card-block">
                        <section>

                          <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Kode Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="agen_code" value="{{ $code }}" readonly>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="agen_name">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Tipe Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <select id="" class="form-control form-control-sm" name="agen_type">
                                  <option value="">Pilih Tipe Agen</option>
                                  <option value="RT">Retail</option>
                                  <option value="GR">Grosir</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Tanggal Lahir</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm datepicker" name="agen_birthday">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Alamat Agen</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea type="text" class="form-control form-control-sm" name="agen_address"></textarea>
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Email</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="agen_email" placeholder="iniemail@email.com">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>No Telp</label>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="number" class="form-control form-control-sm" name="agen_telp">
                              </div>
                            </div>

                          </div>

                        </section>
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary btn-submit" id="btn_simpan" type="button">Simpan</button>
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
  });

  // submit form to store data in db
  function SubmitForm(event)
  {
    event.preventDefault();
    form_data = $('#myForm').serialize();

    $.ajax({
      data : form_data,
      type : "post",
      url : $("#myForm").attr('action'),
      dataType : 'json',
      success : function (response){
        if(response.status == 'berhasil'){
          $.toast({
            heading: 'Success',
            text: 'Data berhasil ditambahkan !',
            bgColor: '#00b894',
            textColor: 'white',
            loaderBg: '#55efc4',
            icon: 'success',
            stack: false,
            afterHidden: function() {
              window.location.href = "{{ route('agen.index') }}";
            }
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

  }

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
</script>
@endsection
