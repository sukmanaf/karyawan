<div class="block-header">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <h1>Tabel Pegawai </h1>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
            
        </div>
    </div>
</div>
<div class="row clearfix">
   
    <div class="col-lg-12">
        <div class="card-header border-bottom ">
            <!-- <a href="<?php echo site_url().$this->uri->segment(1) ?>/create" class="btn btn-primary theme-bg gradient btn-rounded">Tambah</a> -->
            <button class="btn btn-primary theme-bg gradient btn-rounded" onclick="add()">Tambah</button>
            <button class="btn btn-success btn-rounded" onclick="upload()">Upload CSV</button>
            
      </div>

        <div class="card">
            <div class="header">
                <!-- <h2>Table Tools<small>Basic example without any additional modification classes</small></h2> -->
                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                    
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    
                    <table id="dtables" style="width: 100%" class="table table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nip</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nip</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="postForm" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="varchar">Nama</label>
                <input type="text" class="form-control" required name="nama" id="nama" placeholder="Masukan Nama" " />
            </div>
            <div class="form-group">
                <label for="varchar">Nip</label>
                <input type="text" class="form-control" required name="nip" id="nip" placeholder="Masukan Nip" " />
            </div>
            <div class="form-group">
                <label for="varchar">Alamat</label>
                <textarea class="form-control" name="alamat" required placeholder="Masukan ALamat"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formmodalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="postFormEdit" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="varchar">Nama</label>
                <input type="text" class="form-control" required name="nama" id="namaEdit" placeholder="Masukan Nama" " />
            </div>
            <div class="form-group">
                <label for="varchar">Nip</label>
                <input type="text" class="form-control" required name="nip" id="nipEdit" placeholder="Masukan Nip" " />
            </div>
            <div class="form-group">
                <label for="varchar">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamatEdit" required placeholder="Masukan ALamat"></textarea>
            </div>
            <input type="hidden" name="pegawai_id" id="pegawaiIdEdit">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sbmit"  class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


<div class="modal fade" id="lihatmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lihat Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                    
                <div class="col-md-3">
                    <label for="varchar"><b>Nama</b></label><br>
                </div>
                <div class="col-md-8">
                    <label id="spanNama">:</label><br>
                </div>
                <div class="col-md-3">
                    <label for="varchar"><b>Nip</b></label><br>
                </div>
                <div class="col-md-8">
                    <label id="spanNip">:</label><br>
                </div>
                <div class="col-md-3">
                    <label for="varchar"><b>ALamat</b></label><br>
                </div>
                <div class="col-md-8">
                    <label id="spanALamat">:</label><br>
                </div>
  
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="uploadmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload CSV Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="postFormUpload" enctype="multipart/form-data" method="post">
            <a class="btn btn-primary btn-sm btnrounded"   href="<?=base_url()?>assets/contoh.csv">Contoh</a>
            <div class="form-group">
                <input type="file" class="form-control" required name="csv" id="csv" />
            </div>
            
            <input type="hidden" name="pegawai_id" id="pegawaiIdEdit">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sbmit"  class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="dupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Duplikat Tidak Tersimpan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <table class="table" id="tbldup">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody id="tbldup">
                            
                        </tbody>
                    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


