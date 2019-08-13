<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("partials/head.php") ?>
<!-- Mirrored from www.urbanui.com/appular/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 16:31:32 GMT -->

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
            <div class="col-xs-12 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_KK_indonesia_A0_10042018_001.jpg')?>" class="img-fluid">
            
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_Sumatera_001.jpg')?>" class="img-fluid">
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_Jawa_001.jpg')?>" class="img-fluid">
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_BaliNusra_001.jpg')?>" class="img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_Kalimantan_001.jpg')?>" class="img-fluid">
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_Sulawesi_001.jpg')?>" class="img-fluid">
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_Maluku_001.jpg')?>" class="img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <img src="<?php echo base_url('images/peta_indonesia_A0_2018_Papua_001.jpg')?>" class="img-fluid">
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
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Persentase Total Luas</p>
                  <canvas id='myChart' ></canvas>
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
      console.log(arr);
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
                        beginAtZero: true
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

