@extends('main')

@section('content')


<article class="content">

  <div class="title-block text-primary">
      <h1 class="title"> Proses Upah Borongan Produksi </h1>
      <p class="title-description">
        <i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> 
        / <span>Produksi</span> 
        / <a href="{{route('upahboronganproduksi')}}"><span>Upah Borongan Produksi</span> </a>
        / <span class="text-primary font-weight-bold">Proses Upah Borongan Produksi</span>
       </p>
  </div>

  <section class="section">

    <div class="row">

      <div class="col-12">
        
        <div class="card">
                    <div class="card-header bordered p-2">
                      <div class="header-block">
                        <h3 class="title"> Proses Upah Borongan Produksi </h3>
                      </div>
                      <div class="header-block pull-right">
                        <a href="{{route('upahboronganproduksi')}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i></a>
                      </div>
                    </div>
                    <div class="card-block">
                        <section>
                          
                          <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Kode Produksi</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" readonly="" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Item Produksi</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" readonly="" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Tanggal Produksi</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" readonly="" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Jumlah Produksi</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="text" readonly="" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <label>Jumlah Produksi Rusak</label>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <input type="number" min="0" readonly="" class="form-control form-control-sm" name="">
                              </div>
                            </div>

                          </div>

                          <fieldset>
                            <div class="row">

                              <div class="col-md-7 col-sm-12">
                                <label>Pegawai</label>
                                <div class="form-group">
                                  <select class="form-control form-control-sm select2">
                                    <option>--Pilih--</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-5 col-sm-12">
                                <label>Upah</label>
                                <div class="form-group">
                                  <div class="input-group">
                                    <select class="form-control-sm form-control select2" name="">
                                      <option value="">--Pilih---</option>
                                    </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-sm btn-primary" title="Tambah" type="button"><i class="fa fa-plus"></i></button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </fieldset>
                          
                          <div class="table-responsive mt-3">
                            <table class="table table-bordered table-hover table-striped data-table" cellspacing="0">
                              <thead class="bg-primary">
                                <tr>
                                  <th>Pegawai</th>
                                  <th>Upah</th>
                                  <th width="15%"></th>
                                </tr>
                              </thead>
                              <tbody></tbody>
                            </table>
                          </div>

                        </section>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="button">Simpan</button>
                      <a href="{{route('upahboronganproduksi')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

      </div>

    </div>

  </section>

</article>

@endsection