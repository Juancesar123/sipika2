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
                                    <img src="<?php echo constant('API_URL') .'/'. $hasil['gambar'];?>" class="img-fluid">
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
                                            <a data-toggle="tab" href="#home" class="list-group-item list-group-item-action bg-light" style="color:blue">Profile</a>
                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit Pemolaan</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#pengukuhankawasan" class="list-group-item list-group-item-action bg-light" style="color:blue">Perkembangan Pengukuhan kawasan</a>
                                            <a data-toggle="tab" href="#evaluasifungsideskstudy" class="list-group-item list-group-item-action bg-light" style="color:blue">Evaluasi Fungsi Desk Study</a>
                                            <a  data-toggle="tab" href="#evaluasifungsiekflapangan" class="list-group-item list-group-item-action bg-light" style="color:blue">Evaluasi Fungsi EKF Lapangan</a>
                                            <a data-toggle="tab" href="#indikasitoradalamkk" class="list-group-item list-group-item-action bg-light" style="color:blue">Indikasi Tora Dalam KK</a>
                                            <a data-toggle="tab" href="#hutanadatdalamkk" class="list-group-item list-group-item-action bg-light" style="color:blue">Hutan Adat Dalam KK</a>

                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit IIKA</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a data-toggle="tab" href="#desasekitarkk" class="list-group-item list-group-item-action bg-light" style="color:blue">Desa Sekitar KK</a>
                                            <a data-toggle="tab" href="#wilayahadat" class="list-group-item list-group-item-action bg-light" style="color:blue">Wilayah Adat</a>
                                            <a data-toggle="tab" href="#permasalahankk" class="list-group-item list-group-item-action bg-light" style="color:blue" >Permasalahan Pengelolaan KK</a>
                                            <a data-toggle="tab" href="#kondisikawasankonservarsi" class="list-group-item list-group-item-action bg-light" style="color:blue">Kondisi Kawasan Konservarsi</a>
                                            <a data-toggle="tab" href="#potensikawasankonservarsi" class="list-group-item list-group-item-action bg-light" style="color:blue">Potensi Kawasan Konservarsi</a>
                                            <a data-toggle="tab" href="#keanekaragamanhayati" class="list-group-item list-group-item-action bg-light" style="color:blue">Keanekaragaman Hayati</a>
                                            <a data-toggle="tab" href="#sosekbud" class="list-group-item list-group-item-action bg-light" style="color:blue">Sosekbud</a>
                                             <a data-toggle="tab" href="#penutupanlahanperkawasan" class="list-group-item list-group-item-action bg-light" style="color:blue">Penutupan Lahan Per Kawasan</a>
                                            <a data-toggle="tab" href="#openareaperkawasan" class="list-group-item list-group-item-action bg-light" style="color:blue">Open Area Per Kawasan</a>
                                        </div>
                                        <br>
                                        <div class="sidebar-heading">
                                            <strong>Subdit PKS</strong>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a  data-toggle="tab" data-toggle="tab" href="#penguatanfungsikk" class="list-group-item list-group-item-action bg-light" style="color:blue">Penguatan Fungsi KK</a>
                                            <a   data-toggle="tab" href="#pembangunanstrategis" class="list-group-item list-group-item-action bg-light" style="color:blue">Pembangunan Strategis</a>
                                            <a  data-toggle="tab" href="#kemitraankonservasi" class="list-group-item list-group-item-action bg-light"style="color:blue">Kemitrataan Konservarsi</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="home" class="card tab-pane fade in ">
                                    <div class="card-header">
                                        Profile Kawasan
                                        <div class="float-right">
                                           
                                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i> Edit</button>
                                              
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
                                                    <div class="form-group">
                                                        <label>Gambar</label>
                                                        <input class="form-control" type="file" id="gambar">
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
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Perkembangan Pengukuhan Kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formpengukuhankawasan">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                 <h5>Basic Info </h5>
                                                               
                                
                                                                    <input class="form-control" type="hidden" id="nama_kawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                    <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                                <div class="form-group">
                                                                    <label>Luas(Ha)</label>
                                                                    <input class="form-control" type="number" id="luas" name="luas">
                                                                </div>
                                                                  <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control" id="upt" name="upt">
                                                                       
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Register</label>
                                                                    <input class="form-control" type="text" id="register" value="<?php echo $hasil['register'];?>" disabled>
                                                                    <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Perkembangan Tata Batas</label>
                                                                    <input class="form-control" type="file" id="perkembangan_tata_batas" name="perkembangan_tata_batas">
                                                                </div>
                                                               
                                                              
                                                                <div class="form-group">
                                                                    <label>File SHP</label>
                                                                    <input class="form-control" type="file" id="file_shp" name="file_shp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Permasalahan</label>
                                                                    <textarea class="form-control" id="permasalahan" name="permasalahan"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Usulan Penyelesaian</label>
                                                                    <textarea class="form-control" id="usulan_penyelesaian" name="usulan_penyelesaian"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK </h5>
                                                                    <label>Jenis SK</label>
                                                                    <select class="form-control" type="text" id="jenissk" name="jenissk">
                                                                        <option value="SK Penunjukan">SK Penunjukan</option>
                                                                        <option value="SK Penetapan">SK Penetapan</option>
                                                                        <option value="SK Provinsi">SK Provinsi</option>
                                                                        <option value="SK Penetapan Fungsi Kawasan">SK Penetapan Fungsi Kawasan</option>
                                                                        <option value="SK Perubahan Fungsi">SK Perubahan Fungsi</option>
                                                                    </select>
                                                                    <br>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulsk" name="judulsk">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorsk" name="nomorsk">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalsk" name="tanggalsk">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumensk" name="dokumensk">
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                                                 <form id="formpengukuhankawasanedit">
                                                    <!-- Modal body --> 
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input class="form-control" type="hidden" id="nama_kawasanedit" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                                <input type="hidden" id="idpengukuhankawasan">
                                                                <div class="form-group">
                                                                    <label>Luas(Ha)</label>
                                                                    <input class="form-control" type="number" id="luasedit" name="luasedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control" id="uptedit" name="uptedit">
                                                                       
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Register</label>
                                                                    <input class="form-control" type="text" id="registeredit" name="registeredit" value="<?php echo $hasil['register'];?>" disabled>
                                                                    <input type="hidden" id="idkawasan" value="<?php echo  $hasil['id'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Perkembangan Tata Batas</label>
                                                                    <input class="form-control" type="file" id="perkembangan_tata_batasedit" name="perkembangan_tata_batasedit" >
                                                                    <input class="form-control" type="hidden" id="perkembangan_tata_batashidden" >
                                                                </div>
                                                              
                                                                <div class="form-group">
                                                                    <label>File SHP</label>
                                                                    <input class="form-control" type="file" id="file_shpedit" name="file_shpedit">
                                                                    <input class="form-control" type="hidden" id="file_shphidden" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Permasalahan</label>
                                                                    <textarea class="form-control" id="permasalahanedit" name="permasalahanedit"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Usulan Penyelesaian</label>
                                                                    <textarea class="form-control" id="usulan_penyelesaianedit" name="usulan_penyelesaianedit"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK </h5>
                                                                    <label>Jenis SK</label>
                                                                    <select class="form-control" type="text" id="jenisskedit" name="jenisskedit">
                                                                        <option value="SK Penunjukan">SK Penunjukan</option>
                                                                        <option value="SK Penetapan">SK Penetapan</option>
                                                                        <option value="SK Provinsi">SK Provinsi</option>
                                                                        <option value="SK Penetapan Fungsi Kawasan">SK Penetapan Fungsi Kawasan</option>
                                                                        <option value="SK Perubahan Fungsi">SK Perubahan Fungsi</option>
                                                                    </select>
                                                                    <br>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskedit" name="judulskedit">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskedit" name="nomorskedit">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskedit" name="tanggalskedit">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskedit" name="dokumenskedit">
                                                                    <input class="form-control" type="hidden" id="dokumen_skhidden" >
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal3">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Evaluasi Fungsi Desk Study</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formevaluasideskstudy">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Rekomendasi</label>
                                                            <select class="form-control" id="rekomendasi" name="rekomendasi">
                                                                <option value="EKF">EKF</option>
                                                                <option value="PE">PE</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tahun Pelaksanaan</label>
                                                            <select class="form-control" id="tahunpelaksanaan" name="tahunpelaksanaan">
                                                                <option value="2019">2019</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>UPT</label>
                                                            <select class="form-control" id="uptevaluasifungsideskstudy" name="uptevaluasifungsideskstudy">
                                                                
                                                            </select>
                                                        </div>
                                                  
                                                        <input class="form-control" type="hidden" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                                                <form id="formevaluasideskstudyedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Rekomendasi</label>
                                                            <select class="form-control" id="rekomendasiedit" name="rekomendasiedit">
                                                                <option value="EKF">EKF</option>
                                                                <option value="PE">PE</option>
                                                            </select>
                                                            <input type="hidden" id="idevaluasifungsideskstudy">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tahun Pelaksanaan</label>
                                                            <select class="form-control" id="tahunpelaksanaanedit" name="tahunpelaksanaanedit">
                                                                <option value="2019">2019</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>UPT</label>
                                                            <select class="form-control" id="uptevaluasifungsideskstudyedit" name="uptevaluasifungsideskstudyedit">
                                                                
                                                            </select>
                                                        </div>
                                                            <input class="form-control" type="hidden" id="namakawasanedit" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                                                <form id="formevaluasifungsiekf">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Basic Info</h5>
                                                                <div class="form-group">
                                                                    <label>Rekomendasi</label>
                                                                    <textarea class="form-control" type="text" id="rekomendasievaluasifungsiekflapangan" name="rekomendasievaluasifungsiekflapangan"></textarea>
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tahun Pelaksanaan</label>
                                                                   <select class="form-control" id="tahunpelaksanaanevaluasifungsiekflapangan" name="tahunpelaksanaanevaluasifungsiekflapangan">
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                   </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control"  id="uptevaluasifungsiekflapangan" name="uptevaluasifungsiekflapangan">
                                                                       
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Peta</label>
                                                                    <input class="form-control" type="file" id="petaevaluasifungsiekflapangan" name="petaevaluasifungsiekflapangan">
                                                                </div>
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK </h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskevaluasifungsiekflapangan" name="judulskevaluasifungsiekflapangan">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskevaluasifungsiekflapangan" name="nomorskevaluasifungsiekflapangan">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskevaluasifungsiekflapangan" name="tanggalskevaluasifungsiekflapangan">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskevaluasifungsiekflapangan" name="dokumenskevaluasifungsiekflapangan">
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                                                <form id="formevaluasifungsiekfedit">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>General Info</h5>
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

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Peta</label>
                                                                    <input class="form-control" type="file" id="petaevaluasifungsiekflapanganedit" >
                                                                    <input type="hidden" id="petaevaluasifungsiekflapanganhidden">
                                                                </div>
                                                                
                                                                    <input class="form-control" type="hidden" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK </h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskevaluasifungsiekflapanganedit">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskevaluasifungsiekflapanganedit">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskevaluasifungsiekflapanganedit">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskevaluasifungsiekflapanganedit">
                                                                    <br>
                                                                    <input type="hidden" id="dokumenskevaluasifungsiekflapanganhidden">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
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
                                 <div id="penguatanfungsikk" class="card tab-pane fade">
                                    <div class="card-header">
                                        Penguatan Fungsi KK
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal34">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal34">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Penguatan Fungsi KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formpenguatankk">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                               
                                                                <div class="form-group">
                                                                    <label>Judul Kerjasama</label>
                                                                    <input class="form-control" type="text" id="judulkerjasama" name="judulkerjasama">
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mitra Kerja</label>
                                                                    <input type="text" class="form-control" id="mitrakerja" name="mitrakerja">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Mitra</label>
                                                                    <select class="form-control"  id="kategorimitra" name="kategorimitra">
                                                                       <option value="Lintas Kementrian">Lintas Kementrian</option>
                                                                       <option value="Pemda/Pemprov">Pemda/Pemprov</option>
                                                                       <option value="Lintas Eselon 1">Lintas Eselon 1</option>
                                                                       <option value="Kelompok Masyarakat">Kelompok Masyarakat</option>
                                                                       <option value="Perusahaan">Perusahaan</option>
                                                                       <option value="Badan Usaha">Badan Usaha</option>
                                                                       <option value="NGO Lokal">NGO Lokal</option>
                                                                       <option value="NGO Internasional">NGO Internasional</option>
                                                                       <option value="Akademisi">Akademisi</option>
                                                                       <option value="Perorangan">Perorangan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Persetujuan</label>
                                                                    <input class="form-control" type="text" id="persetujuan" name="persetujuan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nota Kesepahaman</label>
                                                                    <input class="form-control" type="text" id="notakesepahaman" name="notakesepahaman">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Perjanjian Kerjasama</label>
                                                                    <input class="form-control" type="text" id="perjanjiankerjasama" name="perjanjiankerjasama">
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5>Jangka Waktu</h5>
                                                                    <br>
                                                                    <label>Dari</label>
                                                                    <input class="form-control" type="date" id="daripenguatan" name="daripenguatan">
                                                                    <br>
                                                                    <label>Ke</label>
                                                                    <input class="form-control" type="date" id="kepenguatan" name="kepenguatan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>File PKS</label>
                                                                    <input class="form-control" type="file" id="filepks" name="filepks">
                                                                </div>
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                            <div class="col-6">
                                                                
                                                                 <div class="form-group">
                                                                    <label>Peta Lokasi Kerjasama</label>
                                                                    <input class="form-control" type="file" id="petalokasikerjasama" name="petalokasikerjasama">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea class="form-control" id="keteranganpenguatan" name="keteranganpenguatan"></textarea>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Rencana Pelaksanaan Program</label>
                                                                    <input class="form-control" type="file" id="rencanapelaksanaanprogram" name="rencanapelaksanaanprogram">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rencana Kerja Tahunan</label>
                                                                    <input class="form-control" type="file" id="rencanakerjatahunan" name="rencanakerjatahunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Monitoring</label>
                                                                    <input class="form-control" type="file" id="monitoring" name="monitoring">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Evaluasi</label>
                                                                    <input class="form-control" type="file" id="evaluasi" name="evaluasi">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Laporan Akhir</label>
                                                                    <input class="form-control" type="file" id="laporanakhir" name="laporanakhir">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Hibah</label>
                                                                    <div class="radio">
                                                                      <label><input type="radio" name="hibah" value="ada"checked>Ada</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                      <label><input type="radio" name="hibah" value="tidak">Tidak</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Hibah</label>
                                                                    <input class="form-control" type="text" id="jumlahhibah" name="jumlahhibah">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control" id="uptpenguatanfungsi" name="uptpenguatanfungsi">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal35">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Penguatan Fungsi KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form id="formpenguatankkedit">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label>Judul Kerjasama</label>
                                                                    <input class="form-control" type="text" id="judulkerjasamaedit" name="judulkerjasamaedit">
                                                                    <input type="hidden" id="idpenguatanfungsikk">
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mitra Kerja</label>
                                                                    <input type="text" class="form-control" id="mitrakerjaedit" name="mitrakerjaedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Mitra</label>
                                                                    <select class="form-control"  id="kategorimitraedit" name="kategorimitraedit">
                                                                       <option value="Lintas Kementrian">Lintas Kementrian</option>
                                                                       <option value="Pemda/Pemprov<">Pemda/Pemprov</option>
                                                                       <option value="Lintas Eselon 1">Lintas Eselon 1</option>
                                                                       <option value="Kelompok Masyarakat">Kelompok Masyarakat</option>
                                                                       <option value="Perusahaan">Perusahaan</option>
                                                                       <option value="Badan Usaha">Badan Usaha</option>
                                                                       <option value="NGO Lokal">NGO Lokal</option>
                                                                       <option value="NGO Internasional">NGO Internasional</option>
                                                                       <option value="Akademisi">Akademisi</option>
                                                                       <option value="Perorangan">Perorangan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Persetujuan</label>
                                                                    <input class="form-control" type="text" id="persetujuanedit" name="persetujuanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nota Kesepahaman</label>
                                                                    <input class="form-control" type="text" id="notakesepahamanedit" name="notakesepahamanedit">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Perjanjian Kerjasama</label>
                                                                    <input class="form-control" type="text" id="perjanjiankerjasamaedit" name="perjanjiankerjasamaedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5>Jangka Waktu</h5>
                                                                    <br>
                                                                    <label>Dari</label>
                                                                    <input class="form-control" type="date" id="daripenguatanedit" name="daripenguatanedit">
                                                                    <br>
                                                                    <label>Ke</label>
                                                                    <input class="form-control" type="date" id="kepenguatanedit" name="kepenguatanedit">
                                                                </div>
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label>File PKS</label>
                                                                    <input class="form-control" type="file" id="filepksedit" name="filepksedit">
                                                                    <input type="hidden" id="filepkshidden">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Peta Lokasi Kerjasama</label>
                                                                    <input class="form-control" type="file" id="petalokasikerjasamaedit" name="petalokasikerjasamaedit">
                                                                    <input type="hidden" id="petalokasikerjasamahidden">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea class="form-control" id="keteranganpenguatanedit" name="keteranganpenguatanedit"></textarea>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Rencana Pelaksanaan Program</label>
                                                                    <input class="form-control" type="file" id="rencanapelaksanaanprogramedit" name="rencanapelaksanaanprogramedit">
                                                                    <input type="hidden" id="rencanapelaksanaanprogramhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rencana Kerja Tahunan</label>
                                                                    <input class="form-control" type="file" id="rencanakerjatahunanedit" name="rencanakerjatahunanedit">
                                                                    <input type="hidden" id="rencanakerjatahunanhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Monitoring</label>
                                                                    <input class="form-control" type="file" id="monitoringedit" name="monitoringedit">
                                                                    <input type="hidden" id="monitoringhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Evaluasi</label>
                                                                    <input class="form-control" type="file" id="evaluasiedit" name="evaluasiedit">
                                                                    <input type="hidden" id="evaluasihidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Laporan Akhir</label>
                                                                    <input class="form-control" type="file" id="laporanakhiredit" name="laporanakhiredit">
                                                                    <input type="hidden" id="laporanakhirhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Hibah</label>
                                                                    <div class="radio">
                                                                      <label><input type="radio" name="hibahedit" value="ada"checked>Ada</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                      <label><input type="radio" name="hibahedit" value="tidak">Tidak</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Hibah</label>
                                                                    <input class="form-control" type="text" id="jumlahhibahedit" name="jumlahhibahedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control" id="uptpenguatanfungsiedit" name="uptpenguatanfungsiedit">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable16" style="width:100%">
                                            <thead>
                                                <th>Judul Kerjasama</th>
                                                <th>Mitra Kerja</th>
                                                <th>Kategori Mitra</th>
                                                <th>UPT</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                  <div id="pembangunanstrategis" class="card tab-pane fade">
                                    <div class="card-header">
                                        Pembangunan Strategis
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal36">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal36">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Pembangunan Strategis</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formpembangunanstrategis">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                               
                                                                <div class="form-group">
                                                                    <label>Judul Kerjasama</label>
                                                                    <input class="form-control" type="text" id="judulkerjasamapembangunan" name="judulkerjasamapembangunan">
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mitra Kerja</label>
                                                                    <input type="text" class="form-control" id="mitrakerjapembangunan" name="mitrakerjapembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Mitra</label>
                                                                    <select class="form-control"  id="kategorimitrapembangunan" name="kategorimitrapembangunan">
                                                                       <option value="Lintas Kementrian">Lintas Kementrian</option>
                                                                       <option value="Pemda/Pemprov">Pemda/Pemprov</option>
                                                                       <option value="Lintas Eselon 1">Lintas Eselon 1</option>
                                                                       <option value="Kelompok Masyarakat">Kelompok Masyarakat</option>
                                                                       <option value="Perusahaan">Perusahaan</option>
                                                                       <option value="Badan Usaha">Badan Usaha</option>
                                                                       <option value="NGO Lokal">NGO Lokal</option>
                                                                       <option value="NGO Internasional">NGO Internasional</option>
                                                                       <option value="Akademisi">Akademisi</option>
                                                                       <option value="Perorangan">Perorangan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Kerjasama Strategis</label>
                                                                    <select class="form-control" type="text" id="kategorikerjasamastrategis" name="kategorikerjasamastrategis">
                                                                        <option value="komunikasi">Komunikasi</option>
                                                                        <option value="listrik">Listrik</option>
                                                                        <option value="transportasi terbatas pelabuhan">Transportasi Terbatas Pelabuhan</option>
                                                                        <option value="transportasi terbatas jalan">Transportasi Tebatas Jalan</option>
                                                                        <option value="mitigasi bencana">Mitigasi Bencana</option>
                                                                        <option value="hankam">Hankam</option>
                                                                        <option value="migas">Migas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Tower (Komunikasi)</label>
                                                                    <input class="form-control" type="text" id="jumlahtowerkomunikasi" name="jumlahtowerkomunikasi">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Tower (Listrik)</label>
                                                                    <input class="form-control" type="text" id="jumlahtowerlistrik" name="jumlahtowerlistrik">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Luar Area</label>
                                                                    <input class="form-control" type="text" id="luararea" name="luararea">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Panjang Jalan</label>
                                                                    <input class="form-control" type="text" id="panjangjalan" name="panjangjalan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keterangan (jika mitigasi bencana)</label>
                                                                    <input class="form-control" type="text" id="keteranganmitigasibencana" name="keteranganmitigasibencana">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas Area Militer</label>
                                                                    <input class="form-control" type="text" id="luasareamiliter" name="luasareamiliter">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas Area (Jika Migas)</label>
                                                                    <input class="form-control" type="text" id="luasareamigas" name="luasareamigas">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Persetujuan </label>
                                                                    <input class="form-control" type="text" id="persetujuanpembangunan" name="persetujuanpembangunan">
                                                                </div>
                                                               
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label>Pertimbangan Teknis </label>
                                                                    <input class="form-control" type="text" id="pertimbanganteknis" name="pertimbanganteknis">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <h5>Jangka Waktu</h5>
                                                                    <br>
                                                                    <label>Dari</label>
                                                                    <input class="form-control" type="date" id="daripembangunan" name="daripembangunan">
                                                                    <br>
                                                                    <label>Ke</label>
                                                                    <input class="form-control" type="date" id="kepembangunan" name="kepembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>File PKS</label>
                                                                    <input class="form-control" type="file" id="filepkspembangunan" name="filepkspembangunan">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Peta Lokasi Kerjasama</label>
                                                                    <input class="form-control" type="file" id="petalokasikerjasamapembangunan" name="petalokasikerjasamapembangunan">
                                                                </div>
                                                                
                                                                 <div class="form-group">
                                                                    <label>Rencana Pelaksanaan Program</label>
                                                                    <input class="form-control" type="file" id="rencanapelaksanaanprogrampembangunan" name="rencanapelaksanaanprogrampembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rencana Kerja Tahunan</label>
                                                                    <input class="form-control" type="file" id="rencanakerjatahunanpembangunan" name="rencanakerjatahunanpembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Monitoring</label>
                                                                    <input class="form-control" type="file" id="monitoringpembangunan" name="monitoringpembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Evaluasi</label>
                                                                    <input class="form-control" type="file" id="evaluasipembangunan" name="evaluasipembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Laporan Akhir</label>
                                                                    <input class="form-control" type="file" id="laporanakhirpembangunan" name="laporanakhirpembangunan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control" id="uptpembangunan" name="uptpembangunan">
                                                                    </select>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea class="form-control" id="keteranganpembangunan" name="keteranganpembangunan"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal37">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Pembangunan Strategis</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form id="formpembangunanstrategisedit">
                                                    <div class="modal-body">
                                                         <div class="row">
                                                            <div class="col-6">
                                                               
                                                                <div class="form-group">
                                                                    <label>Judul Kerjasama</label>
                                                                    <input class="form-control" type="text" id="judulkerjasamapembangunanedit" name="judulkerjasamapembangunanedit">
                                                                    <input type="hidden"id="idpembangunanstrategis" name="">
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mitra Kerja</label>
                                                                    <input type="text" class="form-control" id="mitrakerjapembangunanedit" name="mitrakerjapembangunanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Mitra</label>
                                                                    <select class="form-control"  id="kategorimitrapembangunanedit" name="kategorimitrapembangunanedit">
                                                                       <option value="Lintas Kementrian">Lintas Kementrian</option>
                                                                       <option value="Pemda/Pemprov">Pemda/Pemprov</option>
                                                                       <option value="Lintas Eselon 1">Lintas Eselon 1</option>
                                                                       <option value="Kelompok Masyarakat">Kelompok Masyarakat</option>
                                                                       <option value="Perusahaan">Perusahaan</option>
                                                                       <option value="Badan Usaha">Badan Usaha</option>
                                                                       <option value="NGO Lokal">NGO Lokal</option>
                                                                       <option value="NGO Internasional">NGO Internasional</option>
                                                                       <option value="Akademisi">Akademisi</option>
                                                                       <option value="Perorangan">Perorangan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Kerjasama Strategis</label>
                                                                    <select class="form-control" type="text" id="kategorikerjasamastrategisedit" name="kategorikerjasamastrategisedit">
                                                                        <option value="komunikasi">Komunikasi</option>
                                                                        <option value="listrik">Listrik</option>
                                                                        <option value="transportasi terbatas pelabuhan">Transportasi Terbatas Pelabuhan</option>
                                                                        <option value="transportasi terbatas jalan">Transportasi Tebatas Jalan</option>
                                                                        <option value="mitigasi bencana">Mitigasi Bencana</option>
                                                                        <option value="hankam">Hankam</option>
                                                                        <option value="migas">Migas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Tower (Komunikasi)</label>
                                                                    <input class="form-control" type="text" id="jumlahtowerkomunikasiedit" name="jumlahtowerkomunikasiedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Tower (Listrik)</label>
                                                                    <input class="form-control" type="text" id="jumlahtowerlistrikedit" name="jumlahtowerlistrikedit">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Luar Area</label>
                                                                    <input class="form-control" type="text" id="luarareaedit" name="luarareaedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Panjang Jalan</label>
                                                                    <input class="form-control" type="text" id="panjangjalanedit" name="panjangjalanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keterangan (jika mitigasi bencana)</label>
                                                                    <input class="form-control" type="text" id="keteranganmitigasibencanaedit" name="keteranganmitigasibencanaedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas Area Militer</label>
                                                                    <input class="form-control" type="text" id="luasareamiliteredit" name="luasareamiliteredit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas Area (Jika Migas)</label>
                                                                    <input class="form-control" type="text" id="luasareamigasedit" name="luasareamigasedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Persetujuan </label>
                                                                    <input class="form-control" type="text" id="persetujuanpembangunanedit" name="persetujuanpembangunanedit">
                                                                </div>
                                                               
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label>Pertimbangan Teknis </label>
                                                                    <input class="form-control" type="text" id="pertimbanganteknisedit" name="pertimbanganteknisedit">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <h5>Jangka Waktu</h5>
                                                                    <br>
                                                                    <label>Dari</label>
                                                                    <input class="form-control" type="date" id="daripembangunanedit" name="daripembangunanedit">
                                                                    <br>
                                                                    <label>Ke</label>
                                                                    <input class="form-control" type="date" id="kepembangunanedit" name="kepembangunanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>File PKS</label>
                                                                    <input class="form-control" type="file" id="filepkspembangunanedit" name="filepkspembangunanedit">
                                                                    <input type="hidden" id="filepkspembangunanhidden">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Peta Lokasi Kerjasama</label>
                                                                    <input class="form-control" type="file" id="petalokasikerjasamapembangunanedit" name="petalokasikerjasamapembangunanedit">
                                                                    <input type="hidden" id="petalokasikerjasamapembangunanhidden">
                                                                </div>
                                                                
                                                                 <div class="form-group">
                                                                    <label>Rencana Pelaksanaan Program</label>
                                                                    <input class="form-control" type="file" id="rencanapelaksanaanprogrampembangunanedit" name="rencanapelaksanaanprogrampembangunanedit">
                                                                    <input type="hidden" id="rencanapelaksanaanprogrampembangunanhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Rencana Kerja Tahunan</label>
                                                                    <input class="form-control" type="file" id="rencanakerjatahunanpembangunanedit" name="rencanakerjatahunanpembangunanedit">
                                                                    <input type="hidden" id="rencanakerjatahunanpembangunanhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Monitoring</label>
                                                                    <input class="form-control" type="file" id="monitoringpembangunanedit" name="monitoringpembangunanedit">
                                                                    <input type="hidden" id="monitoringpembangunanhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Evaluasi</label>
                                                                    <input class="form-control" type="file" id="evaluasipembangunanedit" name="evaluasipembangunanedit">
                                                                    <input type="hidden" id="evaluasipembangunanhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Laporan Akhir</label>
                                                                    <input class="form-control" type="file" id="laporanakhirpembangunanedit" name="laporanakhirpembangunanedit">
                                                                    <input type="hidden" id="laporanakhirpembangunanhidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>UPT</label>
                                                                    <select class="form-control" id="uptpembangunanedit" name="uptpembangunanedit">
                                                                    </select>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea class="form-control" id="keteranganpembangunanedit" name="keteranganpembangunanedit"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable17" style="width:100%">
                                            <thead>
                                                <th>Judul Kerjasama</th>
                                                <th>Mitra Kerja</th>
                                                <th>Kategori Mitra</th>
                                                <th>UPT</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="potensikawasankonservarsi" class="card tab-pane fade">
                                    <div class="card-header" style="height: 55;">
                                        Potensi Kawasan Konservarsi
                                        
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal11"><i class="fa fa-plus"></i> Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal11">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Potensi Kawasan Konservarsi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Jenis Potensi Kawasan Konservarsi</label>
                                                        <input class="form-control" id="jenispotensikonservarsi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi Potensi Kawasan Konservarsi</label>
                                                        <textarea class="form-control" id="deskripsipotensikonservarsi"></textarea>
                                                        <input class="form-control" type="hidden" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataPotensiKawasanKonservarsi">Simpan</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal12">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Potensi Kawasan Konservarsi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Jenis Potensi Kawasan Konservarsi</label>
                                                        <input class="form-control" id="jenispotensikonservarsiedit">
                                                        <input type="hidden" id="idpotensi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi Potensi Kawasan Konservarsi</label>
                                                        <textarea class="form-control" id="deskripsipotensikonservarsiedit"></textarea>
                                                        <input class="form-control" type="hidden" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="UpdateDataPotensiKawasanKonservarsi">Simpan</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable7" style="width:100%">
                                            <thead>
                                                    <th>Jenis Potensi Kawasan Konservarsi</th>
                                                    <th>Deskripsi Potensi Kawasan Konservarsi</th>
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
                                        <?php if(empty($kondisikawasan)){ ?>
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
                                                                <input class="form-control" id="lintangkondisikawasan" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bujur</label>
                                                                <input class="form-control" id="bujurkondisikawasan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Letak Administrasi</label>
                                                                <textarea class="form-control" id="letakadministrasikondisikawasan"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Unit Pengelola</label>
                                                                <select class="form-control" id="unitpengelolakondisikawasan">
                                                                </select>
                                                                <input class="form-control" type="hidden" id="namakawasan"  value="<?php echo $hasil['nama_kawasan'];?>"  disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tipe Ekosistem</label>
                                                                <select class="form-control" id="tipeekosistemkondisikawasan" >
                                                                    <option value="schmidt"> Ekosistem Test 1 </option>
                                                                    <option value="ferguson"> Ekosistem Test 1 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tipe Iklim</label>
                                                                <select class="form-control" id="tipeiklimkondisikawasan">
                                                                    <option value="schmidt"> Schmidt </option>
                                                                    <option value="ferguson"> Ferguson </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Curah Hujan (MM per tahun)</label>
                                                                <input class="form-control" id="curahhujankondisikawasan" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ketinggian (m dpl)</label>
                                                                <input class="form-control" id="ketinggiankondisikawasan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Sejarah Kawasan</label>
                                                                <textarea class="form-control" id="sejarahkondisikawasan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="SaveDataKondisiKawasanKosong">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
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
                                                                <textarea class="form-control" id="letakadministrasikondisikawasan"><?php echo $kondisikawasan[0]['letak_administrasi'];?></textarea>
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
                                                    <button type="button" class="btn btn-primary" id="SaveDataKondisiKawasan">Simpan</button>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <?php };?>
                                        <?php if(empty($kondisikawasan)){?>
                                        <?php }else{?>
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
                                        <?php }; ?>
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
                                <div id="desasekitarkk" class="card tab-pane fade">
                                    <div class="card-header">
                                        Desa Sekitar KK
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal18">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal18">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Desa Sekitar KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form id="formdesasekitarkk">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Kawasan</label>
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kota / Kabupaten</label>
                                                        <select class="form-control" id="kotakabupatendesakk" name="kotakabupatendesakk">
                                                            
                                                        </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <select class="form-control" type="text" id="kecamatandesakk" name="kecamatandesakk">
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Desa</label>
                                                            <input class="form-control" type="text" id="desakk" name="desakk" >
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal19">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Desa Sekitar KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formdesasekitarkkedit">
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled >
                                                        <input type="hidden" id="iddesakk">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kota / Kabupaten</label>
                                                        <select class="form-control" id="kotakabupatendesakkedit">
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kecamatan</label>
                                                        <select class="form-control" type="text" id="kecamatandesakkedit" >
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Desa</label>
                                                        <input class="form-control" type="text" id="desakkedit" >
                                                    </div>
                                                        
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <table class="table" id="tablekk" style="width:100%">
                                            <thead>
                                                <th>Kota Atau Kabupaten</th>
                                                <th>Kecamatan</th>
                                                <th>Desa</th>
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
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal15">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal15">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Indikasi Tora </h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formindikasitora">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                               <h5>Basic Info</h5>
                                                                <div class="form-group">
                                                                    <label>Luas(HA)</label>
                                                                    <input type="number" class="form-control" id="luasindikasitora" name="luasindikasitora">
                                                                </div>
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                <div class="form-group">
                                                                    <label>Luas Kawasan(HA)</label>
                                                                    <input type="number" class="form-control" id="luaskawasanindikasitora" name="luaskawasanindikasitora">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Peta (JPEG)</label>
                                                                    <input type="file" class="form-control" id="petaindikasitora" name="petaindikasitora">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK Keseluruhan</h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskindikasitora" name="judulskindikasitora">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskindikasitora" name="nomorskindikasitora">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskindikasitora" name="tanggalskindikasitora">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskindikasitora" name="dokumenskindikasitora">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal16">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Indikasi Tora</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formindikasitoraedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Basic Info</h5>
                                                               
                                                                <div class="form-group">
                                                                    <label>Luas(HA)</label>
                                                                    <input type="number" class="form-control" id="luasindikasitoraedit" name="luasindikasitoraedit">
                                                                    <input type="hidden" id="idindikasitora">
                                                                </div>
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                <div class="form-group">
                                                                    <label>Luas Kawasan(HA)</label>
                                                                    <input type="number" class="form-control" id="luaskawasanindikasitoraedit" name="luaskawasanindikasitoraedit">
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label>Peta (JPEG)</label>
                                                                    <input type="file" class="form-control" id="petaindikasitoraedit" name="petaindikasitoraedit">
                                                                    <input type="hidden" id="petaindikasitorahidden">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK Keseluruhan</h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskindikasitoraedit" name="judulskindikasitoraedit">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskindikasitoraedit" name="nomorskindikasitoraedit">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskindikasitoraedit" name="tanggalskindikasitoraedit">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskindikasitoraedit" name="dokumenskindikasitoraedit">
                                                                    <br>
                                                                    <input type="hidden" id="dokumenskindikasitorahidden">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" >Simpan</button>
                                                    </div>
                                                </form>
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
                                <div id="permasalahankk" class="card tab-pane fade">
                                    <div class="card-header">
                                        Permasalahan Pengelolaan KK
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal20">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal20">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Permasalahan Pengelolaan KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form id='formpermasalahanpengelolaan'>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Data Kawasan Konservasi</h5>
                                                                <div class="form-group">
                                                                    <label>Unit Pengelola</label>
                                                                    <select class="form-control" id="unitpengelolapermasalahan" name="unitpengelolapermasalahan">
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Permasalahan</label>
                                                                    <select class="form-control" id="kategoripermasalahan" name="kategoripermasalahan">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama Kawasan</label>
                                                                    <input type="text" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lainnya</label>
                                                                    <input type="text" class="form-control" id="lainnyapermasalahan" name="lainnyapermasalahan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea type="text" class="form-control" id="Keteranganpermasalahan" name="Keteranganpermasalahan"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>Permasalahan Kawasan Konservasi</h5>
                                                                <div class="form-group">
                                                                    <label>No Surat</label>
                                                                    <input class="form-control" id="nomorsurat" name="nomorsurat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas Permasalahan (Ha)</label>
                                                                    <input type="text" class="form-control" id="luaspermasalahan" name="luaspermasalahan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal</label>
                                                                    <input type="date" class="form-control" id="tanggalpermasalahan" name="tanggalpermasalahan">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Upaya Permasalahan</label>
                                                                    <textarea type="text" class="form-control" id="upayapermasalahan" name="luaspermasalahan"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal23">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Permasalahan KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                 <form id='formpermasalahanpengelolaanedit'>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Data Kawasan Konservasi</h5>
                                                                <div class="form-group">
                                                                    <label>Unit Pengelola</label>
                                                                    <select class="form-control" id="unitpengelolapermasalahanedit" name="unitpengelolapermasalahanedit">
                                                                    </select>
                                                                    <input type="hidden" id="idpermasalahankk">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kategori Permasalahan</label>
                                                                    <select class="form-control" id="kategoripermasalahanedit" name="kategoripermasalahanedit">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama Kawasan</label>
                                                                    <input type="text" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lainnya</label>
                                                                    <input type="text" class="form-control" id="lainnyapermasalahanedit" name="lainnyapermasalahanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keterangan</label>
                                                                    <textarea type="text" class="form-control" id="Keteranganpermasalahanedit" name="Keteranganpermasalahanedit"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>Permasalahan Kawasan Konservasi</h5>
                                                                <div class="form-group">
                                                                    <label>No Surat</label>
                                                                    <input class="form-control" id="nomorsuratedit" name="nomorsuratedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas Permasalahan (Ha)</label>
                                                                    <input type="text" class="form-control" id="luaspermasalahanedit" name="luaspermasalahanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal</label>
                                                                    <input type="date" class="form-control" id="tanggalpermasalahanedit" name="tanggalpermasalahanedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Upaya Permasalahan</label>
                                                                    <textarea type="text" class="form-control" id="upayapermasalahanedit" name="upayapermasalahanedit"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable10" style="width:100%">
                                            <thead>
                                                <th>Nama Pengelola</th>
                                                <th>Kategori Permasalahan</th>
                                                <th>Lainnya</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="wilayahadat" class="card tab-pane fade">
                                    <div class="card-header">
                                        Wilayah Adat
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal32">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal32">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input wilayah Adat</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formwilayahadat">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                    <h5>Basic Info</h5>
                                                                <div class="form-group">
                                                                    <label>Nama Wilayah Adat</label>
                                                                    <input type="text" class="form-control" id="namawilayahadat" name="namawilayahadat">
                                                                    <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas</label>
                                                                    <input type="text" class="form-control" id="luaswilayahadat" name="luaswilayahadat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Kepala Keluarga</label>
                                                                    <input type="text" class="form-control" id="kepalakeluargaadat" name="kepalakeluargaadat">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK</h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskwilayahadat" name="judulskwilayahadat">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskwilayahadat" name="nomorskwilayahadat">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskwilayahadat" name="tanggalskwilayahadat">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskwilayahadat" name="dokumenskwilayahadat">
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal21">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Wilayah Adat</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formwilayahadatedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                    <h5>Basic Info</h5>
                                                                <div class="form-group">
                                                                    <label>Nama Wilayah Adat</label>
                                                                    <input type="text" class="form-control" id="namawilayahadatedit">
                                                                    <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                                    <input type="hidden" id="idwilayahadat">
                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas</label>
                                                                    <input type="text" class="form-control" id="luaswilayahadatedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Kepala Keluarga</label>
                                                                    <input type="text" class="form-control" id="kepalakeluargaadatedit">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK</h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskwilayahadatedit">
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskwilayahadatedit">
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskwilayahadatedit">
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskwilayahadatedit">
                                                                    <input type="hidden" id="dokumenskhidden">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <table class="table" id="tablewilayahadat" style="width:100%">
                                            <thead>
                                                <th>Nama Wilayah Adat</th>
                                                <th>Luas</th>
                                                <th>Jumlah Kepala Keluarga</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="sosekbud" class="card tab-pane fade">
                                    <div class="card-header">
                                        Sosekbud
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal24">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal24">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Sosekbud</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formsosekbud">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Sosial Budaya Ekonomi</label>
                                                            <textarea type="text" class="form-control" id="sosialbudaya" name="sosialbudaya"></textarea>
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Demografi Desa</label>
                                                            <textarea type="text" class="form-control" id="demografidesa" name="demografidesa"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Sejarah Pemukiman Dalam Kawasan</label>
                                                            <textarea type="text" class="form-control" id="sejarahpemukiman" name="sejarahpemukiman"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ketergantungan Sumber Daya Alam</label>
                                                            <textarea type="text" class="form-control" id="sumberdayaalam" name="sumberdayaalam"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal25">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Sosekbud</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formsosekbudedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Sosial Budaya Ekonomi</label>
                                                            <textarea type="text" class="form-control" id="sosialbudayaedit" name="sosialbudayaedit"></textarea>
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                            <input type="hidden" name="idsosekbud" id="idsosekbud">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Demografi Desa</label>
                                                            <textarea type="text" class="form-control" id="demografidesaedit" name="demografidesaedit"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Sejarah Pemukiman Dalam Kawasan</label>
                                                            <textarea type="text" class="form-control" id="sejarahpemukimanedit" name="sejarahpemukimanedit"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ketergantungan Sumber Daya Alam</label>
                                                            <textarea type="text" class="form-control" id="sumberdayaalamedit" name="sumberdayaalamedit"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable11" style="width:100%">
                                            <thead>
                                                <th>Sosial Budaya Ekonomi</th>
                                                <th>Demografi Desa</th>
                                                <th>Sejarah Pemukiman dalam Kawasan</th>
                                                <th>Ketergantungan Sumber daya alam</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                 <div id="penutupanlahanperkawasan" class="card tab-pane fade">
                                    <div class="card-header">
                                        Penutupan Lahan Per Kawasan
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal26">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal26">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Penutupan Lahan Per kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formpenutupankawasan">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>File Table</label>
                                                            <input type="file" class="form-control" id="filetablekawasan" name="filetablekawasan">
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File SHP</label>
                                                            <input type="file" class="form-control" id="fileshpkawasan" name="fileshpkawasan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File JPEG</label>
                                                            <input type="file" class="form-control" id="filejpegkawasan" name="filejpegkawasan">
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal27">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Penutupan Lahan Per Kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formpenutupankawasanedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                         <div class="form-group">
                                                            <label>File Table</label>
                                                            <input type="file" class="form-control" id="filetablekawasanedit" name="filetablekawasanedit">
                                                            <input type="hidden" id="filetablekawasanhidden">
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File SHP</label>
                                                            <input type="file" class="form-control" id="fileshpkawasanedit" name="fileshpkawasanedit">
                                                            <input type="hidden" id="fileshpkawasanhidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File JPEG</label>
                                                            <input type="file" class="form-control" id="filejpegkawasanedit" name="filejpegkawasanedit">
                                                            <input type="hidden" id="filejpegkawasanhidden">
                                                            <input type="hidden" id="idpenutupankawasan">
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable13" style="width:100%">
                                            <thead>
                                                <th>File SHP</th>
                                                <th>File Table</th>
                                                <th>File Jpeg</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                 <div id="kemitraankonservasi" class="card tab-pane fade">
                                    <div class="card-header">
                                        Kemitraan Kawasan Konservasi
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal30">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal30">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Kemitraan Kawasan Konservasi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formkemitraankonservasi">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nomor PKS</label>
                                                            <input type="text" class="form-control" id="nomorpks" name="nomorpks">
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta PKS JPEG</label>
                                                            <input type="file" class="form-control" id="petapks" name="petapks">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas PKS</label>
                                                            <input type="text" class="form-control" id="luaspks" name="luaspks">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Kelompok</label>
                                                            <input type="text" class="form-control" id="namakelompok" name="namakelompok">
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal31">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Kemitraan Konservasi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formkemitraankonservasiedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nomor PKS</label>
                                                            <input type="text" class="form-control" id="nomorpksedit" name="nomorpksedit">
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                            <input type="hidden" id="idkemitraankonservasi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta PKS JPEG</label>
                                                            <input type="file" class="form-control" id="petapksedit" name="petapksedit">
                                                            <input type="hidden" id="petapkshidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas PKS</label>
                                                            <input type="text" class="form-control" id="luaspksedit" name="luaspksedit">
                                                        </div>
                                                         <div class="form-group">
                                                            <label>Nama Kelompok</label>
                                                            <input type="text" class="form-control" id="namakelompokedit" name="namakelompokedit">
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable15" style="width:100%">
                                            <thead>
                                                <th>Nomor PKS</th>
                                                <th>Luas PKS</th>
                                                <th>Peta PKS</th>
                                                <th>Action</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div id="openareaperkawasan" class="card tab-pane fade">
                                    <div class="card-header">
                                        Open Area Per Kawasan
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal28">Tambah Data</button>
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal28">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Open Area Per kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formopenkawasan">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>File Table</label>
                                                            <input type="file" class="form-control" id="filetableopenkawasan" name="filetableopenkawasan">
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File SHP</label>
                                                            <input type="file" class="form-control" id="fileshpopenkawasan" name="fileshpopenkawasan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File JPEG</label>
                                                            <input type="file" class="form-control" id="filejpegopenkawasan" name="filejpegopenkawasan">
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="myModal29">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Open Area Per Kawasan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formopenkawasanedit">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                         <div class="form-group">
                                                            <label>File Table</label>
                                                            <input type="file" class="form-control" id="filetableopenkawasanedit" name="filetableopenkawasanedit">
                                                            <input type="hidden" id="filetableopenkawasanhidden">
                                                            <input class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" type="hidden" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File SHP</label>
                                                            <input type="file" class="form-control" id="fileshpopenkawasanedit" name="fileshpopenkawasanedit">
                                                            <input type="hidden" id="fileshpopenkawasanhidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File JPEG</label>
                                                            <input type="file" class="form-control" id="filejpegopenkawasanedit" name="filejpegopenkawasanedit">
                                                            <input type="hidden" id="filejpegopenkawasanhidden">
                                                            <input type="hidden" id="idopenkawasan">
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="myTable14" style="width:100%">
                                            <thead>
                                                <th>File SHP</th>
                                                <th>File Table</th>
                                                <th>File Jpeg</th>
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
                                        <br>
                                        <br>
                                        <div class="modal fade" id="myModal9">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Input Hutan Adat Dalam KK</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form id="formhutanadatdalamkk">
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Basic Info</h5>
                                                                <div class="form-group">
                                                                    <label>Nama Adat</label>
                                                                    <input type="text" class="form-control" id="namaadat" name="namaadat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas</label>
                                                                    <input type="number" class="form-control" id="luashutanadat" name="luashutanadat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Provinsi</label>
                                                                    <input type="text" class="form-control" id="provinsihutanadat" name="provinsihutanadat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kabpaten Kota</label>
                                                                    <input type="text" class="form-control" id="kabupatenkotahutanadat" name="kabupatenkotahutanadat">
                                                                </div>
                                                               
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK</h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskhutanadat" name="judulskhutanadat">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskhutanadat" name="nomorskhutanadat">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskhutanadat" name="tanggalskhutanadat">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskhutanadat" name=""dokumenskhutanadat>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                                                <form id="formhutanadatdalamkkedit">
                                                <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Basic Info</h5>
                                                                <div class="form-group">
                                                                    <label>Nama Adat</label>
                                                                    <input type="text" class="form-control" id="namaadatedit" name="namaadatedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Luas</label>
                                                                    <input type="number" class="form-control" id="luashutanadatedit" name="luashutanadatedit">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Provinsi</label>
                                                                    <input type="text" class="form-control" id="provinsihutanadatedit" name="provinsihutanadatedit">
                                                                    <input type="hidden" id="idhutanadat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kabpaten Kota</label>
                                                                    <input type="text" class="form-control" id="kabupatenkotahutanadatedit" name="kabupatenkotahutanadatedit">
                                                                </div>
                                                                    <input type="hidden" class="form-control" id="namakawasan" value="<?php echo $hasil['nama_kawasan'];?>" disabled>
                                                                
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <h5>SK</h5>
                                                                    <label>Judul SK</label>
                                                                    <input class="form-control" type="text" id="judulskhutanadatedit" name="judulskhutanadatedit">
                                                                    <br>
                                                                    <label>Nomor SK</label>
                                                                    <input class="form-control" type="text" id="nomorskhutanadatedit" name="nomorskhutanadatedit">
                                                                    <br>
                                                                    <label>Tanggal SK</label>
                                                                    <input class="form-control" type="date" id="tanggalskhutanadatedit" name="tanggalskhutanadatedit">
                                                                    <br>
                                                                    <label>Dokumen SK</label>
                                                                    <input class="form-control" type="file" id="dokumenskhutanadatedit" name="dokumenskhutanadatedit">
                                                                    <input type="hidden" id="dokumenskhutanadathidden">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
                    })
           
        }
        function myfunc1(id){
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
                    })
           
        }
        function myfunc2(id){
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
                    })
            
        }
        function myfunc3(id){
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
                    })
           
        }
        function myfunc4(id){
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
                    })
            
        }
        function myfunc5(id){
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
                                url:'/deleteDataPotensiKawasanKonservarsi/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table5.ajax.reload();
                                }
                            })
                        }
                    })
            
        }
        function myfunc6(id){
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
                                url:'/deleteDataKeanekaragamHayati/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table6.ajax.reload();
                                }
                            })
                        }
                    })
            
        }
        function myfunc10(id){
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
                                url:'/deleteDataDesaKK/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            tablekk.ajax.reload();
                                }
                            })
                        }
                    })
            
        }
        function myfunc11(id){
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
                                url:'/deleteDataWilayahAdat/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            tablewilayahadat.ajax.reload();
                                }
                            })
                        }
                    })
            
        }
        function myfunc12(id){
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
                                url:'/deleteDataPermasalahanKK/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table10.ajax.reload();
                                }
                            })

                        }
                    })
        }
        function myfunc13(id){
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
                                url:'/deleteDataSosekbud/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table11.ajax.reload();
                                }
                            })

                        }
                    })
        }
        function myfunc14(id){
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
                                url:'/deleteDataKawasan/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table13.ajax.reload();
                                }
                            })

                        }
                    })
        }
        function myfunc15(id){
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
                                url:'/deleteDataOpenKawasan/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table14.ajax.reload();
                                }
                            })

                        }
                    })
        }
        function myfunc16(id){
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
                                url:'/deleteDataKemitraanKonservasi/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table15.ajax.reload();
                                }
                            })

                        }
                    })
        }
        function myfunc17(id){
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
                                url:'/deleteDataPenguatanKK/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table16.ajax.reload();
                                }
                            })

                        }
                    })
        }
         function myfunc18(id){
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
                                url:'/deleteDataPembangunanStrategis/'+id,
                                type:'GET',
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di hapus!',
                                                'success'
                                            )
                                            table17.ajax.reload();
                                }
                            })

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
        function editfunc5(id){
            $.ajax({
                url:'/showDataPotensiKawasanKonservarsi/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpotensi' ).val(hasil.id);
                    $( '#jenispotensikonservarsiedit' ).val(hasil.jenis_potensi);
                    $( '#deskripsipotensikonservarsiedit' ).val(hasil.deskripsi_potensi);
                }
            })
        }
        function editfunc6(id){
            $.ajax({
                url:'/showDataKeanekaragamHayati/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idkeanekaragamhayati' ).val(hasil.id);
                    $( '#namahayatiedit' ).val(hasil.nama);
                    $( '#namalatinhayatiedit' ).val(hasil.nama_latin);
                    $( '#jenishayatiedit' ).val(hasil.jenis);
                    $( '#deskripsihayatiedit' ).val(hasil.deskripsi);
                }
            })
        }
        function editfunc10(id){
            $.ajax({
                url:'/showDataDesaKK/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#iddesakk' ).val(hasil.id);
                    $( '#kabupatenkotadesakkedit' ).val(hasil.kabupaten_kota);
                    $( '#kecamatandesakkedit' ).val(hasil.kecamatan);
                    $( '#desakkedit' ).val(hasil.desa);
                }
            })
        }
        function editfunc11(id){
            $.ajax({
                url:'/showDataWilayahAdat/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idwilayahadat' ).val(hasil.id);
                    $( '#namawilayahadatedit' ).val(hasil.nama_wilayah_adat);
                    $( '#luaswilayahadatedit' ).val(hasil.luas);
                    $( '#kepalakeluargaadatedit' ).val(hasil.jumlah_kepala_keluarga);
                    $( '#nomorskwilayahadatedit' ).val(hasil.nomor_sk);
                    $( '#judulskwilayahadatedit' ).val(hasil.judul_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                    $( '#dokumenskhidden' ).val(hasil.dokumen_sk);
                }
            })
        }
        function editfunc12(id){
             $.ajax({
                url:'/showDataPermasalahanKK/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpermasalahankk' ).val(hasil.id);
                    $( '#upayapermasalahanedit' ).val(hasil.upaya);
                    $( '#kategoripermasalahanedit' ).val(hasil.kategori_permasalahan);
                    $( '#lainnyapermasalahanedit' ).val(hasil.lainnya);
                    $( '#Keteranganpermasalahanedit' ).val(hasil.keterangan);
                    $( '#nomorsuratedit' ).val(hasil.no_surat);
                    $( '#luaspermasalahanedit' ).val(hasil.luas_permasalahan);
                    $( '#tanggalpermasalahanedit' ).val(hasil.tanggal);
                    $( '#upayapermasalahanedit' ).val(hasil.upaya);
                }
            })
        }
        function editfunc13(id){
            $.ajax({
                url:'/showDataSosekbud/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idsosekbud' ).val(hasil.id);
                    $( '#sosialbudayaedit' ).val(hasil.sosial_budaya);
                    $( '#demografidesaedit' ).val(hasil.demografi_desa);
                    $( '#sejarahpemukimanedit' ).val(hasil.sejarah_pemukiman);
                    $( '#sumberdayaalamedit' ).val(hasil.sumber_daya_alam);
                }
            })
        }
        function editfunc14(id){
            $.ajax({
                url:'/showDataKawasan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpenutupankawasan' ).val(hasil.id);
                    $( '#fileshpkawasanhidden' ).val(hasil.file_shp);
                    $( '#filetablekawasanhidden' ).val(hasil.file_table);
                    $( '#filejpegkawasanhidden' ).val(hasil.file_jpeg);
                }
            })
        }
        function editfunc15(id){
            $.ajax({
                url:'/showDataOpenKawasan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idopenkawasan' ).val(hasil.id);
                    $( '#fileshpopenkawasanhidden' ).val(hasil.file_shp);
                    $( '#filetableopenkawasanhidden' ).val(hasil.file_table);
                    $( '#filejpegopenkawasanhidden' ).val(hasil.file_jpeg);
                }
            })
        }
        function editfunc16(id){
            $.ajax({
                url:'/showDataKemitraanKonservasi/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idkemitraankonservasi' ).val(hasil.id);
                    $( '#nomorpksedit' ).val(hasil.no_pks);
                    $( '#namakelompokedit' ).val(hasil.nama_kelompok);
                    $( '#petapkshidden' ).val(hasil.peta_pks);
                    $( '#luaspksedit' ).val(hasil.luas_pks);
                }
            })
        }
        function editfunc17(id){
            $.ajax({
                url:'/showDataPenguatanKK/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpenguatanfungsikk' ).val(hasil.id);
                    $( '#judulkerjasamaedit' ).val(hasil.judul_kerjasama);
                    $( '#mitrakerjaedit' ).val(hasil.mitra_kerja);
                    $( '#kategorimitraedit' ).val(hasil.kategori_mitra);
                    $( '#persetujuanedit' ).val(hasil.persetujuan);
                    $( '#notakesepahamanedit' ).val(hasil.nota_kesepahaman);
                    $( '#perjanjiankerjasamaedit' ).val(hasil.perjanjian_kerjasama);
                    $( '#daripenguatanedit' ).val(hasil.dari);
                    $( '#kepenguatanedit' ).val(hasil.ke);
                    $( '#filepkshidden' ).val(hasil.file_pks);
                    $( '#petalokasikerjasamahidden' ).val(hasil.peta_lokasi_kerjasama);
                    $('#keteranganpenguatanedit').val(hasil.keterangan);
                    $( '#rencanapelaksanaanprogramhidden' ).val(hasil.rencana_pelaksanaan_program);
                    $( '#monitoringhidden' ).val(hasil.monitoring);
                    $( '#evaluasihidden' ).val(hasil.evaluasi);
                    $( '#laporanakhirhidden' ).val(hasil.laporan_akhir);
                    $( '#hibahedit' ).val(hasil.hibah);
                    $( '#jumlahhibahedit' ).val(hasil.jumlah_hibah);
                    $( '#uptpenguatanfungsiedit' ).val(hasil.upt);
                }
            })
        }
         function editfunc18(id){
            $.ajax({
                url:'/showDataPembangunanStrategis/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpembangunanstrategis' ).val(hasil.id);
                    $( '#judulkerjasamapembangunanedit' ).val(hasil.judul_kerjasama);
                    $( '#mitrakerjapembangunanedit' ).val(hasil.mitra_kerja);
                    $( '#kategorimitrapembangunanedit' ).val(hasil.kategori_mitra);
                    $( '#persetujuanpembangunanedit' ).val(hasil.persetujuan);
                    $( '#kategorikerjasamastrategisedit' ).val(hasil.kategori_kerjasama_strategis);
                    $( '#jumlahtowerkomunikasiedit' ).val(hasil.jumlah_tower_komunikasi);
                    $( '#jumlahtowerlistrikedit' ).val(hasil.jumlah_tower_listrik);
                    $( '#luasareamiliteredit' ).val(hasil.luas_area_militer);
                    $( '#luasareamigasedit' ).val(hasil.luas_area_migas);
                    $( '#panjangjalanedit' ).val(hasil.panjang_jalan);
                    $( '#keteranganmitigasibencanaedit' ).val(hasil.keterangan_mitigasi_bencana);
                    $( '#pertimbanganteknisedit' ).val(hasil.pertimbangan_teknis);
                    $( '#luarareaedit' ).val(hasil.luar_area);

                    $( '#daripembangunanedit' ).val(hasil.dari);
                    $( '#kepembangunanedit' ).val(hasil.ke);
                    $( '#filepkspembangunanhidden' ).val(hasil.file_pks);
                    $( '#petalokasikerjasamapembangunanhidden' ).val(hasil.peta_lokasi_kerjasama);
                    $( '#keteranganpembangunanedit').val(hasil.keterangan);
                    $( '#rencanapelaksanaanprogrampembangunanhidden' ).val(hasil.rencana_pelaksanaan_program);
                    $( '#monitoringpembangunanhidden' ).val(hasil.monitoring);
                    $( '#evaluasipembangunanhidden' ).val(hasil.evaluasi);
                    $( '#laporanakhirpembangunanhidden' ).val(hasil.laporan_akhir);
                    $( '#uptpembangunanedit' ).val(hasil.upt);
                }
            })
        }
        var table =  $('#myTable1').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
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
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
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
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
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
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
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
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal16'onclick='editfunc3("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc3("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
            var table4 =  $('#myTable5').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
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
            var table5 =  $('#myTable7').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                        deferRender: true,
                        ajax: {
                            url: "/getDataPotensiKawasanKonservarsi/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'jenis_potensi' },
                            { data: 'deskripsi_potensi' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal12'onclick='editfunc5("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc5("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
             // Kenakaragaman hayati table       
            var table6 =  $('#myTable8').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table61 =  $('#myTable81').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati1/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    
                    var table62 =  $('#myTable82').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati2/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table63 =  $('#myTable83').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati3/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table64 =  $('#myTable84').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati4/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table65 =  $('#myTable85').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati5/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table66 =  $('#myTable86').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati6/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table67 =  $('#myTable87').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati7/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table68 =  $('#myTable88').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati8/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                     var table69 =  $('#myTable89').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati9/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    }); var table610 =  $('#myTable810').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati10/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table611 =  $('#myTable811').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataKeanekaragamHayati11/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama' },
                            { data: 'nama_latin' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal14' onclick='editfunc6("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc6("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
              
                    //------Keaneka ragaman hayati END --//
                    var tablekk =  $('#tablekk').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                        deferRender: true,
                        ajax: {
                            url: "/getDataDesaKK/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'kota_kabupaten' },
                            { data: 'kecamatan' },
                            { data: 'desa' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal19'onclick='editfunc10("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc10("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    //-------------------------------Wilayah Adat ---------------------//
                    var tablewilayahadat =  $('#tablewilayahadat').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                        deferRender: true,
                        ajax: {
                            url: "/getDataWilayahAdat/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_wilayah_adat' },
                            { data: 'luas' },
                            { data: 'jumlah_kepala_keluarga' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal21'onclick='editfunc11("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc11("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    //-------------------------------END---------------------------------//
                    //-------------------------------PERMASALAHAN KK--------------------//
                    var table10 = $('#myTable10').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                        deferRender: true,
                        ajax: {
                            url: "/getDataPermasalahanKK/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'unit_pengelolaan_kawasan.nama_pengelola' },
                            { data: 'kategori_permasalahan' },
                            { data: 'lainnya' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal23'onclick='editfunc12("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc12("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    //-------------------------------END------------------------------//
                      var table11 = $('#myTable11').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                         responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for sosekbud';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataSosekbud/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'sosial_budaya' },
                            { data: 'demografi_desa' },
                            { data: 'sejarah_pemukiman' },
                            { data: 'sumber_daya_alam' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal25'onclick='editfunc13("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc13("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table13 = $('#myTable13').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                         responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for sosekbud';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataKawasan/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                             {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file_shp+"' download target='_blank'>Download</a>";
                                }
                            },
                             {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file_table+"' download target='_blank'>Download</a>";
                                }
                            },
                            {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file_jpeg+"' target='_blank'>Download</a>";
                                }
                            },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal27'onclick='editfunc14("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc14("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table14 = $('#myTable14').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                         responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for Data Open Kawasan';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataOpenKawasan/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                             {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file_shp+"' download target='_blank'>Download</a>";
                                }
                            },
                             {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file_jpeg+"' download target='_blank'>Download</a>";
                                }
                            },
                            {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file_table+"' target='_blank'>Download</a>";
                                }
                            },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal29'onclick='editfunc15("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc15("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                     var table15 = $('#myTable15').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                         responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for Kemitraan konservarsi';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataKemitraanKonservasi/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'no_pks' },
                            { data: 'luas_pks' },
                            {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.peta_pks+"' target='_blank'>View Peta PKS</a>";
                                }
                            },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal31'onclick='editfunc16("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc16("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                     var table16 = $('#myTable16').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                         responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for Penguatan Fungsi KK';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataPenguatanKK/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'judul_kerjasama' },
                            { data: 'mitra_kerja' },
                            { data: 'kategori_mitra' },
                            { data: 'upt' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal35'onclick='editfunc17("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc17("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                     var table17 = $('#myTable17').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf'
                        ],
                         responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for Pembangunan Strategis';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataPembangunanStrategis/"+"<?php echo $hasil['nama_kawasan'];?>",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'judul_kerjasama' },
                            { data: 'mitra_kerja' },
                            { data: 'kategori_mitra' },
                            { data: 'upt' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#myModal37'onclick='editfunc18("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc18("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('[href="#home"]').tab('show');
           //$('#home a:first').tab('show')
            table61.columns.adjust().draw();
                $.ajax({
                    type:'GET',
                    url:'/getDataMasterProvinsikabupaten',
                    dataType:'json',
                    success:function(data){
                        var html;
                        data.forEach(element => {
                            html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                            $("#kotakabupatendesakk").append(html);
                            $("#kotakabupatendesakkedit").append(html);
                        });
                    }
                })
                $.ajax({
                    type:'GET',
                    url:'/getDataMasterProvinsikecamatan',
                    dataType:'json',
                    success:function(data){
                        var html;
                        data.forEach(element => {
                            html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                            $("#kecamatandesakk").append(html);
                            $("#kecamatandesakkedit").append(html);
                        });
                    }
                })
                $.ajax({
                    type:'GET',
                    url:'/getUnitPengelolaanKawasan',
                    dataType:'json',
                    success:function(data){
                        var html;
                        data.forEach(element => {
                            html = "<option value='"+element.nama_pengelola+"'>"+element.nama_pengelola+"</option>";
                            $("#upt").append(html);
                            $("#uptedit").append(html);
                            $("#uptevaluasifungsideskstudyedit").append(html);
                            $("#uptevaluasifungsiekflapangan").append(html);
                            $("#uptevaluasifungsiekflapanganedit").append(html);
                            $("#uptevaluasifungsideskstudy").append(html);
                            $("#uptpenguatanfungsiedit").append(html);
                            $("#uptpembangunan").append(html);
                            $("#uptpembangunanedit").append(html);
                            $("#uptpenguatanfungsi").append(html);
                        });
                    }
                })
                $.ajax({
                    type:'GET',
                    url:'/getUnitPengelolaanKawasan',
                    dataType:'json',
                    success:function(data){
                        var html;
                        data.forEach(element => {
                            html = "<option value='"+element.id+"'>"+element.nama_pengelola+"</option>";
                            $("#unitpengelolapermasalahan").append(html);
                            $("#unitpengelolapermasalahanedit").append(html);
                        });
                    }
                })
                $('form[id="formpembangunanstrategisedit"]').validate({
                    rules: {
                        judulkerjasamapembangunanedit: 'required',
                        mitrakerjapembangunanedit: 'required',
                        kategorimitrapembangunanedit: 'required',
                        kategorikerjasamastrategisedit: 'required',
                        jumlahtowerkomunikasiedit:{
                            number:true
                        },
                        jumlahtowerlistrikedit:{
                            number:true
                        },
                        luarareaedit:{
                            number:true
                        },
                        panjangjalanedit:{
                            number:true
                        },
                        keteranganmitigasibencanaedit: 'required',
                        luasareamiliteredit:{
                            number:true
                        },
                        luasareamigasedit:{
                            number:true
                        },
                        persetujuanpembangunanedit: 'required',
                        pertimbanganteknisedit: 'required',
                        daripembangunanedit: 'required',
                        kepembangunanedit: 'required',
                        keteranganpembangunanedit: 'required',
                        uptpembangunanedit: 'required',
                        namakawasan:{
                            required:true,
                        }
                        // filejpegopenkawasanedit:{
                        //     required:true,
                        //     accept: "image/*"
                        // },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var file = $('#filepkspembangunanedit')[0].files[0];
                        if(file == undefined){
                            var data;
                            data = new FormData();
                            data.append('judulkerjasama', $('#judulkerjasamapembangunanedit').val());
                            data.append('mitrakerja',$('#mitrakerjapembangunanedit').val());
                            data.append('kategorimitra', $('#kategorimitrapembangunanedit').val());
                            data.append('persetujuan', $('#persetujuanpembangunanedit').val());
                            data.append('kategorikerjasamastrategis', $('#kategorikerjasamastrategisedit').val());
                            data.append('jumlahtowerkomunikasi', $('#jumlahtowerkomunikasiedit').val());
                            data.append('jumlahtowerlistrik', $('#jumlahtowerlistrikedit').val());
                            data.append('luararea', $('#luarareaedit').val());
                            data.append('panjangjalan', $('#panjangjalanedit').val());
                            data.append('keteranganmitigasibencana', $('#keteranganmitigasibencanaedit').val());
                            data.append('luasareamiliter', $('#luasareamiliteredit').val());
                            data.append('luasareamigas', $('#luasareamigasedit').val());
                            data.append('pertimbanganteknis', $('#pertimbanganteknisedit').val());
                            data.append('daripembangunan', $('#daripembangunanedit').val());
                            data.append('kepembangunan', $('#kepembangunanedit').val());
                            data.append('filepks', $('#filepkspembangunanhidden').val());
                            data.append('petalokasikerjasama', $('#petalokasikerjasamapembangunanhidden').val());
                            data.append('keteranganpenguatan', $('#keteranganpembangunanedit').val());
                            data.append('rencanapelaksanaanprogram', $('#rencanapelaksanaanprogrampembangunanhidden').val());
                            data.append('rencanakerjatahunan', $('#rencanakerjatahunanpembangunanhidden').val());
                            data.append('monitoring', $('#monitoringpembangunanhidden').val());
                            data.append('evaluasi', $('#evaluasipembangunanhidden').val());
                            data.append('laporanakhir', $('#laporanakhirpembangunanhidden').val());
                            data.append('uptpembangunan', $('#uptpembangunanedit').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('status','filenotfound');
                            data.append('idpembangunanstrategis',$('#idpembangunanstrategis').val());
                            $.ajax({
                                url:'/ubahDataPembangunanStrategis',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#judulkerjasamapembangunanedit' ).val('')
                                                $( '#mitrakerjapembangunanedit' ).val('')
                                                $( '#kategorikerjasamastrategisedit' ).val('')
                                                $( '#jumlahtowerkomunikasiedit' ).val('')
                                                $( '#persetujuanpembangunanedit' ).val('')
                                                $( '#jumlahtowerlistrikedit' ).val('')
                                                $( '#luarareaedit' ).val('')
                                                $( '#panjangjalanedit' ).val('')
                                                $( '#keteranganmitigasibencanaedit' ).val('')
                                                $( '#luasareamiliteredit' ).val('')
                                                $( '#luasareamigasedit' ).val('')
                                                $( '#pertimbanganteknisedit' ).val('')
                                                $( '#daripembangunanedit' ).val('')
                                                $( '#kepembangunanedit' ).val('')
                                                $( '#filepkspembangunanedit' ).val('')
                                                $( '#petalokasikerjasamapembangunanedit' ).val('')
                                                $( '#keteranganpembangunanedit' ).val('')
                                                $( '#rencanapelaksanaanprogrampembangunanedit' ).val('')
                                                $( '#rencanakerjatahunanpembangunanedit' ).val('')
                                                $( '#monitoringpembangunanedit' ).val('')
                                                $( '#evaluasipembangunanedit' ).val('')
                                                $( '#laporanakhirpembangunanedit' ).val('')
                                                $('#myModal37').modal('toggle')
                                            })
                                            table17.ajax.reload();
                                }
                            })
                        }else{
                            var data;
                            data = new FormData();
                            data.append('judulkerjasama', $('#judulkerjasamapembangunanedit').val());
                            data.append('mitrakerja',$('#mitrakerjapembangunanedit').val());
                            data.append('kategorimitra', $('#kategorimitrapembangunanedit').val());
                            data.append('persetujuan', $('#persetujuanpembangunanedit').val());
                            data.append('kategorikerjasamastrategis', $('#kategorikerjasamastrategisedit').val());
                            data.append('jumlahtowerkomunikasi', $('#jumlahtowerkomunikasiedit').val());
                            data.append('jumlahtowerlistrik', $('#jumlahtowerlistrikedit').val());
                            data.append('luararea', $('#luarareaedit').val());
                            data.append('panjangjalan', $('#panjangjalanedit').val());
                            data.append('keteranganmitigasibencana', $('#keteranganmitigasibencanaedit').val());
                            data.append('luasareamiliter', $('#luasareamiliteredit').val());
                            data.append('luasareamigas', $('#luasareamigasedit').val());
                            data.append('pertimbanganteknis', $('#pertimbanganteknisedit').val());
                            data.append('daripembangunan', $('#daripembangunanedit').val());
                            data.append('kepembangunan', $('#kepembangunanedit').val());
                            data.append('filepks', $('#filepkspembangunanedit')[0].files[0]);
                            data.append('petalokasikerjasama', $('#petalokasikerjasamapembangunanedit')[0].files[0]);
                            data.append('keteranganpenguatan', $('#keteranganpembangunanedit').val());
                            data.append('rencanapelaksanaanprogram', $('#rencanapelaksanaanprogrampembangunanedit')[0].files[0]);
                            data.append('rencanakerjatahunan', $('#rencanakerjatahunanpembangunanedit')[0].files[0]);
                            data.append('monitoring', $('#monitoringpembangunanedit')[0].files[0]);
                            data.append('evaluasi', $('#evaluasipembangunanedit')[0].files[0]);
                            data.append('laporanakhir', $('#laporanakhirpembangunanedit')[0].files[0]);
                            data.append('uptpembangunan', $('#uptpembangunanedit').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idpembangunanstrategis',$('#idpembangunanstrategis').val());
                            $.ajax({
                                url:'/ubahDataPembangunanStrategis',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#judulkerjasamapembangunanedit' ).val('')
                                                $( '#mitrakerjapembangunanedit' ).val('')
                                                $( '#kategorikerjasamastrategisedit' ).val('')
                                                $( '#jumlahtowerkomunikasiedit' ).val('')
                                                $( '#persetujuanpembangunanedit' ).val('')
                                                $( '#jumlahtowerlistrikedit' ).val('')
                                                $( '#luarareaedit' ).val('')
                                                $( '#panjangjalanedit' ).val('')
                                                $( '#keteranganmitigasibencanaedit' ).val('')
                                                $( '#luasareamiliteredit' ).val('')
                                                $( '#luasareamigasedit' ).val('')
                                                $( '#pertimbanganteknisedit' ).val('')
                                                $( '#daripembangunanedit' ).val('')
                                                $( '#kepembangunanedit' ).val('')
                                                $( '#filepkspembangunanedit' ).val('')
                                                $( '#petalokasikerjasamapembangunanedit' ).val('')
                                                $( '#keteranganpembangunanedit' ).val('')
                                                $( '#rencanapelaksanaanprogrampembangunanedit' ).val('')
                                                $( '#rencanakerjatahunanpembangunanedit' ).val('')
                                                $( '#monitoringpembangunanedit' ).val('')
                                                $( '#evaluasipembangunanedit' ).val('')
                                                $( '#laporanakhirpembangunanedit' ).val('')
                                                $('#myModal37').modal('toggle')
                                            })
                                            table17.ajax.reload();
                                }
                            })
                        }
                       
                    }
                })
                 $('form[id="formpembangunanstrategis"]').validate({
                    rules: {
                        judulkerjasamapembangunan: 'required',
                        mitrakerjapembangunan: 'required',
                        kategorimitrapembangunan: 'required',
                        kategorikerjasamastrategis: 'required',
                        jumlahtowerkomunikasi:{
                            number:true
                        },
                        jumlahtowerlistrik:{
                            number:true
                        },
                        luararea:{
                            number:true
                        },
                        panjangjalan:{
                            number:true
                        },
                        keteranganmitigasibencana: 'required',
                        luasareamiliter:{
                            number:true
                        },
                        luasareamigas:{
                            number:true
                        },
                        persetujuanpembangunan: 'required',
                        pertimbanganteknis: 'required',
                        daripembangunan: 'required',
                        kepembangunan: 'required',
                        filepkspembangunan: 'required',
                        petalokasikerjasamapembangunan: 'required',
                        rencanapelaksanaanprogrampembangunan: 'required',
                        rencanakerjatahunanpembangunan: 'required',
                        monitoringpembangunan: 'required',
                        evaluasipembangunan: 'required',
                        laporanakhirpembangunan: 'required',
                        keteranganpembangunan: 'required',
                        uptpembangunan: 'required',
                        namakawasan:{
                            required:true,
                        }
                        // filejpegopenkawasanedit:{
                        //     required:true,
                        //     accept: "image/*"
                        // },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('judulkerjasama', $('#judulkerjasamapembangunan').val());
                        data.append('mitrakerja',$('#mitrakerjapembangunan').val());
                        data.append('kategorimitra', $('#kategorimitrapembangunan').val());
                        data.append('persetujuan', $('#persetujuanpembangunan').val());
                        data.append('kategorikerjasamastrategis', $('#kategorikerjasamastrategis').val());
                        data.append('jumlahtowerkomunikasi', $('#jumlahtowerkomunikasi').val());
                        data.append('jumlahtowerlistrik', $('#jumlahtowerlistrik').val());
                        data.append('luararea', $('#luararea').val());
                        data.append('panjangjalan', $('#panjangjalan').val());
                        data.append('keteranganmitigasibencana', $('#keteranganmitigasibencana').val());
                        data.append('luasareamiliter', $('#luasareamiliter').val());
                        data.append('luasareamigas', $('#luasareamigas').val());
                        data.append('pertimbanganteknis', $('#pertimbanganteknis').val());
                        data.append('daripembangunan', $('#daripembangunan').val());
                        data.append('kepembangunan', $('#kepembangunan').val());
                        data.append('filepks', $('#filepkspembangunan')[0].files[0]);
                        data.append('petalokasikerjasama', $('#petalokasikerjasamapembangunan')[0].files[0]);
                        data.append('keteranganpenguatan', $('#keteranganpembangunan').val());
                        data.append('rencanapelaksanaanprogram', $('#rencanapelaksanaanprogrampembangunan')[0].files[0]);
                        data.append('rencanakerjatahunan', $('#rencanakerjatahunanpembangunan')[0].files[0]);
                        data.append('monitoring', $('#monitoringpembangunan')[0].files[0]);
                        data.append('evaluasi', $('#evaluasipembangunan')[0].files[0]);
                        data.append('laporanakhir', $('#laporanakhirpembangunan')[0].files[0]);
                        data.append('uptpembangunan', $('#uptpembangunan').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        $.ajax({
                            url:'/saveDataPembangunanStrategis',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#judulkerjasamapembangunan' ).val('')
                                            $( '#mitrakerjapembangunan' ).val('')
                                            $( '#kategorikerjasamastrategis' ).val('')
                                            $( '#jumlahtowerkomunikasi' ).val('')
                                            $( '#persetujuanpembangunan' ).val('')
                                            $( '#jumlahtowerlistrik' ).val('')
                                            $( '#luararea' ).val('')
                                            $( '#panjangjalan' ).val('')
                                            $( '#keteranganmitigasibencana' ).val('')
                                            $( '#luasareamiliter' ).val('')
                                            $( '#luasareamigas' ).val('')
                                            $( '#pertimbanganteknis' ).val('')
                                            $( '#daripembangunan' ).val('')
                                            $( '#kepembangunan' ).val('')
                                            $( '#filepkspembangunan' ).val('')
                                            $( '#petalokasikerjasamapembangunan' ).val('')
                                            $( '#keteranganpembangunan' ).val('')
                                            $( '#rencanapelaksanaanprogrampembangunan' ).val('')
                                            $( '#rencanakerjatahunanpembangunan' ).val('')
                                            $( '#monitoringpembangunan' ).val('')
                                            $( '#evaluasipembangunan' ).val('')
                                            $( '#laporanakhirpembangunan' ).val('')
                                            $('#myModal36').modal('toggle')
                                        })
                                        table17.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formpenguatankk"]').validate({
                    rules: {
                        judulkerjasama: 'required',
                        mitrakerja: 'required',
                        kategorimitra: 'required',
                        persetujuan: 'required',
                        perjanjiankerjasama: 'required',
                        notakesepahaman: 'required',
                        daripenguatan: 'required',
                        kepenguatan: 'required',
                        filepks: 'required',
                        petalokasikerjasama: 'required',
                        keteranganpenguatan: 'required',
                        rencanapelaksanaanprogram: 'required',
                        rencanakerjatahunan: 'required',
                        monitoring: 'required',
                        evaluasi: 'required',
                        laporanakhir: 'required',
                        hibah: 'required',
                        jumlahhibah: 'required',
                        uptpenguatanfungsi: 'required',
                        namakawasan:{
                            required:true,
                        }
                        // filejpegopenkawasanedit:{
                        //     required:true,
                        //     accept: "image/*"
                        // },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('judulkerjasama', $('#judulkerjasama').val());
                        data.append('mitrakerja',$('#mitrakerja').val());
                        data.append('kategorimitra', $('#kategorimitra').val());
                        data.append('persetujuan', $('#persetujuan').val());
                        data.append('perjanjiankerjasama', $('#perjanjiankerjasama').val());
                        data.append('notakesepahaman', $('#notakesepahaman').val());
                        data.append('daripenguatan', $('#daripenguatan').val());
                        data.append('kepenguatan', $('#kepenguatan').val());
                        data.append('filepks', $('#filepks')[0].files[0]);
                        data.append('petalokasikerjasama', $('#petalokasikerjasama')[0].files[0]);
                        data.append('keteranganpenguatan', $('#keteranganpenguatan').val());
                        data.append('rencanapelaksanaanprogram', $('#rencanapelaksanaanprogram')[0].files[0]);
                        data.append('rencanakerjatahunan', $('#rencanakerjatahunan')[0].files[0]);
                        data.append('monitoring', $('#monitoring')[0].files[0]);
                        data.append('evaluasi', $('#evaluasi')[0].files[0]);
                        data.append('laporanakhir', $('#laporanakhir')[0].files[0]);
                        data.append('hibah', $('#hibah').val());
                        data.append('jumlahhibah', $('#jumlahhibah').val());
                        data.append('uptpenguatanfungsi', $('#uptpenguatanfungsi').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        $.ajax({
                            url:'/saveDataPenguatanKK',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#judulkerjasama' ).val('')
                                            $( '#mitrakerja' ).val('')
                                            $( '#persetujuan' ).val('')
                                            $( '#perjanjiankerjasama' ).val('')
                                            $( '#notakesepahaman' ).val('')
                                            $( '#daripenguatan' ).val('')
                                            $( '#kepenguatan' ).val('')
                                            $( '#filepks' ).val('')
                                            $( '#petalokasikerjasama' ).val('')
                                            $( '#keteranganpenguatan' ).val('')
                                            $( '#rencanapelaksanaanprogram' ).val('')
                                            $( '#rencanakerjatahunan' ).val('')
                                            $( '#monitoring' ).val('')
                                            $( '#evaluasi' ).val('')
                                            $( '#laporanakhir' ).val('')
                                            $( '#hibah' ).val('')
                                            $( '#jumlahhibah' ).val('')
                                            $('#myModal34').modal('toggle')
                                        })
                                        table16.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formpenguatankkedit"]').validate({
                    rules: {
                        judulkerjasamaedit: 'required',
                        mitrakerjaedit: 'required',
                        kategorimitraedit: 'required',
                        persetujuanedit: 'required',
                        perjanjiankerjasamaedit: 'required',
                        notakesepahamanedit: 'required',
                        daripenguatanedit: 'required',
                        kepenguatanedit: 'required',
                      
                        keteranganpenguatanedit: 'required',
                       
                        hibahedit: 'required',
                        jumlahhibahedit: 'required',
                        uptpenguatanfungsiedit: 'required',
                        namakawasan:{
                            required:true,
                        }
                        // filejpegopenkawasanedit:{
                        //     required:true,
                        //     accept: "image/*"
                        // },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var file = $('#filepksedit')[0].files[0];
                        if(file == undefined){
                            var data;
                            data = new FormData();
                            data.append('judulkerjasama', $('#judulkerjasamaedit').val());
                            data.append('mitrakerja',$('#mitrakerjaedit').val());
                            data.append('kategorimitra', $('#kategorimitraedit').val());
                            data.append('persetujuan', $('#persetujuanedit').val());
                            data.append('perjanjiankerjasama', $('#perjanjiankerjasamaedit').val());
                            data.append('notakesepahaman', $('#notakesepahamanedit').val());
                            data.append('daripenguatan', $('#daripenguatanedit').val());
                            data.append('kepenguatan', $('#kepenguatanedit').val());
                            data.append('filepks', $('#filepkshidden').val());
                            data.append('petalokasikerjasama', $('#petalokasikerjasamahidden').val());
                            data.append('keteranganpenguatan', $('#keteranganpenguatanedit').val());
                            data.append('rencanapelaksanaanprogram', $('#rencanapelaksanaanprogramhidden').val());
                            data.append('rencanakerjatahunan', $('#rencanakerjatahunanhidden').val());
                            data.append('monitoring', $('#monitoringhidden').val());
                            data.append('evaluasi', $('#evaluasihidden').val());
                            data.append('laporanakhir', $('#laporanakhirhidden').val());
                            data.append('hibah', $('#hibahedit').val());
                            data.append('jumlahhibah', $('#jumlahhibahedit').val());
                            data.append('uptpenguatanfungsi', $('#uptpenguatanfungsiedit').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('status','filenotfound');
                            data.append('idpenguatanfungsikk',$('#idpenguatanfungsikk').val());
                            $.ajax({
                                url:'/updateDataPenguatanKK',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#judulkerjasamaedit' ).val('')
                                                $( '#mitrakerjaedit' ).val('')
                                                $( '#persetujuanedit' ).val('')
                                                $( '#perjanjiankerjasamaedit' ).val('')
                                                $( '#notakesepahamanedit' ).val('')
                                                $( '#daripenguatanedit' ).val('')
                                                $( '#kepenguatanedit' ).val('')
                                                $( '#filepksedit' ).val('')
                                                $( '#petalokasikerjasamaedit' ).val('')
                                                $( '#keteranganpenguatanedit' ).val('')
                                                $( '#rencanapelaksanaanprogramedit' ).val('')
                                                $( '#rencanakerjatahunanedit' ).val('')
                                                $( '#monitoringedit' ).val('')
                                                $( '#evaluasiedit' ).val('')
                                                $( '#laporanakhiredit' ).val('')
                                                $( '#hibahedit' ).val('')
                                                $( '#jumlahhibahedit' ).val('')
                                                $('#myModal35').modal('toggle')
                                            })
                                            table16.ajax.reload();
                                }
                            })
                        }else{
                            var data;
                            data = new FormData();
                            data.append('judulkerjasama', $('#judulkerjasamaedit').val());
                            data.append('mitrakerja',$('#mitrakerjaedit').val());
                            data.append('kategorimitra', $('#kategorimitraedit').val());
                            data.append('persetujuan', $('#persetujuanedit').val());
                            data.append('perjanjiankerjasama', $('#perjanjiankerjasamaedit').val());
                            data.append('notakesepahaman', $('#notakesepahamanedit').val());
                            data.append('daripenguatan', $('#daripenguatanedit').val());
                            data.append('kepenguatan', $('#kepenguatanedit').val());
                            data.append('filepks', $('#filepksedit')[0].files[0]);
                            data.append('petalokasikerjasama', $('#petalokasikerjasamaedit')[0].files[0]);
                            data.append('keteranganpenguatan', $('#keteranganpenguatanedit').val());
                            data.append('rencanapelaksanaanprogram', $('#rencanapelaksanaanprogramedit')[0].files[0]);
                            data.append('rencanakerjatahunan', $('#rencanakerjatahunanedit')[0].files[0]);
                            data.append('monitoring', $('#monitoringedit')[0].files[0]);
                            data.append('evaluasi', $('#evaluasiedit')[0].files[0]);
                            data.append('laporanakhir', $('#laporanakhiredit')[0].files[0]);
                            data.append('hibah', $('#hibahedit').val());
                            data.append('jumlahhibah', $('#jumlahhibahedit').val());
                            data.append('uptpenguatanfungsi', $('#uptpenguatanfungsiedit').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            $.ajax({
                                url:'/updateDataPenguatanKK',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#judulkerjasamaedit' ).val('')
                                                $( '#mitrakerjaedit' ).val('')
                                                $( '#persetujuanedit' ).val('')
                                                $( '#perjanjiankerjasamaedit' ).val('')
                                                $( '#notakesepahamanedit' ).val('')
                                                $( '#daripenguatanedit' ).val('')
                                                $( '#kepenguatanedit' ).val('')
                                                $( '#filepksedit' ).val('')
                                                $( '#petalokasikerjasamaedit' ).val('')
                                                $( '#keteranganpenguatanedit' ).val('')
                                                $( '#rencanapelaksanaanprogramedit' ).val('')
                                                $( '#rencanakerjatahunanedit' ).val('')
                                                $( '#monitoringedit' ).val('')
                                                $( '#evaluasiedit' ).val('')
                                                $( '#laporanakhiredit' ).val('')
                                                $( '#hibahedit' ).val('')
                                                $( '#jumlahhibahedit' ).val('')
                                                $('#myModal35').modal('toggle')
                                            })
                                            table16.ajax.reload();
                                }
                            })
                        }
                    }
                })
                  $('form[id="formkemitraankonservasiedit"]').validate({
                    rules: {
                        filetableopenkawasanedit: 'required',
                        fileshpopenkawasanedit: 'required',
                        namakawasan:{
                            required:true,
                        },
                        filejpegopenkawasanedit:{
                            required:true,
                            accept: "image/*"
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                       var file =  $('#petapksedit')[0].files[0];
                        if(file == undefined){
                            var data;
                            data = new FormData();
                            data.append('petapks', $('#petapkshidden').val());
                            data.append('nomorpks',$('#nomorpksedit').val());
                            data.append('luaspks', $('#luaspksedit').val());
                            data.append('namakelompok',$('#namakelompokedit').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idkemitraankonservasi',$('#idkemitraankonservasi').val());
                            data.append('status','filenotfound');
                            $.ajax({
                                url:'/updateDataKemitraanKonservasi',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#petapkshidden' ).val('')
                                                $( '#nomorpksedit' ).val('')
                                                $( '#luaspksedit' ).val('')
                                                $( '#namakelompokedit' ).val('')
                                                $('#myModal31').modal('toggle')
                                            })
                                            table15.ajax.reload();
                                }
                            })
                        }else{
                            var data;
                            data = new FormData();
                            data.append('petapks', $('#petapksedit')[0].files[0]);
                            data.append('nomorpks',$('#nomorpksedit').val());
                            data.append('luaspks', $('#luaspksedit').val());
                            data.append('namakelompok',$('#namakelompokedit').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idkemitraankonservasi',$('#idkemitraankonservasi').val());
                            $.ajax({
                                url:'/updateDataKemitraanKonservasi',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#petapksedit' ).val('')
                                                $( '#nomorpksedit' ).val('')
                                                $( '#luaspksedit' ).val('')
                                                $( '#namakelompokedit' ).val('')
                                                $('#myModal31').modal('toggle')
                                            })
                                            table15.ajax.reload();
                                }
                            })
                        }
                    }
                })
                  $('form[id="formkemitraankonservasi"]').validate({
                    rules: {
                        nomorpks: 'required',
                        luaspks: {
                            required:true,
                            number:true
                        },
                        namakawasan:{
                            required:true,
                        },
                        petapks:{
                            required:true,
                            accept: "image/*"
                        },
                        namakelompok:'required'
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('nomorpks', $('#nomorpks').val());
                        data.append('luaspks',$('#luaspks').val());
                        data.append('petapks', $('#petapks')[0].files[0]);
                        data.append('namakelompok', $('#namakelompok').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        $.ajax({
                            url:'/saveDataKemitraanKonservasi',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#nomorpks' ).val('')
                                            $( '#luaspks' ).val('')
                                            $( '#petapks' ).val('')
                                            $( '#namakelompok' ).val('')
                                            $('#myModal30').modal('toggle')
                                        })
                                        table15.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formopenkawasan"]').validate({
                    rules: {
                        filetableopenkawasan: 'required',
                        fileshpopenkawasan: 'required',
                        namakawasan:{
                            required:true,
                        },
                        filejpegopenkawasan:{
                            required:true,
                            accept: "image/*"
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('fileshp', $('#fileshpopenkawasan')[0].files[0]);
                        data.append('filetable',$('#filetableopenkawasan')[0].files[0]);
                        data.append('filejpeg', $('#filejpegopenkawasan')[0].files[0]);
                        data.append('namakawasan',$('#namakawasan').val());
                        $.ajax({
                            url:'/saveDataOpenKawasan',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#fileshpkawasan' ).val('')
                                            $( '#filetablekawasan' ).val('')
                                            $( '#filejpegkawasan' ).val('')
                                            $('#myModal28').modal('toggle')
                                        })
                                        table14.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formopenkawasanedit"]').validate({
                    rules: {
                        filetableopenkawasanedit: 'required',
                        fileshpopenkawasanedit: 'required',
                        namakawasan:{
                            required:true,
                        },
                        filejpegopenkawasanedit:{
                            required:true,
                            accept: "image/*"
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                       var file =  $('#fileshpkawasanedit')[0].files[0];
                        if(file == undefined){
                            var data;
                            data = new FormData();
                            data.append('fileshp', $('#fileshpopenkawasanhidden').val());
                            data.append('filetable',$('#filetableopenkawasanhidden').val());
                            data.append('filejpeg', $('#filejpegopenkawasanhidden').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idopenkawasan',$('#idopenkawasan').val());
                            data.append('status','filenotfound');
                            $.ajax({
                                url:'/updateDataOpenKawasan',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#fileshpkawasan' ).val('')
                                                $( '#filetablekawasan' ).val('')
                                                $( '#filejpegkawasan' ).val('')
                                                $('#myModal29').modal('toggle')
                                            })
                                            table14.ajax.reload();
                                }
                            })
                        }else{
                            var data;
                            data = new FormData();
                            data.append('fileshp', $('#fileshpopenkawasanedit')[0].files[0]);
                            data.append('filetable',$('#filetableopenkawasanedit')[0].files[0]);
                            data.append('filejpeg', $('#filejpegopenkawasanedit')[0].files[0]);
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idopenkawasan',$('#idopenkawasan').val());
                            $.ajax({
                                url:'/updateDataOpenKawasan',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#fileshpkawasan' ).val('')
                                                $( '#filetablekawasan' ).val('')
                                                $( '#filejpegkawasan' ).val('')
                                                $('#myModal29').modal('toggle')
                                            })
                                            table14.ajax.reload();
                                }
                            })
                        }
                    }
                })
                $('form[id="formpenutupankawasan"]').validate({
                    rules: {
                        filetablekawasan: 'required',
                        fileshpkawasan: 'required',
                        namakawasan:{
                            required:true,
                        },
                        filejpegkawasan:{
                            required:true,
                            accept: "image/*"
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('fileshp', $('#fileshpkawasan')[0].files[0]);
                        data.append('filetable',$('#filetablekawasan')[0].files[0]);
                        data.append('filejpeg', $('#filejpegkawasan')[0].files[0]);
                        data.append('namakawasan',$('#namakawasan').val());
                        $.ajax({
                            url:'/saveDataKawasan',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#fileshpkawasan' ).val('')
                                            $( '#filetablekawasan' ).val('')
                                            $( '#filejpegkawasan' ).val('')
                                            $('#myModal26').modal('toggle')
                                        })
                                        table13.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formpenutupankawasanedit"]').validate({
                    rules: {
                        filetablekawasan: 'required',
                        fileshpkawasan: 'required',
                        namakawasan:{
                            required:true,
                        },
                        filejpegkawasan:{
                            required:true,
                            accept: "image/*"
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                       var file =  $('#fileshpkawasanedit')[0].files[0];
                        if(file == undefined){
                            var data;
                            data = new FormData();
                            data.append('fileshp', $('#fileshpkawasanhidden').val());
                            data.append('filetable',$('#filetablekawasanhidden').val());
                            data.append('filejpeg', $('#filejpegkawasanhidden').val());
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idpenutupankawasan',$('#idpenutupankawasan').val());
                            data.append('status','filenotfound');
                            $.ajax({
                                url:'/updateDataKawasan',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#fileshpkawasan' ).val('')
                                                $( '#filetablekawasan' ).val('')
                                                $( '#filejpegkawasan' ).val('')
                                                $('#myModal27').modal('toggle')
                                            })
                                            table13.ajax.reload();
                                }
                            })
                        }else{
                            var data;
                            data = new FormData();
                            data.append('fileshp', $('#fileshpkawasanedit')[0].files[0]);
                            data.append('filetable',$('#filetablekawasanedit')[0].files[0]);
                            data.append('filejpeg', $('#filejpegkawasanedit')[0].files[0]);
                            data.append('namakawasan',$('#namakawasan').val());
                            data.append('idpenutupankawasan',$('#idpenutupankawasan').val());
                            $.ajax({
                                url:'/updateDataKawasan',
                                method:'POST',
                                data:data,
                                contentType: false,
                                processData:false,
                                success:function(){
                                    Swal.fire(
                                                'Sukses!',
                                                'Data Sukses di simpan!',
                                                'success'
                                            ).then(function(){
                                                $( '#fileshpkawasan' ).val('')
                                                $( '#filetablekawasan' ).val('')
                                                $( '#filejpegkawasan' ).val('')
                                                $('#myModal27').modal('toggle')
                                            })
                                            table13.ajax.reload();
                                }
                            })
                        }
                    }
                })
                $('form[id="formsosekbud"]').validate({
                    rules: {
                        sosialbudaya: 'required',
                        demografidesa: 'required',
                        namakawasan:{
                            required:true,
                        },
                        sejarahpemukiman:{
                            required:true,
                        },
                        sumberdayaalam:{
                            required:true,
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('sosialbudaya', $('#sosialbudaya').val());
                        data.append('demografidesa',$('#demografidesa').val());
                        data.append('sejarahpemukiman', $('#sejarahpemukiman').val());
                        data.append('sumberdayaalam', $('#sumberdayaalam').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        $.ajax({
                            url:'/saveDataSosekbud',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#sosialbudaya' ).val('')
                                            $( '#demografidesa' ).val('')
                                            $( '#sejarahpemukiman' ).val('')
                                            $( '#sumberdayaalam' ).val('')
                                            $('#myModal24').modal('toggle')
                                        })
                                    table11.ajax.reload();
                            }
                        })
                    }
                })
                 $('form[id="formsosekbudedit"]').validate({
                    rules: {
                        sosialbudayaedit: 'required',
                        demografidesaedit: 'required',
                        namakawasan:{
                            required:true,
                        },
                        sejarahpemukimanedit:{
                            required:true,
                        },
                        sumberdayaalamedit:{
                            required:true,
                        },
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('sosialbudaya', $('#sosialbudayaedit').val());
                        data.append('demografidesa',$('#demografidesaedit').val());
                        data.append('sejarahpemukiman', $('#sejarahpemukimanedit').val());
                        data.append('sumberdayaalam', $('#sumberdayaalamedit').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        data.append('idsosekbud',$('#idsosekbud').val());
                        $.ajax({
                            url:'/updateDataSosekbud',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#sosialbudayaedit' ).val('')
                                            $( '#demografidesaedit' ).val('')
                                            $( '#sejarahpemukimanedit' ).val('')
                                            $( '#sumberdayaalamedit' ).val('')
                                            $('#myModal25').modal('toggle')
                                        })
                                    table11.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formpermasalahanpengelolaan"]').validate({
                    rules: {
                        unitpengelolapermasalahan: 'required',
                        kategoripermasalahan: 'required',
                        namakawasan:{
                            required:true,
                        },
                        lainnyapermasalahan:{
                            required:true,
                        },
                        Keteranganpermasalahan:{
                            required:true,
                        },
                        nomorsurat:{
                            required:true,
                        },
                        luaspermasalahan:{
                            required:true,
                            number:true
                        },
                        tanggalpermasalahan:{
                            required:true,
                        },
                        upayapermasalahan:{
                            required:true,
                        }
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('unitpengelolapermasalahan', $('#unitpengelolapermasalahan').val());
                        data.append('kategoripermasalahan',$('#kategoripermasalahan').val());
                        data.append('lainnyapermasalahan', $('#lainnyapermasalahan').val());
                        data.append('Keteranganpermasalahan', $('#Keteranganpermasalahan').val());
                        data.append('nomorsurat', $('#nomorsurat').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        data.append('luaspermasalahan',$('#luaspermasalahan').val());
                        data.append('upayapermasalahan',$('#upayapermasalahan').val());
                        data.append('tanggalpermasalahan', $('#tanggalpermasalahan').val());
                        $.ajax({
                            url:'/saveDataPermasalahanKK',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#unitpengelolapermasalahan' ).val('')
                                            $( '#kategoripermasalahan' ).val('')
                                            $( '#lainnyapermasalahan' ).val('')
                                            $( '#Keteranganpermasalahan' ).val('')
                                            $( '#nomorsurat' ).val('')
                                            $( '#namakawasan' ).val('')
                                            $( '#luaspermasalahan' ).val('')
                                            $( '#tanggalpermasalahan' ).val('')
                                            $('#myModal20').modal('toggle')
                                        })
                                    table10.ajax.reload();
                            }
                        })
                    }
                })
                 $('form[id="formpermasalahanpengelolaanedit"]').validate({
                    rules: {
                        unitpengelolapermasalahanedit: 'required',
                        kategoripermasalahanedit: 'required',
                        namakawasan:{
                            required:true,
                        },
                        lainnyapermasalahanedit:{
                            required:true,
                        },
                        Keteranganpermasalahanedit:{
                            required:true,
                        },
                        nomorsuratedit:{
                            required:true,
                        },
                        luaspermasalahanedit:{
                            required:true,
                        },
                        tanggalpermasalahanedit:{
                            required:true,
                        },
                        upayapermasalahanedit:{
                            required:true,
                        }
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('unitpengelolapermasalahan', $('#unitpengelolapermasalahanedit').val());
                        data.append('kategoripermasalahan',$('#kategoripermasalahanedit').val());
                        data.append('lainnyapermasalahan', $('#lainnyapermasalahanedit').val());
                        data.append('Keteranganpermasalahan', $('#Keteranganpermasalahanedit').val());
                        data.append('nomorsurat', $('#nomorsuratedit').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        data.append('luaspermasalahan',$('#luaspermasalahanedit').val());
                        data.append('upayapermasalahan',$('#upayapermasalahanedit').val());
                        data.append('tanggalpermasalahan', $('#tanggalpermasalahanedit').val());
                        data.append('idpermasalahankk',$('#idpermasalahankk').val());
                        $.ajax({
                            url:'/updateDataPermasalahanKK',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#unitpengelolapermasalahanedit' ).val('')
                                            $( '#kategoripermasalahanedit' ).val('')
                                            $( '#lainnyapermasalahanedit' ).val('')
                                            $( '#Keteranganpermasalahanedit' ).val('')
                                            $( '#nomorsuratedit' ).val('')
                                            $( '#namakawasan' ).val('')
                                            $( '#luaspermasalahanedit' ).val('')
                                            $( '#tanggalpermasalahanedit' ).val('')
                                            $('#myModal23').modal('toggle')
                                        })
                                    table10.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formwilayahadat"]').validate({
                    rules: {
                        kepalakeluargaadat: 'required',
                        namawilayahadat: 'required',
                        luaswilayahadat:{
                            required:true,
                            number: true
                        },
                        nomorskwilayahadat:{
                            required:true,
                            number: true
                        },
                        judulskwilayahadat:{
                            required:true,
                        },
                        dokumenskwilayahadat:{
                            required:true,
                        }
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append('luas', $('#luaswilayahadat').val());
                        data.append('jumlahkepalakeluarga',$('#kepalakeluargaadat').val());
                        data.append('namawilayahadat', $('#namawilayahadat').val());
                        data.append('nomorsk', $('#nomorskwilayahadat').val());
                        data.append('judulsk', $('#judulskwilayahadat').val());
                        data.append('namakawasan',$('#namakawasan').val());
                        data.append('tanggalsk',$('#tanggalskwilayahadat').val());
                        data.append('dokumensk', $('#dokumenskwilayahadat')[0].files[0]);
                        $.ajax({
                            url:'/saveDataWilayahAdat',
                            method:'POST',
                            data:data,
                            contentType: false,
                            processData:false,
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di simpan!',
                                            'success'
                                        ).then(function(){
                                            $( '#luaswilayahadat' ).val('')
                                            $( '#namawilayahadat' ).val('')
                                            $( '#kepalakeluargaadat' ).val('')
                                            $( '#nomorskwilayahadat' ).val('')
                                            $( '#judulskwilayahadat' ).val('')
                                            $( '#dokumenskwilayahadat' ).val('')
                                            $('#myModal20').modal('toggle')
                                        })
                                    tablewilayahadat.ajax.reload();
                            }
                        })
                    }
                })
                $('form[id="formwilayahadatedit"]').validate({
                    rules: {
                        kepalakeluargaadatedit: 'required',
                        namawilayahadatedit: 'required',
                        luaswilayahadatedit:{
                            required:true,
                            number: true
                        },
                        nomorskwilayahadatedit:{
                            required:true,
                            number: true
                        },
                        judulskwilayahadatedit:{
                            required:true,
                        },
                        dokumenskwilayahadatedit:{
                            required:true,
                        }
                    },
                    messages: {
                        judul: 'This field is required',
                        file:'This field mustbe images'

                    },
                    submitHandler: function(form) {
                        var file = $('#dokumenskwilayahadatedit')[0].files[0];
                        if(file == undefined){
                            var data;
                            data = new FormData();
                            data.append('namakawasan', $('#namakawasan').val());
                            data.append('idwilayahadat', $('#idwilayahadat').val());
                            data.append('kepalakeluarga',$('#kepalakeluargaadatedit').val());
                            data.append('namawilayah', $('#namawilayahadatedit').val());
                            data.append('luas',$('#luaswilayahadatedit').val());
                            data.append('nomorsk', $('#nomorskwilayahadatedit').val());
                            data.append('tanggalsk', $('#tanggalskwilayahadatedit').val());
                            data.append('judulsk', $('#judulskwilayahadatedit').val());
                            data.append('dokumensk', $('#dokumenskhidden').val());
                            data.append( 'status',  'filenotfound');
                            $.ajax({
                                url:'/updateDataWilayahAdat',
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
                            data.append('dokumensk', $('#dokumensk')[0].files[0]);
                            data.append('tanggalsk', $('#tanggalskwilayahadatedit').val());
                            data.append('namakawasan', $('#namakawasan').val());
                            data.append('idwilayahadat', $('#idwilayahadat').val());
                            data.append('kepalakeluarga',$('#kepalakeluargaadatedit').val());
                            data.append('namawilayah', $('#namawilayahadatedit').val());
                            data.append('luas',$('#luaswilayahadatedit').val());
                            data.append('nomorsk', $('#nomorskwilayahadatedit').val());
                            data.append('judulsk', $('#judulskwilayahadatedit').val());
                            $.ajax({
                                url:'/updateDataWilayahAdat',
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
                    }
                })
            $('form[id="formdesasekitarkk"]').validate({
                rules: {
                    kotakabupatendesakk: 'required',
                    desakk: 'required',
                    kecamatandesakk: 'required',
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append('kotakbupaten', $('#kotakabupatendesakk').val());
                    data.append('desa',$('#desakk').val());
                    data.append('kecamatan', $('#kecamatandesakk').val());
                    data.append('namakawasan', $('#nama_kawasan').val());
                    $.ajax({
                        url:'/saveDataDesaKK',
                        method:'POST',
                        data:data,
                        contentType: false,
                        processData:false,
                        success:function(){
                            Swal.fire(
                                        'Sukses!',
                                        'Data Sukses di simpan!',
                                        'success'
                                    ).then(function(){
                                        $( '#kotakabupatendesakk' ).val('')
                                        $( '#desakk' ).val('')
                                        $( '#kecamatandesakk' ).val('')
                                        $('#myModal18').modal('toggle')
                                    })
                                tablekk.ajax.reload();
                        }
                    })
                }
            })
            $('form[id="formdesasekitarkkedit"]').validate({
                rules: {
                    kotakabupatendesakkedi: 'required',
                    desakkedit: 'required',
                    kecamatandesakkedit: 'required',
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append('kotakbupaten', $('#kotakabupatendesakkedit').val());
                    data.append('desa',$('#desakkedit').val());
                    data.append('kecamatan', $('#kecamatandesakkedit').val());
                    data.append('namakawasan', $('#nama_kawasan').val());
                    data.append('iddesakk', $('#iddesakk').val());
                    $.ajax({
                        url:'/updateDataDesaKK',
                        method:'POST',
                        data:data,
                        contentType: false,
                        processData:false,
                        success:function(){
                                Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di ubah!',
                                    'success'
                                ).then(function(){
                                    $( '#kotakabupatendesakkedit' ).val('')
                                    $( '#desakkedit' ).val('')
                                    $( '#kecamatandesakkedit' ).val('')
                                    $('#myModal19').modal('toggle')
                                })
                            tablekk.ajax.reload();
                        }
                    })
                }
            })
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
                data.append('gambar', $('#gambar')[0].files[0]);
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
                                    'Data Sukses di ubah!',
                                    'success'
                                ).then(function(){
                                    document.location.reload();
                                })
                    }
                })
            })
            $('#SaveDataKeanekaragamanHayati').click(function(){
                var data;
                data = new FormData();
                data.append('nama', $('#namahayati').val());
                data.append('nama_latin',$('#namalatinhayati').val());
                data.append('deskripsi', $('#deskripsihayati').val());
                data.append('jenis', $('#jenishayati').val());
                data.append('nama_kawasan', $('#namakawasan').val());
                $.ajax({
                    url:'/saveDataKeanekaragamHayati',
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
                            table6.ajax.reload();
                    }
                })
            })
            $('#UpdateDataKeanekaragamanHayati').click(function(){
                var data;
                data = new FormData();
                data.append('nama', $('#namahayatiedit').val());
                data.append('nama_latin',$('#namalatinhayatiedit').val());
                data.append('deskripsi', $('#deskripsihayatiedit').val());
                data.append('jenis', $('#jenishayatiedit').val());
                data.append('nama_kawasan', $('#namakawasan').val());
                data.append('id_keanekaragamhayati', $('#idkeanekaragamhayati').val());
                $.ajax({
                    url:'/updateDataKeanekaragamHayati',
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
                            table6.ajax.reload();
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
            $('#SaveDataPotensiKawasanKonservarsi').click(function(){
                var data;
                data = new FormData();
                data.append('jenis_potensi', $('#jenispotensikonservarsi').val());
                data.append('deskripsi_potensi',$('#deskripsipotensikonservarsi').val());
                data.append('nama_kawasan',$('#namakawasan').val());
                $.ajax({
                    url:'/saveDataPotensiKawasanKonservarsi',
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
                            table5.ajax.reload();
                    }
                })
            })
            $('#UpdateDataPotensiKawasanKonservarsi').click(function(){
                var data;
                data = new FormData();
                data.append('jenis_potensi', $('#jenispotensikonservarsiedit').val());
                data.append('deskripsi_potensi',$('#deskripsipotensikonservarsiedit').val());
                data.append('id_potensi',$('#idpotensi').val());
                data.append('nama_kawasan',$('#namakawasan').val());
                $.ajax({
                    url:'/updateDataPotensiKawasanKonservarsi',
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
                            table5.ajax.reload();
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
           $('form[id="formpengukuhankawasan"]').validate({
                rules: {
                    nama_kawasan: 'required',
                    perkembangan_tata_batas: 'required',
                    dokumensk: 'required',
                    file_shp: 'required',
                    jenissk: 'required',
                    tanggalsk: 'required',
                    nomorsk: 'required',
                    judulsk: 'required',
                    usulan_penyelesaian: 'required',
                    permasalahan: 'required',
                    luas:{
                        required:true,
                        number:true
                    },
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
        
            
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
                                    ).then(function(){
                                        $( '#perkembangan_tata_batas' ).val('')
                                        $( '#file_shp' ).val('')
                                        $( '#permasalahan' ).val('')
                                        $( '#usulan_penyelesaian' ).val('')
                                        $( '#judulsk' ).val('')
                                        $( '#nomorsk' ).val('')
                                        $( '#tanggalsk' ).val('')
                                        $( '#luas' ).val('')
                                        $( '#jenissk' ).val('')
                                        $( '#register' ).val('')
                                        $('#myModal1').modal('toggle')
                                    })
                            table.ajax.reload();
                        }
                    })
                }
            })
            $('form[id="formpengukuhankawasanedit"]').validate({
                rules: {
                    nama_kawasanedit: 'required',
                    jenisskedit: 'required',
                    tanggalskedit: 'required',
                    nomorskedit: 'required',
                    judulskedit: 'required',
                    usulan_penyelesaianedit: 'required',
                    permasalahanedit: 'required',
                    luasedit:{
                        required:true,
                        number:true
                    },
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#perkembangan_tata_batasedit' ).val('')
                                        $( '#file_shpedit' ).val('')
                                        $( '#permasalahanedit' ).val('')
                                        $( '#usulan_penyelesaianedit' ).val('')
                                        $( '#judulskedit' ).val('')
                                        $( '#nomorskedit' ).val('')
                                        $( '#tanggalskedit' ).val('')
                                        $( '#luasedit' ).val('')
                                        $( '#jenisskedit' ).val('')
                                        $( '#registeredit' ).val('')
                                        $('#myModal2').modal('toggle')
                                    })
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
                                    ).then(function(){
                                        $( '#perkembangan_tata_batasedit' ).val('')
                                        $( '#file_shpedit' ).val('')
                                        $( '#permasalahanedit' ).val('')
                                        $( '#usulan_penyelesaianedit' ).val('')
                                        $( '#judulskedit' ).val('')
                                        $( '#nomorskedit' ).val('')
                                        $( '#tanggalskedit' ).val('')
                                        $( '#luasedit' ).val('')
                                        $( '#jenisskedit' ).val('')
                                        $( '#registeredit' ).val('')
                                        $('#myModal2').modal('toggle')
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }
                }
            })
            $('form[id="formevaluasideskstudy"]').validate({
                rules: {
                    namakawasan: 'required',
                    rekomendasi: 'required',
                    tahunpelaksanaan: 'required',
                    uptevaluasifungsideskstudy: 'required',
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#rekomendasi' ).val('')
                                        $( '#tahunpelaksanaan' ).val('')
                                        $( '#uptevaluasifungsideskstudy' ).val('')
                                        $('#myModal3').modal('toggle')
                                    })
                                table1.ajax.reload();
                        }
                    })
                }
            })
              $('form[id="formevaluasideskstudyedit"]').validate({
                rules: {
                    namakawasanedit: 'required',
                    rekomendasiedit: 'required',
                    tahunpelaksanaanedit: 'required',
                    uptevaluasifungsideskstudyedit: 'required',
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#rekomendasiedit' ).val('')
                                        $( '#tahunpelaksanaanedit' ).val('')
                                        $( '#permasalahanedit' ).val('')
                                        $('#myModal4').modal('toggle')
                                    })
                                table1.ajax.reload();
                        }
                    })
                }
            })
            $('form[id="formevaluasifungsiekf"]').validate({
                rules: {
                    rekomendasievaluasifungsiekflapangan: 'required',
                    tahunpelaksanaanevaluasifungsiekflapangan: 'required',
                    namakawasan: 'required',
                    judulskevaluasifungsiekflapangan: 'required',
                    nomorskevaluasifungsiekflapangan: 'required',
                    tanggalskevaluasifungsiekflapangan: 'required',
                    dokumenskevaluasifungsiekflapangan: 'required',
                    petaevaluasifungsiekflapangan: 'required',
                    uptevaluasifungsiekflapangan:'required'
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#rekomendasievaluasifungsiekflapangan' ).val('')
                                        $( '#judulskevaluasifungsiekflapangan' ).val('')
                                        $( '#nomorskevaluasifungsiekflapangan' ).val('')
                                        $( '#tanggalskevaluasifungsiekflapangan' ).val('')
                                        $( '#dokumenskevaluasifungsiekflapangan' ).val('')
                                        $( '#petaevaluasifungsiekflapangan' ).val('')
                                        $('#myModal5').modal('toggle')
                                    })
                                table2.ajax.reload();
                        }
                    })
                }
            })
                    
            
            $('form[id="formevaluasifungsiekfedit"]').validate({
                rules: {
                    rekomendasievaluasifungsiekflapanganedit: 'required',
                    tahunpelaksanaanevaluasifungsiekflapanganedit: 'required',
                    namakawasan: 'required',
                    judulskevaluasifungsiekflapanganedit: 'required',
                    nomorskevaluasifungsiekflapanganedit: 'required',
                    tanggalskevaluasifungsiekflapanganedit: 'required',
                    uptevaluasifungsiekflapanganedit:'required'
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#rekomendasievaluasifungsiekflapanganedit' ).val('')
                                        $( '#judulskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#nomorskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#tanggalskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#dokumenskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#petaevaluasifungsiekflapanganedit' ).val('')
                                        $('#myModal6').modal('toggle')
                                    })
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
                                    ).then(function(){
                                        $( '#rekomendasievaluasifungsiekflapanganedit' ).val('')
                                        $( '#judulskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#nomorskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#tanggalskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#dokumenskevaluasifungsiekflapanganedit' ).val('')
                                        $( '#petaevaluasifungsiekflapanganedit' ).val('')
                                        $('#myModal6').modal('toggle')
                                    })
                                    table2.ajax.reload();
                            }
                        })
                    }
                }
            })
            $('form[id="formindikasitora"]').validate({
                rules: {
                    luasindikasitora:{
                        required:true,
                        number:true
                    },
                    luaskawasanindikasitora:{
                        required:true,
                        number:true
                    },
                    namakawasan: 'required',
                    judulskindikasitora: 'required',
                    nomorskindikasitora: 'required',
                    tanggalskindikasitora: 'required',
                    dokumenskindikasitora:'required',
                    petaindikasitora:'required'
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#luasindikasitora' ).val('')
                                        $( '#luaskawasanindikasitora' ).val('')
                                        $( '#judulskindikasitora' ).val('')
                                        $( '#nomorskindikasitora' ).val('')
                                        $( '#tanggalskindikasitora' ).val('')
                                        $( '#dokumenskindikasitora' ).val('')
                                        $( '#petaindikasitora' ).val('')
                                        $('#myModal15').modal('toggle')
                                    })
                                table3.ajax.reload();
                        }
                    })
                }
            })
           $('form[id="formindikasitoraedit"]').validate({
                rules: {
                    luasindikasitoraedit:{
                        required:true,
                        number:true
                    },
                    luaskawasanindikasitoraedit:{
                        required:true,
                        number:true
                    },
                    judulskindikasitoraedit: 'required',
                    nomorskindikasitoraedit: 'required',
                    tanggalskindikasitoraedit: 'required',
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                    ).then(function(){
                                        $( '#luasindikasitoraedit' ).val('')
                                        $( '#luaskawasanindikasitoraedit' ).val('')
                                        $( '#judulskindikasitoraedit' ).val('')
                                        $( '#nomorskindikasitoraedit' ).val('')
                                        $( '#tanggalskindikasitoraedit' ).val('')
                                        $( '#dokumenskindikasitoraedit' ).val('')
                                        $( '#petaindikasitoraedit' ).val('')
                                        $('#myModal16').modal('toggle')
                                    })
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
                                    ).then(function(){
                                        $( '#luasindikasitoraedit' ).val('')
                                        $( '#luaskawasanindikasitoraedit' ).val('')
                                        $( '#judulskindikasitoraedit' ).val('')
                                        $( '#nomorskindikasitoraedit' ).val('')
                                        $( '#tanggalskindikasitoraedit' ).val('')
                                        $( '#dokumenskindikasitoraedit' ).val('')
                                        $( '#petaindikasitoraedit' ).val('')
                                        $('#myModal16').modal('toggle')
                                    })
                                    table3.ajax.reload();
                            }
                        })
                    }
                }
            })
           $('form[id="formhutanadatdalamkk"]').validate({
                rules: {
                    luashutanadat:{
                        required:true,
                        number:true
                    },
                    namaadat: 'required',
                    provinsihutanadat: 'required',
                    kabupatenkotahutanadat: 'required',
                    judulskhutanadat: 'required',
                    nomorskhutanadat: 'required',
                    tanggalskhutanadat: 'required',
                    dokumenskhutanadat:'required'
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {

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
                                    ).then(function(){
                                        $( '#luashutanadat' ).val('')
                                        $( '#namaadat' ).val('')
                                        $( '#provinsihutanadat' ).val('')
                                        $( '#kabupatenkotahutanadat' ).val('')
                                        $( '#judulskhutanadat' ).val('')
                                        $( '#nomorskhutanadat' ).val('')
                                        $( '#tanggalskhutanadat' ).val('')
                                        $( '#dokumenskhutanadat' ).val('')
                                        $('#myModal9').modal('toggle')
                                    })
                                table4.ajax.reload();
                        }
                    })
                }
            })
           $('form[id="formhutanadatdalamkkedit"]').validate({
                rules: {
                    luashutanadatedit:{
                        required:true,
                        number:true
                    },
                    namaadatedit: 'required',
                    provinsihutanadatedit: 'required',
                    kabupatenkotahutanadatedit: 'required',
                    judulskhutanadatedit: 'required',
                    nomorskhutanadatedit: 'required',
                    tanggalskhutanadatedit: 'required',
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form){
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
                                    ).then(function(){
                                        $( '#luashutanadat' ).val('')
                                        $( '#namaadat' ).val('')
                                        $( '#provinsihutanadat' ).val('')
                                        $( '#kabupatenkotahutanadat' ).val('')
                                        $( '#judulskhutanadat' ).val('')
                                        $( '#nomorskhutanadat' ).val('')
                                        $( '#tanggalskhutanadat' ).val('')
                                        $( '#dokumenskhutanadat' ).val('')
                                        $('#myModal10').modal('toggle')
                                    })
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
                                    ).then(function(){
                                        $( '#luashutanadatedit' ).val('')
                                        $( '#namaadatedit' ).val('')
                                        $( '#provinsihutanadatedit' ).val('')
                                        $( '#kabupatenkotahutanadatedit' ).val('')
                                        $( '#judulskhutanadatedit' ).val('')
                                        $( '#nomorskhutanadatedit' ).val('')
                                        $( '#tanggalskhutanadatedit' ).val('')
                                        $( '#dokumenskhutanadatedit' ).val('')
                                        $('#myModal10').modal('toggle')
                                    })
                                    table4.ajax.reload();
                            }
                        })
                    }
                }
            })
        })
    </script>
</body>
</html>