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
                            <h2 class="mr-4 mb-0">Peraturan</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 ">Peraturan</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Peraturan</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Peraturan</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Peraturan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Jenis Peraturan</label>
                                                <select class="form-control" name="jenisperaturan" id="jenisperaturan">
                                                    <option value="UU">UU</option>
                                                    <option value="PP">PP</option>
                                                    <option value="Perpres">Perpres</option>
                                                    <option value="permen">Permen</option>
                                                    <option value="perdirjen">Perdirjen</option>
                                                    <option value="SE">SE</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>File</label>
                                                <input class="form-control" type="file" id="file">
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Peraturan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Judul Sketsa Sejarah</label>
                                                <select class="form-control" name="jenisperaturanedit" id="jenisperaturanedit">
                                                    <option value="UU">UU</option>
                                                    <option value="PP">PP</option>
                                                    <option value="Perpres">Perpres</option>
                                                    <option value="permen">Permen</option>
                                                    <option value="perdirjen">Perdirjen</option>
                                                    <option value="SE">SE</option>
                                                </select>
                                                <input type="hidden" id="idperaturan">
                                                <input type="hidden" id="filehidden">
                                            </div>
                                            <div class="form-group">
                                                <label>File</label>
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
                                    <table class="table" id="myTable">
                                        <thead>
                                            <th>Jenis Peraturan</th>
                                            <th>Action</th>
                                        </thead>
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
            $('#UpdateData').click(function(){
                var file = $('#fileedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append( 'idperaturan', $( '#idperaturan' ).val());
                    data.append( 'file', $( '#filehidden' ).val());
                    data.append( 'jenis_peraturan', $( '#jenisperaturanedit' ).val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataPeraturan',
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
                    data.append( 'file', $( '#fileedit' )[0].files[0] );
                    data.append( 'jenis_peraturan', $( '#jenisperaturanedit' ).val());
                    data.append( 'idperaturan', $( '#idperaturan' ).val());
                    $.ajax({
                        url:'/updateDataSketsaSejarah',
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
            $('#SaveData').click(function(){
                var data;
                data = new FormData();
                data.append( 'file', $( '#file' )[0].files[0] );
                data.append( 'jenis_peraturan', $( '#jenisperaturan' ).val());
                $.ajax({
                    url:'/savedDataPeraturan',
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