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
                                            <a data-toggle="tab" href="#evaluasifungsideskstudy" class="list-group-item list-group-item-action bg-light">Evaluasi Fungsi Desk Study</a>
                                            <a  data-toggle="tab" href="#evaluasifungsiekflapangan" class="list-group-item list-group-item-action bg-light">Evaluasi Fungsi EKF Lapangan</a>
                                            <a data-toggle="tab" href="#indikasitoradalamkk" class="list-group-item list-group-item-action bg-light">Indikasi Tora Dalam KK</a>
                                            <a data-toggle="tab" href="#hutanadatdalamkk" class="list-group-item list-group-item-action bg-light">Hutan Adat Dalam KK</a>
                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit IIKA</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Desa Sekitar KK</a>
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Per Kawasan</a>
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Wilayah Adat</a>
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Permasalahan Pengelolaan KK</a>
                                            <a data-toggle="tab" href="#kondisikawasankonservarsi" class="list-group-item list-group-item-action bg-light">Kondisi Kawasan Konservarsi</a>
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Permasalahan Pengelolaan KK</a>
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Permasalahan Pengelolaan KK</a>
                                            <a data-toggle="tab" href="#" class="list-group-item list-group-item-action bg-light">Permasalahan Pengelolaan KK</a>
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
                                                <td><strong>Luas</strong></td><td> :</td><td> <?php   echo $hasil['luas_kawasan'];?> Ha</td>
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
                                                                <label>Luas(Ha)</label>
                                                                <input class="form-control" type="number" id="luas" >
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
                                                                <label>Luas(Ha)</label>
                                                                <input class="form-control" type="number" id="luasedit" >
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
                                <div id="evaluasifungsideskstudy" class="card tab-pane fade">
                                    <div class="card-header">
                                        Evaluasi Fungsi Desk Study
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Tambah Data</button>
                                        <div class="modal fade" id="myModal3">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Evaluasi Fungsi Desk Study</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Rekomendasi</label>
                                                        <select class="form-control" id="rekomendasi">
                                                            <option value="EKF">EKF</option>
                                                            <option value="PE">PE</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tahun Pelaksanaan</label>
                                                        <select class="form-control" id="tahunpelaksanaan">
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>UPT</label>
                                                        <select class="form-control" id="uptevaluasifungsideskstudy">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataevaluasifungsideskstudy">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal4">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Evaluasi Fungsi Desk Study</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Rekomendasi</label>
                                                        <select class="form-control" id="rekomendasiedit">
                                                            <option value="EKF">EKF</option>
                                                            <option value="PE">PE</option>
                                                        </select>
                                                        <input type="hidden" id="idevaluasifungsideskstudy">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tahun Pelaksanaan</label>
                                                        <select class="form-control" id="tahunpelaksanaanedit">
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>UPT</label>
                                                        <select class="form-control" id="uptevaluasifungsideskstudyedit">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" id="namakawasanedit" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataEvaluasiDeskStudy">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable2" style="width:100%">
                                            <thead>
                                                <th>Rekomendasi</th>
                                                <th>Tahun Pelaksanaan</th>
                                                <th>UPT</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="evaluasifungsiekflapangan" class="card tab-pane fade">
                                    <div class="card-header">
                                        Evaluasi Fungsi EKF Lapangan
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Data</button>
                                        <div class="modal fade" id="myModal5">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Evaluasi Fungsi Ekf Lapangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Rekomendasi</label>
                                                                <textarea class="form-control" type="text" id="rekomendasievaluasifungsiekflapangan"></textarea>
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tahun Pelaksanaan</label>
                                                               <select class="form-control" id="tahunpelaksanaanevaluasifungsiekflapangan">
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                               </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>UPT</label>
                                                                <select class="form-control" type="text" id="uptevaluasifungsiekflapangan" >
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Peta</label>
                                                                <input class="form-control" type="file" id="petaevaluasifungsiekflapangan" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK </h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskevaluasifungsiekflapangan">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskevaluasifungsiekflapangan">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskevaluasifungsiekflapangan">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskevaluasifungsiekflapangan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataEvaluasiFungsiEkfLapangan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal6">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Evaluasi Fungsi Ekf Lapangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Rekomendasi</label>
                                                                <textarea class="form-control" type="text" id="rekomendasievaluasifungsiekflapanganedit"></textarea>
                                                                <input type="hidden" id="idevaluasifungsiekflapangan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tahun Pelaksanaan</label>
                                                               <select class="form-control" id="tahunpelaksanaanevaluasifungsiekflapanganedit">
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                               </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>UPT</label>
                                                                <select class="form-control" type="text" id="uptevaluasifungsiekflapanganedit" >
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Peta</label>
                                                                <input class="form-control" type="file" id="petaevaluasifungsiekflapanganedit" >
                                                                <input type="hidden" id="petaevaluasifungsiekflapanganhidden">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK </h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskevaluasifungsiekflapanganedit">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskevaluasifungsiekflapanganedit">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskevaluasifungsiekflapanganedit">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskevaluasifungsiekflapanganedit">
                                                                <input type="hidden" id="dokumenskevaluasifungsiekflapanganhidden">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataEvaluasiFungsiEkfLapangan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable3" style="width:100%">
                                            <thead>
                                                <th>Rekomendasi</th>
                                                <th>Tahun Pelaksanaan</th>
                                                <th>UPT</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="kondisikawasankonservarsi" class="card tab-pane fade">
                                    <div class="card-header" style="height: 55;">
                                        Kondisi Kawasan Konservarsi
                                        <button class="btn btn-default btn-sm float-right" style="margin-bottom:10px" data-toggle="modal" data-target="#myModal7"><i class="fa fa-pencil"></i> Edit Data</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="modal fade" id="myModal7">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input kondisi Kawasan Konservarsi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Lintang</label>
                                                                <input type="hidden" id="idkondisikawasan" value="<?php echo $kondisikawasan[0]['id'];?>">
                                                                <input class="form-control" id="lintangkondisikawasan" value="<?php echo $kondisikawasan[0]['lintang'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bujur</label>
                                                                <input class="form-control" id="bujurkondisikawasan" value="<?php echo $kondisikawasan[0]['bujur'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Letak Administrasi</label>
                                                                <textarea class="form-control" id="letakadministrasikondisikawasan" value="<?php echo $kondisikawasan[0]['letak_administrasi'];?>"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Unit Pengelola</label>
                                                                <select class="form-control" id="unitpengelolakondisikawasan">
                                                                </select>
                                                                <input class="form-control" type="hidden" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tipe Ekosistem</label>
                                                                <select class="form-control" id="tipeekosistemkondisikawasan" value="<?php echo $kondisikawasan[0]['tipe_ekosistem'];?>">
                                                                    <option value="schmidt"> Ekosistem Test 1 </option>
                                                                    <option value="ferguson"> Ekosistem Test 1 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tipe Iklim</label>
                                                                <select class="form-control" id="tipeiklimkondisikawasan" value="<?php echo $kondisikawasan[0]['tipe_iklim'];?>">
                                                                    <option value="schmidt"> Schmidt </option>
                                                                    <option value="ferguson"> Ferguson </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Curah Hujan (MM per tahun)</label>
                                                                <input class="form-control" id="curahhujankondisikawasan" value="<?php echo $kondisikawasan[0]['curah_hujan'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ketinggian (m dpl)</label>
                                                                <input class="form-control" id="ketinggiankondisikawasan" value="<?php echo $kondisikawasan[0]['ketinggian'];?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Sejarah Kawasan</label>
                                                                <textarea class="form-control" id="sejarahkondisikawasan"><?php echo $kondisikawasan[0]['sejarah_kawasan'];?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <?php if(empty($kondisikawasan)){?>
                                                        <button type="button" class="btn btn-primary" id="SaveDataKondisiKawasanKosong">Simpan</button>
                                                    <?php }else{?>
                                                        <button type="button" class="btn btn-primary" id="SaveDataKondisiKawasan">Simpan</button>
                                                    <?php } ?>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <td><strong>Lintang</strong> </td><td>:</td></td><td><?php   echo $kondisikawasan[0]['lintang'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bujur</strong></td><td>:</td><td><?php   echo $kondisikawasan[0]['bujur'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Letak Administrasi</strong> </td><td> :</td><td><?php   echo $kondisikawasan[0]['letak_administrasi'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Unit Pengelola</strong> </td><td> :</td><td><?php   echo $kondisikawasan[0]['unit_pengelola'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tipe Iklim Schmidt & Ferguson</strong></td><td> :</td><td> <?php   echo $kondisikawasan[0]['tipe_iklim'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Curah Hujan(mm per tahun)</strong> </td><td> :</td><td> <?php   echo $kondisikawasan[0]['curah_hujan'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Ketinggian (mdpl)</strong></td><td> :</td><td> <?php   echo $kondisikawasan[0]['ketinggian'];?> </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sejarah Kawasan</strong></td><td> :</td><td> <?php   echo $kondisikawasan[0]['sejarah_kawasan'];?> </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tipe Eksosistem</strong></td><td> :</td><td> <?php   echo $kondisikawasan[0]['tipe_ekosistem'];?> </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div id="evaluasifungsiekflapangan" class="card tab-pane fade">
                                    <div class="card-header">
                                        Evaluasi Fungsi EKF Lapangan
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Data</button>
                                        <div class="modal fade" id="myModal5">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Evaluasi Fungsi Ekf Lapangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Rekomendasi</label>
                                                                <textarea class="form-control" type="text" id="rekomendasievaluasifungsiekflapangan"></textarea>
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tahun Pelaksanaan</label>
                                                               <select class="form-control" id="tahunpelaksanaanevaluasifungsiekflapangan">
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                               </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>UPT</label>
                                                                <select class="form-control" type="text" id="uptevaluasifungsiekflapangan" >
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Peta</label>
                                                                <input class="form-control" type="file" id="petaevaluasifungsiekflapangan" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK </h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskevaluasifungsiekflapangan">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskevaluasifungsiekflapangan">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskevaluasifungsiekflapangan">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskevaluasifungsiekflapangan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataEvaluasiFungsiEkfLapangan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal6">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Evaluasi Fungsi Ekf Lapangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Rekomendasi</label>
                                                                <textarea class="form-control" type="text" id="rekomendasievaluasifungsiekflapanganedit"></textarea>
                                                                <input type="hidden" id="idevaluasifungsiekflapangan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tahun Pelaksanaan</label>
                                                               <select class="form-control" id="tahunpelaksanaanevaluasifungsiekflapanganedit">
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                               </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>UPT</label>
                                                                <select class="form-control" type="text" id="uptevaluasifungsiekflapanganedit" >
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Peta</label>
                                                                <input class="form-control" type="file" id="petaevaluasifungsiekflapanganedit" >
                                                                <input type="hidden" id="petaevaluasifungsiekflapanganhidden">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK </h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskevaluasifungsiekflapanganedit">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskevaluasifungsiekflapanganedit">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskevaluasifungsiekflapanganedit">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskevaluasifungsiekflapanganedit">
                                                                <input type="hidden" id="dokumenskevaluasifungsiekflapanganhidden">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataEvaluasiFungsiEkfLapangan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable3" style="width:100%">
                                            <thead>
                                                <th>Rekomendasi</th>
                                                <th>Tahun Pelaksanaan</th>
                                                <th>UPT</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="indikasitoradalamkk" class="card tab-pane fade">
                                    <div class="card-header">
                                        Indikasi Tora Dalam KK
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal7">Tambah Data</button>
                                        <div class="modal fade" id="myModal7">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Evaluasi Fungsi Ekf Lapangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Peta (JPEG)</label>
                                                                <input type="file" class="form-control" id="petaindikasitora">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas(HA)</label>
                                                                <input type="number" class="form-control" id="luasindikasitora">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input type="text" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas Kawasan(HA)</label>
                                                                <input type="number" class="form-control" id="luaskawasanindikasitora">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK Keseluruhan</h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskindikasitora">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskindikasitora">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskindikasitora">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskindikasitora">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataIndikasiTora">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal8">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Evaluasi Fungsi Ekf Lapangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Peta (JPEG)</label>
                                                                <input type="file" class="form-control" id="petaindikasitoraedit">
                                                                <input type="hidden" id="petaindikasitorahidden">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas(HA)</label>
                                                                <input type="number" class="form-control" id="luasindikasitoraedit">
                                                                <input type="hidden" id="idindikasitora">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input type="text" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas Kawasan(HA)</label>
                                                                <input type="number" class="form-control" id="luaskawasanindikasitoraedit">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK Keseluruhan</h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskindikasitoraedit">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskindikasitoraedit">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskindikasitoraedit">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskindikasitoraedit">
                                                                <input type="hidden" id="dokumenskindikasitorahidden">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataIndikasiTora">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable4" style="width:100%">
                                            <thead>
                                                <th>Nama Kawasan</th>
                                                <th>Luas</th>
                                                <th>Luas Kawasan</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="hutanadatdalamkk" class="card tab-pane fade">
                                    <div class="card-header">
                                        Hutan adat dalam KK
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal9">Tambah Data</button>
                                        <div class="modal fade" id="myModal9">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Hutan Adat Dalam KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Provinsi</label>
                                                                <input type="text" class="form-control" id="provinsihutanadat">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kabpaten Kota</label>
                                                                <input type="text" class="form-control" id="kabupatenkotahutanadat">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input type="text" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas</label>
                                                                <input type="number" class="form-control" id="luashutanadat">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Adat</label>
                                                                <input type="text" class="form-control" id="namaadat">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK</h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskhutanadat">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskhutanadat">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskhutanadat">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskhutanadat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataHutanAdat">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal10">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Hutan adat dalam KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Provinsi</label>
                                                                <input type="text" class="form-control" id="provinsihutanadatedit">
                                                                <input type="hidden" id="idhutanadat">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kabpaten Kota</label>
                                                                <input type="text" class="form-control" id="kabupatenkotahutanadatedit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input type="text" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas</label>
                                                                <input type="number" class="form-control" id="luashutanadatedit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Adat</label>
                                                                <input type="text" class="form-control" id="namaadatedit">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <h3>SK</h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskhutanadatedit">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskhutanadatedit">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskhutanadatedit">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskhutanadatedit">
                                                                <input type="hidden" id="dokumenskhutanadathidden">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataHutanadat">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable5" style="width:100%">
                                            <thead>
                                                <th>Nama Kawasan</th>
                                                <th>Luas</th>
                                                <th>Nama Adat</th>
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
        function myfunc1(id){
            $.ajax({
                url:'/deleteEvaluasiFungsiDeskStudy/'+id,
                type:'GET',
                success:function(){
                    Swal.fire(
                                'Sukses!',
                                'Data Sukses di hapus!',
                                'success'
                            )
                            table1.ajax.reload();
                }
            })
        }
        function myfunc2(id){
            $.ajax({
                url:'/deleteEvaluasiFungsiEkfLapangan/'+id,
                type:'GET',
                success:function(){
                    Swal.fire(
                                'Sukses!',
                                'Data Sukses di hapus!',
                                'success'
                            )
                            table2.ajax.reload();
                }
            })
        }
        function myfunc3(id){
            $.ajax({
                url:'/deleteIndikasiTora/'+id,
                type:'GET',
                success:function(){
                    Swal.fire(
                                'Sukses!',
                                'Data Sukses di hapus!',
                                'success'
                            )
                            table3.ajax.reload();
                }
            })
        }
        function myfunc4(id){
            $.ajax({
                url:'/deleteHutanadat/'+id,
                type:'GET',
                success:function(){
                    Swal.fire(
                                'Sukses!',
                                'Data Sukses di hapus!',
                                'success'
                            )
                            table4.ajax.reload();
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
        
        function editfunc1(id){
            $.ajax({
                url:'/showDataEvaluasiFungsiDeskStudy/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idevaluasifungsideskstudy' ).val(hasil.id);
                    $( '#tanggalpelaksanaanedit' ).val(hasil.tanggal_pelaksanaan);
                    $( '#uptevaluasifungsideskstudyedit' ).val(hasil.upt);
                    $( '#rekomendasiedit' ).val(hasil.rekomendasi);
                }
            })
        }
        function editfunc2(id){
            $.ajax({
                url:'/showDataEvaluasiFungsiEkfLapangan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idevaluasifungsiekflapangan' ).val(hasil.id);
                    $( '#dokumenskevaluasifungsiekflapanganhidden' ).val(hasil.dokmen_sk);
                    $( '#petaevaluasifungsiekflapanganhidden' ).val(hasil.peta);
                    $( '#judulskevaluasifungsiekflapanganedit' ).val(hasil.judul_sk);
                    $( '#nomorskevaluasifungsiekflapanganedit' ).val(hasil.nomor_Sk);
                    $( '#tanggalskevaluasifungsiekflapanganedit' ).val(hasil.tanggal_sk);
                    $( '#rekomendasievaluasifungsiekflapanganedit' ).val(hasil.rekomendasi);
                    $( '#tahunpelaksanaanevaluasifungsiekflapanganedit' ).val(hasil.tahun_pelaksanaan);
                    $( '#uptevaluasifungsiekflapangan' ).val(hasil.upt);
                }
            })
        }
        function editfunc3(id){
            $.ajax({
                url:'/showDataIndikasiTora/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idindikasitora' ).val(hasil.id);
                    $( '#dokumenskindikasitorahidden' ).val(hasil.dokumen_sk);
                    $( '#petaindikasitorahidden' ).val(hasil.peta);
                    $( '#judulskindikasitoraedit' ).val(hasil.judul_sk);
                    $( '#nomorskindikasitoraedit' ).val(hasil.nomor_Sk);
                    $( '#tanggalskindikasitoraedit' ).val(hasil.tanggal_sk);
                    $( '#luaskawasanindikasitoraedit' ).val(hasil.luas_kawasan);
                    $( '#luasindikasitoraedit' ).val(hasil.luas);
                }
            })
        }
        function editfunc4(id){
            $.ajax({
                url:'/showDataHutanadat/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idhutanadat' ).val(hasil.id);
                    $( '#provinsihutanadatedit' ).val(hasil.provinsi);
                    $( '#kabupatenkotahutanadatedit' ).val(hasil.kabupaten);
                    $( '#namaadatedit' ).val(hasil.nama_adat);
                    $( '#dokumenskhutanadathidden' ).val(hasil.dokumen_sk);
                    $( '#judulskhutanadatedit' ).val(hasil.judul_sk);
                    $( '#nomorskhutanadatedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskhutanadatedit' ).val(hasil.tanggal_sk);
                    $( '#luashutanadatedit' ).val(hasil.luas);
                }
            })
        }
        var table =  $('#myTable1').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataPengukuhanKawasan/"+"<?php echo $hasil['nama_kawasan'];?>",
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
            var table1 =  $('#myTable2').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataEvaluasiFungsiDeskStudy/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'rekomendasi' },
                            { data: 'tahun_pelaksanaan' },
                            { data: 'upt' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal4'onclick='editfunc1("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc1("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
            var table2 =  $('#myTable3').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataEvaluasiFungsiEkfLapangan/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'rekomendasi' },
                            { data: 'tahun_pelaksanaan' },
                            { data: 'upt' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal6'onclick='editfunc2("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc2("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
            var table3 =  $('#myTable4').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataIndikasiTora/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_kawasan' },
                            { data: 'luas' },
                            { data: 'luas_kawasan' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal8'onclick='editfunc3("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc3("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
            var table4 =  $('#myTable5').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataHutanadat/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_kawasan' },
                            { data: 'luas' },
                            { data: 'nama_adat' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal10'onclick='editfunc4("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc4("+data.id+")'>Delete</button>";
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
            $('#SaveDataKondisiKawasan').click(function(){
                var data;
                data = new FormData();
                data.append('lintang', $('#lintangkondisikawasan').val());
                data.append('bujur',$('#bujurkondisikawasan').val());
                data.append('letak_administrasi', $('#letakadministrasikondisikawasan').val());
                data.append('unit_pengelola',$('#unitpengelolakondisikawasan').val());
                data.append('tipe_iklim', $('#tipeiklimkondisikawasan').val());
                data.append('curah_hujan', $('#curahhujankondisikawasan').val());
                data.append('ketinggian', $('#ketinggiankondisikawasan').val());
                data.append('nama_kawasan', $('#namakawasan').val());
                data.append('id_kondisikawasan', $('#idkondisikawasan').val());
                data.append('sejarah_kawasan', $('#sejarahkondisikawasan').val());
                data.append('tipe_ekosistem', $('#tipeekosistemkondisikawasan').val());
                $.ajax({
                    url:'/updateKondisiKawasan',
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
            $('#SaveDataKondisiKawasanKosong').click(function(){
                var data;
                data = new FormData();
                data.append('lintang', $('#lintangkondisikawasan').val());
                data.append('bujur',$('#bujurkondisikawasan').val());
                data.append('letak_administrasi', $('#letakadministrasikondisikawasan').val());
                data.append('unit_pengelola',$('#unitpengelolakondisikawasan').val());
                data.append('tipe_iklim', $('#tipeiklimkondisikawasan').val());
                data.append('curah_hujan', $('#curahhujankondisikawasan').val());
                data.append('ketinggian', $('#ketinggiankondisikawasan').val());
                data.append('sejarah_kawasan', $('#sejarahkondisikawasan').val());
                data.append('nama_kawasan', $('#namakawasan').val());
                data.append('tipe_ekosistem', $('#tipeekosistemkondisikawasan').val());
                $.ajax({
                    url:'/saveKondisiKawasan',
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
            $('#SaveDataevaluasifungsideskstudy').click(function(){
                var data;
                data = new FormData();
                data.append('rekomendasi', $('#rekomendasi').val());
                data.append('tahunpelaksanaan',$('#tahunpelaksanaan').val());
                data.append('namakawasan', $('#namakawasan').val());
                data.append('upt', $('#uptevaluasifungsideskstudy').val());
                $.ajax({
                    url:'/savedDataEvaluasiFungsiDeskStudy',
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
                            table1.ajax.reload();
                    }
                })
            })
            $('#UpdateDataEvaluasiDeskStudy').click(function(){
                var data;
                data = new FormData();
                data.append('rekomendasi', $('#rekomendasiedit').val());
                data.append('idevaluasifungsideskstudy', $('#idevaluasifungsideskstudy').val());
                data.append('tahunpelaksanaan',$('#tahunpelaksanaanedit').val());
                data.append('namakawasan', $('#namakawasanedit').val());
                data.append('upt', $('#uptevaluasifungsideskstudyedit').val());
                $.ajax({
                    url:'/updateDataEvaluasiFungsiDeskStudy',
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
                            table1.ajax.reload();
                    }
                })
            })
            $('#SaveDataEvaluasiFungsiEkfLapangan').click(function(){
                var data;
                data = new FormData();
                data.append('rekomendasi', $('#rekomendasievaluasifungsiekflapangan').val());
                data.append('tahunpelaksanaan',$('#tahunpelaksanaanevaluasifungsiekflapangan').val());
                data.append('namakawasan', $('#namakawasan').val());
                data.append('judulsk', $('#judulskevaluasifungsiekflapangan').val());
                data.append('nomorsk', $('#nomorskevaluasifungsiekflapangan').val());
                data.append('tanggalsk', $('#tanggalskevaluasifungsiekflapangan').val());
                data.append('dokumensk', $('#dokumenskevaluasifungsiekflapangan')[0].files[0]);
                data.append('peta', $('#petaevaluasifungsiekflapangan')[0].files[0]);
                data.append('upt', $('#uptevaluasifungsiekflapangan').val());
                $.ajax({
                    url:'/savedDataEvaluasiFungsiEkfLapangan',
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
                            table2.ajax.reload();
                    }
                })
            })
            $('#UpdateDataEvaluasiFungsiEkfLapangan').click(function(){
                var file = $('#dokumenskevaluasifungsiekflapanganedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append('idevaluasifungsiekflapangan', $('#idevaluasifungsiekflapangan').val());
                    data.append('rekomendasi', $('#rekomendasievaluasifungsiekflapanganedit').val());
                    data.append('tahunpelaksanaan',$('#tahunpelaksanaanevaluasifungsiekflapanganedit').val());
                    data.append('namakawasan', $('#namakawasanedit').val());
                    data.append('judulsk', $('#judulskevaluasifungsiekflapanganedit').val());
                    data.append('nomorsk', $('#nomorskevaluasifungsiekflapanganedit').val());
                    data.append('tanggalsk', $('#tanggalskevaluasifungsiekflapanganedit').val());
                    data.append('dokumensk', $('#dokumenskevaluasifungsiekflapanganhidden').val());
                    data.append('peta', $('#petaevaluasifungsiekflapanganhidden').val());
                    data.append('upt', $('#uptevaluasifungsiekflapanganedit').val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataEvaluasiFungsiEkfLapangan',
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
                                table2.ajax.reload();
                        }
                    })
                }else{
                    var data;
                    data = new FormData();
                    data.append('idevaluasifungsiekflapangan', $('#idevaluasifungsiekflapangan').val());
                    data.append('rekomendasi', $('#rekomendasievaluasifungsiekflapanganedit').val());
                    data.append('tahunpelaksanaan',$('#tahunpelaksanaanevaluasifungsiekflapanganedit').val());
                    data.append('namakawasan', $('#namakawasanedit').val());
                    data.append('judulsk', $('#judulskevaluasifungsiekflapanganedit').val());
                    data.append('nomorsk', $('#nomorskevaluasifungsiekflapanganedit').val());
                    data.append('tanggalsk', $('#tanggalskevaluasifungsiekflapanganedit').val());
                    data.append('dokumensk', $('#dokumenskevaluasifungsiekflapanganedit')[0].files[0]);
                    data.append('peta', $('#petaevaluasifungsiekflapanganedit')[0].files[0]);
                    data.append('upt', $('#uptevaluasifungsiekflapanganedit').val());
                    $.ajax({
                        url:'/updateDataEvaluasiFungsiEkfLapangan',
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
                                table2.ajax.reload();
                        }
                    })
                }
            })
            $('#SaveDataIndikasiTora').click(function(){
                var data;
                data = new FormData();
                data.append('luas', $('#luasindikasitora').val());
                data.append('luas_kawasan',$('#luaskawasanindikasitora').val());
                data.append('namakawasan', $('#namakawasan').val());
                data.append('judulsk', $('#judulskindikasitora').val());
                data.append('nomorsk', $('#nomorskindikasitora').val());
                data.append('tanggalsk', $('#tanggalskindikasitora').val());
                data.append('dokumensk', $('#dokumenskindikasitora')[0].files[0]);
                data.append('peta', $('#petaindikasitora')[0].files[0]);
                $.ajax({
                    url:'/savedDataIndikasiTora',
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
                            table3.ajax.reload();
                    }
                })
            })
            $('#UpdateDataIndikasiTora').click(function(){
                var file = $('#dokumenskindikasitoraedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append('idindikasitora', $('#idindikasitora').val());
                    data.append('luas', $('#luasindikasitoraedit').val());
                    data.append('luas_kawasan',$('#luaskawasanindikasitoraedit').val());
                    data.append('namakawasan', $('#namakawasan').val());
                    data.append('judulsk', $('#judulskindikasitoraedit').val());
                    data.append('nomorsk', $('#nomorskindikasitoraedit').val());
                    data.append('tanggalsk', $('#tanggalskindikasitoraedit').val());
                    data.append('dokumensk', $('#dokumenskindikasitorahidden').val());
                    data.append('peta', $('#petaindikasitorahidden').val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataIndikasiTora',
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
                                table3.ajax.reload();
                        }
                    })
                }else{
                    var data;
                    data = new FormData();
                    data.append('idindikasitora', $('#idindikasitora').val());
                    data.append('luas', $('#luasindikasitoraedit').val());
                    data.append('luas_kawasan',$('#luaskawasanindikasitoraedit').val());
                    data.append('namakawasan', $('#namakawasan').val());
                    data.append('judulsk', $('#judulskindikasitoraedit').val());
                    data.append('nomorsk', $('#nomorskindikasitoraedit').val());
                    data.append('tanggalsk', $('#tanggalskindikasitoraedit').val());
                    data.append('dokumensk', $('#dokumenskindikasitoraedit')[0].files[0]);
                    data.append('peta', $('#petaindikasitoraedit')[0].files[0]);
                    $.ajax({
                        url:'/updateDataIndikasiTora',
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
                                table3.ajax.reload();
                        }
                    })
                }
            })
            $('#SaveDataHutanAdat').click(function(){
                var data;
                data = new FormData();
                data.append('luas', $('#luashutanadat').val());
                data.append('nama_kawasan',$('#namakawasan').val());
                data.append('nama_adat', $('#namaadat').val());
                data.append('provinsi',$('#provinsihutanadat').val());
                data.append('kabupaten', $('#kabupatenkotahutanadat').val());
                data.append('judulsk', $('#judulskhutanadat').val());
                data.append('nomorsk', $('#nomorskhutanadat').val());
                data.append('tanggalsk', $('#tanggalskhutanadat').val());
                data.append('dokumensk', $('#dokumenskhutanadat')[0].files[0]);
                $.ajax({
                    url:'/savedDataHutanadat',
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
                            table4.ajax.reload();
                    }
                })
            })
            $('#UpdateDataHutanadat').click(function(){
                var file = $('#dokumenskindikasitoraedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append('idhutanadat', $('#idhutanadat').val())
                    data.append('luas', $('#luashutanadatedit').val());
                    data.append('nama_kawasan',$('#namakawasan').val());
                    data.append('nama_adat', $('#namaadatedit').val());
                    data.append('provinsi',$('#provinsihutanadatedit').val());
                    data.append('kabupaten', $('#kabupatenkotahutanadatedit').val());
                    data.append('judulsk', $('#judulskhutanadatedit').val());
                    data.append('nomorsk', $('#nomorskhutanadatedit').val());
                    data.append('tanggalsk', $('#tanggalskhutanadatedit').val());
                    data.append('dokumensk', $('#dokumenskhutanadathidden').val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataHutanadat',
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
                                table4.ajax.reload();
                        }
                    })
                }else{
                    var data;
                    data = new FormData();
                    data.append('idhutanadat', $('#idhutanadat').val())
                    data.append('luas', $('#luashutanadatedit').val());
                    data.append('nama_kawasan',$('#namakawasan').val());
                    data.append('nama_adat', $('#namaadatedit').val());
                    data.append('provinsi',$('#provinsihutanadatedit').val());
                    data.append('kabupaten', $('#kabupatenkotahutanadatedit').val());
                    data.append('judulsk', $('#judulskhutanadatedit').val());
                    data.append('nomorsk', $('#nomorskhutanadatedit').val());
                    data.append('tanggalsk', $('#tanggalskhutanadatedit').val());
                    data.append('dokumensk', $('#dokumenskhutanadatedit')[0].files[0]);
                    $.ajax({
                        url:'/updateDataHutanadat',
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
                                table4.ajax.reload();
                        }
                    })
                }
            })
        })
    </script>
</body>
</html>