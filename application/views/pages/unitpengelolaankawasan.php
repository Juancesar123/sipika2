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
                            <h2 class="mr-4 mb-0">Unit Pengelolaan Kawasan</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Unit Pengelolaan Kawasan</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Unit Pengelolaan Kawasan</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Unit Pengelolaan Kawasan</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Unit Pengelolaan Kawasan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="unitpengelolaankawasanform">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nama Pengelola</label>
                                                            <input class="form-control" type="text" id="namapengelola" name="namapengelola">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <select class="form-control" type="text" id="provinsi" name="provinsi">
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten</label>
                                                            <select class="form-control" type="text" id="kabupaten" name="kabupaten">
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <input class="form-control" type="text" id="kecamatan" name="kecamatan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat Detail</label>
                                                            <textarea class="form-control" type="text" id="alamatdetail" name="alamatdetail"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nomor Telepon</label>
                                                            <input class="form-control" type="text" id="nomortelepon" name="nomortelepon">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor Fax</label>
                                                            <input class="form-control" type="text" id="nomorfax" name="nomorfax">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text" id="email" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Website</label>
                                                            <input class="form-control" type="text" id="website" name="website">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Call Center</label>
                                                            <input class="form-control" type="text" id="callcenter" name="callcenter">
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Unit Pengelolaan Kawasan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="unitpengelolaankawasanformedit">
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nama Pengelola</label>
                                                            <input class="form-control" type="text" id="namapengelolaedit" name="namapengelolaedit">
                                                            <input type="hidden" id="idunitpengelolaan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <input class="form-control" type="text" id="provinsiedit" name="provinsiedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kabupaten</label>
                                                            <input class="form-control" type="text" id="kabupatenedit" name="kabupatenedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <input class="form-control" type="text" id="kecamatanedit" name="kecamatanedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat Detail</label>
                                                            <textarea class="form-control" type="text" id="alamatdetailedit" name="alamatdetailedit"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nomor Telepon</label>
                                                            <input class="form-control" type="text" id="nomorteleponedit" name="nomorteleponedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor Fax</label>
                                                            <input class="form-control" type="text" id="nomorfaxedit" name="nomorfaxedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text" id="emailedit" name="emailedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Website</label>
                                                            <input class="form-control" type="text" id="websiteedit" name="websiteedit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Call Center</label>
                                                            <input class="form-control" type="text" id="callcenteredit" name="callcenteredit">
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
                                            <th>Nama Pengelola</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat Detail</th>
                                            <th>Nomor Telepon</th>
                                            <th>Nomor Fax</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Call Center</th>
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
                        url:'/deleteDataUnitPengelolaanKawasan/'+id,
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
                url:'/showDataUnitPengelolaanKawasan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idunitpengelolaan' ).val(hasil.id);
                    $( '#namapengelolaedit' ).val(hasil.nama_pengelola);
                    $( '#provinsiedit' ).val(hasil.provinsi);
                    $( '#kabupatenedit' ).val(hasil.kabupaten);
                    $( '#kecamatanedit' ).val(hasil.kecamatan);
                    $( '#alamatdetailedit' ).val(hasil.alamat);
                    $( '#nomorteleponedit' ).val(hasil.nomor_telepon);
                    $( '#nomorfaxedit' ).val(hasil.nomor_fax);
                    $( '#emailedit' ).val(hasil.email);
                    $( '#websiteedit' ).val(hasil.website);
                    $( '#callcenteredit' ).val(hasil.call_center);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                dom: 'Bfrtip',
                        buttons: [
                             {
                                extend: 'excel',
                                title :'Unit Pengelolaan Kawasan',
                                exportOptions: {
                                    columns: [ 0,1,2,3,4,5,6,7,8,9 ]
                                }
                            }, 
                            {
                                extend: 'pdf',
                                title :'Unit Pengelolaan Kawasan',
                                exportOptions: {
                                    columns: [ 0,1,2,3,4,5,6,7,8,9 ]
                                }
                            }
                        ],
                        responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details Unit Pengelolaan Kawasan';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getUnitPengelolaanKawasan",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_pengelola' },
                            { data: 'provinsi' },
                            { data: 'kabupaten' },
                            { data: 'kecamatan' },
                            { data: 'alamat' },
                            { data: 'nomor_telepon' },
                            { data: 'nomor_fax' },
                            { data: 'email' },
                            { data: 'website' },
                            { data: 'call_center' },
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
                            $("#kabupaten").append(html);
                            $("#kabupatenedit").append(html);
                        });
                    }
                })
            })
            $('form[id="unitpengelolaankawasanformedit"]').validate({
                rules: {
                    namapengelolaedit: 'required',
                    provinsiedit: 'required',
                    kecamatanedit: 'required',
                    kabupatenedit: 'required',
                    alamatdetailedit: 'required',
                    nomorteleponedit: 'required',
                    nomorfaxedit: 'required',
                    emailedit: 'required',
                    websiteedit:'required',
                    calcenteredit:'required'
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var namapengelola = $('#namapengelolaedit').val();
                    var provinsi = $('#provinsiedit').val();
                    var kecamatan = $('#kecamatanedit').val();
                    var kabupaten = $('#kabupatenedit').val();
                    var alamat = $('#alamatdetailedit').val();
                    var nomortelepon = $('#nomorteleponedit').val();
                    var nomorfax = $('#nomorfaxedit').val();
                    var email = $('#emailedit').val();
                    var website = $('#websiteedit').val();
                    var callcenter = $('#callcenteredit').val();
                    var idpengelolaan = $('#idunitpengelolaan').val();
                    $.ajax({
                        url:'/updateDataUnitPengelolaanKawasan',
                        method:'POST',
                        data:"id="+idpengelolaan+"&namapengelola="+namapengelola+"&provinsi="+provinsi+"&kecamatan="+kecamatan+"&kabupaten="+kabupaten+"&alamat="+alamat+"&nomortelepon="+nomortelepon+"&nomorfax="+nomorfax+"&email="+email+"&website="+website+"&callcenter="+callcenter,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#namapengelolaedit').val('');
                                    $('#provinsiedit').val('');
                                    $('#kecamatanedit').val('');
                                    $('#kabupatenedit').val('');
                                    $('#alamatdetailedit').val('');
                                    $('#nomorteleponedit').val('');
                                    $('#nomorfaxedit').val('');
                                    $('#emailedit').val('');
                                    $('#websiteedit').val('');
                                    $('#callcenteredit').val('');
                                    $('#modals2').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            })
            $('form[id="unitpengelolaankawasanform"]').validate({
                rules: {
                    namapengelola: 'required',
                    provinsi: 'required',
                    kecamatan: 'required',
                    kabupaten: 'required',
                    alamatdetail: 'required',
                    nomortelepon: 'required',
                    nomorfax: 'required',
                    email: 'required',
                    website:'required',
                    calcenter:'required'
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var namapengelola = $('#namapengelola').val();
                    var provinsi = $('#provinsi').val();
                    var kecamatan = $('#kecamatan').val();
                    var kabupaten = $('#kabupaten').val();
                    var alamat = $('#alamatdetail').val();
                    var nomortelepon = $('#nomortelepon').val();
                    var nomorfax = $('#nomorfax').val();
                    var email = $('#email').val();
                    var website = $('#website').val();
                    var callcenter = $('#callcenter').val();
                    $.ajax({
                        url:'/SaveDataUnitPengelolaanKawasan',
                        method:'POST',
                        data:"namapengelola="+namapengelola+"&provinsi="+provinsi+"&kecamatan="+kecamatan+"&kabupaten="+kabupaten+"&alamat="+alamat+"&nomortelepon="+nomortelepon+"&nomorfax="+nomorfax+"&email="+email+"&website="+website+"&callcenter="+callcenter,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#namapengelola').val('');
                                    $('#provinsi').val('');
                                    $('#kecamatan').val('');
                                    $('#kabupaten').val('');
                                    $('#alamatdetail').val('');
                                    $('#nomortelepon').val('');
                                    $('#nomorfax').val('');
                                    $('#email').val('');
                                    $('#website').val('');
                                    $('#callcenter').val('');
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