<?php 
        // $ses = $this->session->userdata('user');
        //  if (empty($ses)) {
        //      redirect('login','refresh');
         // }
         ?>


<!doctype html>
<html lang="en">

<head>
<title>Data Karyawan</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<script src="<?=base_url()?>assets/vendor/jquery/jquery-3.5.1.min.js"></script> 

<link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="<?=base_url()?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/vendor/sweetalert2/sweetalert2.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/select2.min.css"/>



<!-- MAIN CSS -->
<link rel="stylesheet" href="<?=base_url()?>assets/css/mooli.min.css">

<style>
    td.details-control {
    background: url('<?=base_url()?>assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('<?=base_url()?>assets/images/details_close.png') no-repeat center center;
    }
</style>
</head>
<body>
    
<div id="body" class="theme-cyan">

   
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Page top navbar -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="#"><img src="<?=base_url()?>assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                    </div>
                    <form id="navbar-search" class="navbar-form search-form">
                        <!-- <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button> -->
                        <!-- <input value="" class="form-control" placeholder="Search here..." type="text">                     -->
                    </form>
                </div>
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            
                            </li>                       
                             </ul>
                    </div>
                </div>
               
            </div>
        </nav>
        
        <!-- Main left sidebar menu -->
        <div id="left-sidebar" class="sidebar">
            <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
            <div class="navbar-brand">
                <!-- <a href="index.html"><img src="<?=base_url()?>assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a> -->
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="" align="center">
                        <!-- <img src="<?=base_url()?>assets/images/logo.png" style="border-radius: 50%;width: 180px" class="user-photo" alt="User Profile Picture"> -->
                        <p style="font-size: 12pt">Data Karyawan</p>
                    </div>
                    <div class="">
                  
                    </div>
                </div>  
                <hr style="margin-left: 10px;margin-right: 10px;border : 1px solid #33BAB0">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu animation-li-delay">

                        <li><a href="<?php echo base_url() ?>jabatan"><i class="fa fa-th-list"></i> <span>Jabatan Pegawai</span></a></li>
                        <li><a href="<?php echo base_url() ?>pegawai"><i class="fa fa-male" aria-hidden="true"></i> <span>Pegawai</span></a></li>
                        <li><a href="<?php echo base_url() ?>kontrak"><i class="fa fa-book"></i> <span>Kontrak</span></a></li>
                        
                    </ul>

                        
                </nav>     
            </div>
        </div>

        <!-- Main body part  -->
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <?php echo $body ?>
            </div>
        </div>
        
    </div>

</div>
<!-- Javascript -->
<script src="<?=base_url()?>assets/bundles/libscripts.bundle.js"></script>    
<script src="<?=base_url()?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- Vedor js file and create bundle with grunt  --> 

<script src="<?=base_url()?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 
<script src="<?=base_url()?>assets/vendor/sweetalert2/sweetalert2.min.js"></script><!-- SweetAlert Plugin Js --> 
<script src="<?=base_url()?>assets/js/select2.js"></script><!-- SweetAlert Plugin Js --> 
<script src="<?=base_url()?>assets/js/terbilang/jquery.mask.min.js"></script><!-- SweetAlert Plugin Js  -->


<!-- Project core js file minify with grunt --> 

<script src="<?=base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>
<script type="text/javascript">
	$('#select2').select2();
</script>
</body>
</html>
