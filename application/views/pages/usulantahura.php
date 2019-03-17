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
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <input class="form-control" type="text" id="provinsi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten / Kota</label>
                                                        <input class="form-control" type="text" id="kabupaten_kota">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pengusul</label>
                                                        <input class="form-control" type="text" id="pengusul">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Lokasi</label>
                                                        <input class="form-control" type="text" id="lokasi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Luas</label>
                                                        <input class="form-control" type="text" id="luas">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fungsi Hutan / Kawasan</label>
                                                        <input class="form-control" type="text" id="fungsi_hutan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Peta (.jpg)</label>
                                                        <input class="form-control" type="file" id="peta">
                                                    </div>
                                                </div>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah KPHK Non TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Tahun Pengesahan</label>
                                                <input class="form-control" type="text" id="tahunpengesahanedit">
                                                <input class="form-control" type="hidden" id="idkphkedit">
                                                <input class="form-control" type="hidden" id="dokumenskhide">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Pengesahan</label>
                                                <input class="form-control" type="date" id="tangglpengesahanedit">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama KPHK</label>
                                                <input class="form-control" type="text" id="namakphkedit">
                                            </div>
                                            <div class="form-group">
                                                <label>Luas KPHK</label>
                                                <input class="form-control" type="text" id="luaskphkedit">
                                            </div>
                                            <div class="form-group">
                                                <label>Provinsi</label>
                                                <input class="form-control" type="text" id="provinsiedit">
                                            </div>
                                            <div class="form-group">
                                                <label>Kabupaten/Kota KPHK</label>
                                                <input class="form-control" type="text" id="kabupatenkotaedit">
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
            $('#UpdateData').click(function(){
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
                                )
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
                                )
                                table.ajax.reload();
                        }
                    })
                }
            })
            $('#SaveData').click(function(){
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
                            )
                            table.ajax.reload();
                    }
                })
            })
        })
    </script>
</body>
</html>