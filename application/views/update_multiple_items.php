<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eagle Homoeo</title>
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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
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

  <style type="text/css">

  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('header_file'); ?>
  <?php $this->load->view('nav'); ?>
  <div class="content-wrapper" >
       <section class="content-header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body " style="background-color: white;">
                            <div class="well"><h3 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i>  Update Item For Customer  </h3>
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
            <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <form class="form-horizontal"  action='<?php echo base_url(); ?>Admin_c/update_multiple_party_items' method="post">
              <div class="box-body">

                <input type="hidden" name="id" value="<?php echo $res->id; ?>">
            
             
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item</label>
                  <div class="col-sm-8">
                   <input type="text" id="code" class="form-control"  value="<?php echo $res->item_name; ?>" readonly="">
                  </div>
                 
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item Code</label>
                  <div class="col-sm-4">
                  <input type="text" id="code" class="form-control" value="<?php echo $res->code; ?>" readonly="">
                  </div>
                </div>
            
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item Unit</label>
                  <div class="col-sm-4">
                  <input type="text" id="unit" class="form-control" value="<?php echo $res->packing_unit; ?>" readonly/ >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item Brand</label>
                <div class="col-sm-4">
                <input type="text" id="brand" value="<?php echo $res->brand_name; ?>" class="form-control" readonly/ >
                </div>
                </div>


                         
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party </label>
                  <div class="col-sm-8">
                    <input type="text" id="brand" value="<?php echo $res->party_name; ?>" class="form-control" readonly/ >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Purchase Rate</label>
                <div class="col-sm-4">
                <input type="number" id="" value="<?php echo $res->purchase; ?>" name="purchase" class="form-control" required="">
                </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sale Rate</label>
                <div class="col-sm-4">
                <input type="number"  value="<?php echo $res->sale; ?>" name="sale" class="form-control" required="" >
                </div>
                </div>
              <!--   <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label">Party Code</label>
                  <div class="col-sm-8" >
                    <input  type="text" name="party_code" class="form-control code" placeholder="Party Data" id="inputEmail3" readonly="">
                  </div>
                </div> -->
           
              <div class="box-footer">
                <div class="col-sm-2"></div>
                <div class="col-sm-8" >
                <a href="<?php echo site_url('Admin_c/view_party_multiple_items'); ?>" class="btn btn-primary btn-md" role="button" aria-disabled="true">View Multiple Items</a>
                <button type="submit" class="btn btn-primary pull-right" id="save">Update</button>
              </div>
            </div>
            </form>
          </div>

         <!--   <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div class="isa_error">
                 <i class="fa fa-warning"></i>
                 This Item Is Already Registered To Selected Party!
                 </div>
              </div>
            </div> --> 
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <div class="isa_error">
            <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> This Item Is Already Registered To Selected Party
            </div>
            </div>
          </div>

          <div class="col-sm-2"></div>
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
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.min.js"></script>
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

</body>
</html>
<script>
  $(function () {
    //Initialize Select2 Elements
    
    $("select").select2();
    //$(".select2").addClass("hidden");
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
     $('#datepicker2').datepicker({
      autoclose: true
    })

   

    //alert('ajhfgy');
    $('.com_id').bind('keyup , change',function () {
        var com_id=$(this).val();
         //alert(com_id);
        if(com_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/get_party_code",
                        dataType :  "JSON",
                        data     :  {com_id:com_id},
                        success  :  function (data) {
                          // alert(company_name);
                            // $('.company_id').val(data.com_id);
                            $('.company_name').val(data.party_name);
                            $('.code').val(data.party_code);
                            
                        },

        });
        }
    });
  

    $('.brand_id').bind(' change ',function () {
    var brand_id=$(this).val();
        //alert(brand_id);
        if(brand_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/fetch_unique_brand",
                        dataType :  "JSON",
                        data     :  {brand_id:brand_id},
                        success  :  function (data) {
                          // alert(company_name);
                            // $('.company_id').val(data.com_id);
                            $('.item_brand').val(data.brand_name);
                            $('.brand_code').val(data.brand_code);
                            
                        },

        });
        }
    });
  

  $('.com_id').prop('disabled',true);
  $('.item_id').on('change',function(){
  $('.com_id').prop('disabled',false);
  });
  $('#code_error').hide();
  $('#data-code').on('keyup , change',function(){
  var code=$('#data-code').val();
  $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/item_code_check",
    method:"POST",
    data:{code:code},
    success:function(data){
      if(data== 'Code is registered already'){
        $('#code_error').show();
        $('#save').css('visibility','hidden');
      }
      else{
        $('#code_error').hide();
        $('#save').css('visibility','visible');
      }
    }
  });
  });
  $(".select2 option #check").css("color","red");

  //check is item already alloted to party
  $('.isa_error').hide();
  $('.com_id').on('change',function(){
  var item_id=$('.item_id').val();
  var com_id=$('.com_id').val();
  $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/check_party_items_list",
    type:"POST",
    data:{item_id:item_id,com_id:com_id},
    dataType:"JSON",
    success:function(data)
    {
      if(data=='exists')
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
  $('#item_id').change(function(){
  var item_id=$('#item_id').val();
  $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/item_details",
    method:"POST",
    dataType:"JSON",
    data:{item_id:item_id},
    success:function(data)
    {
      $('#code').val(data.code);
      $('#unit').val(data.packing_unit);
      $('#brand').val(data.brand_name);
    }
  });
  });
  });
</script>