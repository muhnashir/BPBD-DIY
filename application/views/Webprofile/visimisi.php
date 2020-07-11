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

      foreach($vm as $data):

      ?>
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="row">
                
          
                <div class="col-sm-6">
                      <form action="<?php echo base_url().'Admin/Visimisi/v_update'?>" method="post" enctype="multipart/form-data">
                              <h3>Visi</h3>
                              <input type="hidden" name="id_visi_misi" value="<?= $data->id_visi_misi;?>" required>
                              <div class="card-body pad">
                                <div class="mb-12">
                                    <textarea class="textarea" name="visi"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?= $data->visi; ?>
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Ubah</button> 
                                </div>
                    </form>
                </div>

                <div class="col-sm-6">
                      <form action="<?php echo base_url().'Admin/Visimisi/m_update'?>" method="post" enctype="multipart/form-data">
                              <h3>Misi</h3>
                              <input type="hidden" name="id_visi_misi" value="<?= $data->id_visi_misi;?>" required>
                              <div class="card-body pad">
                                <div class="mb-12">
                                    <textarea class="textarea" name="misi"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?= $data->misi; ?>
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Ubah</button> 
                                </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <?php endforeach?>
      </div><!-- /.container-fluid -->
    </section>

    <!--  -->


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
