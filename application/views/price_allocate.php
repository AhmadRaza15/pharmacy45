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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
     
.isa_info, .isa_success, .isa_warning, .isa_error {
margin: 6px 0px;
padding:6px;
 
}
.isa_info {
    color: #00529B;
    background-color: #BDE5F8;
}
.isa_success {
    color: #4F8A10;
    background-color: #DFF2BF;
}
.isa_warning {
    color: #9F6000;
    background-color: #FEEFB3;
}
.isa_error {
    color: #D8000C;
    background-color: #FFD2D2;
    display: none;
}
.isa_info i, .isa_success i, .isa_warning i, .isa_error i {
    margin:0px 0px;
    font-size:2em;
    vertical-align:middle;
}
  </style>
  </style>
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
                                    <i  aria-hidden="true"></i> Price Allocation  </h3>
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
            <form class="form-horizontal" style="margin-left:120px;" action='<?php echo base_url(); ?>Admin_c/insert_price_data' method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                  <div class="col-sm-3">
                    <input type="text" name="date" value="<?php echo date('d-m-Y');?>" class="form-control" id="inputEmail3" readonly >
                  </div>
                </div>
                
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company</label>
                  <div class="col-sm-6">
                    <select class="form-control party select2" name="party_name" style="width:506px;" required="">
                    <optgroup label="Company">
                    <option value="" selected="">Select</option>
                    <?php foreach($company as $row) { ?>
                    <option name="party_name" value="<?php echo $row->company_id?>"><?php echo $row->company_name;?></option>

                   <?php } ?>
                   </optgroup>
                   <optgroup label="Party">
                    <?php foreach($party as $b) { ?>
                    <option  name="party_name" value="<?php echo 'p-'.$b->party_id?>"><?php echo $b->party_name;?></option>
                   <?php } ?>
                   </optgroup>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item</label>
                  <div class="col-sm-6">
                    <select class="form-control item_id select2" name="item_name" style="width:506px;" required="" disabled="">
                   
                    <option required="" value="" selected="">Select Item Name</option>
                   <!--   <?php  foreach($res as $row) { ?> -->
                     <option  value="<?php echo $row->item_id; ?>"><?php echo $row->item_name;?></option> 
                    <!-- <?php  } ?>   -->
                  </select>
                  </div>
                </div>
               <!--   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Item Code</label>
                  <div class="col-sm-3">
                    <input type="text" name="code" class="form-control code" id="inputEmail3" >
                  </div> -->
               <!--    <p style="margin-top: 8px;"><span>Cost Rate Per Unit</span></p> -->
                <!-- </div> -->
               
              <!--   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cost Rate</label>
                  <div class="col-sm-3">
                    <input type="text" name="cost_rate" class="form-control" id="inputEmail3" >
                  </div>
                  <p style="margin-top: 8px;"><span>Cost Rate Per Unit</span></p>
                </div> -->

               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sale Rate</label>
                  <div class="col-sm-3">
                    <input type="text" name="sale_rate" class="form-control" id="inputEmail3" required="">
                  </div>
                <!--   <p style="margin-top: 8px;"><span>Cost Rate Per Unit</span></p> -->
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Purchase Rate</label>
                  <div class="col-sm-3">
                    <input type="text" name="purchase_rate" class="form-control" id="inputEmail3" required="">
                  </div>
             <!--      <p style="margin-top: 8px;"><span>Cost Rate Per Unit</span></p> -->
                </div>

              

              
              </div>                 
             
            
              
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">
                <button type="submit" class="btn btn-primary pull-right"  id="save">Submit</button></div></div>
              </div>
              <!-- /.box-footer -->
            </form>
             </div>

              <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div class="isa_error">
                 <i class="fa fa-warning"></i>
                 This Item Is Already Registered To Selected Party!
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
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.min.js"></script>  
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
    
    $('.select2').select2();
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
                            $('.party_id').val(data.info.party_id);
                            $('.code').val(data.info.party_code);
                            $('.item_id').html('<option value="" required="" selected="">Select Item Name</option>');
          // // $.each(data.options, function(i, item){
          // // $('.item_id').append($('<option>', {value:item.item_id, text:item.item_name}));
          // // });
                        $.each(data.options, function(i, item) {
                                $('.item_id').append($('<option>', {value:item.item_id, text:item.item_name}));
                            });
                            
                        },

        });
        }
    });
    $('.party').on('keyup , change',function(){
    $('.item_id').prop('disabled',false);
    });
    $('.item_id').on('change' ,function(){
    var party=$('.party').val();
    // alert(party);
    var item=$('.item_id').val();
    $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/generate_price_check",
    method:"POST",
    data:{item:item,party:party},
    success:function(data){
      if(data == 'exists'){
        $('.isa_error').show();
        $('#save').css('visibility','hidden');
      }
      else{
        $('.isa_error').hide();
        $('#save').css('visibility','visible');
      }
    }
   });
    });

  });

</script>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    // $('.item_name').bind('keyup , change',function(){
    //  var item_name=$(this).val();
    //  if(item_name!='')
    //  {
    //   $.ajax({
    //     method:"POST",
    //     url:"<?php echo base_url(); ?>Admin_c/fetch_unique_code",
    //     dataType:"JSON",
    //     data:{item_name:item_name},
    //     success :function(data)
    //     {
    //       $(".code").val(data.code);
    //     }
    //   });
    //  }
    // });
    $('.party_id').on('keyup , change',function(){
      var party_id=$(this).val();
      alert(party_id);
      $.ajax({
        type:"POST",
        url:"<?php echo base_url(); ?>Admin_c/fetch_unique_party_items",
       // dataType:"JSON",
        data:{party_id : party_id},
        success:function(data){
          $('.item_id').html('<option value="" required="" selected="">Select Item Name</option>');
          // // $.each(data.options, function(i, item){
          // // $('.item_id').append($('<option>', {value:item.item_id, text:item.item_name}));
          // // });
           $.each(data.options, function(i, item) {
                                $('.item_id').append($('<option>', {value:item.item_id, text:item.item_name}));
                            });
          // var data = JSON.parse(data);
          // if (data==false) {
          //                       var output = [];
          //                       output.push('<option value="" selected disabled>No Section Available</option>');
          //                       $('.item_id').html(output.join(''));
          //                   }
          //                   else  
          //                   {   
          //                       var output = [];
          //                       output.push('<option value="" selected disabled>Please Select  item </option>');
          //                       $.each(d, function(i, v)
          //                       {
          //                           output.push('<option value="'+ v.item_id +'">'+ v.item_name +'</option>');
          //                       });
          //                   $('.item_id').html(output.join(''));
          //                 }

        },
      });
    });
  });
</script> -->
</body>
</html>
