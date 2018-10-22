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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('saas/my_css.css');?>">
</head>
<!-- <style type="text/css"></style> -->
<body class="hold-transition skin-blue sidebar-mini" >

  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="container" style="width:100%; margin:0px; padding:0px;">
    <!-- Content Header (Page header) -->
   
     <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">Update Order</h3>
         <!--      <a href="<?php echo base_url('Admin_c/view_order')?>" class="pull-right"><button class="btn btn-primary btn-sm">View Orders</button></a> -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <?php if($this->session->flashdata('error')!=""){?>
                                    <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                     <strong>Congratulation!</strong> <?php echo $this->session->flashdata('error');?>
                                    </div>
                            <?php };?>
            <form class="form-horizontal" style="margin:0px; padding:0px;"   action='<?php echo base_url(); ?>Admin_c/update_invoice/<?php echo $is_printed; ?>' method="post">
            <div class="box-body" style="padding:0px; margin-left:0px;">
            <input type="hidden" name="number" value="<?php echo $id; ?>">
              
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-2 control-label" >Order ID</label>
                  <?php //foreach($sale as $row){?>
                  <div class="col-sm-2">
                     <input type="text" name="number" class="form-control input-sm num" value="<?php echo $sale[0]->number;?>" readonly="">
                  </div>
                  <?php // }?>
              
                  <label for="inputEmail3" class="col-sm-1 control-label" style="margin-left:425px;">Date </label>
                  <div class="col-sm-2">
                     <input type="text" name="date" value="<?php echo date('D. M d. Y'); ?>" class="form-control input-sm"  readonly>
                  </div>
                </div>
                <!--  <option value="" required="" seletecd=""><?php echo $sale[0]->com_name;  ?></option> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company</label>
                  <div class="col-sm-4">
                    <input type="text" name="debit" value="<?php echo $sale[0]->party_name;  ?>" class="form-control debit" readonly="readonly" style="width:300px; "  readonly="">
                  <input type="hidden" name="company_id" class="company_name">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">Company Address</label>
                  <?php //foreach($sale as $row){?>
                  <div class="col-sm-4">
                    <input type="text" name="debit" value="<?php echo $sale[0]->address_1; ?>" class="form-control debit" readonly="readonly" style="width:394px; "  >
                  </div>
                  <?php // }?>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                  <?php //foreach($sale as $row){?>
                  <div class="col-sm-4">
                    <input type="text" name="phone" class="form-control phone" readonly="readonly"  style="width:306px;" readonly="" value="<?php echo $sale[0]->address; ?>">
                  </div>
                  <?php //}?>
               
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Order Description</label>
                  <?php //foreach($sale as $row) { ?>
                  <div class="col-sm-4">
                    <input type="text" name="desc" class="form-control"   style="width:306px;"  value="<?php echo $sale[0]->desc; ?>" readonly="">
                  </div>
                  <?php //} ?>
                 <!-- <label for="inputEmail3" class="col-sm-2 control-label">Delivery Date</label>
                  <div class="col-sm-4">
                    <input type="date" name="deliver_date" class="form-control" value="" required=""  style="width:394px"; placeholder="Date Format is Month-Day-Year" >
                  </div> -->    
                </div>
                <br><br><br>
            <table style="margin-top:48px;"  width="100%" class="table table-responsive table-condenced" border="1">
<thead style="display:block;background:#0097AC;">
<tr style="display:table;table-layout:fixed;">

<td width="11%" style="vertical-align:middle;">
<div class="form-group" style="padding:0;margin:0;">
<label>Item Name</label>
</div>
</td>

<td class="text-center" width="7.5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Quantity Ordered</label></td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Unit Price</label></td>
<td class="text-center"  width="2%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Total Price</label></td>
<!-- <td width="1%" class="text-center" style="padding-left:9px;vertical-align:middle;background:#000;border:0;color:#fff;"> -->
<!-- <i class="fa fa-star-o" style="position:absolute;top:30px;right:4px;"> </i> -->

</tr>
</thead>

