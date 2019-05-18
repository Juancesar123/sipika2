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
                                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i> Edit</button>
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
                                                <td><strong>Register</strong> </td><td>:</td></td><td><?php   echo $hasil['register'];?></td>
                                            </tr>
                                            <tr>
                                            <?php
                                                if($hasil['fungsi'] == 1){
                                            ?>
                                                    <td><strong>Fungsi</strong></td><td> :</td><td> KSA/KSPA</td>
                                                <?php }else if($hasil['fungsi'] == 2 ){?>
                                                    <td><strong>Fungsi </strong></td><td>:</td><td> Cagar Alam</td>
                                                <?php }else if($hasil['fungsi'] == 3 ){?>
                                                    <td><strong>Fungsi</strong> </td><td>:</td><td> Suaka Margasatwa</td>
                                                <?php }else if($hasil['fungsi'] == 4 ){?>
                                                    <td><strong>Fungsi</strong> </td><td>:</td><td> Taman Buru</td>
                                                <?php }else if($hasil['fungsi'] == 5 ){?>
                                                    <td><strong>Fungsi</strong> </td><td>:</td><td> Taman Nasional</td>
                                                <?php }else if($hasil['fungsi'] == 6 ){?>
                                                    <td><strong>Fungsi</strong> </td><td>:</td><td> Taman Wisata Alam</td>
                                                <?php }else if($hasil['fungsi'] == 7 ){?>
                                                    <td><strong>Fungsi</strong></td><td>:</td><td>Taman Hutan Raya</td>
                                                <?php }?>
                                            </tr>
                                            <tr>
                                                <td><strong>Pulau</strong> </td><td> :</td><td><?php   echo $hasil['pulau'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Provinsi</strong> </td><td> :</td><td><?php   echo $hasil['provinsi'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kabupaten</strong></td><td> :</td><td> <?php   echo $hasil['kabupaten'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nama Kawasan</strong> </td><td> :</td><td> <?php   echo $hasil['nama_kawasan'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Luas</strong></td><td> :</td><td> <?php   echo $hasil['luas_kawasan'];?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div id="pengukuhankawasan" class="card tab-pane fade">
                                    <div class="card-header">
                                        Perkembangan Pengukuhan Kawasan
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Tambah Data</button>
                                        <div class="modal fade" id="myModal1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Perkembangan Pengukuhan Kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" type="text" id="nama_kawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Register</label>
                                                                <input class="form-control" type="text" id="register" value="<?php echo $hasil['register'];?>" disabled>
                                                                <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Perkembangan Tata Batas</label>
                                                                <input class="form-control" type="file" id="perkembangan_tata_batas" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas</label>
                                                                <input class="form-control" type="text" id="luas" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>UPT</label>
                                                                <select class="form-control" type="text" id="upt" >
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>File SHP</label>
                                                                <input class="form-control" type="file" id="file_shp" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Permasalahan</label>
                                                                <textarea class="form-control" id="permasalahan" ></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Usulan Penyelesaian</label>
                                                                <textarea class="form-control" id="usulan_penyelesaian" ></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK </h3>
                                                                <label>Jenis SK</label>
                                                                <select class="form-control" type="text" id="jenissk">
                                                                    <option value="SK Penunjukan">SK Penunjukan</option>
                                                                    <option value="SK Penetapan">SK Penetapan</option>
                                                                    <option value="SK Provinsi">SK Provinsi</option>
                                                                    <option value="SK Penetapan Fungsi Kawasan">SK Penetapan Fungsi Kawasan</option>
                                                                    <option value="SK Perubahan Fungsi">SK Perubahan Fungsi</option>
                                                                </select>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulsk">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorsk">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalsk">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumensk">
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataPengukuhanKawasan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal2">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Perkembangan Pengukuhan Kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" type="text" id="nama_kawasanedit" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                                <input type="hidden" id="idpengukuhankawasan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Register</label>
                                                                <input class="form-control" type="text" id="registeredit" value="<?php echo $hasil['register'];?>" disabled>
                                                                <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Perkembangan Tata Batas</label>
                                                                <input class="form-control" type="file" id="perkembangan_tata_batasedit" >
                                                                <input class="form-control" type="hidden" id="perkembangan_tata_batashidden" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas</label>
                                                                <input class="form-control" type="text" id="luasedit" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>UPT</label>
                                                                <select class="form-control" type="text" id="uptedit" >
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>File SHP</label>
                                                                <input class="form-control" type="file" id="file_shpedit" >
                                                                <input class="form-control" type="hidden" id="file_shphidden" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Permasalahan</label>
                                                                <textarea class="form-control" id="permasalahanedit" ></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Usulan Penyelesaian</label>
                                                                <textarea class="form-control" id="usulan_penyelesaianedit" ></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK </h3>
                                                                <label>Jenis SK</label>
                                                                <select class="form-control" type="text" id="jenisskedit">
                                                                    <option value="SK Penunjukan">SK Penunjukan</option>
                                                                    <option value="SK Penetapan">SK Penetapan</option>
                                                                    <option value="SK Provinsi">SK Provinsi</option>
                                                                    <option value="SK Penetapan Fungsi Kawasan">SK Penetapan Fungsi Kawasan</option>
                                                                    <option value="SK Perubahan Fungsi">SK Perubahan Fungsi</option>
                                                                </select>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskedit">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskedit">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskedit">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskedit">
                                                                <input class="form-control" type="hidden" id="dokumen_skhidden" >
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataPengukuhanKawasan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable1" style="width:100%">
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
                <?php $this->load->view('partials/footer')?>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/script') ?>
    <script src="<?php echo base_url('js/data-table.js')?>"></script>
    <script>
        function myfunc(id){
            $.ajax({
                url:'/deleteDataPengukuhanKawasan/'+id,
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
                url:'/showDataPengukuhanKawasan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpengukuhankawasan' ).val(hasil.id);
                    $( '#dokumen_skhidden' ).val(hasil.dokumen_sk);
                    $( '#file_shphidden' ).val(hasil.file_shp);
                    $( '#perkembangan_tata_batashidden' ).val(hasil.perkembangan_tata_batas);
                    $( '#luasedit' ).val(hasil.luas);
                    $( '#permasalahanedit' ).val(hasil.permasalahan);
                    $( '#usulan_penyelesaianedit' ).val(hasil.usulan_penyelesaian);
                    $( '#jenisperaturanedit' ).val(hasil.jenis_peraturan);
                    $( '#jenisskedit' ).val(hasil.jenis_sk);
                    $( '#judulskedit' ).val(hasil.judul_sk);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                }
            })
        }
        var table =  $('#myTable1').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataPengukuhanKawasan",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'register' },
                            { data: 'nama_kawasan' },
                            { data: 'luas' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
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
            $('#SaveDataPengukuhanKawasan').click(function(){
                
                var data;
                data = new FormData();
                data.append('nama_kawasan', $('#nama_kawasan').val());
                data.append('perkembangan_tata_batas',$('#perkembangan_tata_batas')[0].files[0]);
                data.append('file_shp', $('#file_shp')[0].files[0]);
                data.append('permasalahan',$('#permasalahan').val());
                data.append('usulan_penyelesaian', $('#usulan_penyelesaian').val());
                data.append('judulsk', $('#judulsk').val());
                data.append('nomorsk', $('#nomorsk').val());
                data.append('tanggalsk', $('#tanggalsk').val());
                data.append('luas', $('#luas').val());
                data.append('upt', $('#upt').val());
                data.append('jenissk', $('#jenissk').val());
                data.append('register', $('#register').val());
                data.append('dokumensk', $('#dokumensk')[0].files[0]);
                $.ajax({
                    url:'/savedDataPengukuhanKawasan',
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
                            table.ajax.reload();
                    }
                })
            })
            $('#UpdateDataPengukuhanKawasan').click(function(){
                var file = $('#dokumenskedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append('nama_kawasan', $('#nama_kawasanedit').val());
                    data.append('idpengukuhankawasan', $('#idpengukuhankawasan').val());
                    data.append('perkembangan_tata_batas',$('#perkembangan_tata_batashidden').val());
                    data.append('file_shp', $('#file_shphidden').val());
                    data.append('permasalahan',$('#permasalahanedit').val());
                    data.append('usulan_penyelesaian', $('#usulan_penyelesaianedit').val());
                    data.append('judulsk', $('#judulskedit').val());
                    data.append('nomorsk', $('#nomorskedit').val());
                    data.append('tanggalsk', $('#tanggalskedit').val());
                    data.append('luas', $('#luasedit').val());
                    data.append('upt', $('#uptedit').val());
                    data.append('jenissk', $('#jenisskedit').val());
                    data.append('register', $('#registeredit').val());
                    data.append('dokumensk', $('#dokumenskhidden').val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataPengukuhanKawasan',
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
                                table.ajax.reload();
                        }
                    })
                }else{
                    var data;
                    data = new FormData();
                    data.append('nama_kawasan', $('#nama_kawasanedit').val());
                    data.append('idpengukuhankawasan', $('#idpengukuhankawasan').val());
                    data.append('perkembangan_tata_batas',$('#perkembangan_tata_batasedit')[0].files[0]);
                    data.append('file_shp', $('#file_shpedit')[0].files[0]);
                    data.append('permasalahan',$('#permasalahanedit').val());
                    data.append('usulan_penyelesaian', $('#usulan_penyelesaianedit').val());
                    data.append('judulsk', $('#judulskedit').val());
                    data.append('nomorsk', $('#nomorskedit').val());
                    data.append('tanggalsk', $('#tanggalskedit').val());
                    data.append('luas', $('#luasedit').val());
                    data.append('upt', $('#uptedit').val());
                    data.append('jenissk', $('#jenisskedit').val());
                    data.append('register', $('#registeredit').val());
                    data.append('dokumensk', $('#dokumenskedit')[0].files[0]);
                    $.ajax({
                        url:'/updateDataPengukuhanKawasan',
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
                                table.ajax.reload();
                        }
                    })
                }
            })
        })
    </script>
</body>
</html>