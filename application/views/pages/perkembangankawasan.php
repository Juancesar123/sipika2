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
                        <h2 class="mr-4 mb-0">Perkembangan Kawasan</h2>
                        <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Pemoalaan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Perkembangan kawasan</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="margin-top: 20px;margin-bottom: -25;">Daftar Kawasan Konservasi</h4>
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modals1"> Tambah</button> 
                                <a class="btn btn-success float-right" href="downloadtemplatekawasankonservarsi">Download Template</a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" value="1" role="tab" aria-controls="v-pills-home" aria-selected="true">Taman Wisata Alam <p style="font-size: 13px;font-style: italic;" id="luastamanwisata"></p></a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Taman Hutan Raya <p style="font-size: 13px;font-style: italic;" id="luastamanhutanraya"></p></a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Taman Buru <p style="font-size: 13px;font-style: italic;" id="luastamanburu"></p></a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Taman Nasional <p style="font-size: 13px;font-style: italic;" id="luastamannasional"></p></a>
                                        <a class="nav-link" id="v-pills-suaka-tab" data-toggle="pill" href="#v-pills-suaka" role="tab" aria-controls="v-pills-suaka" aria-selected="false">Suaka Margasatwa <p style="font-size: 13px;font-style: italic;" id="luassuakaalam"></p></a>
                                        <a class="nav-link" id="v-pills-cagar-tab" data-toggle="pill" href="#v-pills-cagar" role="tab" aria-controls="v-pills-cagar" aria-selected="false">Cagar Alam <p style="font-size: 13px;font-style: italic;" id="luascagaralam"></p></a>
                                        <a class="nav-link" id="v-pills-ks-tab" data-toggle="pill" href="#v-pills-ks" role="tab" aria-controls="v-pills-ks" aria-selected="false">KS/PA <p style="font-size: 13px;font-style: italic;" id="luaskskpa"></p></a>
                                    </div>
                                </div>
                                <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home"  value="1"role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h4>Daftar Taman Wisata Alam</h4>
                                        <table class="table" id="myTable" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h4>Daftar Taman Hutan Raya (TAHURA)</h4>
                                        <table class="table" id="myTable1" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-cagar" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h4>Daftar Cagar Alam</h4>
                                        <table class="table" id="myTable2" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-ks" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h4>Daftar Kawasan Suaka Alam (KSA) / Kawasan Pelestarian Alam (KPA)</h4>
                                        <table class="table" id="myTable3" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-suaka" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h4>Daftar Suaka Margasatwa</h4>
                                        <table class="table" id="myTable4" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                       <h4>Daftar Taman Buru</h4>
                                        <table class="table" id="myTable5" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <h4>Daftar Taman Nasional</h4>
                                        <table class="table" id="myTable6" style="width:100%;">
                                            <thead>
                                                <th>Register</th>
                                                <th>Nama Kawasan</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modals1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Perkembangan kawasan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="formkawasankonservasi" method="post" action="">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Register</label>
                                            <input class="form-control" type="text" id="register" name="register">
                                        </div>
                                        <div class="form-group">
                                            <label>Fungsi</label>
                                            <select class="form-control" id="fungsi" name="fungsi">
                                                <option value="1">KSA/KPA</option>
                                                <option value="2">Cagar Alam</option>
                                                <option value="3">Suaka Margasatwa</option>
                                                <option value="4">Taman Buru</option>
                                                <option value="5">Taman Nasional</option>
                                                <option value="6">Taman Wisata Alam</option>
                                                <option value="7">Taman Hutan Raya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pulau</label>
                                            <select class="form-control" type="text" id="pulau" name="pulau">
                                                <option value="sumatra">Sumatera</option>
                                                <option value="jawa">Jawa</option>
                                                <option value="bali">Bali</option>
                                                <option value="nusa tenggara">Nusa Tenggara</option>
                                                <option value="kalimantan">Kalimantan</option>
                                                <option value="sulawesi">Sulawesi</option>
                                                <option value="maluku">Maluku</option>
                                                <option value="papua">Papua</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select class="form-control"  id="provinsi" name="provinsi" style="width:100%" multiple="multiple">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <select class="form-control"  id="kabupatenkota" name="kabupatenkota" style="width:100%" multiple="multiple">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kawasan</label>
                                            <input class="form-control" type="text" id="namakawasan" name="namakawasan">
                                        </div>
                                        <div class="form-group">
                                            <label>Luas Kawasan (Hektare)</label>
                                            <input class="form-control" type="text" id="luaskawasan" name="luaskawasan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><img style="width:15px;height:15px;display:none" id="ajaxprocesss" src="images/ajax-loader.gif"> Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modals2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Perkembangan kawasan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="formkawasankonservasiedit" method="post" action="">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Register</label>
                                            <input class="form-control" type="text" id="registeredit" name="registeredit">
                                            <input class="form-control" type="hidden" id="idedit">
                                        </div>
                                        <div class="form-group">
                                            <label>Fungsi</label>
                                            <select class="form-control" id="fungsiedit">
                                                <option value="1">KSA/KPA</option>
                                                <option value="2">Cagar Alam</option>
                                                <option value="3">Suaka Margasatwa</option>
                                                <option value="4">Taman Buru</option>
                                                <option value="5">Taman Nasional</option>
                                                <option value="6">Taman Wisata Alam</option>
                                                <option value="7">Taman Hutan Raya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pulau</label>
                                            <select class="form-control" id="pulauedit" name="pulauedit">
                                                <option value="sumatra">Sumatera</option>
                                                <option value="jawa">Jawa</option>
                                                <option value="bali">Bali</option>
                                                <option value="nusa tenggara">Nusa Tenggara</option>
                                                <option value="kalimantan">Kalimantan</option>
                                                <option value="sulawesi">Sulawesi</option>
                                                <option value="maluku">Maluku</option>
                                                <option value="papua">Papua</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select class="form-control" type="text" id="provinsiedit" name="provinsiedit">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten Kota</label>
                                            <select class="form-control" type="text" id="kabupatenkotaedit" name="kabupatenkotaedit">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kawasan</label>
                                            <input class="form-control" type="text" id="namakawasanedit" name="namakawasanedit">
                                        </div>
                                        <div class="form-group">
                                            <label>Luas Kawasan (Hektare)</label>
                                            <input class="form-control" type="text" id="luaskawasanedit" name="luaskawasanedit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
            <?php $this->load->view('partials/footer')?>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/script') ?>
    <script src="<?php echo base_url('js/data-table.js')?>"></script>
    <script>
            function myfunc(id){
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'/DeletedDataKonservasi/'+id,
                            type:'GET',
                            success:function(){
                                Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di hapus!',
                                    'success'
                                )
                                    table.ajax.reload();
                                    table1.ajax.reload();
                                    table2.ajax.reload();
                                    table3.ajax.reload();
                                    table4.ajax.reload();
                                    table5.ajax.reload();
                                    table6.ajax.reload();
                            }
                        })
                    }
                })
            }
           function editfunc(id){
               /*
                    digunakan untuk get data spesific berdasarkan id lalu isinya
                    di tampilkan ke form
               */
                $.ajax({
                    url:'getsingleDataKonservasi/'+id,
                    type:'GET',
                    success:function(data){
                        var hasil = JSON.parse(data);
                        $('#namakawasanedit').val(hasil.nama_kawasan);
                        $('#pulauedit').val(hasil.pulau);
                        $('#fungsiedit').val(hasil.fungsi);
                        $('#provinsiedit').val(hasil.provinsi);
                        $('#registeredit').val(hasil.register);
                        $('#luaskawasanedit').val(hasil.luas_kawasan);
                        $('#kabupatenkotaedit').val(hasil.kabupaten);
                        $('#idedit').val(hasil.id);
                    }
                })
           }
           var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/6",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });
                    var table1 =  $('#myTable1').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/7",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });   
                    var table2 =  $('#myTable2').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/2",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });
                    var table3 =  $('#myTable3').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/1",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });
                    var table4 =  $('#myTable4').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/3",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });
                    var table5 =  $('#myTable5').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/4",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });
                    var table6 =  $('#myTable6').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKonservasi/5",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas_kawasan' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button> <a href='perkembangan-kawasan/managekawasan/"+data.id+"' class='btn btn-success'>Manage</a>";
                                }
                            }
                        ]
                    });
            $(document).ready(function(){
                
                $.ajax({
                    method:'GET',
                    url:'getDataDashboard/1',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                        $('#luaskskpa').text(luas +' ha');
                    }
                  })
                  $.ajax({
                    method:'GET',
                    url:'getDataDashboard/2',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                        $('#luascagaralam').text(luas +' ha');
                    }
                  })
                  $.ajax({
                    method:'GET',
                    url:'getDataDashboard/3',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                        $('#luassuakaalam').text(luas +' ha');
                    }
                  })
                  $.ajax({
                    method:'GET',
                    url:'getDataDashboard/4',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                        $('#luastamanburu').text(luas + ' ha');
                    }
                  })
                  $.ajax({
                    method:'GET',
                    url:'getDataDashboard/5',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                      $('#luastamannasional').text(luas + ' ha');
                    }
                  })
                  $.ajax({
                    method:'GET',
                    url:'getDataDashboard/6',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                        $('#luastamanwisata').text(luas + ' ha');
                    }
                  })
                  $.ajax({
                    method:'GET',
                    url:'getDataDashboard/7',
                    success:function(data){
                        var luas = 0;
                        var result = JSON.parse(data);
                        result.forEach(function(element) {
                            luas = luas + parseInt(element.luas_kawasan);
                        });
                        $('#luastamanhutanraya').text(luas + ' ha');
                    }
                  })
                $.ajax({
                type:'GET',
                url:'/getDataMasterProvinsi',
                dataType:'json',
                success:function(data){
                    var html;
                    data.forEach(element => {
                         html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                         $("#provinsi").append(html);
                         $("#provinsiedit").append(html);
                    });
                }
            })
            $.ajax({
                type:'GET',
                url:'/getDataKabupaten',
                dataType:'json',
                success:function(data){
                    var html;
                    data.forEach(element => {
                         html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                         $("#kabupatenkota").append(html);
                         $("#kabupatenkotaedit").append(html);
                    });
                }
            })
            $('#provinsi').select2({  
                theme: "bootstrap"
            });
            $('#kabupatenkota').select2({  
                theme: "bootstrap"
            });
            $('#provinsiedit').select2({  
                theme: "bootstrap"
            });
            $('#kabupatenkotaedit').select2({  
                theme: "bootstrap"
            });
                $('form[id="formkawasankonservasiedit"]').validate({
                    rules: {
                        luaskawasanedit:{
                            required:true,
                            number:true
                        },
                        registeredit:{
                            required:true,
                            number:true
                        },
                        namakawasanedit: 'required',
                        fungsiedit: 'required',
                        pulauedit:'required',
                        provinsiedit:'required',
                        fungsi_hutanedit: 'required'
                    },
                    messages: {
                        judul: 'This field is required',

                    },
                    submitHandler: function(form) {
                        var namakawasan = $('#namakawasanedit').val();
                        var fungsi = $('#fungsiedit').val();
                        var register = $('#registeredit').val();
                        var pulau = $('#pulauedit').val();
                        var provinsi = $('#provinsiedit').val();
                        var provinsitemp = $('#provinsitempedit').val();
                        var luaskawasan = $('#luaskawasanedit').val();
                        var id = $('#idedit').val();
                        $.ajax({
                            url:'/ubahDataKawasan',
                            method:'POST',
                            data:"namakawasan="+namakawasan+"&luaskawasan="+luaskawasan+
                                "&fungsi="+fungsi+
                                "&register="+register+
                                "&pulau="+pulau+
                                "&provinsi="+provinsi+
                                "&provinsitemp="+provinsitemp+
                                "&id="+id,
                            success:function(){
                                Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#namakawasanedit').val('');
                                    $('#fungsiedit').val('');
                                    $('#registeredit').val('');
                                    $('#pulauedit').val('');
                                    $('#provinsiedit').val('');
                                    $('#provinsitempedit').val('');
                                    $('#luaskawasanedit').val('');
                                    $('#modals2').modal('toggle');

                                })
                                //reload table ajax
                                table.ajax.reload();
                                table1.ajax.reload();
                                table2.ajax.reload();
                                table3.ajax.reload();
                                table4.ajax.reload();
                                table5.ajax.reload();
                                table6.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formkawasankonservasi"]').validate({
                    rules: {
                        luaskawasan:{
                            required:true,
                            number:true
                        },
                        register:{
                            required:true,
                            number:true
                        },
                        namakawasan: 'required',
                        fungsi: 'required',
                        pulau:'required',
                        provinsi:'required',
                        kabupatenkota:'required',
                        fungsi_hutan: 'required',
                        peta:'required',
                    },
                    messages: {
                        judul: 'This field is required',

                    },
                    submitHandler: function(form) {
                        var namakawasan = $('#namakawasan').val();
                        var fungsi = $('#fungsi').val();
                        var register = $('#register').val();
                        var pulau = $('#pulau').val();
                        var provinsi = $('#provinsi').val();
                        var kabupatenkota = $('#kabupatenkota').val();
                        var luaskawasan = $('#luaskawasan').val();
                        $.ajax({
                            url:'/savedDatakawasan',
                            method:'POST',
                            data:"namakawasan="+namakawasan+"&luaskawasan="+luaskawasan+
                                "&fungsi="+fungsi+
                                "&register="+register+
                                "&pulau="+pulau+
                                "&provinsi="+provinsi+
                                "&kabupatenkota="+kabupatenkota,
                            beforeSend:function(){
                                $("#ajaxprocesss").css("display", "block");
                                $("#SaveAction").attr("disabled", true);
                            },
                            success:function(){
                                $("#ajaxprocesss").css("display", "none");
                                $('#SaveAction').prop("disabled", false);
                                Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#namakawasan').val('');
                                    $('#fungsi').val('');
                                    $('#register').val('');
                                    $('#pulau').val('');
                                    $('#provinsi').val('');
                                    $('#kabupatenkota').val('');
                                    $('#luaskawasan').val('');
                                    $('#modals1').modal('toggle');
                                })
                                table.ajax.reload();
                                table1.ajax.reload();
                                table2.ajax.reload();
                                table3.ajax.reload();
                                table4.ajax.reload();
                                table5.ajax.reload();
                                table6.ajax.reload();
                            },
                            error:function(){
                                $("#ajaxprocesss").css("display", "none");
                                $('#SaveAction').prop("disabled", false);
                                Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'Something went wrong!'
                                    }).then(function(){
                                        $('#modals1').modal('toggle');
                                    })
                            }
                        })
                    }
                })
                $('#UpdateAction').click(function(){
                    
                })
            })
    </script>
</body>
</html>