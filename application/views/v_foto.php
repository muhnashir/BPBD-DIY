<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/dist/jquery.fancybox.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="<?= base_url('') ?>assets/dist/jquery.fancybox.min.js"></script>
  


  <style>
  .batas{
      width: 1200px;
      min-height : 50px;
      background : #fff;
      margin : 70px auto;
      display : flex;
      flex-direction : row;
      flex-wrap:wrap;
  }

  .batas .bo{
      position: relative;
      width : 380px;
      height: 200px;
      background : #ff0;
      margin: 10px;
      box-sizing: border-box;
      display: inline-block;
  }

  .batas .bo .imgBox{
      position : relative;
      overflow : hidden;
  }

  .batas .bo .imgBox img{
      max-width : 100%;
      transition : transform 2s;
  }
  .batas .bo:hover .imgBox img{
      transform: scale(1.2);
  }

  .batas .bo .detail{
      position : absolute;
      top:10px;
      left: 10px;
      bottom :10px;
      right : 10px;
      background : rgba(0,0,0,.8);
      transform : scaleY(0);
      transition : transform .5s;
  }

  .batas .bo:hover .detail{
      transform : scaleY(1);
  }


  .batas .bo .detail .conten{
      position : absolute;
      top:80px;
      transform : translateY(-50%);
      text-align : center;
      padding : 15px;
      color : #fff;
  }

  .batas .bo .detail .conten h2{
      margin : 20px;
      padding : 0px;
      font-size: 20px;
      color : #ff0;
  }

  .batas .bo .detail .conten p{
      margin : 10px 0 0;
      padding : 0px;
  }

  .fancybox-caption{
      color:#fff;
      font-family:arial;
      font-size:21px;
  }
  
  </style>
<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
							<h2>Foto</h2>
							<p>Lazismu <span>/</span>Umbulharjo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<!-- Start Align Area -->
	<!-- <div class="whole-wrap">
		<div class="container box_1170">
			
			<div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
                <?php 
                foreach($dok as $data):
                ?>
					<div class="col-md-4">
						<a href="<?= base_url().'assets/images/'. $data->foto; ?>" class="img-pop-up">
                            <div class="single-gallery-image" data-toggle="tooltip" data-placement="bottom" title="<?= $data->nama_kegiatan;?>" style="background: url(<?= base_url().'assets/images/'. $data->foto; ?>);"></div>
                        </a>
					</div>
                <?php endforeach ?>
				</div>
			</div>
		</div>
	</div> -->
    <!-- End Align Area -->
    <div class="whole-wrap">
		<div class="container box_1170">
            <div class="section-top-border"> 
            <h2>Foto Lazismu Umbulharjo</h2>
                <div class="batas">
                    <?php 
                    foreach($dok as $data):
                    ?>
                        <div class="col-md-4">
                        <div class="bo">
                            <a href="<?= base_url().'assets/images/'. $data->foto; ?>" data-fancybox="images" data-caption="<?= $data->nama_kegiatan; ?>" 
                            class="img-pop-up">
                            <div class="imgBox">
                                <img src="<?= base_url().'assets/images/'. $data->foto;?>">
                            </div>
                            <div class="detail">  
                                <div class="conten">
                                    <h2><?= $data->nama_kegiatan; ?></h2>
                                    <p><?= $data->deskripsi; ?></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        </div>
                    <?php endforeach ?>    
                </div>
            </div>
        </div>
    </div>
    
<!-- <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script> -->

	