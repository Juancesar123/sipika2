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
                            <h2 class="mr-4 mb-0">Perkembangan Blok TN</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Penataan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Perkembangan Blok TN</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Perkembangan Blok TN</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Perkembangan Blok TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formperkembaganbloktn">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5>Basic Info</h5>
                                                        <div class="form-group">
                                                            <label>Data Surat Keputusan Blok TN</label>
                                                            <select class="form-control" type="text" id="datasurat" name="datasurat">
                                                                    <option value="tes1">Tes 1</option>
                                                                    <option value="tes12">Tes 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Kawasan</label>
                                                            <input class="form-control" type="text" id="namakawasan" name="namakawasan">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label>Status Blok</label>
                                                            <select class="form-control" id="statusblok" name="statusblok">
                                                                <option value="ditetapkan">Ditetapkan</option>
                                                                <option value="revisi">Revisi</option>
                                                                <option value="dalam proses">Dalam Proses</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas</label>
                                                            <input class="form-control" type="text" id="luas" name="luas">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Penataan Kawasan</label>
                                                            <input class="form-control" type="file" id="penataankawasan" name="penataankawasan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Peta</label>
                                                            <input class="form-control" type="file" id="peta" name="peta">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label>Peta SHP</label>
                                                            <input class="form-control" type="file" id="petashp" name="petashp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <textarea class="form-control" type="text" id="deskripsi" name="deskripsi"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <h5>SK Blok</h5>
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
                                                    <div class="col-4">
                                                        <h5>Data Luas Blok</h5>
                                                        <div class="form-group">
                                                            <label>Blok Perlindungan (Ha)</label>
                                                            <input class="form-control" type="text" id="blokperlindungan" name="blokperlindungan">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label>Blok Pemanfaatan (Ha)</label>
                                                            <input class="form-control" type="text" id="blokpemanfaatan" name="blokpemanfaatan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Blok Koleksi (Ha)</label>
                                                            <input class="form-control" type="text" id="blokkoleksi" name="blokkoleksi">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label>Blok Perlindungan Bahari (Ha)</label>
                                                            <input class="form-control" type="text" id="blokperlindunganbahari" name="blokperlindunganbahari">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Blok Tradisional</label>
                                                            <input class="form-control" type="text" id="bloktradisional" name="bloktradisional">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Blok Rehabilitasi (Ha)</label>
                                                            <input class="form-control" type="text" id="blokrehabilitasi" name="blokrehabilitasi">
                                                        </div>
                                                         <div class="form-group">
                                                            <label>Blok Religi, Budaya, Sejarah (Ha)</label>
                                                            <input class="form-control" type="text" id="blokreligi" name="blokreligi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Blok Khusus (Ha)</label>
                                                            <input class="form-control" type="text" id="blokkhusus" name="blokkhusus">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Blok Lainnya</label>
                                                            <input class="form-control" type="text" id="bloklainnya" name="bloklainnya">
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
                                                <h5 class="modal-title" id="exampleModalLabel">Form Ubah Perkembangan Blok TN</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form id="formperkembaganbloktnedit">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label>Data Surat Keputusan Blok TN</label>
                                                                <select class="form-control" type="text" id="datasuratedit" name="datasuratedit">
                                                                        <option value="tes1">Tes 1</option>
                                                                        <option value="tes12">Tes 2</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kawasan</label>
                                                                <input class="form-control" type="text" id="namakawasanedit" name="namakawasanedit">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label>Status Blok</label>
                                                                <select class="form-control" id="statusblokedit" name="statusblokedit">
                                                                    <option value="ditetapkan">Ditetapkan</option>
                                                                    <option value="revisi">Revisi</option>
                                                                    <option value="dalam proses">Dalam Proses</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas</label>
                                                                <input class="form-control" type="text" id="luasedit" name="luasedit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Penataan Kawasan</label>
                                                                <input class="form-control" type="file" id="penataankawasanedit" name="penataankawasanedit">
                                                                <input type="hidden" id="penataankawasanhidden">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Peta</label>
                                                                <input class="form-control" type="file" id="petaedit" name="petaedit">
                                                                <input type="hidden" id="petahidden">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label>Peta SHP</label>
                                                                <input class="form-control" type="file" id="petashpedit" name="petashpedit">
                                                                <input type="hidden" id="petashphidden">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Deskripsi</label>
                                                                <textarea class="form-control" type="text" id="deskripsiedit" name="deskripsiedit"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h3>SK Blok</h3>
                                                                <label>Judul SK</label>
                                                                <input class="form-control" type="text" id="judulskedit" name="judulskedit">
                                                                <label>Nomor SK</label>
                                                                <input class="form-control" type="text" id="nomorskedit" name="nomorskedit">
                                                                <label>Tanggal SK</label>
                                                                <input class="form-control" type="date" id="tanggalskedit" name="tanggalskedit">
                                                                <label>Dokumen SK</label>
                                                                <input class="form-control" type="file" id="dokumenskedit" name="dokumenskedit">
                                                                <input type="hidden" id="dokumenskhidden">
                                                                <input type="hidden" id="idperkembanganbloktn" name="idperkembanganbloktn">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label>Blok Perlindungan (Ha)</label>
                                                                <input class="form-control" type="text" id="blokperlindunganedit" name="blokperlindunganedit">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label>Blok Pemanfaatan (Ha)</label>
                                                                <input class="form-control" type="text" id="blokpemanfaatanedit" name="blokpemanfaatanedit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Blok Koleksi (Ha)</label>
                                                                <input class="form-control" type="text" id="blokkoleksiedit" name="blokkoleksiedit">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label>Blok Perlindungan Bahari (Ha)</label>
                                                                <input class="form-control" type="text" id="blokperlindunganbahariedit" name="blokperlindunganbahariedit">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Blok Tradisional</label>
                                                                <input class="form-control" type="text" id="bloktradisionaledit" name="bloktradisionaledit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Blok Rehabilitasi (Ha)</label>
                                                                <input class="form-control" type="text" id="blokrehabilitasiedit" name="blokrehabilitasiedit">
                                                            </div>
                                                             <div class="form-group">
                                                                <label>Blok Religi, Budaya, Sejarah (Ha)</label>
                                                                <input class="form-control" type="text" id="blokreligiedit" name="blokreligiedit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Blok Khusus (Ha)</label>
                                                                <input class="form-control" type="text" id="blokkhususedit" name="blokkhususedit">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Blok Lainnya</label>
                                                                <input class="form-control" type="text" id="bloklainnyaedit" name="bloklainnyaedit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                    <table class="table display" id="myTable" style="width: 100%">
                                        <thead>
                                            <th>Data Surat</th>
                                            <th>Nama Kawasan</th>
                                            <th>Status Blok</th>
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
                            url:'/deletePerkembanganbloktn/'+id,
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
                url:'/showDataPerkembanganbloktn/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#datasuratedit' ).val(hasil.datasurat);
                    $( '#namakawasanedit' ).val(hasil.nama_kawasan);
                    $( '#statusblokedit' ).val(hasil.status_blok);
                    $('#luasedit').val(hasil.luas);
                    $( '#penataankawasanhidden' ).val(hasil.penataan_kawasan);
                    $( '#petahidden' ).val(hasil.peta);
                    $( '#petashphidden' ).val(hasil.petashp);
                    $( '#deskripsiedit' ).val(hasil.deskripsi);
                    $('#judulskedit').val(hasil.judul_sk);
                    $( '#dokumenskhidden' ).val(hasil.dokumen_sk);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#blokperlindunganedit' ).val(hasil.blok_perlindungan);
                    $( '#blokpemanfaatanedit' ).val(hasil.blok_pemanfaatan);
                    $( '#blokreligiedit' ).val(hasil.blok_religi);
                    $( '#blokkoleksiedit' ).val(hasil.blok_koleksi);
                    $( '#bloktradisionaledit' ).val(hasil.blok_tradisional);
                    $( '#blokperlindunganbahariedit' ).val(hasil.blok_perlindungan_bahari);
                    $( '#blokkhususedit' ).val(hasil.blok_khusus);
                    $( '#bloklainnyaedit' ).val(hasil.blok_lainnya);
                    $( '#blokrehabilitasiedit' ).val(hasil.blok_rehabilitasi);
                    $( '#idperkembanganbloktn' ).val(hasil.id);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataPerkembanganbloktn",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'datasurat' },
                            { data: 'nama_kawasan' },
                            { data: 'status_blok' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('form[id="formperkembaganbloktnedit"]').validate({
                rules: {
                    luasedit:{
                        required:true,
                        number:true
                    },
                    datasuratedit: 'required',
                    namakawasanedit: 'required',
                    statusblokedit:'required',
                    judulskedit:'required',
                    nomorskedit: 'required',
                    tanggalskedit:'required',
                    deskripsiedit:'required',
                    blokperlindunganedit:{
                        required:true,
                        number:true,
                    },
                    blokpemanfaatanedit:{
                        required:true,
                        number:true,
                    },
                    blokreligiedit:{
                        required:true,
                        number:true,
                    },
                    bloktradisionaledit:{
                        required:true,
                        number:true,
                    },
                    blokkoleksiedit:{
                        required:true,
                        number:true,
                    },
                    blokperlindunganbahariedit:{
                        required:true,
                        number:true,
                    },
                    blokrehabilitasiedit:{
                        required:true,
                        number:true,
                    },
                    blokkhususedit:{
                        required:true,
                        number:true,
                    },
                    bloklainnyaedit:{
                        required:true,
                        number:true,
                    },
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var file = $('#dokumenskedit')[0].files[0];
                    if(file == undefined){
                        var data;
                        data = new FormData();
                        data.append( 'dokumensk', $( '#dokumenskhidden' ).val());
                        data.append( 'datasurat', $( '#datasuratedit' ).val());
                        data.append( 'namakawasan', $( '#namakawasanedit' ).val());
                        data.append( 'luas', $( '#luasedit' ).val());
                        data.append( 'statusblok', $( '#statusblokedit' ).val());
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                        data.append( 'penataankawasan', $( '#penataankawasanhidden' ).val() );
                        data.append( 'peta', $( '#petahidden' ).val() );
                        data.append( 'petashp', $( '#petashphidden' ).val() );
                        data.append( 'deskripsi', $( '#deskripsiedit' ).val());
                        data.append( 'blokperlindungan', $( '#blokperlindunganedit' ).val());
                        data.append( 'blokpemanfaatan', $( '#blokpemanfaatanedit' ).val());
                        data.append( 'bloktradisional', $( '#bloktradisionaledit' ).val());
                        data.append( 'blokreligi', $( '#blokreligiedit' ).val());
                        data.append( 'blokkoleksi', $( '#blokkoleksiedit' ).val());
                        data.append( 'blokperlindunganbahari', $( '#blokperlindunganbahariedit' ).val());
                        data.append( 'blokrehabilitasi', $( '#blokrehabilitasiedit' ).val());
                        data.append( 'blokkhusus', $( '#blokkhususedit' ).val());
                        data.append( 'bloklainnya', $( '#bloklainnyaedit' ).val());
                        data.append('idperkembanganbloktn',$("#idperkembanganbloktn").val());
                        data.append( 'status',  'filenotfound');
                        $.ajax({
                            url:'/updateDataPerkembanganbloktn',
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
                                        $( '#dokumenskedit' ).val('')
                                        $( '#datasuratedit' ).val('')
                                        $( '#namakawasanedit' ).val('')
                                        $( '#luasedit' ).val('')
                                        $( '#statusblokedit' ).val('')
                                        $( '#judulskedit' ).val('')
                                        $( '#nomorskedit' ).val('')
                                        $( '#tanggalskedit' ).val('')
                                        $( '#penataankawasanedit' ).val('')
                                        $( '#petashpedit' ).val('')
                                        $( '#deskripsiedit' ).val('')
                                        $( '#blokperlindunganedit' ).val('')
                                        $( '#blokpemanfaatanedit' ).val('')
                                        $( '#bloktradisionaledit' ).val('')
                                        $( '#blokreligiedit' ).val('')
                                        $( '#blokkoleksiedit' ).val('')
                                        $( '#blokperlindunganbahariedit' ).val('')
                                        $( '#blokrehabilitasiedit' ).val('')
                                        $( '#blokkhususedit' ).val('')
                                        $( '#bloklainnyaedit' ).val('')
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }else{
                        var data;
                        data = new FormData();
                        data.append( 'dokumensk', $( '#dokumenskedit' )[0].files[0]);
                        data.append( 'datasurat', $( '#datasuratedit' ).val());
                        data.append( 'namakawasan', $( '#namakawasanedit' ).val());
                        data.append( 'luas', $( '#luasedit' ).val());
                        data.append( 'statusblok', $( '#statusblokedit' ).val());
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                        data.append( 'penataankawasan', $( '#penataankawasanedit' )[0].files[0] );
                        data.append( 'peta', $( '#petaedit' )[0].files[0] );
                        data.append( 'petashp', $( '#petashpedit' )[0].files[0] );
                        data.append( 'deskripsi', $( '#deskripsiedit' ).val());
                        data.append( 'blokperlindungan', $( '#blokperlindunganedit' ).val());
                        data.append( 'blokpemanfaatan', $( '#blokpemanfaatanedit' ).val());
                        data.append( 'bloktradisional', $( '#bloktradisionaledit' ).val());
                        data.append( 'blokreligi', $( '#blokreligiedit' ).val());
                        data.append( 'blokkoleksi', $( '#blokkoleksiedit' ).val());
                        data.append( 'blokperlindunganbahari', $( '#blokperlindunganbahariedit' ).val());
                        data.append( 'blokrehabilitasi', $( '#blokrehabilitasiedit' ).val());
                        data.append( 'blokkhusus', $( '#blokkhususedit' ).val());
                        data.append( 'bloklainnya', $( '#bloklainnyaedit' ).val());
                        data.append('idperkembanganbloktn',$("#idperkembanganbloktn").val());
                        $.ajax({
                            url:'/updateDataPerkembanganbloktn',
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
                                        $( '#dokumenskedit' ).val('')
                                        $( '#datasuratedit' ).val('')
                                        $( '#namakawasanedit' ).val('')
                                        $( '#luasedit' ).val('')
                                        $( '#statusblokedit' ).val('')
                                        $( '#judulskedit' ).val('')
                                        $( '#nomorskedit' ).val('')
                                        $( '#tanggalskedit' ).val('')
                                        $( '#penataankawasanedit' ).val('')
                                        $( '#petashpedit' ).val('')
                                        $( '#deskripsiedit' ).val('')
                                        $( '#blokperlindunganedit' ).val('')
                                        $( '#blokpemanfaatanedit' ).val('')
                                        $( '#bloktradisionaledit' ).val('')
                                        $( '#blokreligiedit' ).val('')
                                        $( '#blokkoleksiedit' ).val('')
                                        $( '#blokperlindunganbahariedit' ).val('')
                                        $( '#blokrehabilitasiedit' ).val('')
                                        $( '#blokkhususedit' ).val('')
                                        $( '#bloklainnyaedit' ).val('')
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }
                }
            })
            $('form[id="formperkembaganbloktn"]').validate({
                    rules: {
                        luas:{
                            required:true,
                            number:true
                        },
                        datasurat: 'required',
                        namakawasan: 'required',
                        statusblok:'required',
                        judulsk:'required',
                        nomorsk: 'required',
                        tanggalsk:'required',
                        penataankawasan:'required',
                        peta:'required',
                        petashp:'required',
                        deskripsi:'required',
                        blokperlindungan:{
                            required:true,
                            number:true,
                        },
                        blokpemanfaatan:{
                            required:true,
                            number:true,
                        },
                        blokreligi:{
                            required:true,
                            number:true,
                        },
                        bloktradisional:{
                            required:true,
                            number:true,
                        },
                        blokkoleksi:{
                            required:true,
                            number:true,
                        },
                        blokperlindunganbahari:{
                            required:true,
                            number:true,
                        },
                        blokrehabilitasi:{
                            required:true,
                            number:true,
                        },
                        blokkhusus:{
                            required:true,
                            number:true,
                        },
                        bloklainnya:{
                            required:true,
                            number:true,
                        },
                    },
                    messages: {
                        judul: 'This field is required',

                    },
                    submitHandler: function(form) {
                        var data;
                        data = new FormData();
                        data.append( 'dokumensk', $( '#dokumensk' )[0].files[0]);
                        data.append( 'datasurat', $( '#datasurat' ).val());
                        data.append( 'namakawasan', $( '#namakawasan' ).val());
                        data.append( 'luas', $( '#luas' ).val());
                        data.append( 'statusblok', $( '#statusblok' ).val());
                        data.append( 'judulsk', $( '#judulsk' ).val());
                        data.append( 'nomorsk', $( '#nomorsk' ).val());
                        data.append( 'tanggalsk', $( '#tanggalsk' ).val());
                        data.append( 'penataankawasan', $( '#penataankawasan' )[0].files[0] );
                        data.append( 'peta', $( '#peta' )[0].files[0] );
                        data.append( 'petashp', $( '#petashp' )[0].files[0] );
                        data.append( 'deskripsi', $( '#deskripsi' ).val());
                        data.append( 'blokperlindungan', $( '#blokperlindungan' ).val());
                        data.append( 'blokpemanfaatan', $( '#blokpemanfaatan' ).val());
                        data.append( 'bloktradisional', $( '#bloktradisional' ).val());
                        data.append( 'blokreligi', $( '#blokreligi' ).val());
                        data.append( 'blokkoleksi', $( '#blokkoleksi' ).val());
                        data.append( 'blokperlindunganbahari', $( '#blokperlindunganbahari' ).val());
                        data.append( 'blokrehabilitasi', $( '#blokrehabilitasi' ).val());
                        data.append( 'blokkhusus', $( '#blokkhusus' ).val());
                        data.append( 'bloklainnya', $( '#bloklainnya' ).val());
                        $.ajax({
                            url:'/savedDataperkembanganbloktn',
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
                                        $( '#datasurat' ).val('')
                                        $( '#namakawasan' ).val('')
                                        $( '#luas' ).val('')
                                        $( '#statuszonasi' ).val('')
                                        $( '#judulsk' ).val('')
                                        $( '#nomorsk' ).val('')
                                        $( '#tanggalsk' ).val('')
                                        $( '#penataankawasan' ).val('')
                                        $( '#petashp' ).val('')
                                        $( '#deskripsi' ).val('')
                                        $( '#blokinti' ).val('')
                                        $( '#blokpemanfaatan' ).val('')
                                        $( '#bloktradisional' ).val('')
                                        $( '#blokreligi' ).val('')
                                        $( '#blokrimba' ).val('')
                                        $( '#blokperlindunganbahari' ).val('')
                                        $( '#blokrehabilitasi' ).val('')
                                        $( '#blokkhusus' ).val('')
                                        $( '#bloklainnya' ).val('')
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