


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
   
   <!-- Header part end-->

   <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">

                          <div class="row bg-light p-3 shadow">
                            <div class="col">
                              
                                   <h2 class="text-danger" >Form Lapor Pengungsi</h2>









      
      <form method="post" action="<?php echo base_url().'lapor/proses_tambah_laporan_pengungsi'; ?>">
      
            <div class="form-grup mt-4">
              <label class="font-weight-bold">NAMA</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required="required">     
            </div>

            <div class="form-grup mt-4">
              <label class="font-weight-bold">EMAIL</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email" required="required">     
            </div>

            <div class="form-grup mt-4">
              <label class="font-weight-bold">No. HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No. Hp" required="required">     
            </div>

            <div class="form-grup mt-4">
              <label class="font-weight-bold">LAPORAN</label>
                <textarea class="form-control" placeholder="Masukan Laporan" name="laporan" id="" cols="18" rows="4" required="required"></textarea>  
            </div>

            <input type="radio" name="status" value="belum ada" checked="checked" hidden="hidden">
              
            <div class="form-grup">    
                 <input class="btn_1 mb-4" type="submit" value="Kirim Laporan">
            </div>

                            </div>
                          </div>
                    
</form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->