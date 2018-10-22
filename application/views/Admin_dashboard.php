<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eagel Homoeo</title>
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
                            <div class="well"><h3 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i> Welcome To Dashboard </h3>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>

            <div class="box-body">
              <!-- <a href="<?php echo base_url(); ?>Admin_c/invoice_total_Stock" target="_blank" class="btn btn-primary pull-right"  ><i class="fa fa-print"></i> Print</a> -->
                            </a> <br><br>
             
              <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
        <div class="box-body" style="background-color: white; min-height:400px;">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
           <div class="small-box bg-green">
            <div class="inner">
              <h3><?php  echo 'Stock' ?></h3>

              <p>In Hand</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>Admin_c/total_Stock" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">

          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $order; ?></h3>

              <p>Total Pending Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url(); ?>Admin_c/view_order" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!-- small box -->
         <!--  <div class="small-box bg-green">
            <div class="inner">
              <h3><?php  echo $party; ?></h3>

              <p>Total Parties</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url(); ?>Admin_c/view_party" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
        
        </div>
        <!-- ./col -->
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
        <!--   <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $items; ?></h3>

              <p>Total Items</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>Admin_c/view_items" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
      <!--     <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $regions; ?></h3>

              <p>Total Regions</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>Admin_c/view_region" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
        
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
     <!--      <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $daily; ?></h3>

              <p>Today Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>Admin_c/daily_based_orders" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <!-- ./col -->

      </div>
    </div>
    </div>
  </div>

            </div>
            <!-- /.box-body -->
                                 </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">



            </div>
            <!-- /.row -->


            <div class="row">

                <div class="col-md-12">


                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>




  <!-- /.content-wrapper -->
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