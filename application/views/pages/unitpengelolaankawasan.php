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
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nama Pengelola</label>
                                                        <input class="form-control" type="text" id="namapengelola">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <input class="form-control" type="text" id="provinsi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten</label>
                                                        <input class="form-control" type="text" id="kabupaten">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kecamatan</label>
                                                        <input class="form-control" type="text" id="kecamatan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Detail</label>
                                                        <textarea class="form-control" type="text" id="alamatdetail"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nomor Telepon</label>
                                                        <input class="form-control" type="text" id="nomortelepon">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nomor Fax</label>
                                                        <input class="form-control" type="text" id="nomorfax">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="text" id="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input class="form-control" type="text" id="website">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Call Center</label>
                                                        <input class="form-control" type="text" id="callcenter">
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
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Unit Pengelolaan Kawasan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nama Pengelola</label>
                                                        <input class="form-control" type="text" id="namapengelolaedit">
                                                        <input type="hidden" id="idunitpengelolaan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <input class="form-control" type="text" id="provinsiedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kabupaten</label>
                                                        <input class="form-control" type="text" id="kabupatenedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kecamatan</label>
                                                        <input class="form-control" type="text" id="kecamatanedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Detail</label>
                                                        <textarea class="form-control" type="text" id="alamatdetailedit"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nomor Telepon</label>
                                                        <input class="form-control" type="text" id="nomorteleponedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nomor Fax</label>
                                                        <input class="form-control" type="text" id="nomorfaxedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="text" id="emailedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input class="form-control" type="text" id="websiteedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Call Center</label>
                                                        <input class="form-control" type="text" id="callcenteredit">
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
                                            <th>Nama Pengelola</th>
                                            <th>Nomor Telepon</th>
                                            <th>Nomor Fax</th>
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
                            { data: 'nomor_telepon' },
                            { data: 'nomor_fax' },
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
                            )
                            table.ajax.reload();
                    }
                })
            })
            $('#SaveData').click(function(){
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
                            )
                            table.ajax.reload();
                    }
                })
            })
        })
    </script>
</body>
</html>