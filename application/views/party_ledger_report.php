<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pharmacy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" >
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
                                    <i  aria-hidden="true"></i> Party Ledger Report </h3>
                            </div>
                           
                           <!--  <caption>Order work</caption> -->
                           <input type="hidden" name="com_id" value="<?php echo $party_id; ?>">
<!-- <input type="hidden" name="come_code" value="<?php echo $come_code; ?>"> -->
                            <table id="example2" class="table table-bordered table-hover">
                                <thead align="center">
                                <tr> 
                                   <!--  <th>#</th> --> 
                                    <th >Invoice No.</th>
                                    <th >Date</th>
                                    <th>Amount</th> 
                                    <th>Paid</th>
                                    <th>Remaing</th>                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($order as $item){?>
                                    <tr> 
                                       <!--  <td><?php echo $i; ?></td> --> 
                                        <td><?php echo $item->invoice_id; ?></td>
                                        <td><?php echo $item->date; ?></td>
                                        <td><?php echo $item->total_amount; ?></td>
                                        <td><?php echo $item->paid; ?></td>
                                        <td><?php echo $item->remaining; ?></td>
                                    </tr>
                                    <?php $i++; } ?>
                                  <!--    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br><br> -->
                                   <!--   <b>Total: <?php echo $total->total_amount; ?></b>  -->
                                  
                                    <!-- </td>
                                     </tr> --> 
                                 </tbody> 
                                  <!-- <tr><td></td><td></td><td></td><td><b>Total: <?php echo $total->total_amount; ?></b></td></tr>  -->
                            </table> 
                          <!--   <caption>Stock work</caption> -->
                            <table id="example2" class="table table-bordered table-hover">
                                <thead align="center">
                           
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($stock as $item){ ?>
                                     <tr>
                                        <!-- <td><?php echo $i; ?></td> -->
                                        <td style="width:24.5%;"><?php echo $item->invoice_id; ?></td>
                                        <td style="width: 23.5%;"><?php echo $item->date; ?></td>
                                        <td style="width:19%;"><?php echo $item->total_amount; ?></td>
                                        <td style="width:13%;"><?php echo $item->paid; ?></td>
                                        <td><?php echo $item->remaining; ?></td>
                                    </tr>
                                    <?php $i++; } ?>
                                     <tr>
                                    <td></td>
                                    <td></td>
                                     <td></td>
                                    <td></td>
                                  
                                    <td>
                                    <!-- <b>Total: <?php echo $total->total_amount; ?></b>  -->
                                    <a  href="<?php echo base_url(); ?>Admin_c/party_ledger_pdf/<?php echo $start_date; ?>/<?php echo $end_date; ?>/<?php echo $party_id; ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-file-pdf-o"></i> PDF </a>
                                    </td>
                                    </tr>
                                   <!--  <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><br><br>
                                     <b>Total: <?php echo $total->total_amount; ?></b>  -->
                                  
                                    <!-- </td> -->
                                   <!--  </tr>  -->
                                </tbody>
                                 <!-- <tr><td></td><td></td><td></td><td><b>Total: <?php echo $total->total_amount; ?></b></td></tr> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
       
        <!-- /.content -->
    </div>


  <!-- /.content-wrapper -->
  <?php  $this->load->view('footer'); ?>

  </div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>
 --><script type="text/javascript">
   $("#cliAmount").focus(function () {
            $("#alertDiv").show("slow");
        });
   $("#cliAmount2").focus(function () {
            $("#alertDiv2").show("slow");
        });
</script>
</body>
</html>
