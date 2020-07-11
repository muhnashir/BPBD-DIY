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
                    <a class="nav-link active"  href="#" 
                    role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Mitra</a>
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
                  <th>Nama Mitra</th>
                  <th>Deskripsi</th>
                  <th>Tanggal Upload</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
          			$no=1;
          			foreach($m as $data):         
                    ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->nama_mitra; ?></td>
                  <td><?= $data->deskripsi_mitra; ?></td>
                  <td><?= $data->tgl_upload; ?></td>
                  <td>
                  <a class="btn" data-toggle="modal" data-target="#modal-edit<?= $data->id_mitra;?>"><span class="fa fa-pencil"></span></a>
                    <a class="btn" data-toggle="modal" data-target="#modal-info<?= $data->id_mitra;?>"><span class="fa fa-info"></span></a>
                    <a class="btn" data-toggle="modal" data-target="#modal-hapus<?= $data->id_mitra;?>"><span class="fa fa-trash"></span></a>
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
              <h4 class="modal-title">Tambah Mitra</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?= base_url().'Admin/Mitra/addmitra'?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mitra</label>
                    <input type="text" class="form-control" name="nama_mitra" placeholder="Masukkan Nama mitra" required>
                  </div>
                  <!-- <div class="col-sm-12"> -->
                      <div class="form-group">
                        <label>Deskripsi Mitra</label>
                        <textarea class="form-control" rows="3" name="deskripsi_mitra" placeholder="Masukkan deskripsi" required></textarea>
                      </div>
                    <!-- </div> -->
                    <div class="col-sm-6">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                  <input type="file" name="filefoto" class="custom-file-input" id="customFile" required>
                                  <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                </div>
                                </div>
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
          foreach($m as $data):         
        ?>
      <div class="modal fade" id="modal-info<?= $data->id_mitra; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View foto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
              <img src="<?= base_url().'assets/images/'. $data->foto_mitra; ?>" style="width:500px;">
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
          foreach($m as $data):         
        ?>
      <div class="modal fade" id="modal-hapus<?= $data->id_mitra; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Mitra</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'Admin/Mitra/hapus_mitra'?>" 
            method="post" enctype="multipart/form-data">
            <div class="modal-body">
            <p>Apa Anda yakin akan mengapus mitra <b><?= $data->nama_mitra;?></b> ?</p>
            <input type="hidden" name="id_mitra" value="<?php echo $data->id_mitra;?>"/>
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
          foreach($m as $data):         
      ?>
      <!-- /.modal-Edit -->
      <div class="modal fade" id="modal-edit<?= $data->id_mitra; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit data Mitra</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?= base_url().'Admin/Mitra/editmitra'?>" enctype="multipart/form-data">
                <div class="card-body">
                <input type="hidden" name="id_mitra" value="<?php echo $data->id_mitra;?>"/>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="text" class="form-control" name="nama_mitra" value="<?= $data->nama_mitra; ?>" required>
                  </div>
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi_mitra"><?= $data->deskripsi_mitra; ?></textarea>
                      </div>
                      <div class="col-sm-6">
                          <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                            <div class="custom-file">
                            <input type="file" name="filefoto" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                            </div>
                            </div>
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

