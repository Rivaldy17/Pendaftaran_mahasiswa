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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Program Studi</h4>
								<span><?=setting()->nama_cam ?></span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 30px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
                                        $i = 0;
                                        foreach($studi as $st) : 
                                        $i++;
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $st->jurusan; ?></td>
                                            </tr>
											<?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
											<th>No</th>
                                                <th>Jurusan</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Location</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                            </tr>
                                            <?php foreach($lokasi as $lk) : ?>
                                            <tr>
                                            <td><?php echo $lk->provinsi; ?></td>
                                            <td><?php echo $lk->kota; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </thead>
                                        <tbody>
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