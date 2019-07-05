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
                            <h2 class="mr-4 mb-0">Roles</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Management User</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Roles</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Roles</h4>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Roles</button>
                                </div>
                                <div class="card-body">
                                    <div class="modal fade" id="exampleModal"  tabindex='-1' data-keyboard='false' data-backdrop='static' role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Form Input Roles</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="rolesform" method="POST" action="">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Roles</label>
                                                            <input class="form-control" type="text" id="roles" name="roles">
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Form Ubah Roles</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="rolesformedit" method="POST" action="">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Roles</label>
                                                            <input class="form-control" type="text" id="rolesedit" name="rolesedit">
                                                            <input type="hidden" id="idroles">
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
                                            <th>Roles</th>
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
                        url:'/destroyDataRoles/'+id,
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
                url:'/showDataRoles/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idroles' ).val(hasil.id);
                    $( '#rolesedit' ).val(hasil.roles);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataRoles",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'roles' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id+")'>Delete</button>";
                                }
                            }
                        ]
                    });
        $('document').ready(function(){
            $('form[id="rolesformedit"]').validate({
                rules: {
                    rolesedit: 'required',
                },
                messages: {
                    rolesedit: 'This field is required',
                },
                submitHandler: function(form) {
                    var roles = $('#rolesedit').val();
                    var idroles = $('#idroles').val();
                    $.ajax({
                        url:'/updateDataRoles',
                        method:'POST',
                        data:'roles='+roles+'&id='+idroles,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#roles').val('');
                                    $('#modals2').modal('toggle');
                                })
                                table.ajax.reload();
                        }
                    })
                }
            });
            $('form[id="rolesform"]').validate({
                rules: {
                    roles: 'required',
                },
                messages: {
                    roles: 'This field is required',
                },
                submitHandler: function(form) {
                    var roles = $('#roles').val();
                    $.ajax({
                        url:'/savedDataRoles',
                        method:'POST',
                        data:'roles='+roles,
                        success:function(){
                            Swal.fire(
                                    'Sukses!',
                                    'Data Sukses di simpan!',
                                    'success'
                                ).then(function(){
                                    $('#roles').val('');
                                    $('#exampleModal').modal('toggle');
                                })
                                table.ajax.reload();
                        },
                        error:function(){

                        }
                    })
                }
            });
        })
    </script>
</body>
</html>