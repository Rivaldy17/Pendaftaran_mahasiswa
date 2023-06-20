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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">List Lokasi</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Lokasi</h4>
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
                                    <table id="example" class="display" style="min-width: 445px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 0;
                                            foreach($lokasi as $lk) : 
                                                $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $lk->provinsi; ?></td>
                                                <td><?php echo $lk->kota; ?></td>
                                                    <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal1-<?php echo $lk->id_lokasi; ?>"><i
                                                                class="fa fa-pencil color-muted"></i> Edit</button>
                                                        &nbsp;&nbsp;
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o color-muted"></i><a style="color: white;" href="{{url('lokasi/delete')}}/<?php echo $lk->id_lokasi; ?>" onclick="return confirm('Are you sure ?')"> Delete</a></button>
                                                    </td>
                                            </tr>
                                             <!-- Modal -->
<div class="modal fade" id="basicModal1-<?php echo $lk->id_lokasi; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><?php echo $lk->kota; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{url('lokasi/update')}}/<?php echo $lk->id_lokasi; ?>" method="post">
                <?= csrf_field(); ?>
                                                <div class="modal-body">
                                                    <label>Provinsi</label><br>
                                                    <input type="text" name="provinsi" class="form-control" value="<?php echo $lk->provinsi; ?>" placeorder="Provinsi"><br>
                                                    <label>Kota</label><br>
                                                    <input type="text" name="kota" class="form-control" value="<?php echo $lk->kota; ?>" placeorder="Kota"><br>
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
                                            <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{route('actionlokasi')}}" method="post">
                                    <?= csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-xl-13">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-provinsi">Provinsi
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="form-control" id="val-provinsi" name="provinsi">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-kota">Kota <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="form-control" id="val-kota" name="kota">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>    
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
@endsection
<?php else : ?>
    <?php echo "<script>
									
										window.location.href='404';
										</script>";
								?>
<?php endif; ?>