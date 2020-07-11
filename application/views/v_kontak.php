<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="../template.css" />
    <script type="text/javascript" src='../test-credentials.js'></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  <script type="text/javascript" >window.ENV_VARIABLE = 'https://developer.here.com'</script><script src='https://developer.here.com/javascript/src/iframeheight.js'></script>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Kontak</h2>
                            <p>Lazismu<span>-</span>Umbulharjo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat:-7.810453, lng:110.387268};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat:-7.810453, lng:110.387268},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKYaLHIM5G70-3AwTkJ2dh8uvkQZk5mlo&callback=initMap"></script> -->
        
      </div>
      <div id="map"></div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Saran Untuk Lazismu Umbulharjo</h2>
        </div>
        <div class="col-lg-8">
        <?= $this->session->flashdata('msg') ?> 
        <?php echo form_open('Kontak/addsaran'); ?>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="komentar" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan saran'" placeholder = 'Masukkan saran'></textarea>
                    <?= form_error('komentar', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan nama anda'" placeholder = 'Masukkan nama anda'>
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan email anda'" placeholder = 'Masukkan email anda'>
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Kirim</button>
            </div>
          </form>
        </div>
        <?php
                foreach($about as $data):
        ?>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Alamat</h3>
              <p><?= $data->alamat; ?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>Nomor Telpon</h3>
              <p><?= $data->no_telp; ?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>E-mail</h3>
              <p><?= $data->email; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>


  <script>


                  
                  


/**
 * Adds markers to the map highlighting the locations of the captials of
 * France, Italy, Germany, Spain and the United Kingdom.
 *
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addMarkersToMap(map) {
    var lazismu = new H.map.Marker({lat:-7.810453, lng:110.387268});
    map.addObject(lazismu);

}

/**
 * Boilerplate map initialization code starts below:
 */

//Step 1: initialize communication with the platform
// In your own code, replace variable window.apikey with your own apikey
var platform = new H.service.Platform({
  apikey: 'W7azqbbeHgTzK5US3BksJv9OpWIuMGww55nyTXQCGBo'
});
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map,{
  center: {lat:-7.810453, lng:110.387268},
  zoom: 4,
  pixelRatio: window.devicePixelRatio || 1
});
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
window.onload = function () {
  addMarkersToMap(map);
}                  


         

  </script>




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