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
                                            <form id="peraturanform">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Jenis Peraturan</label>
                                                        <select class="form-control" name="jenisperaturan" id="jenisperaturan" name="jenisperaturan">
                                                            <option value="UU">UU</option>
                                                            <option value="PP">PP</option>
                                                            <option value="Perpres">Perpres</option>
                                                            <option value="permen">Permen</option>
                                                            <option value="perdirjen">Perdirjen</option>
                                                            <option value="SE">SE</option>
                                                        </select>
                                                    </div>
                                                     <div class="form-group">
                                                        <label>Upload By</label>
                                                        <select class="form-control" name="uploadby" id="uploadby">
                                                            <option value="Subdit IIKA">Subdit IIKA</option>
                                                            <option value="Subdit Pemolaan">Subdit Pemolaan</option>
                                                            <option value="Subdit PKS">Subdit PKS</option>
                                                            <option value="Subdit Penataan">Subdit Penataan</option>
                                                        </select>
                                                    </div>
                                                     <div class="form-group">
                                                        <label>Nomor</label>
                                                        <input class="form-control" type="text" id="nomor" name="nomor">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>File</label>
                                                        <input class="form-control" type="file" id="file" name="file">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
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
                                                <form id="peraturanformedit">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Judul Sketsa Sejarah</label>
                                                            <select class="form-control" name="jenisperaturanedit" id="jenisperaturanedit" name="jenisperaturanedit">
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
                                                        <label>Upload By</label>
                                                        <select class="form-control" name="uploadbyedit" id="uploadbyedit">
                                                            <option value="Subdit IIKA">Subdit IIKA</option>
                                                            <option value="Subdit Pemolaan">Subdit Pemolaan</option>
                                                            <option value="Subdit PKS">Subdit PKS</option>
                                                            <option value="Subdit Penataan">Subdit Penataan</option>
                                                        </select>
                                                    </div>
                                                     <div class="form-group">
                                                        <label>Nomor</label>
                                                        <input class="form-control" type="text" id="nomoredit" name="nomoredit">
                                                    </div>
                                                        <div class="form-group">
                                                            <label>File</label>
                                                            <input class="form-control" type="file" id="fileedit" name="fileedit">
                                                        </div>  
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table" id="myTable">
                                        <thead>
                                            <th>Jenis Peraturan</th>
                                            <th>Nomor</th>
                                            <th>Upload By</th>
                                            <th>File</th>
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
                    $( '#nomoredit' ).val(hasil.nomor);
                    $( '#uploadbyedit' ).val(hasil.uploadby);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                             {
                                extend: 'excel',
                                title :'Peraturan',
                                exportOptions: {
                                    columns: [ 0,1,2,3 ]
                                }
                            }, 
                            {
                                extend: 'pdf',
                                title :'Peraturan',
                                exportOptions: {
                                    columns: [ 0,1,2,3 ]
                                }
                            }
                        ],
                        responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details Peraturan';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
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
                            { data: 'nomor' },
                            { data: 'upload_by' },
                            {
                                data:null,
                                render:function (data,type,row){
                                    return "<a href='<?php echo constant('API_URL');?>/"+data.file+"' target='_blank'>Download</a>";
                                }
                            },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('form[id="peraturanformedit"]').validate({
                rules: {
                    jenisperaturanedit: 'required',
                    nomoredit:'required',
                    uploadbyedit:'required'
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var file = $('#fileedit')[0].files[0];
                    if(file == undefined){
                        var data;
                        data = new FormData();
                        data.append( 'idperaturan', $( '#idperaturan' ).val());
                        data.append( 'file', $( '#filehidden' ).val());
                        data.append( 'jenis_peraturan', $( '#jenisperaturanedit' ).val());
                        data.append( 'nomor', $( '#nomoredit' ).val());
                        data.append( 'uploadby', $( '#uploadbyedit' ).val());
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
                                    ).then(function(){
                                        $( '#jenisperaturanedit' ).val('');
                                        $( '#fileedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }else{
                        var data;
                        data = new FormData();
                        data.append( 'file', $( '#fileedit' )[0].files[0] );
                        data.append( 'jenis_peraturan', $( '#jenisperaturanedit' ).val());
                        data.append( 'idperaturan', $( '#idperaturan' ).val());
                        data.append( 'nomor', $( '#nomoredit' ).val());
                        data.append( 'uploadby', $( '#uploadbyedit' ).val());
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
                                    ).then(function(){
                                        $( '#jenisperaturanedit' ).val('');
                                        $( '#fileedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                }
                }
            })
            $('form[id="peraturanform"]').validate({
                rules: {
                    jenisperaturan: 'required',
                    file:'required',
                    uploadby:'required',
                    nomor:'required',
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'file', $( '#file' )[0].files[0] );
                    data.append( 'jenis_peraturan', $( '#jenisperaturan' ).val());
                    data.append( 'nomor', $( '#nomor' ).val());
                    data.append( 'uploadby', $( '#uploadby' ).val());
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
                                ).then(function(){
                                    $( '#jenisperaturan' ).val('');
                                    $( '#file' ).val('');
                                    $( '#uploadby' ).val('');
                                    $( '#nomor' ).val('');
                                    $('#exampleModal').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            });
        })
    </script>
</body>
</html>