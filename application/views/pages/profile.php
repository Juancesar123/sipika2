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
                            <h2 class="mr-4 mb-0">Profile</h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Edit Profile</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/updateprofile/<?php echo $userdata['id'];?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <?php if(empty($userdata['foto'])){?>
                                                    <img src="../../images/user.png" style="width: 200px;height: 200px">
                                                <?php }else{ ?>
                                                    <img src="<?php echo constant('API_URL').'/'.$userdata['foto']; ?>" style="width: 200px;height: 200px">
                                                <?php }; ?>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label> Email </label>
                                                    <input type="email" name="email" class="form-control" value="<?php echo $userdata['email'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label> Password </label>
                                                    <input type="password" name="password" class="form-control" value="admin123">
                                                </div>
                                                <div class="form-group">
                                                    <label> Name </label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $userdata['fullname']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label> Nomor Telepon </label>
                                                     <input type="text" name="nomortelepon" class="form-control" value="<?php echo $userdata['nomor_telepon']?>">
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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