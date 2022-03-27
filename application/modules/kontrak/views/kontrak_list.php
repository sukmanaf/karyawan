<div class="block-header">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <h1>Tabel Kontrak </h1>
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
                                <th>Lama Kontrak</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Status</th>
                                <th>AKsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Lama Kontrak</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Status</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="postForm" enctype="multipart/form-data" method="post">

	        <div class="form-group">
	            <label for="varchar">Nama Pegawai</label><br>
                <select name="pegawai_id"  id="pegawai_id" style="width: 100%" required class="form-control" required></select>            
	        </div>
            <div class="form-group">
                <label for="varchar">Jabatan</label>
                <select name="jabatan_id" id="jabatan_id" required class="form-control"></select>            
            </div>
	        <div class="form-group">
	            <label for="varchar">Tanggal Penandatanganan</label>
	            <input type="date" class="form-control" required name="tgl_kontrak" id="tgl_kontrak" placeholder=""  value="<?php echo date('Y-m-d') ?>" />
	        </div>

	        <div class="form-group">
	            <label for="varchar">Lama Kontrak</label>
	            <input type="text" class="form-control" required name="lama_kontrak" id="lama_kontrak" placeholder=" Masukan Lama Kontrak"  />
	        </div>
	        <div class="form-group">
	            <label for="varchar">Tanggal Mulai Kontrak</label>
	            <input type="date" class="form-control" required name="tgl_mulai" id="tgl_mulai" placeholder=""  value="<?php echo date('Y-m-d') ?>" />
	        </div>
	        <div class="form-group">
	            <label for="varchar">Tanggal Selesai Kontrak</label>
	            <input type="date" class="form-control" required name="tgl_selesai" id="tgl_selesai" placeholder=""  value="<?php echo date('Y-m-d') ?>" />
	        </div>
	        <div class="form-group">
	            <label for="varchar">Status</label>
	            <input type="text" class="form-control" required name="status" id="status" placeholder=" Masukan Status"  />
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="postFormEdit" enctype="multipart/form-data" method="post">
	         <div class="form-group">
	            <label for="varchar">Nama Pegawai</label><br>
                <select name="pegawai_id"  id="pegawai_idEdit" style="width: 100%" required class="form-control" required></select>            
	        </div>

            <div class="form-group">
                <label for="varchar">Jabatan</label>
                <select name="jabatan_id"  id="jabatanEdit" required class="form-control"></select>            
            </div>
	        <div class="form-group">
	            <label for="varchar">Tanggal Penandatanganan</label>
	            <input type="date" class="form-control" required name="tgl_kontrak" id="tgl_kontrakEdit" placeholder=""  value="<?php echo date('Y-m-d') ?>" />
	        </div>

	        <div class="form-group">
	            <label for="varchar">Lama Kontrak</label>
	            <input type="text" class="form-control" required name="lama_kontrak" id="lama_kontrakEdit" placeholder=" Masukan Lama Kontrak"  />
	        </div>
	        <div class="form-group">
	            <label for="varchar">Tanggal Mulai Kontrak</label>
	            <input type="date" class="form-control" required name="tgl_mulai" id="tgl_mulaiEdit" placeholder=""  value="<?php echo date('Y-m-d') ?>" />
	        </div>
	        <div class="form-group">
	            <label for="varchar">Tanggal Selesai Kontrak</label>
	            <input type="date" class="form-control" required name="tgl_selesai" id="tgl_selesaiEdit" placeholder=""  value="<?php echo date('Y-m-d') ?>" />
	        </div>
	        <div class="form-group">
	            <label for="varchar">Status</label>
	            <input type="text" class="form-control" required name="status" id="statusEdit" placeholder=" Masukan Status"  />
	        </div>
	            <input type="text" class="form-control" required name="kontrak_id" id="kontrak_id" placeholder=""  />
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
        <h5 class="modal-title" id="exampleModalLabel">Lihat Kontrak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="row">
	        		
		        <div class="col-md-5">
		            <label for="varchar"><b>Nama</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanNama">:</label><br>
		        </div> <div class="col-md-5">
		            <label for="varchar"><b>Jabatan</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanJabatan">:</label><br>
		        </div>
		        <div class="col-md-5">
		            <label for="varchar"><b>Tanggal Penandatanganan</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanTglKontrak">:</label><br>
		        </div>
		        <div class="col-md-5">
		            <label for="varchar"><b>Lama Kontrak</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanLamaKontrak">:</label><br>
		        </div>
		        <div class="col-md-5">
		            <label for="varchar"><b>Tangal Mulai</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanTglMulai">:</label><br>
		        </div>
		        <div class="col-md-5">
		            <label for="varchar"><b>Tanggal Selesai</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanTglSelesai">:</label><br>
		        </div>
		        <div class="col-md-5">
		            <label for="varchar"><b>Status</b></label><br>
		        </div>
		        <div class="col-md-7">
		            <label id="spanStatus">:</label><br>
		        </div>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


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


        
    } );

    function dtables(argument) {
    	$.ajax({
            url : '<?php echo site_url('Kontrak/get_data') ?>',
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
	            url : '<?php echo site_url('Kontrak/delete/') ?>'+id,
	            type: 'GET',
	            data : {},
	            dataType : 'json',
	        }).done(function(response){ 
	            if (response.sts == 0) {
            	alert(response.msg)
	            }else{
	            	alert(response.msg)
					dtables();	             
	            }
	        });
        }
    }

    function add() {
	    event.preventDefault(); //prevent default action 
	    $.ajax({
            url : '<?php echo site_url('pegawai/getJabatan/') ?>',
            type: 'GET',
            data : {},
            dataType : 'json',
        }).done(function(response){ 
            console.log(response.data);
            $('#jabatan_id').html(response.data);
            
           	$.ajax({
		        url : '<?php echo site_url('Kontrak/getPegawai') ?>',
		        type: 'GET',
		        data : {},
		        dataType : 'json',
		    }).done(function(response){ 
		        console.log(response.data);
		        $('#pegawai_id').html(response.data)
		        $('#pegawai_id').select2()
				$('#formmodal').modal('show');

		    });

        });



    } 
    function lihat(id) {
	    event.preventDefault(); //prevent default action 
		$.ajax({
            url : '<?php echo site_url('Kontrak/read/') ?>'+id,
            type: 'GET',
            data : {},
            dataType : 'json',
        }).done(function(response){ 
            console.log(response.data);
            $('#spanNama').text(response.data['nama'])
            $('#spanTglKontrak').text(response.data['tgl_kontrak'])
            $('#spanLamaKontrak').text(response.data['lama_kontrak'])
            $('#spanTglMulai').text(response.data['tgl_mulai'])
            $('#spanTglSelesai').text(response.data['tgl_selesai'])
            $('#spanStatus').text(response.data['status'])
            $('#spanJabatan').text(response.data['jabatan'])
			$('#lihatmodal').modal('show');

	        });
    }

    function edit(id) {
    event.preventDefault(); //prevent default action 
    	$.ajax({
	            url : '<?php echo site_url('Kontrak/getById/') ?>'+id,
	            type: 'GET',
	            data : {},
	            dataType : 'json',
	        }).done(function(response){ 
	            console.log(response.data); 
	            $('#tgl_mulaiEdit').val(response.data['tgl_mulai'])
	            $('#tgl_kontrakkEdit').val(response.data['tgl_kontrak'])
	            $('#tgl_selesaiEdit').val(response.data['tgl_selesai'])
	            $('#pegawai_idEdit').html(response.data['select_pegawai'])
	            $('#lama_kontrakEdit').val(response.data['lama_kontrak'])
	            $('#statusEdit').val(response.data['status'])
	            $('#kontrak_id').val(response.data['kontrak_id'])
    			$('#formmodalEdit').modal('show');
	        });
    }

    function update(event) {
    	
    }
</script>