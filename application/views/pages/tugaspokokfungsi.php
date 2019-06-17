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
                                    <button class="btn btn-warning float-right" data-toggle="modal" data-target="#exampleModal">Edit</button>
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
                                            </div>
                                            <div class="form-group">
                                                <label>Tugas</label>
                                                <input class="form-control" type="text" id="tugas" value="<?php echo $hasil[0]['tugas'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Fungsi</label>
                                                <textarea class="form-control" value="<?php echo $hasil[0]['fungsi'];?>">
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
                                    <div class="modal fade bd-example-modal-lg" id="modals2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Sketsa Sejarah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Judul Sketsa Sejarah</label>
                                                <input class="form-control" type="text" id="juduledit">
                                                <input type="hidden" id="idsketsasejarah">
                                                <input type="hidden" id="filehidden">
                                            </div>
                                            <div class="form-group">
                                                <label>File Sketsa Sejarah</label>
                                                <input class="form-control" type="file" id="fileedit">
                                            </div>  
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="UpdateData">Save changes</button>
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
        function editfunc(id){
            $.ajax({
                url:'/showDataSketsaSejarah/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idsketsasejarah' ).val(hasil.id);
                    $( '#filehidden' ).val(hasil.file);
                    $( '#juduledit' ).val(hasil.judul);
                }
            })
        }
        $('document').ready(function(){
            $('#UpdateData').click(function(){
               
            })
            $('#SaveData').click(function(){
                var data;
                data = new FormData();
                data.append( 'file', $( '#file' )[0].files[0] );
                data.append( 'judul', $( '#judul' ).val());
                $.ajax({
                    url:'/savedDataSketsaSejarah',
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
        })
    </script>
</body>
</html>