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
                            <h2 class="mr-4 mb-0">Sketsa Sejarah</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit IIKA</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Sketsa Sejarah</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sketsa Sejarah</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Sketsa Sejarah</button>
                                    <a class="btn btn-success" href="downloadsketsasejarah"><i class="fa fa-download"></i> Download Template</a>
                                </div>
                                <div class="card-body">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard='false' data-backdrop='static'>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Sketsa Sejarah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="sketsasejarahform" method="POST" action="">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Judul Sketsa Sejarah</label>
                                                    <input class="form-control" type="text" id="judul" name="judul" name="judul">
                                                </div>
                                                <div class="form-group">
                                                    <label>File Sketsa Sejarah</label>
                                                    <input class="form-control" type="file" id="file" name="file" name="file">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" >Save changes</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal fade bd-example-modal-lg" id="modals2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Sketsa Sejarah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="sketsasejarahformedit" method="POST" action="">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Judul Sketsa Sejarah</label>
                                                    <input class="form-control" type="text" id="juduledit" name="juduledit">
                                                    <input type="hidden" id="idsketsasejarah">
                                                    <input type="hidden" id="filehidden">
                                                </div>
                                                <div class="form-group">
                                                    <label>File Sketsa Sejarah</label>
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
                                            <th>Judul</th>
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
                })
                .then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'/destroyDataSketsaSejarah/'+id,
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
        var table =  $('#myTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                             {
                                extend: 'excel',
                                title :'Sketsa Sejarah',
                                exportOptions: {
                                    columns: [ 0 ]
                                }
                            }, 
                            {
                                extend: 'pdf',
                                title :'Sketsa Sejarah',
                                exportOptions: {
                                    columns: [ 0 ]
                                }
                            }
                        ],
                        responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details Sketsa Sejarah';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataSketsaSejarah",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'judul' },
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
            $('#UpdateData').click(function(){
                
            })
            $('form[id="sketsasejarahform"]').validate({
                rules: {
                    judul: 'required',
                    
                    file: {
                        required: true,
                    }
                },
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
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
                                ).then(function(){
                                    $('#judul').val('')
                                    $('#file').val('')
                                    $('#exampleModal').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            });
            $('form[id="sketsasejarahformedit"]').validate({
                rules: {
                    juduledit: 'required',
                },
               
                messages: {
                    judul: 'This field is required',
                    file:'This field mustbe images'

                },
                submitHandler: function(form) {
                    var file = $('#fileedit')[0].files[0];
                    if(file == undefined){
                        var data;
                        data = new FormData();
                        data.append( 'idsketsasejarah', $( '#idsketsasejarah' ).val());
                        data.append( 'file', $( '#filehidden' ).val());
                        data.append( 'judul', $( '#juduledit' ).val());
                        data.append( 'status',  'filenotfound');
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
                                        $('#fileedit').val('');
                                        $('#juduledit').val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }else{
                        var data;
                        data = new FormData();
                        data.append( 'file', $( '#fileedit' )[0].files[0] );
                        data.append( 'judul', $( '#juduledit' ).val());
                        data.append( 'idsketsasejarah', $( '#idsketsasejarah' ).val());
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
                                        $('#fileedit').val('');
                                        ('#juduledit').val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }
                }
            });
        })
    </script>
</body>
</html>