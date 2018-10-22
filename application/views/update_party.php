<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eagle Homoeo</title>
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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <style type="text/css">
   .isa_error
   {
    display: none;
    margin:0% 7%;
   }

  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .red{
      border:2px solid red !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <!-- Header file -->
  <?php $this->load->view('header_file'); ?>

  <!-- Navbar -->
  <?php $this->load->view('nav'); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
     <section class="content-header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body " style="background-color: white;">
                            <div class="well"><h4 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i><b> Update Party </b>  </h4>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>
            <!-- <?php if($this->session->flashdata('msg')){ ?>
               <br>
               <div class="form-group" style="width:560px; margin-left: 150px;">
               <div class="alert alert-success">
                   <?php echo $this->session->flashdata('msg'); ?>
                  </div>
                  </div>
               <?php } ?>      -->           
            <form class="form-horizontal" style="margin-left:200px;" action='<?php echo base_url(); ?>Admin_c/update_party_data' method="post">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $res->party_id; ?>">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
                  <div class="col-sm-8">
                    <select class="form-control select2 region_id" name="region_id" required="">
                           <!-- <option selected="" value="">Select Region</option> -->
                           <?php foreach($show as $row) { ?>
                           <option name=region_id" 
                          <?php if($row->region_id == $res->region_party_name) { echo 'selected'; } ?>
                            value="<?php echo $row->region_id; ?>"  class="form-control"><?php echo $row->region_name; ?></option>
                           <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Region Code</label>
                  <div class="col-sm-3">
                    <input type="text" name="region_code" class="form-control region_code" id="inputEmail3" readonly="" value="<?php echo $res->region_party_code; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="party_code" class="col-sm-2 control-label">Party Code</label>
                  <div class="col-sm-3">
                    <input type="text" name="code"  class="form-control" id="party_code" value="<?php echo $res->party_code; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" id="inputEmail3" autocomplete="off" required="" value="<?php echo $res->party_name; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address 1 &nbsp;</label>
                  <div class="col-sm-8">
                    <input type="text" name="one" class="form-control" id="inputEmail3" autocomplete="off" required="" value="<?php echo $res->address_1; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address 2  &nbsp;</label>
                  <div class="col-sm-8">
                    <input type="text" name="two" class="form-control" id="inputEmail3" autocomplete="off" required="" value="<?php echo $res->address_2; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party Contact</label>
                  <div class="col-sm-8">
                    <input type="text" name="phone" class="form-control" id="inputEmail3" autocomplete="off" required="" value="<?php echo $res->phone; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party Debit</label>
                  <div class="col-sm-8">
                    <input type="text" name="debit" class="form-control" id="inputEmail3" autocomplete="off" required="" value="<?php echo $res->debit; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party Credit</label>
                  <div class="col-sm-8">
                    <input type="text" name="credit" class="form-control" id="inputEmail3" autocomplete="off" required="" value="<?php echo $res->credit; ?>">
                  </div>
                </div>
             <!--  <div class="form-group">
              <label class="col-sm-2 control-label">Debit</label>
              <div class="col-sm-3">
              <input type="text" name="debit" class="form-control" id="cliAmount" >
              </div>
               
        
              <label class="col-sm-2 control-label">Credit</label>
              <div class="col-sm-3">
              <input type="text" name="credit" class="form-control" id="cliAmount2" >
              </div>
              
              </div>
              <div id="alertDiv" class="alert alert-info alert-dismissible" style="margin-top: 20px;width: 710px;display: none; margin-left:175px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Tip</h4>
                Enter -ve amount for DEBIT and +ive amount for Credit
              </div> -->
             <!--  <div id="alertDiv2" class="alert alert-info alert-dismissible" style="margin-top: 20px;width: 250px;display: none; margin-left:635px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Tip</h4>
                Enter -ve amount for DEBIT
              </div> -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-flat btn-block pull-right" id="save">Submit</button></div></div>
              </div>

               
            </form>

            <div class="col-sm-3"></div>
            <div class="col-sm-8">
            <div class="isa_error">
            <div class="alert alert-danger fade in">
            <a href="#"  class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> This Code Is Already Registered
            </div>
            </div>
            </div>

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
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>
<script type="text/javascript">
  $(function(){
   $('.select2').select2();
  });
</script>

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
  $('.region_id').on('keyup , change',function(){
  var region_id=$('.region_id').val();
  //alert(region_id);
  $.ajax({
  method:"POST",
  url:"<?php echo base_url(); ?>Admin_c/fetch_unique_region_code",
  dataType:"JSON",
  data:{region_id:region_id},
  success:function(data)
  {
    $('.region_id').val(data.region_id);
    $('.region_code').val(data.region_code);
  }
  });
  });

  $('.isa_error').hide();
  $('#party_code').keyup(function(){
  var party=$('#party_code').val();
  var party_code=parseInt(party);
  $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/check_party_code",
    type:"POST",
    data:{party_code:party_code},
    dataType:"JSON",
    success:function(data)
    {
      if(data=='Code is registered already')
      {
          $('.isa_error').show();
          $('#save').prop('disabled',true);
      }
      else
      {
          $('.isa_error').hide();
          $('#save').prop('disabled',false);
      }
    }
  });
  });
  });
</script>