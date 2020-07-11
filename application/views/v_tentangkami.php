
<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
							<h2>Tentang Kami</h2>
							<p>BPBD <span>/</span>Yogyakarta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<section class="sample-text-area">
		<div class="container box_1170">
			<h3 class="text-heading">BPBD Yogyakarta</h3>
            <?php 
            
            foreach($about as $data):
            
            ?>
			<!-- <p class="sample-text"> -->
				<?= $data->isi_tentang_kami; ?>
			<!-- </p> -->
            <?php 
            
            endforeach

            ?>
		</div>
	</section>
    

	