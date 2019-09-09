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
                            <h2 class="mr-4 mb-0">Website Terkait</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Management User</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Website Terkait</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Website Terkait</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Website</button>
                                </div>
                                <div class="card-body">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Input Website Terkait</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="websiteterkaitform">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Nama Website</label>
                                                    <input class="form-control" type="text" id="namawebsite" name="namawebsite">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat Website</label>
                                                    <input class="form-control" type="text" id="alamatwebsite" name="alamatwebsite">
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
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Ubah Website Terkait</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="websiteterkaitformedit">
                                            <div class="modal-body">
                                            <div class="form-group">
                                                    <label>Nama Website</label>
                                                    <input class="form-control" type="text" id="namawebsiteedit" name="namawebsiteedit">
                                                    <input type="hidden" id="idwebsiteterkait">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat Website</label>
                                                    <input class="form-control" type="text" id="alamatwebsiteedit" name="alamatwebsiteedit">
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
                                            <th>Nama Website</th>
                                            <th>Alamat Website</th>
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
                        url:'/deleteDataWebsiteTerkait/'+id,
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
                url:'/showDataWebsiteTerkait/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idwebsiteterkait' ).val(hasil.id);
                    $( '#namawebsiteedit' ).val(hasil.nama_website);
                    $( '#alamatwebsiteedit' ).val(hasil.alamat_website);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                    dom: 'Bfrtip',
                        buttons: [
                             {
                                extend: 'excel',
                                title :'Website Terkait',
                                exportOptions: {
                                    columns: [ 0,1 ]
                                }
                            }, 
                            {
                                extend: 'pdf',
                                title :'Website Terkait',
                                exportOptions: {
                                    columns: [ 0,1 ]
                                }
                            }
                        ],
                        responsive: {
                            details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                    header: function ( row ) {
                                        var data = row.data();
                                        return 'Details Website Terkait';
                                    }
                                } ),
                                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                            }
                        },
                        deferRender: true,
                        ajax: {
                            url: "/getwebsiteterkait",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'nama_website' },
                            { data: 'alamat_website' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('form[id="websiteterkaitformedit"]').validate({
                rules: {
                    namawebsiteedit: 'required',
                    alamatwebsiteedit: 'required',
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var namawebsite = $('#namawebsiteedit').val();
                    var alamatwebsite = $('#alamatwebsiteedit').val();
                    var idwebsiteterkait = $('#idwebsiteterkait').val();
                    $.ajax({
                        url:'/updateDataWebsiteTerkait',
                        method:'POST',
                        data:'namawebsite='+namawebsite+'&id='+idwebsiteterkait+"&alamatwebsite="+alamatwebsite,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#namawebsiteedit').val('');
                                    $('#alamatwebsiteedit').val('');
                                    $('#modals2').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            })
            $('form[id="websiteterkaitform"]').validate({
                rules: {
                    namawebsite: 'required',
                    alamatwebsite: 'required',
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var namawebsite = $('#namawebsite').val();
                    var alamatwebsite = $('#alamatwebsite').val();
                    $.ajax({
                        url:'/SaveDataWebsiteTerkait',
                        method:'POST',
                        data:'namawebsite='+namawebsite+"&alamatwebsite="+alamatwebsite,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#namawebsite').val('');
                                    $('#alamatwebsite').val('');
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