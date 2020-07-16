


        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Data Laporan Pengungsi</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col bg-light shadow m-2 p-2">
                            
                            <table class="table table-striped border">
                          <thead>
                            <tr>
                              <th class="bg-dark" scope="col">Nama</th>
                              <th class="bg-dark" scope="col">Email</th>
                              <th class="bg-dark" scope="col">No. Hp</th>
                              <th class="bg-dark" scope="col">Isi Laporan</th>
                             <!--  <th class="bg-danger" scope="col">Status (Disetujui/Ditolak) </th> -->
                              <th class="bg-danger" scope="col">Aksi </th>
                            </tr>
                          </thead>
                         
                            <?php foreach ($lapor_pengungsi as $tampil): ?>

                                <tr>
                                    <td hidden="hidden"><?php echo $tampil['id']; ?></td>
                                    <td><?php echo $tampil['nama']; ?></td>
                                    <td><?php echo $tampil['email']; ?></td>
                                    <td><?php echo $tampil['no_hp']; ?></td>
                                    <td><?php echo $tampil['laporan']; ?></td>
                              <!--       <td><?php echo $tampil['status']; ?></td> -->

                                    <td>

                                        <div class="button" onclick="javacript: return confirm('Yakin hapus?')">
                                            <?php echo anchor('Admin/Lapor/hapus_laporan_pengungsi/'.$tampil['id'],'Hapus'); ?>
                                        </div>
                                    

                                    
                                        
                                       <!--  <div class="button">
                                            <?php // echo anchor('lapor/edit_laporan_bencana/'.$tampil['id'],'Edit'); ?>
                                        </div> -->

                                    </td>


                                </tr>
        
    <?php endforeach ?>


                        </table>




                    </div>
                </div>
            </section>
        </div>
    </div>

    
</body>

</html>