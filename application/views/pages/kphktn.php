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
                            <h2 class="mr-4 mb-0">KPHK TN</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Subdit Pemoalaan</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">KPHK TN</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>KPHK TN</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input KPHK TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formkphktn" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Tahun Pengesahan</label>
                                                            <input class="form-control" type="text" id="tahunpengesahan" name="tahunpengesahan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas KPHK</label>
                                                            <input class="form-control" type="number" id="luaskphk" name="luaskphk">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <select class="form-control" style="width:100%" name="states[]" multiple="multiple" id="provinsi" name="provinsi">
                                                            
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten/Kota KPHK</label>
                                                            <select class="form-control" style="width:100%" name="states[]" multiple="multiple" id="kabupatenkota" name="kabupatenkota">
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h3>SK KPHK</h3>
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
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal fade bd-example-modal-lg" id="modals2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah KPHK TN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="formkphktnedit" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Tahun Pengesahan</label>
                                                            <input class="form-control" type="text" id="tahunpengesahanedit" name="tahunpengesahanedit">
                                                            <input class="form-control" type="hidden" id="idkphkedit">
                                                            <input class="form-control" type="hidden" id="dokumenskhide">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Luas KPHK</label>
                                                            <input class="form-control" type="text" id="luaskphkedit"  name="luaskphkedit" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <select class="form-control" style="width:100%" name="states[]" multiple="multiple" id="provinsiedit" name="provinsiedit">
                                                            
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten/Kota KPHK</label>
                                                            <select class="form-control" style="width:100%" name="states[]" multiple="multiple" id="kabupatenkotaedit" name="kabupatenkotaedit">
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h3>SK KPHK</h3>
                                                            <label>Judul SK</label>
                                                            <input class="form-control" type="text" id="judulskedit"  name="judulskedit">
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
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    <table class="table" id="myTable">
                                        <thead>
                                            <th>Tahun Pengesahan</th>
                                            <th>Luas KPHK</th>
                                            <th>Kabupaten Atau Kota</th>
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
                            url:'/deleteDatakphkTn/'+id,
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
                    var hasilprovinsi = hasil.provinsi;
                    var hasilkabupaten = hasil.kabupaten;
                    $( '#tahunpengesahanedit' ).val(hasil.tahun_pengesahaan);
                    $( '#luaskphkedit' ).val(hasil.luas_kphk);
                    $.each(hasilprovinsi.split(","), function(i,e){
                        $("#provinsiedit option[value='" + e + "']").prop("selected", true);
                    });
                    $.each(hasilkabupaten.split(","), function(i,e){
                        $("#kabupatenkotaedit option[value='" + e + "']").prop("selected", true);
                    });
                    // $('#provinsiedit').val(function(hasilprovinsi, value) {
                    //     console.log(value);
                    // });
                    //$( '#provinsiedit' ).val(['SUMATERA BARAT,SUMATERA BARAT']);
                    $('#provinsiedit').select2().trigger('change');
                    $( '#judulskedit' ).val(hasil.judul_sk);
                    $( '#nomorskedit' ).val(hasil.nomor_sk);
                    $( '#tanggalskedit' ).val(hasil.tanggal_sk);
                    $('#kabupatenkotaedit').select2().trigger('change');
                    $( '#dokumenskhide' ).val(hasil.dokumen_sk);
                    $( '#idkphkedit' ).val(hasil.id);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDatakphkTn",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'tahun_pengesahaan' },
                            { data: 'luas_kphk' },
                            { data: 'kabupaten' },   
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
            $.ajax({
                type:'GET',
                url:'/getDataMasterProvinsi',
                dataType:'json',
                success:function(data){
                    var html;
                    data.forEach(element => {
                         html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                         $("#provinsi").append(html);
                         $("#provinsiedit").append(html);
                    });
                }
            })
            $.ajax({
                type:'GET',
                url:'/getDataKabupaten',
                dataType:'json',
                success:function(data){
                    var html;
                    data.forEach(element => {
                         html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                         $("#kabupatenkota").append(html);
                         $("#kabupatenkotaedit").append(html);
                    });
                }
            })
            $('#provinsi').select2({  
                theme: "bootstrap"
            });
            $('#kabupatenkota').select2({  
                theme: "bootstrap"
            });
            $('#provinsiedit').select2({  
                theme: "bootstrap"
            });
            $('#kabupatenkotaedit').select2({  
                theme: "bootstrap"
            });
            $('#UpdateData').click(function(){
               
            })
            $('form[id="formkphktn"]').validate({
                rules: {
                    tahunpengesahan: 'required',
                    provinsi: 'required',
                    kabupatenkota: 'required',
                    judulsk: 'required',
                    nomorsk: 'required',
                    tanggalsk: 'required',
                    luaskphk: {
                        required: true,
                        number: true
                    },
                    dokumensk: {
                        required: true,
                    },
                },
                messages: {
                    judul: 'This field is required',

                },
                submitHandler: function(form) {
                    var data;
                    data = new FormData();
                    data.append( 'dokumensk', $( '#dokumensk' )[0].files[0] );
                    data.append( 'tahunpengesahan', $( '#tahunpengesahan' ).val());
                    data.append( 'luaskphk', $( '#luaskphk' ).val());
                    data.append( 'provinsi', $( '#provinsi' ).val());
                    data.append( 'kabupaten_kota_kphk', $( '#kabupatenkota' ).val());
                    data.append( 'judulsk', $( '#judulsk' ).val());
                    data.append( 'nomorsk', $( '#nomorsk' ).val());
                    data.append( 'tanggalsk', $( '#tanggalsk' ).val());
                    $.ajax({
                        url:'/savedDatakphktn',
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
                                    $( '#dokumensk' ).val();
                                    $( '#tahunpengesahan' ).val('');
                                    $( '#luaskphk' ).val('');
                                    $( '#provinsi' ).val('');
                                    $( '#kabupatenkota' ).val('');
                                    $( '#judulsk' ).val('');
                                    $( '#nomorsk' ).val('');
                                    $( '#tanggalsk' ).val('');
                                    $('#exampleModal').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            })
            $('form[id="formkphktnedit"]').validate({
                rules: {
                    tahunpengesahanedit: 'required',
                    provinsiedit: 'required',
                    kabupatenkotaedit: 'required',
                    judulskedit: 'required',
                    nomorskedit: 'required',
                    tanggalskedt: 'required',
                    luaskphkedit: {
                        required: true,
                        number: true
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
                        data.append( 'tahunpengesahan', $( '#tahunpengesahanedit' ).val());
                        data.append( 'luaskphk', $( '#luaskphkedit' ).val());
                        data.append( 'provinsi', $( '#provinsiedit' ).val());
                        data.append( 'kabupaten', $( '#kabupatenkotaedit' ).val());
                        data.append( 'judulsk', $( '#judulskedit' ).val());
                        data.append( 'nomorsk', $( '#nomorskedit' ).val());
                        data.append( 'tanggalsk', $( '#tanggalskedit' ).val());
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
                                    ).then(function(){
                                        $( '#dokumenskedit' ).val();
                                        $( '#tahunpengesahanedit' ).val('');
                                        $( '#luaskphkedit' ).val('');
                                        $( '#provinsiedit' ).val('');
                                        $( '#kabupatenkotaedit' ).val('');
                                        $( '#judulskedit' ).val('');
                                        $( '#nomorskedit' ).val('');
                                        $( '#tanggalskedit' ).val('');
                                        $('#modals2').modal('toggle');
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
                        data.append( 'kabupaten', $( '#kabupatenkotaedit' ).val());
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
                                    ).then(function(){
                                        $( '#dokumenskedit' ).val();
                                        $( '#tahunpengesahanedit' ).val('');
                                        $( '#luaskphkedit' ).val('');
                                        $( '#provinsiedit' ).val('');
                                        $( '#kabupatenkotaedit' ).val('');
                                        $( '#judulskedit' ).val('');
                                        $( '#nomorskedit' ).val('');
                                        $( '#tanggalskedit' ).val('');
                                        $('#modals2').modal('toggle');
                                    })
                                    table.ajax.reload();
                            }
                        })
                    }
                }
            })
        })
    </script>
</body>
</html>