<tbody style="background:#fff;overflow-y:scroll;height:195px;overflow-x:hidden;display:block;margin-top:5px;">
<?php foreach($sale as $res) { ?>
<tr style="display:table;table-layout:fixed;" id="<?php echo $res->id; ?>">
<input type="hidden" name="id[]" value="<?php echo $res->id; ?>">
<td width="11%" style="border-bottom:1px  solid;vertical-align:middle;padding-top:0;padding-bottom:0;">
  <input class="form-control input-sm item_name" name="item_name[]" value="<?php echo $res->item_name; ?>" readonly>
<!-- <select class="form-control input-sm item_name" name="item_name[]">
<option></option>
<?php foreach($item as $row){ ?>
<option value="<?php echo $row->item_id; ?>" <?php if($res->item_name==$row->item_id){ echo 'selected'; } ?>>
  <?php echo $row->item_name; ?>
  </option> 
<?php } ?>
</select> -->
</td>
<td class="text-center" width="7.5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
<input type="text" value="<?php echo $res->quantity; ?>" name="q_order[]" class="form-control qo input-sm q_order" data-qorder="<?php echo $res->id; ?>" id="q_order<?php echo $res->id; ?>">
</td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
<input type="text" value="<?php echo $res->unit_price; ?>" name="u_p[]" class="form-control input-sm up u_p" data-up="<?php echo $res->id; ?>" id="u_p<?php echo $res->id; ?>"></td>
<td class="text-center" width="2%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
<input style="margin:0px; padding: 0px;" type="text" name="t_p[]" value="<?php echo $res->total; ?>" class="form-control con input-sm t_p<?php echo $res->id; ?>" id="t_p<?php echo $res->id; ?>" >
   <?php if($is_printed=="printed") { ?>
   <div><span  class="glyphicon glyphicon-ring glyphicon-remove delete"  style="float: right;font-size: 10px;position: relative;left: 9px;top: -20px;cursor: pointer; color: #fff; border-radius: 20px;  " data-delete="<?php echo $res->id; ?>"></span></div>
 <?php } ?>
</td>
<input type="hidden" name="a_p[]" class="form-control ss input-sm a_p">

<!-- <td width="1%"> -->
  <!-- <a href="<?php echo $res->id; ?>" class="btn btn-danger">Delete</a> -->
<!-- </td>

 -->

</tr>
    
<?php } ?>
</tbody>

</table>
               
                  
<div class="col-md-12" style="border-bottom:2px solid;border-left:2px solid;border-right:2px solid;padding:0; margin:0px;background:#0097AC;">
<div class="col-md-12" style="height:85px;">
<div class="form-group"> 
<!-- <div class="col-md-3" style="margin-top:20px; visibility: hidden;"> <button type="button" class="btn btn-success add_row" disabled="">Add Row</button> </div> -->
<div class="col-md-12" style="margin-top:0px;">
  <div class="col-md-2"></div>
 <!--  <div class="col-md-2"><label>Discount(In %)</label>
