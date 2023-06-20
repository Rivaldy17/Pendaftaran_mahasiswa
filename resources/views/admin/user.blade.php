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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">List User</a></li>
                        </ol>
                    </div>
                </div>
                <button type="button" class="btn btn-succes" data-toggle="modal" data-target="#basicModale"><i
                                                                class="fa fa-pencil color-muted"></i> Tambah User</button><br><br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List User</h4>
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
@if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Akun</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($user as $usr) : ?>
                                            <tr>
                                                <td><?php echo $usr->nama; ?></td>
                                                <td><?php echo $usr->email; ?></td>
                                                <?php if($usr->role == 1) : ?>
                                                <td>&nbsp;User</td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <?php if($usr->role == 669) : ?>
                                                <td>&nbsp;Admin</td>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <td><?php echo $usr->created_at ?></td>
                                                <?php if($usr->status == 1) : ?>
                                                <td>Sudah Aktif</td>
                                                <?php else : ?>
                                                    <?php endif; ?>
                                                    <?php if($usr->status == 0) : ?>
                                                <td>Belum Aktif</td>
                                                <?php else : ?>
                                                    <?php endif; ?>
                                                    <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal-<?php echo $usr->id_mahasiswa; ?>"><i
                                                                class="fa fa-pencil color-muted"></i> Edit</button>
                                                        &nbsp;&nbsp;
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o color-muted"></i><a style="color: white;" href="{{url('admin/delete')}}/<?php echo $usr->id_mahasiswa; ?>" onclick="return confirm('Are you sure ?')"> Delete</a></button>
                                                    </td>
                                            </tr>
                                            <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="basicModal-<?php echo $usr->id_mahasiswa; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><?php echo $usr->nama; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{url('user/update')}}/<?php echo $usr->id_mahasiswa; ?>" method="post">
                <?= csrf_field(); ?>
                                                <div class="modal-body">
                                                    <label>Nama Lengkap</label><br>
                                                    <input type="text" name="nama" class="form-control" value="<?php echo $usr->nama; ?>" placeorder="Full Name"><br>
                                                    <label>Email</label><br>
                                                    <input type="text" name="email" class="form-control" value="<?php echo $usr->email; ?>" placeorder="Email"><br>
                                                    <label>Role</label><br>
                                                    <select class="form-control" name="role">
                                                <?php if($usr->role == 669) : ?>
                                                <option value="669" selected>Admin</option>
                                                <option value="1">User</option>
                                                <?php else : ?>
                                                    <?php endif; ?>
                                                    <?php if($usr->role == 1) : ?>
                                                <option value="1" selected>User</option>
                                                <option value="669">Admin</option>
                                                <?php else : ?>
                                                    <?php endif; ?>
                                            </select><br>
                                            <hr>
                                                    <label>Status</label><br>
                                                    <div class="form-group">
                                            <select class="form-control" name="status">
                                            <?php if($usr->status == 1) : ?>
                                                <option value="1" selected>Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                                <?php else : ?>
                                                <?php endif; ?>
                                                <?php if($usr->status == 0) : ?>
                                                <option value="0" selected>Tidak Aktif</option>
                                                <option value="1">Aktif</option>
                                                <?php else : ?>
                                                <?php endif; ?>
                                            </select><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- EndModal -->
                                            <?php endforeach ?> 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Nama</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Akun</th>
                                                <th>Status</th>
                                                <th>Action<th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                 
              <!-- Modal -->
        <div class="modal fade" id="basicModale">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah User</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('actionadmin')}}" method="post">
                <?= csrf_field(); ?>
                                                <div class="modal-body">
                                                    <label>Full Name</label><br>
                                                    <input tpye="text" class="form-control" name="nama" placeholder="Full Name"><br>
                                                    <label>Email</label><br>
                                                    <input type="text" class="form-control" name="email" placeholder="Email"><br>
                                                    <label>Password</label><br>
                                                    <input type="password" class="form-control" name="password" placeholder="Password"><br>
                                                    <input name="role" type="hidden" value="1" placeholder="Password" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- EndModal -->   
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