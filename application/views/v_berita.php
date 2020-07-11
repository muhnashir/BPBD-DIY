


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Berita</h2>
                            <p>Lazismu<span>-</span>Umbulharjo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php 
                        foreach($berita as $data):
                        $brita=$data->isi_berita;
                        // echo substr($brita,0,3);
                        ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img src="<?= base_url().'assets/images/'. $data->foto; ?>"class="card-img rounded-0" alt="">
                                <a href="<?= base_url().'News/readmore/'. $data->id_berita; ?>" class="blog_item_date">
                                    <!-- <h3>15</h3> -->
                                    <p>Read More</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?= base_url().'News/readmore/'. $data->id_berita; ?>">
                                    <h2><?= $data->judul_berita; ?></h2>
                                </a>
                                <div class="col-md-4">
                                    <p><?=character_limiter($brita,29); ?></p>
                                <div>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i><?= $data->tgl_berita; ?></a></li>
                                    <!-- <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li> -->
                                </ul>
                            </div>
                        </article>
                        <?php endforeach ?>


                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                        <div class="row">
                            <div class="col">
                                <!--Tampilkan pagination-->
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                               <div class="form-group">
                                  <div class="input-group mb-3">
                                     <input type="text" class="form-control" name="search_text" id="search_text" placeholder='Cari Berita'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Berita'">
                                     <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                     </div>
                                  </div>
                               </div>
                               <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                            </form>
                         </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Judul Berita</h4>
                            <ul class="list cat-list">
                            <?php 
                                foreach($news as $data):
                                ?>
                                <li>
                                    <a href="<?= base_url().'News/readmore/'. $data->id_berita; ?>" class="d-flex">
                                        <p><?= $data->judul_berita; ?></p>
                                    </a>
                                </li>
                            <?php endforeach ?>
                            </ul>
                        </aside>

                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>News/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
