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
                                <h4>Daftar Kawasan Konservasi</h4>
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modals1"> Tambah</button>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" value="1" role="tab" aria-controls="v-pills-home" aria-selected="true">Taman Wisata Alam</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Taman Hutan Raya</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Taman Buru</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Taman Nasional</a>
                                        <a class="nav-link" id="v-pills-suaka-tab" data-toggle="pill" href="#v-pills-suaka" role="tab" aria-controls="v-pills-suaka" aria-selected="false">Suaka Margasatwa</a>
                                        <a class="nav-link" id="v-pills-cagar-tab" data-toggle="pill" href="#v-pills-cagar" role="tab" aria-controls="v-pills-cagar" aria-selected="false">Cagar Alam</a>
                                        <a class="nav-link" id="v-pills-ks-tab" data-toggle="pill" href="#v-pills-ks" role="tab" aria-controls="v-pills-ks" aria-selected="false">KS/PA</a>
                                    </div>
                                </div>
                                <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home"  value="1"role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h4>Daftar Taman Wisata Alam</h4>
                                        <table class="table" id="myTable">
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
                                        <table class="table" id="myTable">
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
                                        <table class="table" id="myTable">
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
                                        <table class="table table-responsive" id="myTable">
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
                                        <table class="table" id="myTable">
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
                                        <table class="table" id="myTable">
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
                                        <table class="table" id="myTable">
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
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Perkembangan kawasan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Register</label>
                                        <input class="form-control" type="text" id="register">
                                    </div>
                                    <div class="form-group">
                                        <label>Fungsi</label>
                                        <select class="form-control" id="fungsi">
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
                                        <input class="form-control" type="text" id="pulau">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi Temp</label>
                                        <input class="form-control" type="text" id="provinsitemp">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" id="provinsi">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kawasan</label>
                                        <input class="form-control" type="text" id="namakawasan">
                                    </div>
                                    <div class="form-group">
                                        <label>Luas Kawasan (Hektare)</label>
                                        <input class="form-control" type="text" id="luaskawasan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="SaveAction">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modals2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Perkembangan kawasan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Register</label>
                                        <input class="form-control" type="text" id="registeredit">
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
                                        <input class="form-control" type="text" id="pulauedit">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi Temp</label>
                                        <input class="form-control" type="text" id="provinsitempedit">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" id="provinsiedit">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kawasan</label>
                                        <input class="form-control" type="text" id="namakawasanedit">
                                    </div>
                                    <div class="form-group">
                                        <label>Luas Kawasan (Hektare)</label>
                                        <input class="form-control" type="text" id="luaskawasanedit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="UpdateAction">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
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
            var table=null
            function initTable() {
            if (table) table.destroy()
                table = $('.table').DataTable({
                            deferRender: true,
                            responsive: true,
                            ajax: {
                                url: "/getDataKonservasi",
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
                                        return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                    }
                                }
                            ]
                        });   
            }
            function myfunc(id){
                $.ajax({
                    url:'/DeletedDataKonservasi/'+id,
                    type:'GET',
                    success:function(){
                        Swal.fire(
                            'Sukses!',
                            'Data Sukses di simpan!',
                            'success'
                        )
                        table.ajax.reload();
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
                        $('#provinsitempedit').val(hasil.kabupaten);
                        $('#idedit').val(hasil.id);
                    }
                })
           }
            $(document).ready(function(){
                initTable();
                $('#SaveAction').click(function(){
                    
                    var namakawasan = $('#namakawasan').val();
                    var fungsi = $('#fungsi').val();
                    var register = $('#register').val();
                    var pulau = $('#pulau').val();
                    var provinsi = $('#provinsi').val();
                    var provinsitemp = $('#provinsitemp').val();
                    var luaskawasan = $('#luaskawasan').val();
                    $.ajax({
                        url:'/savedDatakawasan',
                        method:'POST',
                        data:"namakawasan="+namakawasan+"&luaskawasan="+luaskawasan+
                             "&fungsi="+fungsi+
                             "&register="+register+
                             "&pulau="+pulau+
                             "&provinsi="+provinsi+
                             "&provinsitemp="+provinsitemp,
                        success:function(){
                            Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            )
                            initTable();
                            //table.ajax.reload();
                        }
                    })
                })
                $('#UpdateAction').click(function(){
                    var namakawasan = $('#namakawasanedit').val();
                    var fungsi = $('#fungsiedit').val();
                    var register = $('#registeredit').val();
                    var pulau = $('#pulauedit').val();
                    var provinsi = $('#provinsiedit').val();
                    var provinsitemp = $('#provinsitempedit').val();
                    var luaskawasan = $('#luaskawasanedit').val();
                    var id = $('#idedit').val();
                    console.log(id);
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
                            )
                            //reload table ajax
                            table.ajax.reload();
                        }
                    })
                })
            })
    </script>
</body>
</html>