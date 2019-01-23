@extends('main')

@section('content')

<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Tambah Data Suplier </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a>
         / <span>Master Data</span>
         / <a href="{{route('datacustomer')}}"><span>Data Suplier</span></a>
         / <span class="text-primary" style="font-weight: bold;"> Tambah Data Suplier</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">

                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Tambah Data Suplier </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('datasuplier')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>

                    <div class="card-block">
                        <section>
                          
                          <div id="sectionsuplier" class="row">
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Perusahaan</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" readonly="" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nama Suplier</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Nomer Hp</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>


                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Fax</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Email</label>
                            </div> 

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Alamat</label>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea class="form-control form-control-sm"></textarea>
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Keterangan</label>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <textarea class="form-control form-control-sm"></textarea>
                              </div>
                            </div>

                            <div class="table-responsive mt-3">
                            <table class="table table-hover table-striped table-bordered" id="table_rencana">
                              <thead class="bg-primary">
                                <tr align="center">
                                  <th width="2%" rowspan="2">No</th>
                                  <th width="68%" colspan="3">Plat Nomer Kendaraan</th>
                                  <th width="10%" rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                  <th>Kode Wilayah</th>
                                  <th>Nomer Polisi</th>
                                  <th>Huruf Belakang</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td align="center">#</td>
                                  <td><input type="text" class="form-control form-control-sm" name="" value="L"></td>
                                  <td><input type="text" class="form-control form-control-sm" name="" value="3680"></td>
                                  <td><input type="text" class="form-control form-control-sm" name="" value="NOB"></td>
                                  <td align="center"><button class="btn btn-primary btn-tambah" type="button"><i class="fa fa-plus"></i></button></td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                        
                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary btn-submit" type="button">Simpan</button>
                      <a href="{{route('datasuplier')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

      </div>

    </div>

  </section>

</article>

@endsection

@section('extra_script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#type_cus').change(function(){
      if($(this).val() === 'kontrak'){
        $('#label_type_cus').text('Jumlah Bulan');
        $('#jumlah_hari_bulan').val('');
        $('#pagu').val('');
        $('#armada').prop('selectedIndex', 0).trigger('change');
        $('.120mm').removeClass('d-none');
        $('.125mm').addClass('d-none');
        $('.122mm').removeClass('d-none');
      } else if($(this).val() === 'harian'){
        $('#label_type_cus').text('Jumlah Hari');
        $('#armada').prop('selectedIndex', 0).trigger('change');
        $('#pagu').val('');
        $('#jumlah_hari_bulan').val('');
        $('.122mm').addClass('d-none');
        $('.120mm').removeClass('d-none');
        $('.125mm').removeClass('d-none');
      } else {
        $('#jumlah_hari_bulan').val('');
        $('#armada').prop('selectedIndex', 0).trigger('change');
        $('#pagu').val('');
        $('.122mm').addClass('d-none');
        $('.120mm').addClass('d-none');
        $('.125mm').addClass('d-none');
      }
    });

    $(document).on('click', '.btn-hapus', function(){
      $(this).parents('tr').remove();
    });

    $('.btn-tambah').on('click',function(){
      $('#table_rencana tbody')
      .append(
        '<tr>'+
          '<td align="center">#</td>'+
          '<td><input type="text" class="form-control form-control-sm" name=""></td>'+
          '<td><input type="text" class="form-control form-control-sm" name=""></td>'+
          '<td><input type="text" class="form-control form-control-sm" name=""></td>'+
          '<td align="center"><button class="btn btn-danger btn-hapus" type="button"><i class="fa fa-trash-o"></i></button></td>'+
        '</tr>'
        );
    });

    $(document).on('click', '.btn-submit', function(){
			$.toast({
				heading: 'Success',
				text: 'Data Berhasil di Simpan',
				bgColor: '#00b894',
				textColor: 'white',
				loaderBg: '#55efc4',
				icon: 'success'
			})
		})
  });
</script>
@endsection