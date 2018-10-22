<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- bootstrap datepicker -->
<!--   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
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
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
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
<body class="hold-transition skin-blue sidebar-mini">
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
                                    <i  aria-hidden="true"></i>  Add Items  </h3>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>
             <?php if($this->session->flashdata('del')){ ?>
               <br>
               <div class="form-group" style="width:560px; margin-left: 150px;">
               <div class="alert alert-danger">
                   <?php echo $this->session->flashdata('del'); ?>
                  </div>
                  </div>
               <?php } ?>
                <?php if($this->session->flashdata('msg')){ ?>
               <br>
               <div class="form-group" style="width:560px; margin-left: 150px;">
               <div class="alert alert-success">
                   <?php echo $this->session->flashdata('msg'); ?>
                  </div>
                  </div>
               <?php } ?>
            <form class="form-horizontal" style="margin-left:120px;" action='<?php echo base_url(); ?>Admin_c/insert_party_items_data' method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Code</label>
                  <div class="col-sm-3">
                    <input type="text" name="code" placeholder="Item code" class="form-control" id="inputEmail3" ><span>(EX:05-008)</span>
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                  <div class="col-sm-3">
                    <input type="text" name="date" value="<?php echo date('Y-m-d');?>" class="form-control" id="inputEmail3" readonly >
                  </div>
                </div> -->
             
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="item_name" class="form-control" id="inputEmail3" >
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Packing/Unit</label>
                  <div class="col-sm-3">
                    <input type="text" name="packing_unit" class="form-control" id="inputEmail3" >
                  </div>
                  <p style="margin-top: 8px;"><span>Unit 1×10×100</span></p>
                </div> -->
<!--                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Filling</label>
                  <div class="col-sm-3">
                    <input type="text" name="filling" class="form-control" id="inputEmail3" >
                  </div>
                  <p style="margin-top: 8px;"><span>Fill 1 QTY</span></p>
                </div> -->
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Retail Rate</label>
                  <div class="col-sm-3">
                    <input type="text" name="retail_rate" class="form-control" id="inputEmail3" >
                  </div>
                </div> -->
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Trade Discount%</label>
                  <div class="col-sm-3">
                    <input type="text" name="trade_discount" class="form-control" id="inputEmail3" >
                  </div>
                </div> -->
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Discount Rate</label>
                  <div class="col-sm-3">
                    <input type="text" name="discount_rate" class="form-control" id="inputEmail3" >
                  </div>
                </div> -->
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Trade Discount Offer</label>
                  <div class="col-sm-3">
                    <input type="text" name="trade_discount_offer" class="form-control" id="inputEmail3" >
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cost Rate</label>
                  <div class="col-sm-3">
                    <input type="text" name="cost_rate" class="form-control" id="inputEmail3" >
                  </div>
                  <p style="margin-top: 8px;"><span>Cost Rate Per Unit</span></p>
                </div>
               <!--  <div class="form-group" style="margin-left:7.5%;">
                  <label for="inputEmail3" class="col-sm-1 control-label">Reorder</label>
                  <div class="col-sm-3">
                    <input type="text" name="reorder" style="width:220px;" class="form-control" id="inputEmail3" >
                  </div>
                </div> -->
                 <!--  <label for="inputEmail3" class="col-sm-2 control-label">Exp/Date1</label>
                   <div class="col-sm-3">
                  <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="exp_date1" class="form-control pull-right" id="datepicker">
                </div>
 -->                <!-- /.input group -->
             <!--  </div>
            </div> -->
        
                  <!-- 
                   <label for="inputEmail3" class="col-sm-2 control-label">Exp/Date2</label>
                  <div class="col-sm-3">
                     <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="exp_date2" class="form-control pull-right" id="datepicker2">
                </div> -->
                <!-- /.input group -->
              <!-- </div>
                  </div> -->

              </div>                 
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party Name</label>
                  <div class="col-sm-6">
                    <select class="form-control party_id" name="party_name" style="width:506px;">
                    <option value=""   required="" selected="">Select Party Name</option>
                    <?php foreach($res as $row) { ?>
                    <option name="party_name" value="<?php echo $row->party_id?>"><?php echo $row->party_name;?></option>
                   <?php } ?>
                  </select>
                  </div>
                  <div class="col-sm-2" style="margin-left:106px;">
                    <input  type="text" name="party_value" class="form-control code" placeholder="Party Code" id="inputEmail3" >
                  </div>

               
                </div>
              <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stock In hand Quantity</label>
                  <div class="col-sm-3">
                    <input type="text" name="stock_in_hand" class="form-control" id="inputEmail3" >
                  </div>
                  <p style="margin-top: 8px;"><span>P.Rate must for stock please</span></p>
                </div> -->
               <!-- <div class="form-group">
              <label class="col-sm-2 control-label">Debit</label>
              <div class="col-sm-3">
              <input type="text" name="debit" class="form-control" id="cliAmount" >
              </div>
               
        
              <label class="col-sm-2 control-label">Credit</label>
              <div class="col-sm-3">
              <input type="text" name="credit" class="form-control" id="cliAmount2" >
              </div>
              
              </div>
              <div id="alertDiv" class="alert alert-info alert-dismissible" style="margin-top: 20px;width: 770px;display: none; margin-left:175px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Tip</h4>
                Enter -ve amount for DEBIT and +ive amount for Credit
              </div> -->
              
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-primary pull-right" style="margin-right:05px;">Add Item</button>
              </div>
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
    
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy;  <a href="<?php echo base_url(); ?>assets/https://adminlte.io">Aun Solutions</a>.</strong> All rights
    reserved.
  </footer>
    <!-- /.content -->
  
</div>


  <!-- /.content-wrapper -->


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
<!-- date-range-picker -->
<!-- <script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<!-- bootstrap datepicker -->

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!--  <script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>  -->

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
    $('#datepicker').datepicker({
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
    $('.party_id').bind('keyup , change',function () {
        var party_id=$(this).val();
        // alert(com_id);
        if(party_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/get_party_data",
                        dataType :  "JSON",
                        data     :  {party_id:party_id},
                        success  :  function (data) {
                          // alert(company_name);
                            // $('.company_id').val(data.com_id);
                            $('.party_id').val(data.party_id);
                            $('.code').val(data.party_code);
                            
                        },

        });
        }
    });

  });

</script>
</body>
</html>
