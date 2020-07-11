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
                            <h3 class="card-title"><b>Daftar Komentar</b></h3>
                        </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Komentar</th>
                  <th>Tanggal komentar</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
          			$no=1;
          			foreach($komen as $data):         
                    ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->nama; ?></td>
                  <td><?= $data->email; ?></td>
                  <td><?= $data->komentar; ?></td>
                  <td><?= $data->tgl_komentar; ?></td>
                  <td style="text-align:center;">
                    <a class="btn" data-toggle="modal" data-target="#modal-hapus<?= $data->id_komentar;?>"><span class="fa fa-trash"></span></a>
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



       <!-- /.modal-Hapus -->
       <?php
          foreach($komen as $data):         
        ?>
      <div class="modal fade" id="modal-hapus<?= $data->id_komentar; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Komentar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
              </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'Admin/Komentar/hapus_komentar'?>" 
            method="post" enctype="multipart/form-data">
            <div class="modal-body">
            <p>Apa Anda yakin akan mengapus komentar dari <b><?= $data->email;?></b> ?</p>
            <input type="hidden" name="id_komentar" value="<?php echo $data->id_komentar;?>"/>
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


