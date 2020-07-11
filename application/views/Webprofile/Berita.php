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
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="<?=base_url('Admin/Berita') ?>" 
                    role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Add Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id=""  href="<?=base_url('Admin/Berita/List_berita') ?>" 
                     aria-selected="true">List Berita</a>
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
                        <div class="card card-default">
                          <!-- <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                          </div> -->
                          <!-- /.card-header -->
                          <!-- form start -->
                        <form action="<?php echo base_url().'admin/berita/simpan_berita'?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                              <div class="form-group">
                                <h3>Judul</h3>
                                <input type="text" name="judul" value="<?= set_value('judul'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul atau artikel">
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                                <h3>Isi Berita</h3>
                                <div class="card-body pad">
                          <div class="mb-3">
                            <textarea class="textarea" name="isi" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= set_value('isi'); ?></textarea>
                                      <?= form_error('isi', '<small class="text-danger pl-3">', '</small>') ?>
                          </div>
                        </div>
                            <div class="col-sm-3">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                  <input type="file" name="filefoto" class="custom-file-input" id="customFile" required>
                                  <?= form_error('filefoto', '<small class="text-danger pl-3">', '</small>') ?>
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                </div>
                            </div>
                        </div>
                            
                            <td> 
                            <div style='padding:20px'>                
                                    <button type="submit" class="btn btn-block btn-primary col-1"><span class="fa fa-pencil"></span> Publish</button>
                            </div>
                            </td>
                            
                    </form>


          <!-- bs-custom-file-input -->
      
                </div>
              </div>
            </div>
          </div>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
