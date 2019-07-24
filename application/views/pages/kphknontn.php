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
                                        <div class="modal-header d-block">
                                            <div class="d-flex">
                                                <h3 class="modal-title" id="exampleModalLabel">Form Input KPHK Non TN</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <h5 class="modal-title">Input Form KPHK Non TN</h5>
                                        </div>
                                        <form id="formkphknontn" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Tahun Pengesahan</label>
                                                            <select class="form-control" type="text" id="tahunpengesahan" name="tahunpengesahan">
                                                                <option value="1980">1980</option>
                                                                <option value="1981">1981</option>
                                                                <option value="1982">1982</option>
                                                                <option value="1983">1983</option>
                                                                <option value="1984">1984</option>
                                                                <option value="1985">1985</option>
                                                                <option value="1986">1986</option>
                                                                <option value="1987">1987</option>
                                                                <option value="1988">1988</option>
                                                                <option value="1989">1989</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1999">1999</option>
                                                                <option value="2000">2000</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengesahan</label>
                                                            <input class="form-control" type="date" id="tanggalpengesahan"name="tanggalpengesahan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Kawasan</label>
                                                            <textarea class="form-control" id="namakawasan" name="namakawasan"></textarea>
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
                                                            <select class="form-control" type="text" id="provinsi" name="provinsi">
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
                                                            <h5 class="modal-title" id="exampleModalLabel">SK KPHK</h5>
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
                                        <div class="modal-header d-block">
                                            <div class="d-flex">
                                                <h3 class="modal-title" id="exampleModalLabel">Form Ubah KPHK Non TN</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <h5 class="modal-title">Ubah Form KPHK Non TN</h5>
                                        </div>
                                        <form id="formkphknontnedit" method="post" action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Tahun Pengesahan</label>
                                                            <select class="form-control" type="text" id="tahunpengesahanedit" name="tahunpengesahanedit">
                                                                <option value="1980">1980</option>
                                                                <option value="1981">1981</option>
                                                                <option value="1982">1982</option>
                                                                <option value="1983">1983</option>
                                                                <option value="1984">1984</option>
                                                                <option value="1985">1985</option>
                                                                <option value="1986">1986</option>
                                                                <option value="1987">1987</option>
                                                                <option value="1988">1988</option>
                                                                <option value="1989">1989</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1999">1999</option>
                                                                <option value="2000">2000</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                            </select>
                                                            <input class="form-control" type="hidden" id="idkphkedit" name="idkphkedit">
                                                            <input class="form-control" type="hidden" id="dokumenskhide">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Pengesahan</label>
                                                            <input class="form-control" type="date" id="tangglpengesahanedit" name="tangglpengesahanedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Kawasan</label>
                                                            <textarea class="form-control" type="text" id="namakawasanedit" name="namakawasanedit"></textarea>
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
                                                            <select class="form-control" type="text" id="provinsiedit" name="provinsiedit">
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten/Kota KPHK</label>
                                                            <select class="form-control" style="width:100%" name="states[]" multiple="multiple" type="text" id="kabupatenkotaedit" name="kabupatenkotaedit">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h5 class="modal-title" id="exampleModalLabel">SK KPHK</h5>  
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
                                    <table class="table display nowrap" style="width:100%" id="myTable">
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
                    console.log(hasil.nama_kphk);
                    $( '#tahunpengesahanedit' ).val(hasil.tahun_pengesahaan);
                    $( '#tangglpengesahanedit' ).val(hasil.tanggal_pengesahan);
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
                        responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details for KPHK TN';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
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
                            { data: 'master_provinsi.nama' },                            	
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
                            $("#kabupatenkota").append(html);
                        });
                    }
                })
            })
            $('#provinsiedit').change(function(){
                var idprovinsi = $('#provinsi').val();
                $.ajax({
                    type:'GET',
                    url:'/getDataMasterProvinsiKota/'+idprovinsi,
                    dataType:'json',
                    success:function(data){
                        var html;
                        data.forEach(element => {
                            html = "<option value='"+element.nama+"'>"+element.nama+"</option>";
                            $("#kabupatenkotaedit").append(html);
                        });
                    }
                })
            })
            $('#kabupatenkota').select2({  
                theme: "bootstrap"
            });
            $('#kabupatenkotaedit').select2({  
                theme: "bootstrap"
            });
            $('form[id="formkphknontnedit"]').validate({
                rules: {
                    tahunpengesahanedit:{
                        required:true,
                        number:true
                    },
                    provinsiedit: 'required',
                    kabupatenkotaedit: 'required',
                    tangglpengesahanedit:'required',
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
                        console.log($('#tangglpengesahanedit').val());
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
                        console.log($('#tangglpengesahanedit').val());
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