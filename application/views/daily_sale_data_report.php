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
                                    <i  aria-hidden="true"></i> DAILY SALE REPORT </h3>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>
           <form  method="POST" action="<?php echo base_url();?>Admin_c/daily_sale_report_pdf" class="form-horizontal">
           <div class="box-body">

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
<script type="text/javascript">
    $(document).ready(function(){
    // alert('ajhfgy');
    // $('.item_name').bind('keyup , change',function(){
    // var item_name=$('.item_name').val();
    // alert(item_name);
    // });
    // $('.com_id').bind('keyup , change',function () {
    //     var com_id=$(this).val();
    //     // alert(com_id);
    //     if(com_id!=""){
    //     $.ajax({
    //                     method   :  "POST",
    //                     url      :  "<?php echo base_url(); ?>Admin_c/get_unique_company_item_detail",
    //                     // dataType :  "JSON",
    //                     data     :  {com_id:com_id},
    //                     success  :  function (data) {
                          //alert(data);
                          // chl me dekhta hu bki thnx for coming
                          // teri v L hahahahah nas jachalok phr ma ja rha hn ab ok
                          // var d=JSON.parse(data);
                         // $('.company_name').val(data.company_name);
                        // $('.item_name').empty();
                         // $('.item_name').show();
                          // alert(company_name);
                            // $('.company_id').val(data.com_id);
                            // $.each(data,function(item_id,item_name)
                            //   {
                            //     $('.item_name').append($("<option></option>").attr("value",item_id).text(item_name));

                            //  
                          //   $.each(data,function(item_id,item_name)
                          // {

                            
                          //   $('.item_name').append($("<option></option>",{
                          //   value:item_id,
                          //   text:item_name

                          //   }));

                          // });

         //                 var res=''; 
         //              $.each(d,function(i,v){
         //  res +="<option value="+v.item_id+">"+v.item_name+"</option>";
          
         // });
         //              $('.item_name').html(res);
         //console.log(res);
         


                            
                            // $('.item_name').val(data.item_name);
                            
                         // },

        // });
   

  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.party_id').on('keyup , change',function(){
    var party_id=$('.party_id').val();
    //alert(party_id);
    $.ajax({
      url:"<?php echo base_url(); ?>Admin_c/get_party_items_data",
      method:"POST",
      dataType:"JSON",
      data:{party_id:party_id},
      success:function(data){
        $('.item_name').html('<option value="" required="" selected="">Select Item</option>');
         $.each(data.options, function(i, item) {
                                $('.item_name').append($('<option>', {value:item.item_name, text:item.item_name}));
                            });

      }

    });
    });
  });
</script>
</body>
</html>