<script>
    $(document).ready(function() {
        dtables();

        $("#postForm").submit(function(event){
            event.preventDefault(); //prevent default action 
            var post_url = '<?php echo site_url().$this->uri->segment(1) ?>/save'; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Encode form elements for submission
        
     
            $.ajax({
                url : post_url,
                type: 'POST',
                data : form_data,
                processData:false,
                         contentType:false,
                         cache:false,
                         async:false,
            }).done(function(response){
                response = JSON.parse(response)
                if (response.sts == 0) {
                    alert(response.msg)
                }else{
                    alert(response.msg)
                    $('#formmodal').modal('hide');
                    dtables()

                }
            
            });

        
        });


        $("#postFormEdit").submit(function(event){
            event.preventDefault(); //prevent default action 
            var post_url = '<?php echo site_url().$this->uri->segment(1) ?>/edit'; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Encode form elements for submission
            $.ajax({
                url : post_url,
                type: 'POST',
                data : form_data,
                processData:false,
                         contentType:false,
                         cache:false,
                         async:false,
            }).done(function(response){
                response = JSON.parse(response)
                if (response.sts == 0) {
                    alert(response.msg)
                }else{
                    alert(response.msg)
                    $('#formmodalEdit').modal('hide');
                    dtables()

                }
            
            });

        
        });

         $("#postFormUpload").submit(function(event){
            event.preventDefault(); //prevent default action 
            var post_url = '<?php echo site_url().$this->uri->segment(1) ?>/upload'; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Encode form elements for submission
            $.ajax({
                url : post_url,
                type: 'POST',
                data : form_data,
                processData:false,
                         contentType:false,
                         cache:false,
                         async:false,
            }).done(function(response){
                response = JSON.parse(response)
                if (response.sts == 0) {
                    alert(response.msg)
                    $('#uploadmodal').modal('hide');
                }else if(response.sts == 1){
                    alert(response.msg)
                    $('#uploadmodal').modal('hide');
                    dtables();
                }else{
                    $('#tbldup').html(response.duplikat);
                    $('#uploadmodal').modal('hide');
                    $('#dupmodal').modal('show');
                    dtables();
                }
            
            });

        
        });


        
    } );

    function dtables(argument) {
        $.ajax({
            url : '<?php echo site_url('pegawai/get_data') ?>',
            type: 'POST',
            data : {},
            dataType : 'json',
        }).done(function(response){ //
            $('#dtables').dataTable().fnDestroy();
            $('#dtables').DataTable( {
                data: response,
                lengthMenu: [[6], [6]],
                pageLength: 6,
                fixedColumns: true,
                
            } );
        });
    }

    function hapus(id,nama) {
    event.preventDefault(); //prevent default action 
        if (window.confirm("Yakin Ingin hapus "+nama+"?")) {
            $.ajax({
                url : '<?php echo site_url('pegawai/delete/') ?>'+id,
                type: 'GET',
                data : {},
                dataType : 'json',
            }).done(function(response){ 
                if (response.sts == 0) {
                alert(response.msg)
                }else{
                    alert(response.msg)
                    $('#formmodalEdit').modal('show');
                    dtables();               
                }
            });
        }
    }

    function add() {
        event.preventDefault(); //prevent default action 
        $('#formmodal').modal('show');
    } 
    function lihat(id) {
    event.preventDefault(); //prevent default action 
        $.ajax({
            url : '<?php echo site_url('pegawai/read/') ?>'+id,
            type: 'GET',
            data : {},
            dataType : 'json',
        }).done(function(response){ 
            console.log(response.data);
            $('#spanNama').text(response.data['nama'])
            $('#spanNip').text(response.data['nip'])
            $('#spanALamat').text(response.data['alamat'])
            $('#spanJabatan').text(response.data['jabatan'])
            $('#lihatmodal').modal('show');

        });
    }

    function edit(id) {
    event.preventDefault(); //prevent default action 
        $.ajax({
            url : '<?php echo site_url('pegawai/getById/') ?>'+id,
            type: 'GET',
            data : {},
            dataType : 'json',
        }).done(function(response){ 
            console.log(response.data['select_jabatan']);
            $('#namaEdit').val(response.data['nama'])
            $('#nipEdit').val(response.data['nip'])
            $('#pegawaiIdEdit').val(response.data['pegawai_id'])
            $('#alamatEdit').html(response.data['alamat'])
            $('#jabatanEdit').html(response.data['select_jabatan'])
            $('#formmodalEdit').modal('show');
        });
    }

    function upload() {
            $('#uploadmodal').modal('show');
        
    }
</script>