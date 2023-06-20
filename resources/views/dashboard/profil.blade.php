<?php if(empty(session()->get('form')) ) : ?>
    <?php echo "<script>
										alert('Silahkan Lengkapi Data Terlebih Dahulu, Untuk Mengakses Halaman Ini !!');
										window.location.href='form';
										</script>";
								?>
<?php else : ?>
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="assets/tmp_home/images/1.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary">  &nbsp; &nbsp;<?php echo session()->get('nama') ?></h4>
                                                        <p><?php echo session()->get('email') ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted"><?php echo session()->get('tgl_laghir') ?></h4>
                                                        <p>Tanggal Lahir</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Pendaftaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Nama Lengkap
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?php echo session()->get('nama') ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Email
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo session()->get('email') ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Jenis Kelamin
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <?php
                                                    $jkl1 = 'L';
                                                    if(session()->get('jkl') == $jkl1) : ?>
                                                    <input type="text" class="form-control" value="Laki-Laki" readonly>
                                                    <?php else : ?>
                                                    <?php endif; ?>
                                                    <?php 
                                                    $jkl2 = 'P';
                                                    if(session()->get('jkl') == $jkl2) : ?>
                                                    <input type="text" class="form-control" value="Perempuan" readonly>
                                                    <?php else : ?>
                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Jenis Kelamin">Tanggal Lahir
                                                       
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo session()->get('tgl_laghir') ?>" readonly>
                                                    </div>
</div>
                                
                                                    <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Department">Agama
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo session()->get('agama') ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-id_section">Alamat
                                                    </label>
                                                    <div class="col-lg-6">
                                                       <textarea class="form-control" rows="5" readonly><?php echo session()->get('alamat') ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Department">Pendidikan Terakhir
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo session()->get('pdk_trkhr') ?>" readonly>
                                                    </div>
                                                </div>
                                                <?php foreach($lokasi as $lk) : ?>
                                                    <?php endforeach; ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="">Lokasi Kampus
                                                        
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo $lk->kota ; ?>" readonly>
                                                    </div>
                                                </div>
                                            <?php foreach($program as $pm) : ?>
                                                    <?php endforeach; ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="">Program Studi
                                                        
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo $pm->jurusan ; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <a href="{{URL::to('/')}}/uploads/pdf/<?php echo session()->get('ktp') ?>" target="_blank" style="color:blue;" download><i class="fa fa-download"></i> Download Ktp</a>     
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <a href="{{URL::to('/')}}/uploads/pdf/<?php echo session()->get('ijazah') ?>" target="_blank" style="color:blue;" download><i class="fa fa-download"></i> Download Ijazah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                                        </div>
</div>
</div>

                
</div>
</div>
</div>
@endsection
<?php endif; ?>