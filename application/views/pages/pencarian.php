<html>
    <?php $this->load->view("partials/head")?>
   
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
                            <h2 class="mr-4 mb-0">Pencarian</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Pencarian</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pencarian</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Masukkan Kata Kunci</label>
                                                <input type="text"  class="form-control" id="katakunci" name="">
                                            </div>
                                            <button class="btn btn-primary" id="cari2"><i class="fa fa-search"></i> Cari</button>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:10px;" id="listresult">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $this->load->view('partials/footer')?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/script') ?>
    <script src="<?php echo base_url('js/data-table.js')?>"></script>
    <script>
        $('document').ready(function(){
            $('#cari2').click(function(){
                $('#listresult').html('');
                var katakunci = $("#katakunci").val();
                $.ajax({
                    url:'pencarian/cari/'+katakunci,
                    method:'GET',
                    success:function(data){
                        var result  = JSON.parse(data);
                       result.forEach(function(element) {
                           var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.pulau+"</p><p class='card-text'>Provinsi : "+element.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.kabupaten+"</p><p class='card-text'>Luas : "+element.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                            $("#listresult").append(html);
                       });

                        
                       
                    }
                })
            })
        })
    </script>
</body>
</html>