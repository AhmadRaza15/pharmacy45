<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eagle Homoeo</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- fullCalendar 2.2.5-->

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets1/plugins/datatables/dataTables.bootstrap.css">
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();   ?><!--plugins/datatables/dataTables.bootstrap.css">-->
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets1/plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets1/plugins/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets1/plugins/datatables/responsive.bootstrap.css">
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();   ?><!--plugins/datatables/responsive.dataTables.min.css" />-->
    <link rel="stylesheet" href="<?php echo base_url();   ?>assets1/plugins/datatables/buttons.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>







<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Header file -->
  <?php $this->load->view('header_file'); ?>

  <!-- Navbar -->
  <?php $this->load->view('nav'); ?>
  
    <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
            <section class="content-header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body " style="background-color: white;">
                            <div class="well"><h4 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i> <b>View Company List </b></h4>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>

            <div class="box-body">
              <a href="<?php echo base_url(); ?>Admin_c/add_company" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Generate New company
                            </a> <br><br>
              <?php if($this->session->flashdata('msg')){ ?>
               <br>
               <div class="form-group" style="width:560px; margin-left: 250px;">
               <div class="alert alert-success">
                   <?php echo $this->session->flashdata('msg'); ?>
                  </div>
                  </div>
               <?php } ?>
                <?php if($this->session->flashdata('del')){ ?>
               <br>
               <div class="form-group" style="width:560px; margin-left: 250px;">
               <div class="alert alert-danger">
                   <?php echo $this->session->flashdata('del'); ?>
                  </div>
                  </div>
               <?php } ?>

               <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>#</th>
                  <th>Company Name</th>
                  <th>Company Code</th>
                  <th style="text-align:center;">Action</th>  
                </tr>
                </thead>
                <tbody>
                  <?php if (count($res) > 0) { $i=1; foreach($res as $row){ ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row->company_name; ?></td>
                  <td><?php echo $row->company_code; ?></td>
                  <td style="text-align: center;">
                  <a href="<?php echo base_url(); ?>Admin_c/edit_company/<?php echo $row->company_id; ?>" ><button class="btn btn-primary" type="submit" >Edit</button></a> &nbsp;<a onClick="return doconfirm()" href="<?php  echo base_url(); ?>Admin_c/delete_company/<?php echo $row->company_id; ?>" class="del"><button class="btn btn-danger" type="submit" >Delete</button></a>
                  </td> 
                </tr>
                 <?php  $i++; }
               }else{
                //echo "<h3 style='text-align: center'>No Data Available</h3>";
               } 

               ?>
                </tbody>
              </table>
            </div>
            </div>
                                 </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </section>

    </div>

  <?php  $this->load->view('footer'); ?>
  </div>









<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url(); ?>assets1/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets1/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets1/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets1/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets1/dist/js/app.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets1/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets1/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets1/plugins/datatables/jszip.min.js"></script>
<!-- Page Script -->
<script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
</script>
<script>


    $(document).ready(function() {
        $('#example1').DataTable( {
           
            responsive:true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print','pdf'
            ]
        } );

        $('.select2').select2();
    });

</script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets1/dist/js/demo.js"></script>
</body>
</html>

