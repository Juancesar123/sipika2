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
                            <h2 class="mr-4 mb-0"><?php   echo $hasil['nama_kawasan'];?></h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                                <i class="fas fa-home mr-1 text-muted"></i>
                                <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                                <p class="mb-0 mr-1">Kawasan Konservasi</p>
                                <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                                <p class="mb-0"><?php   echo $hasil['nama_kawasan'];?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body bg-light">
                                    <img src="<?php echo base_url('images/3671701645.jpg')?>" class="img-fluid">
                                    <br>
                                    <br>
                                    <h2><center><?php   echo $hasil['nama_kawasan'];?></center></h2>
                                    <p><center>REGISTER : <?php   echo $hasil['register'];?></center></p>
                                    <br>
                                    <div class="bg-light border-right" id="sidebar-wrapper">
                                    <div class="sidebar-heading">
                                            <strong>Profile Kawasan</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#home" class="list-group-item list-group-item-action bg-light">Profile</a>
                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit Pemolaan</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#pengukuhankawasan" class="list-group-item list-group-item-action bg-light">Perkembangan Pengukuhan kawasan</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Evaluasi Fungsi Desk Study</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Evaluasi Fungsi EKF Lapangan</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Indikasi Tora Dalam KK</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Hutan Adat Dalam KK</a>
                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit IIKA</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#pengukuhankawasan" class="list-group-item list-group-item-action bg-light">Inventarisasi Kawasan</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Desa Sekitar KK</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Per Kawasan</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Wilayah Adat</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Permasalahan Pengelolaan KK</a>
                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit PKS</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#pengukuhankawasan" class="list-group-item list-group-item-action bg-light">Penguatan Fungsi KK</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Pembangunan Strategis</a>
                                            <a href="#" class="list-group-item list-group-item-action bg-light">Kemitrataan Konservarsi</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="home" class="card tab-pane fade in active">
                                    <div class="card-header">
                                        Profile Kawasan
                                        <div class="float-right">
                                            <?php
                                                if($userdata['role']['roles'] == 'SUBDIT IKKA'){
                                            ?>
                                                <button class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i> Edit</button>
                                                <?php }else{?>
                                                <?php }?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Kawasan Konservarsi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Register</label>
                                                        <input class="form-control" type="text" id="register" value="<?php echo $hasil['register'];?>">
                                                        <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fungsi</label>
                                                        <input class="form-control" type="text" id="fungsi"  value="<?php echo $hasil['fungsi'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pulau</label>
                                                        <input class="form-control" type="text" id="pulau"  value="<?php echo $hasil['pulau'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <input class="form-control" type="text" id="provinsi"  value="<?php echo $hasil['provinsi'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten</label>
                                                        <input class="form-control" type="text" id="kabupaten"  value="<?php echo $hasil['kabupaten'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" type="text" id="nama_kawasan"  value="<?php echo $hasil['nama_kawasan'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Luas Kawasan</label>
                                                        <input class="form-control" type="text" id="luas_kawasan"  value="<?php echo $hasil['luas_kawasan'];?>">
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveData">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <td>Register </td><td>:</td></td><td><?php   echo $hasil['register'];?></td>
                                            </tr>
                                            <tr>
                                            <?php
                                                if($hasil['fungsi'] == 1){
                                            ?>
                                                    <td>Fungsi</td><td> :</td><td> KSA/KSPA</td>
                                                <?php }else if($hasil['fungsi'] == 2 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Cagar Alam</td>
                                                <?php }else if($hasil['fungsi'] == 3 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Suaka Margasatwa</td>
                                                <?php }else if($hasil['fungsi'] == 4 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Taman Buru</td>
                                                <?php }else if($hasil['fungsi'] == 5 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Taman Nasional</td>
                                                <?php }else if($hasil['fungsi'] == 6 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Taman Wisata Alam</td>
                                                <?php }else if($hasil['fungsi'] == 7 ){?>
                                                    <td>Fungsi </td><td>:</td><td>Taman Hutan Raya</td>
                                                <?php }?>
                                            </tr>
                                            <tr>
                                                <td>Pulau </td><td> :</td><td><?php   echo $hasil['pulau'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi </td><td> :</td><td><?php   echo $hasil['provinsi'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Kabupaten </td><td> :</td><td> <?php   echo $hasil['kabupaten'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kawasan </td><td> :</td><td> <?php   echo $hasil['nama_kawasan'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Luas  </td><td> :</td><td> <?php   echo $hasil['luas_kawasan'];?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div id="pengukuhankawasan" class="card tab-pane fade">
                                    <div class="card-header">
                                        Pengukuhan Kawasan
                                        <div class="float-right">
                                            <?php
                                                if($userdata['role']['roles'] == 'SUBDIT IKKA'){
                                            ?>
                                                <button class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i> Edit</button>
                                                <?php }else{?>
                                                <?php }?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Kawasan Konservarsi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Register</label>
                                                        <input class="form-control" type="text" id="register" value="<?php echo $hasil['register'];?>">
                                                        <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fungsi</label>
                                                        <input class="form-control" type="text" id="fungsi"  value="<?php echo $hasil['fungsi'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pulau</label>
                                                        <input class="form-control" type="text" id="pulau"  value="<?php echo $hasil['pulau'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <input class="form-control" type="text" id="provinsi"  value="<?php echo $hasil['provinsi'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten</label>
                                                        <input class="form-control" type="text" id="kabupaten"  value="<?php echo $hasil['kabupaten'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" type="text" id="nama_kawasan"  value="<?php echo $hasil['nama_kawasan'];?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Luas Kawasan</label>
                                                        <input class="form-control" type="text" id="luas_kawasan"  value="<?php echo $hasil['luas_kawasan'];?>">
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveData">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <td>Register </td><td>:</td></td><td><?php   echo $hasil['register'];?></td>
                                            </tr>
                                            <tr>
                                            <?php
                                                if($hasil['fungsi'] == 1){
                                            ?>
                                                    <td>Fungsi</td><td> :</td><td> KSA/KSPA</td>
                                                <?php }else if($hasil['fungsi'] == 2 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Cagar Alam</td>
                                                <?php }else if($hasil['fungsi'] == 3 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Suaka Margasatwa</td>
                                                <?php }else if($hasil['fungsi'] == 4 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Taman Buru</td>
                                                <?php }else if($hasil['fungsi'] == 5 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Taman Nasional</td>
                                                <?php }else if($hasil['fungsi'] == 6 ){?>
                                                    <td>Fungsi </td><td>:</td><td> Taman Wisata Alam</td>
                                                <?php }else if($hasil['fungsi'] == 7 ){?>
                                                    <td>Fungsi </td><td>:</td><td>Taman Hutan Raya</td>
                                                <?php }?>
                                            </tr>
                                            <tr>
                                                <td>Pulau </td><td> :</td><td><?php   echo $hasil['pulau'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi </td><td> :</td><td><?php   echo $hasil['provinsi'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Kabupaten </td><td> :</td><td> <?php   echo $hasil['kabupaten'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kawasan </td><td> :</td><td> <?php   echo $hasil['nama_kawasan'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Luas  </td><td> :</td><td> <?php   echo $hasil['luas_kawasan'];?></td>
                                            </tr>
                                        </table>
                                    </div>
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
        function myfunc(id){
            $.ajax({
                url:'/deleteDataPeraturan/'+id,
                type:'GET',
                success:function(){
                    Swal.fire(
                                'Sukses!',
                                'Data Sukses di hapus!',
                                'success'
                            )
                            table.ajax.reload();
                }
            })
        }
        function editfunc(id){
            $.ajax({
                url:'/showDataPeraturan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idperaturan' ).val(hasil.id);
                    $( '#filehidden' ).val(hasil.file);
                    $( '#jenisperaturanedit' ).val(hasil.jenis_peraturan);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataPeraturan",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'jenis_peraturan' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('#SaveData').click(function(){
                var data;
                data = new FormData();
                data.append('register', $('#register').val());
                data.append('fungsi',$('#fungsi').val());
                data.append('pulau', $('#pulau').val());
                data.append('provinsi',$('#provinsi').val());
                data.append('kabupaten', $('#kabupaten').val());
                data.append('nama_kawasan', $('#nama_kawasan').val());
                data.append('luas_kawasan', $('#luas_kawasan').val());
                data.append('id_kawasan', $('#idkawasan').val());
                $.ajax({
                    url:'/updatedatakawasan',
                    method:'POST',
                    data:data,
                    contentType: false,
                    processData:false,
                    success:function(){
                         Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            )
                            document.location.reload()
                    }
                })
            })
        })
    </script>
</body>
</html>