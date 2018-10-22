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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <!-- Header file -->
  <?php $this->load->view('header_file'); ?>

  <!-- Navbar -->
  <?php $this->load->view('nav'); ?>
  
  
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
   
    <section class="content-header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body " style="background-color: white;">
                            <div class="well"><h3 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i>Party Stock Report </h3>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>
           <form  method="POST" action="<?php echo base_url();?>Admin_c/show_company_stock_report_view" class="form-horizontal">
<div class="box-body">
<!-- <div class="form-group">
<label for="inputEmail3" class="col-sm-3 control-label">Expense Type</label>

<div class="col-sm-7">
<select name="expense_type" class="form-control" required="">
<option>Select Expense Type</option>
<?php foreach($expense as $expense_type){ ?>
<option value="<?php echo $expense_type->expense_name; ?>"><?php echo $expense_type->expense_name; ?></option>
<?php } ?>
</select>
</div>
</div> -->
<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="margin-left:7%;">Select Party</label>
                  <div class="col-sm-4">
                    <select class="form-control party_id" name="party_id" required="">
               
                    <option value="" required="" selected="">Select Party Name</option>
                    <?php foreach($show as $row) { ?>
                    <option value="<?php echo $row->party_id?>"><?php echo $row->party_name?></option>
                   <?php } ?>
                  </select>
                  </div>
              <!--     <div class="col-sm-2" style="margin-left:106px;">
                    <input  type="text" name="company_value" class="form-control code" placeholder="Company Code" id="inputEmail3" >
                  </div> -->
                  
                </div>
<div class="form-group">

<label for="inputEmail3" class="col-sm-3 control-label">Start Date</label>

<div class="col-sm-7">
    <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="start_date" class="form-control pull-right" id="datepicker1" autocomplete="off">
                </div>
                <!-- /.input group -->
              </div></div>
</div> 
<div class="form-group">
<label for="inputEmail3" class="col-sm-3 control-label">End Date</label>

<div class="col-sm-7">
    <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="end_date" class="form-control pull-right" id="datepicker2" autocomplete="off"> 
                </div>
                <!-- /.input group -->
              </div>
</div>
</div> 
<div class="form-group">
<label for="inputPassword3" class="col-sm-3 control-label"></label>
<div class="col-sm-7"> 
<button type="submit" name="submit" class="btn btn-primary pull-left" value="submit">Submit</button>
</div>
</div>
</div>
<!-- /.box-body -->
<!-- /.box-footer -->
</form>
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
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script> -->
<script type="text/javascript">
   $("#cliAmount").focus(function () {
            $("#alertDiv").show("slow");
        });
   $("#cliAmount2").focus(function () {
            $("#alertDiv2").show("slow");
        });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })
     $('#datepicker2').datepicker({
      autoclose: true
    })

   
  })
</script>
<script type="text/javascript">
    $(document).ready(function(){
    // alert('ajhfgy');
    $('.com_id').bind('keyup , change',function () {
        var com_id=$(this).val();
        // alert(com_id);
        if(com_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/get_company_code",
                        dataType :  "JSON",
                        data     :  {com_id:com_id},
                        success  :  function (data) {
                          // alert(company_name);
                            // $('.company_id').val(data.com_id);
                            $('.company_name').val(data.com_name);
                            $('.code').val(data.come_code);
                            
                        },

        });
        }
    });

  });

</script>
</body>
</html>
