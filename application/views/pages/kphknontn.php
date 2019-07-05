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
                            <h2 class="mr-4 mb-0">KPHK NON TN</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Pemoalaan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">KPHK NON TN</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>KPHK NON TN</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input KPHK Non TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formkphknontn" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Tahun Pengesahan</label>
                                                            <input class="form-control" type="text" id="tahunpengesahan" name="tahunpengesahan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengesahan</label>
                                                            <input class="form-control" type="date" id="tanggalpengesahan"name="tanggalpengesahan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama KPHK</label>
                                                            <input class="form-control" type="text" id="namakphk" name="namakphk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas KPHK</label>
                                                            <input class="form-control" type="text" id="luaskphk" name="luaskphk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <input class="form-control" type="text" id="provinsi" name="provinsi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten/Kota KPHK</label>
                                                            <input class="form-control" type="text" id="kabupatenkota" name="kabupatenkota">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h3>SK KPHK</h3>
                                                            <label>Nama Kawasan</label>
                                                            <input class="form-control" type="text" id="namakawasan" name="namakawasan">
                                                            <label>Judul SK</label>
                                                            <input class="form-control" type="text" id="judulsk" name="judulsk">
                                                            <label>Nomor SK</label>
                                                            <input class="form-control" type="text" id="nomorsk" name="nomorsk">
                                                            <label>Tanggal SK</label>
                                                            <input class="form-control" type="date" id="tanggalsk" name="tanggalsk">
                                                            <label>Dokumen SK</label>
                                                            <input class="form-control" type="file" id="dokumensk" name="dokumensk">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
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
                                        <form id="formkphknontnedit" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Tahun Pengesahan</label>
                                                            <input class="form-control" type="text" id="tahunpengesahanedit" name="tahunpengesahanedit">
                                                            <input class="form-control" type="hidden" id="idkphkedit" name="idkphkedit">
                                                            <input class="form-control" type="hidden" id="dokumenskhide" name="tangglpengesahanedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengesahan</label>
                                                            <input class="form-control" type="date" id="tangglpengesahanedit" name="tangglpengesahanedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama KPHK</label>
                                                            <input class="form-control" type="text" id="namakphkedit" name="namakphkedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas KPHK</label>
                                                            <input class="form-control" type="text" id="luaskphkedit" name="luaskphkedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <input class="form-control" type="text" id="provinsiedit" name="provinsiedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten/Kota KPHK</label>
                                                            <input class="form-control" type="text" id="kabupatenkotaedit" name="kabupatenkotaedit">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h3>SK KPHK</h3>
                                                            <label>Nama Kawasan</label>
                                                            <input class="form-control" type="text" id="namakawasanedit" name="namakawasanedit">
                                                            <label>Judul SK</label>
                                                            <input class="form-control" type="text" id="judulskedit" name="judulskedit">
                                                            <label>Nomor SK</label>
                                                            <input class="form-control" type="text" id="nomorskedit" name="nomorskedit">
                                                            <label>Tanggal SK</label>
                                                            <input class="form-control" type="date" id="tanggalskedit" name="tanggalskedit">
                                                            <label>Dokumen SK</label>
                                                            <input class="form-control" type="file" id="dokumenskedit" name="dokumenskedit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <table class="table" id="myTable">
                                        <thead>
                                            <th>Tahun Pengesahan</th>
                                            <th>Luas KPHK</th>
                                            <th>Provinsi</th>
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
                            url:'/deleteDatakphkNonTn/'+id,
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
                url:'/showDatakphkNonTn/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#tahunpengesahanedit' ).val(hasil.tahun_pengesahaan);
                    $( '#tanggalpengesahanedit' ).val(hasil.tanggal_pengesahaan);
                    $( '#namakphkedit' ).val(hasil.nama_kphk);
                    $( '#namakawasanedit' ).val(hasil.nama_kawasan);
                    $( '#luaskphkedit' ).val(hasil.luas_kphk);
                    $( '#provinsiedit' ).val(hasil.provinsi);
                    $( '#judulskedit' ).val(hasil.judul_sk);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                    $( '#kabupatenkotaedit' ).val(hasil.kabupaten_kota_kphk);
                    $( '#dokumenskhide' ).val(hasil.dokumen_sk);
                    $( '#idkphkedit' ).val(hasil.id);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDatakphkNonTn",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'tahun_pengesahaan' },
                            { data: 'luas_kphk' },
                            { data: 'provinsi' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('form[id="formkphknontnedit"]').validate({
                rules: {
                    tahunpengesahanedit:{
                        required:true,
                        number:true
                    },
                    provinsiedit: 'required',
                    kabupatenkotaedit: 'required',
                    tanggalpengesahanedit:'required',
                    namakphkedit:'required',
                    namakawasanedit:'required',
                    judulskedit: 'required',
                    nomorskedit: 'required',
                    tanggalskedit: 'required',
                    luaskphkedit: {
                        required: true,
                        number: true
                    }
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var file = $('#dokumenskedit')[0].files[0];
                    if(file == undefined){
                        var data;
                        data = new FormData();
                        data.append( 'tahunpengesahan', $( '#tahunpengesahanedit' ).val());
                        data.append( 'luaskphk', $( '#luaskphkedit' ).val());
                        data.append( 'provinsi', $( '#provinsiedit' ).val());
                        data.append( 'kabupaten_kota_kphk', $( '#kabupatenkotaedit' ).val());
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                        data.append( 'namakphk', $( '#namakphkedit' ).val());
                        data.append( 'tanggalpengesahan', $( '#tangglpengesahanedit' ).val());
                        data.append( 'namakawasan', $( '#namakawasanedit' ).val());
                        data.append( 'idkphk', $( '#idkphkedit' ).val());
                        data.append( 'dokumensk',  $( '#dokumenskhide' ).val());
                        data.append( 'status',  'filenotfound');
                        $.ajax({
                            url:'/updateDataKphkNonTn',
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
                                        $( '#tahunpengesahanedit' ).val('')
                                        $( '#luaskphkedit' ).val('')
                                        $( '#provinsiedit' ).val('')
                                        $( '#kabupatenkotaedit' ).val('')
                                        $( '#judulskedit' ).val('')
                                        $( '#nomorskedit' ).val('')
                                        $( '#tanggalskedit' ).val('')
                                        $( '#namakphkedit' ).val('')
                                        $( '#tangglpengesahanedit' ).val('')
                                        $( '#namakawasanedit' ).val('')
                                        $('#modals2').modal('toggle')
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }else{
                        var data;
                        data = new FormData();
                        data.append( 'dokumensk', $( '#dokumenskedit' )[0].files[0] );
                        data.append( 'tahunpengesahan', $( '#tahunpengesahanedit' ).val());
                        data.append( 'luaskphk', $( '#luaskphkedit' ).val());
                        data.append( 'provinsi', $( '#provinsiedit' ).val());
                        data.append( 'namakphk', $( '#namakphkedit' ).val());
                        data.append( 'tanggalpengesahan', $( '#tangglpengesahanedit' ).val());
                        data.append( 'namakawasan', $( '#namakawasanedit' ).val());
                        data.append( 'kabupaten_kota_kphk', $( '#kabupatenkotaedit' ).val());
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                        data.append( 'idkphk', $( '#idkphkedit' ).val());
                        $.ajax({
                            url:'/updateDataKphkNonTn',
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
                                        $( '#tahunpengesahanedit' ).val('')
                                        $( '#luaskphkedit' ).val('')
                                        $( '#provinsiedit' ).val('')
                                        $( '#kabupatenkotaedit' ).val('')
                                        $( '#judulskedit' ).val('')
                                        $( '#nomorskedit' ).val('')
                                        $( '#tanggalskedit' ).val('')
                                        $( '#namakphkedit' ).val('')
                                        $( '#tangglpengesahanedit' ).val('')
                                        $( '#namakawasanedit' ).val('')
                                        $('#modals2').modal('toggle')
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }
                }
            })
            $('form[id="formkphknontn"]').validate({
                rules: {
                    tahunpengesahan:{
                        required:true,
                        number:true
                    },
                    provinsi: 'required',
                    kabupatenkota: 'required',
                    tanggalpengesahan:'required',
                    namakphk:'required',
                    namakawasan:'required',
                    judulsk: 'required',
                    nomorsk: 'required',
                    tanggalsk: 'required',
                    luaskphk: {
                        required: true,
                        number: true
                    },
                    dokumensk:'required'
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'dokumensk', $( '#dokumensk' )[0].files[0] );
                    data.append( 'tahunpengesahan', $( '#tahunpengesahan' ).val());
                    data.append( 'tanggalpengesahan', $( '#tanggalpengesahan' ).val());
                    data.append( 'namakphk', $( '#namakphk' ).val());
                    data.append( 'namakawasan', $( '#namakawasan' ).val());
                    data.append( 'luaskphk', $( '#luaskphk' ).val());
                    data.append( 'provinsi', $( '#provinsi' ).val());
                    data.append( 'kabupaten_kota_kphk', $( '#kabupatenkota' ).val());
                    data.append( 'judulsk', $( '#judulsk' ).val());
                    data.append( 'nomorsk', $( '#nomorsk' ).val());
                    data.append( 'tanggalsk', $( '#tanggalsk' ).val());
                    $.ajax({
                        url:'/savedDatakphkNonTn',
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
                                    $( '#dokumensk' ).val('')
                                    $( '#tahunpengesahan' ).val('')
                                    $( '#tanggalpengesahan' ).val('')
                                    $( '#namakphk' ).val('')
                                    $( '#namakawasan' ).val('')
                                    $( '#luaskphk' ).val('')
                                    $( '#provinsi' ).val('')
                                    $( '#kabupatenkota' ).val('')
                                    $( '#judulsk' ).val('')
                                    $( '#nomorsk' ).val('')
                                    $( '#tanggalsk' ).val('')
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