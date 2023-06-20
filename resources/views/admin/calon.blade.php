<?php if(session()->get('role') == 669) : ?>
@extends('template.tmp_admin')
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">List Calon Mahasiswa</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Calon Mahasiswa <?=setting()->nama_cam ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Jenis kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($calon as $cl) : ?>
                                            <tr>
                                                <td><?php echo $cl->nama; ?></td>
                                                <td><?php echo $cl->email; ?></td>
                                                <?php 
                                                $l = 'L';
                                                if($cl->jkl == $l) : ?>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Laki-Laki</td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <?php 
                                                  $p = 'P';
                                                if($cl->jkl == $p) : ?>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Perempuan</td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cl->tgl_laghir; ?></td>
                                                <td><?php echo $cl->alamat; ?></td>
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal3-<?php echo $cl->id_mahasiswa; ?>"><i
                                                                class="fa fa-eye color-muted"></i> View</button>
                                                        &nbsp;&nbsp;
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o color-muted"></i><a style="color: white;" href="{{url('calon/delete')}}/<?php echo $cl->id_mahasiswa; ?>" onclick="return confirm('Are you sure ?')"> Delete</a></button>
                                                    </td>
                                            </tr>
                                             <!-- Modal -->
<div class="modal fade" id="basicModal3-<?php echo $cl->id_mahasiswa; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Mahasiswa</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                <div class="row g-0">
                                                    <div class="col-md-6">
                                                    <label>Full Name</label><br>
                                                    <input type="text" class="form-control" value="<?php echo $cl->nama; ?>" readonly><br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email</label><br>
                                                    <input type="text" class="form-control" value="<?php echo $cl->email; ?>" readonly><br>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Jenis Kelamin</label><br>
                                                    <?php  
                                                    $l = 'L';
                                                    if($cl->jkl == $l) : ?>
                                                    <input type="text" class="form-control" value="Laki-Laki" readonly><br>
                                                    <?php else : ?>
                                                    <?php endif; ?>
                                                    <?php  
                                                    $p = 'P';
                                                    if($cl->jkl == $p) : ?>
                                                    <input type="text" class="form-control" value="Perempuan" readonly><br>
                                                    <?php else : ?>
                                                    <?php endif; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Tanggal Lahir</label><br>
                                                    <input type="text" class="form-control" value="<?php echo $cl->tgl_laghir; ?>" readonly><br>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Agama</label><br>
                                                    <input type="text" class="form-control" value="<?php echo $cl->agama; ?>" readonly><br>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Pendidikan Terakhir</label><br>
                                                    <input type="text" class="form-control" value="<?php echo $cl->pdk_trkhr; ?>" readonly><br>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Lokasi Kampus Yang Di Pilih</label><br>
                                                    <input type="text" class="form-control" value="<?php echo $cl->kota; ?>" readonly><br>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Alamat</label><br>
                                                    <textarea class="form-control" rows="5" readonly><?php echo $cl->alamat; ?></textarea><br>
                                                    </div>
                                                    <div class="col-md-9">
                                                    <a href="{{URL::to('/')}}/uploads/pdf/<?php echo $cl->ktp; ?>" target="_blank" style="color:blue;" download><i class="fa fa-download"></i> Download Ktp</a>
                                                    &nbsp;&nbsp;<a href="{{URL::to('/')}}/uploads/pdf/<?php echo $cl->ijazah; ?>" target="_blank" style="color:blue;" download><i class="fa fa-download"></i> Download Ijazah</a>
                                                    </div>
                                                </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- EndModal -->
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                                <th>Email</th>
                                                <th>Jenis kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
</div>
</div>
</div>
@endsection
<?php else : ?>
    <?php echo "<script>
									
										window.location.href='404';
										</script>";
								?>
<?php endif; ?>