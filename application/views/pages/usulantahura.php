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
                            <h2 class="mr-4 mb-0">Usulan Tahura</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Pemoalaan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Usulan Tahura</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Usulan Tahura</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Usulan Tahura</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Usulan Tahura</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formusulantahura" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <select class="form-control" type="text" id="provinsi" name="provinsi">
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten / Kota</label>
                                                            <select class="form-control" type="text" id="kabupaten_kota" name="kabupaten_kota">
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pengusul</label>
                                                            <input class="form-control" type="text" id="pengusul" name="pengusul">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Lokasi</label>
                                                            <input class="form-control" type="text" id="lokasi" name="lokasi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas</label>
                                                            <input class="form-control" type="text" id="luas" name="luas">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fungsi Hutan / Kawasan</label>
                                                            <input class="form-control" type="text" id="fungsi_hutan" name="fungsi_hutan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta (.jpg)</label>
                                                            <input class="form-control" type="file" id="peta" name="peta">
                                                        </div>
                                                    </div>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah KPHK Non TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formusulantahuraedit" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <select class="form-control" type="text" id="provinsiedit" name="provinsiedit">
                                                            </select>
                                                            <input class="form-control" type="hidden" id="petahide">
                                                            <input class="form-control" type="hidden" id="idtahuraedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten / Kota</label>
                                                            <select class="form-control" type="text" id="kabupaten_kotaedit" name="kabupaten_kotaedit">
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pengusul</label>
                                                            <input class="form-control" type="text" id="pengusuledit" name="pengusuledit">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Lokasi</label>
                                                            <input class="form-control" type="text" id="lokasiedit" name="lokasiedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas</label>
                                                            <input class="form-control" type="text" id="luasedit" name="luasedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fungsi Hutan / Kawasan</label>
                                                            <input class="form-control" type="text" id="fungsi_hutanedit" name="fungsi_hutanedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta (.jpg)</label>
                                                            <input class="form-control" type="file" id="petaedit" name="petaedit">
                                                        </div>
                                                    </div>
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
                                            <th>Provinsi</th>
                                            <th>Kabupaten Kota</th>
                                            <th>Pengusul</th>
                                            <th>lokasi</th>
                                            <th>luas</th>
                                            <th>Fungsi Hutan / Kawasan</th>
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
                            url:'/deleteDataUsulanTahura/'+id,
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
                url:'/showDataUsulanTahura/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#provinsiedit' ).val(hasil.provinsi);
                    $( '#petahide' ).val(hasil.peta);
                    $( '#kabupaten_kotaedit' ).val(hasil.kabupaten_kota);
                    $( '#pengusuledit' ).val(hasil.pengusul);
                    $( '#lokasiedit' ).val(hasil.lokasi);
                    $( '#luasedit' ).val(hasil.luas);
                    $( '#fungsi_hutanedit' ).val(hasil.fungsi_hutan);
                    $( '#idtahuraedit' ).val(hasil.id);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                             {
                                extend: 'excel',
                                title :'Usulan Tahura',
                                exportOptions: {
                                    columns: [ 0,1,2,3,4,5]
                                }
                            }, 
                            {
                                extend: 'pdf',
                                title :'Usulan Tahura',
                                exportOptions: {
                                    columns: [ 0,1,2,3,4,5 ]
                                }
                            }
                        ],
                        responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details Usulan Tahura';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getDataUsulanTahura",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'provinsi' },
                            { data: 'kabupaten_kota' },
                            { data: 'pengusul' },
                            { data: 'lokasi' },                            	
                            { data: 'luas' },
                            { data: 'fungsi_hutan' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $.ajax({
                type:'GET',
                url:'/getDataMasterProvinsi',
                dataType:'json',
                success:function(data){
                    var html;
                    data.forEach(element => {
                         html = "<option value='"+element.kode+"'>"+element.nama+"</option>";
                         $("#provinsi").append(html);
                         $("#provinsiedit").append(html);
                    });
                }
            })
            $('#provinsi').change(function(){
                var idprovinsi = $('#provinsi').val();
                $.ajax({
                    type:'GET',
                    url:'/getDataMasterProvinsiKota/'+idprovinsi,
                    dataType:'json',
                    success:function(data){
                        var html;
                        data.forEach(element => {
                            html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                            $("#kabupaten_kota").append(html);
                        });
                    }
                })
            })
            $('form[id="formusulantahuraedit"]').validate({
                rules: {
                    luasedit:{
                        required:true,
                        number:true
                    },
                    provinsiedit: 'required',
                    kabupaten_kotaedit: 'required',
                    pengusuledit:'required',
                    lokasiedit:'required',
                    fungsi_hutanedit: 'required'
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var file = $('#petaedit')[0].files[0];
                    if(file == undefined){
                        var data;
                        data = new FormData();
                        data.append( 'idtahura', $( '#idtahuraedit' ).val());
                        data.append( 'provinsi', $( '#provinsiedit' ).val());
                        data.append( 'peta', $( '#petahide' ).val());
                        data.append( 'kabupaten_kota', $( '#kabupaten_kotaedit' ).val());
                        data.append( 'pengusul', $( '#pengusuledit' ).val());
                        data.append( 'lokasi', $( '#lokasiedit' ).val());
                        data.append( 'luas', $( '#luasedit' ).val());
                        data.append( 'fungsi_hutan', $( '#fungsi_hutanedit' ).val());
                        data.append( 'status',  'filenotfound');
                        $.ajax({
                            url:'/updateDataUsulanTahura',
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
                                        $( '#provinsiedit' ).val('');
                                        $( '#kabupaten_kotaedit' ).val('');
                                        $( '#pengusuledit' ).val('');
                                        $( '#lokasiedit' ).val('');
                                        $( '#luasedit' ).val('');
                                        $( '#fungsi_hutanedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }else{
                        var data;
                        data = new FormData();
                        data.append( 'peta', $( '#petaedit' )[0].files[0] );
                        data.append( 'provinsi', $( '#provinsiedit' ).val());
                        data.append( 'kabupaten_kota', $( '#kabupaten_kotaedit' ).val());
                        data.append( 'pengusul', $( '#pengusuledit' ).val());
                        data.append( 'lokasi', $( '#lokasiedit' ).val());
                        data.append( 'luas', $( '#luasedit' ).val());
                        data.append( 'fungsi_hutan', $( '#fungsi_hutanedit' ).val());
                        data.append( 'idtahura', $( '#idtahuraedit' ).val());
                        $.ajax({
                            url:'/updateDataUsulanTahura',
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
                                        $( '#provinsiedit' ).val('');
                                        $( '#kabupaten_kotaedit' ).val('');
                                        $( '#pengusuledit' ).val('');
                                        $( '#lokasiedit' ).val('');
                                        $( '#luasedit' ).val('');
                                        $( '#fungsi_hutanedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }

                }
            })
            $('form[id="formusulantahura"]').validate({
                rules: {
                    luas:{
                        required:true,
                        number:true
                    },
                    provinsi: 'required',
                    kabupaten_kota: 'required',
                    pengusul:'required',
                    lokasi:'required',
                    fungsi_hutan: 'required',
                    peta:'required',
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'peta', $( '#peta' )[0].files[0] );
                    data.append( 'provinsi', $( '#provinsi' ).val());
                    data.append( 'kabupaten_kota', $( '#kabupaten_kota' ).val());
                    data.append( 'pengusul', $( '#pengusul' ).val());
                    data.append( 'lokasi', $( '#lokasi' ).val());
                    data.append( 'luas', $( '#luas' ).val());
                    data.append( 'fungsi_hutan', $( '#fungsi_hutan' ).val());
                    $.ajax({
                        url:'/savedDataUsulanTahura',
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
                                    $( '#provinsi' ).val('');
                                    $( '#peta' ).val('');
                                    $( '#kabupaten_kota' ).val('');
                                    $( '#pengusul' ).val('');
                                    $( '#lokasi' ).val('');
                                    $( '#luas' ).val('');
                                    $( '#fungsi_hutan' ).val('');
                                    $('#exampleModal').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            })
        })
    </script>
</body>
</html>