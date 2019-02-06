<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mutiara Berlian Recruitment</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/recruitment/css/recruitment.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
<!-- Content -->
<!-- Header -->
<div class="row">
<div class="continer-fluid animated fadeIn">
<div class="red-side"></div>
<h1 class="hire-title">WE'RE HIRING!</h1>
<div class="row">
    <button class="btn btn-secondary btn-about" onclick="window.location.href='#about'">About Us</button>
    <button class="btn btn-secondary btn-join" onclick="window.location.href='#section-1'">Apply Now</button>
</div>
<div class="square-border"></div>
<div class="images">
    <img  class="people-jumping" src="assets/img/jumping.svg" alt="">
</div>
</div>
</div>
<div class="container" id="section-1">
 
</div>
<form class="form cf">
    <div class="wizard">
        <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="nav-item">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1" class="nav-link active">
                <span class="round-tab">
                    <i class="fa fa-building"></i>
                </span>
            </a>
                </li>
                <li role="presentation" class="nav-item">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2" class="nav-link disabled">
                <span class="round-tab">
                    <i class="fa fa-info"></i>
                </span>
            </a>
                </li>
                <li role="presentation" class="nav-item">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3" class="nav-link disabled">
                <span class="round-tab">
                    <i class="fa fa-money"></i>
                </span>
            </a>
                </li>
                <li role="presentation" class="nav-item">
                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4" class="nav-link disabled">
                <span class="round-tab">
                    <i class="fa fa-phone"></i>
                </span>
            </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="step1">
                <h1 class="text-md-center title-1">Data Diri</h1>
                <div class="row">
                    <div class="container">
                    <form action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                <label for="">Nama<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Nomer Identitas<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Alamat<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Alamat Sekarang<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Tempat Lahir<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Tanggal Lahir<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Pendidikan<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Email<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">No Telp/WA<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Agama<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Status<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Nama Suami/Istri<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Anak<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Deskripsi diri anda<span style="color:red;">*</span></label>
                                </div>
                                <textarea type="text" class="form-control col-9" row="5"></textarea>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <ul class="list-inline text-md-center">
                    <li><button type="button" class="btn btn-lg btn-common next-step next-button">Next</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step2">
                <h1 class="text-md-center title-1">Pendidikan Terakhir</h1>
                <div class="row">
                <div class="container">
                    <form action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                <label for="">Nama Sekolah<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Tahun<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Jurusan<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Nilai/IPK<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                            </div>
                        </div>
                    </form>
                    <h1 class="text-md-center title-1">Daftar Riwayat Hidup</h1>
                    <form action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                <label for="">Nama Perusahaan</label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Tahun<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Job Desc<span style="color:red;">*</span></label>
                                </div>
                                <textarea type="text" class="form-control col-9"></textarea>
                                <br>
                                <div class="col-2">
                                <label for="">Nama Perusaah<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Tahun<span style="color:red;">*</span></label>
                                </div>
                                <input type="text" class="form-control col-9">
                                <div class="col-2">
                                <label for="">Job Desc<span style="color:red;">*</span></label>
                                </div>
                                <textarea type="text" class="form-control col-9"></textarea>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <ul class="list-inline text-md-center">
                    <li><button type="button" class="btn btn-lg btn-common next-step next-button">Next Step</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step3">
                <h1 class="text-md-center">Step 3</h1>
                <div class="row">
                <div class="container">
                <form action="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                            <label for="">File Foto<span style="color:red;">*</span></label>
                            </div>
                            <div class="input-group\">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Foto</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="col-9">
                                <label class="custom-file-label col-9">Pilih Foto</label>
                            </div>
                            </div>
                            <div class="col-2">
                            <label for="">Tahun<span style="color:red;">*</span></label>
                            </div>
                            <input type="text" class="form-control col-9">
                            <div class="col-2">
                            <label for="">Jurusan<span style="color:red;">*</span></label>
                            </div>
                            <input type="text" class="form-control col-9">
                            <div class="col-2">
                            <label for="">Nilai/IPK<span style="color:red;">*</span></label>
                            </div>
                            <input type="text" class="form-control col-9">
                        </div>
                    </div>
                </form>
                </div>
                </div>
                <ul class="list-inline text-md-center">
                    <li><button type="button" class="btn btn-lg btn-common next-step next-button">Next Step</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step4">
                <h1 class="text-md-center">Step 4</h1>
                <div class="row">
                    
                </div>
                <ul class="list-inline text-md-center">
                    <li><button type="button" class="btn btn-lg btn-common next-step next-button">Next Step</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step5">
                <h1 class="text-md-center">Complete</h1>
                <div class="row">


                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</form>
<!-- About -->
<div class="container-fluid about-section" id="about">
    <div>
        <h3 class="text-center title-about">About Us</h3>
    </div>
    <div class="content-about">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eos non sequi sit omnis. Expedita ad, labore esse fuga animi sit perferendis perspiciatis aut distinctio commodi, tempore, consectetur dolore voluptatibus!</p>
    </div>
</div>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$('.nav-tabs > li a[title]').tooltip();

//Wizard
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

    var $target = $(e.target);

    if ($target.hasClass('disabled')) {
        return false;
    }
});

$(".next-step").click(function (e) {
    var $active = $('.wizard .nav-tabs .nav-item .active');
    var $activeli = $active.parent("li");

    $($activeli).next().find('a[data-toggle="tab"]').removeClass("disabled");
    $($activeli).next().find('a[data-toggle="tab"]').click();
});


$(".prev-step").click(function (e) {

    var $active = $('.wizard .nav-tabs .nav-item .active');
    var $activeli = $active.parent("li");

    $($activeli).prev().find('a[data-toggle="tab"]').removeClass("disabled");
    $($activeli).prev().find('a[data-toggle="tab"]').click();

});
</script>
</body>
</html>