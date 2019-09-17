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
                                        <div class="col-12">
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
                                            
                                        </div>
                                    </div>
                                    <div class="row" id="filter">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Satwa</label>
                                                <select class="form-control"  id="satwa" name="satwa" style="width:100%">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tumbuhan</label>
                                               <select class="form-control"  id="tumbuhan" name="tumbuhan" style="width:100%">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <label>Nama Desa</label>
                                               <select type="text" id="desa" class="form-control" style="width:100%"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary" id="cari2"><i class="fa fa-search" ></i> Cari</button>
                                            <button class="btn btn-primary" id="showfilter">Advance Search</button>
                                        </div>
                                    </div>
                                    <div class="row" id="listresult" style="margin-top: 10px">

                                    </div>
                            </div>
                        </div>
                    <?php $this->load->view('partials/footer')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php $this->load->view('partials/script') ?>
    <script src="<?php echo base_url('js/data-table.js')?>"></script>
    <script>
        $('document').ready(function(){
           
            $('#desa').select2({  
                 ajax: {
                    url: '/getalldesa',
                    type:'GET',
                    dataType:'json',
                    data: function (params) {
                      var query = {
                        desa: params.term,
                      }
                      return query;
                    },
                   processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.desa,
                                    id: item.desa
                                }
                            })
                        };
                    }
                      // Query parameters will be ?search=[term]&type=public
                      
                    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
                },
                placeholder: 'Search Desa',
                allowClear: true,
                theme: "bootstrap"
            });
            $('#satwa').select2({  
               ajax: {
                    url: '/getallsatwa',
                    type:'GET',
                    dataType:'json',
                    data: function (params) {
                      var query = {
                        nama: params.term,
                      }
                      return query;
                    },
                   processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.nama,
                                    id: item.nama
                                }
                            })
                        };
                    }
                      // Query parameters will be ?search=[term]&type=public
                      
                    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
                },
                placeholder: 'Search Nama Satwa',
                allowClear: true,
                theme: "bootstrap"
            });
            $('#tumbuhan').select2({  
               ajax: {
                    url: '/getalltumbuhan',
                    type:'GET',
                    dataType:'json',
                    data: function (params) {
                      var query = {
                        nama: params.term
                      }
                      return query;
                    },
                   processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.nama,
                                    id: item.nama
                                }
                            })
                        };
                    }
                      // Query parameters will be ?search=[term]&type=public
                      
                    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
                },
                placeholder: 'Search Nama Tumbuhan',
                allowClear: true,
                theme: "bootstrap"
            });
            $("#filter").hide();
            $("#showfilter").click(function(){
                $("#filter").show();
            })
            $('#cari2').click(function(){
                $('#listresult').html('');
                var katakunci = $("#katakunci").val();
                var katakuncisatwa = $("#satwa").val();
                console.log(katakuncisatwa);
                var katakuncitumbuhan = $("#tumbuhan").val();
                var katakuncidesa = $("#desa").val();
                var filter = $("#filterby").val(); 
                $.ajax({
                    url:'pencarian/cari/?namakawasan='+katakunci+'&satwa='+katakuncisatwa+'&tumbuhan='+katakuncitumbuhan+'&desa='+katakuncidesa,
                    method:'GET',
                    success:function(data){
                        var result  = JSON.parse(data);
                        console.log(result);
                       result.forEach(function(element) {
                            if(element.jenis == 1){
                                var html = "<div class='col-4' style='margin-bottom:10px;'><div class='card'><img src='<?php echo constant('API_URL');?>/"+element.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.pulau+"</p><p class='card-text'>Provinsi : "+element.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.kabupaten+"</p><p class='card-text'>Nama Tumbuhan : "+element.nama+"</p> <p class='card-text'>Nama Desa : "+element.desa+"</p><p class='card-text'>Jumlah Penduduk : "+element.jumlah_penduduk+"</p><p class='card-text'>Luas : "+element.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                 $("#listresult").append(html);
                            }else{
                                var html = "<div class='col-4' style='margin-bottom:10px;'><div class='card'> <img src='<?php echo constant('API_URL');?>/"+element.gambar+"' class='card-img-top' alt=...'><div class='card-body'> <h5 class='card-title'>"+ element.nama_kawasan +"</h5> <p class='card-text'>Pulau : "+element.pulau+"</p><p class='card-text'>Provinsi : "+element.provinsi+"</p> <p class='card-text'>Kabupaten : "+element.kabupaten+"</p><p class='card-text'>Nama Desa : "+element.desa+"</p><p class='card-text'>Jumlah Penduduk : "+element.jumlah_penduduk+"<p class='card-text'>Nama Satwa : "+element.nama+"</p><p class='card-text'>Luas : "+element.luas_kawasan+" <br><a href='perkembangan-kawasan/managekawasan/"+element.id+"' class='btn btn-primary'>More Info</a> </div></div></div>";
                                 $("#listresult").append(html);
                            }
                       });
                    }
                })
            })
        })
    </script>
</body>
</html>