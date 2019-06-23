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
                            <h2 class="mr-4 mb-0">Tugas Pokok Fungsi</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Profil Direktorat Pika</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Tugas Pokok Fungsi</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tugas Pokok Fungsi</h4>
                                    <?php if(empty($hasil)) { ?>
                                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1">Tambah Baru</button>
                                    <?php }else{?>
                                        <button class="btn btn-warning float-right" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                    <?php } ?>
                                </div>
                                <div class="card-body">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Tugas Pokok Fungsi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Peraturan</label>
                                                <input class="form-control" type="text" id="peraturan" value="<?php echo $hasil[0]['peraturan'];?>">
                                                <input type="hidden" id="idperaturan" value="<?php echo $hasil[0]['id'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Tugas</label>
                                                <input class="form-control" type="text" id="tugas" value="<?php echo $hasil[0]['tugas'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Fungsi</label>
                                                <textarea class="form-control" value="<?php echo $hasil[0]['fungsi'];?>" id="fungsi">
                                                    <?php echo $hasil[0]['fungsi'];?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="SaveData">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Tugas Pokok Fungsi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Peraturan</label>
                                                <input class="form-control" type="text" id="peraturan" value="<?php echo $hasil[0]['peraturan'];?>">
                                                <input type="hidden" id="idperaturan" value="<?php echo $hasil[0]['id'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Tugas</label>
                                                <input class="form-control" type="text" id="tugas" value="<?php echo $hasil[0]['tugas'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Fungsi</label>
                                                <textarea class="form-control" value="<?php echo $hasil[0]['fungsi'];?>" id="fungsi">
                                                    <?php echo $hasil[0]['fungsi'];?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="SaveData">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                        <table class="table">
                                            <tr>
                                                <td><strong>Peraturan</strong> </td><td>:</td></td><td><?php   echo $hasil[0]['peraturan'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tugas</strong> </td><td> :</td><td><?php   echo $hasil[0]['tugas'];?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Fungsi</strong> </td><td> :</td><td><?php   echo $hasil[0]['fungsi'];?></td>
                                            </tr>
                                        </table>
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
        
        $('document').ready(function(){
            $('#UpdateData').click(function(){
               
            })
            $('#SaveData').click(function(){
                var data;
                data = new FormData();
                data.append( 'idperaturan', $( '#idperaturan' ).val());
                data.append( 'peraturan', $( '#peraturan' ).val());
                data.append( 'tugas', $( '#tugas' ).val());
                data.append( 'fungsi', $( '#fungsi' ).val());
                $.ajax({
                    url:'/SaveDataTugasPokokFungsi',
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
                                window.location = "tugas-pokok-fungsi";
                            })
                           
                    }
                })
            })
        })
    </script>
</body>
</html>