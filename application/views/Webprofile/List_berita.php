<!DOCTYPE html>
<html>
<head>
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
                    <a class="nav-link"  href="<?=base_url('Admin/Berita') ?>" >Add Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="<?=base_url('Admin/Berita/List_berita') ?>" 
                     aria-selected="true">List Berita</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  
                  <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Daftar Berita</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Judul Berita</th>
                  <th>Thumbnail</th>
                  <th>Tanggal Publish</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
          			$no=1;
          			foreach($berita as $data):         
                    ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->judul_berita; ?></td>
                  <td><img src="<?= base_url().'assets/images/'. $data->foto; ?>" style="width:90px;"></td>
                  <td><?= $data->tgl_berita; ?></td>
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
                  <td style="text-align:center;">
                        <a class="btn" href="<?php echo base_url().'Admin/Berita/edit_berita/'.$data->id_berita;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#modal-lg<?= $data->id_berita;?>"><span class="fa fa-info"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#modal-default<?= $data->id_berita;?>"><span class="fa fa-trash"></span></a>
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
                </div>
              </div>
            </div>
          </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
        foreach($berita as $data):         
    ?>
    <!-- modal-hapus -->
    <div class="modal fade" id="modal-default<?= $data->id_berita;?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/berita/hapus_berita'?>" 
            method="post" enctype="multipart/form-data">
            <div class="modal-body">
            <p>Apa Anda yakin akan mengapus Berita <b><?= $data->judul_berita;?></b> ?</p>
            <input type="hidden" name="id_berita" value="<?php echo $data->id_berita;?>"/>
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
        foreach($berita as $data):         
      ?>
           <!-- /.modal-view -->
      <div class="modal fade" id="modal-lg<?= $data->id_berita;?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Isi Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?= $data->isi_berita; ?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Ok</button> -->
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
            title: 'Berita Berhasil ditambah'
        })
      <?php elseif($this->session->flashdata('msg')=='hapus'):?>
          Toast.fire({
            type: 'success',
            title: 'Berita berhasil dihapus'
        })
      <?php elseif($this->session->flashdata('msg')=='update'):?>
          Toast.fire({
            type: 'success',
            title: 'Berita berhasil diedit'
        })
      <?php elseif($this->session->flashdata('msg')=='gagal'):?>
          Toast.fire({
            type: 'error',
            title: 'Gagal menambah data'
        })
    <?php endif;?>
    </script>

