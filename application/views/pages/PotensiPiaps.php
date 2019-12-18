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
                            <h2 class="mr-4 mb-0">Potensi PIAPS</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Penataan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Potensi PIAPS</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Potensi PIAPS</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <a class="btn btn-success" href="downloadtemplatepotensipiaps"><i class="fa fa-download"></i> Download Template</a>
                                </div>
                                <div class="card-body">
                                    <div class="modal fade" id="exampleModal"  tabindex='-1' data-keyboard='false' data-backdrop='static' role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Form Input Potensi Piaps</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="formpotensipiaps" method="POST" action="">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Judul SK</label>
                                                            <input class="form-control" type="text" id="judulsk" name="judulsk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor SK</label>
                                                            <input class="form-control" type="text" id="nomorsk" name="nomorsk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal SK</label>
                                                            <input class="form-control" type="date" id="tanggalsk" name="tanggalsk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dokumen SK</label>
                                                            <input class="form-control" type="file" id="dokumensk" name="dokumensk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta SHP</label>
                                                            <input class="form-control" type="file" id="petashp" name="petashp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta JPEG</label>
                                                            <input class="form-control" type="file" id="petajpeg" name="petajpeg">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas Zona / Blok</label>
                                                            <input class="form-control" type="text" id="luaszona" name="luaszona">
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
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Form Ubah Potensi Piaps</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="formpotensipiapsedit" method="POST" action="">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Judul SK</label>
                                                            <input class="form-control" type="text" id="judulskedit" name="judulskedit">
                                                            <input type="hidden" id="idpotensipiaps">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor SK</label>
                                                            <input class="form-control" type="text" id="nomorskedit" name="nomorskedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal SK</label>
                                                            <input class="form-control" type="date" id="tanggalskedit" name="tanggalskedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dokumen SK</label>
                                                            <input class="form-control" type="file" id="dokumenskedit" name="dokumenskedit">
                                                            <input type="hidden" id="dokumenskhidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta SHP</label>
                                                            <input class="form-control" type="file" id="petashpedit" name="petashpedit">
                                                            <input type="hidden" id="petashphidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta JPEG</label>
                                                            <input class="form-control" type="file" id="petajpegedit" name="petajpegedit">
                                                            <input type="hidden" id="petajpeghidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas Zona / Blok</label>
                                                            <input class="form-control" type="text" id="luaszonaedit" name="luaszonaedit">
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
                                    <table class="table display" id="myTable" style="width: 100%">
                                        <thead>
                                            <th>Judul SK</th>
                                            <th>Nomor SK</th>
                                            <th>Tanggal SK</th>
                                            <th>Luas Zona / Blok </th>
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
                        url:'/deletePotensipiaps/'+id,
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
                url:'/showDataPotensipiaps/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idpotensipiaps' ).val(hasil.id);
                    $( '#judulskedit' ).val(hasil.judul_sk);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                    $( '#dokumenskhidden' ).val(hasil.dokumen_sk);
                    $( '#petashphidden' ).val(hasil.peta_shp);
                    $( '#petajpeghidden' ).val(hasil.peta_jpeg);
                    $( '#luaszonaedit' ).val(hasil.luas_zona);
                }
            })
        }
        var table =  $('#myTable').DataTable({
            dom: 'Bfrtip',
                        buttons: [
                             {
                                extend: 'excel',
                                title :'Potensi Piaps',
                                exportOptions: {
                                    columns: [ 0,1,2,3 ]
                                }
                            }, 
                            {
                                extend: 'pdf',
                                title :'Potensi Piaps',
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
                                        return 'Details Potensi Piaps';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataPotensipiaps",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'judul_sk' },
                            { data: 'nomor_sk' },
                            { data: 'tanggal_sk' },
                            { data: 'luas_zona' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('form[id="formpotensipiapsedit"]').validate({
                rules: {
                    judulskedit: 'required',
                    nomorskedit: 'required',
                    tanggalskedit: 'required',
                    petajpegedit:{
                        accept: "image/*"
                    },
                    luaszonaedit: {
                        required:true,
                        number:true
                    },
                },
                messages: {
                    rolesedit: 'This field is required',
                },
                submitHandler: function(form) {
                   var file = $('#dokumenskedit')[0].files[0];
                   if(file == undefined){
                        var data;
                        data = new FormData();
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                        data.append( 'luaszona', $( '#luaszonaedit' ).val());
                        data.append( 'dokumensk', $( '#dokumenskhidden' ).val());
                        data.append( 'petashp', $( '#petashphidden' ).val() );
                        data.append( 'petajpeg', $( '#petajpeghidden' ).val());
                        data.append( 'status', 'filenotfound');
                        data.append( 'petajpeg', $( '#petajpeghidden' ).val());
                        data.append( 'idpotensipiaps', $( '#idpotensipiaps' ).val());
                        $.ajax({
                            url:'/updateDataPotensipiaps',
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
                                        $( '#judulskedit' ).val('');
                                        $( '#nomorskedit' ).val('');
                                        $( '#tanggalskedit' ).val('');
                                        $( '#luaszonaedit' ).val('');
                                        $( '#dokumenskedit' ).val('');
                                        $( '#petashpedit' ).val('');
                                        $( '#petajpegedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                   }else{
                        var data;
                        data = new FormData();
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                        data.append( 'luaszona', $( '#luaszonaedit' ).val());
                        data.append( 'dokumensk', $( '#dokumenskedit' )[0].files[0] );
                        data.append( 'petashp', $( '#petashpedit' )[0].files[0] );
                        data.append( 'petajpeg', $( '#petajpegedit' )[0].files[0]);
                        data.append( 'idpotensipiaps', $( '#idpotensipiaps' ).val());
                        $.ajax({
                            url:'/updateDataPotensipiaps',
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
                                        $( '#judulskedit' ).val('');
                                        $( '#nomorskedit' ).val('');
                                        $( '#tanggalskedit' ).val('');
                                        $( '#luaszonaedit' ).val('');
                                        $( '#dokumenskedit' ).val('');
                                        $( '#petashpedit' ).val('');
                                        $( '#petajpegedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                   }
                }
            });
            $('form[id="formpotensipiaps"]').validate({
                rules: {
                    judulsk: 'required',
                    nomorsk: 'required',
                    tanggalsk: 'required',
                    dokumensk: 'required',
                    petashp: 'required',
                    petajpeg:{
                        required:true,
                        accept: "image/*"
                    },
                    luaszona: {
                        required:true,
                        number:true
                    },
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'judulsk', $( '#judulsk' ).val());
                    data.append( 'nomorsk', $( '#nomorsk' ).val());
                    data.append( 'tanggalsk', $( '#tanggalsk' ).val());
                    data.append( 'luaszona', $( '#luaszona' ).val());
                    data.append( 'dokumensk', $( '#dokumensk' )[0].files[0] );
                    data.append( 'petashp', $( '#petashp' )[0].files[0] );
                    data.append( 'petajpeg', $( '#petajpeg' )[0].files[0]);
                    $.ajax({
                        url:'/savedDataPotensipiaps',
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
                                    $( '#judulsk' ).val('');
                                    $( '#nomorsk' ).val('');
                                    $( '#tanggalsk' ).val('');
                                    $( '#luaszona' ).val('');
                                    $( '#dokumensk' ).val('');
                                    $( '#petashp' ).val('');
                                    $( '#petajpeg' ).val('');
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