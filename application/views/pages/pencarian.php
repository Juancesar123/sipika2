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
                                        <div class="col-md-6" id="filter">
                                            <div class="form-group">
                                                <label>Jenis</label>
                                                <select class="form-control" id="filterby">
                                                    <option value ="" selected>--pilih jenis--</option>
                                                    <option value="1">Tumbuhan</option>
                                                    <option value="2">Satwa</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h5>Luas</h5>
                                                <label>Luas dari</label>
                                                <input type="text" class="form-control" id="luasdari">
                                                 <label>Luas ke</label>
                                                <input type="text" class="form-control" id="luaske">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Masukkan Kata Kunci</label>
                                                <?php 
                                                    if(isset($_GET['seacrh'])){
                                                ?>
                                                    <input type="text"  class="form-control" id="katakunci" name="" value="<?php echo $_GET['seacrh'];?>">
                                                 <?php } else { ?>
                                                    <input type="text"  class="form-control" id="katakunci" name="">
                                                <?php }; ?>
                                            </div>
                                            <button class="btn btn-primary" id="cari2"><i class="fa fa-search" ></i> Cari</button>
                                            <button class="btn btn-primary" id="showfilter">Advance Search</button>
                                        </div>
                                  
                                </div>
                                  <div class="row" style="margin-top:10px;" id="listresult">

                                    </div>
                            </div>
                        </div>
                    </div>
                <?php $this->load->view('partials/footer')?>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php $this->load->view('partials/script') ?>
    <script src="<?php echo base_url('js/data-table.js')?>"></script>
    <script>
        $('document').ready(function(){
             $("#filter").hide();
            $("#showfilter").click(function(){
                $("#filter").show();
            })

            $('#cari2').click(function(){
                $('#listresult').html('');
                var katakunci = $("#katakunci").val();
                var filter = $("#filterby").val(); 
                    if (filter == "") {
                        $.ajax({
                            url:'pencarian/cari',
                            method:'GET',
                            success:function(data){
                                var result  = JSON.parse(data);
                                console.log(result);
                               result.forEach(function(element) {
                                    var n = element.perkembangan_kawasan.nama_kawasan.search(katakunci);
                                    if(n == -1){
                                       return false
                                    }else{
                                        if(element.jenis == 1){
                                            var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.perkembangan_kawasan.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.perkembangan_kawasan.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.perkembangan_kawasan.pulau+"</p><p class='card-text'>Provinsi : "+element.perkembangan_kawasan.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.perkembangan_kawasan.kabupaten+"</p><p class='card-text'>Nama Tumbuhan : "+element.nama+"</p><p class='card-text'>Nama Latin : "+element.nama_latin+"</p><p class='card-text'>Luas : "+element.perkembangan_kawasan.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.perkembangan_kawasan.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                            $("#listresult").append(html);
                                        }else{
                                            var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.perkembangan_kawasan.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.perkembangan_kawasan.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.perkembangan_kawasan.pulau+"</p><p class='card-text'>Provinsi : "+element.perkembangan_kawasan.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.perkembangan_kawasan.kabupaten+"</p><p class='card-text'>Nama Satwa : "+element.nama+"</p><p class='card-text'>Nama Latin : "+element.nama_latin+"</p><p class='card-text'>Luas : "+element.perkembangan_kawasan.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.perkembangan_kawasan.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                           $("#listresult").append(html);
                                        }
                                    }
                               });
                            }
                        })
                    }else{
                        var dari = $("#luasdari").val();
                        var ke = $("#luaske").val();
                        $.ajax({
                            url:'pencarian/advance/'+filter,
                            method:'GET',
                            success:function(data){
                                var result  = JSON.parse(data);
                                console.log(result);
                               result.forEach(function(element) {
                                    var n = element.perkembangan_kawasan.nama_kawasan.search(katakunci);

                                    if(n == -1){
                                       return false
                                    }else{
                                        if(filter == 1 && dari == "" && ke==""){
                                            var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.perkembangan_kawasan.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.perkembangan_kawasan.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.perkembangan_kawasan.pulau+"</p><p class='card-text'>Provinsi : "+element.perkembangan_kawasan.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.perkembangan_kawasan.kabupaten+"</p><p class='card-text'>Nama Tumbuhan : "+element.nama+"</p><p class='card-text'>Nama Latin : "+element.nama_latin+"</p><p class='card-text'>Luas : "+element.perkembangan_kawasan.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.perkembangan_kawasan.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                            $("#listresult").append(html);
                                        }else if(filter == 2 && dari == "" && ke == ""){
                                            var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.perkembangan_kawasan.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.perkembangan_kawasan.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.perkembangan_kawasan.pulau+"</p><p class='card-text'>Provinsi : "+element.perkembangan_kawasan.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.perkembangan_kawasan.kabupaten+"</p><p class='card-text'>Nama Satwa : "+element.nama+"</p><p class='card-text'>Nama Latin : "+element.nama_latin+"</p><p class='card-text'>Luas : "+element.perkembangan_kawasan.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.perkembangan_kawasan.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                           $("#listresult").append(html);
                                        }else if(filter == 1 && element.perkembangan_kawasan.luas_kawasan > dari && element.perkembangan_kawasan.luas_kawasan <= ke){
                                             var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.perkembangan_kawasan.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.perkembangan_kawasan.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.perkembangan_kawasan.pulau+"</p><p class='card-text'>Provinsi : "+element.perkembangan_kawasan.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.perkembangan_kawasan.kabupaten+"</p><p class='card-text'>Nama Tumbuhan : "+element.nama+"</p><p class='card-text'>Nama Latin : "+element.nama_latin+"</p><p class='card-text'>Luas : "+element.perkembangan_kawasan.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.perkembangan_kawasan.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                            $("#listresult").append(html);

                                        }else if(filter == 2 && element.perkembangan_kawasan.luas_kawasan > dari && element.perkembangan_kawasan.luas_kawasan <= ke){
                                             var html = "<div class='col-md-3'><div class='card' style='width: 18rem;'> <img src='<?php echo constant('API_URL');?>/"+element.perkembangan_kawasan.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.perkembangan_kawasan.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.perkembangan_kawasan.pulau+"</p><p class='card-text'>Provinsi : "+element.perkembangan_kawasan.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.perkembangan_kawasan.kabupaten+"</p><p class='card-text'>Nama Satwa : "+element.nama+"</p><p class='card-text'>Nama Latin : "+element.nama_latin+"</p><p class='card-text'>Luas : "+element.perkembangan_kawasan.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.perkembangan_kawasan.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                           $("#listresult").append(html);
                                        }
                                        
                                    }
                               });
                            }
                        })
                    }
            })
        })
    </script>
</body>
</html>