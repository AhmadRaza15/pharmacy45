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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                            <div class="well"><h4 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i> <b> Cash Receipt Voucher</b>  </h4>
                            </div>
                             <br>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
            <form class="form-horizontal"  action='<?php echo base_url(); ?>Admin_c/insertReceivedVoucher' method="post">
              <div class="box-body">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-2 control-label" >VNO</label>
                  <div class="col-sm-3">
                     <input type="text" name="number" class="form-control input-sm num" value="<?php echo  $last_id; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                  <div class="col-sm-3">
                  <!-- <div class="form-group"> -->
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="date" class="form-control pull-right" id="datepicker2" autocomplete="off" value="<?php echo date('m/d/Y') ?>">
                </div>
               <!--  </div> -->
                  </div>
                </div>
            
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-2 control-label" >Party Code</label>
                  <div class="col-sm-3">
                     <input type="text" name="code" class="form-control input-sm c" autocomplete="off">
                  </div>
                </div> 

               <!--   <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-2 control-label" >check</label>
                  <div class="col-sm-3">
                     <input type="text" name="code" class="form-control input-sm p" autocomplete="off">
                  </div>
                </div>     -->           
 

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party Name</label>
                  <div class="col-sm-6">
                    <select class="form-control select2 party_name" name="party_name" required="" >
                    <option  value="" >Select Party </option>
                    <?php foreach($party as $row) { ?>
                    <option name="party_name" value="<?php echo $row->party_id?>"><?php echo $row->party_name. ' ';?>
                    <?php echo  $row->address_1.' ' .$row->address_2; ?>
                    <?php echo $row->phone; ?></option>
                   <?php } ?>
                  </select>
                  </div>
                </div>

             
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Debit Amount</label>
                  <div class="col-sm-3">
                    <input type="text" name="t_amount" class="form-control t_amount" id="inputEmail3" readonly="" >
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Credit Amount</label>
                  <div class="col-sm-3">
                    <input type="text" name="t_paid" class="form-control t_paid" id="inputEmail3" autocomplete="off">
                  </div>
                  
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dicount Amount</label>
                  <div class="col-sm-3">
                    <input type="text" name="discount" class="form-control discount" id="inputEmail3" autocomplete="off"  >
                  </div>
                  
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Balance Amount</label>
                  <div class="col-sm-3">
                    <input type="text" name="t_remain" class="form-control t_remain" id="inputEmail3" readonly="" >
                  </div>
                  
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Remaining Debit</label>
                  <div class="col-sm-3">
                    <input type="text" name="rb" class="form-control rb"  readonly="">
                  </div>
                </div>
              
              </div>                 

              <div class="box-footer">
                <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
               <button type="submit" class="btn btn-primary pull-right btn-flat btn-block  save" >Submit</button></div>
                <div class="col-sm-2">
               <button type="button" class="btn btn-primary pull-right btn-flat btn-block">Print</button></div>
                <div class="col-sm-2">
               <button type="buttom" class="btn btn-primary pull-right btn-flat btn-block" ><a  style="color:white;" href="<?php echo base_url(); ?>Admin_c">Return Back</a></button></div>
              
              </div>
              </div>
              <!-- /.box-footer -->
            </form>
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
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.min.js"></script>
<!--  <script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>  -->

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
                            $('.party_id').val(data.party_id);
                            $('.code').val(data.party_code);
                            
                        },

        });
        }
    });
    $('.discount').change(function(){
    var t_amount=$('.t_amount').val();
    var t_paid=$('.t_paid').val();
    var discount=$('.discount').val();
    var t_remain=(t_paid - t_amount);
    //alert(t_remain);
    var dis=((t_paid/100) * discount);
    // alert(dis);
    $('.t_remain').val((-1) * (t_remain - dis));
    $('.t_paid').prop('readonly',true);
    });
    $('.party_name').bind('keyup , change',function(){
    var party_name=$('.party_name').val();
    //alert(party_name);
    $.ajax({
      method:"POST",
      url:"<?php echo base_url(); ?>Admin_c/fetch_unique_party_pending",
      dataType:"JSON",
      data:{party_name:party_name},
      success:function(data){
        $('.party_name').val(data.company_id);
        $('.t_amount').val((-1) * data.remain);
      }
    });
    });

  });

</script>

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
  $('#datepicker2').datepicker({
    autoclose: true
  })
  $('.rb').click(function(){
    //alert('fa');
  var debit=$('.discount').val();
  var t_amount=$('.t_remain').val();
  var x=(t_amount * debit)/100;
  // alert(x);
  $('.rb').val(t_amount-x);
  });
  $('.c').on('keyup , change',function(){
  var c=$('.c').val();
  // alert(c);
  $.ajax({
  url:"<?php echo base_url(); ?>Admin_c/fetch_party_by_code",
  method:"POST",
  dataType:"JSON",
  data:{c:c},
  success:function(data)
  {
    if(data != '' && $('.c').val() !='')
    {
      $('.p').val(data.party_name);
      $('.select2 option').each(function(){
      if (this.value == data.party_id) {
      $(this).attr('selected','selected');;
      // $(".party_name").val().change();
      // $('.party_name').val($(this));
    }
});
    }
    else
    {
      $('.select2').val('');
    }

  }
  });
  });
  });
</script>