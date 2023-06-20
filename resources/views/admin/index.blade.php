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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-user text-success border-success"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text"><a href="list_user">User</a></div>
                                    <div class="stat-digit"><?php echo count($user); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-map-alt text-primary border-primary"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text"><a href="list_lokasi">Lokasi</a></div>
                                    <div class="stat-digit"><?php echo count($lokasi); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-agenda text-pink border-pink"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text"><a href="list_studi">Program Studi</a></div>
                                    <div class="stat-digit"><?php echo count($studi); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="ti-clipboard text-danger border-danger"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text"><a href="list_calon">Sudah Daftar</a></div>
                                    <div class="stat-digit"><?php echo count($daftar); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Akun</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($user as $usr) : ?>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="assets/tmp_dashboard/images/avatar/1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td><?php echo $usr->nama ?></td>
                                                <td><span><?php echo $usr->created_at ?></span></td>
                                                <?php if($usr->status == 1) : ?>
                                                <td><span class="badge badge-success">Aktif</span></td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <?php if($usr->status == 0) : ?>
                                                <td><span class="badge badge-danger">Belum Aktif</span></td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
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