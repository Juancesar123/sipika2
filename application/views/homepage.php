<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("partials/head.php") ?>
<!-- Mirrored from www.urbanui.com/appular/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 16:31:32 GMT -->
<style>
  /* padding-bottom and top for image */
.mfp-no-margins img.mfp-img {
  padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
  top: 0;
  bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
  padding: 0;
}


/* 

for zoom animation 
uncomment this part if you haven't added this code anywhere else

*/
/*

.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.3s ease-out; 
  -moz-transition: all 0.3s ease-out; 
  -o-transition: all 0.3s ease-out; 
  transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
    opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
    opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container, 
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0;
}
*/
</style>
<body>
  <div class="container-scroller">
  <?php $this->load->view("partials/navbar")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
      <!-- partial:partials/_sidebar.html -->
     <?php $this->load->view('partials/sidebar')?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex align-items-baseline flex-wrap mt-3">
                <h2 class="mr-4 mb-0">Dashboard</h2>
                <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                  <i class="fas fa-home mr-1 text-muted"></i>
                  <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                  <p class="mb-0">Dashboard</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
             <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                  <!-- Loading Screen -->
                  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                      <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                  </div>
                  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                      <div>
                          <img data-u="image" class="img-fluid image-popup-no-margins" src="<?php echo base_url('images/peta_KK_indonesia_A0_10042018_001.jpg')?>" />
                          <img data-u="thumb" class="image-popup-no-margins" src="<?php echo base_url('images/peta_KK_indonesia_A0_10042018_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image" class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_Sumatera_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_Sumatera_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image" class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_Jawa_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_Jawa_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image" class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_BaliNusra_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_BaliNusra_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image" class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_Kalimantan_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_Kalimantan_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image" class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_Sulawesi_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_Sulawesi_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image"  class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_Maluku_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_Maluku_001.jpg')?>" />
                      </div>
                      <div>
                          <img data-u="image" class="img-fluid" src="<?php echo base_url('images/peta_indonesia_A0_2018_Papua_001.jpg')?>" />
                          <img data-u="thumb" src="<?php echo base_url('images/peta_indonesia_A0_2018_Papua_001.jpg')?>" />
                      </div>
                  </div>
                  <!-- Thumbnail Navigator -->
                  <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                      <div data-u="slides">
                          <div data-u="prototype" class="p" style="width:190px;height:90px;">
                              <div data-u="thumbnailtemplate" class="t"></div>
                              <svg viewbox="0 0 16000 16000" class="cv">
                                  <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                  <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                  <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                              </svg>
                          </div>
                      </div>
                  </div>
                  <!-- Arrow Navigator -->
                  <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                          <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                          <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                          <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                      </svg>
                  </div>
                  <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                          <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                          <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                          <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                      </svg>
                  </div>
              </div>
            </div>
             <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Persentase Total Luas</p>
                  <canvas id='myChart' ></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p> Suaka Margasatwa</p>
                      <h3 class="mb-0" id="suakacount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p>Cagar Alam</p>
                      <h3 class="mb-0" id="cagaralamcount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p>Taman Nasional</p>
                      <h3 class="mb-0" id="tamannasionalcount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p>Taman Buru</p>
                      <h3 class="mb-0" id="tamanburucount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p> Taman Wisata Alam</p>
                      <h3 class="mb-0" id="tamanwisatacount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p> Tahura</p>
                      <h3 class="mb-0" id="tamanhutanrayacount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-around align-items-center">
                    <div class="icon-rounded-primary">
                      <i class="fas fa-tree"></i>
                    </div>
                    <div>
                      <p> KSA/KPA</p>
                      <h3 class="mb-0" id="kskpacount"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php $this->load->view('partials/footer')?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php $this->load->view('partials/script') ?>
  <!-- End custom js for this page-->
  <script>
    var arr = [];
    $('document').ready(function(){
      $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
      });
      $.ajax({
        method:'GET',
        url:'getDataDashboard/1',
        success:function(data){
          var result = JSON.parse(data);
          $('#kskpacount').text(result.length);
          arr.splice(0,0,result.length);
          //array.splice(2, 0, "three");

        }
      })
      $.ajax({
        method:'GET',
        url:'getDataDashboard/2',
        success:function(data){
          var result = JSON.parse(data);
          $('#cagaralamcount').text(result.length);
          //arr.push(result.length);
          arr.splice(1,0,result.length);
        }
      })
      $.ajax({
        method:'GET',
        url:'getDataDashboard/3',
        success:function(data){
         var result = JSON.parse(data);
          $('#suakacount').text(result.length);
          //arr.push(result.length);
          arr.splice(2,0,result.length);
        }
      })
      $.ajax({
        method:'GET',
        url:'getDataDashboard/4',
        success:function(data){
          var result = JSON.parse(data);
          $('#tamanburucount').text(result.length);
          //arr.push(result.length);
          arr.splice(3,0,result.length);
        }
      })
      $.ajax({
        method:'GET',
        url:'getDataDashboard/5',
        success:function(data){
          
          var result = JSON.parse(data);
          $('#tamannasionalcount').text(result.length);
          //arr.push(result.length);
          arr.splice(4,0,result.length);
        }
      })
      $.ajax({
        method:'GET',
        url:'getDataDashboard/6',
        success:function(data){
          var result = JSON.parse(data);
          $('#tamanwisatacount').text(result.length);
         // arr.push(result.length);
         arr.splice(5,0,result.length);
        }
      })
      $.ajax({
        method:'GET',
        url:'getDataDashboard/7',
        success:function(data){
           var result = JSON.parse(data);
          $('#tamanhutanrayacount').text(result.length);
         // arr.push(data.length);
         arr.splice(6,0,result.length);
        }
      })
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
              labels: ['KS/KPA', 'Cagar Alam', 'Suaka Margasatwa', 'Taman Buru', 'Taman Nasional', 'Taman Wisata Alam','Taman Hutan Raya'],
              datasets: [{
                  label: 'Total Wilayah',
                  data: arr,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)',
                      'rgba(255, 151, 63, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 151, 63, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            title: {
              display: true,
              text: 'Persentase Total Luas Kawasan Konservarsi Di indonesia'
            },
          }
      });
    })
  </script>
</body>

<!-- Mirrored from www.urbanui.com/appular/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 16:32:17 GMT -->
</html>

