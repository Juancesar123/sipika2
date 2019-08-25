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
                            <h2 class="mr-4 mb-0">Perkembangan Zonasi TN</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Penataan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Perkembangan Zonasi TN</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Perkembangan Zonasi TN</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Perkembangan Zonasi TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formperkembanganzonasiTn">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5>Basic Info</h5>
                                                        <div class="form-group">
                                                            <label>Data Surat Keputusan Zonasi Taman Nasional</label>
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
                                                            <label>Status Zonasi</label>
                                                            <select class="form-control" id="statuszonasi" name="statuszonasi">
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
                                                            <input class="form-control" type="file" id="petashp"name="petashp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <textarea class="form-control" type="text" id="deskripsi" name="deskripsi"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <h5>SK Perkembangan Zonasi Tn</h5>
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
                                                         <h5>Data Luas Zona</h5>
                                                        <div class="form-group">
                                                            <label>Zona Inti (Ha)</label>
                                                            <input class="form-control" type="text" id="zonainti" name="zonainti">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label>Zona Pemanfaatan (Ha)</label>
                                                            <input class="form-control" type="text" id="zonapemanfaatan" name="zonapemanfaatan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Tradisional (Ha)</label>
                                                            <input class="form-control" type="text" id="zonatradisional" name="zonatradisional">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Religi, Budaya, Sejarah (Ha)</label>
                                                            <input class="form-control" type="text" id="zonareligi" name="zonareligi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Rimba</label>
                                                            <input class="form-control" type="text" id="zonarimba" name="zonarimba">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Perlindungan Bahari (Ha)</label>
                                                            <input class="form-control" type="text" id="zonaperlindunganbahari" name="zonaperlindunganbahari">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Rehabilitasi (Ha)</label>
                                                            <input class="form-control" type="text" id="zonarehabilitasi" name="zonarehabilitasi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Khusus (Ha)</label>
                                                            <input class="form-control" type="text" id="zonakhusus" name="zonakhusus">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Lainnya</label>
                                                            <input class="form-control" type="text" id="zonalainnya" name="zonalainnya">
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Perkembangan Zonasi TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formperkembanganzonasiTnedit">
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-4">
                                                        <h5>Basic Info</h5>
                                                        <div class="form-group">
                                                            <label>Data Surat Keputusan Zonasi Taman Nasional</label>
                                                            <select class="form-control" type="text" id="datasuratedit" name="datasuratedit">
                                                                    <option value="tes1">Tes 1</option>
                                                                    <option value="tes12">Tes 2</option>
                                                            </select>
                                                            <input type="hidden" id="idperkembanganzonasitn">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Kawasan</label>
                                                            <input class="form-control" type="text" id="namakawasanedit" name="">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label>Status Zonasi</label>
                                                            <select class="form-control" id="statuszonasiedit" name="">
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
                                                            <input class="form-control" type="file" id="penataankawasanedit"name="penataankawasanedit">
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
                                                            <textarea class="form-control" type="text" id="deskripsiedit"name="deskripsiedit"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <h5>SK Zonasi TN</h5>
                                                            <label>Judul SK</label>
                                                            <input class="form-control" type="text" id="judulskedit" name="judulskedit">
                                                            <label>Nomor SK</label>
                                                            <input class="form-control" type="text" id="nomorskedit" name="nomorskedit">
                                                            <label>Tanggal SK</label>
                                                            <input class="form-control" type="date" id="tanggalskedit" name="tanggalskedit">
                                                            <label>Dokumen SK</label>
                                                            <input class="form-control" type="file" id="dokumenskedit" name="dokumenskedit">
                                                            <input type="hidden" name="dokumenskhidden">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5>Data Luas Zona</h5>
                                                        <div class="form-group">
                                                            <label>Zona Inti (Ha)</label>
                                                            <input class="form-control" type="text" id="zonaintiedit" name="zonaintiedit">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label>Zona Pemanfaatan (Ha)</label>
                                                            <input class="form-control" type="text" id="zonapemanfaatanedit" name="zonapemanfaatanedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Tradisional (Ha)</label>
                                                            <input class="form-control" type="text" id="zonatradisionaledit" name="zonatradisionaledit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Religi, Budaya, Sejarah (Ha)</label>
                                                            <input class="form-control" type="text" id="zonareligiedit" name="zonareligiedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Rimba</label>
                                                            <input class="form-control" type="text" id="zonarimbaedit" name="zonarimbaedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Perlindungan Bahari (Ha)</label>
                                                            <input class="form-control" type="text" id="zonaperlindunganbahariedit" name="zonaperlindunganbahariedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Rehabilitasi (Ha)</label>
                                                            <input class="form-control" type="text" id="zonarehabilitasiedit" name="zonarehabilitasiedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Khusus (Ha)</label>
                                                            <input class="form-control" type="text" id="zonakhususedit" name="zonakhususedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zona Lainnya</label>
                                                            <input class="form-control" type="text" id="zonalainnyaedit" name="zonalainnyaedit">
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
                                    <table class="table display" id="myTable" style="width: 100%">
                                        <thead>
                                            <th>Data Surat</th>
                                            <th>Nama Kawasan</th>
                                            <th>Status Zonasi</th>
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
                            url:'/deletePerkembanganZonasiTn/'+id,
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
                url:'/showDataPerkembanganzonasiTn/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#datasuratedit' ).val(hasil.datasurat);
                    $( '#namakawasanedit' ).val(hasil.nama_kawasan);
                    $( '#statuszonasiedit' ).val(hasil.status_zonasi);
                    $( '#luasedit' ).val(hasil.luas);
                    $( '#deskripsiedit' ).val(hasil.deskripsi);
                    $( '#judulskedit' ).val(hasil.judul_sk);
                    $( '#penataankawasanhidden' ).val(hasil.penataan_kawasan);
                    $( '#petahidden' ).val(hasil.peta);
                    $( '#petashphidden' ).val(hasil.peta_shp);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                    $( '#dokumenskhidden' ).val(hasil.dokumen_sk);
                    $( '#zonaintiedit' ).val(hasil.zona_inti);
                    $( '#zonapemanfaatanedit' ).val(hasil.zona_pemanfaatan);
                    $( '#zonatradisionaledit' ).val(hasil.zona_tradisional);
                    $( '#zonareligiedit' ).val(hasil.zona_religi);
                    $( '#zonarimbaedit' ).val(hasil.zona_rimba);
                    $( '#zonaperlindunganbahariedit' ).val(hasil.zona_perlindungan);
                    $( '#zonarehabilitasiedit' ).val(hasil.zona_rehabilitasi);
                    $( '#zonakhususedit' ).val(hasil.zona_khusus);
                     $( '#zonalainnyaedit' ).val(hasil.zona_lainnya);
                    $( '#idperkembanganzonasitn' ).val(hasil.id);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataPerkembanganzonasiTn",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'datasurat' },
                            { data: 'nama_kawasan' },
                            { data: 'status_zonasi' },                            	
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            
            $('form[id="formperkembanganzonasiTnedit"]').validate({
                    rules: {
                        luasedit:{
                            required:true,
                            number:true
                        },
                        datasuratedit: 'required',
                        namakawasanedit: 'required',
                        statuszonasiedit:'required',
                        judulskedit:'required',
                        nomorskedit: 'required',
                        tanggalskedit:'required',
                        deskripsiedit:'required',
                        zonaintiedit:{
                            required:true,
                            number:true
                        },
                        zonapemanfaatanedit:{
                            required:true,
                            number:true
                        },
                        zonareligiedit:{
                            required:true,
                            number:true
                        },
                        zonarimbaedit:{
                            required:true,
                            number:true
                        },
                        zonaperlindunganbahariedit:{
                            required:true,
                            number:true
                        },
                        zonarehabilitasiedit:{
                            required:true,
                            number:true
                        },
                        zonakhususedit:{
                            required:true,
                            number:true
                        },
                        zonalainnyaedit:{
                            required:true,
                            number:true
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
                            data.append( 'statuszonasi', $( '#statuszonasiedit' ).val());
                            data.append( 'judulsk', $( '#judulskedit' ).val());
                            data.append( 'nomorsk', $( '#nomorskedit' ).val());
                            data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                            data.append( 'penataankawasan', $( '#penataankawasanhidden' ).val());
                            data.append( 'peta', $( '#petahidden' ).val());
                            data.append( 'petashp', $( '#petashphidden' ).val());
                            data.append( 'deskripsi', $( '#deskripsiedit' ).val());
                            data.append( 'zonainti', $( '#zonaintiedit' ).val());
                            data.append( 'zonapemanfaatan', $( '#zonapemanfaatanedit' ).val());
                            data.append( 'zonatradisional', $( '#zonatradisionaledit' ).val());
                            data.append( 'zonareligi', $( '#zonareligiedit' ).val());
                            data.append( 'zonarimba', $( '#zonarimbaedit' ).val());
                            data.append( 'zonaperlindunganbahari', $( '#zonaperlindunganbahariedit' ).val());
                            data.append( 'zonarehabilitasi', $( '#zonarehabilitasiedit' ).val());
                            data.append( 'zonakhusus', $( '#zonakhususedit' ).val());
                            data.append( 'zonalainnya', $( '#zonalainnyaedit' ).val());
                            data.append('idperkembanganzonasitn',$('#idperkembanganzonasitn').val());
                            data.append( 'status', 'filenotfound');
                            $.ajax({
                                url:'/updateDataPerkembanganzonasitn',
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
                                            $( '#statuszonasiedit' ).val('')
                                            $( '#judulskedit' ).val('')
                                            $( '#nomorskedit' ).val('')
                                            $( '#tanggalskedit' ).val('')
                                            $( '#penataankawasanedit' ).val('')
                                            $( '#petashpedit' ).val('')
                                            $( '#deskripsiedit' ).val('')
                                            $( '#dataluaszonaedit' ).val('')
                                            $( '#zonaintiedit' ).val('')
                                            $( '#zonapemanfaatanedit' ).val('')
                                            $( '#zonatradisionaledit' ).val('')
                                            $( '#zonareligiedit' ).val('')
                                            $( '#zonarimbaedit' ).val('')
                                            $( '#zonaperlindunganbahariedit' ).val('')
                                            $( '#zonarehabilitasiedit' ).val('')
                                            $( '#zonakhususedit' ).val('')
                                            $( '#zonalainnyaedit' ).val('')
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
                            data.append( 'statuszonasi', $( '#statuszonasiedit' ).val());
                            data.append( 'judulsk', $( '#judulskedit' ).val());
                            data.append( 'nomorsk', $( '#nomorskedit' ).val());
                            data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                            data.append( 'penataankawasan', $( '#penataankawasanedit' )[0].files[0] );
                            data.append( 'peta', $( '#petaedit' )[0].files[0] );
                            data.append( 'petashp', $( '#petashpedit' )[0].files[0] );
                            data.append( 'deskripsi', $( '#deskripsiedit' ).val());
                            data.append( 'zonainti', $( '#zonaintiedit' ).val());
                            data.append( 'zonapemanfaatan', $( '#zonapemanfaatanedit' ).val());
                            data.append( 'zonatradisional', $( '#zonatradisionaledit' ).val());
                            data.append( 'zonareligi', $( '#zonareligiedit' ).val());
                            data.append( 'zonarimba', $( '#zonarimbaedit' ).val());
                            data.append( 'zonaperlindunganbahari', $( '#zonaperlindunganbahariedit' ).val());
                            data.append( 'zonarehabilitasi', $( '#zonarehabilitasiedit' ).val());
                            data.append( 'zonakhusus', $( '#zonakhususedit' ).val());
                            data.append( 'zonalainnya', $( '#zonalainnyaedit' ).val());
                            data.append('idperkembanganzonasitn',$('#idperkembanganzonasitn').val());
                            $.ajax({
                                url:'/updateDataPerkembanganzonasitn',
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
                                            $( '#statuszonasiedit' ).val('')
                                            $( '#judulskedit' ).val('')
                                            $( '#nomorskedit' ).val('')
                                            $( '#tanggalskedit' ).val('')
                                            $( '#penataankawasanedit' ).val('')
                                            $( '#petashpedit' ).val('')
                                            $( '#deskripsiedit' ).val('')
                                            $( '#dataluaszonaedit' ).val('')
                                            $( '#zonaintiedit' ).val('')
                                            $( '#zonapemanfaatanedit' ).val('')
                                            $( '#zonatradisionaledit' ).val('')
                                            $( '#zonareligiedit' ).val('')
                                            $( '#zonarimbaedit' ).val('')
                                            $( '#zonaperlindunganbahariedit' ).val('')
                                            $( '#zonarehabilitasiedit' ).val('')
                                            $( '#zonakhususedit' ).val('')
                                            $( '#zonalainnyaedit' ).val('')
                                            $('#modals2').modal('toggle');
                                        })
                                        table.ajax.reload();
                                }
                            })
                        }
                    }
            });
            $('form[id="formperkembanganzonasiTn"]').validate({
                    rules: {
                        luas:{
                            required:true,
                            number:true
                        },
                        datasurat: 'required',
                        namakawasan: 'required',
                        statuszonasi:'required',
                        judulsk:'required',
                        nomorsk: 'required',
                        tanggalsk:'required',
                        penataankawasan:'required',
                        peta:'required',
                        petashp:'required',
                        deskripsi:'required',
                        zonainti:{
                            required:true,
                            number:true
                        },
                        zonapemanfaatan:{
                            required:true,
                            number:true
                        },
                        zonareligi:{
                            required:true,
                            number:true
                        },
                        zonarimba:{
                            required:true,
                            number:true
                        },
                        zonaperlindunganbahari:{
                            required:true,
                            number:true
                        },
                        zonarehabilitasi:{
                            required:true,
                            number:true
                        },
                        zonakhusus:{
                            required:true,
                            number:true
                        },
                        zonalainnya:{
                            required:true,
                            number:true
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
                        data.append( 'statuszonasi', $( '#statuszonasi' ).val());
                        data.append( 'judulsk', $( '#judulsk' ).val());
                        data.append( 'nomorsk', $( '#nomorsk' ).val());
                        data.append( 'tanggalsk', $( '#tanggalsk' ).val());
                        data.append( 'penataankawasan', $( '#penataankawasan' )[0].files[0] );
                        data.append( 'peta', $( '#peta' )[0].files[0] );
                        data.append( 'petashp', $( '#petashp' )[0].files[0] );
                        data.append( 'deskripsi', $( '#deskripsi' ).val());
                        data.append( 'zonainti', $( '#zonainti' ).val());
                        data.append( 'zonapemanfaatan', $( '#zonapemanfaatan' ).val());
                        data.append( 'zonatradisional', $( '#zonatradisional' ).val());
                        data.append( 'zonareligi', $( '#zonareligi' ).val());
                        data.append( 'zonarimba', $( '#zonarimba' ).val());
                        data.append( 'zonaperlindunganbahari', $( '#zonaperlindunganbahari' ).val());
                        data.append( 'zonarehabilitasi', $( '#zonarehabilitasi' ).val());
                        data.append( 'zonakhusus', $( '#zonakhusus' ).val());
                        data.append( 'zonalainnya', $( '#zonalainnya' ).val());
                        $.ajax({
                            url:'/savedDataperkembanganzonasitn',
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
                                        $( '#dataluaszona' ).val('')
                                        $( '#zonainti' ).val('')
                                        $( '#zonapemanfaatan' ).val('')
                                        $( '#zonatradisional' ).val('')
                                        $( '#zonareligi' ).val('')
                                        $( '#zonarimba' ).val('')
                                        $( '#zonaperlindunganbahari' ).val('')
                                        $( '#zonarehabilitasi' ).val('')
                                        $( '#zonakhusus' ).val('')
                                        $( '#zonalainnya' ).val('')
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