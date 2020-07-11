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
      <?php

      foreach($tentang as $data):

      ?>
        <div class="row mb-2">
          <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6">
                <h4>Email Bpbd Yogyakarta</h4>
                <div class="input-group col-sm-12">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" value='<?= $data->email; ?>' disabled>
                </div>

                <h4>Nomor Bpbd Yogyakarta</h4>
                <div class="input-group col-sm-12">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                </div>
                <input type="text" class="form-control" value='<?= $data->no_telp; ?>' disabled>
                </div>

                <h4>Alamat Bpbd Yogyakarta</h4>
                <div class="input-group col-sm-12">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <input type="text" class="form-control" value='<?= $data->alamat; ?>' disabled>
                </div>
                
                <div style='padding-top:20px'>
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg<?= $data->id_tentang_kami;?>"><span class="fa fa-edit"> Ubah</span></button>
                </div>

                <form action="<?php echo base_url().'Admin/About/update_about_2'?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-6" style='padding-top:30px'>
                <input type="hidden" name="id_tentang_kami" value="<?= $data->id_tentang_kami;?>" required>
                    <h3>Foto</h3>
                    <img src="<?= base_url().'assets/images/' . $data->foto_tentang_kami; ?>" style="width:500px">     
                </div>
                <div class="col-sm-6" style="padding-top:5px">
                                <!-- <label for="exampleInputFile">Ubah</label> -->
                                <div class="input-group">
                                  <div class="custom-file">
                                  <input type="file" name="filefoto" class="custom-file-input" id="customFile" required>
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                </div>
                          </div>
                          <div style="padding:8px">
                          <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Ubah</button>
                          </div>
                </form>

          </div>
          
          <div class="col-sm-6">
          <form action="<?php echo base_url().'Admin/About/update_about_3'?>" method="post" enctype="multipart/form-data">
                <h3>Tentang Kami</h3>
                <input type="hidden" name="id_tentang_kami" value="<?= $data->id_tentang_kami;?>" required>
                <div class="card-body pad">
                <div class="mb-12">
                    <textarea class="textarea" name="isi"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?= $data->isi_tentang_kami; ?>
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Ubah</button> 
          </div>
          </div>
          </form>

        </div>
        <?php endforeach?>
      </div><!-- /.container-fluid -->
    </section>

    <?php
        foreach($tentang as $data):         
      ?>
           <!-- /.modal-view -->
      <div class="modal fade" id="modal-lg<?= $data->id_tentang_kami;?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url().'Admin/About/update_about_1'?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
            <input type="hidden" name="id_tentang_kami" value="<?= $data->id_tentang_kami;?>" required>
            <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data->email; ?>">
            </div>
            <div class="form-group">
                    <label>Nomor Telpon</label>
                    <input type="number" class="form-control is-valid" name="no_telp" value="<?= $data->no_telp; ?>">
                      <div class="valid-feedback">
                         *Gunakan 62
                      </div>
            </div>
            <div class="form-group">
                    <label>Nomor Whatsapp Konfirmasi</label>
                    <input type="number" class="form-control is-valid" name="no_wa" value="<?= $data->no_wa; ?>">
                      <div class="valid-feedback">
                         *Gunakan 62
                      </div>
            </div>
            <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $data->alamat; ?>">
            </div>
            <div class="modal-footer justify-content-between">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <button type="submit" class="btn btn-primary">Save</button>
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
      <?php if($this->session->flashdata('msg')=='update'):?>
          Toast.fire({
            type: 'success',
            title: 'Data berhasil diedit'
        })
      <?php elseif($this->session->flashdata('msg')=='gagal'):?>
          Toast.fire({
            type: 'error',
            title: 'Failed'
        })
    <?php endif;?>
    </script>
