@extends('template.tmp_dashboard')
@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, <?php echo session()->get('nama'); ?></h4>
                            <p class="mb-0"><?=setting()->nama_cam ?> </p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                        </ol>
                    </div>
                </div>
                <?php if(session()->get('form') == 1) : ?>
                    <div class="alert alert-success"><strong>Success!</strong> Pendaftaran Berhasi Silahkan Cek <a href="/profil">Profil</a> Anda.</div>
                    <?php else : ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Registration Form</h4>
                            </div>
                            @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li style="font-size:15px;">{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif
                            <div class="card-body">
                                <div class="form-validation">
                                <form action="{{url('form/update')}}/<?php echo session()->get('id_mahasiswa') ?>" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Email
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="email" class="form-control" id="val-email" value="<?php echo session()->get('email') ?>" readonly required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Full Name <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" name="name" class="form-control" id="val-nama" value="<?php echo session()->get('nama') ?>" readonly required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-jkl">Jenis Kelamin
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div>
                                        <div class="form-check">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="L" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-Laki
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="P">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
</div>
                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-tgl">Tanggal Lahir<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input name="tanggal" class="datepicker-default form-control" id="datepicker" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-agama">Agama <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" id="val-agama" name="agama">
                                                            <option value="">Please select</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Protestan">Protestan</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Khonghucu">Khonghucu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-alamat">Alamat
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="5" placeholder="Alamat Lengkap..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-pdk_trkhr">Pendidikan Terakhir
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" id="val-pdk_trkhr" name="pendidikan">
                                                            <option value="">Please select</option>
                                                            <option value="SLTP">SLTP</option>
                                                            <option value="SLTA">SLTA</option>
                                                            <option value="D3">D3</option>
                                                            <option value="S1">S1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Lokasi">Lokasi
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" id="val-id_lokasi_k" name="lokasi">
                                                            <option value="">Please select</option>
                                                            <?php foreach($lokasi as $lk) : ?>
                                                            <option value="<?php echo $lk->id_lokasi ; ?>"><?php echo $lk->kota; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Program">Program Studi
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" id="val-id_program" name="program">
                                                            <option value="">Please select</option>
                                                            <?php foreach($studi as $sd) : ?>
                                                            <option value="<?php echo $sd->id_studi ; ?>"><?php echo $sd->jurusan; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-KTP">KTP <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="file" name="ktp" accept="application/pdf" />
                                                    <span style="color:red;">*File Pdf</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-KTP">Ijazah <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="file" name="ijazah" accept="application/pdf" />
                                                    <span style="color:red;">*File Pdf</span>
                                                    </div>
                                                    <input type="hidden" class="form-control" id="val-range" name="form" value="1" readonly>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
</div>
</div>
</div>
@endsection