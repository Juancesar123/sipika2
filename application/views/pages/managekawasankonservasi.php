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
                            <h2 class="mr-4 mb-0"><?php   echo $hasil['nama_kawasan'];?></h2>
                            <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                                <i class="fas fa-home mr-1 text-muted"></i>
                                <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                                <p class="mb-0 mr-1">Kawasan Konservasi</p>
                                <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                                <p class="mb-0"><?php   echo $hasil['nama_kawasan'];?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo base_url('images/3671701645.jpg')?>" style="width:250px;height:150px">
                                    <br>
                                    <br>
                                    <h2><center><?php   echo $hasil['nama_kawasan'];?></center></h2>
                                    <p><center>REGISTER : <?php   echo $hasil['register'];?></center></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">
                                    Profile Kawasan
                                    <div class="float-right">
                                        <?php
                                            if($userdata['role']['roles'] == 'SUBDIT IKKA'){
                                        ?>
                                            <button class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i> Edit</button>
                                            <?php }else{?>
                                            <?php }?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Heading</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                Modal body..
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                            <p>Register :<?php   echo $hasil['register'];?></p>
                                            <?php
                                                if($hasil['fungsi'] == 1){
                                            ?>
                                                    <p>Fungsi : KSA/KSPA</p>
                                                <?php }else if($hasil['fungsi'] == 2 ){?>
                                                    <p>Fungsi : Cagar Alam</p>
                                                <?php }else if($hasil['fungsi'] == 3 ){?>
                                                    <p>Fungsi : Suaka Margasatwa</p>
                                                <?php }else if($hasil['fungsi'] == 4 ){?>
                                                    <p>Fungsi : Taman Buru</p>
                                                <?php }else if($hasil['fungsi'] == 5 ){?>
                                                    <p>Fungsi : Taman Nasional</p>
                                                <?php }else if($hasil['fungsi'] == 6 ){?>
                                                    <p>Fungsi : Taman Wisata Alam</p>
                                                <?php }else if($hasil['fungsi'] == 7 ){?>
                                                    <p>Fungsi : Taman Hutan Raya</p>
                                                <?php }?>
                                            <p>Pulau :<?php   echo $hasil['pulau'];?></p>
                                            <p>Provinsi :<?php   echo $hasil['provinsi'];?></p>
                                            <p>Kabupaten : <?php   echo $hasil['kabupaten'];?></p>
                                            <p>Nama Kawasan : <?php   echo $hasil['nama_kawasan'];?></p>
                                            <p>Luas : <?php   echo $hasil['luas_kawasan'];?></p>
                                    </center>
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
            $.ajax({
                url:'/deleteDataPeraturan/'+id,
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
        function editfunc(id){
            $.ajax({
                url:'/showDataPeraturan/'+id,
                type:'GET',
                success:function(data){
                    var hasil = JSON.parse(data);
                    $( '#idperaturan' ).val(hasil.id);
                    $( '#filehidden' ).val(hasil.file);
                    $( '#jenisperaturanedit' ).val(hasil.jenis_peraturan);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/getDataPeraturan",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'jenis_peraturan' },
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
                var file = $('#fileedit')[0].files[0];
                if(file == undefined){
                    var data;
                    data = new FormData();
                    data.append( 'idperaturan', $( '#idperaturan' ).val());
                    data.append( 'file', $( '#filehidden' ).val());
                    data.append( 'jenis_peraturan', $( '#jenisperaturanedit' ).val());
                    data.append( 'status',  'filenotfound');
                    $.ajax({
                        url:'/updateDataPeraturan',
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
                    data.append( 'file', $( '#fileedit' )[0].files[0] );
                    data.append( 'jenis_peraturan', $( '#jenisperaturanedit' ).val());
                    data.append( 'idperaturan', $( '#idperaturan' ).val());
                    $.ajax({
                        url:'/updateDataSketsaSejarah',
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
                data.append( 'file', $( '#file' )[0].files[0] );
                data.append( 'jenis_peraturan', $( '#jenisperaturan' ).val());
                $.ajax({
                    url:'/savedDataPeraturan',
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