<input type="text" name="discount" class="form-control discount" placeholder="Discount"></div> -->
<div class="col-md-3"><label>Total Price</label>
<input type="text" name="tt_P" placeholder="Total Price" value="<?php echo $total_data; ?>" class="form-control t_price" ></div>
<?php
if($is_printed=="printed")
{
?>
<div class="col-md-2"><label>Paid</label>
<input type="text"  name="pt_P" class="form-control t_paid" placeholder="Paid" id="t_paid">
</div>
 <div class="col-md-2" >
  <label>Remaining</label>
<input type="text" name="rt_P" class="form-control t_remain" placeholder="Remaining" readonly="">
</div>
<?php
}
?>
<!-- <div class="col-md-3" style="margin-top: 25px; ">
<input type="text" name="t_P" class="form-control t_paid" placeholder="Paid">
</div> -->
<!-- <div class="col-md-3" style="margin-top: 25px;">
<input type="text" name="t_P" class="form-control t_remain" placeholder="Remaining">
</div>  -->
<div class="col-md-2 pull-right" style="margin-top: 25px; "> 
<button type="submit" class="btn btn-success pull-right btn_save">Save</button>
</div>
</div>
</div>
</div>
<!-- <div class="form-group"> 
<div class="col-md-6"> </div>
<div class="col-md-6"> 
<input type="text" name="t_P" class="form-control t_p">
</div>
</div> -->
</div>          
               
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total Price</label>
                  <div class="col-sm-6">
                    <input type="text" name="com_code" class="form-control" id="inputEmail3" style="width:506px;" >
                  </div>
                  
                </div> -->
              
               
              </div>
              <!-- /.box-body -->
            
              <!-- /.box-footer -->
            </form>
          </div>

    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
 <!--  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo base_url(); ?>assets/https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

  

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
<script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    // alert('ajhfgy');
    $('.delete').click(function(){
      var row_id = $(this).data('delete');
      deleteRow(row_id)
      //var invoice_id=$('.num').val();
      //alert(invoice_id);
      // $.ajax({
      //   url : '<?php echo site_url("Admin_c/delete_row"); ?>',
      //   type : 'POST',
      //   data : {row_id:row_id},
      //   success : function(data){
      //     location.reload();
      //   }
      // });

      function deleteRow(rowid)  
      {   
          var row = document.getElementById(rowid);
          row.parentNode.removeChild(row);
      }
    });
    $('.com_id').bind('keyup , change',function () {
        var com_id=$(this).val();
        if(com_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/get_company_detail",
                        dataType :  "JSON",
                        data     :  {com_id:com_id},
                        success  :  function (data) {
                          // alert(company_name);
                             $('.company_name').val(data.data.com_id);
                            //$('.company_name').val(data.data.com_name);
                             $('.com_id').attr('disabled', true);
                          
                            $('.phone').val(data.data.phone);
                            $('.debit').val(data.data.come_address1);
                            // $('.credit').html(data.customer_name);
                            $('.credit').val(data.data1.remaining);
                            $(".add_row").prop('disabled',false);
                            $(".add_row").attr('disabled',false);
                        },

        });
        }
          else
        {
          alert("Select Company Please");
        }
        
    });

   

  });

</script>

<script>

$(document).ready(function() {
   

$('.select2').select2();

date_input.datepicker({
format: 'mm/dd/yyyy',
container: container,
todayHighlight: true,
autoclose: true,
});
               
});
                
</script>


<script type="text/javascript">
$(document).ready(function(){
$('.q_order').mouseenter(function(){  
  var id = $(this).data('qorder');
  $('#q_order'+id+' , #u_p'+id+'').keyup(function(){
  var sum = 0;
  var up  = 0;
  var q_order = $('#q_order' + id).val(); 
  var u_price = $('#u_p' + id).val();  
  $('.t_p' + id).val(q_order * u_price);
  $('.con').each(function(){
    sum += +$(this).val();
  });   
  $('.t_price').val(sum);

  $('.up').each(function(){
  up += +$(this).val();

  }); 

 // $('.t_paid').val(up.toFixed(2));

  // var t = $('.t_price').val();
  // var p = $('.t_paid').val();
  // $('.t_remain').val(t - p);

  $('.t_paid').keyup(function(){
  var t = $('.t_price').val();
  var p = $('.t_paid').val();
  $('.t_remain').val(t - p);
  });

  }); 
  }); 
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
  $('.discount').change(function(){
   var all = $('.t_price').val();
   //alert(all);
   var discount = $('.discount').val();
   var dis=(all * discount)/100;
   if (dis) {
    $('.t_price').val(all - dis);
    $('.discount').attr('readonly',true);
   }
   
 }); 
  });
 
</script>
<!-- <script type="text/javascript">
$(document).ready(function(){
$('.t_paid').change(function(){
var remain=$('.t_remain').val();
var t_paid=$('.t_paid').val();
if(t_paid)
{
  $('.t_remain').val()
}

});
});
</script> -->
</body>
</html>
