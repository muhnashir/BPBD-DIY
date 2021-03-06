<!DOCTYPE html>
<html>
<head>
  <!-- SweetAlert2 -->
  
</head>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <div class="row">
          <div class="col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active"  href="<?=base_url('Admin/Dokumentasi') ?>" 
                    role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Video</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id=""  href="<?=base_url('Admin/Dokumentasi/foto') ?>" 
                     aria-selected="true">Foto</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <!-- left column -->
                      <div class="col-md-12">
                        <!-- general form elements -->
                        


                        <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">DataTable with default features</h3> -->
              <button type="submit" data-toggle="modal" data-target="#modal-lg" class="btn btn-primary col-1"><span class="fa fa-plus"> Add</span></button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama kegiatan</th>
                  <th>Deskripsi</th>
                  <th>Tanggal dokumentasi</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
          			$no=1;
          			foreach($dokumentasi as $data):         
                    ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->nama_kegiatan; ?></td>
                  <td><?= $data->deskripsi; ?></td>
                  <td><?= $data->tgl_dokumentasi_video; ?></td>
                  <td>
                  <?php 
                  $akt=$data->status;
                  if($akt==1){
                    ?>
                      <span class="badge badge-success"> Aktif </span>
                    <?php  
                  }else{
                    ?>
                    <span class="badge badge-danger">Tidak aktif</span>
                    <?php 
                  }
                  
                  ?>
                  </td>
                  <td>
                  <a class="btn" data-toggle="modal" data-target="#modal-edit<?= $data->id_dokumentasi_video;?>"><span class="fa fa-pencil"></span></a>
                    <a class="btn" data-toggle="modal" data-target="#modal-info<?= $data->id_dokumentasi_video;?>"><span class="fa fa-info"></span></a>
                    <a class="btn" data-toggle="modal" data-target="#modal-hapus<?= $data->id_dokumentasi_video;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                <?php endforeach?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer> -->



            </div>
          </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

           <!-- /.modal-Insert -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?= base_url().'Admin/Dokumentasi/addvideo'?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
                  </div>
                  <!-- <div class="col-sm-12"> -->
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukkan deskripsi" required></textarea>
                      </div>
                    <!-- </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Link Video Youtube</label>
                    <input type="text" class="form-control" name="video" placeholder="Masukkan Link" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


            <!-- /.modal-View -->

        <?php
          foreach($dokumentasi as $data):         
        ?>
      <div class="modal fade" id="modal-info<?= $data->id_dokumentasi_video; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
              <iframe width="560px" height="315px" src="<?= $data->video; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-1">
            </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php endforeach?>


       <!-- /.modal-Hapus -->
       <?php
          foreach($dokumentasi as $data):         
        ?>
      <div class="modal fade" id="modal-hapus<?= $data->id_dokumentasi_video; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'Admin/Dokumentasi/hapus_video'?>" 
            method="post" enctype="multipart/form-data">
            <div class="modal-body">
            <p>Apa Anda yakin akan mengapus video <b><?= $data->nama_kegiatan;?></b> ?</p>
            <input type="hidden" name="id_dokumentasi_video" value="<?php echo $data->id_dokumentasi_video;?>"/>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php endforeach?>


      <?php
          foreach($dokumentasi as $data):         
      ?>
      <!-- /.modal-Edit -->
      <div class="modal fade" id="modal-edit<?= $data->id_dokumentasi_video; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit data Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?= base_url().'Admin/Dokumentasi/editvideo'?>">
                <div class="card-body">
                <input type="hidden" name="id_dokumentasi_video" value="<?php echo $data->id_dokumentasi_video;?>"/>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="text" class="form-control" name="nama_kegiatan" value="<?= $data->nama_kegiatan; ?>" required>
                  </div>
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"><?= $data->deskripsi; ?></textarea>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Link Video Youtube</label>
                    <input type="text" class="form-control" name="video" value="<?= $data->video; ?>" required>
                  </div>
                  <label>Status</label>
                  <div class="form-group">
                    <select class="form-control select2" name="status" style="width: 20%;">
                      <option value="1" <?php if($data->status==1){
                        echo "selected"; 
                        }
                          ?>>Aktif</option>
                      <option value="0" <?php if($data->status==0){
                        echo "selected"; 
                        }
                          ?>>Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><span class="fa fa-edit"> Ubah</span></button>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php endforeach?>


      <script type="text/javascript">
      const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            // timerProgressBar: true,
            onOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
      })
      <?php if($this->session->flashdata('msg')=='success'):?>
          Toast.fire({
            type: 'success',
            title: 'Data Berhasil ditambah'
        })
      <?php elseif($this->session->flashdata('msg')=='hapus'):?>
          Toast.fire({
            type: 'success',
            title: 'data berhasil dihapus'
        })
      <?php elseif($this->session->flashdata('msg')=='update'):?>
          Toast.fire({
            type: 'success',
            title: 'Data berhasil diedit'
        })
      <?php elseif($this->session->flashdata('msg')=='gagal'):?>
          Toast.fire({
            type: 'error',
            title: 'Gagal menambah data'
        })
    <?php endif;?>
    </script>

