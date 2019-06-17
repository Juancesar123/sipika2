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
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Data Surat Keputusan Zonasi Taman Nasional</label>
                                                        <input class="form-control" type="text" id="datasurat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" type="text" id="namakawasan">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Status Zonasi</label>
                                                        <select class="form-control" id="statuszonasi">
                                                            <option value="ditetapkan">Ditetapkan</option>
                                                            <option value="revisi">Revisi</option>
                                                            <option value="dalam proses">Dalam Proses</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Luas</label>
                                                        <input class="form-control" type="text" id="luas">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h3>SK Zonasi KPHK TN</h3>
                                                        <label>Judul SK</label>
                                                        <input class="form-control" type="text" id="judulsk">
                                                        <label>Nomor SK</label>
                                                        <input class="form-control" type="text" id="nomorsk">
                                                        <label>Tanggal SK</label>
                                                        <input class="form-control" type="date" id="tanggalsk">
                                                        <label>Dokumen SK</label>
                                                        <input class="form-control" type="file" id="dokumensk">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Penataan Kawasan</label>
                                                        <input class="form-control" type="file" id="penataankawasan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Peta</label>
                                                        <input class="form-control" type="file" id="peta">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Peta SHP</label>
                                                        <input class="form-control" type="file" id="petashp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control" type="text" id="deskripsi"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Data Luas Zona</label>
                                                        <input class="form-control" type="text" id="dataluaszona">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Inti (Ha)</label>
                                                        <input class="form-control" type="text" id="zonainti">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Zona Pemanfaatan (Ha)</label>
                                                        <input class="form-control" type="text" id="zonapemanfaatan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Tradisional (Ha)</label>
                                                        <input class="form-control" type="text" id="zonatradisional">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Religi, Budaya, Sejarah (Ha)</label>
                                                        <input class="form-control" type="text" id="zonareligi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Rimba</label>
                                                        <input class="form-control" type="text" id="zonarimba">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Perlindungan Bahari (Ha)</label>
                                                        <input class="form-control" type="text" id="zonaperlindunganbahari">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Rehabilitasi (Ha)</label>
                                                        <input class="form-control" type="text" id="zonarehabilitasi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Khusus (Ha)</label>
                                                        <input class="form-control" type="text" id="zonakhusus">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Lainnya</label>
                                                        <input class="form-control" type="text" id="zonalainnya">
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Perkembangan Zonasi TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Data Surat Keputusan Zonasi Taman Nasional</label>
                                                        <input class="form-control" type="text" id="datasurat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Kawasan</label>
                                                        <input class="form-control" type="text" id="namakawasan">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Status Zonasi</label>
                                                        <select class="form-control" id="statuszonasi">
                                                            <option value="ditetapkan">Ditetapkan</option>
                                                            <option value="revisi">Revisi</option>
                                                            <option value="dalam proses">Dalam Proses</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Luas</label>
                                                        <input class="form-control" type="text" id="luas">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h3>SK Zonasi KPHK TN</h3>
                                                        <label>Judul SK</label>
                                                        <input class="form-control" type="text" id="judulsk">
                                                        <label>Nomor SK</label>
                                                        <input class="form-control" type="text" id="nomorsk">
                                                        <label>Tanggal SK</label>
                                                        <input class="form-control" type="date" id="tanggalsk">
                                                        <label>Dokumen SK</label>
                                                        <input class="form-control" type="file" id="dokumensk">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Penataan Kawasan</label>
                                                        <input class="form-control" type="file" id="penataankawasan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Peta</label>
                                                        <input class="form-control" type="file" id="peta">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Peta SHP</label>
                                                        <input class="form-control" type="file" id="petashp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control" type="text" id="deskripsi"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Data Luas Zona</label>
                                                        <input class="form-control" type="text" id="dataluaszona">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Inti (Ha)</label>
                                                        <input class="form-control" type="text" id="zonainti">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Zona Pemanfaatan (Ha)</label>
                                                        <input class="form-control" type="text" id="zonapemanfaatan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Tradisional (Ha)</label>
                                                        <input class="form-control" type="text" id="zonatradisional">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Religi, Budaya, Sejarah (Ha)</label>
                                                        <input class="form-control" type="text" id="zonareligi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Rimba</label>
                                                        <input class="form-control" type="text" id="zonarimba">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Perlindungan Bahari (Ha)</label>
                                                        <input class="form-control" type="text" id="zonaperlindunganbahari">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Rehabilitasi (Ha)</label>
                                                        <input class="form-control" type="text" id="zonarehabilitasi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Khusus (Ha)</label>
                                                        <input class="form-control" type="text" id="zonakhusus">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zona Lainnya</label>
                                                        <input class="form-control" type="text" id="zonalainnya">
                                                    </div>
                                                </div>
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
                url:'/showDatakphkTn/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    console.log(hasil.master_provinsi.kode);
                    $( '#tahunpengesahanedit' ).val(hasil.tahun_pengesahaan);
                    $( '#luaskphkedit' ).val(hasil.luas_kphk);
                    $( '#provinsiedit' ).val(hasil.master_provinsi.kode);
                    $('#provinsiedit').select2().trigger('change');
                    $( '#judulskedit' ).val(hasil.judul_sk);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                    $( '#kabupatenkotaedit' ).val(hasil.master_provinsi.kode);
                    $('#kabupatenkotaedit').select2().trigger('change');
                    $( '#dokumenskhide' ).val(hasil.dokumen_sk);
                    $( '#idkphkedit' ).val(hasil.id);
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
            $('#UpdateData').click(function(){
                var file = $('#dokumenskedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append( 'tahunpengesahan', $( '#tahunpengesahan' ).val());
                    data.append( 'luaskphk', $( '#luaskphk' ).val());
                    data.append( 'provinsi', $( '#provinsiedit' ).val());
                    data.append( 'kabupaten_kotaedit', $( '#kabupatenkotaedit' ).val());
                    data.append( 'judulsk', $( '#judulsk' ).val());
                    data.append( 'nomorsk', $( '#nomorsk' ).val());
                    data.append( 'tanggalsk', $( '#tanggalsk' ).val());
                    data.append( 'idkphk', $( '#idkphkedit' ).val());
                    data.append( 'dokumensk',  $( '#dokumenskhide' ).val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataKphkTn',
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
                    data.append( 'kabupaten_kota_kphk', $( '#kabupatenkotaedit' ).val());
                    data.append( 'judulsk', $( '#judulskedit' ).val());
                    data.append( 'nomorsk', $( '#nomorskedit' ).val());
                    data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
                    data.append( 'idkphk', $( '#idkphkedit' ).val());
                    $.ajax({
                        url:'/updateDataKphkTn',
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
                data.append( 'dataluaszona', $( '#dataluaszona' ).val());
                data.append( 'zonainti', $( '#zonainti' ).val());
                data.append( 'zonapemanfaatan', $( '#zonapemanfaatan' ).val());
                data.append( 'zonatradisional', $( '#zonatradisional' ).val());
                data.append( 'zonareligi', $( '#zonareligi' ).val());
                data.append( 'zonarimba', $( '#zonarimba' ).val());
                data.append( 'zonaperlindunganbahari', $( '#zonaperlindunganbahari' ).val());
                data.append( 'zonarehabilitasi', $( '#zonarehabilitasi' ).val());
                data.append( 'zonakhusus', $( '#zonakhusus' ).val());
                data.append( 'zonalainnya', $( '#zonalainnya' ).val())
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
                            )
                            table.ajax.reload();
                    }
                })
            })
        })
    </script>
</body>
</html>